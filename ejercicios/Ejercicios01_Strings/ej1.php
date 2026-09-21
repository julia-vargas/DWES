<HTML>
<HEAD><TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";

//Con la función explode() hago lo mismo que con .split() en Java
$octetos = explode(".", $ip); //octetos es un array que contiene todos los cachitos de la IP
$o_binarios = []; //nos hacemos un array para meter los octetos ya en binario

for ($a=0; $a<4; $a++) //Hacemos un bucle para ir guardando los octetos numericos en binario en la misma posicion del array de binarios
    {
        $o_binarios[$a] = sprintf("%08b", (int)$octetos[$a]);
    }
    
print("IP $ip en binario es " . $o_binarios[0] . "." . $o_binarios[1] . "." . $o_binarios[2] . "." . $o_binarios[3]);

?>
</BODY>
</HTML>