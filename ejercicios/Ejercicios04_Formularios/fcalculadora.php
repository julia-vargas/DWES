<HTML>
<HEAD> <TITLE> FCALCULADORA </TITLE>
</HEAD>
<BODY>
    
<form name='Calculadora' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>

Operando 1: <br>
<input type='number' name='op1' value=''>
<br>

Operando 2: <br>
<input type='number' name='op2' value=''><br>

Seleccione una opcion: <br>
<input type='radio' checked name='operacion' value=1>suma</br>
<input type='radio' name='operacion' value=2>resta</br>
<input type='radio' name='operacion' value=3>producto</br>
<input type='radio' name='operacion' value=4>division</br>

<input type="submit" value="enviar">
<input type="reset" value="borrar">

</FORM>
</BODY>
</HTML>

<?php

//Como el ejercicio pedia hacerlo con funciones, creamos una por operación
function sumar($a, $b)
{
    return $a + $b;
}

function restar($a, $b)
{
    return $a - $b;
}

function multiplicar($a, $b)
{
    return $a * $b;
}

function dividir($a, $b)
{
    return $a / $b;
}

if ($_SERVER['REQUEST_METHOD']=='POST') //Si lo meto dentro del if ya no se carga esta parte nada mas abrir la página
{
    echo "El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";
    echo "Primer numero: ". $_POST['op1'],"<br>";
    echo "Segundo numero: ". $_POST['op2'],"<br>";

    $resultado = 0;
    switch ($_POST['operacion'])
    {
        case 1:
            $resultado = sumar($_POST['op1'], $_POST['op2']);
            break;
        case 2:
            $resultado = restar($_POST['op1'], $_POST['op2']);
            break;
        case 3:
            $resultado = multiplicar($_POST['op1'], $_POST['op2']);
            break;
        case 4:
            $resultado = dividir($_POST['op1'], $_POST['op2']);
            break;
    }

    echo "Resultado: ". $resultado;
}

?>