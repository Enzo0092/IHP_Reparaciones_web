<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $titulo ?? 'IHP Reparaciones | Servicio Técnico' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <style>
    .banner {
        background-image: url('<?= base_url("assets/images/banner.png") ?>');
    }
    </style>
</head>

<body>
    <!-- HEADER / BANNER -->
    <header class="banner">
        <div class="banner-content">
            <img
                src="<?= base_url('assets/images/logo.png') ?>"
                alt="Logo IHP Reparaciones"
                class="logo"
            />

            <h1>IHP Reparaciones</h1>
            <p>
                Servicio técnico en Electrónica e Informática <br />
                <strong>
                    Soluciones Digitales, Desarrollo de Software y Marketing
                </strong>
            </p>

            <nav class="nav">
                <button class="menu-toggle" id="menu-toggle">
                    ☰
                </button>

                <ul class="nav-list" id="nav-list">
                    <li><a href="<?= site_url('/') ?>">Inicio</a></li>
                    <li><a href="<?= site_url('celulares') ?>">Celulares</a></li>
                    <li><a href="<?= site_url('pcs') ?>">PCs</a></li>
                    <li><a href="<?= site_url('consolas') ?>">Consolas</a></li>
                    <li><a href="<?= site_url('desarrollo') ?>">Desarrollo</a></li>
                    <li><a href="<?= site_url('youtube') ?>">YouTube</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- CONTENIDO DINÁMICO -->
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>

    <!-- FOOTER -->
    <footer id="contacto">
        <h2>Contacto</h2>

        <ul class="footer-links">
            <li>
                <a href="https://www.instagram.com/ihp_reparaciones/" target="_blank">
                    📷 Instagram
                </a>
            </li>

            <li>
                <a href="https://www.whatsapp.com/catalog/5493795321712/?app_absent=0" target="_blank">
                    📲 WhatsApp
                </a>
            </li>
        </ul>

        <form action="mailto:romeroenzofabian@gmail.com" method="post" enctype="text/plain">
            <input type="text" name="nombre" placeholder="Tu nombre" required />
            <input type="email" name="email" placeholder="Tu correo" required />
            <textarea name="mensaje" placeholder="Escribí tu mensaje..." rows="5"></textarea>
            <button type="submit">Enviar</button>
        </form>

        <p class="copy">© <?= date('Y') ?> IHP Reparaciones</p>
    </footer>

    <script src="<?= base_url('assets/js/Menu.js') ?>"></script>
</body>
</html>