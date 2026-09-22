<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
    $email = "alberto.garcia@educa.madrid.org";
    $cachos= explode("@", $email); //Separamos en 2 strings cada lado del "@"
    //Ahora queremos por separado el educa y el org, así que lo separamos por "."
    $cachitos = explode(".", $cachos[1]);


    print("Email: " . $email ."<br><br>");
    
    print("Usuario: " . $cachos[0] ."<br>");
    print("Dominio: " . $cachos[1] ."<br>");
    print("Organización: " . $cachitos[0] ."<br>");
    print("Extensión: " . $cachitos[2] ."<br><br>");

    print("EL usuario contiene " . strlen($cachos[0])."<br>");
    print("El dominio contiene " . strlen($cachos[1]) ."<br><br>");

    
    //Como me devuelve un 1 si es verdadero y nada si es falso, pongo que me escriba si si o si no
    print ("Termina en \".org\": " . ((str_ends_with($email, ".org"))? "Si" : "No") . "<br>");
    //Con strpos busco a ver si hay @. Si lo encuentra, no me devolverá false
    print("Contiene \"@\": " . (strpos($email, "@") !== false ? "Si" : "No"));

?>
</BODY>
</HTML>

