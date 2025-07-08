<!DOCTYPE html>
<html lang="es" data-i18n="html">

<head>
  <meta charset="utf-8">
  <title data-i18n="head.title">GECOTEL Guinea Ecuatorial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/GECOTEL.png" rel="icon">
  <meta name="description" data-i18n="head.description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
                            <a class="navbar-brand" href="#"><img src="C:/Users/Naty Ondo/Desktop/GECOTEL/logo1.png" alt=""></a>
                            <div class="ms-auto">
                                <div class="language-selector">
                                    <div class="dropdown">
                                        <button class="lang-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="selected-lang">Español</span>
                                                <svg class="chevron" width="14" height="14" viewBox="0 0 16 16" fill="none">
                                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                                </svg>                 
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#" data-lang="es" onclick="changeLanguage('es')">
                                                    <span class="language-name">Español</span>
                                                    <svg class="selected-check" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-lang="en" onclick="changeLanguage('en')">
                                                    <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-lang="fr" onclick="changeLanguage('fr')">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-lang="pt" onclick="changeLanguage('pt')">
                                                    <span class="language-name">Português</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-lang="zh" onclick="changeLanguage('zh')">
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
        <a href="#" class="nav-item nav-link active" data-i18n="nav.inicio">Inicio</a>
        <a href="servicios" class="nav-item nav-link" data-i18n="nav.servicio">Servicios</a>
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
            <h4 class="text-primary mb-4" data-i18n="body.title">Bienvenido a</h4>
            <h1 class="text-white display-3 mb-5" data-i18n="body.title2">GECOTEL</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" data-i18n="body.codigo" style="padding: 30px;" maxlength="10" placeholder="Inserte su código de seguimiento">
                    <div class="input-group-append">
                        <button class="btn btn-danger px-3" data-i18n="body.rastrear">Rastrear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/gecotel_cover.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0" data-i18n="body.experiencia">25+ A&ntilde;os de Experiencia entregando más que paquetes</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold" data-i18n="body.nosotros">Sobre nosotros</h6>
                    <h1 class="mb-4" data-i18n="body.h1">GECOTEL oficialmente conocida como Correos y Telecomunicaciones de Guinea Ecuatorial</h1>
                    <p class="mb-4" data-i18n="body.parafo">Es la empresa p&uacute;blica encargada de los servicios postales en Guinea Ecuatorial. 
                    Fundada en 1992, tiene su sede en la Calle Rey Boncoro, Bioko Norte. La empresa cuenta con una plantilla 
                    de entre 100 y 200 empleados</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold" data-i18n="body.elige">Elige tus</h6>
                    <h1 class="mb-4" data-i18n="body.pagos">M&eacute;todos de pago</h1>
                    <p class="mb-4" data-i18n="body.parafPagos">En GECOTEL, garantizamos opciones de pago flexibles y seguras para nuestros clientes.
                    Adaptamos nuestras soluciones financieras a tus necesidades, ofreciendo métodos confiables para facilitar tus envíos y operaciones comerciales.</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-bold mb-4">GECOTEL Money</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Muni Dinero</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">250</h1>
                            <h6 class="font-weight-bold mb-4" data-i18n="body.credito">Tarjeta de cr&eacute;dito</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <img class="imagen-2" src="img/img-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold" data-i18n="body.consulte">Consulte</h6>
                <h1 class="mb-4" data-i18n="body.nuestrosServicios">Nuestros Servicios</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-solid fa-envelope-open-text text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0" data-i18n="body.correoCartas">Correo de cartas</h6>
                    </div>
                    <p data-i18n="body.resumen1">Envío de cartas eficiente, asegurando que tus cartas llegue sin contratiempos.</p>
                    <a class="border-bottom text-decoration-none" href="servicios#correo-de-cartas" data-i18n="body.leer_mas">Leer m&aacute;s</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-solid fa-dolly text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0" data-i18n="body.paqueteria">Servicio de paqueter&iacute;a</h6>
                    </div>
                    <p data-i18n="body.resumen2">Nos aseguramos de que tus envíos lleguen intactos y en el menor tiempo posible.</p>
                    <a class="border-bottom text-decoration-none" href="servicios#servicio-de-paqueteria" data-i18n="body.leer_mas">Leer m&aacute;s</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-solid fa-hand-holding-dollar text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0" data-i18n="body.financiero">Servicios financieros</h6>
                    </div>
                    <p data-i18n="body.resumen3">Ofrecemos opciones de pago flexibles y servicios financieros confiables.</p>
                    <a class="border-bottom text-decoration-none" href="servicios#servicios-financieros" data-i18n="body.leer_mas">Leer m&aacute;s</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-solid fa-plane-departure text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0" data-i18n="body.servicio_express">Servicio expr&eacute;s internacional</h6>
                    </div>
                    <p data-i18n="body.resumen4">Garantizamos entregas oportunas a cualquier destino del mundo con total confianza.</p>
                    <a class="border-bottom text-decoration-none" href="servicios#servicio-expres-internacional" data-i18n="body.leer_mas">Leer m&aacute;s</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold" data-i18n="body.eligenos">El&iacute;genos</h6>
                    <h1 class="mb-4" data-i18n="body.rapido_seguro">R&aacute;pido, seguro y econ&oacute;mico</h1>
                    <p class="mb-4" data-i18n="body.resumen5">Nos especializamos en ofrecer soluciones logísticas eficientes, seguras y asequibles para nuestros clientes. Con tecnología avanzada y un equipo comprometido, garantizamos entregas rápidas y sin contratiempos, adaptándonos a las necesidades de cada envío.</p>
                    <ul class="list-inline">
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i><span data-i18n="body.lista1">Garantizada</span></h6>
                        </li>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i><span data-i18n="body.lista2">Servicio de seguimiento</span></h6>
                        </li>
                        <li>
                            <h6><i class="far fa-dot-circle text-primary mr-3"></i><span data-i18n="body.lista3">Disponibilidad 24/7</span></h6>
                        </li>

                    </ul>
                    <a href="sobre-nosotros#eligenos" class="btn btn-primary mt-3 py-2 px-4" data-i18n="body.leer_mas">Leer m&aacute;s</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Sección de Testimonios Compacta -->
    <section class="testimonios-section">
        <div class="section-header">
            <h6 class="text-primary" data-i18n="body.testimonio">Testimonios</h6>
            <h1 data-i18n="body.testimonio1">Lo que dicen nuestros clientes</h1>
        </div>
        
        <!-- Carrusel CSS sin JavaScript -->
        <div class="carousel-container">
            <div class="carousel-track">
                <!-- Grupo de testimonios -->
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (3).jpeg" alt="Juan Pérez">
                    <h5 class="testimonial-name">Juan Molico</h5>
                    <span class="testimonial-position text-primary">CEO, TechSolutions</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio2">"Servicio excelente, rápido y confiable. Mejoraron nuestra productividad en un 40%."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (21).jpeg" alt="María Gómez">
                    <h5 class="testimonial-name">María Nchama</h5>
                    <span class="testimonial-position text-primary" data-i18n="body.testimonio3">Gerente, Logística</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio4">"Atención al cliente increíble. Siempre resuelven mis dudas eficientemente."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (12).jpeg" alt="Carlos Rodríguez">
                    <h5 class="testimonial-name">Carlos Mayuca</h5>
                    <span class="testimonial-position text-primary">Director, E-Commerce</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio5">"Servicio de paquetería rápido. Todo llegó en perfecto estado."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (26).jpeg" alt="Laura Bokara">
                    <h5 class="testimonial-name">Laura Bokara</h5>
                    <span class="testimonial-position text-primary">Marketing Manager</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio6">"Solución de comunicación excepcional. Implementación rápida y sin problemas."</p>
                </div>
                
                <!-- Duplicados para el efecto de bucle -->
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (1).jpeg" alt="Juan Pérez">
                    <h5 class="testimonial-name">Juan Josafat</h5>
                    <span class="testimonial-position text-primary">CEO, TechSolutions</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio8">"Servicio excelente, rápido y confiable. Mejoraron nuestra productividad en un 40%."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (26).jpeg" alt="María Gómez">
                    <h5 class="testimonial-name">María Becoba</h5>
                    <span class="testimonial-position text-primary">Gerente, Logística</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio9">"Atención al cliente increíble. Siempre resuelven mis dudas eficientemente."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (8).jpeg" alt="Carlos Rodríguez">
                    <h5 class="testimonial-name">Carlos Rodríguez</h5>
                    <span class="testimonial-position text-primary">Director, E-Commerce</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio10">"Servicio de paquetería rápido. Todo llegó en perfecto estado."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <img class="testimonial-img" src="img/OIP (10).jpeg" alt="Laura Martínez">
                    <h5 class="testimonial-name">Laura Martínez</h5>
                    <span class="testimonial-position text-primary">Marketing Manager</span>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="testimonial-text" data-i18n="body.testimonio11">"Solución de comunicación excepcional. Implementación rápida y sin problemas."</p>
                </div>
            </div>
        </div>
        
        <!-- Indicadores -->
        <div class="custom-indicators">
            <div class="custom-indicator active"></div>
            <div class="custom-indicator"></div>
            <div class="custom-indicator"></div>
            <div class="custom-indicator"></div>
        </div>
    </section>
<!-- Patrocinadores Start -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="text-uppercase fw-bold text-gray" data-i18n="body.testimonio7">Colaboradores</h4>
    </div>

    <div id="patrocinadoresCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center g-4">
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/correos_españa_3.jpg" class="partner-logo" alt="Correos">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/dh.jpg" class="partner-logo" alt="DH">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/cronos.jpg" class="partner-logo" alt="Cronos">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center d-none d-sm-block">
              <img src="img/ethiopian.jpg" class="partner-logo" alt="Ethiopian">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center g-4">
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/ceiba.png" class="partner-logo" alt="Ceiba">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/france.jpg" class="partner-logo" alt="France">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/iberia.png" class="partner-logo" alt="Iberia">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center d-none d-sm-block">
              <img src="img/lusthansa.jpg" class="partner-logo" alt="Lufthansa">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center g-4">
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/dh.jpg" class="partner-logo" alt="DH 2">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/dhl.webp" class="partner-logo" alt="DHL">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center">
              <img src="img/ethiopian.jpg" class="partner-logo" alt="Ethiopian 2">
            </div>
            <div class="col-4 col-sm-3 col-md-2 text-center d-none d-sm-block">
              <img src="img/correos_españa_3.jpg" class="partner-logo" alt="Empresa L">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Patrocinadores End -->
<style>
  .partner-logo {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .partner-logo:hover {
    transform: scale(1.1);
  }

  @media (max-width: 576px) {
    .partner-logo {
      width: 80px;
      height: 80px;
    }
  }
</style>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5 gray-foot">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4" data-i18n="body.footer1">Encu&eacute;ntranos</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Calle Rey Boncoro, Malabo, G.E</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+240 333 444 555</p>
                        <p><i class="fa fa-envelope mr-2"></i>gecotel@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4" data-i18n="body.footer3">Enlaces Frecuentes</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.inicio">Inicio</span></a>
                            <a class="text-white mb-2" href="sobre-nosotros"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.sobreNosotros">Sobre Nosotros</span></a>
                            <a class="text-white mb-2" href="servicios"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.servicio">Nuestros Servicios</span></a>
                            <a class="text-white" href="contacto" ><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.contacto">Cont&aacute;ctanos</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4" data-i18n="body.footer8">Rastreo de envíos</h3>
                <p data-i18n="body.footer9">Ingresa tu código de seguimiento para conocer el estado y ubicación de tu envío en tiempo real. Garantizamos actualizaciones precisas para que siempre sepas dónde está tu paquete.</p>
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
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5 gray-foot" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    <span data-i18n="body.footer12">
                        &copy; <a href="#">GECOTEL</a>. Todos los derechos reservados. Dise&nacute;ado por <a href="https://vemixsolutionseg.com/">Vemix</a>
                    </span>
                </p>

            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="prohibido" data-i18n="body.footer13">Productos prohibidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="politica" data-i18n="body.footer14">Terminos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="preguntas" data-i18n="body.footer15">Preguntas Frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="contacto" data-i18n="body.footer16">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap 5 Bundle (JS + Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
    
</body>

</html>