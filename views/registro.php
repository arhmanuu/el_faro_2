<div class="container mt-5">
    <h2 class="text-primary">Crear cuenta en El Faro</h2>
    <form action="../controllers/UsuarioController.php" method="POST" class="shadow p-4">
        <input type="text" name="txtNombre" class="form-control mb-3" placeholder="Nombre completo" required>
        <input type="email" name="txtEmail" class="form-control mb-3" placeholder="Correo electrónico" required>
        <input type="password" name="txtPass" class="form-control mb-3" placeholder="Contraseña" required>
        <button type="submit" class="btn btn-success w-100">Registrarse ahora</button>
    </form>
</div>