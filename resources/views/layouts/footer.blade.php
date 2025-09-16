
<!-- ======= Footer ======= -->
<style>
    #footer {
        background: #2b2b2b;
        color: #ffffff;
        font-size: 0.95rem;
    }

    #footer .footer-top {
        background: #96E0DE;
        padding: 10px 0 10px 0;
    }

    #footer .footer-top .row {
        margin-top: 15px;
    }

    #footer .footer-top h4 {
        font-size: 1.2rem;
        font-weight: 600;
        color: #3e3e3e;
        margin-bottom: 12px;
    }

    #footer .footer-top .address {
        margin-top: -5px;
        line-height: 1.4;
    }

    #footer .footer-top p,
    #footer .footer-top a,
    #footer .footer-top li {
        color: #323232;
    }

    #footer .footer-top a:hover {
        color: #3988ff;
        text-decoration: none;
    }

    #footer .social-links a {
        font-size: 1.2rem;
        display: inline-block;
        background: #333;
        color: #ffffff;
        line-height: 36px;
        margin-right: 8px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    #footer .social-links a:hover {
        background: #3988ff;
        color: #fff;
    }

    #footer .footer-links ul {
        list-style: none;
        padding: 0;
    }

    #footer .footer-links ul li {
        padding: 6px 0;
        display: flex;
        align-items: center;
    }

    #footer .footer-links ul i {
        font-size: 1rem;
        margin-right: 8px;
        color: #3988ff;
    }

    #footer .copyright,
    #footer .credits {
        text-align: center;
        color: #fffcfc;
        font-size: 0.85rem;
    }

    #footer .credits {
        margin-top: 10px;
    }

    #footer .credits img {
        vertical-align: middle;
    }
</style>

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <!-- Central Telefónica -->
                <div class="col-lg-3 col-md-6 footer-info">
                    <p style="font-size:1.2em; font-weight:600; color:#000000;">
                        CENTRAL TELEFÓNICA
                        <br>(+51) <strong>713 1630</strong>
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/envasadorasangabriel" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/envasadora-san-gabriel" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <!-- Oficinas -->
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <h4>OFICINA</h4>
                            <p class="address">
                                Calle Bolognesi 180 Of 406<br>
                                Miraflores - Lima
                            </p>
                        </div>
                        <div class="col-6 mb-3">
                            <h4>PLANTA</h4>
                            <p class="address">
                                Calle La Pampilla 121<br>
                                Ventanilla - Callao
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Enlaces -->
                <div class="col-lg-4 footer-links">
                    <h4></h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Productos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Políticas de Privacidad</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   <!-- Créditos -->
<style>
    #footer .credits {
        text-align: center;
        font-size: 13px;
        color: #ffffff;
        line-height: 1.6;
        margin-bottom: 7px;
    }

    #footer .credits img {
        vertical-align: middle;
        margin: 0 9px;
    }

    #footer .container.py-3 {
        padding-top: 5px !important;
        padding-bottom: 6px !important;
    }
</style>

<div class="container py-3">
    <div class="credits">
        Envasadora San Gabriel S.A.C. contamos con un Sistema Integrado de Gestión de Calidad, Seguridad,
        Salud y Medio Ambiente implementado para el alcance de: Diseño, Fabricación y Comercialización
        de Productos Químicos: Resinas y Aditivos para uso industrial.
    </div>
    <div class="credits">
        &copy; DERECHOS RESERVADOS {{ date("Y") }}
        <img src="{{ asset('images/logo/logo-brand-dark.png') }}" alt="Logo" width="35">
        ENVASADORA SAN GABRIEL SAC
    </div>
</div>
</footer>
