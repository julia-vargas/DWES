<HTML>
<HEAD> <TITLE> FORMULARIO BASE </TITLE>
</HEAD>
<BODY>
    
<form name='Factura' action='factura.php' method='post'>

Numero factura:
<input type='number' name='numero' value='' size=15><br>

Proveedor:
<input type='text' name='proveedor' value=''><br>

Importe:
<input type='number' name='importe' value=''><br>

IVA:
<input type='radio' name='iva' value=1.21>21%</br>
<input type='radio' checked name='iva' value=1.10>10%</br>



<input type="submit" value="enviar">

<input type="reset" value="borrar">

<?php

echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
echo  $_POST['numero'],"<br>";
echo  $_POST['proveedor'],"<br>";
echo  $_POST['importe'],"<br>";
echo  $_POST['iva'],"<br>";
$totalimporte = $_POST['importe'] * $_POST['iva'];
echo $totalimporte
?>

</FORM>
</BODY>
</HTML>