<!DOCTYPE html>
<html>
<head>
    <title>EJ1 ARRAY ASOCIATIVO</title>
</head>
<body>
<?php

$alumnos = array("Pepa"=>22, "Pepe"=>18, "Pepi"=>16, "Pepo"=>68, "Pepu"=>33); //Creamos el array

//Rrecorremos el array y lo mostramos

foreach ($alumnos as $clave => $valor)
    {
        echo "Alumno: ". $clave. " Valor: ". $valor;
        echo "<br>";
    }

//Situaremos el puntero en la segunda posición

reset($alumnos); //reiniciamos (vuelve al 1)
next($alumnos); //Pasamos de la 1 a la 2

$edad = current($alumnos); //Obtengo el valor de donde mira el puntero
$nombre = key($alumnos); //Obtengo la clave de donde mira el puntero

echo "Alumno: ". $nombre. " Valor: ". $edad;
echo "<br>";

//Lo ordenamos por edad

asort($alumnos); //sort no nos funciona, porque me lo indexa

//Obtenemos la primera reiniciando
$priEda = reset($alumnos);
$priNom = key($alumnos);

//Obtenemos la ultima con end
$ultEda = end($alumnos);
$ultNom = key($alumnos);

echo "Alumno: ". $priNom. " Valor: ". $priEda;
echo "<br>";
echo "Alumno: ". $ultNom. " Valor: ". $ultEda;



?>

</body>
</html>