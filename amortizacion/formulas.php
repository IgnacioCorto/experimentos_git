<?php

$prestamo=120000;
$interes=25;
$anos=5;
$multiplo=12;

$C = $prestamo;
$i = $interes/$multiplo/100;
$n = $anos*$multiplo;

$i_pow = pow(1+$i,$n);

$cuota = 3522.16;
$artefacto = ($i*$i_pow) / ($i_pow-1);
$capital_total = $cuota / $artefacto;

//$CF =  $C * pow(1 + $i, $n) ; 
//$CF =  $C * $i / ( 100 * ( 1 - pow(1+$i/100, -$n) ) );
//$CF = $C * ($i*$i_pow) / ($i_pow-1);
$CF =  $C * $i / (1 - pow(1+$i, -$n)) ;



printf("%s ; %s\nTotal:%s\n",
       $CF, $CF*31, $capital_total);
