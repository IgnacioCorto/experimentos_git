<?php
$br = "\r\n";
echo 'torneo all...';

$x = array(
	   'yuce'=>0,'yole'=>0,'gita'=>0,'alime'=>0,'dorve'=>0
	   );


$size = count($x);

$xr = array_keys($x);
shuffle($xr);

$fights = array();

for($i=0;$i<$size;$i++){
    for($j=$i+1;$j<$size;$j++){
        $fights[] = array($xr[$i], $xr[$j]);
    }
}

$size_fights = count($fights);
shuffle($fights);

echo $br, count($fights), $br;

$points = 1;
$current = 1;

while($current<=$size_fights){
    $index = $current - 1;
    $choices = $fights[$index];

    echo "fight #$current: ", 
	$choices[0],' -vs- ',$choices[1],$br;
    $answer = trim(fgets(STDIN));

    if( in_array($answer, $choices) ) {
        $winner = array_search($answer, $choices);
        $loser = $winner==0?1:0;	
        
        echo "winner #$current: $answer -$winner- $br $br";

        $x[$answer] += $points;
        $current++;
    }
}

$xo = $x;
arsort($xo);
var_dump($xo);