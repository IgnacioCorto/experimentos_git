<?php
if(isset($_REQUEST['callback'])){
	header('Content-Type: text/javascript');
	
	$callback = $_REQUEST['callback'];
	$find = $_REQUEST['find'];

	$i = floatval($_REQUEST['I'])/12/100;
	$n = floatval($_REQUEST['n']);
	$co = floatval($_REQUEST['co']);
	$C = floatval($_REQUEST['C']);
	
	if($find=='C'){
		$name = 'C';	
		$value = (1-pow(1+$i,-$n)) * $co / $i;	
	} else if($find=='co'){
		$name = 'co';	
		$value = $C * $i / (1-pow(1+$i,-$n));	
	} else if($find=='n'){
		$name = 'n';
		$top_n = log(1-($C*$i/$co));
		$bot_n = log(1+$i);
		
		if(is_nan($top_n)) $value='undef';	
		else $value = -$top_n / $bot_n;	
	} else {
		$name = 'undef';	
		$value = 'undef';	
	}
	
	$C = (1-pow(1+$i,-$n)) * $co / $i;
	
	$output = array(
		'name'=>$name,
		'value'=>$value,
		'ts'=>strftime("%c")
		);
	
	printf('%s(%s)', $_REQUEST['callback'], json_encode($output));
	
	#printf('console.log("%s");', strftime("%c"));
	#echo json_encode(array(true,false));
	die();
}
?>



<html>
<head></head>
<body>

<table>

<tr>
<td></td>
<td>Inter&eacute;s Anual: </td>
<td><input id="I" value="25" type="text" /></td>
</tr>

<tr>
<td><input type="radio" name="find" value="n" onclick="disable(this);" /></td>
<td>Plazo mensual:</td>
<td><input id="n" value="60" type="text" /></td>
</tr>

<tr>
<td><input type="radio" name="find" value="co" onclick="disable(this);" /></td>
<td>Cuota mensual:</td>
<td><input id="co" value="3522" type="text" /></td>
</tr>

<tr>
<td><input type="radio" name="find" value="C" onclick="disable(this);" checked="checked" id="find_def" /></td>
<td>Capital:</td>
<td><input id="C" value="120000" type="text" /></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="button" value="Calcular Capital" onclick="loadData();" /></td>
</tr>

</table>

</body>
</html>


<script>
//DESHABILITAR LA CAJA DE TEXTO
function disable(obj){
	var radios = document.getElementsByTagName('input');
	for (var i = 0; i < radios.length; i++) {
		if (radios[i].name === 'find' && radios[i].type === 'radio') {
			document.getElementById(radios[i].value).disabled = radios[i].checked;
		}
	}		
	
	document.getElementById(obj.value).disabled = true;
}
disable(document.getElementById('find_def'));


//CALLBACK DEL JSONP
function miFuncion(obj){
	document.getElementById(obj.name).value = obj.value;
	console.log(obj);
}

//EJECUTAR EL JSONP
function loadData(){
	(function() {
		var radios = document.getElementsByTagName('input');
		var vFind = null;
		for (var i = 0; i < radios.length; i++) {
			if (radios[i].name === 'find' && radios[i].type === 'radio' && radios[i].checked) {
				// get value, set checked flag or do whatever you need to
				vFind = radios[i].value;       
			}
		}		
		
	  var I = document.getElementById('I').value * 1;
	  var co = document.getElementById('co').value * 1;
	  var n = document.getElementById('n').value * 1;
	  var C = document.getElementById('C').value * 1;
	  var callback = 'miFuncion';
	  
	  console.log(vFind);

	  var d=document,
	  h=d.getElementsByTagName('head')[0],
	  b=d.getElementsByTagName('body')[0],
	  s=d.createElement('script');
	  
	  s.src='prestamo.php?C='+C+'&I='+I+'&co='+co+'&n='+n+'&find='+vFind+'&callback='+callback;
	  s.type='text/javascript';
	  s.async=true;
	  //h.appendChild(s);
	  b.appendChild(s);
	}());

}
</script>


