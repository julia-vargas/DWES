<!DOCTYPE html>
<html>
<head>
    <title>EJ4 ARRAY</title>
</head>
<body>
<?php

    $primero = array ( "Programación", "Bases de Datos", "Lenguajes de Marcas", "Sistemas
    nformáticos");
    $segundo = [ "DWES", "DWEC", "Despliegue", "Diseño de Interfaces Web"];
    $optativas = ["Inglés Profesional","Digitalización"];

    //unidos sin funciones de array
    $sinFunciones = array();
    foreach ($primero as $modulo) {
        $sinFunciones[] = $modulo;
    }
    foreach ($segundo as $modulo) {
        $sinFunciones[] = $modulo;
    }
    foreach ($optativas as $modulo) {
        $sinFunciones[] = $modulo;
    }
    var_dump($sinFunciones);

    //Usando array_merge
    $conFunciones = array_merge($primero, $segundo, $optativas);

    //Añadiendo
    $conFunciones[] = "Proyecto Intermodular";

    print(in_array("DWES", $conFunciones)); //Me devuelve 1 que es true
    $pos = array_search("DWES", $conFunciones); //Me devuelve su posición, 4
    print($pos);
    unset($conFunciones[$pos]);
    sort($conFunciones);

    echo "<ul>";
    for ($i = 0; $i < count($conFunciones); $i++) 
    {
        echo "<li>" . $conFunciones[$i] . "</li>";
    }
    echo "</ul>";

?>
</body>
</html>