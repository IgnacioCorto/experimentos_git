<?php
//BUSCANDO: 3522.16 - 2500 = 1,022.16
$mensualidad = 3522.16;

$capital=120000;
$interes=25; //anual
$tiempo=5; //anos
$multiplo=12;  //

$c=$capital;
$i=$interes/$multiplo/100;

$cf = $c*$i;

printf("NUEVO CAPITAL, INTERES, ABONADO (capital: %f) \n", $c);
$c_mc = $c;
    
for($j=1;$j<=60;$j++){
    $c_mi = $c_mc * $i;
    $c_d  = $mensualidad - $c_mi;
    $n_mc = $c_mc - $c_d; 

    printf("%02d = %.2f , %.2f , %.2f\n"
           ,$j,$n_mc, $c_mi, $c_d);

    $c_mc = $n_mc;
}


