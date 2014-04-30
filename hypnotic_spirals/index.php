<?php 
### WORKS IN CHROME/WEBKIT ###

$photo = 'false';
$time = '2.00';
$direction = 'normal';
$scale_1 = '';

if(isset($_GET['photo'])) $photo = 'spirals/'.basename($_GET['photo']);
if(isset($_GET['time'])) $time = floatval($_GET['time']);
if(isset($_GET['flip'])) $scale_1 = ' scaleX(-1)';
if(isset($_GET['reverse'])) $direction = 'reverse';

if(file_exists($photo)) { ?>

<!DOCTYPE html>
<html>
<head>

<style>
.rotar1 {
position:absolute;
margin:auto;
left:0; top:0; bottom: 0; right: 0;


-webkit-animation-name: myfirst;               /* keyframes' name */
-webkit-animation-play-state: running;         /* running | paused */
-webkit-animation-timing-function: linear;     /* linear | ease */
-webkit-animation-direction: <?php echo $direction; ?>;           /* normal | alternate | reverse */
-webkit-animation-duration: <?php echo $time; ?>s;
-webkit-animation-delay: 0s;
-webkit-animation-iteration-count: infinite;
}

@-webkit-keyframes myfirst
{
from {-webkit-transform:rotate(0deg) <?php echo $scale_1; ?>;}
to {-webkit-transform:rotate(360deg) <?php echo $scale_1; ?>; }
/* IE: FlipH ;; Chrome: scaleX(-1) */
}
</style>




</head>
<body>
<img class="rotar1" src="<?php echo $photo;?>" height="100%" />
</body>
</html>

<?php } else { 

    foreach(glob('spirals/*') as $e) {
        $file = basename($e);
        printf('<a href="?time=%s&photo=%s">%s</a><br />', 
            $time, $file, $file);
    }


} ?>
