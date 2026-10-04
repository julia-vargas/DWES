<!DOCTYPE html>
<html>
<head>
    <title>EJ1 ARRAY</title>
</head>
<body>
<?php

    $impares = array();
    $val = 1; //Empezamos partiendo de 1 para que sea impar

    for ($i = 0; $i < 20; $i++) 
    {
        $impares[$i] = $val; //Guardamos en el array los primeros 20 numeros impares
        $val = $val + 2;
    }

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>";
    
    $suma = 0; //Inicializamos $suma ya que para darle un valor por primera vez, se usa a sí misma

    foreach ($impares as $indice => $valor)  //Recorremos tooodo el array con foreach
    {
        $suma = $suma + $valor;
        echo "<tr><td>$indice</td><td>$valor</td><td>$suma</td></tr>";
    }
    
    echo "</table>";


?>
</body>
</html>