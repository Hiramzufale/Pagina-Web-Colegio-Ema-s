
<?php /* =========================
   FILE: primaria.php
   ========================= */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Primaria | Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Primaria en Colegio Emaús Hermosillo: hábitos de estudio, pensamiento crítico y valores para la vida." name="description" />
  <meta content="primaria, escuela, hermosillo, colegio emaús" name="keywords" />
  <link href="img/favicon.ico" rel="icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root{ --bs-primary:#0d21fd; --bs-secondary:#1c33c7; --bs-dark:#181d38; --bs-light:#f8f9fa; }
    .navbar-brand img{height:44px;width:auto}
    .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link:hover{color:var(--bs-primary)}
    .section-title{border-left:6px solid var(--bs-primary);padding-left:.5rem;border-radius:2px}
    .btn-primary{background-color:var(--bs-primary);border-color:var(--bs-primary)}
    .btn-primary:hover{background-color:var(--bs-secondary);border-color:var(--bs-secondary)}
    .header-overlay{background: rgba(24,29,56,.65);} 
  </style>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width:3rem;height:3rem" role="status"><span class="sr-only">Cargando...</span></div>
  </div>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <!-- Usa tu archivo del logo en img/logo-emaus.png o .svg -->
      <img src="img/logo-emaus.png.png" alt="Colegio Emaús" class="me-2"/>
      <h5 class="m-0 text-blue">Colegio Emaús</h5>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">Inicio</a>
        <a href="about.php" class="nav-item nav-link">Nosotros</a>
        <a href="educristiana.php" class="nav-item nav-link">Educación Cristiana</a>
                <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Oferta Educativa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="kinder.php" class="dropdown-item">Kinder</a>
            <a href="primaria.php" class="dropdown-item">Primaria</a>
            <a href="secundaria.php" class="dropdown-item">Secundaria</a>
            <a href="preparatoria.php" class="dropdown-item">Preparatoria</a>
</div>
          </div>
       
        <a href="contacto.php" class="nav-item nav-link">Contacto</a>
      </div>
      <a href="inscripciones.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscripciones<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- Hero -->
  <div class="container-fluid p-0 mb-5">
    <div class="position-relative">
      <img class="img-fluid w-100" src="img/primaria.jpg" alt="Primaria Emaús" />
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
        <div class="container"><div class="row justify-content-start"><div class="col-sm-10 col-lg-8">
          <h5 class="text-primary text-uppercase mb-3">Primaria</h5>
          <h1 class="display-5 text-white">Hábitos, pensamiento crítico y valores</h1>
          <p class="fs-5 text-white mb-4">Acompañamos el aprendizaje con proyectos, lectura, matemática y ciencias de forma integral.</p>
          <a href="#areas" class="btn btn-primary py-md-3 px-md-5 me-3">Áreas</a>
          <a href="#requisitos" class="btn btn-light py-md-3 px-md-5">Requisitos</a>
        </div></div></div>
      </div>
    </div>
  </div>

  <!-- Áreas -->
  <div id="areas" class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-book text-primary mb-3"></i>
            <h5>Comunicación</h5>
            <p>Comprensión lectora, redacción y expresión oral.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-calculator text-primary mb-3"></i>
            <h5>Matemáticas</h5>
            <p>Razonamiento, resolución de problemas y pensamiento lógico.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-flask text-primary mb-3"></i>
            <h5>Ciencias</h5>
            <p>Exploración del entorno, método científico y cuidado del medio ambiente.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-desktop text-primary mb-3"></i>
            <h5>Tecnología</h5>
            <p>Herramientas digitales para investigar y crear.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-futbol text-primary mb-3"></i>
            <h5>Arte y Deporte</h5>
            <p>Expresión artística, música y actividad física.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-heart text-primary mb-3"></i>
            <h5>Valores</h5>
            <p>Respeto, responsabilidad, solidaridad y trabajo en equipo.</p>
          </div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabla grados -->
  <div class="container-xxl py-5 bg-light">
    <div class="container">
      <h4 class="mb-3">Grados</h4>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>Grado</th><th>Objetivo formativo principal</th></tr></thead>
          <tbody>
            <tr><td>1°</td><td>Consolidación de lectoescritura y operaciones básicas.</td></tr>
            <tr><td>2°</td><td>Comprensión lectora, pensamiento numérico y convivencia.</td></tr>
            <tr><td>3°</td><td>Resolución de problemas y exploración científica.</td></tr>
            <tr><td>4°</td><td>Investigación guiada y redacción de textos.</td></tr>
            <tr><td>5°</td><td>Proyectos interdisciplinarios y trabajo colaborativo.</td></tr>
            <tr><td>6°</td><td>Preparación para secundaria: autonomía y estudio.</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Requisitos -->
  <div id="requisitos" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-start">
        <div class="col-lg-7">
          <h6 class="section-title bg-white text-start text-primary pe-3">Inscripciones</h6>
          <h2 class="mb-3">Requisitos para Primaria</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa fa-file text-primary me-2"></i>Acta de nacimiento y CURP</li>
            <li class="list-group-item"><i class="fa fa-file-signature text-primary me-2"></i>Boleta del grado anterior (si aplica)</li>
            <li class="list-group-item"><i class="fa fa-user-shield text-primary me-2"></i>Identificación del padre/madre o tutor</li>
            <li class="list-group-item"><i class="fa fa-home text-primary me-2"></i>Comprobante de domicilio</li>
          </ul>
          <a href="inscripciones.php" class="btn btn-primary mt-4">Iniciar inscripción</a>
        </div>
        <div class="col-lg-5">
          <div class="accordion" id="faqPrimaria">
            <div class="accordion-item"><h2 class="accordion-header" id="p1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pa1">¿Hay actividades extraescolares?</button></h2><div id="pa1" class="accordion-collapse collapse show" data-bs-parent="#faqPrimaria"><div class="accordion-body">Se ofrecen talleres y clubes según disponibilidad de cada ciclo (artes, deportes, tecnología, etc.).</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="p2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pa2">¿Uso de plataformas?</button></h2><div id="pa2" class="accordion-collapse collapse" data-bs-parent="#faqPrimaria"><div class="accordion-body">Se emplean recursos y herramientas digitales de apoyo al aprendizaje conforme a la edad.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="p3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pa3">¿Evaluación?</button></h2><div id="pa3" class="accordion-collapse collapse" data-bs-parent="#faqPrimaria"><div class="accordion-body">La evaluación es formativa y sumativa, enfocada en el proceso y resultados del alumno.</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Lista de Útiles Primaria -->
<div id="utiles-primaria" class="container-xxl py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h6 class="section-title bg-white text-center text-primary px-3">Lista</h6>
      <h2>Útiles Escolares 2025–2026</h2>
      <p class="text-muted mb-0">Primaria (1° a 6°)</p>
    </div>

    <!-- Tabs -->
  <ul class="nav nav-pills justify-content-center mb-4" id="pillsPrimaria" role="tablist">
  <li class="nav-item">
    <button class="nav-link active" id="p1" data-bs-toggle="pill" data-bs-target="#grado1" type="button" role="tab">1er Grado</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="p2" data-bs-toggle="pill" data-bs-target="#grado2" type="button" role="tab">2do Grado</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="p3" data-bs-toggle="pill" data-bs-target="#grado3" type="button" role="tab">3er Grado</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="p4" data-bs-toggle="pill" data-bs-target="#grado4" type="button" role="tab">4to Grado</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="p5" data-bs-toggle="pill" data-bs-target="#grado5" type="button" role="tab">5to Grado</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="p6" data-bs-toggle="pill" data-bs-target="#grado6" type="button" role="tab">6to Grado</button>
  </li>
</ul>


    <div class="tab-content" id="pillsPrimariaContent">
      
      <!-- 1° -->
      <div class="tab-pane fade show active" id="grado1">
        <div class="accordion" id="acc1">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c1">Útiles escolares</button></h2>
            <div id="c1" class="accordion-collapse collapse show" data-bs-parent="#acc1">
              <div class="accordion-body">
                <ul>
                  <li>3 cuadernos forma italiana cosidos doble raya (amarillo, rojo, verde)</li>
                  <li>1 cuaderno forma italiana cuadriculado C7 azul rey</li>
                  <li>1 cuaderno profesional cosido blanco naranja (artística)</li>
                  <li>2 cuadernos profesionales resorte rayas (morado y azul cielo)</li>
                  <li>3 hojas para enmicar, block de construcción, 40 blancas, 20 de color, 2 cartulinas</li>
                  <li>12 lápices triangulares No.2, 5 rojos, 2 sacapuntas, 2 borradores</li>
                  <li>4 pegamentos de barra, 1 líquido, 4 silicones</li>
                  <li>1 pincel No.8 y 1 delgado, acuarelas Pelikan, tijeras sin punta</li>
                  <li>Colores de palo, marcadores, caja de plástico y lapicera de tela</li>
                </ul>
                <p class="text-muted"><strong>Nota:</strong> Todo debe traer nombre, incluso colores y marcadores.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2° -->
      <div class="tab-pane fade" id="grado2">
        <div class="accordion" id="acc2">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c2">Útiles escolares</button></h2>
            <div id="c2" class="accordion-collapse collapse show" data-bs-parent="#acc2">
              <div class="accordion-body">
                <ul>
                  <li>Cuadernos: rosa (actividades), azul rey (matemáticas), amarillo (tareas), verde (ética y humano), azul cielo (cristiana), rojo (lenguajes), morado (inglés), naranja (artística)</li>
                  <li>2 blocks construcción, diccionario Larousse y español-inglés</li>
                  <li>5 foami diamantados y 5 de colores</li>
                  <li>24 colores de madera, 5 folders amarillos, 1 folder oficio</li>
                  <li>Tijeras, 6 barras adhesivas, 2 borradores, fichas, dado, billetes y monedas de juego</li>
                  <li>6 lápices dúo, 6 Mirado, 2 marcatxtos, 4 marcadores de agua, 2 sacapuntas</li>
                  <li>Regla 30 cm, 5 pliegos bond, rompecabezas, juego de mesa, 5 silicones</li>
                  <li>Libro para colorear, 2 cuentos para donar</li>
                  <li>Acuarelas, 2 hojas para enmicar</li>
                </ul>
                <p class="text-muted"><strong>Nota:</strong> Todo con nombre. Aportar $60 para garrafón de agua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3° -->
      <div class="tab-pane fade" id="grado3">
        <div class="accordion" id="acc3">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c3">Útiles escolares</button></h2>
            <div id="c3" class="accordion-collapse collapse show" data-bs-parent="#acc3">
              <div class="accordion-body">
                <ul>
                  <li>Cuadernos: rosa (permanentes/caligrafía), verde (geo/historia/cívica), azul rey (mates/naturales), rojo (español), azul claro (inglés), naranja (vida saludable/socioemocional), amarillo (tareas)</li>
                  <li>Block construcción (inglés), diccionario esp-inglés, diccionario básico, libro infantil (donar)</li>
                  <li>Libro de colorear/actividades, folder cristiana, 2 hojas enmicar</li>
                  <li>3 foami diamantado, 3 de colores, caja colores madera</li>
                  <li>Folders, tijeras, barras adhesivas, borradores, juego geométrico</li>
                  <li>5 silicon delgado, 3 marcadores, marcatxtos y sharpie</li>
                  <li>12 lápices dúo, block construcción, 20 hojas colores, 50 blancas</li>
                  <li>2 sacapuntas, mapas Sonora y México, planisferio</li>
                  <li>Juegos de mesa educativos, stickers, plastilina</li>
                  <li>Artística: acuarelas, flauta, cuaderno blanco, 10 hojas colores</li>
                </ul>
                <p class="text-muted">Todos los útiles deben tener nombre. Aportar $50 para agua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 4° -->
      <div class="tab-pane fade" id="grado4">
        <div class="accordion" id="acc4">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c4">Útiles escolares</button></h2>
            <div id="c4" class="accordion-collapse collapse show" data-bs-parent="#acc4">
              <div class="accordion-body">
                <ul>
                  <li>Cuadernos: profesional doble raya (lenguaje), 3 profesionales raya (ética, humano, ciencias), 1 cuadriculado (mates), 1 francesa (tareas)</li>
                  <li>Diccionario, caja colores, pegamentos, juego geométrico</li>
                  <li>Folders, marcatxtos, lápices extra, borrador, cinta, sacapuntas</li>
                  <li>Tijeras, marcadores, mapas del mundo, Sonora y México</li>
                  <li>Block construcción, caja de plástico, juego de mesa educativo</li>
                  <li>Cartulinas, bond, hojas blancas y de color, papel lustre</li>
                  <li>Foamis de color y diamantados</li>
                  <li>Libro mayor a 100 hojas, fichas bibliográficas</li>
                  <li>Artística: cuaderno blanco, flauta, acuarelas, pincel</li>
                  <li>Inglés: cuaderno resorte, block construcción, diccionario</li>
                  <li>Cristiana: diamantina, folder plástico, 2 enmicar</li>
                </ul>
                <p class="text-muted">Todo el material debe tener nombre.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 5° -->
      <div class="tab-pane fade" id="grado5">
        <div class="accordion" id="acc5">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c5">Útiles escolares</button></h2>
            <div id="c5" class="accordion-collapse collapse show" data-bs-parent="#acc5">
              <div class="accordion-body">
                <ul>
                  <li>1 cuaderno italiana (tareas), 8 cuadernos profesionales raya resorte</li>
                  <li>Diccionario español, caja colores, 3 lápices, plumas azul/roja/negra</li>
                  <li>2 lápices bicolor, sacapuntas, corrector, folders, tijeras</li>
                  <li>Pegamento barra, planisferios, marcatxtos, juego geométrico</li>
                  <li>Marcadores acuacolor, block construcción, hojas blancas y de color</li>
                  <li>Papel bond, diccionario inglés-español</li>
                  <li>Material inglés: cuaderno resorte, block construcción, diccionario</li>
                  <li>Artística: cuaderno blanco, 10 hojas color, acuarelas, pincel</li>
                  <li>Cristiana: folder sobre plástico, 2 enmicar</li>
                </ul>
                <p class="text-muted">Todos los útiles con nombre. Aportar $60 para agua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 6° -->
      <div class="tab-pane fade" id="grado6">
        <div class="accordion" id="acc6">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c6">Útiles escolares</button></h2>
            <div id="c6" class="accordion-collapse collapse show" data-bs-parent="#acc6">
              <div class="accordion-body">
                <ul>
                  <li>7 cuadernos profesional raya resorte, 1 cuadriculado resorte, 1 italiana (tareas)</li>
                  <li>Caja colores, lápices, plumas, bicolores, sacapuntas, corrector, tijeras</li>
                  <li>Pegamentos, marcatxtos, juego geométrico, marcadores agua</li>
                  <li>Folders, calculadora básica, carpeta protectores, sharpie, marcador pizarrón</li>
                  <li>Foamis, hojas blancas, bond, cartulinas, papeles de color</li>
                  <li>Inglés: cuaderno resorte, diccionario, block construcción</li>
                  <li>Cristiana: folder plástico, 2 enmicar, foami diamantado</li>
                  <li>Artística: carpeta protectores, 10 hojas colores, acuarelas, pincel</li>
                </ul>
                <p class="text-muted">Todo debe tener nombre y separarse por materia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      
      <!-- Info Colegio -->
      <div class="col-lg-4 col-md-6">
        <h4 class="text-white mb-3">Colegio Emaús</h4>
        <p>Formamos estudiantes íntegros y competentes con una propuesta educativa centrada en valores.</p>
      </div>

      <!-- Contacto -->
      <div class="col-lg-4 col-md-6">
        <h4 class="text-white mb-3">Contacto</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hermosillo, Sonora</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(662) 000 0000</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>contacto@colegioemaus.mx</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Ubicación -->
      <div class="col-lg-4 col-md-6">
        <h4 class="text-white mb-3">Ubicación</h4>
        <p><i class="fa fa-map-marker-alt me-2"></i>Colegio Emaús Hermosillo</p>
        <div class="position-relative rounded overflow-hidden" style="height: 250px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.402103202194!2d-111.03543992448226!3d29.093807975416002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce83d4538e0c7b%3A0x87130b4b568b1cb7!2sColegio%20Ema%C3%BAs!5e0!3m2!1ses!2smx!4v1758404744805!5m2!1ses!2smx" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div> <!-- cierre row g-5 -->
  </div> <!-- cierre container py-5 -->

  <!-- Copyright -->
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <span class="border-bottom">Colegio Emaús Hermosillo</span>, Todos los derechos reservados.
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="#">Aviso de privacidad</a>
            <a href="#">Términos</a>
            <a href="#">Ayuda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->


  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
