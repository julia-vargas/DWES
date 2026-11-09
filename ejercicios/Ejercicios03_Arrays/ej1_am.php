<!DOCTYPE html>
<html>
<head>
    <title>EJ1 ARRAY MULTIDIMENSIONAL</title>
</head>
<body>
<?php

$numeros = array();
$aux = 2;

// 3 filas, 3 columnas, recorridas e introduciendo valores en orden sumando de 2 en 2
for($i = 1; $i<=3; $i++)
{
    for($j=1; $j<=3; $j++)
    {
        $numeros["Fila $i"]["Col $j"] = $aux;
        $aux = $aux + 2;
    }
}

 //Pintamos la tabla
echo "<table border='1'>";
echo "<tr> <td></td><th>Col 1</th><th>Col 2</th><th>Col 3</th> </tr>";

foreach ($numeros as $fila => $valores)
{
    echo "<tr><th>". $fila. "</th>";
    
    foreach ($valores as $valor)
    {
        echo "<td>$valor</td>";
    }
    echo "</tr>"; 
}
echo "</table>";

var_dump($numeros);


?>




</body>
</html>