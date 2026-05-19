<?php 
// Subimos un nivel para encontrar el archivo de configuración
require_once '../config.php'; 
include ROOT_PATH . '/views/layout/header.php'; 
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Soporte y Contacto</h3>
                    <form action="<?= BASE_URL ?>/controllers/ContactoController.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="txtNombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="txtEmail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="txtMensaje" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar Comentario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT_PATH . '/views/layout/footer.php'; ?>