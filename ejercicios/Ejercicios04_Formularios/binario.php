<?php

function volver_binario($num) //Usaremos funciones como lo indica el enunciado
{
    $resultado = decbin($num);
    return $resultado;
}

echo volver_binario($_POST['dec']);

?>