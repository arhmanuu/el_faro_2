<?php include 'views/layout/header.php'; ?>
    <main class="section">
        <div class="container">
            <h2 class="title is-3">Portada de Hoy</h2>
            <hr>

            <div class="columns">

                <div class="column is-8">

                    <div class="columns">
                        <div class="column is-12">
                            <article class="card has-background-link-light">
                                <div class="card-content">
                                    <span class="tag is-link">LO ÚLTIMO</span>
                                    <h3 class="title is-2 mt-2">Nueva Red de Fibra Óptica en Coquimbo</h3>
                                    <p class="subtitle is-4">La ciudad implementará tecnología de punta para mejorar la conectividad regional este 2026.</p>
                                    <button class="button is-link">Leer más</button>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="columns is-multiline">
                        <div class="column is-4">
                            <article class="card">
                                <div class="card-content">
                                    <h4 class="title is-6">Triunfo Local</h4>
                                    <p class="is-size-7">Coquimbo Unido vence 3-0 en el clásico.</p>
                                </div>
                            </article>
                        </div>

                        <div class="column is-4">
                            <article class="card">
                                <div class="card-content">
                                    <h4 class="title is-6">Auge PYME</h4>
                                    <p class="is-size-7">Crecimiento del 20% en el centro.</p>
                                </div>
                            </article>
                        </div>

                        <div class="column is-4">
                            <article class="card">
                                <div class="card-content">
                                    <h4 class="title is-6">Festival Otoño</h4>
                                    <p class="is-size-7">Cultura: Este viernes inicia el evento.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <aside class="column is-4">
                    <div class="box">
                        <h3 class="title is-5 has-text-link">🔥 Más visitados</h3>
                        <ul class="is-size-6">
                            <li class="mb-2"><a href="#">1. Bono Conectividad 2026</a></li>
                            <li class="mb-2"><a href="#">2. Resultados del Clásico</a></li>
                            <li class="mb-2"><a href="#">3. Clima: Alerta Costera</a></li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>

        <div class="mt-6">
            <h3 class="title is-4 has-text-centered">Reportes Multimedia</h3>
            <hr>

            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="box has-background-info-light">
                        <h4 class="title is-5">📺 Noticia en Video</h4>
                        <p class="subtitle is-6 mb-3">Virus azota nuevamente el continente asiático.</p>
                        <figure class="image is-21by9">
                            <video controls style="border-radius: 8px; object-fit: cover;">
                                <source src="src/video_noticia.mp4" type="video/mp4">
                                Tu navegador no soporta el formato de video.
                            </video>
                        </figure>
                    </div>
                </div>

                <div class="column is-6">
                    <div class="box has-background-info-light">
                        <h4 class="title is-5">🎧 Audio Noticia</h4>
                        <p class="subtitle is-6 mb-3">Análisis: Impacto económico en la región.</p>
                        <div class="content has-text-centered mt-5">
                            <audio controls style="width: 100%;">
                                <source src="src/audio_noticia.mp3" type="audio/mpeg">
                                Tu navegador no soporta el formato de audio.
                            </audio>
                        </div>
                        <p class="is-size-7 mt-4 has-text-centered has-text-grey">
                            *Escucha el reporte completo de nuestros corresponsales.*
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include 'views/layout/footer.php'; ?>