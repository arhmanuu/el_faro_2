<?php 
// 1. Cargar la configuración global
require_once 'config.php'; 

// 2. Incluir componentes usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/header.php'; 
?>

<div class="notification is-success is-light has-text-centered is-marginless p-2 is-radiusless">
    <strong>MERCADOS:</strong> Índices locales abren al alza impulsados por el sector tecnológico y energético.
</div>

<main class="section">
    <div class="container">
        
        <h1 class="title is-3">Economía y Negocios</h1>
        <hr>

        <div class="columns">
            <div class="column is-8">
                
                <div class="columns">
                    <div class="column is-12">
                        <article class="card has-background-success-light" style="border-left: 5px solid #48c78e;">
                            <div class="card-content">
                                <span class="tag is-success is-rounded has-text-weight-bold">EMPRENDIMIENTO</span>
                                <h2 class="title is-2 mt-2">Auge de las PYMES en el Centro de Coquimbo</h2>
                                <p class="subtitle is-5 mt-1">El comercio minorista del casco histórico reporta un sólido e histórico incremento del <strong>20% en sus ventas</strong> durante el primer trimestre, consolidando la reactivación local.</p>
                                <button class="button is-success is-small mt-2">Ver estadísticas completas</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns is-multiline mt-4">
                    <div class="column is-6">
                        <article class="card" style="height: 100%;">
                            <div class="card-content">
                                <span class="tag is-info is-rounded has-text-weight-bold">EDUCACIÓN FINANCIERA</span>
                                <h3 class="title is-5 mt-2">Convocatoria: Taller de Economía Gratuito</h3>
                                <p class="is-size-6 mt-1">La Universidad de La Serena abre inscripciones para su seminario de finanzas enfocado en la gestión de capital para empresas familiares.</p>
                            </div>
                        </article>
                    </div>

                    <div class="column is-6">
                        <article class="card" style="height: 100%;">
                            <div class="card-content">
                                <span class="tag is-success is-light is-rounded has-text-weight-bold">NEGOCIOS VERDES</span>
                                <h3 class="title is-5 mt-2">Innovación Regional en Energía Solar</h3>
                                <p class="is-size-6 mt-1">Nuevas Startups del norte del país lideran proyectos de implementación fotovoltaica industrial subsidiada para parcelas y predios agrícolas.</p>
                            </div>
                        </article>
                    </div>
                </div> 
            </div> 
            
            <aside class="column is-4">
                <div class="sidebar-sticky">
                    
                    <div class="box has-background-white-ter">
                        <h3 class="title is-5 has-text-grey-dark">📈 Indicadores de Hoy</h3>
                        <hr class="my-2">
                        <table class="table is-fullwidth is-striped is-hoverable is-narrow">
                            <tbody>
                                <tr><td><strong>USD</strong></td><td class="has-text-right">$925,40</td></tr>
                                <tr><td><strong>UF</strong></td><td class="has-text-right">$37.210,50</td></tr>
                                <tr><td><strong>UTM</strong></td><td class="has-text-right">$65.800,00</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box">
                        <h3 class="title is-5 has-text-link">🔗 Enlaces Asociados</h3>
                        <hr class="my-2">
                        <ul class="is-size-6">
                            <li class="py-1">
                                <a href="#" class="has-text-dark">Postulaciones Capital Semilla 2026</a>
                            </li>
                            <li class="py-1">
                                <a href="#" class="has-text-dark">Calendario Tributario Regional</a>
                            </li>
                        </ul>
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