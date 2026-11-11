<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMBIO BASE</title>
</head>
<body>
    <form name='Binario' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>

    Numero Decimal: <br>
    <input type='number' name='dec' value=''> <br>

    Convertir a: <br>
    <input type='radio' name='base' value="1"> Binario<br>
    <input type='radio' name='base' value="2"> Octal<br>
    <input type='radio' name='base' value="3"> Hexadecimal<br>
    <input type='radio' checked name='base' value="4"> Todos sistemas<br>
    
    <input type="submit" value="enviar">
    <input type="reset" value="borrar">

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


    </form>
</body>
</html>