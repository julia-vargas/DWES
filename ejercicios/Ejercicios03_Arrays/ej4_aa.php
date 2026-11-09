<!DOCTYPE html>
<html>
<head>
    <title>EJ4 ARRAY ASOCIATIVO</title>
</head>
<body>
<?php

$notas = array ("Ana" => 7.5,"Luis" => 4.2, "Alba" => 9.1, "Pedro" => 5.8, "Lucía" => 6.7, "Carlos" => 3.9);

$mayor_nota = max($notas);
$mayor_alumno = array_search($mayor_nota, $notas);

$menor_nota = min($notas);
$menor_alumno = array_search($menor_nota, $notas);

$suma = 0;
$aprobados = array();
$suspensos = array();

foreach ($notas as $clave => $valor) //en este foreach, aparte de sumar las notas, separamos aprobados de suspensos
{
    $suma = $suma + $valor;
    if ($valor < 5)
    {
        $suspensos[$clave] = $valor;
    }
    else
    {
        $aprobados[$clave] = $valor;
    }
}

$media = $suma / count($notas);

echo "Nota máxima, alumno: ".  $mayor_alumno. " nota: ". $mayor_nota. "<br>";
echo "Nota mínima, alumno: ". $menor_alumno. " nota: ". $menor_nota. "<br>";
echo "Nota media: ". $media. "<br>";
echo "Aprobados: ". count($aprobados). "<br>";
echo "Suspensos: ". count($suspensos). "<br>";

echo "Alumnos con nota superior a la media: ". "<br>";
foreach ($notas as $clave => $valor)
{
    $suma = $suma + $valor;
    if ($valor > $media)
    {
        echo "Alumno: ". $clave. " Nota: " . $valor. "<br>";
    }
}

asort($notas);
var_dump($notas);

$porcentaje = count($aprobados) / count($notas) * 100;
echo "El porcentaje de aprobados es: ". $porcentaje. "%";

var_dump($aprobados);
var_dump($suspensos);

?>

</body>
</html>