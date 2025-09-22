<?php /* =========================
   FILE: kinder.php
   Colegio Emaús Hermosillo
   ========================= */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Kinder | Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Kinder en Colegio Emaús Hermosillo: formación socioemocional, psicomotricidad, hábitos y lectoescritura emergente." name="description" />
  <meta content="kinder, preescolar, hermosillo, colegio emaús" name="keywords" />
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
    :root{
      --bs-primary:#0d21fd; --bs-secondary:#1c33c7; --bs-dark:#181d38; --bs-light:#f8f9fa;
    }
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
        <a href="educristiana.php" class="nav-item nav-link active">Educación Cristiana</a>
                <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oferta Educativa</a>
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

<!-- Educación Cristiana -->
<div class="container-xxl py-5 bg-light" id="educacion-cristiana">
  <div class="container">
    <!-- Encabezado -->
    <div class="text-center mb-5 wow fadeInDown" data-wow-delay="0.2s">
      <h6 class="section-title bg-white text-center text-primary px-3">Formación Integral</h6>
      <h2 class="mb-3 fw-bold">Educación Cristiana en Todos los Niveles</h2>
      <p class="text-muted">
        Desde Kinder hasta Preparatoria, en Colegio Emaús Hermosillo ofrecemos una 
        <strong>formación cristiana integral</strong> que guía a nuestros estudiantes en cada etapa de su vida.
      </p>
    </div>

<!-- Identidad Institucional -->
<div class="py-5" style="background: linear-gradient(180deg, #f9f9fb 0%, #ffffff 100%);">
  <div class="container">
    <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
      <h6 class="section-title bg-light text-primary px-3 d-inline-block">Nuestra Identidad</h6>
      <h2 class="fw-bold">Misión, Visión y Objetivos</h2>
      <p class="text-muted">Cada acción educativa en Colegio Emaús está respaldada por una formación cristiana sólida que orienta nuestro rumbo y propósito.</p>
    </div>

    <div class="row g-4">
      <!-- Visión -->
      <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.3s">
        <div class="p-4 h-100 bg-white shadow-sm rounded-3 d-flex">
          <div class="me-3 flex-shrink-0">
            <div class="icon-circle bg-primary text-white">
              <i class="bi bi-eye-fill fs-3"></i>
            </div>
          </div>
          <div>
            <h5 class="fw-bold text-primary">Visión</h5>
            <p class="text-muted mb-0">
              Formar niños y jóvenes que vivan en armonía con su entorno, 
              desarrollando relaciones sanas y responsables.  
              Cimentamos bases firmes en principios bíblicos que les permitan alcanzar 
              una vida plena y proyectada hacia la eternidad.
            </p>
          </div>
        </div>
      </div>

      <!-- Misión -->
      <div class="col-md-6 wow fadeInRight" data-wow-delay="0.3s">
        <div class="p-4 h-100 bg-white shadow-sm rounded-3 d-flex">
          <div class="me-3 flex-shrink-0">
            <div class="icon-circle bg-success text-white">
              <i class="bi bi-book-half fs-3"></i>
            </div>
          </div>
          <div>
            <h5 class="fw-bold text-success">Misión</h5>
            <p class="text-muted mb-2">
              Brindar fundamentos bíblicos que impacten, restauren y transformen la vida de nuestros alumnos, 
              sus familias y su comunidad.  
            </p>
            <p class="text-muted mb-0">
              Nuestro lema resume esta misión:  
              <em>“Educando para la vida, construyendo para la eternidad.”</em>  
              Proclamamos a Dios como la esencia de una vida plena.
            </p>
          </div>
        </div>
      </div>

      <!-- Objetivos -->
      <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s">
        <div class="p-4 h-100 bg-white shadow-sm rounded-3 d-flex">
          <div class="me-3 flex-shrink-0">
            <div class="icon-circle bg-warning text-white">
              <i class="bi bi-check2-circle fs-3"></i>
            </div>
          </div>
          <div>
            <h5 class="fw-bold text-warning">Objetivos</h5>
            <p class="text-muted">
              Alcanzar vidas a través del evangelio, compartiendo a Jesucristo como Señor y Salvador, 
              y guiando a los alumnos a conocer a Dios, sus promesas y fidelidad.  
            </p>
            <blockquote class="blockquote text-muted fst-italic border-start ps-3">
              “Conoceréis la verdad, y la verdad os hará libres” (Juan 8:32).
            </blockquote>
            <p class="text-muted mb-0">
              Nuestro compromiso es que cada alumno conozca, aprenda, crea y obedezca la Palabra de Dios, 
              discerniendo el camino correcto hacia la vida eterna.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cards por niveles -->
<div class="container my-5">
  <div class="row g-4 justify-content-center">

    <!-- Kinder -->
    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.2s">
      <div class="card h-100 shadow-sm border-0">
        <img src="img/kinder.jpg" class="card-img-top rounded-top" alt="Kinder Cristiano">
        <div class="card-body text-center">
          <h5 class="card-title text-primary">Kinder</h5>
          <p class="card-text">
            Sembramos las primeras semillas de fe a través de dinámicas, cantos y valores como gratitud, respeto y obediencia.
          </p>
          <a href="kinder.php" class="btn btn-primary mt-3">Ver Oferta Educativa</a>
        </div>
      </div>
    </div>

    <!-- Primaria -->
    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
      <div class="card h-100 shadow-sm border-0">
        <img src="img/primaria.jpg" class="card-img-top rounded-top" alt="Primaria Cristiana">
        <div class="card-body text-center">
          <h5 class="card-title text-primary">Primaria</h5>
          <p class="card-text">
            En esta etapa fortalecemos conocimientos, fe y valores, acompañando a los niños en su crecimiento integral.
          </p>
          <a href="primaria.php" class="btn btn-primary mt-3">Ver Oferta Educativa</a>
        </div>
      </div>
    </div>

    <!-- Secundaria -->
    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.4s">
      <div class="card h-100 shadow-sm border-0">
        <img src="img/secundaria.jpg" class="card-img-top rounded-top" alt="Secundaria Cristiana">
        <div class="card-body text-center">
          <h5 class="card-title text-primary">Secundaria</h5>
          <p class="card-text">
            Acompañamos la etapa de cambios y decisiones importantes reforzando la identidad personal y espiritual.
          </p>
          <a href="secundaria.php" class="btn btn-primary mt-3">Ver Oferta Educativa</a>
        </div>
      </div>
    </div>

    <!-- Preparatoria -->
    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
      <div class="card h-100 shadow-sm border-0">
        <img src="img/preparatoria.jpg" class="card-img-top rounded-top" alt="Preparatoria Cristiana">
        <div class="card-body text-center">
          <h5 class="card-title text-primary">Preparatoria</h5>
          <p class="card-text">
            Formamos jóvenes líderes que enfrentan los retos del mundo moderno con convicciones firmes y principios bíblicos.
          </p>
          <a href="preparatoria.php" class="btn btn-primary mt-3">Ver Oferta Educativa</a>
        </div>
      </div>
    </div>

  </div>
</div>


    <!-- Beneficios destacados -->
    <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.2s">
      <h3 class="fw-bold">Beneficios de la Educación Cristiana</h3>
    </div>
    <div class="row g-4 text-center justify-content-center">
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-heart-fill text-primary fs-1 mb-3"></i>
          <h5>Carácter con valores</h5>
          <p>Los alumnos desarrollan respeto, responsabilidad y empatía.</p>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-book-fill text-primary fs-1 mb-3"></i>
          <h5>Fundamento en la Palabra</h5>
          <p>La Biblia como guía de vida en cada etapa escolar.</p>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-lightbulb-fill text-primary fs-1 mb-3"></i>
          <h5>Liderazgo positivo</h5>
          <p>Formamos jóvenes capaces de transformar su entorno.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Estilos extra -->
<style>
  .icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  }
</style>



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
