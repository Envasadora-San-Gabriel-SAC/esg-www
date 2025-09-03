<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link  rel= "apple-touch-icon"  tamaños= "57x57"  href= "img/icons/apple-icon-57x57.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "60x60"  href= "img/icons/apple-icon-60x60.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "72x72"  href= "img/icons/apple-icon-72x72.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "76x76"  href= "img/icons/apple-icon-76x76.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "114x114"  href= "img/icons/apple-icon-114x114.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "120x120"  href= "img/icons/apple-icon-120x120.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "144x144"  href= "img/icons/apple-icon-144x144.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "152x152"  href= "img/icons/apple-icon-152x152.png" > 
    <link  rel= "apple-touch-icon"  tamaños= "180x180"  href= "img/icons/apple-icon-180x180.png" > 
    <link  rel= "icon"  tipo= "image/png"  tamaños= "192x192"   href= "img/icons/android-icon-192x192.png" > 
    <link  rel= "icon"  tipo= "image/png"  tamaños= "32x32"  href= "img/icons/favicon-32x32.png" > 
    <link  rel= "icono"  tipo= "imagen/png"  tamaños= "96x96"  href= "img/icons/favicon-96x96.png" > 
    <link  rel= "icono"  tipo= "imagen/png"  tamaños= "16x16"  href= "img/icons/favicon-16x16.png" > 
    <link  rel= "manifiesto"  href= "/manifiesto.json" > 
    <meta  nombre= "msapplication-TileColor"  contenido= "#ffffff" > 
    <meta  nombre= "msapplication-TileImage"  contenido= "/ms-icon-144x144.png" > 
    <meta  nombre= "theme-color"  contenido= "#ffffff" >
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'header.php';
?>
<main>

    <section class="contact-section">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.80529710151413!2d-77.03584461768831!3d-12.120037093025031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c822da7720db%3A0x6d81ef8c6c7e2778!2s41%2C%20Bolognesi%20180%2C%20Miraflores%2015074!5e0!3m2!1ses!2spe!4v1755307608134!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-info">
            <h2>Contáctanos</h2>
            <div class="contact-cards">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Emails</h3>
                    <p>ganasco@esg.com.pe</p>
                    <p>ventas2@esg.com.pe</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Teléfonos</h3>
                    <p>(+51) 1 713 1630</p>
                    <p>953 928 070</p>
                </div>

                <div class="contact-card">
                    <i class="fas fa-clock"></i>
                    <h3>Horarios</h3>
                    <p>Lunes - Viernes: 8:15 a.m. - 6:00 p.m.</p>
                    <p>Sábado: 8:15 a.m. - 12:30 p.m.</p>
                </div>
            </div>

            
            

            <form class="contact-form">
            <input type="text" placeholder="Nombre y apellido" required>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="tel" placeholder="Teléfono / Móvil" required>
            <textarea placeholder="Mensaje" rows="5" required></textarea>
            <button type="submit">Enviar mensaje</button>
            </form>
        </div>
    </section>
</main>
<?php
include 'footer.php';
?>
</body>
</html>