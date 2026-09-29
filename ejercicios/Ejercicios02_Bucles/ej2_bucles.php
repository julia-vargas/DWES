<!DOCTYPE html>
<html>
<head>
    <title>EJ2 Bucles – Tabla multiplicar</title>
</head>
<body>
<?php
    $num = 8;

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Operación</th><th>Resultado</th></tr>";
    
    for ($i = 0; $i < 10; $i++)
    {
        $resultado = $num * $i;
        echo "<tr><td>$num x $i</td><td>$resultado</td></tr>";
    }
    
    echo "</table>";
?>
</body>
</html>
