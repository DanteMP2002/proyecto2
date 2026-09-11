<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITY | INICIO</title>
    <link rel="icon" href="/public/img/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/estilo.css">
    <!-- Fuentes: Playfair Display para titulos elegantes, Inter para texto limpio -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ===== HEADER: logo + navegación ===== -->
    <header id="encabezado">
        <div class="logo">
            <a href="https://unitycetpro.wuaze.com/">
                <img src="/public/img/logo-blanco.webp" alt="Logo Unity">
            </a>
        </div>
        <nav class="menu-principal">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- ===== HERO: pantalla completa con imagen de fondo y llamada principal ===== -->
    <section id="inicio" class="hero">
        <div class="hero-contenido">
            <p class="hero-etiqueta">Salón de Estética</p>
            <h1>Tu mejor<br><em>versión</em></h1>
            <p class="hero-descripcion">Peluquería, barbería, uñas y tratamientos de belleza en Zarate, SJL.</p>
            <a href="#servicios" class="btn-hero">Ver servicios</a>
        </div>
    </section>

    <!-- ===== SERVICIOS: tarjetas con fondo fotográfico y overlay ===== -->
    <section id="servicios">

        <!-- Peluquería -->
        <article class="servicio-card" style="background-image: url('/public/img/peluqueria-fondo.webp');">
            <div class="servicio-overlay">
                <span class="servicio-numero">01</span>
                <h2>Peluquería</h2>
                <p>Corte, coloración y tratamientos profesionales para tu cabello.</p>
                <a href="#" class="btn-servicio">Ver más</a>
            </div>
        </article>

        <!-- Barbería -->
        <article class="servicio-card" style="background-image: url('/public/img/barberia-fondo.webp');">
            <div class="servicio-overlay">
                <span class="servicio-numero">02</span>
                <h2>Barbería</h2>
                <p>Cortes modernos y clásicos, perfilado y arreglo de barba.</p>
                <a href="#" class="btn-servicio">Ver más</a>
            </div>
        </article>

        <!-- Salón de Belleza -->
        <article class="servicio-card" style="background-image: url('/public/img/salon-fondo.webp');">
            <div class="servicio-overlay">
                <span class="servicio-numero">03</span>
                <h2>Salón de Belleza</h2>
                <p>Tratamientos faciales, maquillaje y cuidado integral de imagen.</p>
                <a href="#" class="btn-servicio">Ver más</a>
            </div>
        </article>

        <!-- Diseño de Uñas -->
        <article class="servicio-card" style="background-image: url('/public/img/unas-fondo.webp');">
            <div class="servicio-overlay">
                <span class="servicio-numero">04</span>
                <h2>Diseño de Uñas</h2>
                <p>Semipermanente, acrílico y nail art para tus manos y pies.</p>
                <a href="#" class="btn-servicio">Ver más</a>
            </div>
        </article>

    </section>

    <!-- ===== SOBRE NOSOTROS ===== -->
    <section id="nosotros">
        <div class="nosotros-contenido">
            <h2>Sobre Nosotros</h2>
            <p>Somos un equipo comprometido con tu bienestar y estilo. En Unity encontrarás profesionales especializados en cada área, un ambiente cálido y resultados que hablan por sí solos.</p>
        </div>
        <!-- Bloque de redes sociales de Facebook -->
        <div class="fb-embed">
            <iframe
                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid02LK8Q68wuCmJpfAqeRyTARkypSYdhz42p8bPn7LqZzGAAgDAHNJABVBbupw9C5LPHl%26id%3D61594175556210&show_text=true&width=500"
                width="500" height="227"
                style="border:none;overflow:hidden"
                scrolling="no" frameborder="0" allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
            </iframe>
        </div>
    </section>

    <!-- ===== FOOTER: contacto y redes sociales ===== -->
    <footer id="contacto">
        <div class="footer-grid">

            <!-- Columna 1: datos de contacto -->
            <div class="footer-col">
                <h3>Contacto</h3>
                <p>jiron Cajamarquilla 905, Zarate, SJL</p>
                <p>
                    <a href="https://wa.me/51920134856/" target="_blank">920-134-856</a>
                </p>
                <p>
                    <a href="mailto:contacto.unityestilos@gmail.com" target="_blank">
                        contacto.unityestilos@gmail.com
                    </a>
                </p>
            </div>

            <!-- Columna 2: mapa embebido -->
            <div class="footer-col footer-mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.5755348798444!2d-76.99953313045808!3d-12.02270829926326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5ee01df6595%3A0xe6913a74573c28ca!2sJiron%20Cajamarquilla%20905%2C%20San%20Juan%20de%20Lurigancho%2015401!5e0!3m2!1ses-419!2spe!4v1789063935753!5m2!1ses-419!2spe"
                    style="border:0; width:100%; height:220px;"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
                <p>
                    <small>
                        <a href="https://maps.google.com/?q=Cajamarquilla+905+SJL" target="_blank">
                            Ver en Google Maps
                        </a>
                    </small>
                </p>
            </div>

            <!-- Columna 3: redes sociales -->
            <div class="footer-col">
                <h3>Síguenos</h3>
                <ul class="redes-lista">
                    <li><a href="https://www.facebook.com/profile.php?id=61594175556210" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/unity.estilototal/" target="_blank">Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@unity.estilototal" target="_blank">TikTok</a></li>
                </ul>
            </div>

        </div>

        <!-- Línea de copyright -->
        <div class="footer-copy">
            <p>&copy; 2026 Unity Estilo Total · Todos los derechos reservados.</p>
        </div>
    </footer>
<!-- Script principal: hamburguesa, scroll, animaciones -->
<script src="/public/js/main.js"></script>
</body>
</html>