<HTML>
<HEAD><TITLE> EJ4 Bucles – Número primo </TITLE></HEAD>
<BODY>
<?php
    $num = 17;
    $primo = "es un numero primo"; // Partimos de que es primo

    echo "Numero analizado: $num <br>";

    for ($i = 2; $i < $num; $i++)
    {
        $es_divisible = ($num % $i === 0) ? "Divisible" : "No divisible"; 

        if ($es_divisible === "Divisible")
        {
            $primo = "no es un numero primo";
        }
        
        echo "Probando divisor $i -> $es_divisible <br>";
    }

    echo "<br>Resultado final: $num $primo <br>";
?>
</BODY>
</HTML>