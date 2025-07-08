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
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
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

    /* Calculator Styles */
    .calculator-card {
      background: white;
      border-radius: 16px;
      box-shadow: var(--card-shadow);
      overflow: hidden;
      margin-bottom: 40px;
      transition: var(--transition);
    }
    #cotizadorInternacional select.form-control {
      appearance: auto;
      background-position: right 1rem center;
    }


    .calculator-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    .calculator-card{
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .card-header {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      padding: 20px 30px;
    }

    .card-header h2 {
      font-size: 1.6rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 0;
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
      -webkit-background-clip: text;
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

    /* Responsive Design */
    @media (max-width: 992px) {
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

    @media (max-width: 768px) {
      .service-options {
        grid-template-columns: 1fr;
      }

      .card-body {
        padding: 20px;
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
    }

    /* Estilo para mensajes de error */
    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: fadeIn 0.3s ease-out;
    }

    .alert-danger i {
        font-size: 1.2rem;
        color: #dc3545;
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
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5"
      >
        <a href="index" class="navbar-brand ml-lg-3">
          <h1 class="m-0 display-5 text-uppercase text-primary">
            <img class="imagen" src="img/GECOTEL.png" alt="" />
          </h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between px-lg-3"
          id="navbarCollapse"
        >
          <div class="navbar-nav m-auto py-0">
            <a
              href="index"
              class="nav-item nav-link"
              data-i18n="nav.inicio"
              >Inicio</a
            >
            <a
              href="servicios"
              class="nav-item nav-link"
              data-i18n="nav.servicio"
              >Servicios</a
            >
            <a
              href="../Tienda_Gecotel/tienda.php"
              class="nav-item nav-link"
              data-i18n="nav.tienda"
              >Tienda</a
            >
            <a
              href="sobre-nosotros"
              class="nav-item nav-link"
              data-i18n="nav.sobreNosotros"
              >Sobre nosotros</a
            >
            <a
              href="tarifas"
              class="nav-item nav-link"
              data-i18n="nav.tarifas"
              >Tarifas</a
            >
            <a
              href="#"
              class="nav-item nav-link active"
              data-i18n="nav.cotizador"
              >Cotizador</a
            >
            <a
              href="contacto"
              class="nav-item nav-link"
              data-i18n="nav.contacto"
              >Contacto</a
            >
          </div>
          <nav class="navbar navbar-expand-lg">
            <div class="nav-item dropdown dropdown-editar">
              <a
                href=""
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                data-i18n="nav.seguimiento"
                >Seguimiento</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <input
                  type="text"
                  class="form-control dropdown-editar-sub1"
                  data-i18n="nav.placeholder"
                  placeholder=" c&oacute;digo "
                />
                <button
                  class="btn btn-primary px-3 dropdown-editar-sub2"
                  data-i18n="nav.rastrear"
                >
                  Rastrear
                </button>
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
<div class="container" style="margin-top: 30px; text-align: center;">
  <button id="btnNacional" class="calculate-btn" style="width: 200px; display: inline-block; margin: 10px;">
    Cotizador Nacional
  </button>
  <button id="btnInternacional" class="calculate-btn" style="width: 200px; display: inline-block; margin: 10px;">
    Cotizador Internacional
  </button>
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
      <div class="card-header">
        <h2>
          <i class="fas fa-calculator"></i> Detalles del Envío
        </h2>
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

        <!-- Sección Dimensiones y Peso (oculto para sobres) -->
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
          
          <!-- Cantidad de sobres (solo visible para sobres) -->
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

        <!-- Sección Medio de Transporte (solo para personas físicas) -->
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


<div class="calculator-card hidden" id="cotizadorInternacional">
  <div class="card-header">
    <h2><i class="fas fa-globe"></i> Envío Internacional</h2>
  </div>
  <div class="card-body">
    <div class="form-grid">
        <!-- País origen -->
      <div class="form-section">
        <div class="form-section-title">
          <i class="fas fa-flag-checkered"></i> País de origen
        </div>
        <div class="form-group">
          <div class="input-with-icon">
            <i class="fas fa-globe-europe"></i>
            <select class="form-control" id="paisOrigen">
              <option value="">Seleccione un país</option>
                <!-- Se llenará dinámicamente -->
            </select>
          </div>
        </div>
      </div>
      <!-- País destino -->
      <div class="form-section">
        <div class="form-section-title">
          <i class="fas fa-flag"></i> País de destino
        </div>
        <div class="form-group">
          <div class="input-with-icon">
            <i class="fas fa-globe-americas"></i>
            <select class="form-control" id="paisDestino">
              <option value="">Seleccione un país</option>
              <!-- Se llenará dinámicamente -->
            </select>
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
    <script src="js/cotizador-internacional.js"></script>
    <script src="js/cotizador-nacional.js"></script>
    <script src="js/i18n.js"></script>
    <script>
     // Mostrar/ocultar cotizadores
      document.getElementById("btnNacional").addEventListener("click", () => {
      document.getElementById("cotizadorNacional").style.display = "block";
      document.getElementById("cotizadorInternacional").style.display = "none";
      });

      document.getElementById("btnInternacional").addEventListener("click", () => {
      document.getElementById("cotizadorNacional").style.display = "none";
      document.getElementById("cotizadorInternacional").style.display = "block";
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function(){
        // Seleccionamos los contendedores y las opciones
        var dimensionsSection = document.getElementById("dimensionsSection");

        var serviceOptions = document.querySelectorAll(".service-option");

        // Función que controla que aparezcan o sean ocultados según el embalaje
        function updateVisibility(){
          var selected = document.querySelector(".service-option.selected");

          if (selected && selected.dataset.type === "sobre") {
            dimensionsSection.style.display = "none";
          } else {
            dimensionsSection.style.display = "block";
          }
        }

        // Primero se verifica el estado actual
        updateVisibility();

        // Después se añade el event listener para que el cambio se refleje
        serviceOptions.forEach(function(el){
          el.addEventListener("click",function(){
            serviceOptions.forEach(function(el){el.classList.remove("selected")});
            this.classList.add("selected");

            updateVisibility();
          });
        });
      });
    </script>
  </body>
</html>
