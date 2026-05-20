<?php 
// 1. Cargar la configuración global
require_once 'config.php'; 

// 2. Incluir componentes usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/header.php'; 
?>

<div class="notification is-link is-light has-text-centered is-marginless p-2 is-radiusless">
    <strong>DEPORTES:</strong> Se abren de forma oficial las inscripciones para la Maratón Solidaria Borde Costero 2026.
</div>

<main class="section">
    <div class="container">
        
        <h1 class="title is-3">Actualidad Deportiva</h1>
        <hr>

        <div class="columns">
            <div class="column is-8">
                
                <div class="columns">
                    <div class="column is-12">
                        <article class="card has-background-link-light" style="border-left: 5px solid #3273dc;">
                            <div class="card-content">
                                <span class="tag is-link is-rounded has-text-weight-bold">FÚTBOL</span>
                                <h2 class="title is-2 mt-2">¡Triunfo Local en el Clásico Regional!</h2>
                                <p class="subtitle is-5 mt-1">El equipo de <strong>Coquimbo ganó 3-0</strong> el clásico regional ante Deportes La Serena, dominando el encuentro de principio a fin ante un estadio colmado de hinchas locales.</p>
                                <button class="button is-link is-small mt-2">Leer crónica completa del partido</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns is-multiline mt-4">
                    <div class="column is-6">
                        <article class="card" style="height: 100%;">
                            <div class="card-content">
                                <span class="tag is-info is-light is-rounded has-text-weight-bold">ATLETISMO</span>
                                <h3 class="title is-5 mt-2">Gran Éxito en la Maratón Anual</h3>
                                <p class="is-size-6 mt-1">Más de 500 corredores de distintas comunas participaron con entusiasmo en la masiva carrera solidaria regional por la costanera.</p>
                            </div>
                        </article>
                    </div>

                    <div class="column is-6">
                        <article class="card" style="height: 100%;">
                            <div class="card-content">
                                <span class="tag is-info is-light is-rounded has-text-weight-bold">INFRAESTRUCTURA</span>
                                <h3 class="title is-5 mt-2">Nuevo Centro Deportivo de Alto Rendimiento</h3>
                                <p class="is-size-6 mt-1">Se inaugura un moderno complejo con equipamiento de primer nivel para potenciar a los deportistas de élite de la cuarta región.</p>
                            </div>
                        </article>
                    </div>
                </div> 
            </div> 
            
            <aside class="column is-4">
                <div class="sidebar-sticky">
                    
                    <div class="box has-background-white-ter">
                        <h3 class="title is-5 has-text-grey-dark">📅 Próximos Eventos</h3>
                        <hr class="my-2">
                        <ul class="is-size-6">
                            <li class="py-2 border-bottom">
                                <strong>Sábado 10:00:</strong> Ciclismo Ruta Costera.
                            </li>
                            <li class="py-2">
                                <strong>Domingo 12:00:</strong> Cuadrangular de Vóleibol.
                            </li>
                        </ul>
                    </div>

                    <div class="box">
                        <h3 class="title is-5 has-text-link">📊 Tabla Regional</h3>
                        <hr class="my-2">
                        <table class="table is-fullwidth is-striped is-narrow">
                            <thead>
                                <tr><th>Pos</th><th>Equipo</th><th class="has-text-right">Pts</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td><td><strong>Coquimbo</strong></td><td class="has-text-right">24</td></tr>
                                <tr><td>2</td><td>La Serena</td><td class="has-text-right">19</td></tr>
                                <tr><td>3</td><td>Ovalle</td><td class="has-text-right">15</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </aside> 
        </div> 
    </div>
</main>

<?php 
// 3. Incluir el cierre usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/footer.php'; 
?>