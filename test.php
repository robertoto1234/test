<?php
// La URL a la que deseas redirigir
$nueva_url = 'https://nueva-url.com';

// Configura el encabezado de redirección
header("Location: $nueva_url", true, 301);
exit();
?>
