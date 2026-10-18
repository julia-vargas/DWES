<!DOCTYPE html>
<html>
<head>
    <title>EJ4 ARRAY</title>
</head>
<body>
<?php

    $decimales = array();
    $binarios = array();
    $octales = array();
    $hexadecimales = array();

    for ($i=0; $i<20; $i++)
    {
        $decimales[$i] = $i + 1;
    }

    foreach ($decimales as $pos => $decimal)
    {
        $binarios[$pos] = base_convert($decimal, 10, 2);
        $octales[$pos] = base_convert($decimal, 10, 8);
        $hexadecimales[$pos] = base_convert($decimal, 10, 16);
    }

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Decimal</th><th>Binario</th><th>Octal</th><th>Hexadecimal</th></tr>";

    for ($i=0; $i<20; $i++)
    {
        echo "<tr><td>$decimales[$i]</td><td>$binarios[$i]</td><td>$octales[$i]</td><td>$hexadecimales[$i]</td></tr>";
    }

    echo "</table>";


?>
</body>
</html>