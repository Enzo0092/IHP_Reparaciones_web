<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('contenido') ?>

<main class="contenedor">
    <h2>Venta de Piezas y Componentes</h2>
    <p>
        Distribuidores oficiales de repuestos originales y de alta calidad.
        Todo lo que necesitas para tus reparaciones en un solo lugar.
    </p>

    <div class="grid-servicios">
        <div class="card">
            <h3>Pantallas y Display</h3>
            <p>
                Pantallas originales y de calidad para celulares, tablets y laptops.
                Módulos completos, táctiles y vidrios templados.
            </p>
        </div>

        <div class="card">
            <h3>Baterías</h3>
            <p>
                Baterías con celdas de calidad y garantía para todos los dispositivos.
                Certificadas por estándares internacionales.
            </p>
        </div>

        <div class="card">
            <h3>Componentes PC</h3>
            <p>
                Fuentes de poder, memorias RAM, SSD, discos duros, tarjetas gráficas,
                motherboards y sistemas de refrigeración.
            </p>
        </div>

        <div class="card">
            <h3>Conectores y Puertos</h3>
            <p>
                Puertos de carga USB-C, Lightning, Micro-USB, conectores HDMI,
                puertos de audio y componentes de soldadura.
            </p>
        </div>

        <div class="card">
            <h3>Repuestos Consolas</h3>
            <p>
                Componentes específicos para PlayStation, Xbox y Nintendo.
                Ventiladores, fuentes, lectores de disco y conectores.
            </p>
        </div>

        <div class="card">
            <h3>Herramientas y Accesorios</h3>
            <p>
                Juegos de destornilladores, estaciones de soldadura, multímetros,
                pasta térmica, cintas adhesivas y kits de reparación.
            </p>
        </div>
    </div>

    <!-- SECCIÓN DE MARCAS -->
    <section class="marcas contenedor">
        <h3>Marcas Disponibles</h3>
        <div class="marcas-lista">
            <span>Samsung</span>
            <span>iPhone</span>
            <span>Xiaomi</span>
            <span>Motorola</span>
            <span>LG</span>
            <span>Huawei</span>
            <span>Sony</span>
            <span>HP</span>
            <span>Dell</span>
            <span>Lenovo</span>
            <span>Asus</span>
            <span>Acer</span>
        </div>
    </section>

    <!-- SECCIÓN DE CATEGORÍAS -->
    <section class="contenedor" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(212, 175, 55, 0.3);">
        <h3>Categorías de Productos</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div class="card" style="text-align: center; padding: 20px;">
                <h4 style="color: var(--dorado); margin-bottom: 10px;">📱 Celulares</h4>
                <p style="font-size: 0.9rem;">Pantallas, baterías, cámaras, micrófonos, módulos</p>
            </div>
            
            <div class="card" style="text-align: center; padding: 20px;">
                <h4 style="color: var(--dorado); margin-bottom: 10px;">💻 Computadoras</h4>
                <p style="font-size: 0.9rem;">RAM, SSD, fuentes, ventiladores, teclados</p>
            </div>
            
            <div class="card" style="text-align: center; padding: 20px;">
                <h4 style="color: var(--dorado); margin-bottom: 10px;">🎮 Consolas</h4>
                <p style="font-size: 0.9rem;">Fuentes, ventiladores, conectores, lectores</p>
            </div>
            
            <div class="card" style="text-align: center; padding: 20px;">
                <h4 style="color: var(--dorado); margin-bottom: 10px;">🔧 Herramientas</h4>
                <p style="font-size: 0.9rem;">Kit reparación, estaciones, multímetros</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN DE GARANTÍA -->
    <section class="contenedor" style="margin-top: 3rem; padding: 2rem; background: rgba(20, 20, 20, 0.8); border-radius: 12px; border: 1px solid var(--granate);">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
            <div>
                <h4 style="color: var(--dorado); margin-bottom: 15px;">✅ Garantía en Todos los Productos</h4>
                <p>Todas nuestras piezas incluyen garantía por escrito de 3 a 12 meses según el producto.</p>
            </div>
            
            <div>
                <h4 style="color: var(--dorado); margin-bottom: 15px;">🚚 Envíos a Todo el País</h4>
                <p>Despachamos a domicilio con seguimiento en línea y opciones de envío express.</p>
            </div>
            
            <div>
                <h4 style="color: var(--dorado); margin-bottom: 15px;">💎 Calidad Certificada</h4>
                <p>Trabajamos solo con distribuidores autorizados y productos de primera calidad.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN DE CONSULTA -->
    <section class="contenedor" style="margin-top: 3rem; text-align: center;">
        <h3 style="color: var(--dorado);">¿No Encontrás lo que Buscás?</h3>
        <p style="margin: 1rem 0 1.5rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Contamos con acceso a un amplio catálogo de proveedores. Consultanos por piezas específicas o componentes especiales.
        </p>
        
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-top: 2rem;">
            <a href="https://wa.me/5493795321712?text=Hola,%20quisiera%20consultar%20por%20piezas" 
               target="_blank"
               style="background: #25D366; color: white; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: bold; display: flex; align-items: center; gap: 10px;">
                📱 Consultar por WhatsApp
            </a>
            
            <a href="#contacto" 
               style="background: var(--granate); color: white; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: bold; display: flex; align-items: center; gap: 10px;">
                📧 Enviar Consulta
            </a>
        </div>
        
        <p style="margin-top: 1.5rem; font-size: 0.9rem; color: #888;">
            ⚡ Respuesta en menos de 24 horas
        </p>
    </section>
</main>

<?= $this->endSection() ?>