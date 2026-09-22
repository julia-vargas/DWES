<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
    $nombre = " aLBeRTo gaRCia loPEz ";
    $nombreTrimmed = trim($nombre); //Recortamos los laditos
    $enMinusculas = strtolower($nombreTrimmed);
    $nombreNormal = ucwords($enMinusculas); //Normalizamos el nombre

    $cachitos = explode(" ", $nombreNormal); //Separamos en nombre por los espacios
    $letras = [];

    foreach($cachitos as $cachito) //Recorremos el nombre y apelllidos uno por uno
        {
            $letras[] = substr($cachito, 0, 1); //Por cada palabra, nos guardamos en el array solo la primera letra
        }


    print ("Cadena original: \" $nombreTrimmed \"");
    echo ("<br><br>");

    print("Nombre normalizado: \"" . $nombreNormal . "\"");
    echo ("<br><br>");

    print ("Numero de caracteres: \"" . strlen($nombreNormal) . "\"");
    echo ("<br><br>");

    print ("Nombre: \"" . $cachitos[0]) . "\"";
    echo ("<br><br>");

    print ("Primer apellido: \"" . $cachitos[1] . "\"");
    echo ("<br><br>");

    print ("Segundo apellido: \"" . $cachitos[2] . "\"");
    echo ("<br><br>");

    print ("Iniciales: \"" . $letras[0]. "." . $letras[1]. "." . $letras[2] . "\"");
    echo ("<br><br>");

    print ("Nombre de usuario: \"" . strtolower($cachitos[0]). "." . strtolower($cachitos[1]) . "\"");
    echo ("<br><br>");


?>
</BODY>
</HTML>