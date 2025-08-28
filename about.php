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
        <a href="oferta.html" class="nav-item nav-link">Oferta educativa</a>
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

          <div class="row g-3">
            <div class="col-sm-6">
              <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm h-100">
                <i class="bi bi-heart-pulse fs-3 text-primary me-3"></i>
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

        <!-- Espacio para imagen (colócala cuando la tengas) -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="position-relative" style="min-height:400px;">
            <!-- Reemplaza por tu imagen real -->
            <img src="img/instalaciones.jpg" alt="Instalaciones Colegio Emaús" class="img-fluid rounded w-100 h-100" style="object-fit:cover;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Instalaciones End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
        <h1 class="mb-5">Expert Instructors</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/team-1.jpg" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/team-2.jpg" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/team-3.jpg" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="img/team-4.jpg" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Quick Link</h4>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Privacy Policy</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
          <a class="btn btn-link" href="">FAQs & Help</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Contact</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Gallery</h4>
          <div class="row g-2 pt-2">
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
            </div>
            <div class="col-4">
              <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Newsletter</h4>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
            Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-menu">
              <a href="">Home</a>
              <a href="">Cookies</a>
              <a href="">Help</a>
              <a href="">FQAs</a>
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
