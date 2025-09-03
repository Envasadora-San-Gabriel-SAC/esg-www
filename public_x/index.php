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
<div class="carousel" id="carousel">
    <div class="carousel-images" id="carousel-images">
      <div class="slide">
        <img src="img/carrusel/camion2.jpg" alt="Imagen 1">
        <div class="slide-overlay"></div>
        <div class="slide-text">
          <h2>Abastecimiento de Combustible</h2>
          <p>Nuestras soluciones se adaptan a las necesidades de nuestros clientes.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/carrusel/camion3.jpg" alt="Imagen 2">
        <div class="slide-overlay"></div>
      </div>
      <div class="slide">
        <img src="img/carrusel/foto05.jpg" alt="Imagen 3">
        <div class="slide-overlay"></div>
      </div>
    </div>
    <div class="carousel-buttons">
      <button onclick="moveSlide(-1)">&#10094;</button>
      <button onclick="moveSlide(1)">&#10095;</button>
    </div>
</div>

  <script>
    // Carrusel script
    let currentSlide = 0;
    const images = document.getElementById("carousel-images");
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;

    images.style.width = `${totalSlides * 100}vw`;

    slides[currentSlide].classList.add("active");

    window.moveSlide = function(direction) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    images.style.transform = `translateX(-${currentSlide * 100}vw)`;
    slides[currentSlide].classList.add("active");
    };

  </script>



<?php
include 'footer.php';
?>
</body>
</html>