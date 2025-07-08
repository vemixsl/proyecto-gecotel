<!DOCTYPE html>
<html lang="es" data-i18n="html">
  <head>
    <meta charset="utf-8" />
    <title data-i18n="head.title">GECOTEL Guinea Ecuatorial</title>
    <meta name="description" data-i18n="head.description" />
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
      --primary: #ffc107;
      --primary-dark: #e6ac00;
      --secondary: #ecbd2f;
      --dark: #1e293b;
      --light: #f8fafc;
      --gray: #64748b;
      --light-gray: #e2e8f0;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
      --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      color: var(--dark);
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Espacio adicional en pantallas pequeñas */
    @media (max-width: 768px) {
      .container {
        padding: 0 15px;
      }
      .card-body {
        padding: 20px 15px;
      }
      
      /* Margen para cotizador internacional */
      #cotizadorInternacional .calculator-card {
        margin-left: 15px;
        margin-right: 15px;
      }
    }
    
    @media (max-width: 576px) {
      .container {
        padding: 0 12px;
      }
      .card-body {
        padding: 15px 12px;
      }
      
      /* Margen para cotizador internacional */
      #cotizadorInternacional .calculator-card {
        margin-left: 12px;
        margin-right: 12px;
      }
    }
    
    /* Mejoras en el header */
    .calculator-card {
      background: white;
      border-radius: 16px;
      box-shadow: var(--card-shadow);
      overflow: hidden;
      margin-bottom: 40px;
      transition: var(--transition);
    }
    
    .card-header-container {
      position: relative;
      margin: 0 -20px;
      width: calc(100% + 40px);
    }
    
    .card-header {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      padding: 20px 30px;
      position: relative;
      z-index: 1;
      border-bottom: none;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      width: 100%;
    }

    .card-header h2 {
      font-size: 1.6rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 0;
    }
    
    /* Estilos específicos para selects de países */
    .country-select-container {
      position: relative;
      overflow: hidden;
    }
    
    .country-select-container .form-control {
      padding-right: 40px;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }
    
    .country-select-container i.fas.fa-chevron-down {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
      pointer-events: none;
    }
    
    #cotizadorInternacional select.form-control {
      background-position: right 1rem center;
      padding-right: 40px;
      text-overflow: ellipsis;
    }
    
    #cotizadorInternacional .input-with-icon i {
      z-index: 3;
    }

    .calculator-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .calculator-card {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
      padding-top: 30px;
    }

    .section-title h2 {
      font-size: 2.2rem;
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
      color: var(--gray);
      max-width: 700px;
      margin: 20px auto 0;
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .card-body {
      padding: 30px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
      margin-bottom: 20px;
    }

    .form-section {
      padding: 20px;
      background: #f8f9fc;
      border-radius: 12px;
      border: 1px solid #e9ecef;
      transition: var(--transition);
    }

    .form-section:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .form-section-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--primary);
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .form-section-title i {
      font-size: 1.3rem;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--dark);
      font-size: 15px;
    }

    .input-with-icon {
      position: relative;
    }

    .input-with-icon i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
      z-index: 2;
    }

    .form-control {
      width: 100%;
      padding: 15px 20px 15px 45px;
      border: 1px solid var(--light-gray);
      border-radius: 10px;
      font-size: 16px;
      transition: var(--transition);
      background: white;
      height: 54px;
    }

    .form-control:focus {
      border-color: var(--primary);
      outline: none;
      box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.2);
    }

    .service-options {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 15px;
      margin-top: 10px;
    }

    .service-option {
      border: 2px solid var(--light-gray);
      border-radius: 12px;
      padding: 18px 15px;
      cursor: pointer;
      transition: var(--transition);
      text-align: center;
      background: white;
    }

    .service-option:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .service-option.selected {
      border-color: var(--primary);
      background: rgba(255, 193, 7, 0.1);
      box-shadow: 0 4px 6px -1px rgba(255, 193, 7, 0.2);
    }

    .service-option i {
      font-size: 28px;
      color: var(--primary);
      margin-bottom: 10px;
      display: block;
    }

    .service-option h4 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .service-option p {
      font-size: 14px;
      color: var(--gray);
      margin: 0;
    }

    .calculate-btn {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      border: none;
      border-radius: 10px;
      padding: 16px 30px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      transition: var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
      box-shadow: 0 4px 6px rgba(255, 193, 7, 0.3);
    }

    .calculate-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      background: linear-gradient(90deg, var(--primary-dark), var(--secondary));
    }

    .calculate-btn:active {
      transform: translateY(-1px);
    }

    /* Campos específicos */
    .dimensions-weight-section {
      position: relative;
    }

    .dimensions-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      margin-bottom: 20px;
    }

    .dimension-input {
      display: flex;
      flex-direction: column;
    }

    .dimension-input label {
      font-size: 14px;
      color: var(--gray);
      margin-bottom: 5px;
    }

    .dimension-input input {
      padding: 12px;
      border: 1px solid var(--light-gray);
      border-radius: 10px;
      font-size: 16px;
      text-align: center;
      background: white;
      height: 54px;
    }

    .quantity-field {
      display: none;
      margin-top: 20px;
    }

    .quantity-field .input-group {
      display: flex;
      align-items: center;
    }

    .quantity-field .input-group i {
      margin-right: 10px;
      color: var(--primary);
      font-size: 1.2rem;
    }

    .quantity-field input {
      width: 100px;
      padding: 12px;
      border: 1px solid var(--light-gray);
      border-radius: 10px;
      font-size: 16px;
      text-align: center;
      background: white;
      height: 54px;
    }

    /* Result Section */
    .result-section {
      background: white;
      border-radius: 16px;
      box-shadow: var(--card-shadow);
      padding: 30px;
      margin: 30px auto 0;
      display: none;
      transition: var(--transition);
    }

    .result-section.show {
      display: block;
      animation: fadeIn 0.6s ease-out;
    }

    .result-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--light-gray);
    }

    .result-header h3 {
      font-size: 1.6rem;
      font-weight: 600;
      color: var(--dark);
    }

    .result-price {
      font-size: 2.8rem;
      font-weight: 700;
      text-align: center;
      margin: 30px 0;
      color: var(--primary);
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      -webkit-background-clip: padding-box;
      background-clip: padding-box; /* Propiedad estándar */
      -webkit-text-fill-color: transparent;
    }

    .result-details {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .detail-card {
      background: var(--light);
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
      border-left: 4px solid var(--primary);
      transition: var(--transition);
    }

    .detail-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .detail-card h4 {
      font-size: 16px;
      color: var(--gray);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .detail-value {
      font-size: 18px;
      font-weight: 600;
      color: var(--dark);
    }

    .quote-note {
      background: #fffbeb;
      border-left: 4px solid var(--warning);
      padding: 15px;
      border-radius: 0 8px 8px 0;
      margin-top: 30px;
      font-size: 14px;
      color: var(--gray);
      line-height: 1.6;
    }

    .new-quote-btn {
      background: white;
      color: var(--primary);
      border: 2px solid var(--primary);
      border-radius: 10px;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 25px;
      transition: var(--transition);
      display: block;
      margin: 30px auto 0;
      width: fit-content;
    }

    .new-quote-btn:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Botones de cotizadores */
    .cotizador-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
      margin-bottom: 30px;
    }
    
    .cotizador-btn {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      border: none;
      border-radius: 10px;
      padding: 15px 30px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: 0 4px 6px rgba(255, 193, 7, 0.3);
      min-width: 250px;
      text-align: center;
    }
    
    .cotizador-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .cotizador-btn.active {
      box-shadow: 0 0 0 3px white, 0 0 0 6px var(--primary);
    }
    
    /* Estilos para campos ocultos */
    .hidden {
      display: none;
    }

    .client-type-section {
      margin-bottom: 20px;
    }
    
    .client-type-options {
      display: flex;
      gap: 15px;
      margin-top: 10px;
    }
    
    .client-option {
      border: 2px solid var(--light-gray);
      border-radius: 12px;
      padding: 15px;
      cursor: pointer;
      transition: var(--transition);
      text-align: center;
      flex: 1;
      background: white;
    }
    
    .client-option:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .client-option.selected {
      border-color: var(--primary);
      background: rgba(255, 193, 7, 0.1);
      box-shadow: 0 4px 6px -1px rgba(255, 193, 7, 0.2);
    }
    
    .transport-section {
      display: none;
      margin-top: 20px;
    }
    
    .transport-options {
      display: flex;
      gap: 15px;
      margin-top: 10px;
    }
    
    .transport-option {
      border: 2px solid var(--light-gray);
      border-radius: 12px;
      padding: 15px;
      cursor: pointer;
      transition: var(--transition);
      text-align: center;
      flex: 1;
      background: white;
    }
    
    .transport-option:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .transport-option.selected {
      border-color: var(--primary);
      background: rgba(255, 193, 7, 0.1);
      box-shadow: 0 4px 6px -1px rgba(255, 193, 7, 0.2);
    }
    
    /* Mejoras responsive */
    @media (max-width: 768px) {
      .client-type-options, .transport-options {
        flex-direction: column;
      }
      
      .dimensions-container {
        grid-template-columns: 1fr;
      }
      
      .cotizador-buttons {
        flex-direction: column;
        align-items: center;
      }
      
      .cotizador-btn {
        width: 100%;
        max-width: 300px;
      }
      
      .form-grid {
        grid-template-columns: 1fr;
      }
      
      .section-title h2 {
        font-size: 1.8rem;
      }
      
      .result-price {
        font-size: 2.2rem;
      }
    }
    
    @media (max-width: 576px) {
      .form-control {
        padding: 14px 20px 14px 45px;
        height: 50px;
        font-size: 14px;
      }
      
      .dimension-input input {
        height: 50px;
        font-size: 14px;
      }
      
      .result-price {
        font-size: 1.8rem;
      }
      
      .form-section {
        padding: 15px;
      }
      
      .service-option {
        padding: 12px 10px;
      }
    }
    
    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
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
        <a href="sobre-nosotros" class="nav-item nav-link" data-i18n="nav.sobreNosotros">Sobre nosotros</a>
        <a href="tarifas" class="nav-item nav-link" data-i18n="nav.tarifas">Tarifas</a>
        <a href="#" class="nav-item nav-link" data-i18n="nav.cotizador">Cotizador</a>
        <a href="contacto" class="nav-item nav-link active" data-i18n="nav.contacto">Contacto</a>
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
        <h1 class="text-white display-3">Cotizador</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="">Inicio</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0">Cotizador</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <!-- Botones para cambiar entre cotizador nacional e internacional -->
<!--<div class="container" style="margin-top: 30px; text-align: center;">
  <button id="btnNacional" class="calculate-btn" style="width: 200px; display: inline-block; margin: 10px;">
    Cotizador Nacional
  </button>
  <button id="btnInternacional" class="calculate-btn" style="width: 200px; display: inline-block; margin: 10px;">
    Cotizador Internacional
  </button>
</div> -->
  <div class="container">
    <div class="cotizador-buttons">
      <button id="btnNacional" class="cotizador-btn active">
        <i class="fas fa-home"></i> Cotizador Nacional
      </button>
      <button id="btnInternacional" class="cotizador-btn">
        <i class="fas fa-globe-americas"></i> Cotizador Internacional
      </button>
    </div>
  </div>

  <!-- Sección del Cotizador Nacional -->
  <div id="cotizadorNacional" class="container">
    <div class="container">
      <div class="section-title">
        <h2>Calcula el costo de tu envío</h2>
        <p>
          Ingresa los detalles de tu paquete para obtener una cotización precisa
        </p>
      </div>

      <!-- Cotizador Container -->
      <div class="calculator-card">
        <div class="card-header-container">
          <div class="card-header">
            <h2>
              <i class="fas fa-calculator"></i> Detalles del Envío
            </h2>
          </div>
        </div>
        
        <div class="card-body">
          <!-- Sección Tipo de Cliente -->
          <div class="form-section client-type-section">
            <div class="form-section-title">
              <i class="fas fa-user-tag"></i>
              <span>Tipo de Cliente</span>
            </div>
            <div class="client-type-options">
              <div class="client-option selected" data-type="empresa">
                <i class="fas fa-building"></i>
                <h4>Empresa</h4>
              </div>
              <div class="client-option" data-type="persona">
                <i class="fas fa-user"></i>
                <h4>Persona Física</h4>
              </div>
            </div>
          </div>
          
          <!-- Sección Origen -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-map-marker-alt"></i>
              <span>Origen</span>
            </div>
            <div class="form-group">
              <div class="input-with-icon">
                <i class="fas fa-location-dot"></i>
                <select class="form-control" id="origin">
                  <option value="">Seleccione una ciudad</option>
                  <option value="malabo">Malabo</option>
                  <option value="bata">Bata</option>
                  <option value="ebebiyin">Ebebiyín</option>
                  <option value="mongomo">Mongomo</option>
                  <option value="evinayong">Evinayong</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Sección Destino -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-location-dot"></i>
              <span>Destino</span>
            </div>
            <div class="form-group">
              <div class="input-with-icon">
                <i class="fas fa-flag"></i>
                <select class="form-control" id="destination">
                  <option value="">Seleccione una ciudad</option>
                  <option value="malabo">Malabo</option>
                  <option value="bata">Bata</option>
                  <option value="ebebiyin">Ebebiyín</option>
                  <option value="mongomo">Mongomo</option>
                  <option value="evinayong">Evinayong</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Sección Tipo de Embalaje -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-box"></i>
              <span>Tipo de Embalaje</span>
            </div>
            <div class="form-group">
              <div class="service-options">
                <div class="service-option selected" data-type="sobre">
                  <i class="fas fa-envelope"></i>
                  <h4>Sobre</h4>
                  <p>Documentos, cartas</p>
                </div>
                <div class="service-option" data-type="bolsa">
                  <i class="fas fa-shopping-bag"></i>
                  <h4>Bolsa</h4>
                  <p>Artículos pequeños</p>
                </div>
                <div class="service-option" data-type="paquete">
                  <i class="fas fa-box"></i>
                  <h4>Paquete</h4>
                  <p>Bultos, cajas</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Sección Dimensiones y Peso -->
          <div class="form-section dimensions-weight-section" id="dimensionsSection">
            <div class="form-section-title mb-3">
              <i class="fas fa-box"></i>
              <span>Dimensiones y Peso</span>
            </div>

            <div class="dimensions-container">
              <!-- Largo -->
              <div class="dimension-input">
                <label for="length" class="form-label">Largo (cm)</label>
                <input type="number" id="length" class="form-control" value="30" min="1" maxlength="4" />
              </div>

              <!-- Ancho -->
              <div class="dimension-input">
                <label for="width" class="form-label">Ancho (cm)</label>
                <input type="number" id="width" class="form-control" value="20" min="1" maxlength="4" />
              </div>
            </div>
            
            <!-- Peso -->
            <div id="weightField">
              <label for="weight" class="form-label">Peso (kg)</label>
              <div class="input-with-icon">
                <i class="fas fa-weight-hanging"></i>
                <input type="number" class="form-control" id="weight" value="1" min="0.1" step="0.1" placeholder="Ej: 2.5" maxlength="4" />
              </div>
            </div>
            
            <!-- Cantidad de sobres -->
            <div class="quantity-field" id="quantityField">
              <label class="form-label">Cantidad de sobres</label>
              <div class="input-group">
                <i class="fas fa-layer-group"></i>
                <input type="number" class="form-control" id="quantity" value="1" min="1" max="100" />
              </div>
            </div>
            
            <!-- Mensaje de error -->
            <div id="error-message" class="alert alert-danger mt-3 d-none" role="alert">
              <i class="fas fa-exclamation-triangle me-2"></i>
              <span id="error-text"></span>
            </div>
          </div>

          <!-- Sección Medio de Transporte -->
          <div class="form-section transport-section" id="transporteSection">
            <div class="form-section-title">
              <i class="fas fa-truck"></i>
              <span>Medio de Transporte</span>
            </div>
            <div class="transport-options">
              <div class="transport-option" data-type="barco">
                <i class="fas fa-ship"></i>
                <h4>Barco</h4>
              </div>
              <div class="transport-option" data-type="avion">
                <i class="fas fa-plane"></i>
                <h4>Avión</h4>
              </div>
              <div class="transport-option" data-type="terrestre">
                <i class="fas fa-truck"></i>
                <h4>Terrestre</h4>
              </div>
            </div>
          </div>

          <button class="calculate-btn" id="calculateBtn">
            <i class="fas fa-calculator"></i>
            <span>Calcular Costo</span>
          </button>
        </div>
      </div>

      <!-- Result Section -->
      <div class="result-section" id="resultSection">
        <div class="result-header">
          <h3>
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Resultado de Cotización</span>
          </h3>
          <div>
            <span>Fecha</span>:
            <span id="currentDate"></span>
          </div>
        </div>

        <div class="result-price" id="resultPrice">0 CFA</div>

        <div class="result-details">
          <div class="detail-card">
            <h4>
              <i class="fas fa-route"></i>
              <span>Ruta</span>
            </h4>
            <div class="detail-value">
              <div>
                <span>Origen</span>:
                <span id="resultOrigin">-</span>
              </div>
              <div>
                <span>Destino</span>:
                <span id="resultDestination">-</span>
              </div>
              <div>
                <span>Distancia</span>:
                <span id="resultDistance">-</span>
              </div>
            </div>
          </div>

          <div class="detail-card">
            <h4>
              <i class="fas fa-box"></i>
              <span>Paquete</span>
            </h4>
            <div class="detail-value">
              <div id="dimensionsResult">
                <span>Dimensiones</span>:
                <span id="resultDimensions">-</span>
              </div>
              <div id="weightResult">
                <span>Peso</span>:
                <span id="resultWeight">-</span>
              </div>
              <div id="quantityResult" class="hidden">
                <span>Cantidad</span>:
                <span id="resultQuantity">-</span>
              </div>
            </div>
          </div>

          <div class="detail-card">
            <h4>
              <i class="fas fa-concierge-bell"></i>
              <span>Servicio</span>
            </h4>
            <div class="detail-value">
              <div>
                <span>Tipo</span>:
                <span id="resultService">-</span>
              </div>
              <div>
                <span>Tiempo</span>:
                <span id="resultTime">-</span>
              </div>
              <div>
                <span>Número</span>: #<span id="resultNumber">-</span>
              </div>
            </div>
          </div>
        </div>

        <div class="quote-note">
          <i class="fas fa-info-circle"></i>
          <span>
            Esta cotización es válida por 7 días. El precio final puede variar
            ligeramente después de la verificación física del paquete. Tarifas
            sujetas a cambios sin previo aviso.
          </span>
        </div>

        <button class="new-quote-btn" id="newQuoteBtn">
          <i class="fas fa-redo"></i>
          <span>Nueva Cotización</span>
        </button>
      </div>

      <div class="footer text-center mt-4">
        <p>© 2023 GECOTEL - Cotizador de Envíos Profesional</p>
      </div>
    </div>
  </div>

<!-- Sección del Cotizador Internacional -->
  <div id="cotizadorInternacional" class="container hidden">
    <div class="section-title">
      <h2>Envío Internacional</h2>
      <p>
        Calcula el costo de enviar paquetes a cualquier parte del mundo
      </p>
    </div>
    
    <div class="calculator-card">
      <div class="card-header-container">
        <div class="card-header">
          <h2><i class="fas fa-globe"></i> Detalles del Envío Internacional</h2>
        </div>
      </div>
      
      <div class="card-body">
        <div class="form-grid">
            <!-- País origen -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-flag-checkered"></i> País de origen
            </div>
            <div class="form-group">
              <div class="country-select-container">
                <div class="input-with-icon">
                  <i class="fas fa-globe-europe"></i>
                  <select class="form-control" id="paisOrigen">
                    <option value="">Seleccione un país</option>
                    <option value="es">España</option>
                    <option value="fr">Francia</option>
                    <option value="de">Alemania</option>
                    <option value="us">Estados Unidos</option>
                    <option value="cn">China</option>
                    <option value="it">Italia</option>
                    <option value="jp">Japón</option>
                    <option value="uk">Reino Unido</option>
                    <option value="br">Brasil</option>
                    <option value="ca">Canadá</option>
                  </select>
                </div>
                <i class="fas fa-chevron-down"></i>
              </div>
            </div>
          </div>
          <!-- País destino -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-flag"></i> País de destino
            </div>
            <div class="form-group">
              <div class="country-select-container">
                <div class="input-with-icon">
                  <i class="fas fa-globe-americas"></i>
                  <select class="form-control" id="paisDestino">
                    <option value="">Seleccione un país</option>
                    <option value="es">España</option>
                    <option value="fr">Francia</option>
                    <option value="de">Alemania</option>
                    <option value="us">Estados Unidos</option>
                    <option value="cn">China</option>
                    <option value="it">Italia</option>
                    <option value="jp">Japón</option>
                    <option value="uk">Reino Unido</option>
                    <option value="br">Brasil</option>
                    <option value="ca">Canadá</option>
                  </select>
                </div>
                <i class="fas fa-chevron-down"></i>
              </div>
            </div>
          </div>

          <!-- Peso -->
          <div class="form-section">
            <div class="form-section-title">
              <i class="fas fa-weight-hanging"></i> Peso del paquete (kg)
            </div>
            <div class="form-group">
              <div class="input-with-icon">
                <i class="fas fa-box"></i>
                <input type="number" class="form-control" id="pesoInternacional" placeholder="Ej: 2.5" min="0.1" step="0.1">
              </div>
            </div>
          </div>
        </div>

        <button class="calculate-btn" id="btnCalcularInternacional">
          <i class="fas fa-calculator"></i> Calcular Costo
        </button>

        <div class="result-section" id="resultadoInternacional">
          <div class="result-header">
            <h3><i class="fas fa-file-invoice-dollar"></i> Resultado de Cotización</h3>
            <div><span>Fecha</span>: <span id="fechaInternacional"></span></div>
          </div>

          <div class="result-price" id="precioInternacional">0 CFA</div>

          <div class="result-details">
            <div class="detail-card">
              <h4><i class="fas fa-globe-africa"></i> País</h4>
              <div class="detail-value" id="detallePais">-</div>
            </div>
            <div class="detail-card">
              <h4><i class="fas fa-map"></i> Zona</h4>
              <div class="detail-value" id="detalleZona">-</div>
            </div>
            <div class="detail-card">
              <h4><i class="fas fa-weight-hanging"></i> Peso</h4>
              <div class="detail-value" id="detallePeso">-</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                <a class="text-white mb-2" href="sobre-nosotros"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.sobreNosotros">Sobre Nosotros</span></a>
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
                <input type="text" class="form-control border-light" data-i18n="body.codigo" style="padding: 30px;" maxlength="20"  placeholder="Inserte su código de seguimiento">
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
      style="border-color: #3e3e4e !important"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white" data-i18n="body.footer12">
            &copy; <a href="#">GECOTEL</a>. todos los derechos reservados.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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
    <script src="/js/main.js"></script>
    <script src="js/i18n.js"></script>
    <script>
     document.addEventListener("DOMContentLoaded", function () {
      // Set current date
      const now = new Date();
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      document.getElementById("currentDate").textContent = now.toLocaleDateString('es-ES', options);
      
      // Service selection
      const serviceOptions = document.querySelectorAll(".service-option");
      let selectedService = "sobre";

      serviceOptions.forEach((option) => {
        option.addEventListener("click", function () {
          serviceOptions.forEach((opt) => opt.classList.remove("selected"));
          this.classList.add("selected");
          selectedService = this.getAttribute("data-type");
          
          // Mostrar/ocultar campos según tipo de embalaje
          if (selectedService === "sobre") {
            // Mostrar cantidad, ocultar peso y dimensiones
            document.getElementById("dimensionsSection").classList.add("hidden");
            document.getElementById("quantityField").style.display = "block";
          } else {
            // Mostrar peso y dimensiones, ocultar cantidad
            document.getElementById("dimensionsSection").classList.remove("hidden");
            document.getElementById("quantityField").style.display = "none";
          }
        });
      });

      // Client type selection
      const clientOptions = document.querySelectorAll(".client-option");
      let clientType = "empresa";
      
      clientOptions.forEach((option) => {
        option.addEventListener("click", function () {
          clientOptions.forEach((opt) => opt.classList.remove("selected"));
          this.classList.add("selected");
          clientType = this.getAttribute("data-type");
          
          // Mostrar/ocultar sección de transporte
          const transporteSection = document.getElementById("transporteSection");
          if (clientType === "persona") {
            transporteSection.style.display = "block";
          } else {
            transporteSection.style.display = "none";
          }
        });
      });

      // Transport selection
      const transportOptions = document.querySelectorAll(".transport-option");
      let transportType = "barco";
      
      // Seleccionar barco por defecto para personas físicas
      transportOptions[0].classList.add("selected");
      
      transportOptions.forEach((option) => {
        option.addEventListener("click", function () {
          transportOptions.forEach((opt) => opt.classList.remove("selected"));
          this.classList.add("selected");
          transportType = this.getAttribute("data-type");
        });
      });

      // Calculate button
      document.getElementById("calculateBtn").addEventListener("click", calculateQuote);

      // New quote button
      document.getElementById("newQuoteBtn").addEventListener("click", resetCalculator);

      // Function to calculate quote based on new requirements
      function calculateQuote() {
        // Get form values
        const origin = document.getElementById("origin").value;
        const destination = document.getElementById("destination").value;
        const length = parseFloat(document.getElementById("length").value) || 30;
        const width = parseFloat(document.getElementById("width").value) || 20;
        const weight = parseFloat(document.getElementById("weight").value) || 1;
        const quantity = parseFloat(document.getElementById("quantity").value) || 1;
        const tipoEmbalaje = selectedService;
        
        // Validate inputs
        if (!origin || !destination) {
          alert("Por favor, seleccione tanto el origen como el destino");
          return;
        }

        // Calcular costo según las nuevas reglas
        let cost = 0;
        let serviceName = "";
        let serviceTime = "";
        
        // Rutas comunes
        const malaboBata = (origin === 'malabo' && destination === 'bata') || 
                           (origin === 'bata' && destination === 'malabo');
        
        const malaboInterior = (origin === 'malabo' && destination !== 'bata' && destination !== 'malabo') || 
                              (destination === 'malabo' && origin !== 'bata' && origin !== 'malabo');
        
        const bataInterior = (origin === 'bata' && destination !== 'malabo' && destination !== 'bata') || 
                            (destination === 'bata' && origin !== 'malabo' && origin !== 'bata');
        
        // Cálculo para empresas
        if (clientType === 'empresa') {
          if (malaboBata) {
            if (tipoEmbalaje === 'sobre') {
              cost = 2500 * quantity;
              serviceName = `Sobres (${quantity}) - Empresa`;
              serviceTime = "1-2 días hábiles";
            } else {
              cost = 2000 * weight;
              serviceName = tipoEmbalaje === 'bolsa' ? "Bolsa - Empresa" : "Paquete - Empresa";
              serviceTime = "2-3 días hábiles";
            }
          } 
          else if (malaboInterior || bataInterior) {
            cost = 1000 * weight;
            serviceName = tipoEmbalaje === 'sobre' ? "Sobre - Empresa" : 
                         tipoEmbalaje === 'bolsa' ? "Bolsa - Empresa" : "Paquete - Empresa";
            serviceTime = "3-5 días hábiles";
          }
        } 
        // Cálculo para personas físicas
        else if (clientType === 'persona') {
          if (malaboBata) {
            if (transportType === 'barco') {
              cost = 700 * weight;
              serviceName = "Barco - Persona";
              serviceTime = "3-5 días hábiles";
            } else if (transportType === 'avion') {
              cost = 2000 * weight;
              serviceName = "Avión - Persona";
              serviceTime = "1-2 días hábiles";
            }
          } 
          else if (malaboInterior) {
            if (transportType === 'barco') {
              cost = 1700 * weight;
              serviceName = "Barco - Persona";
              serviceTime = "4-6 días hábiles";
            } else if (transportType === 'avion') {
              cost = 3000 * weight;
              serviceName = "Avión - Persona";
              serviceTime = "1-2 días hábiles";
            }
          } 
          else if (bataInterior) {
            if (transportType === 'terrestre') {
              cost = 1000 * weight;
              serviceName = "Terrestre - Persona";
              serviceTime = "2-4 días hábiles";
            }
          }
        }

        // Validar si se pudo calcular
        if (cost === 0) {
          alert("No se puede calcular tarifa con los datos seleccionados");
          return;
        }

        // Format cost
        const formattedCost = new Intl.NumberFormat("fr-FR", {
          style: "currency",
          currency: "XAF",
          minimumFractionDigits: 0,
        }).format(cost);

        // Simulate distance calculation
        const distances = {
          "malabo-bata": 250,
          "malabo-ebebiyin": 180,
          "malabo-mongomo": 200,
          "malabo-evinayong": 150,
          "bata-ebebiyin": 120,
          "bata-mongomo": 220,
          "bata-evinayong": 180,
          "ebebiyin-mongomo": 50,
          "ebebiyin-evinayong": 100,
          "mongomo-evinayong": 80,
        };

        let distanceKey = `${origin}-${destination}`;
        let reverseKey = `${destination}-${origin}`;

        let distance = distances[distanceKey] || distances[reverseKey] || 100;

        // Generate random tracking number
        const trackingNumber = "GE" + Math.floor(10000000 + Math.random() * 90000000);

        // Update result section
        document.getElementById("resultPrice").textContent = formattedCost;
        document.getElementById("resultOrigin").textContent = getCityName(origin);
        document.getElementById("resultDestination").textContent = getCityName(destination);
        document.getElementById("resultDistance").textContent = distance + " km";
        document.getElementById("resultService").textContent = serviceName;
        document.getElementById("resultTime").textContent = serviceTime;
        document.getElementById("resultNumber").textContent = trackingNumber;

        // Mostrar información según el tipo de embalaje
        if (selectedService === "sobre") {
          document.getElementById("dimensionsResult").classList.add("hidden");
          document.getElementById("weightResult").classList.add("hidden");
          document.getElementById("quantityResult").classList.remove("hidden");
          document.getElementById("resultQuantity").textContent = quantity;
          document.getElementById("resultDimensions").textContent = "-";
          document.getElementById("resultWeight").textContent = "-";
        } else {
          document.getElementById("dimensionsResult").classList.remove("hidden");
          document.getElementById("weightResult").classList.remove("hidden");
          document.getElementById("quantityResult").classList.add("hidden");
          document.getElementById("resultDimensions").textContent = `${length} × ${width} cm`;
          document.getElementById("resultWeight").textContent = weight + " kg";
          document.getElementById("resultQuantity").textContent = "-";
        }

        // Show result section
        document.getElementById("resultSection").classList.add("show");

        // Scroll to results
        document.getElementById("resultSection").scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }

      // Function to get city name
      function getCityName(cityCode) {
        const cities = {
          malabo: "Malabo",
          bata: "Bata",
          ebebiyin: "Ebebiyín",
          mongomo: "Mongomo",
          evinayong: "Evinayong",
        };
        return cities[cityCode] || cityCode;
      }

      // Function to reset calculator
      function resetCalculator() {
        document.getElementById("origin").value = "";
        document.getElementById("destination").value = "";
        document.getElementById("length").value = "30";
        document.getElementById("width").value = "20";
        document.getElementById("weight").value = "1";
        document.getElementById("quantity").value = "1";

        // Reset service selection
        serviceOptions.forEach((opt) => opt.classList.remove("selected"));
        document.querySelector('[data-type="sobre"]').classList.add("selected");
        selectedService = "sobre";
        
        // Reset client selection
        clientOptions.forEach((opt) => opt.classList.remove("selected"));
        document.querySelector('[data-type="empresa"]').classList.add("selected");
        clientType = "empresa";
        
        // Hide transport section
        document.getElementById("transporteSection").style.display = "none";
        
        // Show appropriate fields for "sobre"
        document.getElementById("dimensionsSection").classList.add("hidden");
        document.getElementById("quantityField").style.display = "block";

        // Hide result section
        document.getElementById("resultSection").classList.remove("show");

        // Scroll to top
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
      
      // Inicializar campos para "sobre"
      document.getElementById("dimensionsSection").classList.add("hidden");
      document.getElementById("quantityField").style.display = "block";
     });
    </script>
    <script>
     // Mostrar/ocultar cotizadores
      document.getElementById("btnNacional").addEventListener("click", () => {
        document.getElementById("cotizadorNacional").classList.remove("hidden");
        document.getElementById("cotizadorInternacional").classList.add("hidden");
        document.getElementById("btnNacional").classList.add("active");
        document.getElementById("btnInternacional").classList.remove("active");
      });

      document.getElementById("btnInternacional").addEventListener("click", () => {
        document.getElementById("cotizadorNacional").classList.add("hidden");
        document.getElementById("cotizadorInternacional").classList.remove("hidden");
        document.getElementById("btnNacional").classList.remove("active");
        document.getElementById("btnInternacional").classList.add("active");
      });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
  // 1. Definir zonas por país (sin incluir Guinea Ecuatorial)
  const paisesZonas = {
    "Afghanistan": 7, "Ecuador": 8, "Libya": 4, "San Marino": 3,
    "Albania": 3, "Egypt": 4, "Liechtenstein": 3, "Sao Tome And Principe": 1,
    "Algeria": 4, "El Salvador": 8, "Lithuania": 3, "Saudi Arabia": 7,
    "Brazil": 8, "France": 3, "United States": 5, "Cameroon": 1
    // Agrega todos los demás países aquí
  };

  // 2. Tarifas por peso y zona
  const tarifas = [
    { peso: 0.5, zonas: [40949, 36269, 41910, 42586, 43836, 44802, 45280, 45770] },
    { peso: 1, zonas: [51330, 45788, 53737, 55861, 57590, 59041, 60002, 62610] },
    { peso: 1.5, zonas: [61235, 54876, 65369, 68755, 71250, 72987, 74532, 79068] },
    { peso: 2, zonas: [71139, 63963, 77002, 81648, 84911, 86934, 89062, 95527] },
    { peso: 2.5, zonas: [81044, 73051, 88634, 94541, 98572 , 100880, 103592, 111985] },                                                      
    { peso: 70, zonas: [689790, 781897, 972050, 1164140, 1277611, 1396872, 1508142, 1606694] }
  ];

  // 3. Insertar fecha actual
  const fecha = new Date().toLocaleDateString('es-ES', {
    year: 'numeric', month: 'long', day: 'numeric'
  });
  document.getElementById("fechaInternacional").textContent = fecha;

  const origenSelect = document.getElementById("paisOrigen");
  const destinoSelect = document.getElementById("paisDestino");

  const todosLosPaises = Object.keys(paisesZonas).concat("Guinea Ecuatorial");

  // 4. Rellenar selects de países
  todosLosPaises.sort().forEach(pais => {
    origenSelect.appendChild(new Option(pais, pais));
    destinoSelect.appendChild(new Option(pais, pais));
  });

  // 5. Lógica de selección dinámica
  origenSelect.addEventListener("change", function () {
    const origen = origenSelect.value;

    if (origen === "Guinea Ecuatorial") {
      destinoSelect.disabled = false;
      destinoSelect.innerHTML = '<option value="">Seleccione un país</option>';
      Object.keys(paisesZonas).sort().forEach(pais => {
        destinoSelect.appendChild(new Option(pais, pais));
      });
    } else {
      destinoSelect.innerHTML = '<option value="Guinea Ecuatorial">Guinea Ecuatorial</option>';
      destinoSelect.disabled = true;
    }
  });

  // 6. Cálculo del costo
  document.getElementById("btnCalcularInternacional").addEventListener("click", function () {
    const origen = origenSelect.value;
    const destino = destinoSelect.value;
    const peso = parseFloat(document.getElementById("pesoInternacional").value);

    if (!origen || !destino) {
      alert("Seleccione el país de origen y destino.");
      return;
    }

    if (!peso || peso <= 0) {
      alert("Ingrese un peso válido (mayor a 0).");
      return;
    }

    if (peso > 70) {
      alert("El peso máximo permitido para cotización en línea es 70 kg.");
      return;
    }

    const paisConZona = origen === "Guinea Ecuatorial" ? destino : origen;
    const zona = paisesZonas[paisConZona];

    if (!zona) {
      alert(`No hay zona definida para el país: ${paisConZona}`);
      return;
    }

    const tarifa = tarifas.find(row => peso <= row.peso);
    if (!tarifa) {
      alert("No se encontró una tarifa para el peso ingresado.");
      return;
    }

    const precio = tarifa.zonas[zona - 1];

    const precioFormateado = new Intl.NumberFormat("fr-FR", {
      style: "currency", currency: "XAF", minimumFractionDigits: 0
    }).format(precio);

    // Mostrar resultados
    document.getElementById("precioInternacional").textContent = precioFormateado;
    document.getElementById("detallePais").textContent = paisConZona;
    document.getElementById("detalleZona").textContent = "Zona " + zona;
    document.getElementById("detallePeso").textContent = peso + " kg";

    document.getElementById("resultadoInternacional").classList.add("show");
    document.getElementById("resultadoInternacional").scrollIntoView({
      behavior: "smooth", block: "start"
    });
  });
});
</script>



  </body>
</html>
