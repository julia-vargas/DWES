<HTML>
<HEAD><TITLE> EJ3 Bucles – Tablas multiplicar </TITLE></HEAD>
<BODY>
<?php
    $num1 = 3;
    $num2 = 7;

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Operación</th><th>Resultado</th></tr>";
        
        for ($i = $num1; $i <= $num2; $i++)
        {
            for ($j = 1; $j <= 10; $j++)
            {
                $resultado = $i * $j;
                echo "<tr><td>$j x $i</td><td>$resultado</td></tr>";
            }
        }
        
        echo "</table>";
?>
</BODY>
</HTML>
