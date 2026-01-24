<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<!-- QUIÉNES SOMOS -->
<section id="quienes" class="contenedor">
    <h2>Quiénes Somos</h2>
    <p>
        En <strong>IHP Reparaciones</strong> nos especializamos en la reparación
        de celulares, computadoras y equipos electrónicos. Trabajamos con
        diagnóstico real, soluciones claras y atención personalizada.
    </p>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="contenedor">
    <h2>Servicios</h2>

    <div class="grid-servicios">
        <!-- CELULARES -->
        <a href="<?= site_url('celulares') ?>" class="card-link">
            <div class="card">
                <h3>Reparación de Celulares</h3>
                <p>
                    Cambio de pantallas, baterías, puertos de carga, software y
                    diagnóstico electrónico.
                </p>
            </div>
        </a>

        <!-- PCS -->
        <a href="<?= site_url('pcs') ?>" class="card-link">
            <div class="card">
                <h3>Computadoras y Notebooks</h3>
                <p>
                    Instalación de sistemas, mantenimiento, limpieza interna,
                    optimización y upgrades.
                </p>
            </div>
        </a>

        <!-- CONSOLAS -->
        <a href="<?= site_url('consolas') ?>" class="card-link">
            <div class="card">
                <h3>Consolas de videojuegos</h3>
                <p>
                    Mantenimiento, limpieza interna,
                    optimización, Reparación a nivel electrónico.
                </p>
            </div>
        </a>

        <!-- PIEZAS -->
        <a href="<?= site_url('piezas') ?>" class="card-link">
            <div class="card">
                <h3>Venta de Piezas</h3>
                <p>
                    Componentes originales y de calidad para tus reparaciones.
                </p>
            </div>
        </a>
    </div>
</section>

<!-- DESARROLLO DE SOFTWARE -->
<section id="desarrollo" class="contenedor">
    <h2>Desarrollo de Software</h2>
    <p>
        También ofrecemos servicios de desarrollo de software a medida,
        aplicaciones web y soluciones digitales para tu negocio.
    </p>
</section>

<!-- TESTIMONIOS -->
<section id="testimonios" class="contenedor">
    <h2>Experiencias de clientes</h2>

    <blockquote>
        "Excelente atención y diagnóstico claro. El equipo quedó funcionando
        perfecto."
    </blockquote>

    <blockquote>
        "Trabajo prolijo, precios razonables y mucha transparencia."
    </blockquote>
</section>

<!-- YOUTUBE -->
<section id="youtube" class="contenedor">
    <h2>Contenido técnico</h2>
    <p>
        Próximamente voy a estar subiendo reparaciones reales y procesos técnicos
        a mi canal de YouTube.
    </p>
</section>

<?= $this->endSection() ?>