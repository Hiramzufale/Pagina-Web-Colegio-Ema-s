<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Colegio Emaús Hermosillo: Preescolar, Primaria, Secundaria y Preparatoria" name="description" />
  <meta content="colegio, escuela, preescolar, primaria, secundaria, preparatoria, hermosillo, emaus" name="keywords" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Overrides de marca Colegio Emaús -->
  <style>
    :root{
      /* Paleta basada en el logotipo CE */
      --bs-primary:#0d21fd;      /* Azul vibrante del logo */
      --bs-secondary:#1c33c7;    /* Azul más profundo */
      --bs-dark:#181d38;         /* Fondo oscuro usado en hero */
      --bs-light:#f8f9fa;        /* Fondo claro */
      --emaus-azul:#0d21fd;
      --emaus-azul-osc:#1c33c7;
      --emaus-blanco:#ffffff;
    }
    /* Ajustes visuales del template */
    .navbar-brand img{height:44px;width:auto}
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link:hover{color:var(--bs-primary)}
    .section-title{border-left:6px solid var(--bs-primary);padding-left:.5rem;border-radius:2px}
    .btn-primary{background-color:var(--bs-primary);border-color:var(--bs-primary)}
    .btn-primary:hover{background-color:var(--bs-secondary);border-color:var(--bs-secondary)}
    .footer a.border-bottom{border-color:rgba(255,255,255,.35)!important}
    .header-overlay{background: rgba(24,29,56,.65);} /* capa para hero */
  </style>

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width:3rem;height:3rem" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>
  <!-- Spinner End -->

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
        <a href="about.php" class="nav-item nav-link active">Nosotros</a>
        <a href="educristiana.php" class="nav-item nav-link">Educación Cristiana</a>
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

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height:400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="Colegio Emaús Hermosillo" style="object-fit:cover;">
          </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">Nosotros</h6>
          <h1 class="mb-4">¿Quiénes somos?</h1>

          <p class="mb-4">
            El <strong>Colegio Emaús</strong> es una institución cristiana en Hermosillo dedicada a la formación integral de niños y jóvenes, ofreciendo los niveles de
            <strong>Preescolar, Primaria, Secundaria y Preparatoria</strong>. Nuestra labor no sustituye al hogar ni a la iglesia; los acompaña, apoyando a las familias con educación académica y en valores.
          </p>

          <p class="mb-4">
            <strong>Fundado en 1983</strong> por un grupo de hermanos que, con fe y visión, respondieron a la necesidad de un colegio cristiano en la comunidad, Emaús integra la enseñanza de valores bíblicos con la excelencia académica. Con el respaldo de la Asociación Civil <em>El Consejero A.C.</em>, hemos acumulado más de 28 años de servicio formando generaciones con principios sólidos.
          </p>

          <p class="mb-4">
            Nuestra visión es <em>servir a Dios integrando el conocimiento</em>: formar estudiantes íntegros, responsables y preparados para los retos del presente y del futuro.
          </p>

          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Docentes capacitados</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Acompañamiento a familias</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ambiente seguro</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Proyectos y talleres</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
<!-- Instalaciones Start -->
<section id="instalaciones" class="container-xxl py-5 bg-light">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-start text-primary pe-3">Instalaciones</h6>
        <h2 class="mb-4">Instalaciones de Colegio Emaús Hermosillo</h2>
        <p class="mb-3">
          Nuestras instalaciones están diseñadas para ofrecer un entorno seguro, funcional y acogedor, donde los alumnos puedan desarrollarse plenamente en lo académico, deportivo, espiritual y cultural. Cada espacio está pensado para fomentar el aprendizaje, la creatividad y la convivencia.
        </p>
        <p class="mb-4">
          Además, a lo largo del ciclo escolar se realizan eventos y actividades que fortalecen el sentido de comunidad, creando momentos significativos para compartir en familia y estrechar la relación entre estudiantes, padres y docentes, dentro de un ambiente de fe y alegría.
        </p>

        <!-- Bloques de características -->
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="fas fa-ambulance fs-3 text-primary me-3"></i>
              <span>SIAM, servicio médico privado</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="bi bi-shield-check fs-3 text-primary me-3"></i>
              <span>Entorno Seguro y Controlado</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="bi bi-people fs-3 text-primary me-3"></i>
              <span>Recesos separados por nivel escolar</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="bi bi-music-note-beamed fs-3 text-primary me-3"></i>
              <span>Espacios para Actividades Culturales</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="bi bi-basket2 fs-3 text-primary me-3"></i>
              <span>Áreas Deportivas Amplias</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
              <i class="bi bi-building fs-3 text-primary me-3"></i>
              <span>Capilla Escolar</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Video -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="position-relative" style="aspect-ratio:16/9; overflow:hidden; border-radius: 0.5rem;">
          <video 
            class="w-100 h-100" 
            style="object-fit:cover;" 
            autoplay 
            muted 
            loop 
            playsinline 
            oncontextmenu="return false;">
            <source src="img/instalaciones.mp4" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Instalaciones End -->
<!-- Educación Cristiana Start -->
<section id="educacion-cristiana" class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height:400px;">
        <div class="position-relative h-100" style="min-height:400px;">
  <img class="img-fluid position-absolute w-100 h-100 rounded" 
       src="img/biblia.jpg" 
       alt="Educación Cristiana en Colegio Emaús" 
       style="object-fit:cover;">
</div>

      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h6 class="section-title bg-white text-start text-primary pe-3">Formación en Valores</h6>
        <h2 class="mb-4">Educación Cristiana</h2>
        <p class="mb-4">
          En <strong>Colegio Emaús</strong> creemos que la formación académica debe ir de la mano con la formación espiritual. 
          Por ello, nuestros estudiantes participan en clases, devocionales y actividades que fortalecen su fe y valores bíblicos.
        </p>
        <p class="mb-4">
          Nuestro propósito es acompañar a cada alumno en su crecimiento integral, promoviendo el amor a Dios, al prójimo y el compromiso con la sociedad.
        </p>
        <a href="educristiana.php" class="btn btn-primary py-3 px-4">
          Conoce más <i class="fa fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Educación Cristiana End -->

  <!-- Instalaciones End -->

 
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


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script>
  // Evita que al cargar la página el navegador haga scroll automático al video
  window.addEventListener("load", function() {
    window.scrollTo(0, 0);
  });
</script>

</body>
</html>
