<HTML>
<HEAD><TITLE> EJ6 Strings - Analizador de log de servidor </TITLE></HEAD>
<BODY>

<?php
    $log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";

    $cachos = explode(" - ", $log);
    $ip = $cachos[0];
    $codigo = $cachos[2];
    $navegador = $cachos[3];

    $cachitos = explode(" ", $cachos[1]);
    $metodo = $cachitos[0];
    $recurso = $cachitos[1];

    $cachines = explode(".", $recurso);
    $tipo = strtoupper(end($cachines));

    if ($codigo == 200) {
        $correcta = "SI";
    } else {
        $correcta = "NO";
    }

    echo "IP: " . $ip . "<br>";
    echo "Método: " . $metodo . "<br>";
    echo "Recurso: " . $recurso . "<br>";
    echo "Código HTTP: " . $codigo . "<br>";
    echo "Navegador: " . $navegador . "<br>";

    echo "<br>";

    echo "Tipo de recurso: " . $tipo . "<br>";
    echo "Petición correcta: " . $correcta . "<br>";
?>

</BODY>
</HTML> 