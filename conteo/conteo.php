<?php
ini_set('display_startup_errors','On');
ini_set('display_errors','On');
ini_set('html_errors','On');
ini_set('xmlrpc_errors','On');
error_reporting(E_ALL); //(-1);

$vars = array();

/*
$lim = 5;
$vars[0]=array('n'=>'v1','v'=>3,'q'=>0,'l'=>$lim);
$vars[1]=array('n'=>'v2','v'=>5,'q'=>0,'l'=>$lim);
$vars[2]=array('n'=>'v3','v'=>7,'q'=>0,'l'=>$lim);
$vars[3]=array('n'=>'v4','v'=>9,'q'=>0,'l'=>$lim);
//*/

/*
$lim = 12;
$vars[0]=array('n'=>'hombre','v'=>200,'q'=>0,'l'=>$lim);
$vars[1]=array('n'=>'mujer','v'=>50,'q'=>0,'l'=>$lim);
$vars[2]=array('n'=>'nino','v'=>25,'q'=>0,'l'=>$lim);
function is_match_found(){
  global $vars;
  $sum_q = 0;
  $sum_v = 0;
  foreach($vars as $e){
    $sum_q += $e['q'];
    $sum_v += $e['q'] * $e['v'];
  }
  return ( $sum_q==12 && $sum_v==1200 );
}
//*/


//*
$vars[0]=array('n'=>'q-a','v'=>426,'q'=>0,'l'=>3);
$vars[1]=array('n'=>'q-mr','v'=>400,'q'=>0,'l'=>3);
$vars[2]=array('n'=>'m-a','v'=>91,'q'=>0,'l'=>9);
$vars[3]=array('n'=>'m-mr','v'=>77,'q'=>0,'l'=>9);

function is_match_found(){
  global $vars;
  $sum_a  = $vars[0]['v']*$vars[0]['q'] + $vars[2]['v']*$vars[2]['q'];
  $sum_mr = $vars[1]['v']*$vars[1]['q'] + $vars[3]['v']*$vars[3]['q'];
  $total_q = $vars[0]['q']+$vars[1]['q'];
  $total_m = $vars[2]['q']+$vars[3]['q'];
  $dual_limit = (int) $_GET['dual_limit'];

  //return ( intval($sum_a)==517 && intval($sum_mr)==477 );

  return ( $sum_a>$dual_limit && $sum_mr>$dual_limit
           && $sum_a>$sum_mr 
           && $total_q>0 && $total_q<4
           && $total_m>0 && $total_m<10
           );
}
//*/



$max_loop = 1;
foreach($vars as $e) $max_loop *= $e['l']+1;
$max_loop--;
echo "<p>max: $max_loop</p>"; 

// print vars
function print_vars(){
  global $vars;

  $output = '<p> FOUND!! ';
  foreach($vars as $e){
    $total = $e['v']*$e['q'];
    $output .= "{$e['n']}:{$e['q']} ({$total}) // ";
  }
  $output .= '</p>';
  echo $output;
}


//$qty_one_lim=100;
function qty_one($i){
  global $vars, $qty_one_lim;
  //if(--$qty_one_lim<0) return;
  //echo "f:{$qty_one_lim}\n";

  $vars[$i]['q']++;
  if($vars[$i]['q']>$vars[$i]['l']){
    $vars[$i]['q']=0;
    if(isset($vars[$i+1]['q'])){
      qty_one($i+1);
    }
  }
}


// add one quantity to the system
for($i=0;$i<$max_loop;$i++){
  //echo "<p>$i={$_GET['add']}</p>";
  qty_one(0);

  // area de condiciones
  $is_valid = is_match_found();
  if($is_valid) print_vars();
}

// prepare the dash-output
$output='';
for($i=count($vars)-1;$i>=0;$i--){
  $output .= $vars[$i]['q'];
  if($i>0) $output .= ' -- ';
}

echo "<p>$output</p>";

echo '<pre>',var_dump($vars),'</pre>';