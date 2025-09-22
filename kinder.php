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
      <img class="img-fluid w-100" src="img/kinder.jpg" alt="Kinder Emaús" />
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center header-overlay">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
              <h5 class="text-primary text-uppercase mb-3">Kinder</h5>
              <h1 class="display-5 text-white">Aprender jugando, crecer con valores</h1>
              <p class="fs-5 text-white mb-4 pb-2">Desarrollo socioemocional, psicomotricidad fina y gruesa, y bases de lectoescritura y lógico-matemático.</p>
              <a href="#requisitos" class="btn btn-primary py-md-3 px-md-5 me-3">Requisitos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Por qué Kinder -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-start text-primary pe-3">Kinder</h6>
          <h2 class="mb-3">¿Por qué elegir nuestro Kinder?</h2>
          <p class="mb-4">Acompañamos a niñas y niños en sus primeras experiencias escolares con un entorno seguro, afectivo y estimulante.</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Grupos reducidos y atención personalizada</li>
            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Trabajo por proyectos y aprendizaje activo</li>
            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Desarrollo del lenguaje, psicomotricidad y habilidades socioemocionales</li>
            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Participación y acompañamiento a familias</li>
          </ul>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="row g-3">
            <div class="col-12">
              <div class="p-4 bg-light rounded">
                <h5 class="mb-3">Grados y edades de referencia</h5>
                <div class="table-responsive">
                  <table class="table table-bordered mb-0">
                    <thead>
                      <tr><th>Grado</th><th>Edad</th><th>Enfoque</th></tr>
                    </thead>
                    <tbody>
                      <tr><td>1° de Preescolar</td><td>3 años</td><td>Adaptación, juego simbólico, hábitos</td></tr>
                      <tr><td>2° de Preescolar</td><td>4 años</td><td>Lenguaje, psicomotricidad, convivencia</td></tr>
                      <tr><td>3° de Preescolar</td><td>5 años</td><td>Prelectura, prematemáticas, autonomía</td></tr>
                    </tbody>
                  </table>
                </div>
                <small class="text-muted d-block mt-2">*Edades orientativas al 31 de diciembre del ciclo escolar.</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Áreas formativas -->
  <div class="container-xxl py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-puzzle-piece text-primary mb-3"></i>
            <h5>Psicomotricidad</h5>
            <p>Actividades para coordinación, equilibrio y esquema corporal.</p>
          </div></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-book text-primary mb-3"></i>
            <h5>Lenguaje</h5>
            <p>Estimulación del lenguaje oral y acercamiento a la lectoescritura.</p>
          </div></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-shapes text-primary mb-3"></i>
            <h5>Lógico-matemático</h5>
            <p>Clasificación, correspondencia, seriación y conteo.</p>
          </div></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="service-item text-center pt-3"><div class="p-4">
            <i class="fa fa-3x fa-heart text-primary mb-3"></i>
            <h5>Socioemocional</h5>
            <p>Autonomía, límites y habilidades para la convivencia.</p>
          </div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Requisitos -->
  <div id="requisitos" class="container-xxl py-5">
    <div class="container">
      <div class="text-center mb-4">
        <h6 class="section-title bg-white text-center text-primary px-3">Inscripciones</h6>
        <h2>Requisitos para Kinder</h2>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa fa-file-alt text-primary me-2"></i>Acta de nacimiento (copia)</li>
            <li class="list-group-item"><i class="fa fa-id-card text-primary me-2"></i>CURP del alumno</li>
            <li class="list-group-item"><i class="fa fa-syringe text-primary me-2"></i>Cartilla de vacunación</li>
            <li class="list-group-item"><i class="fa fa-home text-primary me-2"></i>Comprobante de domicilio</li>
            <li class="list-group-item"><i class="fa fa-user-shield text-primary me-2"></i>Identificación del padre/madre o tutor</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="accordion" id="faqKinder">
            <div class="accordion-item">
              <h2 class="accordion-header" id="q1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">¿Horario y periodo de adaptación?</button></h2>
              <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faqKinder"><div class="accordion-body">El periodo de adaptación se personaliza por alumno y familia. El horario y calendario se comunican al confirmar la inscripción.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">¿Hay uniforme y materiales?</button></h2>
              <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqKinder"><div class="accordion-body">El colegio indica lista de materiales y lineamientos de uniforme antes del inicio del ciclo.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">¿Programa de inglés?</button></h2>
              <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqKinder"><div class="accordion-body">Se trabaja una introducción al idioma acorde a la edad. Los detalles se confirman cada ciclo escolar.</div></div>
            </div>
          </div>
          <a href="inscripciones.php" class="btn btn-primary mt-4">Iniciar inscripción</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Lista de Útiles por Grado (Kinder) -->
<div id="utiles" class="container-xxl py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h6 class="section-title bg-white text-center text-primary px-3">Lista</h6>
      <h2>Útiles Escolares 2025–2026</h2>
      <p class="text-muted mb-0">Preescolar (1°, 2° y 3°)</p>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="pillsUtiles" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-primero-tab" data-bs-toggle="pill" data-bs-target="#pills-primero" type="button" role="tab">1er Grado</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-segundo-tab" data-bs-toggle="pill" data-bs-target="#pills-segundo" type="button" role="tab">2do Grado</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-tercero-tab" data-bs-toggle="pill" data-bs-target="#pills-tercero" type="button" role="tab">3er Grado</button>
      </li>
    </ul>

    <div class="tab-content" id="pillsUtilesContent">
      <!-- 1° de Preescolar -->
      <div class="tab-pane fade show active" id="pills-primero" role="tabpanel" aria-labelledby="pills-primero-tab">
        <div class="accordion" id="acordeonPrimero">
          <div class="accordion-item">
            <h2 class="accordion-header" id="h1u"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c1u" aria-expanded="true">Útiles escolares</button></h2>
            <div id="c1u" class="accordion-collapse collapse show" data-bs-parent="#acordeonPrimero">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuaderno grande cocido (100 hojas blancas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuaderno grande para Educación Cristiana (100 hojas blancas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 libro para colorear grueso educativo (evitar personajes de violencia)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 lápices No. 2 (Mirado o Dixon)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 lápices entrenadores triangulares</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 marcador para pizarrón (sugerido Expo)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 bolsa de abatelenguas de colores (20 piezas, anchos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 sacapuntas (uno para cada tipo de lápiz)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 borradores</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 pegamentos de barra gruesos</li>
                  <li><i class="fa fa-check text-primary me-2"></i>10 barritas de silicón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 hojas para enmicar tamaño carta</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajas de crayolas (1 gruesas y 1 delgadas, 24 c/u; Crayola o Carmen)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajitas de plastilina de diferentes colores (barritas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pinceles No. 8</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 tijeras entrenadora sin punta (para zurdos si aplica)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cartulinas blancas</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 papel bond</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 fólders tamaño carta con bolsita y botón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 frasco de 473 ml de pintura témpera marca Norma (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 botecito de diamantina (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande diamantado (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 block de papel construcción (50 piezas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 pegamento líquido de 225–250 g marca Bully</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel lustre (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel crepé (cualquier color)</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="h1o"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c1o">Otros útiles personales</button></h2>
            <div id="c1o" class="accordion-collapse collapse" data-bs-parent="#acordeonPrimero">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>2 cambios de ropa (invierno y verano) completos y con nombre</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 revista para recortar (con letras y dibujos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuento (NO personajes de Disney, se donará)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mochila grande (para cuadernos y suéter)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Loncherita (exclusiva para el lonche)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>100 conos de plástico para agua y botella con agua</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 paquetes de toallitas húmedas (100 c/u)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mandil de cuadros medianos color <strong>amarillo</strong> con nombre (uso diario, parte del uniforme)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mantelito de plástico (para comer)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Botellita de jabón líquido</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Periódico</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Caja para guardar materiales (colores, tijeras, pegamento, etc.)</li>
                </ul>
                <p class="text-muted mt-3"><strong>Nota:</strong> Libros y cuadernos forrados y rotulados con el nombre del niño(a). Paquete de libros en la cooperativa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2° de Preescolar -->
      <div class="tab-pane fade" id="pills-segundo" role="tabpanel" aria-labelledby="pills-segundo-tab">
        <div class="accordion" id="acordeonSegundo">
          <div class="accordion-item">
            <h2 class="accordion-header" id="h2u"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c2u" aria-expanded="true">Útiles escolares</button></h2>
            <div id="c2u" class="accordion-collapse collapse show" data-bs-parent="#acordeonSegundo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>2 cuadernos grandes cocidos (100 hojas blancas c/u)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuaderno grande para Educación Cristiana (100 hojas blancas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 libro para colorear grueso educativo (evitar personajes de violencia)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 lápices No. 2 (Mirado o Dixon)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 lápices entrenadores triangulares</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 pegamentos de barra gruesos</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 hojas para enmicar tamaño carta</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 marcador para pizarrón (sugerido Expo)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 bolsa de abatelenguas de colores (20 piezas, anchos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 sacapuntas (uno para cada tipo de lápiz)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 borradores</li>
                  <li><i class="fa fa-check text-primary me-2"></i>10 barritas de silicón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajas de crayolas (1 gruesas y 1 delgadas, 24 c/u; Crayola o Carmen)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajitas de plastilina de diferentes colores (barritas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pinceles No. 8</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 tijeras entrenadora sin punta (para zurdos si aplica)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cartulinas blancas</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 papel bond</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 fólders tamaño carta con bolsita y botón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 frasco de 473 ml de pintura témpera marca Norma (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 botecito de diamantina (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande diamantado (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 block de papel construcción (50 piezas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 pegamento líquido de 225–250 g marca Bully</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel lustre (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel crepé (cualquier color)</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="h2o"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2o">Otros útiles personales</button></h2>
            <div id="c2o" class="accordion-collapse collapse" data-bs-parent="#acordeonSegundo">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>2 cambios de ropa (invierno y verano) completos y con nombre</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 revista para recortar (con letras y dibujos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuento (NO personajes de Disney, se donará)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mochila grande (para cuadernos y suéter)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Loncherita (exclusiva para el lonche)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>100 conos de plástico para agua y botella con agua</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 paquetes de toallitas húmedas (100 c/u)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mandil de cuadros medianos color <strong>rojo</strong> con nombre (uso diario, parte del uniforme)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mantelito de plástico (para comer)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Botellita de jabón líquido</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Periódico</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Bolsa para guardar materiales (colores, tijeras, pegamento, etc.)</li>
                </ul>
                <p class="text-muted mt-3"><strong>Nota:</strong> Libros y cuadernos forrados y rotulados con el nombre del niño(a). Paquete de libros en la cooperativa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3° de Preescolar -->
      <div class="tab-pane fade" id="pills-tercero" role="tabpanel" aria-labelledby="pills-tercero-tab">
        <div class="accordion" id="acordeonTercero">
          <div class="accordion-item">
            <h2 class="accordion-header" id="h3u"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c3u" aria-expanded="true">Útiles escolares</button></h2>
            <div id="c3u" class="accordion-collapse collapse show" data-bs-parent="#acordeonTercero">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuaderno grande cocido (100 hojas blancas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuaderno grande para Educación Cristiana (100 hojas blancas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 libro para colorear grueso educativo (evitar personajes de violencia)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 lápices No. 2 (Mirado o Dixon)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 lápices entrenadores triangulares</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 marcador para pizarrón (sugerido Expo)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 bolsa de abatelenguas de colores (20 piezas, anchos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 sacapuntas (uno para cada tipo de lápiz)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 borradores</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 pegamentos de barra gruesos</li>
                  <li><i class="fa fa-check text-primary me-2"></i>10 barritas de silicón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 hojas para enmicar tamaño carta</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajas de crayolas (1 gruesas y 1 delgadas, 24 c/u; Crayola o Carmen)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cajitas de plastilina de diferentes colores (barritas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pinceles No. 8</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 tijeras entrenadora sin punta (para zurdos si aplica)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 cartulinas blancas</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 papel bond</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 fólders tamaño carta con bolsita y botón</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 frasco de 473 ml de pintura témpera marca Norma (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande diamantado (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 foami tamaño grande (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 block de papel construcción (50 piezas)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 pegamento líquido de 225–250 g marca Bully</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel lustre (cualquier color)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>2 pliegos de papel crepé (cualquier color)</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="h3o"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3o">Otros útiles personales</button></h2>
            <div id="c3o" class="accordion-collapse collapse" data-bs-parent="#acordeonTercero">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><i class="fa fa-check text-primary me-2"></i>2 cambios de ropa (invierno y verano) completos y con nombre</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 revista para recortar (con letras y dibujos)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>1 cuento (NO personajes de Disney, se donará)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mochila grande (para cuadernos y suéter)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Loncherita (exclusiva para el lonche)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>100 conos de plástico para agua y botella con agua</li>
                  <li><i class="fa fa-check text-primary me-2"></i>3 paquetes de toallitas húmedas (100 c/u)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mandil de cuadros medianos color <strong>azul</strong> con nombre (uso diario, parte del uniforme)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Mantelito de plástico (para comer)</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Botellita de jabón líquido</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Periódico</li>
                  <li><i class="fa fa-check text-primary me-2"></i>Caja para guardar materiales (colores, tijeras, pegamento, etc.)</li>
                </ul>
                <p class="text-muted mt-3"><strong>Nota:</strong> Libros y cuadernos forrados y rotulados con el nombre del niño(a). Paquete de libros en la cooperativa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fin 3° -->
    </div>
  </div>
</div>

  <!-- CTA contacto -->
  <div class="container-xxl py-5 bg-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-9"><h3 class="text-white mb-2">¿Te gustaría conocer nuestras aulas y metodología?</h3><p class="text-white-50 mb-0">Agenda una visita guiada y resuelve todas tus dudas.</p></div>
        <div class="col-lg-3 text-lg-end mt-3 mt-lg-0"><a href="contacto.html" class="btn btn-light">Agendar visita</a></div>
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
