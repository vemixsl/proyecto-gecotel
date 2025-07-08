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
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        :root {
            --primary: #ffc107;
            --primary-light: #e8f0fe;
            --secondary: #5a8f7b;
            --light: #f8f9fa;
            --dark: #34495e;
            --gray: #6c757d;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
        }
        
        .contact-section {
            padding: 4rem 0;
            background: linear-gradient(to bottom, #ffffff 60%, var(--primary-light) 100%);
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
        
        .info-content p, .info-content a {
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
        <a href="sobre-nosotros" class="nav-item nav-link" data-i18n="nav.sobreNosotros">Sobre nosotros</a>
        <a href="tarifas" class="nav-item nav-link" data-i18n="nav.tarifas">Tarifas</a>
        <a href="cotizador" class="nav-item nav-link" data-i18n="nav.cotizador">Cotizador</a>
        <a href="#" class="nav-item nav-link active" data-i18n="nav.contacto">Contacto</a>
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
        <h1 class="text-white display-3" data-i18n="nav.contacto"">Contacto</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="" data-i18n="nav.inicio">Inicio</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0" data-i18n="nav.contacto"">Contacto</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

<!-- Sección de Contacto -->
    <section class="contact-section" id="contacto">
        <div class="container">
            <div class="section-title">
                <h2 data-i18n="contacto.dispo">Disponibilidad 24/7</h2>
                <p data-i18n="contacto.paraf">Estamos aquí para responder todas tus preguntas y brindarte el mejor servicio</p>
            </div>
            
            <div class="row g-4">
                <!-- Mapa -->
                <div class="col-lg-6">
                    <div class="contact-card h-100">
                        <div class="map-header">
                            <i class="fas fa-map-marker-alt me-2"></i>GECOTEL, Malabo
                        </div>
                        <div class="map-frame" id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.234567890123!2d8.7808389!3d3.7547695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10669eef539d346b%3A0x5a75321306f5f1c9!2sGuinea%20Ecuatorial%20de%20Telecomunicaciones%20SA%20(GETESA)!5e0!3m2!1ses!2sgq!4v1234567890123"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>
                
                <!-- Información de contacto -->
                <div class="col-lg-6">
                    <div class="contact-card h-100">
                        <div class="contact-info">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h5 data-i18n="contacto.tel1">Teléfono Región Continental</h5>
                                    <p>+240 222 322094</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h5 data-i18n="contacto.tel">Teléfono Región Insular</h5>
                                    <p>+240 222 322093</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h5 data-i18n="contacto.horario">Horario de atención</h5>
                                    <p data-i18n="contacto.lunes">Lunes a Viernes: 8:30 – 16:00</p>
                                    <p data-i18n="contacto.sabado">Sábados: 9:00 – 13:00</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h5 data-i18n="contacto.correo">Correo Electrónico</h5>
                                    <p>
                                        <a href="mailto:info@gecotel.post">info@gecotel.post</a>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fab fa-facebook"></i>
                                </div>
                                <div class="info-content">
                                    <h5 data-i18n="contacto.redes">Redes Sociales</h5>
                                    <div class="social-links">
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Imagen de localización -->
            <div class="row mt-5">
              <div class="col-12 text-center">
                <img id="mapa-ubicacion" src="img/map-es.jpg" alt="Mapa de ubicaciones GECOTEL" class="img-fluid rounded shadow" style="max-width: 100%; height: auto;">
              </div>
            </div>

        </div>
    </section>

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
              <p><i class="fa fa-envelope mr-2"></i>gecotel@gmail.post</p>
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
                <a class="text-white" href="#" ><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.contacto">Cont&aacute;ctanos</span></a>
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
                href="preguntas"
                data-i18n="body.footer15"
                >Preguntas Frecuentes</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white py-0"
                href="#"
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Efecto de hover para tarjetas de sucursales
      document.querySelectorAll('.branch-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-5px)';
          this.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.15)';
        });
    
        item.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
          this.style.boxShadow = 'none';
        });
      });
    </script>
  </body>
</html>