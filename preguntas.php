<!DOCTYPE html>
<html lang="es" data-i18n="html">
  <head>
    <meta charset="utf-8" />
    <title data-i18n="head.title">
      Preguntas Frecuentes - GECOTEL Guinea Ecuatorial
    </title>
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
      /* Estilos personalizados para la página de FAQ */
      .faq-section {
        padding: 80px 0;
        background: #f8f9fa;
      }

      .faq-header {
        text-align: center;
        margin-bottom: 50px;
      }

      .faq-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #1e293b;
        position: relative;
        display: inline-block;
      }

      .faq-header h1::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, #3a86ff, #8338ec);
        border-radius: 2px;
      }

      .faq-container {
        max-width: 800px;
        margin: 0 auto;
      }

      .faq-item {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
      }

      .faq-item:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-3px);
      }

      .faq-question {
        padding: 20px 25px;
        font-size: 1.1rem;
        font-weight: 600;
        color: #1e293b;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
      }

      .faq-question i {
        transition: transform 0.3s ease;
        color: #3a86ff;
      }

      .faq-item.active .faq-question i {
        transform: rotate(180deg);
      }

      .faq-answer {
        padding: 0 25px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.4s ease;
      }

      .faq-item.active .faq-answer {
        padding: 20px 25px;
        max-height: 500px;
      }

      .faq-answer p {
        color: #495057;
        line-height: 1.7;
        margin-bottom: 15px;
      }

      .faq-answer ul {
        padding-left: 20px;
        margin-bottom: 15px;
      }

      .faq-answer li {
        margin-bottom: 8px;
      }

      .faq-category {
        margin-top: 50px;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 2px solid #3a86ff;
        font-size: 1.5rem;
        font-weight: 600;
        color: #1e293b;
      }

      .faq-support {
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        margin-top: 50px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        text-align: center;
      }

      .faq-support h3 {
        margin-bottom: 20px;
        color: #1e293b;
      }

      .support-icon {
        font-size: 2.5rem;
        color: #3a86ff;
        margin-bottom: 20px;
      }
      .btn-primary:hover{
        color: white !important;
      }
      .btn-primary:active{
        color: white !important;
        background:#c82333 !important;
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


    <!-- Hero Start -->
    <div
      class="jumbotron jumbotron-fluid mb-5"
      style="
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
          url('img/header.jpg') center center;
        background-size: cover;
      ">
      <div class="container text-center py-5">
        <h1 class="text-white display-3 mb-5" data-i18n="faq.heroTitle">
          Preguntas Frecuentes
        </h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0">
            <a class="text-white" href="index.html" data-i18n="nav.inicio"
              >Inicio</a
            >
          </p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0" data-i18n="faq.heroTitle">Preguntas Frecuentes</p>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- FAQ Section Start -->
    <div class="faq-section">
      <div class="container">
        <div class="faq-header">
          <h3
            class="text-secundary text-uppercase font-weight-bold"
            data-i18n="faq.subtitle">
            Respuestas rápidas
          </h3>
          <h1 data-i18n="faq.title"></h1>
          <p class="text-muted" data-i18n="faq.description">
            Encuentra respuestas a las preguntas más comunes sobre nuestros
            servicios de logística y transporte
          </p>
        </div>

        <div class="faq-container">
          <!-- Envío de Paquetes -->
          <h3 class="faq-category" data-i18n="faq.category1">
            Envío de Paquetes
          </h3>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q1">¿Cómo puedo enviar un paquete?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a1p1">
                Enviar un paquete con GECOTEL es sencillo. Sigue estos pasos:
              </p>
              <ol>
                <li data-i18n="faq.a1li1">
                  Empaqueta tu artículo de forma segura en una caja resistente
                </li>
                <li data-i18n="faq.a1li2">
                  Visita cualquiera de nuestras oficinas o solicita una
                  recolección a domicilio
                </li>
                <li data-i18n="faq.a1li3">
                  Proporciona la información del destinatario (nombre completo, dirección, APV 'apartado postal virtual' y teléfono)
                </li>
                <li data-i18n="faq.a1li4">
                  Selecciona el servicio de envío que mejor se adapte a tus
                  necesidades
                </li>
                <li data-i18n="faq.a1li5">
                  Realiza el pago y recibe tu código de seguimiento
                </li>
              </ol>
              <p data-i18n="faq.a1p2">
                También puedes crear un envío desde nuestra plataforma online y
                recibir a nuestro mensajero ya con el paquete listo.
              </p>
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q2"
                >¿Se puede programar una recolección?</span
              >
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a2p1">
                Sí, ofrecemos servicio de recolección a domicilio en todo Guinea
                Ecuatorial. Para programar una recolección:
              </p>
              <ul>
                <li data-i18n="faq.a2li1">
                  Llama a nuestro centro de atención al cliente (+240 222 322
                  093)
                </li>
                <li data-i18n="faq.a2li2">
                  Programa a través de nuestra página web o app móvil
                </li>
                <li data-i18n="faq.a2li3">
                  Visita cualquiera de nuestras oficinas
                </li>
              </ul>
              <p data-i18n="faq.a2p2">
                Las recolecciones se realizan de lunes a sábado en horario de
                8:00 a 18:00. Debes tener el paquete listo con la dirección
                completa del destinatario.
              </p>
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q3">¿Cuánto tarda una entrega?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a3p1">
                El tiempo de entrega depende del servicio seleccionado y del
                destino:
              </p>
              <ul>
                <li data-i18n="faq.a3li1">
                  <strong>Envío estándar nacional:</strong> 1-3 días hábiles
                </li>
                <li data-i18n="faq.a3li2">
                  <strong>Envío express nacional:</strong> 24 horas
                </li>
                <li data-i18n="faq.a3li3">
                  <strong>Envío internacional estándar:</strong> 5-10 días
                  hábiles
                </li>
                <li data-i18n="faq.a3li4">
                  <strong>Envío internacional express:</strong> 2-4 días hábiles
                </li>
              </ul>
              <p data-i18n="faq.a3p2">
                Los tiempos pueden variar en función de factores como
                condiciones climáticas, aduanas o eventos imprevistos. Siempre
                puedes rastrear tu envío en tiempo real a través de nuestro
                sitio web.
              </p>
            </div>
          </div>

          <!-- Restricciones -->
          <h3 class="faq-category" data-i18n="faq.category2">
            Restricciones y Políticas
          </h3>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q4"
                >¿Qué objetos están prohibidos para enviar?</span
              >
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a4p1">
                Por razones de seguridad, no aceptamos los siguientes artículos:
              </p>
              <ul>
                <li data-i18n="faq.a4li1">
                  Materiales inflamables o explosivos
                </li>
                <li data-i18n="faq.a4li2">
                  Armas de cualquier tipo (incluyendo réplicas)
                </li>
                <li data-i18n="faq.a4li3">
                  Drogas ilícitas o sustancias controladas
                </li>
                <li data-i18n="faq.a4li4">
                  Dinero en efectivo, cheques o valores negociables
                </li>
                <li data-i18n="faq.a4li5">Animales vivos</li>
                <li data-i18n="faq.a4li6">
                  Productos perecederos sin empaque especial
                </li>
                <li data-i18n="faq.a4li7">Material pornográfico</li>
                <li data-i18n="faq.a4li8">Baterías de litio sueltas</li>
              </ul>
              <p data-i18n="faq.a4p2">
                Para envíos internacionales, consulta las restricciones
                específicas del país de destino. El incumplimiento de estas
                políticas puede resultar en la retención o destrucción del
                paquete y posibles acciones legales.
              </p>
            </div>
          </div>

          <!-- Problemas con Envíos -->
          <h3 class="faq-category" data-i18n="faq.category3">
            Solución de Problemas
          </h3>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q5"
                >¿Qué debo hacer si se pierde un envío?</span
              >
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a5p1">
                En GECOTEL, nos tomamos muy en serio la seguridad de tus envíos.
                Si crees que tu paquete se ha perdido:
              </p>
              <ol>
                <li data-i18n="faq.a5li1">
                  Verifica el estado de tu envío con tu código de seguimiento
                </li>
                <li data-i18n="faq.a5li2">
                  Si ha pasado el tiempo estimado de entrega, contacta a nuestro
                  servicio al cliente
                </li>
                <li data-i18n="faq.a5li3">
                  Proporciona tu número de seguimiento y detalles del envío
                </li>
                <li data-i18n="faq.a5li4">
                  Iniciamos una investigación interna que puede tardar hasta 7
                  días hábiles
                </li>
                <li data-i18n="faq.a5li5">
                  Te mantendremos informado durante todo el proceso
                </li>
              </ol>
              <p data-i18n="faq.a5p2">
                Si confirmamos la pérdida del paquete, procederemos con la
                compensación según nuestros términos y condiciones. Todos
                nuestros envíos están asegurados contra pérdida o daño.
              </p>
            </div>
          </div>

          <!-- Pagos -->
          <h3 class="faq-category" data-i18n="faq.category4">
            Pagos y Facturación
          </h3>

          <div class="faq-item">
            <div class="faq-question">
              <span data-i18n="faq.q6">¿Qué métodos de pago se aceptan?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p data-i18n="faq.a6p1">
                Aceptamos diversos métodos de pago para tu comodidad:
              </p>
              <ul>
                <li data-i18n="faq.a6li1">
                  <strong>Efectivo:</strong> En todas nuestras oficinas
                </li>
                <li data-i18n="faq.a6li2">
                  <strong>Tarjetas de crédito/débito:</strong> Visa, Mastercard,
                  American Express
                </li>
                <li data-i18n="faq.a6li3">
                  <strong>Transferencias bancarias:</strong> A través de nuestra
                  plataforma
                </li>
                <li data-i18n="faq.a6li4">
                  <strong>Billeteras digitales:</strong> GECOTEL Money, Muni
                  Dinero
                </li>
                <li data-i18n="faq.a6li5">
                  <strong>Pago móvil:</strong> A través de nuestra aplicación
                </li>
              </ul>
              <p data-i18n="faq.a6p2">
                Para clientes corporativos, ofrecemos facilidades de pago a
                crédito con aprobación previa. Todos los precios incluyen IVA y
                se muestran antes de confirmar el envío.
              </p>
            </div>
          </div>

          <!-- Soporte adicional -->
          <div class="faq-support">
            <div class="support-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h3 data-i18n="faq.supportTitle">¿No encontraste tu respuesta?</h3>
            <p class="mb-4" data-i18n="faq.supportText">
              Nuestro equipo de soporte está disponible para ayudarte con
              cualquier consulta adicional que puedas tener.
            </p>
            <a
              href="contacto"
              class="btn btn-primary"
              data-i18n="contacto.contactButton"
              >Contáctanos</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- FAQ Section End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5 gray-foot">
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
                href="#"
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
      // Script para el acordeón de FAQ
      document.addEventListener("DOMContentLoaded", function () {
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach((item) => {
          const question = item.querySelector(".faq-question");

          question.addEventListener("click", () => {
            // Cerrar otros items abiertos
            faqItems.forEach((otherItem) => {
              if (
                otherItem !== item &&
                otherItem.classList.contains("active")
              ) {
                otherItem.classList.remove("active");
              }
            });

            // Abrir/cerrar el item actual
            item.classList.toggle("active");
          });
        });
      });
    </script>
  </body>
</html>
