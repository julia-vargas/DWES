<?php

echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
echo "Primer numero: ". $_POST['op1'],"<br>";
echo "Segundo numero: ". $_POST['op2'],"<br>";

$resultado = 0;
switch ($_POST['operacion'])
{
    case 1:
        $resultado = $_POST['op1'] + $_POST['op2'];
        break;
    case 2:
        $resultado = $_POST['op1'] - $_POST['op2'];
        break;
    case 3:
        $resultado = $_POST['op1'] * $_POST['op2'];
        break;
    case 4:
        $resultado = $_POST['op1'] / $_POST['op2'];
        break;

}

echo "Resultado: ". $resultado;

?>