
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

if ($_SERVER['REQUEST_METHOD']=='POST') //Si lo meto dentro del if ya no se carga esta parte nada mas abrir la página
{
    switch($_POST['base'])
    {
        case 1:
            echo "<br>". volver_binario($_POST['dec']);
            break;
        case 2:
            echo "<br>". volver_octal($_POST['dec']);
            break;
        case 3:
            echo "<br>". volver_hexadecimal($_POST['dec']);
            break;
        case 4:
            echo "<br>". volver_binario($_POST['dec']);
            echo "<br>". volver_octal($_POST['dec']);
            echo "<br>". volver_hexadecimal($_POST['dec']);
            break;
    }
}

?>
