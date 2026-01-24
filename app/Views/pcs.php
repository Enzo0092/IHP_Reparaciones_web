<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>Computadoras y Notebooks</h2>
    <p>
        Servicio técnico especializado en PC y laptops.
        Mantenimiento, reparación, upgrades y optimización.
    </p>

    <div class="grid-servicios">
        <div class="card">
            <h3>Mantenimiento y Limpieza</h3>
            <p>Limpieza interna, cambio de pasta térmica y control térmico profundo.</p>
        </div>

        <div class="card">
            <h3>Instalación de Sistemas</h3>
            <p>Windows, Linux, drivers, software esencial y optimización general.</p>
        </div>

        <div class="card">
            <h3>Upgrades y Mejoras</h3>
            <p>Instalación de SSD, aumento de RAM, tarjetas gráficas y asesoramiento técnico.</p>
        </div>

        <div class="card">
            <h3>Reparación de Hardware</h3>
            <p>Diagnóstico y solución de problemas de placa madre, fuente de poder, discos duros.</p>
        </div>

        <div class="card">
            <h3>Recuperación de Datos</h3>
            <p>Recuperación de archivos eliminados, discos dañados y backups de emergencia.</p>
        </div>

        <div class="card">
            <h3>Armado de PC Gamer</h3>
            <p>Asesoramiento, armado y configuración de equipos gaming personalizados.</p>
        </div>
    </div>

    <!-- SECCIÓN DE TIPOS DE EQUIPOS -->
    <section class="marcas contenedor">
        <h3>Equipos que reparamos</h3>
        <div class="marcas-lista">
            <span>PC de Escritorio</span>
            <span>Notebooks/Laptops</span>
            <span>All-in-One</span>
            <span>Workstations</span>
            <span>Servidores</span>
            <span>Mini PC</span>
            <span>Tablets Windows</span>
            <span>Equipos Apple</span>
        </div>
    </section>

    <!-- SECCIÓN DE MARCAS -->
    <section class="marcas contenedor">
        <h3>Marcas que trabajamos</h3>
        <div class="marcas-lista">
            <span>HP</span>
            <span>Dell</span>
            <span>Lenovo</span>
            <span>Asus</span>
            <span>Acer</span>
            <span>MSI</span>
            <span>Apple</span>
            <span>Toshiba</span>
        </div>
    </section>
</main>

<?= $this->endSection() ?>