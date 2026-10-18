<!DOCTYPE html>
<html>
<head>
    <title>EJ3 ARRAY</title>
</head>
<body>
<?php

    //Primero creamos el array
    $numeros = array();
    for ($i = 0; $i < 20; $i++)
    {
        $numeros[$i] = random_int(1, 100);
    }

    $sumaPosPares = 0;
    $cantidadPosPares = 0;
    $posParMayor = 0;
    $sumaPosImpares = 0;
    $cantidadPosImpares = 0;
    $posImparMayor = 0;
    $cantidadValoresPares = 0;
    $cantidadValoresImpares = 0;

    //Ahora lo leemos
     foreach ($numeros as $pos => $numero)
    {
        if ($pos % 2 == 0) {
            $sumaPosPares = $sumaPosPares + $numero;
            $cantidadPosPares++;
            $posParMayor = max($numero, $posParMayor);
        }
        else {
            $sumaPosImpares = $sumaPosImpares + $numero;
            $cantidadPosImpares++;
            $posImparMayor = max($numero, $posImparMayor);
        }

        if ($numero % 2 == 0) {
            $cantidadValoresPares++;
        } else {
            $cantidadValoresImpares++;
        }
    }

    $mediaPosPares = $sumaPosPares / $cantidadPosPares;
    $mediaPosImpares = $sumaPosImpares / $cantidadPosImpares;


    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th> </th><th>Posiciones Pares</th><th>Posiciones Impares</th></tr>";

    echo "<tr><td>suma total</td><td>$sumaPosPares</td><td>$sumaPosImpares</td></tr>";
    echo "<tr><td>media</td><td>$mediaPosPares</td><td>$mediaPosImpares</td></tr>";
    echo "<tr><td>numero mayor</td><td>$posParMayor</td><td>$posImparMayor</td></tr>";
    echo "<tr><td>cantidad de valores</td><td>$cantidadValoresPares</td><td>$cantidadValoresImpares</td></tr>";

    echo "</table>";

    var_dump($numeros);


?>
</body>
</html>