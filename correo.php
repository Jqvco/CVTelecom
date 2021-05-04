<?php
$para      = 'joacovidal2004@gmail.com';
$nombre    = 'nombre';
$mensaje   = 'mensaje';
$asunto    = 'asunto';
$cabeceras = 'From: noreply@example.com' . "\r\n" .
'Reply-To: noreply@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $nombre, $mensaje, $asunto, $cabeceras);
?>
