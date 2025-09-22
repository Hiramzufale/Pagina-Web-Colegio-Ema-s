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
        <a href="index.php" class="nav-item nav-link active">Inicio</a>
        <a href="about.php" class="nav-item nav-link">Nosotros</a>
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

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-1.jpg" alt="Colegio Emaús" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Formación integral</h5>
                <h1 class="display-4 text-white animated slideInDown">Educación con valores y excelencia académica</h1>
                <p class="fs-5 text-white mb-4 pb-2">Preescolar, Primaria, Secundaria y Preparatoria en Hermosillo. Acompañamos a cada estudiante en su camino de aprendizaje.</p>
                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Conócenos</a>
                <a href="inscripciones.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Inscríbete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/carousel-2.jpg" alt="Colegio Emaús" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Ambiente seguro</h5>
                <h1 class="display-4 text-white animated slideInDown">Inspiramos disciplina, creatividad y liderazgo</h1>
                <p class="fs-5 text-white mb-4 pb-2">Programas académicos y actividades que desarrollan las habilidades del siglo XXI.</p>
                <a href="educristiana.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Educación Cristiana</a>
                <a href="contacto.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contacto</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  
  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height:400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="Colegio Emaús Hermosillo" style="object-fit:cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">Nosotros</h6>
          <h1 class="mb-4">Bienvenidos a Colegio Emaús</h1>
          <p class="mb-4">En Colegio Emaús creemos que la verdadera educación va más allá del aula. Nuestra misión es formar estudiantes con una sólida preparación académica, guiados por valores cristianos que les permitan crecer como personas íntegras, responsables y comprometidas con su entorno.</p>
          <p class="mb-4">Ofrecemos niveles: Preescolar, Primaria, Secundaria y Preparatoria.</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Docentes capacitados</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Proyectos y talleres</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Instalaciones seguras</p></div>
            <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Acompañamiento a familias</p></div>
          </div>
          <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Conocer más</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-child text-primary mb-4"></i>
              <h5 class="mb-3">Atención personalizada</h5>
              <p>Grupos reducidos y acompañamiento cercano para el desarrollo académico y emocional.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-book text-primary mb-4"></i>
              <h5 class="mb-3">Excelencia académica</h5>
              <p>Plan de estudios actualizado y enfoque en hábitos de estudio y pensamiento crítico.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-users text-primary mb-4"></i>
              <h5 class="mb-3">Formación en valores</h5>
              <p>Comunidad educativa con principios que promueven respeto, solidaridad y responsabilidad.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-laptop text-primary mb-4"></i>
              <h5 class="mb-3">Tecnología educativa</h5>
              <p>Herramientas digitales y proyectos que impulsan la creatividad y la investigación.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->


  <!-- Niveles educativos Start (antes Categories) -->
  <div class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Niveles</h6>
        <h1 class="mb-5">Oferta educativa</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="preparatoria.php">
                <img class="img-fluid" src="img/preparatoria.jpg" alt="Preescolar" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Preparatoria</h5>
                  <small class="text-primary">Descubre más</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="kinder.php">
                <img class="img-fluid" src="img/kinder.jpg" alt="Primaria" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Kinder</h5>
                  <small class="text-primary">Descubre más</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="secundaria.php">
                <img class="img-fluid" src="img/secundaria.jpg" alt="Secundaria" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
                  <h5 class="m-0">Secundaria</h5>
                  <small class="text-primary">Descubre más</small>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height:350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="primaria.php">
            <img class="img-fluid position-absolute w-100 h-100" src="img/primaria.jpg" alt="Preparatoria" style="object-fit:cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:1px;">
              <h5 class="m-0">Primaria</h5>
              <small class="text-primary">Descubre más</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Niveles End -->

  <!-- Testimonios Start (conservamos estructura) -->
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
            <p class="mb-0">“Mi hijo ha desarrollado hábitos de estudio y valores. Nos encanta el ambiente.”</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width:80px;height:80px" alt="Alumno" />
          <h5 class="mb-0">Alumno</h5>
          <p>Secundaria</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">“Las clases son dinámicas y los maestros siempre nos apoyan.”</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width:80px;height:80px" alt="Egresado" />
          <h5 class="mb-0">Egresado</h5>
          <p>Preparatoria</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">“Salir de Emaús me dio bases sólidas para la universidad.”</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonios End -->

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