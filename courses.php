<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Colegio Emaús | Oferta Educativa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Oferta educativa de Colegio Emaús Hermosillo: Preescolar, Primaria, Secundaria y Preparatoria" name="description" />

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
      --bs-primary:#0d21fd;      /* Azul del logo */
      --bs-secondary:#1c33c7;    /* Azul profundo */
      --bs-dark:#181d38;
      --bs-light:#f8f9fa;
    }
    .navbar-brand img{height:44px;width:auto}
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link:hover{color:var(--bs-primary)}
    .page-header{background:var(--bs-primary)}
    .section-title{border-left:6px solid var(--bs-primary);padding-left:.5rem;border-radius:2px}
    .btn-primary{background-color:var(--bs-primary);border-color:var(--bs-primary)}
    .btn-primary:hover{background-color:var(--bs-secondary);border-color:var(--bs-secondary)}
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
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="img/logo-emaus.png" alt="Colegio Emaús" class="me-2" />
      <h2 class="m-0 text-primary">Colegio Emaús</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.html" class="nav-item nav-link">Inicio</a>
        <a href="about.html" class="nav-item nav-link">Nosotros</a>
        <a href="oferta.html" class="nav-item nav-link active">Oferta educativa</a>
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
      <a href="inscripciones.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscripciones<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Oferta Educativa</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="index.html">Inicio</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Colegio</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Oferta educativa</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Niveles Start (antes Categories) -->
  <div class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Niveles</h6>
        <h1 class="mb-5">Nuestros niveles educativos</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="preescolar.html">
                <img class="img-fluid" src="img/cat-1.jpg" alt="Preescolar" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Preescolar</h5>
                  <small class="text-primary">Conoce el programa</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="primaria.html">
                <img class="img-fluid" src="img/cat-2.jpg" alt="Primaria" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Primaria</h5>
                  <small class="text-primary">Conoce el programa</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="secundaria.html">
                <img class="img-fluid" src="img/cat-3.jpg" alt="Secundaria" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Secundaria</h5>
                  <small class="text-primary">Conoce el programa</small>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height:350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="preparatoria.html">
            <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="Preparatoria" style="object-fit:cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
              <h5 class="m-0">Preparatoria</h5>
              <small class="text-primary">Conoce el programa</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Niveles End -->

  <!-- Talleres/Extras Start (antes Courses) -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Talleres y actividades</h6>
        <h1 class="mb-5">Programas complementarios</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-1.jpg" alt="Inglés" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius:30px 0 0 30px;">Detalles</a>
                <a href="inscripciones.html" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius:0 30px 30px 0;">Inscribirme</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">Programa de Inglés</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <h5 class="mb-4">Certificaciones y conversación</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Docentes CE</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Horario escolar</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Cupos limitados</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-2.jpg" alt="Arte y música" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius:30px 0 0 30px;">Detalles</a>
                <a href="inscripciones.html" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius:0 30px 30px 0;">Inscribirme</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">Arte y Música</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <h5 class="mb-4">Creatividad y expresión</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Docentes CE</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Horario escolar</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Cupos limitados</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-3.jpg" alt="Deportes" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius:30px 0 0 30px;">Detalles</a>
                <a href="inscripciones.html" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius:0 30px 30px 0;">Inscribirme</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">Deportes</h3>
              <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
              </div>
              <h5 class="mb-4">Trabajo en equipo y salud</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Docentes CE</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Horario escolar</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Cupos limitados</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Talleres/Extras End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">Testimonios</h6>
        <h1 class="mb-5">Lo que dice nuestra comunidad</h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width:80px;height:80px" alt="Madre de familia" />
          <h5 class="mb-0">Madre de familia</h5>
          <p>Primaria</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">“Mi hijo ha crecido en valores y disciplina. Estamos muy contentos con el colegio.”</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width:80px;height:80px" alt="Alumno" />
          <h5 class="mb-0">Alumno</h5>
          <p>Secundaria</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">“Los maestros nos apoyan y las clases son dinámicas.”</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width:80px;height:80px" alt="Egresado" />
          <h5 class="mb-0">Egresado</h5>
          <p>Preparatoria</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">“Las bases académicas me ayudaron en la universidad.”</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->


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
</body>
</html>
