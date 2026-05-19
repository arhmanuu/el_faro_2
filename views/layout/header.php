<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias El Faro - Inicio Profesional</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>

    <div class="notification is-warning is-light has-text-centered is-marginless p-2 is-radiusless">
        <strong>AVISO DE ÚLTIMA HORA:</strong> Coquimbo implementará nueva red de fibra óptica este mes.
    </div>

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="<?= BASE_URL ?>/index.php">
                    <img src="<?= BASE_URL ?>/src/logo_referencia.png" alt="Logo El Faro" style="max-height: 70px;">
                    <span class="ml-3 is-size-4 has-text-weight-bold">EL FARO</span>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>

                </a>
            </div>

            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="<?= BASE_URL ?>/index.php">Inicio</a>
                    <a class="navbar-item" href="<?= BASE_URL ?>/deportes.php">Deportes</a>
                    <a class="navbar-item" href="<?= BASE_URL ?>/negocios.php">Negocios</a>
                    <a class="navbar-item" href="<?= BASE_URL ?>/views/contacto.php">contacto</a>
                </div>
            </div>
        </div>
    </nav>