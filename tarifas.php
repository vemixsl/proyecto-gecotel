<!DOCTYPE html>
<html lang="es" data-i18n="html">
  <head>
    <meta charset="utf-8" />
    <title data-i18n="head.title">GECOTEL Guinea Ecuatorial - Tarifas</title>
    <meta
      name="description"
      content="Consulta nuestras tarifas de servicios postales y paquetería en Guinea Ecuatorial"
    />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
      content="GECOTEL, Correos, Guinea Ecuatorial, tarifas postales"
      name="keywords"
    />
    <meta
      content="Consulta las tarifas de servicios postales y paquetería de GECOTEL"
      name="description"
    />

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
      /* Estilos específicos para la página de tarifas */
      .tarifas-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
          url("img/gecotel_cover.jpg") no-repeat center center;
        background-size: cover;
        padding: 100px 0;
        text-align: center;
        color: white;
      }

      .tarifas-section {
        padding: 70px 0;
      }

      .tarifas-header {
        text-align: center;
        margin-bottom: 50px;
      }

      .tarifas-header h2 {
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
      }

      .tarifas-header h2:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: #ffc107;
      }

      .tarifas-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        overflow: hidden;
      }

      .tarifas-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      }

      .tarifas-card-header {
        background: #ffc107;
        color: white;
        padding: 20px;
        text-align: center;
      }

      .tarifas-card-header h3 {
        font-weight: 700;
        margin: 0;
      }

      .tarifas-card-body {
        padding: 30px;
      }

      .tarifa-precio {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffc107;
        margin-bottom: 20px;
      }

      .tarifa-periodo {
        font-size: 0.9rem;
        color: #777;
      }

      .tarifa-caracteristicas {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
      }

      .tarifa-caracteristicas li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
      }

      .tarifa-caracteristicas li:last-child {
        border-bottom: none;
      }

      .tarifa-caracteristicas li i {
        color: #ffc107;
        margin-right: 10px;
      }

      .tarifa-btn {
        display: block;
        width: 100%;
        padding: 12px;
        background: #ffc107;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
      }

      .tarifa-btn:hover {
        background: #ffc107;
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .servicios-tarifas {
        background-color: #f8f9fa;
        padding: 70px 0;
      }

      .servicio-tarifa-item {
        background: white;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
      }

      .servicio-tarifa-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      }

      .servicio-tarifa-icon {
        font-size: 2.5rem;
        color: #ffc107;
        margin-bottom: 15px;
      }

      .servicio-tarifa-title {
        font-weight: 700;
        margin-bottom: 15px;
        color: #333;
      }

      .servicio-tarifa-price {
        font-size: 1.8rem;
        font-weight: 700;
        color: #ffc107;
        margin-bottom: 15px;
      }

      .servicio-tarifa-desc {
        color: #666;
        margin-bottom: 20px;
      }

      .tabla-tarifas {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      }

      .tabla-tarifas th {
        background: #ffc107;
        color: white;
        padding: 15px;
        text-align: left;
      }

      .tabla-tarifas td {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
      }

      .tabla-tarifas tr:nth-child(even) {
        background-color: #f8f9fa;
      }

      .tabla-tarifas tr:hover {
        background-color: #e9f0ff;
      }

      .destacado {
        background-color: #e6f2ff !important;
        font-weight: 600;
      }

      .nota-tarifas {
        background: #f0f7ff;
        border-left: 4px solid #ffc107;
        padding: 15px;
        margin: 30px 0;
        border-radius: 0 5px 5px 0;
      }

      @media (max-width: 768px) {
        .tarifas-hero h1 {
          font-size: 2.5rem;
        }

        .tarifas-card {
          margin-bottom: 20px;
        }

        .tabla-tarifas {
          font-size: 0.9rem;
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
        <a href="tarifas" class="nav-item nav-link active" data-i18n="nav.tarifas">Tarifas</a>
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


    <!-- Hero Section (Estilo similar al index) -->
    <div class="tarifas-hero">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h1
              class="display-4 text-white mb-4"
              data-i18n="body.tarifas.titulo"
            >
              Tarifas de Servicios
            </h1>
            <p class="lead text-light mb-5" data-i18n="body.tarifas.subtitulo">
              Descubre nuestras tarifas competitivas para todos los servicios
              postales y paquetería
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarifas Principales -->
    <section class="tarifas-section">
      <div class="container">
        <div class="tarifas-header">
          <h6
            class="text-primary text-uppercase font-weight-bold"
            data-i18n="body.tarifas.planes"
          >
            Planes de Servicio
          </h6>
          <h2 class="mb-4" data-i18n="body.tarifas.tituloPlanes">
            Encuentra el plan perfecto para tus necesidades
          </h2>
          <p class="text-muted" data-i18n="body.tarifas.descPlanes">
            Ofrecemos opciones flexibles para envíos nacionales e
            internacionales
          </p>
        </div>

        <div class="row">
          <!-- Plan Básico -->
          <div class="col-md-4">
            <div class="tarifas-card">
              <div class="tarifas-card-header">
                <h3 data-i18n="body.tarifas.planBasico">Ordinario</h3>
              </div>
              <div class="tarifas-card-body">
                <div class="tarifa-precio">5.000 XAF</div>
                <p class="tarifa-periodo" data-i18n="body.tarifas.porEnvio">
                  por envío nacional
                </p>
                <ul class="tarifa-caracteristicas">
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.basico1"
                      >Envíos nacionales estándar</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.basico2"
                      >Entrega en 3-5 días laborables</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.basico3"
                      >Peso máximo: 2 kg</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-times text-secondary"></i>
                    <span data-i18n="body.tarifas.basico4"
                      >Seguimiento detallado</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-times text-secondary"></i>
                    <span data-i18n="body.tarifas.basico5"
                      >Entrega urgente</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-times text-secondary"></i>
                    <span data-i18n="body.tarifas.basico6"
                      >Seguro incluido</span
                    >
                  </li>
                </ul>
                <button class="tarifa-btn" data-i18n="body.tarifas.seleccionar">
                  Seleccionar Plan
                </button>
              </div>
            </div>
          </div>

          <!-- Plan Estándar (Destacado) -->
          <div class="col-md-4">
            <div class="tarifas-card" style="transform: scale(1.05)">
              <div class="tarifas-card-header" style="background: #ffc107">
                <h3 data-i18n="body.tarifas.planEstandar">Certificado</h3>
                <span
                  class="badge badge-warning"
                  data-i18n="body.tarifas.recomendado"
                  >RECOMENDADO</span
                >
              </div>
              <div class="tarifas-card-body">
                <div class="tarifa-precio">12.000 XAF</div>
                <p class="tarifa-periodo" data-i18n="body.tarifas.porEnvio">
                  por envío nacional
                </p>
                <ul class="tarifa-caracteristicas">
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar1"
                      >Envíos nacionales prioritarios</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar2"
                      >Entrega en 1-3 días laborables</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar3"
                      >Peso máximo: 5 kg</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar4"
                      >Seguimiento detallado</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar5"
                      >Entrega urgente disponible</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.estandar6"
                      >Seguro básico incluido</span
                    >
                  </li>
                </ul>
                <button
                  class="tarifa-btn"
                  style="background: #ffc107"
                  data-i18n="body.tarifas.seleccionar"
                >
                  Seleccionar Plan
                </button>
              </div>
            </div>
          </div>

          <!-- Plan Premium -->
          <div class="col-md-4">
            <div class="tarifas-card">
              <div class="tarifas-card-header">
                <h3 data-i18n="body.tarifas.planPremium">EMS</h3>
              </div>
              <div class="tarifas-card-body">
                <div class="tarifa-precio">25.000 XAF</div>
                <p class="tarifa-periodo" data-i18n="body.tarifas.porEnvio">
                  por envío nacional
                </p>
                <ul class="tarifa-caracteristicas">
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium1"
                      >Envíos nacionales express</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium2"
                      >Entrega en 24-48 horas</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium3"
                      >Peso máximo: 10 kg</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium4"
                      >Seguimiento en tiempo real</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium5"
                      >Entrega urgente prioritaria</span
                    >
                  </li>
                  <li>
                    <i class="fas fa-check"></i>
                    <span data-i18n="body.tarifas.premium6"
                      >Seguro completo incluido</span
                    >
                  </li>
                </ul>
                <button class="tarifa-btn" data-i18n="body.tarifas.seleccionar">
                  Seleccionar Plan
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Apartados de Correos Section -->
    <!-- Apartados de Correos -->
<section class="servicios-tarifas">
  <div class="container">
    <div class="tarifas-header">
      <h2>Apartados de Correos</h2>
      <p>Servicios de buzones postales para particulares y empresas</p>
    </div>

    <div style="overflow-x: auto;">
      <table class="tabla-tarifas">
        <thead>
          <tr>
            <th>Concepto</th>
            <th>Tipo de Beneficiario</th>
            <th>Precio (XAF)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">Primera Adjudicación</td>
            <td>Particulares</td>
            <td>1.000</td>
          </tr>
          <tr class="destacado">
            <td>Empresas, Organizaciones Internacionales, Representaciones Diplomáticas, Instituciones Religiosas y Asimilados</td>
            <td>40.000</td>
          </tr>
          <tr>
            <td rowspan="2">Renovación Anual</td>
            <td>Particulares</td>
            <td>10.000</td>
          </tr>
          <tr class="destacado">
            <td>Empresas, Organizaciones Internacionales, Representaciones Diplomáticas, Instituciones Religiosas y Asimilados</td>
            <td>20.000</td>
          </tr>
          <tr>
            <td>Recargo Anual</td>
            <td>Por impago (todos)</td>
            <td>2.000</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="nota-tarifas">
      <p><strong>Nota:</strong> La primera adjudicación se refiere al costo inicial para obtener un apartado postal. La renovación anual debe realizarse cada año para mantener el servicio activo. El recargo se aplica en caso de pagos atrasados.</p>
    </div>
  </div>
</section>

<!-- Entregas de Objetos Postales -->
<section class="servicios-tarifas">
  <div class="container">
    <div class="tarifas-header">
      <h2>Entregas de Objetos Postales</h2>
      <p>Tarifas para la entrega de paquetes y envíos certificados</p>
    </div>

    <div style="overflow-x: auto;">
      <table class="tabla-tarifas">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Precio (XAF)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">Paquetes</td>
            <td>Grandes</td>
            <td>2.000</td>
          </tr>
          <tr>
            <td>Pequeños</td>
            <td>1.000</td>
          </tr>
          <tr class="destacado">
            <td rowspan="2">Certificados</td>
            <td>Grandes</td>
            <td>2.000</td>
          </tr>
          <tr>
            <td>Pequeños</td>
            <td>1.000</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="nota-tarifas">
      <p><strong>Definiciones:</strong> Los paquetes/certificados "Grandes" son aquellos que exceden las dimensiones estándar (30x30x30cm). Los "Pequeños" son aquellos dentro de las dimensiones estándar.</p>
    </div>
  </div>
</section>


    <!-- Tabla de Tarifas Detalladas -->
    <section class="servicios-tarifas">
      <div class="container">

<section class="tarifas-section servicios-tarifas">
  <div class="container">
    <div class="tarifas-header">
      <h2>Tarifas Especiales Nacionales</h2>
      <p>Para personas físicas</p>
    </div>

    <div style="overflow-x: auto;">
      <table class="tabla-tarifas">
        <thead>
          <tr>
            <th>Vía</th>
            <th>Ruta</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2"><strong>Marítima</strong></td>
            <td>Malabo - Bata - Malabo</td>
            <td>700 XAF/Kg</td>
          </tr>
          <tr>
            <td>Malabo - Interior - Malabo</td>
            <td>1700 XAF/Kg</td>
          </tr>
          <tr>
            <td rowspan="2"><strong>Aérea</strong></td>
            <td>Malabo - Bata - Malabo</td>
            <td>2000 XAF/Kg</td>
          </tr>
          <tr>
            <td>Malabo - Interior - Malabo</td>
            <td>3000 XAF/Kg</td>
          </tr>
          <tr>
            <td><strong>Terrestre</strong></td>
            <td>Bata - Interior - Bata</td>
            <td>1000 XAF/Kg</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="tarifas-section servicios-tarifas">
  <div class="container">
    <div class="tarifas-header">
      <h2>Tarifas Especiales Nacionales</h2>
      <p>Para empresas</p>
    </div>

    <div style="overflow-x: auto;">
      <table class="tabla-tarifas">
        <thead>
          <tr>
            <th>Ruta</th>
            <th>Tipo</th>
            <th>Precio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">Malabo - Bata - Malabo</td>
            <td>Sobre</td>
            <td>2.500 XAF/Sobre</td>
          </tr>
          <tr>
            <td>Paquete o Bulto</td>
            <td>2.000 XAF/Kg</td>
          </tr>
          <tr>
            <td>Bata - Interior - Bata<br>Malabo - Región Insular</td>
            <td>Paquetes y Sobres</td>
            <td>1.000 XAF + servicio logístico</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


        <!-- Tabla de tarifas por peso -->
        <div class="mt-5">
          <h4 class="mb-4 text-center" data-i18n="body.tarifas.tablaTitulo">
            Tarifas Nacionales por Peso
          </h4>
          <div class="table-responsive">
            <table class="tabla-tarifas">
              <thead>
                <tr>
                  <th data-i18n="body.tarifas.tablaPeso">Peso (kg)</th>
                  <th data-i18n="body.tarifas.tablaBasico">Ordinario</th>
                  <th data-i18n="body.tarifas.tablaEstandar">Certificado</th>
                  <th data-i18n="body.tarifas.tablaPremium">EMS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0 - 0.5</td>
                  <td>1.500 XAF</td>
                  <td>3.500 XAF</td>
                  <td>6.000 XAF</td>
                </tr>
                <tr>
                  <td>0.5 - 1</td>
                  <td>2.500 XAF</td>
                  <td>4.500 XAF</td>
                  <td>8.000 XAF</td>
                </tr>
                <tr class="destacado">
                  <td>1 - 2</td>
                  <td>3.500 XAF</td>
                  <td>6.000 XAF</td>
                  <td>12.000 XAF</td>
                </tr>
                <tr>
                  <td>2 - 5</td>
                  <td>5.000 XAF</td>
                  <td>8.500 XAF</td>
                  <td>18.000 XAF</td>
                </tr>
                <tr>
                  <td>5 - 10</td>
                  <td>8.000 XAF</td>
                  <td>14.000 XAF</td>
                  <td>25.000 XAF</td>
                </tr>
                <tr>
                  <td>10 - 20</td>
                  <td>12.000 XAF</td>
                  <td>20.000 XAF</td>
                  <td>35.000 XAF</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="nota-tarifas">
            <p>
              <strong data-i18n="body.tarifas.nota">Nota:</strong>
              <span data-i18n="body.tarifas.textoNota"
                >Los precios mostrados son para envíos nacionales. Los envíos
                internacionales tienen tarifas adicionales según el destino. Los
                precios pueden variar según el volumen y dimensiones del
                paquete.</span
              >
            </p>
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
    <script src="/js/main.js"></script>
    <script src="js/i18n.js"></script>
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('show');
        });
        
        // Simple animation for cards
        document.querySelectorAll('.tariff-card, .service-item').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = this.classList.contains('tariff-card') ? 
                    'translateY(-10px)' : 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Button hover effects
        document.querySelectorAll('.tariff-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
  </body>
</html>
