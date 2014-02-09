<html><head></head><body>
<?php
echo '<p>',time(),'</p>';
?>
<input id="silabas" value="ignacio" />
<div id="resultado" />
</body></html>

<script>
document.getElementById('silabas').onkeyup = function(){
    var dato = document.getElementById('silabas').value.toLowerCase();
    var salida = '';
    var vocales = 'aeiou';
    var pref_1 = 'rlh';
    var pref_2 = 'pc';
    var suf_1 = 'npg';
    var suf_2 = 's';
    var solas = '' 

    var c_letra = 0;
    var c_pref = 0;
    var c_suf = 0;

    while(c_letra<dato.length){
        var x=c_letra;

        //salida += dato[x]+'-';
        if(vocales.indexOf(dato[x])!=-1){
            salida += '('+dato[x]+')';
        } else {
            salida += dato[x];
        }

        c_letra++;
    }
    document.getElementById('resultado').innerHTML = salida;
}

document.getElementById('silabas').onkeyup();
</script>