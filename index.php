<?php 
// 1. Cargar la configuración global
require_once 'config.php'; 

// 2. Incluir componentes usando la ruta absoluta interna
include ROOT_PATH . '/views/layout/header.php'; 
?>

<main class="section">
    <div class="container">
        
        <div class="columns">
            <div class="column is-8">
                
                <div class="columns">
                    <div class="column is-12">
                        <article class="card has-background-link-light">
                            <div class="card-content">
                                <span class="tag is-link is-uppercase">Lo Último</span>
                                <h1 class="title is-2 mt-2">Nueva Red de Fibra Óptica en Coquimbo</h1>
                                <p class="subtitle is-5 mt-1">La implementación de infraestructura digital comenzará masivamente este mes, conectando de forma óptima a la cuarta región.</p>
                                <button class="button is-link is-small">Leer cobertura completa</button>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns is-multiline mt-4">
                    <div class="column is-6">
                        <article class="card">
                            <div class="card-content">
                                <span class="tag is-warning is-light">Cultura</span>
                                <h2 class="title is-5 mt-2">Festival de Otoño</h2>
                                <p class="is-size-6">Este fin de semana arranca el hito cultural más esperado por la comunidad local.</p>
                            </div>
                        </article>
                    </div>

                    <div class="column is-6">
                        <article class="card">
                            <div class="card-content">
                                <span class="tag is-success is-light">Economía</span>
                                <h2 class="title is-5 mt-2">Auge de las PYMES</h2>
                                <p class="is-size-6">El comercio minorista del centro reporta alzas sustanciales del 20% en ventas.</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns mt-5">
                    <div class="column is-6">
                        <div class="box">
                            <h3 class="title is-5">📺 Reporte en Video</h3>
                            <p class="is-size-7 mb-3">Informe de corresponsales sobre la situación de salud internacional.</p>
                            <figure class="image is-16by9">
                                <video controls style="border-radius: 6px; height: 100%; width: 100%; object-fit: cover;">
                                    <source src="<?= BASE_URL ?>/src/video_noticia.mp4" type="video/mp4">
                                    Tu navegador no soporta el formato de video.
                                </video>
                            </figure>
                        </div>
                    </div>

                    <div class="column is-6">
                        <div class="box" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h3 class="title is-5">🎧 Reporte Audiovisual</h3>
                                <p class="is-size-7 mb-4">Crónica radial compacta grabada directamente desde los puntos de prensa.</p>
                            </div>
                            <div class="py-3">
                                <audio controls style="width: 100%;">
                                    <source src="<?= BASE_URL ?>/src/audio_noticia.mp3" type="audio/mpeg">
                                    Tu navegador no soporta el formato de audio.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
            
            <aside class="column is-4">
                <div class="sidebar-sticky">
                    <div class="box has-background-info-light mb-4">
                        <h3 class="title is-5 has-text-info-dark">🌦️ El Clima de Hoy</h3>
                        <hr class="has-background-info-soft my-2">
                        <p class="is-size-6">Se ratifican los cielos despejados para la franja costera con temperaturas que rozarán unos agradables <strong>20°C</strong>.</p>
                    </div>

                    <div class="box">
                        <h3 class="title is-5 has-text-link">🔥 Lo más leído</h3>
                        <hr class="my-2">
                        <ul class="is-size-6">
                            <li class="py-2 border-bottom">
                                <a href="<?= BASE_URL ?>/deportes.php" class="has-text-dark"><strong>1.</strong> ¡Triunfo Histórico! Coquimbo se queda con el clásico regional por 3-0.</a>
                            </li>
                            <li class="py-2">
                                <a href="<?= BASE_URL ?>/negocios.php" class="has-text-dark"><strong>2.</strong> Universidad de La Serena convoca a talleres abiertos de economía.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside> 
        </div> 

        <div class="mt-6 pt-5" style="border-top: 2px solid #f5f5f5;">
            <h3 class="title is-4 mb-4">💬 Espacio de la Comunidad</h3>
            
            <div class="columns">
                <div class="column is-7">
                    <div class="box">
                        <h4 class="subtitle is-5 has-text-weight-bold mb-3">Deja tu comentario</h4>
                        
                        <form action="<?= BASE_URL ?>/controllers/ComentarioController.php" method="POST">
                            <div class="field mb-3">
                                <label class="label is-small">Nombre o Alias</label>
                                <div class="control">
                                    <input class="input is-small" name="txtNombre" type="text" placeholder="Ej. Juan Pérez" required>
                                </div>
                            </div>

                            <div class="field mb-3">
                                <label class="label is-small">Correo Electrónico</label>
                                <div class="control">
                                    <input class="input is-small" name="txtEmail" type="email" placeholder="nombre@correo.com" required>
                                </div>
                            </div>

                            <div class="field mb-4">
                                <label class="label is-small">Tu Comentario</label>
                                <div class="control">
                                    <textarea class="textarea is-small" name="txtComentario" rows="3" placeholder="Escribe tu opinión sobre las noticias de hoy..." required></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-small is-fullwidth" type="submit">
                                        Publicar Comentario
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="mt-5">
                            <h5 class="is-size-7 has-text-weight-bold has-text-grey mb-2">Comentarios Recientes (1)</h5>
                            <div class="notification is-light p-3">
                                <p class="is-size-7 mb-1"><strong>@vecino_coquimbo</strong> <span class="has-text-grey">- Hace 10 min</span></p>
                                <p class="is-size-6">Excelente la iniciativa de la fibra óptica, hace mucha falta mejorar la estabilidad de la red en los sectores residenciales de la comuna.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-5">
                    <div class="box has-background-link-light" style="height: 100%;">
                        <h4 class="subtitle is-5 has-text-weight-bold mb-3">🔗 Portales Asociados</h4>
                        <p class="is-size-7 mb-4 has-text-grey-dark">Encuentra más información relevante y servicios de utilidad pública en nuestra red de colaboración:</p>
                        
                        <div class="buttons">
                            <a href="https://www.municoquimbo.cl" target="_blank" class="button is-white is-small is-fullwidth justify-content-start mb-2 shadow-sm">
                                <span>🏛️ Ilustre Municipalidad de Coquimbo</span>
                            </a>
                            <a href="https://www.userena.cl" target="_blank" class="button is-white is-small is-fullwidth justify-content-start mb-2 shadow-sm">
                                <span>🎓 Universidad de La Serena</span>
                            </a>
                            <a href="#" class="button is-white is-small is-fullwidth justify-content-start mb-2 shadow-sm">
                                <span>🚌 Transportes y Conectividad IV Región</span>
                            </a>
                            <a href="#" class="button is-white is-small is-fullwidth justify-content-start shadow-sm">
                                <span>🏥 Red de Salud Coquimbo-La Serena</span>
                            </a>
                        </div>
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