<HTML>
<HEAD><TITLE> EJ5 Bucles - Factorial </TITLE></HEAD>
<BODY>
<?php
    $num = 5;
    $resultado = 1; //Comienza multiplicando por uno

    echo "$num! = ";
    for ($i = $num; $i >= 2; $i--) //Dejamos el 1 fuera porque no cambia nada
        {
            $resultado = $resultado * $i;
            echo "$i x ";
        }

        echo "1 = $resultado";
?>
</BODY>
</HTML>
