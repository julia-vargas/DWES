<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>

<?php
  $titulo = "Introducción a la Programación Web con PHP";

  $direccion = trim($titulo);
  $direccion = strtolower($direccion);
  $direccion = str_replace('ó', 'o', $direccion);
  $direccion = str_replace(' ', '-', $direccion);

  echo "http://" . $direccion;
?>
</BODY>
</HTML>