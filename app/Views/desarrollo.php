<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>Desarrollo de Software</h2>
    <p>
        Creamos soluciones digitales personalizadas para potenciar tu negocio.
        Desde aplicaciones web hasta sistemas de gestión completos.
    </p>

    <div class="grid-servicios">
        <div class="card">
            <h3>Aplicaciones Web</h3>
            <p>
                Desarrollo de sitios web responsivos, aplicaciones web progresivas (PWA)
                y portales administrativos con tecnologías modernas.
            </p>
        </div>

        <div class="card">
            <h3>Sistemas a Medida</h3>
            <p>
                Software personalizado para gestión empresarial, inventarios,
                control de clientes y procesos específicos de tu negocio.
            </p>
        </div>

        <div class="card">
            <h3>E-commerce</h3>
            <p>
                Tiendas online completas con carrito de compras, pasarelas de pago,
                gestión de inventario y panel de administración.
            </p>
        </div>

        <div class="card">
            <h3>APIs y Servicios</h3>
            <p>
                Desarrollo de APIs RESTful, integración con servicios externos,
                automatización de procesos y microservicios.
            </p>
        </div>

        <div class="card">
            <h3>Mantenimiento Web</h3>
            <p>
                Actualización, optimización y mantenimiento continuo de sitios web
                existentes. Mejora de seguridad y rendimiento.
            </p>
        </div>

        <div class="card">
            <h3>Consultoría Técnica</h3>
            <p>
                Asesoramiento en tecnologías, arquitectura de software,
                migración de sistemas y optimización de procesos digitales.
            </p>
        </div>
    </div>

    <!-- SECCIÓN DE TECNOLOGÍAS -->
    <section class="marcas contenedor">
        <h3>Tecnologías que Utilizamos</h3>
        <div class="marcas-lista">
            <span>PHP</span>
            <span>CodeIgniter 4</span>
            <span>Laravel</span>
            <span>JavaScript</span>
            <span>React</span>
            <span>Vue.js</span>
            <span>MySQL</span>
            <span>PostgreSQL</span>
            <span>HTML5/CSS3</span>
            <span>Bootstrap</span>
            <span>Git</span>
            <span>APIs REST</span>
        </div>
    </section>

    <!-- SECCIÓN DE PROCESO -->
    <section class="contenedor" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h3>Nuestro Proceso de Desarrollo</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 30px;">
            <div class="card">
                <h4>1. Análisis y Planificación</h4>
                <p>Entendemos tus necesidades, definimos objetivos y creamos un plan detallado del proyecto.</p>
            </div>
            
            <div class="card">
                <h4>2. Diseño y Prototipado</h4>
                <p>Creamos wireframes y diseños UI/UX que se ajusten a tu marca y objetivos.</p>
            </div>
            
            <div class="card">
                <h4>3. Desarrollo</h4>
                <p>Programación con metodologías ágiles, código limpio y mejores prácticas.</p>
            </div>
            
            <div class="card">
                <h4>4. Pruebas y Ajustes</h4>
                <p>Testing exhaustivo, corrección de bugs y ajustes según tu feedback.</p>
            </div>
            
            <div class="card">
                <h4>5. Lanzamiento y Soporte</h4>
                <p>Implementación, capacitación y soporte post-lanzamiento con garantía.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN DE PROYECTOS -->
    <section class="contenedor" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h3>Tipos de Proyectos</h3>
        <div class="marcas-lista">
            <span>Sistemas de Gestión</span>
            <span>Tiendas Online</span>
            <span>Portales Web</span>
            <span>Aplicaciones Empresariales</span>
            <span>Landing Pages</span>
            <span>Blogs y CMS</span>
            <span>APIs Personalizadas</span>
            <span>Migraciones</span>
        </div>
    </section>

    <!-- SECCIÓN DE CONTACTO ESPECIAL -->
    <section class="contenedor" style="margin-top: 3rem; padding: 2rem; background: rgba(20, 20, 20, 0.8); border-radius: 12px; border: 1px solid var(--granate);">
        <h3 style="color: var(--dorado);">¿Necesitas un desarrollo específico?</h3>
        <p style="margin: 1rem 0 1.5rem;">Contáctanos para una consultoría gratuita. Analizamos tu proyecto y te damos un presupuesto sin compromiso.</p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
            <a href="#contacto" style="background: var(--dorado); color: black; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: bold; transition: 0.3s;">
                Contactar Ahora
            </a>
            <a href="mailto:romeroenzofabian@gmail.com" style="background: transparent; color: var(--dorado); padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; border: 2px solid var(--dorado); font-weight: bold; transition: 0.3s;">
                Enviar Email
            </a>
        </div>
    </section>
</main>

<?= $this->endSection() ?>