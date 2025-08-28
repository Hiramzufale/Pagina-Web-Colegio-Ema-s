
<?php /* =========================
   FILE: secundaria.php
   ========================= */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Secundaria | Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Secundaria en Colegio Emaús Hermosillo: proyecto de vida, pensamiento científico y habilidades socioemocionales." name="description" />
  <meta content="secundaria, hermosillo, colegio emaús" name="keywords" />
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

  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="img/logo-emaus.png.png" alt="Colegio Emaús" class="me-2"/>
      <h5 class="m-0 text-blue">Colegio Emaús</h5>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">Inicio</a>
        <a href="about.php" class="nav-item nav-link">Nosotros</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Oferta Educativa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="kinder.php" class="dropdown-item">Kinder</a>
            <a href="primaria.php" class="dropdown-item">Primaria</a>
            <a href="secundaria.php" class="dropdown-item active">Secundaria</a>
            <a href="preparatoria.php" class="dropdown-item">Preparatoria</a>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunidad</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="equipo.html" class="dropdown-item">Nuestro equipo</a>
            <a href="testimonios.html" class="dropdown-item">Testimonios</a>
            <a href="calendario.html" class="dropdown-item">Calendario</a>
          </div>
        </div>
        <a href="contacto.html" class="nav-item nav-link">Contacto</a>
      </div>
      <a href="inscripciones.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscripciones<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>

  <!-- Hero -->
  <div class="container-fluid p-0 mb-5">
    <div class="position-relative">
      <img class="img-fluid w-100" src="img/secundaria.jpg" alt="Secundaria Emaús" />
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
        <div class="container"><div class="row justify-content-start"><div class="col-sm-10 col-lg-8">
          <h5 class="text-primary text-uppercase mb-3">Secundaria</h5>
          <h1 class="display-5 text-white">Pensamiento científico y proyecto de vida</h1>
          <p class="fs-5 text-white mb-4">Fortalecemos habilidades académicas y socioemocionales para el siguiente nivel.</p>
          <a href="#itinerarios" class="btn btn-primary py-md-3 px-md-5 me-3">Itinerarios</a>
          <a href="#requisitos" class="btn btn-light py-md-3 px-md-5">Requisitos</a>
        </div></div></div>
      </div>
    </div>
  </div>

  <!-- Itinerarios / enfoque -->
  <div id="itinerarios" class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-robot text-primary mb-3"></i>
            <h5>STEM</h5>
            <p>Proyectos de ciencia, tecnología y resolución de problemas.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-comments text-primary mb-3"></i>
            <h5>Comunicación</h5>
            <p>Debate, lectura crítica y escritura de textos argumentativos.</p>
          </div></div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-users text-primary mb-3"></i>
            <h5>Socioemocional</h5>
            <p>Autogestión, trabajo colaborativo y liderazgo con valores.</p>
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
            <tr><td>1°</td><td>Transición a secundaria, hábitos de estudio y pensamiento científico.</td></tr>
            <tr><td>2°</td><td>Profundización en áreas académicas y proyectos interdisciplinarios.</td></tr>
            <tr><td>3°</td><td>Preparación para bachillerato y orientación vocacional.</td></tr>
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
          <h2 class="mb-3">Requisitos para Secundaria</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa fa-file text-primary me-2"></i>Acta de nacimiento y CURP</li>
            <li class="list-group-item"><i class="fa fa-file-signature text-primary me-2"></i>Boleta o certificado de primaria</li>
            <li class="list-group-item"><i class="fa fa-user-shield text-primary me-2"></i>Identificación del padre/madre o tutor</li>
            <li class="list-group-item"><i class="fa fa-home text-primary me-2"></i>Comprobante de domicilio</li>
          </ul>
          <a href="inscripciones.php" class="btn btn-primary mt-4">Iniciar inscripción</a>
        </div>
        <div class="col-lg-5">
          <div class="accordion" id="faqSecundaria">
            <div class="accordion-item"><h2 class="accordion-header" id="s1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sa1">¿Acompañamiento vocacional?</button></h2><div id="sa1" class="accordion-collapse collapse show" data-bs-parent="#faqSecundaria"><div class="accordion-body">Se brindan actividades de autoconocimiento y exploración de intereses.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="s2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sa2">¿Disciplinas deportivas y artísticas?</button></h2><div id="sa2" class="accordion-collapse collapse" data-bs-parent="#faqSecundaria"><div class="accordion-body">La oferta varía por ciclo escolar y se comunica al inicio del periodo.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="s3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sa3">¿Idiomas?</button></h2><div id="sa3" class="accordion-collapse collapse" data-bs-parent="#faqSecundaria"><div class="accordion-body">Programa de inglés acorde al nivel. Los detalles se confirman cada ciclo.</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Útiles Secundaria -->
<div id="utiles-secundaria" class="container-xxl py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h6 class="section-title bg-white text-center text-primary px-3">Lista</h6>
      <h2>Útiles Escolares 2025–2026</h2>
      <p class="text-muted mb-0">Secundaria (1° a 3°)</p>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="pillsSecundaria" role="tablist">
      <li class="nav-item"><button class="nav-link active" id="s1" data-bs-toggle="pill" data-bs-target="#sec1" type="button" role="tab">1er Grado</button></li>
      <li class="nav-item"><button class="nav-link" id="s2" data-bs-toggle="pill" data-bs-target="#sec2" type="button" role="tab">2do Grado</button></li>
      <li class="nav-item"><button class="nav-link" id="s3" data-bs-toggle="pill" data-bs-target="#sec3" type="button" role="tab">3er Grado</button></li>
    </ul>

    <div class="tab-content" id="pillsSecundariaContent">

      <!-- 1er Grado -->
      <div class="tab-pane fade show active" id="sec1">
        <div class="accordion" id="accSec1">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sec1u">Útiles escolares</button></h2>
            <div id="sec1u" class="accordion-collapse collapse show" data-bs-parent="#accSec1">
              <div class="accordion-body">
                <ul>
                  <li>10 cuadernos profesionales de raya (forrados por color según materia)</li>
                  <li>1 cuaderno de cuadricula profesional (matemáticas)</li>
                  <li>1 cuaderno profesional de hojas blancas (artes)</li>
                  <li>1 cuaderno profesional de rayas con resorte (inglés)</li>
                  <li>1 diccionario inglés–español</li>
                  <li>1 carpeta con protectores tamaño carta</li>
                  <li>Colores, marcadores, juego geométrico, calculadora básica</li>
                  <li>2 folders plásticos, 2 hojas para enmicar</li>
                  <li>Foamis diamantados, hojas de color, cartulinas</li>
                  <li>Acuarelas, pincel, flauta</li>
                </ul>
                <p class="text-muted">Todos los artículos deben estar forrados y con el nombre del alumno(a).</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2do Grado -->
      <div class="tab-pane fade" id="sec2">
        <div class="accordion" id="accSec2">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sec2u">Útiles escolares</button></h2>
            <div id="sec2u" class="accordion-collapse collapse show" data-bs-parent="#accSec2">
              <div class="accordion-body">
                <ul>
                  <li>10 cuadernos profesionales de raya (forrados por color según materia)</li>
                  <li>1 cuaderno cuadriculado profesional (matemáticas)</li>
                  <li>1 cuaderno profesional de hojas blancas (artes)</li>
                  <li>1 cuaderno profesional resorte de rayas (inglés)</li>
                  <li>Diccionario inglés–español</li>
                  <li>1 carpeta con protectores tamaño carta</li>
                  <li>Colores, marcadores, juego geométrico, calculadora básica</li>
                  <li>Foamis diamantados, hojas de color, cartulinas</li>
                  <li>Acuarelas, pincel, flauta</li>
                </ul>
                <p class="text-muted">Todos los útiles deben traer nombre y estar separados por materia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3er Grado -->
      <div class="tab-pane fade" id="sec3">
        <div class="accordion" id="accSec3">
          <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sec3u">Útiles escolares</button></h2>
            <div id="sec3u" class="accordion-collapse collapse show" data-bs-parent="#accSec3">
              <div class="accordion-body">
                <ul>
                  <li>10 cuadernos profesionales de raya (forrados por color según materia)</li>
                  <li>1 cuaderno cuadriculado profesional (matemáticas)</li>
                  <li>1 cuaderno profesional de hojas blancas (artes)</li>
                  <li>1 cuaderno profesional resorte de rayas (inglés)</li>
                  <li>Diccionario inglés–español</li>
                  <li>1 carpeta con protectores tamaño carta</li>
                  <li>Colores, marcadores, juego geométrico, calculadora básica</li>
                  <li>Foamis diamantados, hojas de color, cartulinas</li>
                  <li>Acuarelas, pincel, flauta</li>
                </ul>
                <p class="text-muted">Todos los útiles deberán estar identificados con nombre.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


  <!-- CTA -->
  <div class="container-xxl py-5 bg-dark">
    <div class="container"><div class="row align-items-center"><div class="col-lg-9"><h3 class="text-white mb-2">Da el siguiente paso con Secundaria Emaús</h3><p class="text-white-50 mb-0">Visita nuestras instalaciones y conoce el modelo formativo.</p></div><div class="col-lg-3 text-lg-end mt-3 mt-lg-0"><a href="contacto.html" class="btn btn-light">Agendar visita</a></div></div></div>
  </div>

  <div class="container-fluid bg-dark text-light footer pt-5 mt-0">
    <div class="container py-5"><div class="row g-5"><div class="col-lg-4 col-md-6"><h4 class="text-white mb-3">Colegio Emaús</h4><p>Formamos estudiantes íntegros y competentes con una propuesta educativa centrada en valores.</p></div><div class="col-lg-4 col-md-6"><h4 class="text-white mb-3">Contacto</h4><p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hermosillo, Sonora</p><p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(662) 000 0000</p><p class="mb-2"><i class="fa fa-envelope me-3"></i>contacto@colegioemaus.mx</p></div><div class="col-lg-4 col-md-6"><h4 class="text-white mb-3">Boletín</h4><p>Recibe noticias y fechas importantes.</p><div class="position-relative mx-auto" style="max-width:400px;"><input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Tu correo" /><button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Suscribirme</button></div></div></div></div>
    <div class="container"><div class="copyright"><div class="row"><div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <span class="border-bottom">Colegio Emaús Hermosillo</span>, Todos los derechos reservados.</div><div class="col-md-6 text-center text-md-end"><div class="footer-menu"><a href="#">Aviso de privacidad</a><a href="#">Términos</a><a href="#">Ayuda</a></div></div></div></div></div>
  </div>

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
