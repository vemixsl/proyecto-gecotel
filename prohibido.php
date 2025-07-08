<!DOCTYPE html>
<html lang="es" data-i18n="html">

<head>
    <meta charset="utf-8">
    <title data-i18n="head.title">GECOTEL Guinea Ecuatorial</title>
    <meta name="description" data-i18n="head.description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/GECOTEL.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Libraria para el cambio de idiomas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        :root {
            --primary: #ff9800;
            --secondary: #ff5722;
            --light: #f4f4f4;
            --dark: #333;
            --success: #4caf50;
            --danger: #f44336;
        }
        @media (min-width: 1200px) {
          .card.prohibido-ampliado {
            grid-column: span 2;
          }
        }


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #e4e7f1);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        h2 {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }

        h3 {
            color: var(--secondary);
            font-size: 1.6rem;
            margin: 35px 0 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .explanation {
            margin: 0 0 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 8px;
            border-left: 4px solid var(--primary);
        }

        .item-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            gap: 12px;
            border: 1px solid #eee;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .card i {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .permitido i {
            color: var(--success);
        }

        .prohibido i {
            color: var(--danger);
        }

        .card strong {
            font-size: 1.1rem;
        }

        .card span {
            color: #555;
            line-height: 1.5;
        }

        footer {
            background: #002b45;
            color: #eee;
            text-align: center;
            padding: 25px;
            border-radius: 20px 20px 0 0;
            margin-top: 30px;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .item-list {
                grid-template-columns: 1fr;
            }
            
            header h1 {
                font-size: 2.2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            h3 {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 480px) {
            section {
                padding: 20px 15px;
            }
            
            header {
                padding: 30px 15px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            h2 {
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

        <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
      <div class="container text-center py-5">
        <h1 class="text-white display-3" data-i18n="prohibido.productos">Productos prohibidos</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="" data-i18n="nav.inicio">Inicio</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0" data-i18n="prohibido.productos1">Prohibidos</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <section>
            <h2><i class="fas fa-box-open"></i><span data-i18n="prohibido.clasificacion">Clasificación de objetos por categoría</span></h2>

            <!-- DOMÉSTICOS -->
            <h3><i class="fas fa-home"></i><span data-i18n="prohibido.domesticos">Artículos domésticos</span></h3>
            <p class="explanation" data-i18n="prohibido.domesticos1">Algunos productos domésticos están prohibidos por contener aerosoles, pinturas inflamables o adhesivos peligrosos.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist1">Chocolates, golosinas, camisas, vestidos</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist1">Pinturas al óleo, barnices para madera, adhesivos</span>
                </div>
            </div>

            <!-- DEPORTIVOS -->
            <h3><i class="fas fa-futbol"></i><span data-i18n="prohibido.deportivos">Artículos deportivos</span></h3>
            <p class="explanation" data-i18n="prohibido.deportivos1">Se prohíben aquellos que contienen gases comprimidos o municiones.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist2">Raquetas, pelotas, zapatos deportivos</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist2">Bicicleta eléctricas</span>
                </div>
            </div>

            <!-- CAMPING -->
            <h3><i class="fas fa-campground"></i><span data-i18n="prohibido.camping">Artículos de camping</span></h3>
            <p class="explanation" data-i18n="prohibido.camping1">Están prohibidos si contienen gas comprimido, cerillas o combustibles inflamables.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist3">Carpas, sacos de dormir</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist3">Encendedores, cerrillas, carbones, liquido para encendedores, generadores pequeños, tanques de propano</span>
                </div>
            </div>

            <!-- BUCEO -->
            <h3><i class="fas fa-swimmer"></i><span data-i18n="prohibido.buceo">Artículos de buceo</span></h3>
            <p class="explanation" data-i18n="prohibido.buceo1">Se prohíben los que incluyen tanques de gas o aire comprimido.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist4">Trajes de buceo, máscara, esnórquel, aletas</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist4">Botellas de aire, tanques de oxígeno</span>
                </div>
            </div>

            <!-- COSMÉTICOS Y MEDICAMENTOS -->
            <h3><i class="fas fa-pump-medical"></i><span data-i18n="prohibido.cosmeticosymedi">Cosméticos y medicamentos</span></h3>
            <p class="explanation" data-i18n="prohibido.cosmeticosymedi1">Algunos contienen alcohol, están embalados en hielo seco o son inflamables.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist5">Jabones, brillo labial, ibuprofeno, antiácidos</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist5">Estupefacientes y sustancias psicotropicas o las demas drogas ilicitas prohibidas en el pais de destino, esmalte, laca, gel de uñas, perfumes, lociones para despues del afeitado</span>
                </div>
            </div>

            <!-- AUTOMÓVILES Y DISPOSITIVOS MÉDICOS -->
            <h3><i class="fas fa-tools"></i><span data-i18n="prohibido.dispositivos">Piezas de automóvil y dispositivos médicos</span></h3>
            <p class="explanation" data-i18n="prohibido.dispositivos1">Pueden contener líquidos inflamables, aditivos o mercurio.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist6">Espejos, fundas de asiento, estetoscopio</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist6">sillas de rueda electrica, aparatos patra medir la presion arterial o termometros que contengan mercurio </span>
                </div>
            </div>

            <!-- VALORES Y BATERÍAS -->
            <h3><i class="fas fa-coins"></i><span data-i18n="prohibido.valores">Objetos de valor, baterías y electrónica</span></h3>
            <p class="explanation" data-i18n="prohibido.valores1">Los objetos de valor están prohibidos por riesgo de robo, y las baterías sueltas por peligro de incendio.</p>
            <div class="item-list">
                <div class="card permitido">
                    <i class="fas fa-check-circle"></i>
                    <strong data-i18n="prohibido.permitidos">Permitidos:</strong>
                    <span data-i18n="prohibido.permitidoslist7">Dispositivos con batería instalada (teléfonos, tablets..), valores al portador declarados.</span>
                </div>
                <div class="card prohibido prohibido-ampliado">
                    <i class="fas fa-ban"></i>
                    <strong data-i18n="prohibido.prohibidos">Prohibidos:</strong>
                    <span data-i18n="prohibido.prohibidoslist7">Baterias de electrólito liquido o de litio, baterías no instaladas, ordenadores con batería externa, baterias que sobre pasan el limite de tamaño/potencia monedas, oro, cheques, joyas</span>
                </div>
            </div>

            <!-- GENERALES -->
            <h3><i class="fas fa-exclamation-triangle"></i><span data-i18n="prohibido.otrospro">Otros objetos prohibidos</span></h3>
            <div class="item-list">
                <div class="card prohibido">
                    <i class="fas fa-bomb"></i>
                    <strong data-i18n="prohibido.explosivos">Explosivos:</strong>
                    <span data-i18n="prohibido.explosivoslist">Petardos, Municiones, polvora, bengalas, fuegos artificiales</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-eye-slash"></i>
                    <strong data-i18n="prohibido.obscenos">Objetos obscenos:</strong>
                    <span data-i18n="prohibido.obscenoslist">Contenido inmoral o prohibido por ley</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-dog"></i>
                    <strong data-i18n="prohibido.animales">Animales vivos:</strong>
                    <span data-i18n="prohibido.animaleslist">No se permiten en envíos</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-fire-extinguisher"></i>
                    <strong data-i18n="prohibido.gases">Gases comprimidos</strong>
                    <span data-i18n="prohibido.gaseslist">Tanques de propano, Gas butano, Extintores de incendios, aerosoles</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-skull-crossbones"></i>
                    <strong data-i18n="prohibido.toxicas">Sustancias tóxicas o infecciosas</strong>
                    <span data-i18n="prohibido.toxicaslist">Plagucidas, productos quimicos agricolas, compuestos de mercurio, Bacterias, virus, Pesticidas, venenos</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-radiation"></i>
                    <strong data-i18n="prohibido.radiactivos">Materiales radiactivos</strong>
                    <span data-i18n="prohibido.radiactivoslist">Desechos radiactivos, fuentes radiactivas, detectores de humo, uranio.</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong data-i18n="prohibido.varias">Mercancias peligrosas varias</strong>
                    <span data-i18n="prohibido.variaslist">Objetos magnetizados, hielo seco</span>
                </div>
                <div class="card prohibido">
                    <i class="fas fa-fire"></i>
                    <strong data-i18n="prohibido.comburentes">Sustancias comburentes</strong>
                    <span data-i18n="prohibido.comburenteslist">productos quimicos para piscinas, peroxido de hidrogeno, blanqueadores</span>
                </div>
            </div>
        </section>
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
                            <a class="text-white mb-2" href="index"><i class="fa fa-angle-right mr-2"></i><span data-i18n="nav.inicio">Inicio</span></a>
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
                <p class="m-0 text-white"  data-i18n="body.footer12">&copy; <a href="#">GECOTEL</a>. todos los derechos reservados. 
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				Dise&nacute;ado por <a href="https://vemixsolutionseg.com/">Vemix</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#" data-i18n="body.footer13">Productos prohibidos</a>
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

    
</body>

</html>