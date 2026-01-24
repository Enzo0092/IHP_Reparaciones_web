<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>Reparación de Consolas</h2>
    <p>
        Servicio técnico especializado en consolas de videojuegos.
        Diagnóstico preciso, reparación profesional y mantenimiento preventivo.
    </p>

    <div class="grid-servicios">
        <div class="card">
            <h3>PlayStation</h3>
            <p>
                Reparación de PS4, PS5, PS3: limpieza interna, cambio de HDMI, fuentes de poder,
                problemas de encendido, sobrecalentamiento y discos atascados.
            </p>
        </div>

        <div class="card">
            <h3>Xbox</h3>
            <p>
                Xbox One, Series X/S, Xbox 360: fallas de video, fuentes de poder,
                mantenimiento preventivo, reparación de placa madre y discos rígidos.
            </p>
        </div>

        <div class="card">
            <h3>Nintendo</h3>
            <p>
                Nintendo Switch, Wii U, 3DS: cambio de pantalla, conector de carga,
                joy-con drift, reparación de dock y mantenimiento general.
            </p>
        </div>

        <div class="card">
            <h3>Limpieza Profunda</h3>
            <p>
                Eliminación completa de polvo, cambio de pasta térmica,
                limpieza de ventiladores y sistema de refrigeración.
            </p>
        </div>

        <div class="card">
            <h3>Reparación Electrónica</h3>
            <p>
                Diagnóstico de componentes, cambio de capacitores,
                reparación de circuitos y solución de fallas eléctricas.
            </p>
        </div>

        <div class="card">
            <h3>Problemas de Disco/SSD</h3>
            <p>
                Cambio de unidades de almacenamiento, instalación de SSD,
                recuperación de datos y solución de errores de lectura.
            </p>
        </div>
    </div>

    <!-- SECCIÓN DE SERVICIOS ESPECÍFICOS -->
    <section class="marcas contenedor">
        <h3>Servicios Especializados</h3>
        <div class="marcas-lista">
            <span>Diagnóstico Gratuito</span>
            <span>Limpieza Interna</span>
            <span>Cambio de Pasta Térmica</span>
            <span>Reparación de HDMI</span>
            <span>Fuentes de Poder</span>
            <span>Problemas de Encendido</span>
            <span>Sobrecalentamiento</span>
            <span>Errores de Disco</span>
        </div>
    </section>

    <!-- SECCIÓN DE CONSOLAS -->
    <section class="marcas contenedor">
        <h3>Consolas que Reparamos</h3>
        <div class="marcas-lista">
            <span>PS5</span>
            <span>PS4</span>
            <span>PS3</span>
            <span>Xbox Series X/S</span>
            <span>Xbox One</span>
            <span>Xbox 360</span>
            <span>Nintendo Switch</span>
            <span>Nintendo Wii U</span>
            <span>Nintendo 3DS</span>
            <span>PS Vita</span>
            <span>PSP</span>
        </div>
    </section>

    <!-- SECCIÓN DE GARANTÍA -->
    <section class="contenedor" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h3>Nuestro Compromiso</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 30px;">
            <div class="card">
                <h4>Diagnóstico Preciso</h4>
                <p>Evaluación completa sin costo. Te explicamos exactamente qué necesita tu consola.</p>
            </div>
            
            <div class="card">
                <h4>Repuestos de Calidad</h4>
                <p>Utilizamos componentes originales o de primera calidad con garantía.</p>
            </div>
            
            <div class="card">
                <h4>Garantía en Reparaciones</h4>
                <p>Todas nuestras reparaciones incluyen garantía por escrito.</p>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection() ?>