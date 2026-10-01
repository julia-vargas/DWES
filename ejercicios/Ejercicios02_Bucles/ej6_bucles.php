<HTML>
<HEAD><TITLE> EJ6 Bucles – Simulador de ahorro </TITLE></HEAD>
<BODY>
<?php
    $capital = 1000;
    $interes = 5;
    $anios = 5;



    echo "Capital inicial: $capital € <br>";
    for ($i = 1; $i <= $anios; $i++)
        {
            $capital = round(($capital * ($interes/100 + 1)), 2); 
            echo "Año $i: $capital € <br>";
        }

        echo "<br> Capital final: $capital €";
?>
</BODY>
</HTML>