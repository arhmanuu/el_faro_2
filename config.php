<?php
// =========================================================================
// CONFIGURACIÓN GLOBAL DE ENRUTAMIENTO (config.php)
// =========================================================================

if (!defined('ROOT_PATH')) {
    // Captura la ruta física absoluta del disco (ej: /var/www/html o C:/xampp/htdocs/el_faro)
    define('ROOT_PATH', __DIR__);

    // Captura el host para discriminar el entorno
    $host = $_SERVER['HTTP_HOST'];

    // Evaluación del entorno para URLs del navegador
    if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
        define('BASE_URL', '/el_faro'); // Entorno Local
    } else {
        define('BASE_URL', '');         // Entorno de Producción (Render)
    }
}
?>