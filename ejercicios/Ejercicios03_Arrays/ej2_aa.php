<!DOCTYPE html>
<html>
<head>
    <title>EJ2 ARRAY ASOCIATIVO</title>
</head>
<body>
<?php

$alumnos = array("Pepa"=>8, "Pepe"=>3, "Pepi"=>9, "Pepo"=>6, "Pepu"=>4); //Creamos el array
$suma_notas = 0;

//Rrecorremos el array y lo mostramos
foreach ($alumnos as $clave => $valor)
    {
        $suma_notas = $suma_notas + $valor;
    }

$media = $suma_notas / count($alumnos); //tenemos la media


$maximo = max($alumnos); //Sacamos valor maximo con funcion max, y buscamos la clave del valor
$alumno_max = array_search($maximo, $alumnos);

$minimo = min($alumnos);
$alumno_min = array_search($minimo, $alumnos); //en un indexado me daría la posición. Este como es asociativo, me da el nombre

//lo pintamos todo
echo "Nota máxima, alumno: ".  $alumno_max. " nota: ". $maximo. "<br>";
echo "Nota mínima, alumno: ". $alumno_min. " nota: ". $minimo. "<br>";
echo "Nota media: ". $media;

?>

</body>
</html>