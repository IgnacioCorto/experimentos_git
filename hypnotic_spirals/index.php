<?php 
$photo = 'false';
$time = '1.00';
if(isset($_GET['photo'])) $photo = 'spirals/'.basename($_GET['photo']);
if(isset($_GET['time'])) $time = floatval($_GET['time']);


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
-webkit-animation-direction: reverse;           /* normal | alternate | reverse */
-webkit-animation-duration: <?php echo $time; ?>s;
-webkit-animation-delay: 0s;
-webkit-animation-iteration-count: infinite;
}

@-webkit-keyframes myfirst
{
from {-webkit-transform:rotate(0deg);}
to {-webkit-transform:rotate(360deg);}
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
