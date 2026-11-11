<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBINARIO</title>
</head>
<body>
    <form name='Binario' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>

    Numero Decimal: <br>
    <input type='number' name='dec' value=''> <br>

    <input type="submit" value="enviar">
    <input type="reset" value="borrar">

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST') //Si lo meto dentro del if ya no se carga esta parte nada mas abrir la página
    {
        function volver_binario($num) //Usaremos funciones como lo indica el enunciado
        {
            $resultado = decbin($num);
            return $resultado;
        }

        echo volver_binario($_POST['dec']);
    }
    ?>

    </form>
</body>
</html>