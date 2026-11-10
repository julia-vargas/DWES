<?php

echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
echo  $_POST['numero'],"<br>";
echo  $_POST['proveedor'],"<br>";
echo  $_POST['importe'],"<br>";
echo  $_POST['iva'],"<br>";
$totalimporte = $_POST['importe'] * $_POST['iva'];
echo $totalimporte
?>