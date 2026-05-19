<?php 
// 1. Cargar la configuración global
require_once 'config.php'; 

// 2. Incluir componentes usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/header.php'; 
?>
    <div class="notification is-success is-light has-text-centered is-marginless p-2 is-radiusless">
        <strong>MERCADOS:</strong> Startup regional lanza paneles solares accesibles en Coquimbo.
    </div>
    <main class="section">
        <div class="container">

            <h1 class="title">Economía y Negocios</h1>
            <hr>

            <div class="columns">
                <div class="column is-12">
                    <div class="card has-background-success-light">
                        <div class="card-content">
                            <span class="tag is-success">Emprendimiento</span>
                            <h2 class="title is-2 mt-2">Auge de las PYMES en el Centro de Coquimbo</h2>
                            <p class="subtitle">Las pequeñas y medianas empresas reportan un crecimiento histórico del 20% en el primer trimestre de 2026.</p>
                            <button class="button is-success">Ver estadísticas</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns is-multiline">
                <div class="column is-6">
                    <div class="card">
                        <div class="card-content">
                            <span class="tag is-info is-light">Educación Financiera</span>
                            <h3 class="title is-4">Taller de Economía en la ULS</h3>
                            <p>Taller gratuito sobre inversiones se llevará a cabo en la Universidad de La Serena este martes 7 de abril a las 18:00 hrs.</p>
                        </div>
                    </div>
                </div>

                <div class="column is-6">
                    <div class="card">
                        <div class="card-content">
                            <span class="tag is-info is-light">Negocios Verdes</span>
                            <h3 class="title is-4">Innovación en Energía Solar</h3>
                            <p>Startup local y municipalidad de Coquimbo colaboran para llevar paneles solares a sectores residenciales.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php 
// 3. Incluir el cierre usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/footer.php'; 
?>