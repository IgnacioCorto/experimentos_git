<?php
$br = "\r\n";
echo 'torneo...';

/*
$x = array(
	   'water'=>0,'fire'=>0,'rock'=>0,'air'=>0,
	   'wood'=>0,'leaf'=>0,'soil'=>0,'seed'=>0
	   );
*/

$x = array(
	   'chess'=>0,'kof'=>0,'lol'=>0,'car'=>0,
	   'sex'=>0,'movies'=>0,'beer'=>0,'sleep'=>0
	   );


$size = count($x);
$fights = intval($size*1.5)-1; //$size-1; //pow(2,$size,2)-1;

echo $br, $fights, $br;

$xr = array_keys($x);

shuffle($xr); //var_dump($xr);

$current = 1;
$fight_list = array_pad($xr,$size*2,NULL);

$add_losers = TRUE;


while($current<=$fights){
    $points = 1;
    if($current>=1 && $current<=4) $points = 1;
    if($current>=5 && $current<=8) $points = 2;
    if($current>=9 && $current<=10) $points = 3;
    if($current>=11 && $current<=11) $points = 4;

    $c_i = ($current - 1)*2;
    $choices = array( $fight_list[$c_i], $fight_list[$c_i+1]);

    echo "fight #$current: ", 
	$choices[0],' -vs- ',$choices[1],$br;
    $answer = trim(fgets(STDIN));

    if( in_array($answer, $choices) ) {
	$winner = array_search($answer, $choices);
	$loser = $winner==0?1:0;	

	if($add_losers){
	    $fight_list[7+$current] =$choices[$loser];
	    $fight_list[11+$current]=$choices[$winner];
	    if($current>=4) $add_losers=FALSE;
        }else{
	    $fight_list[]=$answer;
        }

	$x[$answer] += $points;
        
	echo "winner #$current: $answer -$winner- $br $br";
	$current++;

    }
}

$xo = $x;
arsort($xo);
var_dump($xo);