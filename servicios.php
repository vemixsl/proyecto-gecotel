<!DOCTYPE html>
<html lang="es" data-i18n="html">
  <head>
    <meta charset="utf-8" />
    <title data-i18n="head.title">Servicios - GECOTEL Guinea Ecuatorial</title>
    <meta
      name="description"
      content="Descubre los servicios de correos y telecomunicaciones de GECOTEL en Guinea Ecuatorial"
    />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Logística, Transporte, Servicios Postales" name="keywords" />
    <meta content="Servicios de GECOTEL" name="description" />

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <style>
      :root {
        --primary: #ffc107;
        --secondary: #e6ac00;
        --dark: #1e293b;
        --light: #f8f9fa;
        --accent: #ff006e;
      }
      .service-image-header {
        width: 100%;
        height: 180px; /* Altura fija como la del antiguo .service-icon */
        overflow: hidden;
        position: relative;
      }

      .service-image-header img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* O "contain" si quieres que no se recorte nada */
        display: block;
      }

      body {
        font-family: "Poppins", sans-serif;
        background-color: #f5f7fa;
      }

      /* Hero Section */
      .hero-services {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
          url("img/header.jpg") center center;
        background-size: cover;
        padding: 120px 0 80px;
        margin-bottom: 60px;
        text-align: center;
        color: white;
      }

      .hero-services h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .hero-services p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto 30px;
        opacity: 0.9;
      }

      /* Services Section */
      .services-section {
        padding: 50px 0 100px;
      }

      .section-title {
        text-align: center;
        margin-bottom: 60px;
      }

      .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark);
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
      }

      .section-title h2::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, var(--primary), var(--secondary));
        border-radius: 2px;
      }

      .section-title p {
        color: #666;
        max-width: 700px;
        margin: 20px auto 0;
        font-size: 1.1rem;
      }

      /* Services Cards */
      .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .service-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        cursor: pointer;
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      }

      .service-icon {
        height: 180px;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3.5rem;
      }

      .service-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
      }

      .service-content h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--dark);
      }

      .service-content p {
        color: #666;
        margin-bottom: 20px;
        flex-grow: 1;
      }

      .service-link {
        color: var(--primary);
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: all 0.3s;
      }

      .service-link i {
        margin-left: 8px;
        transition: transform 0.3s;
      }

      .service-link:hover {
        color: var(--secondary);
      }

      .service-link:hover i {
        transform: translateX(5px);
      }

      /* Service Modal */
      .service-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        overflow: auto;
        padding: 30px;
        box-sizing: border-box;
      }

      .modal-content {
        background: white;
        max-width: 800px;
        margin: 50px auto;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        animation: modalFade 0.5s;
        position: relative;
      }

      @keyframes modalFade {
        from {
          opacity: 0;
          transform: translateY(-50px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .modal-header {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        padding: 30px;
        color: white;
        position: relative;
      }

      .close-modal {
        position: absolute;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 1.8rem;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
      }

      .close-modal:hover {
        background: rgba(0, 0, 0, 0.3);
        transform: rotate(90deg);
      }

      .modal-header h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 10px;
      }

      .modal-icon {
        font-size: 4rem;
        margin-bottom: 20px;
        color: rgba(255, 255, 255, 0.3);
      }

      .modal-body {
        padding: 30px;
      }

      .modal-body h3 {
        font-size: 1.5rem;
        color: var(--primary);
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
      }

      .modal-body p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
      }

      .modal-features {
        background: #f8fafc;
        padding: 20px;
        border-radius: 8px;
        margin: 25px 0;
      }

      .modal-features h4 {
        color: var(--dark);
        margin-bottom: 15px;
        font-size: 1.2rem;
      }

      .modal-features ul {
        list-style-type: none;
        padding: 0;
      }

      .modal-features li {
        padding: 8px 0;
        padding-left: 30px;
        position: relative;
        color: #555;
      }

      .modal-features li:before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 8px;
        color: var(--primary);
        font-weight: bold;
      }

      /* Responsive Design */
      @media (max-width: 992px) {
        .services-grid {
          grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
      }

      @media (max-width: 768px) {
        .hero-services {
          padding: 100px 0 60px;
        }

        .hero-services h1 {
          font-size: 2.5rem;
        }

        .section-title h2 {
          font-size: 2rem;
        }

        .modal-content {
          margin: 20px auto;
        }
      }

      @media (max-width: 576px) {
        .services-grid {
          grid-template-columns: 1fr;
        }

        .hero-services h1 {
          font-size: 2rem;
        }

        .modal-header {
          padding: 20px;
        }

        .modal-header h2 {
          font-size: 1.5rem;
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
        <a href="servicios" class="nav-item nav-link active" data-i18n="nav.servicio">Servicios</a>
        <a href="../Tienda_Gecotel/tienda" class="nav-item nav-link" data-i18n="nav.tienda">Tienda</a>
        <a href="sobre-nosotros" class="nav-item nav-link" data-i18n="nav.sobreNosotros">Sobre nosotros</a>
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
        <h1 class="text-white display-3" data-i18n="services.servicios">Servicios</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="" data-i18n="nav.inicio">Inicio</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0" data-i18n="services.servicios">Servicios</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <!-- Services Section -->
    <div class="services-section">
      <div class="container">
        <div class="section-title">
          <h2 data-i18n="services.sectionTitle"></h2>
          <p data-i18n="services.sectionDesc">
            Como empresa líder en correos y telecomunicaciones, ofrecemos
            soluciones integrales para particulares y empresas
          </p>
        </div>

        <div class="services-grid">
          <!-- Servicio 1: Servicios básicos de correos -->
          <div class="service-card" data-service="1">
            <div class="service-image-header">
              <img src="img/black.jpg" alt="Servicio de correos" />
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service1title">Servicios Básicos de Correos</h3>
              <p data-i18n="services.service1">
              Distribución nacional e internacional de correspondencia y
              paquetes con diferentes modalidades de envío.
              </p>
              <a class="service-link">
                <span data-i18n="services.learnMore">Ver detalles</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 2: Servicios de Telecomunicaciones -->
          <div class="service-card" data-service="2">
            <div class="service-image-header">
              <img src="img/blackgirl.jpg" alt="servicio de telecomunicaciones"> 
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service2title">
                Servicios de Telecomunicaciones
              </h3>
              <p data-i18n="services.service2">
                Gestión y explotación de servicios avanzados de
                telecomunicaciones para conectar el país.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 3: Caja Postal de Correos -->
          <div class="service-card" data-service="3">
            <div class="service-image-header">
              <img src="img/paquete3.webp" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service3title">
                Caja Postal de Correos
              </h3>
              <p data-i18n="services.service3desc">
                Servicios financieros y de ahorro a través de nuestra red de
                oficinas postales en todo el país.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 4: Servicios de Giro -->
          <div class="service-card" data-service="4">
            <div class="service-image-header">
              <img src="img/send.jpg" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service4title">Servicios de Giro</h3>
              <p data-i18n="services.service4desc">
                Transferencias nacionales e internacionales de dinero de forma
                rápida y segura.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 5: Diseño de Sellos -->
          <div class="service-card" data-service="5">
            <div class="service-image-header">
              <img src="img/sello.gif" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service5title">Diseño de Sellos</h3>
              <p data-i18n="services.service5desc">
                Creación de sellos postales y signos de franqueo con diseños
                personalizados y conmemorativos.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 6: Productos Filatélicos -->
          <div class="service-card" data-service="6">
            <div class="service-image-header">
              <img src="img/blog-2.jpg" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service6title">Productos Filatélicos</h3>
              <p data-i18n="services.service6desc">
                Distribución de sellos para coleccionistas y productos
                especiales para filatelia.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 7: Monedas Conmemorativas -->
          <div class="service-card" data-service="7">
            <div class="service-image-header">
              <img src="img/red.jpg" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service7title">
                Monedas Conmemorativas
              </h3>
              <p data-i18n="services.service7desc">
                Emisión y distribución de monedas especiales con fines
                numismáticos y conmemorativos.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Servicio 8: Otros Servicios -->
          <div class="service-card" data-service="8">
            <div class="service-image-header">
              <img src="img/paquete.jpg" alt="">
            </div>
            <div class="service-content">
              <h3 data-i18n="services.service8title">Otros Servicios</h3>
              <p data-i18n="services.service8desc">
                Actividades relacionadas con correos y telecomunicaciones para
                satisfacer necesidades específicas.
              </p>
              <a class="service-link"><span data-i18n="services.learnMore">Ver detalles</span><i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Service Modals -->
    <!-- Modal Servicio 1 -->
    <div class="service-modal" id="service-modal-1">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <h2 data-i18n="services.service1title">
            Servicios Básicos de Correos
          </h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service1modalDesc">
            GECOTEL gestiona los servicios básicos de correos en Guinea
            Ecuatorial, garantizando la distribución eficiente y segura de
            correspondencia y paquetes tanto a nivel nacional como
            internacional.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service1feature1">
                Entrega de correspondencia nacional e internacional
              </li>
              <li data-i18n="services.service1feature2">
                Servicios de paquetería con diferentes modalidades de envío
              </li>
              <li data-i18n="services.service1feature3">
                Seguimiento en tiempo real de todos los envíos
              </li>
              <li data-i18n="services.service1feature4">
                Entrega certificada para documentos importantes
              </li>
              <li data-i18n="services.service1feature5">
                Servicio de paquetería express para entregas urgentes
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service1benefits">
            Nuestros servicios postales ofrecen soluciones confiables para
            particulares y empresas, con cobertura en todo el territorio
            nacional y conexiones internacionales con más de 190 países.
            Contamos con la infraestructura más moderna de Guinea Ecuatorial
            para garantizar la integridad y seguridad de sus envíos.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 2 -->
    <div class="service-modal" id="service-modal-2">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-wifi"></i>
          </div>
          <h2 data-i18n="services.service2title">
            Servicios de Telecomunicaciones
          </h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service2modalDesc">
            GECOTEL gestiona y explota los servicios de telecomunicaciones que
            anteriormente desempeñaba la Dirección General de Correos y
            Telecomunicaciones, ofreciendo soluciones innovadoras para la
            conectividad del país.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service2feature1">
                Infraestructura de telecomunicaciones nacional
              </li>
              <li data-i18n="services.service2feature2">
                Servicios de telefonía fija y móvil
              </li>
              <li data-i18n="services.service2feature3">
                Soluciones de conectividad a internet
              </li>
              <li data-i18n="services.service2feature4">
                Transmisión de datos y servicios digitales
              </li>
              <li data-i18n="services.service2feature5">
                Soporte técnico especializado
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service2benefits">
            Como ente regulador de las telecomunicaciones en Guinea Ecuatorial,
            garantizamos acceso a servicios de calidad que conectan a las
            personas y empresas, fomentando el desarrollo económico y social del
            país a través de la tecnología.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 3 -->
    <div class="service-modal" id="service-modal-3">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-piggy-bank"></i>
          </div>
          <h2 data-i18n="services.service3title">Caja Postal de Correos</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service3modalDesc">
            Gestionamos y explotamos el servicio de la Caja Postal de Correos,
            ofreciendo soluciones financieras accesibles a través de nuestra
            extensa red de oficinas postales.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service3feature1">
                Cuentas de ahorro postal
              </li>
              <li data-i18n="services.service3feature2">
                Depósitos y retiros en oficinas postales
              </li>
              <li data-i18n="services.service3feature3">
                Servicios de pago de facturas
              </li>
              <li data-i18n="services.service3feature4">
                Préstamos y créditos personales
              </li>
              <li data-i18n="services.service3feature5">
                Transferencias interbancarias
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service3benefits">
            Llevamos servicios financieros a zonas remotas donde los bancos
            tradicionales no operan, facilitando la inclusión financiera de toda
            la población. Nuestros servicios son seguros, confiables y con
            tarifas accesibles.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 4 -->
    <div class="service-modal" id="service-modal-4">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-money-check-alt"></i>
          </div>
          <h2 data-i18n="services.service4title">Servicios de Giro</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service4modalDesc">
            Ofrecemos servicios de giro tanto por nosotros mismos como a través
            de la Caja Postal de Ahorros, permitiendo transferencias rápidas y
            seguras de dinero a nivel nacional e internacional.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service4feature1">
                Giros nacionales con entrega inmediata
              </li>
              <li data-i18n="services.service4feature2">
                Transferencias internacionales a más de 150 países
              </li>
              <li data-i18n="services.service4feature3">
                Pago en efectivo o depósito en cuenta
              </li>
              <li data-i18n="services.service4feature4">
                Seguimiento en tiempo real de las transferencias
              </li>
              <li data-i18n="services.service4feature5">
                Tarifas competitivas y transparentes
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service4benefits">
            Nuestros servicios de giro permiten enviar y recibir dinero de forma
            rápida y segura, con una amplia red de puntos de pago en todo el
            país. Ideal para familias que reciben remesas y para empresas que
            necesitan realizar pagos a proveedores.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 5 -->
    <div class="service-modal" id="service-modal-5">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-stamp"></i>
          </div>
          <h2 data-i18n="services.service5title">Diseño de Sellos</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service5modalDesc">
            Como servicio exclusivo, diseñamos sellos y demás signos de franqueo
            que representan la cultura, historia y biodiversidad de Guinea
            Ecuatorial.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service5feature1">
                Diseño de sellos postales conmemorativos
              </li>
              <li data-i18n="services.service5feature2">
                Creación de series temáticas anuales
              </li>
              <li data-i18n="services.service5feature3">
                Personalización de sellos para eventos especiales
              </li>
              <li data-i18n="services.service5feature4">
                Emisión de sellos con tecnología de seguridad avanzada
              </li>
              <li data-i18n="services.service5feature5">
                Colaboraciones con artistas nacionales
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service5benefits">
            Nuestros sellos son verdaderas obras de arte que promueven la
            identidad nacional y se convierten en piezas de colección. Cada
            emisión cuenta una historia y celebra los hitos más importantes de
            nuestro país.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 6 -->
    <div class="service-modal" id="service-modal-6">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-archive"></i>
          </div>
          <h2 data-i18n="services.service6title">Productos Filatélicos</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service6modalDesc">
            Distribuimos sellos para filatelia y demás productos filatélicos
            para coleccionistas y amantes de la historia postal.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service6feature1">
                Colecciones anuales de sellos
              </li>
              <li data-i18n="services.service6feature2">
                Sobres de primer día de emisión
              </li>
              <li data-i18n="services.service6feature3">
                Carpetas coleccionistas especiales
              </li>
              <li data-i18n="services.service6feature4">
                Productos filatélicos conmemorativos
              </li>
              <li data-i18n="services.service6feature5">
                Accesorios para coleccionistas
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service6benefits">
            Ofrecemos a los filatelistas productos exclusivos que documentan la
            historia y cultura de Guinea Ecuatorial. Nuestras ediciones
            limitadas son valoradas por coleccionistas de todo el mundo.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 7 -->
    <div class="service-modal" id="service-modal-7">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-coins"></i>
          </div>
          <h2 data-i18n="services.service7title">Monedas Conmemorativas</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service7modalDesc">
            Emitimos y distribuimos monedas conmemorativas con fines
            numismáticos que celebran eventos históricos y figuras destacadas de
            Guinea Ecuatorial.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service7feature1">
                Monedas conmemorativas de edición limitada
              </li>
              <li data-i18n="services.service7feature2">
                Series temáticas sobre historia y cultura
              </li>
              <li data-i18n="services.service7feature3">
                Acuñación en metales preciosos y no preciosos
              </li>
              <li data-i18n="services.service7feature4">
                Certificados de autenticidad
              </li>
              <li data-i18n="services.service7feature5">
                Presentaciones especiales para coleccionistas
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service7benefits">
            Nuestras monedas conmemorativas son piezas de valor histórico y
            artístico que preservan la memoria nacional. Son excelentes
            inversiones numismáticas y regalos de alto valor simbólico.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Servicio 8 -->
    <div class="service-modal" id="service-modal-8">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close-modal">&times;</span>
          <div class="modal-icon">
            <i class="fas fa-plus-circle"></i>
          </div>
          <h2 data-i18n="services.service8title">Otros Servicios</h2>
        </div>
        <div class="modal-body">
          <p data-i18n="services.service8modalDesc">
            Ofrecemos diversas actividades relacionadas con los servicios de
            Correos y Telecomunicaciones que nos son atribuidas, adaptándonos a
            las necesidades cambiantes del país.
          </p>

          <div class="modal-features">
            <h4 data-i18n="services.features">Características principales:</h4>
            <ul>
              <li data-i18n="services.service8feature1">
                Servicios de mensajería especializada
              </li>
              <li data-i18n="services.service8feature2">
                Soluciones logísticas personalizadas
              </li>
              <li data-i18n="services.service8feature3">
                Gestión documental para empresas
              </li>
              <li data-i18n="services.service8feature4">
                Servicios de digitalización postal
              </li>
              <li data-i18n="services.service8feature5">
                Plataformas de comercio electrónico
              </li>
            </ul>
          </div>

          <h3 data-i18n="services.benefits">Beneficios</h3>
          <p data-i18n="services.service8benefits">
            Continuamos innovando para ofrecer soluciones integrales que
            satisfacen las necesidades emergentes de nuestros clientes. Nuestra
            flexibilidad y capacidad de adaptación nos permiten mantenernos a la
            vanguardia en servicios postales y de telecomunicaciones.
          </p>
        </div>
      </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5 gray-foot">
      <div class="row pt-5">
        <div class="col-lg-7 col-md-6">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h3 class="text-primary mb-4" data-i18n="body.footer1">
                Encuéntranos
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
                <a class="text-white mb-2" href="sobre-nosotros"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.sobreNosotros">Sobre Nosotros</span></a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.servicio">Nuestros Servicios</span></a>
                <a class="text-white" href="contacto" ><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.contacto">Cont&aacute;ctanos</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-5">
          <h3 class="text-primary mb-4" data-i18n="body.footer8">
            Hoja Informativa
          </h3>
          <p data-i18n="body.footer9">
            Mantente actualizado con nuestras últimas noticias y promociones
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
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5 gray-foot" style="border-color: #3e3e4e !important">
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white"  data-i18n="body.footer12">&copy; <a href="#">GECOTEL</a>. todos los derechos reservados. 
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
                >Términos</a
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
    <script src="/js/main.js"></script>
    <script src="js/i18n.js"></script>

    <script>
      // Script para mostrar los modales de servicios
      document.addEventListener("DOMContentLoaded", function () {
        // Abrir modal al hacer clic en una tarjeta
        const serviceCards = document.querySelectorAll(".service-card");
        serviceCards.forEach((card) => {
          card.addEventListener("click", function () {
            const serviceId = this.getAttribute("data-service");
            const modal = document.getElementById(`service-modal-${serviceId}`);
            modal.style.display = "block";
            document.body.style.overflow = "hidden"; // Evitar scroll en el fondo
          });
        });

        // Cerrar modal al hacer clic en la 'x'
        const closeButtons = document.querySelectorAll(".close-modal");
        closeButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const modal = this.closest(".service-modal");
            modal.style.display = "none";
            document.body.style.overflow = "auto"; // Restaurar scroll
          });
        });

        // Cerrar modal al hacer clic fuera del contenido
        window.addEventListener("click", function (event) {
          const modals = document.querySelectorAll(".service-modal");
          modals.forEach((modal) => {
            if (event.target === modal) {
              modal.style.display = "none";
              document.body.style.overflow = "auto"; // Restaurar scroll
            }
          });
        });

        // Cerrar modal con la tecla ESC
        document.addEventListener("keydown", function (event) {
          if (event.key === "Escape") {
            const modals = document.querySelectorAll(".service-modal");
            modals.forEach((modal) => {
              if (modal.style.display === "block") {
                modal.style.display = "none";
                document.body.style.overflow = "auto"; // Restaurar scroll
              }
            });
          }
        });
      });
    </script>
  </body>
</html>
