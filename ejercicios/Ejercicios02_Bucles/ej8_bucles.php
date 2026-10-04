<HTML>
<HEAD><TITLE> EJ8 Bucles – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
    $num="48";
    $base="8";
    $resultado = ""; //Lo tengo que inicializar porque al meterle un valor a la variable se usa a sí misma
    
    echo "Numero $num en base $base = ";
    $num = (int)$num;
    $base = (int)$base;

    while ($num > 0)
    {
        $resto = $num % $base; //Sacamos el resto de la division
        $num = intdiv($num, $base); //Vamos calculando el cociente y guardandolo de nuevo en $num para la próxima división
        $resultado = (String)$resto . $resultado; //Guardamos el resto a la izquierda porque se van sacando al revés
    }

    echo "$resultado";
    
?>
</BODY>
</HTML>
