<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>

<?php
    $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

    $cachos = explode("://", $url);
    $protocolo = $cachos[0];

    $cachitos = explode("?", $cachos[1]);
    $parametros = $cachitos[1];

    $cachines = explode("/", $cachitos[0]);
    $dominio = $cachines[0];
    $fichero = $cachines[2];
    $ruta = "/" . $cachines[1] . "/" . $cachines[2];

    $id = explode("=", explode("&", $cachitos[1])[0])[1];
    $marca = explode("=", explode("&", $cachitos[1])[1])[1];


    echo "<h1>Salida 1</h1>";
    echo "Protocolo: " . $protocolo . "<br>";
    echo "Dominio: " . $dominio . "<br>";
    echo "Ruta: " . $ruta . "<br>";
    echo "Fichero: " . $fichero . "<br>";
    echo "Parámetros: " . $parametros . "<br>";

    echo "<br><br>";

    echo "<h1>Salida 2</h1>";
    echo "Protocolo: " . $protocolo . "<br>";
    echo "Dominio: " . $dominio . "<br>";
    echo "Ruta: " . $ruta . "<br>";
    echo "Fichero: " . $fichero . "<br>";
    echo "Id producto=" . $id . "<br>";
    echo "Marca=" . $marca . "<br>";

?>

</BODY>
</HTML>