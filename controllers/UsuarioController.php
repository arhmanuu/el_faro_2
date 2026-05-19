<?php
require_once '../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir datos del formulario
    $nombre = $_POST['txtNombre'];
    $email  = $_POST['txtEmail'];
    $pass   = $_POST['txtPass'];

    // Instanciar la clase (POO)
    $objUsuario = new Usuario($nombre, $email, $pass);
    
    // Ejecutar acción y enviar respuesta a la Vista
    $resultado = $objUsuario->registrarLector();
    include '../views/resultado_transaccion.php';
}
?>