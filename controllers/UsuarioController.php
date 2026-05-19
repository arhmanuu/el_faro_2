<?php
// 1. Cargar el entorno (sube un nivel a la raíz)
require_once '../config.php';

// 2. Importar el modelo usando la ruta absoluta segura del servidor
require_once ROOT_PATH . '/models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir datos del formulario
    $nombre = $_POST['txtNombre'];
    $email  = $_POST['txtEmail'];
    $pass   = $_POST['txtPass'];

    // Instanciar la clase (POO)
    $objUsuario = new Usuario($nombre, $email, $pass);
    
    // Ejecutar acción y enviar respuesta a la Vista de forma absoluta
    $resultado = $objUsuario->registrarLector();
    
    include ROOT_PATH . '/views/resultado_transaccion.php';
}
?>