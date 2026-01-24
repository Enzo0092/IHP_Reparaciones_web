<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>Reparación de Celulares</h2>
    <p>
        Servicio técnico especializado en teléfonos móviles.
        Diagnóstico real, reparación profesional y repuestos de calidad.
    </p>
    
    <div class="grid-servicios">
        <div class="card">
            <h3>Pantallas</h3>
            <p>Cambio de módulos, táctiles y vidrios originales o de calidad.</p>
        </div>

        <div class="card">
            <h3>Baterías</h3>
            <p>Reemplazo de baterías agotadas o defectuosas con garantía.</p>
        </div>

        <div class="card">
            <h3>Puertos de carga</h3>
            <p>Reparación y cambio de conectores USB-C, Lightning y Micro-USB.</p>
        </div>

        <div class="card">
            <h3>Sistemas operativos</h3>
            <p>Actualizaciones, desbloqueos, reinstalación de Android/iOS.</p>
        </div>

        <div class="card">
            <h3>Cámaras y audio</h3>
            <p>Reparación de módulos de cámara, micrófonos y altavoces.</p>
        </div>

        <div class="card">
            <h3>Diagnóstico gratuito</h3>
            <p>Evaluación completa del equipo sin costo inicial.</p>
        </div>
    </div>

    <!-- SECCIÓN DE MARCAS -->
    <section class="marcas">
        <h3>Marcas que reparamos</h3>
        <div class="marcas-lista">
            <span>Samsung</span>
            <span>iPhone</span>
            <span>Xiaomi</span>
            <span>Motorola</span>
            <span>Huawei</span>
            <span>LG</span>
            <span>Sony</span>
            <span>Nokia</span>
        </div>
    </section>
</main>

<?= $this->endSection() ?>