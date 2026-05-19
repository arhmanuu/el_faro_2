<?php
class Usuario {
    // Atributos privados (Encapsulamiento)
    private $nombre;
    private $email;
    private $password;

    // Constructor para inicializar el objeto
    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Método para simular la persistencia de datos
    public function registrarLector() {
        // Aquí iría la consulta PDO a la base de datos
        return "El lector {$this->nombre} ha sido guardado exitosamente.";
    }
}
?>