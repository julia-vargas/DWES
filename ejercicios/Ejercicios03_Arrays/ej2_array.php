<!DOCTYPE html>
<html>
<head>
    <title>EJ1 ARRAY</title>
</head>
<body>
<?php

    $temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21);

    echo "<table border='3' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Día</th><th>Temperatura</th><th>Diferencia día anterior</th></tr>";
    
    
    foreach ($temperaturas as $indice => $temperatura)  //Recorremos tooodo el array con foreach
    {
        $dia = $indice + 1;
        if ($indice == 0) //Para que a la primera vuelta, como no tiene nada con que compararlo, me ponga el "-"
        {
            $diferencia = "-";
        }
        else
        {
            $diferencia = $temperatura - $dia_anterior;
        }
        echo "<tr><td>$dia</td><td>$temperatura</td><td>$diferencia</td></tr>";
        $dia_anterior = $temperatura;
    }
    
    echo "</table><br><br>";

    //Para el resto usamos las funciones de arrays
    $maxima = max($temperaturas);
    $dia_maxima = array_search($maxima, $temperaturas) + 1;
    $minima = min($temperaturas); //Lo mismo pero con la minima
    $dia_minima = array_search($minima, $temperaturas) + 1;
    $media = array_sum($temperaturas) / count($temperaturas);

    $por_encima = 0;
    foreach ($temperaturas as $temperatura)
    {
        if ($temperatura > $media) //vamos contando cuantos dias han superado la media
        {
            $por_encima = $por_encima + 1;
        }
    }

    echo "<p>Temperatura máxima y dia: $maxima, $dia_maxima</p>";
    echo "<p>Temperatura mínima y dia: $minima, $dia_minima</p>";
    echo "<p>Temperatura media: $media</p>";
    echo "<p>Numero de días por encima de la media: $por_encima</p>";


?>
</body>
</html>