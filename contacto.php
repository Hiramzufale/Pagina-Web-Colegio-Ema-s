<?php
// contacto.php – Colegio Emaús Hermosillo
// Página y backend en un solo archivo (PHP 7.4+)
// - Validación del lado del servidor
// - CSRF token
// - Honeypot anti‑bots
// - Ejemplo de envío con mail() y opción SMTP (PHPMailer)
// - Mensajes de éxito / error
// - Listo para integrarse con el template existente

@session_start();

// ====== CONFIGURACIÓN ======
$SITE_NAME        = 'Colegio Emaús Hermosillo';
$TO_EMAIL_PRIMARY = 'contacto@colegioemaus.mx';        // Cambiar por el correo oficial
$TO_EMAIL_CC      = 'admision@colegioemaus.mx';         // Opcional: copia
$FROM_EMAIL       = 'no-reply@colegioemaus.mx';         // Debe existir en su dominio
$RECAPTCHA_SITE   = ''; // v3 o v2 (opcional). Si lo activas, agrega script en el <head>
$RECAPTCHA_SECRET = '';

// ====== CSRF token ======
if (empty($_SESSION['csrf_contact'])) {
  $_SESSION['csrf_contact'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_contact'];

// ====== Rate limit simple: 1 envío/60s por sesión ======
$allow_submit = true;
$rate_msg = '';
if (!empty($_SESSION['last_submit_contact'])) {
  $seconds = time() - (int)$_SESSION['last_submit_contact'];
  if ($seconds < 60) {
    $allow_submit = false;
    $rate_msg = 'Por favor espera '.(60-$seconds).' segundos para enviar de nuevo.';
  }
}

// ====== Manejo POST ======
$alert = null; // ['type'=>'success'|'danger'|'warning', 'text'=>'...']
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 1) Validar CSRF
  if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf_contact'] ?? '', $_POST['csrf'])) {
    $alert = ['type'=>'danger','text'=>'Token inválido. Recarga la página e inténtalo de nuevo.'];
  } elseif (!$allow_submit) {
    $alert = ['type'=>'warning','text'=>$rate_msg];
  } else {
    // 2) Honeypot
    if (!empty($_POST['webpage'])) {
      $alert = ['type'=>'danger','text'=>'Detección de bot.'];
    } else {
      // 3) Recolectar y sanitizar
      $nombre    = trim((string)($_POST['nombre'] ?? ''));
      $email     = trim((string)($_POST['email'] ?? ''));
      $telefono  = trim((string)($_POST['telefono'] ?? ''));
      $nivel     = trim((string)($_POST['nivel'] ?? ''));
      $asunto    = trim((string)($_POST['asunto'] ?? ''));
      $mensaje   = trim((string)($_POST['mensaje'] ?? ''));
      $visita    = trim((string)($_POST['visita'] ?? '')); // fecha deseada (opcional)
      $horario   = trim((string)($_POST['horario'] ?? '')); // mañ/tarde
      $privacidad= isset($_POST['privacidad']) ? 'Aceptada' : 'No aceptada';

      // 4) Validaciones
      $errors = [];
      if ($nombre === '' || mb_strlen($nombre) < 3) $errors[] = 'El nombre es obligatorio (mín. 3 caracteres).';
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'El correo no es válido.';
      if ($telefono !== '' && !preg_match('/^[0-9 +().-]{7,20}$/', $telefono)) $errors[] = 'El teléfono no es válido.';
      if (!in_array($nivel, ['Kinder','Primaria','Secundaria','Preparatoria','Otro'], true)) $errors[] = 'Selecciona un nivel válido.';
      if ($asunto === '') $errors[] = 'El asunto es obligatorio.';
      if ($mensaje === '' || mb_strlen($mensaje) < 10) $errors[] = 'El mensaje es obligatorio (mín. 10 caracteres).';
      if ($privacidad !== 'Aceptada') $errors[] = 'Debes aceptar el Aviso de Privacidad.';

      // Truncamientos defensivos
      $nombre  = mb_substr($nombre, 0, 120);
      $asunto  = mb_substr($asunto, 0, 140);
      $mensaje = mb_substr($mensaje, 0, 5000);

      // 5) reCAPTCHA (opcional)
      if ($RECAPTCHA_SECRET && isset($_POST['g-recaptcha-response'])) {
        $token = $_POST['g-recaptcha-response'];
        // Sugerencia: validar vía curl; omitido para mantener el archivo autocontenible.
        // Deja la verificación real para tu entorno productivo.
      }

      if (!empty($errors)) {
        $alert = ['type'=>'danger','text'=>implode(' ', $errors)];
      } else {
        // 6) Armar correo
        $subject = "[Contacto Web] $SITE_NAME — $asunto";
        $body  = "Nombre: $nombre\n";
        $body .= "Correo: $email\n";
        $body .= "Teléfono: $telefono\n";
        $body .= "Nivel de interés: $nivel\n";
        $body .= "Fecha deseada de visita: $visita\n";
        $body .= "Horario preferido: $horario\n";
        $body .= "Privacidad: $privacidad\n";
        $body .= str_repeat('-', 40)."\n";
        $body .= "Mensaje:\n$mensaje\n";

        $headers = [];
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/plain; charset=UTF-8';
        $headers[] = 'From: '.$SITE_NAME.' <'.$FROM_EMAIL.'>';
        $headers[] = 'Reply-To: '.$nombre.' <'.$email.'>';
        if ($TO_EMAIL_CC) $headers[] = 'Cc: '.$TO_EMAIL_CC;
        $headers_str = implode("\r\n", $headers);

        // 7) Enviar (mail()) — Recomendado cambiar a SMTP (PHPMailer) en producción
        $ok = @mail($TO_EMAIL_PRIMARY, $subject, $body, $headers_str);

        if ($ok) {
          $_SESSION['last_submit_contact'] = time();
          $alert = ['type'=>'success','text'=>'¡Gracias por escribirnos! Tu mensaje fue enviado. Te contactaremos pronto.'];
          // Limpiar campos post envío
          $_POST = [];
        } else {
          $alert = ['type'=>'danger','text'=>'No pudimos enviar tu mensaje en este momento. Intenta más tarde o contáctanos por teléfono/WhatsApp.'];
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Contacto | Colegio Emaús Hermosillo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Contáctanos para informes, admisiones y visitas guiadas." name="description" />

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

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Overrides de marca -->
  <style>
    :root{
      --bs-primary:#0d21fd;
      --bs-secondary:#1c33c7;
      --bs-dark:#181d38;
      --bs-light:#f8f9fa;
    }
    .section-title{border-left:6px solid var(--bs-primary);padding-left:.5rem;border-radius:2px}
    .btn-primary{background-color:var(--bs-primary);border-color:var(--bs-primary)}
    .btn-primary:hover{background-color:var(--bs-secondary);border-color:var(--bs-secondary)}
    .form-floating>label{color:#6c757d}
    .required:after{content:' *'; color:#dc3545;}
    .contact-card{transition:transform .15s ease, box-shadow .15s ease}
    .contact-card:hover{transform:translateY(-2px);box-shadow:0 0.5rem 1rem rgba(0,0,0,.10)}
  </style>

  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <!-- Spinner -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width:3rem;height:3rem" role="status"><span class="sr-only">Cargando...</span></div>
  </div>

  <!-- Navbar (igual que el sitio) -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="img/logo-emaus.png" alt="Colegio Emaús" style="height:44px;width:auto" class="me-2"/>
      <h5 class="m-0 text-blue">Colegio Emaús</h5>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">Inicio</a>
        <a href="about.php" class="nav-item nav-link">Nosotros</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oferta Educativa</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="kinder.php" class="dropdown-item">Kinder</a>
            <a href="primaria.php" class="dropdown-item">Primaria</a>
            <a href="secundaria.php" class="dropdown-item">Secundaria</a>
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
        <a href="contacto.php" class="nav-item nav-link active">Contacto</a>
      </div>
      <a href="inscripciones.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscripciones<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>

  <!-- Header -->
  <div class="container-fluid bg-dark py-5 mb-5">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-8">
          <h1 class="text-white mb-2">Contáctanos</h1>
          <p class="text-white-50 mb-0">Informes, admisiones y visitas guiadas. ¡Estamos para ayudarte!</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0">
              <li class="breadcrumb-item"><a class="text-white-50" href="index.php">Inicio</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Contacto</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="container-xxl pb-5">
    <div class="container">

      <?php if ($alert): ?>
        <div class="alert alert-<?php echo htmlspecialchars($alert['type']); ?> alert-dismissible fade show" role="alert">
          <i class="bi bi-info-circle me-2"></i><?php echo htmlspecialchars($alert['text']); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="p-4 bg-light rounded contact-card h-100">
            <div class="d-flex align-items-center mb-3"><i class="bi bi-geo-alt fs-3 text-primary me-2"></i><h5 class="mb-0">Ubicación</h5></div>
            <p class="mb-0">Hermosillo, Sonora, México<br/>C.P. 00000</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light rounded contact-card h-100">
            <div class="d-flex align-items-center mb-3"><i class="bi bi-telephone fs-3 text-primary me-2"></i><h5 class="mb-0">Teléfono</h5></div>
            <p class="mb-2 mb-md-3"><a href="tel:+526620000000" class="link-dark text-decoration-none">(662) 000 0000</a></p>
            <a class="btn btn-sm btn-outline-primary" target="_blank" href="https://wa.me/526620000000?text=Hola%20me%20gustar%C3%ADa%20recibir%20informes%20sobre%20admisiones">WhatsApp</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light rounded contact-card h-100">
            <div class="d-flex align-items-center mb-3"><i class="bi bi-envelope fs-3 text-primary me-2"></i><h5 class="mb-0">Correo</h5></div>
            <p class="mb-2"><a href="mailto:contacto@colegioemaus.mx" class="link-dark text-decoration-none">contacto@colegioemaus.mx</a></p>
            <p class="mb-0 small text-muted">Atención de Lun‑Vie, 8:00 a 15:00 h</p>
          </div>
        </div>
      </div>

      <div class="row g-5 align-items-stretch">
        <!-- Formulario -->
        <div class="col-lg-7">
          <div class="p-4 p-md-5 bg-white border rounded-3 shadow-sm h-100">
            <h4 class="mb-3 section-title">Escríbenos</h4>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate id="contactForm">
              <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf); ?>" />
              <input type="text" name="webpage" class="d-none" tabindex="-1" autocomplete="off" /> <!-- honeypot -->

              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>" required>
                    <label for="nombre" class="required">Nombre completo</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@correo.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                    <label for="email" class="required">Correo electrónico</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="(662) 000 0000" value="<?php echo htmlspecialchars($_POST['telefono'] ?? ''); ?>">
                    <label for="telefono">Teléfono</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <select class="form-select" id="nivel" name="nivel" required>
                      <?php
                        $niveles = ['Kinder','Primaria','Secundaria','Preparatoria','Otro'];
                        $sel = $_POST['nivel'] ?? '';
                        foreach ($niveles as $n) {
                          $s = ($sel === $n) ? 'selected' : '';
                          echo '<option '.$s.' value="'.htmlspecialchars($n).'">'.htmlspecialchars($n)."</option>";
                        }
                      ?>
                    </select>
                    <label for="nivel" class="required">Nivel de interés</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="visita" name="visita" value="<?php echo htmlspecialchars($_POST['visita'] ?? ''); ?>">
                    <label for="visita">Fecha deseada de visita</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <select class="form-select" id="horario" name="horario">
                      <?php
                        $horarios = ['Mañana','Mediodía','Tarde'];
                        $selh = $_POST['horario'] ?? '';
                        echo '<option value="">Sin preferencia</option>';
                        foreach ($horarios as $h) {
                          $s = ($selh === $h) ? 'selected' : '';
                          echo '<option '.$s.' value="'.htmlspecialchars($h).'">'.htmlspecialchars($h)."</option>";
                        }
                      ?>
                    </select>
                    <label for="horario">Horario preferido</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" value="<?php echo htmlspecialchars($_POST['asunto'] ?? ''); ?>" required>
                    <label for="asunto" class="required">Asunto</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Escribe tu mensaje" id="mensaje" name="mensaje" style="height: 150px" required><?php echo htmlspecialchars($_POST['mensaje'] ?? ''); ?></textarea>
                    <label for="mensaje" class="required">Mensaje</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="privacidad" name="privacidad" <?php echo isset($_POST['privacidad']) ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="privacidad">
                      Acepto el <a href="#" target="_blank">Aviso de Privacidad</a>.
                    </label>
                  </div>
                </div>
                <div class="col-12 d-flex gap-2">
                  <button class="btn btn-primary px-4" type="submit" <?php echo !$allow_submit ? 'disabled' : ''; ?>>Enviar</button>
                  <a class="btn btn-outline-primary" id="btnWhatsapp" target="_blank" href="#">Enviar por WhatsApp</a>
                </div>
                <?php if (!$allow_submit): ?>
                  <div class="col-12"><small class="text-muted"><?php echo htmlspecialchars($rate_msg); ?></small></div>
                <?php endif; ?>
              </div>
            </form>
          </div>
        </div>

        <!-- Mapa / Info adicional -->
        <div class="col-lg-5">
          <div class="h-100 border rounded-3 overflow-hidden shadow-sm">
            <iframe title="Mapa Colegio Emaús" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d0!2d-111.0!3d29.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1680000000000" width="100%" height="100%" style="min-height:520px;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="bg-light p-3 mt-3 rounded-3">
            <h6 class="mb-1">Horarios de atención</h6>
            <p class="mb-0 small">Lunes a Viernes: 8:00 – 15:00 h</p>
          </div>
        </div>
      </div>

      <!-- FAQ corto -->
      <div class="row mt-5">
        <div class="col-lg-10">
          <h5 class="section-title">Preguntas frecuentes</h5>
          <div class="accordion" id="faqContact">
            <div class="accordion-item">
              <h2 class="accordion-header" id="q1"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1">¿Qué documentos necesito para inscribir?</button></h2>
              <div id="a1" class="accordion-collapse collapse" data-bs-parent="#faqContact"><div class="accordion-body">Acta de nacimiento, CURP, boleta del grado anterior, identificación del tutor y comprobante de domicilio. Para detalles, visita <a href="inscripciones.php">Inscripciones</a>.</div></div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">¿Puedo agendar una visita guiada?</button></h2>
              <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqContact"><div class="accordion-body">Sí, selecciona la <em>Fecha deseada de visita</em> en el formulario y nos coordinamos contigo.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer (igual que el sitio) -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6">
          <h4 class="text-white mb-3"><?php echo htmlspecialchars($SITE_NAME); ?></h4>
          <p>Formamos estudiantes íntegros y competentes con una propuesta educativa centrada en valores.</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4 class="text-white mb-3">Contacto</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hermosillo, Sonora</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(662) 000 0000</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo htmlspecialchars($TO_EMAIL_PRIMARY); ?></p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4 class="text-white mb-3">Boletín</h4>
          <p>Recibe noticias y fechas importantes.</p>
          <div class="position-relative mx-auto" style="max-width:400px;">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Tu correo" />
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Suscribirme</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <span class="border-bottom"><?php echo htmlspecialchars($SITE_NAME); ?></span>, Todos los derechos reservados.
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

  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script>
    // Spinner hide
    (function(){
      var spinner = document.getElementById('spinner');
      if(spinner){ setTimeout(()=> spinner.classList.remove('show'), 200); }
    })();

    // Construir mensaje de WhatsApp desde el formulario
    const btnWa = document.getElementById('btnWhatsapp');
    const form  = document.getElementById('contactForm');
    const waPhone = '526620000000'; // Número en formato internacional sin +
    function buildWa(){
      const nombre  = document.getElementById('nombre').value.trim();
      const email   = document.getElementById('email').value.trim();
      const tel     = document.getElementById('telefono').value.trim();
      const nivel   = document.getElementById('nivel').value;
      const asunto  = document.getElementById('asunto').value.trim();
      const visita  = document.getElementById('visita').value;
      const horario = document.getElementById('horario').value;
      const msg     = document.getElementById('mensaje').value.trim();

      let text = `Hola, me gustaría recibir informes.\n`+
                 `Nombre: ${nombre}\n`+
                 `Correo: ${email}\n`+
                 `Teléfono: ${tel}\n`+
                 `Nivel: ${nivel}\n`+
                 `Asunto: ${asunto}\n`+
                 `Visita: ${visita||'N/A'} (${horario||'Sin preferencia'})\n`+
                 `Mensaje: ${msg}`;
      const url = `https://wa.me/${waPhone}?text=${encodeURIComponent(text)}`;
      btnWa.href = url;
    }
    if (btnWa) {
      btnWa.addEventListener('click', buildWa);
      form && form.addEventListener('input', buildWa);
      buildWa();
    }

    // Validación front (Bootstrap)
    (function(){
      const form = document.getElementById('contactForm');
      form && form.addEventListener('submit', function(e){
        if (!form.checkValidity()) {
          e.preventDefault();
          e.stopPropagation();
        }
        form.classList.add('was-validated');
      });
    })();
  </script>

  <!-- Template main.js si aplica -->
  <script src="js/main.js"></script>
</body>
</html>
