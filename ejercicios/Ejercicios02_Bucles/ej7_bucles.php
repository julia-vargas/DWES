<HTML>
<HEAD><TITLE> EJ7 Bucles – Conversor decimal a binario </TITLE></HEAD>
<BODY>
<?php
    $num = 168;
    $binario = ""; //Lo tengo que inicializar porque al meterle un valor a la variable se usa a sí misma
    
    echo "Numero $num en Binario = ";

    while ($num > 0)
    {
        $resto = $num % 2; //En este caso 2 porque solo buscamos binarios
        $num = intdiv($num, 2); //Vamos calculando el cociente y guardandolo de nuevo en $num para la próxima división
        $binario = (String)$resto . $binario; //Guardamos el resto a la izquierda porque se van sacando al revés
    }

    echo "$binario";

?>
</BODY>
</HTML>
