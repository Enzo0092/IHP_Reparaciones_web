<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>🎬 Canal de YouTube</h2>
    <p class="subtitulo">
        Tutoriales, reparaciones reales y contenido técnico para aprender sobre electrónica e informática.
    </p>

    <!-- VIDEO DESTACADO -->
    <div class="video-destacado">
        <div class="video-container">
            <div class="video-placeholder">
                <div style="background: #1a1a1a; border-radius: 12px; padding: 40px; text-align: center; border: 2px solid var(--granate);">
                    <div style="font-size: 3rem; margin-bottom: 20px;">🎥</div>
                    <h3 style="color: var(--dorado); margin-bottom: 10px;">Próximamente en YouTube</h3>
                    <p>Estamos preparando contenido de calidad sobre reparaciones y tecnología.</p>
                    <div style="margin-top: 20px; font-size: 0.9rem; color: #888;">
                        📅 Primer video: <strong>Marzo 2026</strong>
                    </div>
                </div>
            </div>
        </div>
        <p style="text-align: center; margin-top: 20px; font-style: italic;">
            Suscríbete para no perderte nuestro primer video tutorial
        </p>
    </div>

    <!-- SECCIÓN DE CONTENIDO PLANEADO -->
    <section class="seccion-tematicas">
        <h3>📋 Contenido que Estamos Preparando</h3>
        
        <div class="grid-servicios" style="margin-top: 30px;">
            <div class="card">
                <h4>🔧 Reparaciones Paso a Paso</h4>
                <p>Tutoriales completos de reparaciones reales: cambio de pantallas, baterías, puertos de carga y diagnóstico electrónico.</p>
            </div>
            
            <div class="card">
                <h4>💻 Tips Técnicos</h4>
                <p>Consejos rápidos para mantenimiento preventivo, optimización de equipos y solución de problemas comunes.</p>
            </div>
            
            <div class="card">
                <h4>🎮 Análisis de Hardware</h4>
                <p>Reviews de herramientas, componentes y equipos que utilizamos en nuestro taller.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN DE TEMÁTICAS -->
    <section class="marcas contenedor">
        <h3>🎯 Temáticas del Canal</h3>
        <div class="marcas-lista">
            <span>Reparación Celulares</span>
            <span>Electrónica</span>
            <span>Computadoras</span>
            <span>Consolas</span>
            <span>Soldadura</span>
            <span>Diagnóstico</span>
            <span>Herramientas</span>
            <span>Tutoriales</span>
        </div>
    </section>

    <!-- BENEFICIOS DE SUSCRIBIRSE -->
    <section class="contenedor" style="margin-top: 3rem; padding: 2rem; background: rgba(20, 20, 20, 0.8); border-radius: 12px; border: 1px solid var(--granate);">
        <h3 style="color: var(--dorado); text-align: center; margin-bottom: 25px;">🌟 ¿Por Qué Suscribirte?</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
            <div style="text-align: center;">
                <div style="font-size: 2rem; margin-bottom: 15px;">🎓</div>
                <h4 style="color: var(--dorado); margin-bottom: 10px;">Aprende Gratis</h4>
                <p>Contenido educativo gratuito sobre reparación y tecnología.</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 2rem; margin-bottom: 15px;">⚡</div>
                <h4 style="color: var(--dorado); margin-bottom: 10px;">Contenido Práctico</h4>
                <p>Tutoriales basados en reparaciones reales de nuestro taller.</p>
            </div>
            
            <div style="text-align: center;">
                <div style="font-size: 2rem; margin-bottom: 15px;">💬</div>
                <h4 style="color: var(--dorado); margin-bottom: 10px;">Comunidad</h4>
                <p>Resuelve tus dudas y comparte experiencias con otros técnicos.</p>
            </div>
        </div>
    </section>

    <!-- LLAMADA A LA ACCIÓN -->
    <section class="contenedor" style="margin-top: 3rem; text-align: center;">
        <h3 style="color: var(--dorado);">🚀 Sé Parte de Nuestra Comunidad</h3>
        <p style="margin: 1rem 0 1.5rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Suscríbete ahora y activa la campanita para recibir notificaciones cuando subamos nuevo contenido.
        </p>
        
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-top: 2rem;">
            <a href="https://www.youtube.com/" 
               target="_blank"
               style="background: #FF0000; color: white; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: bold; display: flex; align-items: center; gap: 10px; transition: 0.3s;">
                <span style="font-size: 1.2rem;">▶️</span> Ir a YouTube
            </a>
            
            <a href="https://www.youtube.com/channel/UCqN2YvnI1lLqR7x4VQZQ" 
               target="_blank"
               style="background: var(--granate); color: white; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: bold; display: flex; align-items: center; gap: 10px; transition: 0.3s;">
                <span style="font-size: 1.2rem;">🔔</span> Suscribirse
            </a>
        </div>
        
        <div style="margin-top: 2rem; display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
            <div style="text-align: center;">
                <div style="font-size: 1.8rem; color: var(--dorado); font-weight: bold;">0</div>
                <div style="font-size: 0.9rem; color: #888;">Videos</div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 1.8rem; color: var(--dorado); font-weight: bold;">0</div>
                <div style="font-size: 0.9rem; color: #888;">Suscriptores</div>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 1.8rem; color: var(--dorado); font-weight: bold;">0</div>
                <div style="font-size: 0.9rem; color: #888;">Visualizaciones</div>
            </div>
        </div>
    </section>

    <!-- FORMULARIO DE SUGERENCIAS -->
    <section class="contenedor" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h3 style="color: var(--dorado); text-align: center;">💡 ¿Qué Te Gustaría Ver?</h3>
        <p style="text-align: center; margin: 1rem 0 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Ayúdanos a crear contenido que realmente te interese. ¿Qué temas te gustaría que cubramos?
        </p>
        
        <form action="mailto:romeroenzofabian@gmail.com" method="post" enctype="text/plain" style="max-width: 500px; margin: 0 auto;">
            <textarea 
                name="sugerencia" 
                placeholder="Ej: Tutorial de cambio de pantalla en iPhone 12, mantenimiento de PS5, cómo diagnosticar fallas en laptop..."
                rows="4"
                style="width: 100%; padding: 12px; background: #1a1a1a; border: 1px solid var(--granate); color: white; border-radius: 6px; margin-bottom: 15px;"
                required></textarea>
            
            <div style="text-align: center;">
                <button type="submit" style="background: var(--dorado); color: black; padding: 10px 25px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; transition: 0.3s;">
                    Enviar Sugerencia
                </button>
            </div>
        </form>
    </section>
</main>

<?= $this->endSection() ?>