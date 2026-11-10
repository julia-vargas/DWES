<HTML>
<HEAD> <TITLE> FORMULARIO BASE </TITLE>
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

if ($_SERVER['REQUEST_METHOD']=='POST') //Si lo meto dentro del if ya no se carga esta parte nada mas abrir la página
{
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
}

?>