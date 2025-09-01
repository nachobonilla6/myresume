<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página de presentación profesional de Ignacio Bonilla">
    <meta name="author" content="Ignacio Bonilla">
    <title>Ignacio Bonilla | Página de Inicio</title>
    <!-- iconos de fuente -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- estilos principales de Bootstrap + JohnDoe -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="inicio">
    <a href="https://wa.me/50689681451" target="_blank" class="whatsapp-float" data-spy="affix" data-offset-top="200">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-img">
    </a>

    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="https://www.instagram.com/nachobonilla6/" target="_blank"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://www.linkedin.com/in/nachobonilla6/" target="_blank"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://www.upwork.com/freelancers/~01c0cb4dcea03b7cf8?viewMode=1" target="_blank" title="Upwork"><i class="ti-package" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://github.com/nachobonilla6" target="_blank"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle">Hola, soy</h4>
                <h1 class="header-title">Ignacio Bonilla</h1>
                <h6 class="header-mono">Diseñador Web | Traductor ING-ESP | Profesor de Español</h6>
                <a href="{{ asset('cv.pdf') }}" target="_blank" class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Ver Currículum</a>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Currículum</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="yo.png" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Ignacio Bonilla</h5>
                        <div class="brand-subtitle">Diseñador Web | Traductor EN-ES | Profesor de Español</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#service" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item last-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-world"></i> ES
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                                <a class="dropdown-item " href="/">English</a>
                                <a class="dropdown-item active" href="#">Español</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">¿Quién soy?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Diseñador Web | Traductor Profesional (EN-ES) | Profesor de Español</h5>
                <p class="mt-20">Ofrezco servicios profesionales en tres áreas clave: <strong>Diseño y Desarrollo Web</strong> para crear sitios web impresionantes y funcionales, <strong>Traducción Profesional (EN-ES)</strong> para documentos precisos y adaptados culturalmente, y <strong>Enseñanza del Idioma Español</strong> con lecciones personalizadas para todos los niveles. ¡Trabajemos juntos para dar vida a tus proyectos digitales, romper barreras lingüísticas o dominar el idioma español!</p>
                <a href="{{ route('download.cv') }}" class="btn btn-outline-danger"><i class="icon-down-circled2"></i>Descargar Mi CV</a>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Correo</span> : nachobonilla6@gmail.com</li>
                    <li><span>Teléfono</span> : +506 8968-1451</li>
                    <li><span>Skype</span> : nachobonilla6</li>
                    <li><span>Ubicación</span> : Playa Jacó, Costa Rica</li>
                </ul>
                <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="https://www.instagram.com/nachobonilla6/" target="_blank"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="https://www.linkedin.com/in/nachobonilla6/" target="_blank"><i class="ti-linkedin" aria-hidden="true"></i></a></li>


                    <li class="social-item"><a class="social-link" href="https://www.upwork.com/freelancers/~01c0cb4dcea03b7cf8?viewMode=1" target="_blank" title="Upwork"><i class="ti-package" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="https://github.com/nachobonilla6" target="_blank"><i class="ti-github" aria-hidden="true"></i></a></li>

                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Mis Habilidades</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-palette icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Diseño Web</h6>
                        <p class="subtitle">Creación de sitios web hermosos y responsivos con principios de diseño modernos.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-comments-smiley icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Traducción</h6>
                        <p class="subtitle">Traducciones profesionales EN-ES con adaptación cultural.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-book icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Enseñanza de Español</h6>
                        <p class="subtitle">Clases de español personalizadas para todos los niveles de dominio.</p>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">Mi</span> Currículum</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Experiencia</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2020 - Presente</h6>
                            <P>Traductor Independiente (EN-ES)</P>
                            <P class="subtitle">Especializado en traducción de documentos, localización de sitios web y adaptación cultural. Proporcionando traducciones precisas y culturalmente apropiadas para diversas industrias, incluyendo contenido legal, técnico y educativo.</P>
                            <hr>
                            <h6 class="title text-danger">2022 - Presente</h6>
                            <P>Instructor de Idiomas (Español e Inglés)</P>
                            <P class="subtitle">Impartiendo clases de idiomas personalizadas tanto presenciales como en línea. Enseñando español a hablantes de inglés e inglés a hablantes de español, con planes de lecciones personalizados adaptados a los objetivos de aprendizaje y niveles de competencia individuales. Especializado en práctica conversacional, gramática e inmersión cultural.</P>
                            <hr>
                            <h6 class="title text-danger">2018 - 2025</h6>
                            <P>Representante Bilingüe de Cobranza</P>
                            <P class="subtitle">Gestioné cuentas por cobrar y cobranzas tanto en inglés como en español, negociando acuerdos de pago y resolviendo consultas de facturación. Brindé un servicio al cliente excepcional manteniendo el profesionalismo en discusiones financieras delicadas con los clientes.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Educación</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2024 - 2025</h6>
                            <P>Curso Técnico en Diseño y Desarrollo Web</P>
                            <P class="subtitle">Completé un programa técnico en la Universidad Fidelitas, enfocado en diseño web, desarrollo front-end y creación de sitios web responsivos utilizando tecnologías modernas.</P>
                            <hr>
                            <h6 class="title text-danger">2022 - 2023</h6>
                            <P>Técnico en Enseñanza del Español como Segunda Lengua</P>
                            <P class="subtitle">Completé un programa técnico en el Tecnológico de Costa Rica (TEC), especializándome en metodologías de enseñanza, fundamentos lingüísticos y aspectos culturales de la instrucción del español para hablantes no nativos.</P>
                            <hr>
                            <h6 class="title text-danger">2019 - 2020</h6>
                            <P>Certificación TESOL (120 horas)</P>
                            <P class="subtitle">Formación intensiva en la Enseñanza del Inglés para Hablantes de Otros Idiomas, enfocada en la enseñanza comunicativa del idioma, planificación de lecciones y gestión del aula. Desarrollé habilidades para crear actividades atractivas, evaluar el dominio del idioma y adaptar métodos de enseñanza para diversos estilos de aprendizaje y orígenes culturales.</P>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Habilidades</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>Traducción Inglés-Español</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Enseñanza de Español e Inglés</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>HTML5 & CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Laravel</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Idiomas</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                           <h6>Español (Nativo)</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Inglés (Fluido)</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Mandarín</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Portugués</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">1000+</h1>
                            <p class="text-light mb-1">Horas Trabajadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">120</h1>
                            <p class="text-light mb-1">Proyectos Completados</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">55+</h1>
                            <p class="text-light mb-1">Clientes Satisfechos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">2K+</h1>
                            <p class="text-light mb-1">Tazas de Café</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">Mis</span> Servicios</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Traducción Profesional</h5>
                            <P class="subtitle">Traducciones precisas y culturalmente adaptadas de inglés a español para documentos, sitios web y contenido multimedia. Especializado en traducciones legales, técnicas y educativas con tiempos de entrega rápidos y atención a los matices lingüísticos que marcan la diferencia en tus comunicaciones internacionales.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Enseñanza de Idiomas</h5>
                            <P class="subtitle">Clases personalizadas de español e inglés adaptadas a tu estilo de aprendizaje y objetivos. Ya seas principiante o avanzado, ofrezco instrucción práctica y atractiva centrada en la conversación, gramática y comprensión cultural para ayudarte a alcanzar fluidez y confianza en tu idioma objetivo.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Desarrollo Web</h5>
                            <P class="subtitle">Desarrollo de sitios web modernos y responsivos utilizando las últimas tecnologías. Creo experiencias digitales rápidas y seguras que incluyen Páginas de Destino, Sitios Web Empresariales, Comercio Electrónico y Sistemas de Inventario. Desde una simple presencia en línea hasta aplicaciones complejas, te ayudaré a establecer una sólida huella digital y alcanzar tus objetivos comerciales.</P>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </section>

    <section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Servicios</span> </h1>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Traducción Básica</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">0.08</span>
                            <span class="date">por palabra</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">Documentos <span class="text-muted">Generales</span></li>
                            <li class="list-item">Tiempo de entrega <span class="text-muted">Estándar</span></li>
                            <li class="list-item">Hasta <span class="text-muted">1000 palabras</span></li>
                            <li class="list-item">Formato <span class="text-muted">Básico</span></li>
                        </ul>
                        <a href="#contact">
                            <button class="btn btn-primary btn-rounded w-lg">Cotizar</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Traducción Profesional</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">0.06</span>
                            <span class="date">por palabra</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">Hasta <span class="text-muted">5000 palabras</span></li>
                            <li class="list-item">Entrega <span class="text-muted">Más Rápida</span></li>
                            <li class="list-item">Técnicos y <span class="text-muted">Empresariales</span></li>
                            <li class="list-item">Formato <span class="text-muted">Incluido</span></li>
                        </ul>
                        <a href="#contact">
                            <button class="btn btn-primary btn-rounded w-lg">Cotizar</button>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Clases de Idiomas</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">30</span>
                            <span class="date">por hora</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">Español <span class="text-muted">e Inglés</span></li>
                            <li class="list-item">Todos los <span class="text-muted">Niveles</span></li>
                            <li class="list-item">Lecciones <span class="text-muted">Personalizadas</span></li>
                            <li class="list-item">Horario <span class="text-muted">Flexible</span></li>
                        </ul>
                        <a href="#contact">
                            <button class="btn btn-primary btn-rounded w-lg">Cotizar</button>
                        </a>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3">
    <div class="price-card text-center mb-4">
        <h3 class="price-card-title">Diseño Web</h3>
        <div class="price-card-cost">
            <sup class="ti-money"></sup>
            <span class="num">100</span>
            <span class="date">desde</span>
        </div>
        <ul class="list">
            <li class="list-item">Página de <span class="text-muted">Destino</span></li>
            <li class="list-item">Sitio Web <span class="text-muted">Empresarial</span></li>
            <li class="list-item">Tienda <span class="text-muted">En Línea</span></li>
            <li class="list-item">Sistema de <span class="text-muted">Inventario</span></li>
            <li class="list-item">Hosting <span class="text-muted">Incluido</span></li>
        </ul>
        <a href="#contact">
            <button class="btn btn-primary btn-rounded w-lg">Cotizar</button>
        </a>
        </div>
</div>
            </div>
        </div>
    </section>
    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">Disponible para Trabajo Freelance</h2>
            <a href="#contact" class="btn bg-primary w-lg">Contrátame</a>
        </div>
    </section>

    <!-- Sección de Portafolio -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Mi</span> Portafolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        Nuevo
                    </a>
                    <a href="#" data-filter=".advertising">
                        Web
                    </a>
                    <a href="#" data-filter=".branding">
                        Clases
                    </a>
                    <a href="#" data-filter=".web">
                        Traducción
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Portafolio de diseño web">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Diseño web profesional y responsivo</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Portafolio de desarrollo web">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Soluciones digitales a medida</p>
                                </div>
                            </div> 
                        </div>                         
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>    
                        </div>              
                    </div> 
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>

                    <div class="col-md-6 col-lg-4 advertising"> 
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                           <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                           <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 advertising new"> 
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                                
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                    
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                      
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->

   

    <div class="section contact" id="contact">
        <div class="map-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m16!1m10!1m3!1d5934!2d-84.623847!3d9.5799923!2m1!2f38.35!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x8fa1c76ab9610c83%3A0x1bf37effa58fddf6!2sProvincia%20de%20Puntarenas%2C%20Jac%C3%B3!5e1!3m2!1ses-419!2scr!4v1755982539880!5m2!1ses-419!2scr" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Envíame un mensaje</h4>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <input name="name" class="form-control" type="text" placeholder="Nombre *" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <input name="email" class="form-control" type="email" placeholder="Correo electrónico *" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Mensaje *" rows="7" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Contacto</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Teléfono:<br> <span class="text-muted">+506 8968-1451</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Ubicación:<br> <span class="text-muted">Jaco Beach, Costa Rica</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-email icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Correo:<br> <a href="mailto:nachobonilla6@gmail.com" class="text-muted">nachobonilla6@gmail.com</a></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="https://www.instagram.com/nachobonilla6/" target="_blank"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="https://www.linkedin.com/in/nachobonilla6/" target="_blank"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="https://www.upwork.com/freelancers/~01c0cb4dcea03b7cf8?viewMode=1" target="_blank" title="Upwork"><i class="ti-package" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="https://github.com/nachobonilla6" target="_blank"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Ignacio Bonilla. Todos los derechos reservados.
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: '¡Mensaje Enviado!',
                text: '{{ session('success') }}',
                confirmButtonText: 'Aceptar',
                timer: 5000,
                timerProgressBar: true,
                background: '#1f1f1f',
                color: '#fff',
                confirmButtonColor: '#dc3545'
            });
        @endif

        @if($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: 'Aceptar',
                background: '#1f1f1f',
                color: '#fff',
                confirmButtonColor: '#dc3545'
            });
        @endif
    </script>
</body>
</html>
