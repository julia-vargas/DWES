<!DOCTYPE html>
<html>
<head>
    <title>EJ3 ARRAY ASOCIATIVO</title>
</head>
<body>
<?php

$productos = array( "MON01" => 189.99, "TEC02" => 45.50, "RAT03" => 25.99, "SSD04" => 79.95,"RAM05" => 54.00);
$suma_precios = 0;

foreach ($productos as $clave => $valor) //Mostramos todos los productos y sus precios
    {
        echo "Producto: ". $clave. " Precio: ". $valor. "<br>";
        $suma_precios = $suma_precios + $valor;
    }

$media = $suma_precios / count($productos); //sacamos la media

$caro = max($productos); //sacamos el más caro
$producto_caro = array_search($caro, $productos);

$barato = min($productos); //sacamos el más barato
$producto_barato = array_search($barato, $productos);

//Pintamos maximo minimo y media
echo "Producto más caro: Producto: ". $producto_caro. " Precio: ". $caro. "<br>";
echo "Producto más barato: Producto: ". $producto_barato. " Precio: ". $barato. "<br>";
echo "Precio medio: ". $media. "<br>";

foreach ($productos as $clave => $valor) //Pintamos los que superan la media
    {
        if ($valor > $media)
            {
                echo "Productos que superan la media:";
                echo "Producto: ". $clave. " Precio: ". $valor. "<br>";
            }
    }

//mostramos de mas barato a mas caro
asort($productos);
var_dump($productos);

//Lo ordenamos por clave y no valor ()
//***POSIBLE MEJORA*** -> Prueba a usar substr o alguna función para ordenarlo por el numero y no por las letras de antes
ksort($productos);
var_dump($productos);

$codigo_prueba = "MON01";
if (array_key_exists($codigo_prueba, $productos)) //Array_key_exists me permite buscar la clave, no el valor como array_search
{
    echo "El producto existe";
} 
else 
{
    echo "El producto no existe";
}




?>

</body>
</html>