<HTML>
<HEAD><TITLE> EJ1 Bucles – Estadística secuencia </TITLE></HEAD>
<BODY>
<?php
    $inicio = 1;
    $fin = 100;

    //Para evitar que se queje los inicializo al inicio
    $cantidad = 0;
    $pares = 0;
    $impares = 0;
    $multiplos = 0;
    $suma = 0;

    for ($i = $inicio; $i <= $fin; $i++) //Recorremos tooodo y vamos metiendo cosas en las variables
    {
        $cantidad++;
        $suma += $i;

        if ($i % 2 == 0)
        {
            $pares++;
        }
        else
        {
            $impares++;
        }

        if ($i % 3 == 0)
        {
            $multiplos++;
        }
    }

    echo "Números del " . $inicio . " al " . $fin . "<br><br>";
    echo "Cantidad de números: " . $cantidad . "<br>";
    echo "Números pares: " . $pares . "<br>";
    echo "Números impares: " . $impares . "<br>";
    echo "Múltiplos de 3: " . $multiplos . "<br>";
    echo "Suma total: " . $suma . "<br>";
?>
</BODY>
</HTML>