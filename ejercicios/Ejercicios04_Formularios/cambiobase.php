<?php

function volver_binario($num)
{
    $resultado = decbin($num);
    return $resultado;
}

function volver_octal($num)
{
    $resultado = decoct($num);
    return $resultado;
}

function volver_hexadecimal($num)
{
    $resultado = dechex($num);
    return $resultado;
}

switch($_POST['base'])
{
    case 1:
        echo volver_binario($_POST['dec']);
        break;
    case 2:
        echo volver_octal($_POST['dec']);
        break;
    case 3:
        echo volver_hexadecimal($_POST['dec']);
        break;
    case 4:
        echo volver_binario($_POST['dec']). "<br>";
        echo volver_octal($_POST['dec']). "<br>";
        echo volver_hexadecimal($_POST['dec']). "<br>";
        break;
}

?>