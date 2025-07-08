<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>GECOTEL Guinea Ecuatorial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/GECOTEL.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- Libraria para el cambio de idiomas -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      defer
    ></script>
    <style>
      :root {
        --primary: #ffc107; /* Azul corporativo suave */
        --secondary: #5a8f7b; /* Verde complementario */
        --light: #f8f9fa;
        --dark: #34495e;
        --light-blue: #e8f0fe;
        --light-green: #f0f7f4;
        --light-gray: #f5f7fa;
      }

      body {
        color: #4a5568;
        background-color: #ffffff;
        line-height: 1.6;
      }
      .team-section .row {
        display: flex;
        flex-wrap: wrap;
      }

      .team-section .col-md-6.col-lg-3 {
        display: flex;
      }

      .team-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        color: var(--dark);
      }

      .section-padding {
        padding: 5rem 0;
      }

      .section-title {
        position: relative;
        margin-bottom: 3rem;
        text-align: center;
      }

      .section-title h2 {
        font-weight: 700;
        position: relative;
        display: inline-block;
        margin-bottom: 1.5rem;
      }

      .section-title h2::after {
        content: "";
        position: absolute;
        width: 80px;
        height: 3px;
        background: var(--primary);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
      }

      .section-title p {
        color: #718096;
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.1rem;
      }

      /* Hero Section */
      .hero-section {
        background: linear-gradient(
          135deg,
          rgba(44, 90, 160, 0.08) 0%,
          rgba(255, 255, 255, 0.5) 100%
        );
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
      }

      .hero-content h1 {
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: var(--dark);
      }

      .hero-content p {
        font-size: 1.15rem;
        color: #4a5568;
        margin-bottom: 2rem;
        max-width: 600px;
      }

      .hero-img {
        border-radius: 10px;
        box-shadow: 0 25px 50px rgba(44, 90, 160, 0.1);
        overflow: hidden;
      }

      /* History Section */
      .history-section {
        background-color: #ffffff;
      }

      .history-card {
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #edf2f7;
      }

      .history-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(44, 90, 160, 0.1);
      }

      .history-card .card-img-top {
        height: 220px;
        object-fit: cover;
      }

      .history-card .card-body {
        padding: 1.5rem;
      }

      .history-card h3 {
        margin-bottom: 0.75rem;
      }

      .history-card p {
        color: rgb(50, 48, 44);
      }

      /* Mission Vision Section */
      .mission-vision-section {
        background-color: var(--light-gray);
      }

      .mv-card {
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: transform 0.3s ease;
        border: 1px solid #edf2f7;
      }

      .mv-card:hover {
        transform: translateY(-5px);
      }

      .mv-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 1.8rem;
        color: #ffffff;
      }

      .mv-card.mission .mv-icon {
        background: var(--primary);
      }

      .mv-card.vision .mv-icon {
        background: var(--secondary);
      }

      .mv-card.values .mv-icon {
        background: #ffc107;
      }

      .mv-card .card-body {
        padding: 2rem;
      }

      .values-list {
        padding-left: 0;
        list-style: none;
      }

      .values-list li {
        margin-bottom: 0.8rem;
        position: relative;
        padding-left: 30px;
      }

      .values-list li::before {
        content: "\f00c";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 4px;
        color: var(--primary);
        background: rgba(44, 90, 160, 0.1);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        text-align: center;
        line-height: 22px;
        font-size: 0.8rem;
      }

      /* Why Choose Us */
      .choose-us-section {
        background: linear-gradient(
          135deg,
          rgba(90, 143, 123, 0.03) 0%,
          rgba(255, 255, 255, 0.5) 100%
        );
      }

      .feature-box {
        background: #ffffff;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid #edf2f7;
        text-align: center;
      }

      .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(44, 90, 160, 0.1);
      }

      .feature-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 1.8rem;
        color: #ffffff;
        background: var(--primary);
      }

      .feature-box h3 {
        margin-bottom: 1rem;
        color: var(--dark);
      }

      /* Team Section */
      .team-section {
        background-color: #ffffff;
      }

      .team-card {
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid #edf2f7;
      }

      .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(44, 90, 160, 0.1);
      }

      .team-img {
        height: 280px;
        object-fit: cover;
      }

      .team-social {
        background: rgba(44, 90, 160, 0.05);
        padding: 1rem;
        border-top: 1px solid #edf2f7;
      }

      .team-social a {
        color: var(--dark);
        margin: 0 0.5rem;
        font-size: 1.1rem;
        transition: all 0.3s ease;
      }

      .team-social a:hover {
        color: var(--primary);
        transform: translateY(-3px);
      }

      .btn-primary {
        background: var(--primary);
        border: none;
        padding: 0.75rem 1.75rem;
        font-weight: 500;
        transition: all 0.3s;
      }

      .btn-primary:hover {
        background: #24457e;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(44, 90, 160, 0.2);
      }

      .btn-outline-primary {
        color: var(--primary);
        border-color: var(--primary);
        padding: 0.75rem 1.75rem;
        font-weight: 500;
        transition: all 0.3s;
      }

      .btn-outline-primary:hover {
        background: var(--primary);
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(44, 90, 160, 0.2);
      }

      /* Responsive Adjustments */
      @media (max-width: 768px) {
        .section-padding {
          padding: 3rem 0;
        }

        .hero-section {
          padding: 4rem 0 2rem;
        }

        .hero-content {
          text-align: center;
          margin-bottom: 2rem;
        }

        .hero-content p {
          margin: 0 auto 2rem;
        }
      }
    </style>
    <style>
      :root {
        --primary: #ffc107;
        --primary-light: #e8f0fe;
        --secondary: #5a8f7b;
        --light: #f8f9fa;
        --dark: #34495e;
        --gray: #6c757d;
      }
      .feature-box {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        transition: transform 0.3s ease;
      }

      .feature-box:hover {
        transform: translateY(-5px);
      }

      body {
        background-color: #f5f7fa;
        color: #333;
      }

      .contact-section {
        padding: 4rem 0;
        background: linear-gradient(
          to bottom,
          #ffffff 60%,
          var(--primary-light) 100%
        );
      }

      .section-title {
        position: relative;
        margin-bottom: 2.5rem;
        text-align: center;
      }

      .section-title h2 {
        font-weight: 700;
        color: var(--dark);
        position: relative;
        display: inline-block;
        margin-bottom: 1rem;
      }

      .section-title h2::after {
        content: "";
        position: absolute;
        width: 80px;
        height: 3px;
        background: var(--primary);
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
      }

      .contact-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        border: none;
      }

      .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(44, 90, 160, 0.15);
      }

      .map-container {
        position: relative;
        height: 100%;
      }

      .map-header {
        background: var(--primary);
        color: white;
        padding: 1.2rem;
        text-align: center;
        font-weight: 600;
      }

      .map-frame {
        height: 400px;
        width: 100%;
        border: none;
      }

      .contact-info {
        padding: 2rem;
      }

      .info-item {
        margin-bottom: 1.8rem;
        display: flex;
        align-items: flex-start;
      }

      .info-icon {
        background: var(--primary-light);
        color: var(--primary);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-right: 1.2rem;
        font-size: 1.2rem;
      }

      .info-content h5 {
        font-weight: 600;
        margin-bottom: 0.3rem;
        color: var(--dark);
      }

      .info-content p,
      .info-content a {
        margin-bottom: 0;
        color: var(--gray);
        text-decoration: none;
        transition: color 0.3s;
      }

      .info-content a:hover {
        color: var(--primary);
        text-decoration: underline;
      }

      .social-links {
        display: flex;
        gap: 0.8rem;
        margin-top: 0.5rem;
      }

      .social-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--primary-light);
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
      }

      .social-icon:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
      }

      .branches-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 2.5rem;
        margin-top: 2rem;
      }

      .branches-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
      }

      .branches-icon {
        background: var(--primary);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-size: 1.2rem;
      }

      .branches-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1.2rem;
      }

      .branch-item {
        background: var(--primary-light);
        border-radius: 8px;
        padding: 0.8rem 1.2rem;
        display: flex;
        align-items: center;
        transition: all 0.3s;
      }

      .branch-item:hover {
        background: var(--primary);
        color: white;
        transform: translateY(-3px);
      }

      .branch-icon {
        margin-right: 0.8rem;
        color: var(--primary);
      }

      .branch-item:hover .branch-icon {
        color: white;
      }

      @media (max-width: 992px) {
        .map-container {
          margin-bottom: 2rem;
        }

        .map-frame {
          height: 350px;
        }
      }

      @media (max-width: 768px) {
        .contact-section {
          padding: 3rem 0;
        }

        .branches-grid {
          grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        }
      }

      @media (max-width: 576px) {
        .section-title h2 {
          font-size: 1.6rem;
        }

        .contact-info {
          padding: 1.5rem;
        }

        .branches-card {
          padding: 1.5rem;
        }

        .branches-grid {
          grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
      }
    </style>
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
      <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center text-white">
            <small><i class="fa fa-phone-alt mr-2"></i>+240 222 322 093</small>
            <small class="px-3">|</small>
            <small><i class="fa fa-envelope mr-2"></i>info@gecotel.com</small>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a class="text-white px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-white pl-2" href="">
              <i class="fab fa-youtube"></i>
            </a>
            <!-- Navbar superior con Idiomas -->
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <a class="navbar-brand" href="#"
                  ><img
                    src="C:/Users/Naty Ondo/Desktop/GECOTEL/logo1.png"
                    alt=""
                /></a>
                <div class="ms-auto">
                  <div class="language-selector">
                    <div class="dropdown">
                      <button
                        class="lang-btn"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="selected-lang">Español</span>
                        <svg
                          class="chevron"
                          width="14"
                          height="14"
                          viewBox="0 0 16 16"
                          fill="none"
                        >
                          <path
                            d="M6 9L12 15L18 9"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                          />
                        </svg>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a
                            class="dropdown-item"
                            href="#"
                            data-lang="es"
                            onclick="changeLanguage('es')"
                          >
                            <span class="language-name">Español</span>
                            <svg
                              class="selected-check"
                              width="16"
                              height="16"
                              viewBox="0 0 24 24"
                              fill="none"
                            >
                              <path
                                d="M20 6L9 17L4 12"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                              />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="#"
                            data-lang="en"
                            onclick="changeLanguage('en')"
                          >
                            <span class="language-name">English</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="#"
                            data-lang="fr"
                            onclick="changeLanguage('fr')"
                          >
                            <span class="language-name">Français</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="#"
                            data-lang="pt"
                            onclick="changeLanguage('pt')"
                          >
                            <span class="language-name">Português</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="#"
                            data-lang="zh"
                            onclick="changeLanguage('zh')"
                          >
                            <span class="language-name">简体中文</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-xl bg-light navbar-light py-3 py-xl-0 px-xl-5">
    <a href="index.html" class="navbar-brand ml-xl-3">
      <h1 class="m-0 display-5 text-uppercase text-primary">
        <img class="imagen" src="img/GECOTEL.png" alt="">
      </h1>
    </a>
    
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between px-xl-3" id="navbarCollapse">
      <div class="navbar-nav m-auto py-0">
        <a href="index" class="nav-item nav-link" data-i18n="nav.inicio">Inicio</a>
        <a href="servicios" class="nav-item nav-link" data-i18n="nav.servicio">Servicios</a>
        <a href="../Tienda_Gecotel/tienda" class="nav-item nav-link" data-i18n="nav.tienda">Tienda</a>
        <a href="sobre-nosotros" class="nav-item nav-link active" data-i18n="nav.sobreNosotros">Sobre nosotros</a>
        <a href="tarifas" class="nav-item nav-link" data-i18n="nav.tarifas">Tarifas</a>
        <a href="cotizador" class="nav-item nav-link" data-i18n="nav.cotizador">Cotizador</a>
        <a href="contacto" class="nav-item nav-link" data-i18n="nav.contacto">Contacto</a>
      </div>

      <!-- Seguimiento separado -->
      <nav class="navbar navbar-expand-xl">
        <div class="nav-item dropdown dropdown-editar">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-i18n="nav.seguimiento">Seguimiento</a>
          <div class="dropdown-menu rounded-0 m-0 p-3">
            <input type="text" class="form-control mb-2 dropdown-editar-sub1" data-i18n="nav.placeholder" placeholder=" c&oacute;digo ">
            <button class="btn btn-primary w-100 dropdown-editar-sub2" data-i18n="nav.rastrear">Rastrear</button>
          </div>
        </div>
      </nav>
    </div>
  </nav>
</div>
<!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
      <div class="container text-center py-5">
        <h1 class="text-white display-3" data-i18n="sobreNosotros.nosotros">Sobre nosotros</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="" data-i18n="nav.inicio">Inicio</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0" data-i18n="sobreNosotros.nosotros">Sobre nosotros</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 data-i18n="sobreNosotros.h1">Conectando Guinea Ecuatorial con el mundo</h1>
              <p data-i18n="sobreNosotros.p">
                GECOTEL, la empresa pública encargada de los servicios postales
                en Guinea Ecuatorial, ofrece soluciones confiables y eficientes
                desde 1992.
              </p>
              <div class="d-flex flex-wrap gap-3">
                <a href="contacto" class="btn btn-primary" data-i18n="sobreNosotros.contactanos">Contáctenos</a>
                <a href="servicios" class="btn btn-outline-primary" data-i18n="sobreNosotros.nuestrosServicios">Nuestros Servicios</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img">
              <img
                src="img/gecotel_cover.jpg"
                class="img-fluid"
                alt="Servicios postales modernos"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Historia Section -->
    <section id="historia" class="section-padding history-section">
      <div class="container">
        <div class="section-title">
          <h2 data-i18n="sobreNosotros.h2">Nuestra Historia</h2>
          <p data-i18n="sobreNosotros.p1">
            25 años de excelencia en servicios postales y conectando a Guinea
            Ecuatorial
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="history-card">
              <img
                src="img/about.jpg"
                class="card-img-top"
                alt="Fundación de GECOTEL"
              />
              <div class="card-body">
                <h3 data-i18n="sobreNosotros.h3">1992 - Nacimiento de una institución</h3>
                <p data-i18n="sobreNosotros.p2">
                  GECOTEL fue fundada como Correos y Telecomunicaciones de
                  Guinea Ecuatorial, estableciendo su sede en la Calle Rey
                  Boncoro, Bioko Norte.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="history-card">
              <img
                src="img/blog-1.jpg"
                class="card-img-top"
                alt="Expansión nacional"
              />
              <div class="card-body">
                <h3 data-i18n="sobreNosotros.expansion">1995 - Expansión Nacional</h3>
                <p data-i18n="sobreNosotros.parafoexpension">
                  Iniciamos nuestra expansión por todo el territorio nacional,
                  estableciendo oficinas en las principales ciudades para servir
                  mejor a la población.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="history-card">
              <img
                src="img/blog-2.jpg"
                class="card-img-top"
                alt="Reconocimiento internacional"
              />
              <div class="card-body">
                <h3 data-i18n="sobreNosotros.reconocimiento">2010 - Reconocimiento Internacional</h3>
                <p data-i18n="sobreNosotros.paraforeconocimiento">
                  Admitidos como miembros plenos de la Unión Postal Universal,
                  conectándonos con servicios postales de más de 190 países.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-8 mx-auto">
            <div class="bg-light p-4 rounded-3 border">
              <h4 class="text-center mb-4" data-i18n="sobreNosotros.compromisoexcelencia">Compromiso con la excelencia</h4>
              <p data-i18n="sobreNosotros.paraexcelencia">
                Durante más de 25 años, GECOTEL ha sido el pilar fundamental del
                sistema postal de Guinea Ecuatorial. Comenzamos con un pequeño
                equipo de 20 empleados y hoy contamos con más de 150
                profesionales dedicados.
              </p>
              <p class="mb-0" data-i18n="sobreNosotros.paraexcelencia1">
                Nuestra evolución de servicio postal tradicional a proveedor
                integral de soluciones logísticas refleja nuestro compromiso con
                la innovación y la satisfacción del cliente.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Misión, Visión y Valores Section -->
    <section id="mision" class="section-padding mission-vision-section">
      <div class="container">
        <div class="section-title">
          <h2 data-i18n="sobreNosotros.mision">Misión, Visión y Valores</h2>
          <p data-i18n="sobreNosotros.principios">Los principios fundamentales que guían nuestro trabajo diario</p>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="mv-card mission">
              <div class="card-body text-center">
                <div class="mv-icon">
                  <i class="fas fa-bullseye"></i>
                </div>
                <h3 data-i18n="sobreNosotros.misionh3">Misión</h3>
                <p data-i18n="sobreNosotros.proporcionar">
                  Proporcionar a nuestros clientes productos de calidad,
                  primando la eficacia, diligencia y buen servicio a nuestros
                  clientes, cumpliendo con ellos los mas altos estandares de
                  calidad en nuestros productos.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="mv-card vision">
              <div class="card-body text-center">
                <div class="mv-icon">
                  <i class="fas fa-eye"></i>
                </div>
                <h3 data-i18n="sobreNosotros.visionh3">Visión</h3>
                <p data-i18n="sobreNosotros.paravision">
                  Ser la entidad de referencia en Guinea Ecuatorial en el sector
                  de correos, tanto en el suministro como en la prestacion de
                  servicios postales a nivel nacional e internacional.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="mv-card values">
              <div class="card-body">
                <div class="text-center">
                  <div class="mv-icon">
                    <i class="fas fa-heart"></i>
                  </div>
                  <h3 data-i18n="sobreNosotros.valoresh3">Valores</h3>
                </div>
                <ul class="values-list">
                  <li data-i18n="sobreNosotros.valor1">
                    Confianza
                  </li>
                  <li data-i18n="sobreNosotros.valor2">
                    Excelencia
                  </li>
                  <li data-i18n="sobreNosotros.valor3">
                    Compromiso
                  </li>
                  <li data-i18n="sobreNosotros.valor4">
                    Innovación
                  </li>
                  <li data-i18n="sobreNosotros.valor5">
                    Unidad
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ¿Por qué elegirnos? Section -->
    <section id="eligenos" class="section-padding choose-us-section">
      <div class="container">
        <div class="section-title">
          <h2 data-i18n="sobreNosotros.por_que?">¿Por qué elegirnos?</h2>
          <p data-i18n="sobreNosotros.paraelegir">
            Razones por las que miles de clientes confían en nuestros servicios
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3 data-i18n="sobreNosotros.seguridad">Seguridad Garantizada</h3>
              <p data-i18n="sobreNosotros.implementamos">
                Implementamos protocolos de seguridad avanzados para proteger
                cada envío con seguimiento en tiempo real.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              <h3 data-i18n="sobreNosotros.entrega">Entrega Rápida</h3>
              <p data-i18n="sobreNosotros.optimizamos">
                Optimizamos nuestras rutas logísticas para garantizar entregas
                puntuales en todo el territorio nacional.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-coins"></i>
              </div>
              <h3 data-i18n="sobreNosotros.precios">Precios Competitivos</h3>
              <p data-i18n="sobreNosotros.ofrecemos">
                Ofrecemos tarifas accesibles sin comprometer la calidad, con
                descuentos especiales para empresas.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h3 data-i18n="sobreNosotros.cobertura">Cobertura Nacional</h3>
              <p data-i18n="sobreNosotros.oficinas">
                35 oficinas y más de 100 puntos de servicio en todo Guinea
                Ecuatorial para tu comodidad.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-headset"></i>
              </div>
              <h3 data-i18n="sobreNosotros.soporte">Soporte Personalizado</h3>
              <p data-i18n="sobreNosotros.atencion">
                Atención al cliente dedicada para resolver tus necesidades a
                través de múltiples canales.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-globe-africa"></i>
              </div>
              <h3 data-i18n="sobreNosotros.global">Conectividad Global</h3>
              <p data-i18n="sobreNosotros.servpostales">
                Servicios postales a más de 190 países con seguimiento integral
                y aduanas simplificadas.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="section-title">
        <h2 data-i18n="sobreNosotros.cabeceras">Cabeceras distritales del ámbito nacional</h2>
      </div>
      <div class="col-12">
        <div class="branches-card">
          <div class="branches-header">
            <div class="branches-icon">
              <i class="fas fa-building"></i>
            </div>
          </div>

          <div class="branches-grid">
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Malabo</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Baney</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Riaba</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Luba</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Bata</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Mbini</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Kogo</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Niefang</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Evinayong</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Akurenam</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Nsork</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Akonibe</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Mongomo</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Añisok</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Nsok-Nsomo</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Ebibeyin</span>
            </div>
            <div class="branch-item">
              <span class="branch-icon"
                ><i class="fas fa-map-marker-alt"></i
              ></span>
              <span>Djibloho</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Nuestro Equipo Section -->
    <section id="equipo" class="section-padding team-section">
      <div class="container">
        <div class="section-title">
          <h2 data-i18n="sobreNosotros.nuestrEquipo">Nuestro Equipo</h2>
          <p data-i18n="sobreNosotros.profesionales">
            Profesionales comprometidos con la excelencia en el servicio postal
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="team-card">
              <img
                src="img/team-2.png"
                class="team-img card-img-top"
                alt="Gabriel Micha"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Gabriel Micha</h5>
                <p class="card-text text-primary" data-i18n="sobreNosotros.director">Director Técnico</p>
                <p class="card-text" data-i18n="sobreNosotros.experiencia1">
                  Ingeniero con 15 años de experiencia en logística y
                  optimización de redes postales.
                </p>
              </div>
              <div class="team-social text-center">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="team-card">
              <img
                src="img/team-3.png"
                class="team-img card-img-top"
                alt="Reginaldo Malonga"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Reginaldo Malonga</h5>
                <p class="card-text text-primary" data-i18n="sobreNosotros.asuntos">DG Asuntos Externos</p>
                <p class="card-text" data-i18n="sobreNosotros.experto">
                  Experto en relaciones internacionales y alianzas estratégicas
                  con más de 12 años en el sector.
                </p>
              </div>
              <div class="team-social text-center">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="team-card">
              <img
                src="img/team-4.png"
                class="team-img card-img-top"
                alt="Jaime Esono"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Jaime Esono</h5>
                <p class="card-text text-primary" data-i18n="sobreNosotros.recursos">DG Recursos Humanos</p>
                <p class="card-text" data-i18n="sobreNosotros.especialista">
                  Especialista en gestión del desarrollo
                  organizacional con enfoque en cultura corporativa.
                </p>
              </div>
              <div class="team-social text-center">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="team-card">
              <img
                src="img/team-5.png"
                class="team-img card-img-top"
                alt="Rafaela Ndong"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Rafaela Ndong</h5>
                <p class="card-text text-primary" data-i18n="sobreNosotros.marketing">Directora de Marketing</p>
                <p class="card-text" data-i18n="sobreNosotros.estratega">
                  Estratega de marca con experiencia en transformación digital y
                  experiencia del cliente.
                </p>
              </div>
              <div class="team-social text-center">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5 gray-foot">
      <div class="row pt-5">
        <div class="col-lg-7 col-md-6">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h3 class="text-primary mb-4" data-i18n="body.footer1">
                Encu&eacute;ntranos
              </h3>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>Calle Rey Boncoro,
                Malabo, G.E
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>+240 333 444 555</p>
              <p><i class="fa fa-envelope mr-2"></i>gecotel@gmail.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h3 class="text-primary mb-4" data-i18n="body.footer3">Enlaces Frecuentes</h3>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="index"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.inicio">Inicio</span></a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.sobreNosotros">Sobre Nosotros</span></a>
                <a class="text-white mb-2" href="servicios"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.servicio">Nuestros Servicios</span></a>
                <a class="text-white" href="contacto" ><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.contacto">Cont&aacute;ctanos</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-5">
          <h3 class="text-primary mb-4" data-i18n="body.footer8">
            Rastreo de envíos
          </h3>
          <p data-i18n="body.footer9">
            Ingresa tu código de seguimiento para conocer el estado y ubicación de tu envío en tiempo real. Garantizamos actualizaciones precisas para que siempre sepas dónde está tu paquete.
          </p>
          <div class="w-100">
            <div class="input-group">
              <input type="text" class="form-control border-light" data-i18n="body.codigo" style="padding: 30px;" maxlength="20" placeholder="Inserte su código de seguimiento">
              <div class="input-group-append">
                <button class="btn btn-danger px-3" data-i18n="body.rastrear">Rastrear</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5 gray-foot"
      style="border-color: #3e3e4e !important">
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white" data-i18n="body.footer12">
            &copy; <a href="#">GECOTEL</a>. todos los derechos reservados.
            Dise&nacute;ado por <a href="https://vemixsolutionseg.com/">Vemix</a>
          </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a
                class="nav-link text-white py-0"
                href="prohibido"
                data-i18n="body.footer13"
                >Productos prohibidos</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white py-0"
                href="politica"
                data-i18n="body.footer14"
                >Terminos</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white py-0"
                href="preguntas"
                data-i18n="body.footer15"
                >Preguntas Frecuentes</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white py-0"
                href="contacto"
                data-i18n="body.footer16"
                >Ayuda</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/i18n.js"></script>
    <script>
      // Smooth scrolling
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();

          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            window.scrollTo({
              top: target.offsetTop - 80,
              behavior: "smooth",
            });
          }
        });
      });

      // Navbar scroll effect
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
          navbar.classList.add("shadow-sm");
        } else {
          navbar.classList.remove("shadow-sm");
        }
      });
    </script>
    <script>
      // Efecto de hover para tarjetas de sucursales
      document.querySelectorAll(".branch-item").forEach((item) => {
        item.addEventListener("mouseenter", function () {
          this.style.transform = "translateY(-5px)";
          this.style.boxShadow = "0 8px 20px rgba(0, 0, 0, 0.15)";
        });

        item.addEventListener("mouseleave", function () {
          this.style.transform = "translateY(0)";
          this.style.boxShadow = "none";
        });
      });
    </script>
  </body>
</html>
