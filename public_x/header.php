<header id="header">
  <div class="top-contact-bar">
    <div class="contact-container">
      <span><i class="fa-solid fa-envelope"></i> ventas@esg.com.pe</span>
      <span><i class="fas fa-phone"></i> +51 1 713 1630</span>
      <span><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/envasadorasangabriel">Facebook</a></span>

    </div>
  </div>
    <div class="container">
      <div class="logo"><img src="img/header/Logo-ESG-2024-Negro.png" alt="Logo_AMC">Envasadora San Gabriel SAC</div>
      <nav class="nav" id="nav">
        <a href="index.php">INICIO</a>
        <a href="nosotros.php">NOSOTROS</a>
        <a href="servicios.php">SERVICIOS</a>
        <a href="https://pedidos.esg.com.pe/auth/login">CLIENTES</a>
        <a href="contacto.php">CONTACTO</a>
      </nav>
      <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    </div>
  </header>
  <script>
    const header = document.getElementById("header");
    const menuToggle = document.getElementById("menu-toggle");
    const nav = document.getElementById("nav");
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
      const currentScroll = window.scrollY;
      if (currentScroll > lastScrollY) {
        header.style.top = "-115px";
      } else {
        header.style.top = "0";
      }
      lastScrollY = currentScroll;
    });

    menuToggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  </script>