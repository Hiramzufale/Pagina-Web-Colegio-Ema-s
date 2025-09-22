
<?php /* =========================
   FILE: preparatoria.php
   ========================= */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Preparatoria | Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Preparatoria en Colegio Emaús Hermosillo: competencias para la universidad y la vida, liderazgo y valores." name="description" />
  <meta content="preparatoria, bachillerato, hermosillo, colegio emaús" name="keywords" />
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
      <img class="img-fluid w-100" src="img/preparatoria.jpg" alt="Preparatoria Emaús" />
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
        <div class="container"><div class="row justify-content-start"><div class="col-sm-10 col-lg-8">
          <h5 class="text-primary text-uppercase mb-3">Preparatoria</h5>
          <h1 class="display-5 text-white">Competencias para la universidad y la vida</h1>
          <p class="fs-5 text-white mb-4">Orientación, liderazgo, metodologías activas y acompañamiento académico.</p>
          <a href="#requisitos" class="btn btn-light py-md-3 px-md-5">Requisitos</a>
        </div></div></div>
      </div>
    </div>
  </div>

  <!-- Trayectos / áreas -->
  <div id="trayectos" class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6"><div class="service-item text-center pt-3"><div class="p-4"><i class="fa fa-3x fa-microscope text-primary mb-3"></i><h5>Ciencias</h5><p>Física, Química y Biología con enfoque práctico y proyectos.</p></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="service-item text-center pt-3"><div class="p-4"><i class="fa fa-3x fa-chart-line text-primary mb-3"></i><h5>Matemáticas</h5><p>Álgebra, geometría, probabilidad y preparación para ingreso a universidad.</p></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="service-item text-center pt-3"><div class="p-4"><i class="fa fa-3x fa-globe text-primary mb-3"></i><h5>Humanidades</h5><p>Lectura crítica, historia, filosofía y habilidades comunicativas.</p></div></div></div>
        <div class="col-lg-3 col-md-6"><div class="service-item text-center pt-3"><div class="p-4"><i class="fa fa-3x fa-briefcase text-primary mb-3"></i><h5>Proyección</h5><p>Orientación vocacional, emprendimiento y servicio comunitario.</p></div></div></div>
      </div>
    </div>
  </div>

  <!-- Plan por semestres (tabla genérica) -->
  <div class="container-xxl py-5 bg-light">
    <div class="container">
      <h4 class="mb-3">Organización por semestres</h4>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead><tr><th>Semestre</th><th>Enfoque principal</th></tr></thead>
          <tbody>
            <tr><td>1°</td><td>Inducción al bachillerato, pensamiento lógico y técnicas de estudio.</td></tr>
            <tr><td>2°</td><td>Profundización en ciencias y comunicación.</td></tr>
            <tr><td>3°</td><td>Proyectos integradores y habilidades digitales.</td></tr>
            <tr><td>4°</td><td>Orientación vocacional y preparación para exámenes de ingreso.</td></tr>
            <tr><td>5°</td><td>Elección de enfoque y prácticas de investigación.</td></tr>
            <tr><td>6°</td><td>Consolidación de competencias y plan de vida.</td></tr>
          </tbody>
        </table>
      </div>
      <small class="text-muted">*El plan puede ajustarse conforme al calendario y lineamientos vigentes.</small>
    </div>
  </div>

  <!-- Requisitos -->
  <div id="requisitos" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-start">
        <div class="col-lg-7">
          <h6 class="section-title bg-white text-start text-primary pe-3">Inscripciones</h6>
          <h2 class="mb-3">Requisitos para Preparatoria</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa fa-file text-primary me-2"></i>Acta de nacimiento y CURP</li>
            <li class="list-group-item"><i class="fa fa-file-signature text-primary me-2"></i>Certificado de Secundaria</li>
            <li class="list-group-item"><i class="fa fa-id-card text-primary me-2"></i>Identificación del alumno y del padre/madre o tutor</li>
            <li class="list-group-item"><i class="fa fa-home text-primary me-2"></i>Comprobante de domicilio</li>
          </ul>
          <a href="inscripciones.php" class="btn btn-primary mt-4">Iniciar inscripción</a>
        </div>
        <div class="col-lg-5">
          <div class="accordion" id="faqPrepa">
            <div class="accordion-item"><h2 class="accordion-header" id="b1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ba1">¿Modalidad y horarios?</button></h2><div id="ba1" class="accordion-collapse collapse show" data-bs-parent="#faqPrepa"><div class="accordion-body">La modalidad es escolarizada. Los horarios y asignaturas se confirman cada ciclo escolar.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="b2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ba2">¿Apoyos y tutorías?</button></h2><div id="ba2" class="accordion-collapse collapse" data-bs-parent="#faqPrepa"><div class="accordion-body">Se brinda acompañamiento académico y orientación vocacional.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header" id="b3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ba3">¿Actividades extracurriculares?</button></h2><div id="ba3" class="accordion-collapse collapse" data-bs-parent="#faqPrepa"><div class="accordion-body">Se ofertan actividades deportivas, culturales y de liderazgo según disponibilidad.</div></div></div>
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
