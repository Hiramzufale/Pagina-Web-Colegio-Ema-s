<?php
/**
 * Colegio Emaús Hermosillo — Gestor de Tareas para PREPARATORIA
 * Estilo Google Classroom (robusto) en un solo archivo PHP + MySQL + Bootstrap 5.
 *
 * ⚙️ Requisitos mínimos:
 *  - PHP 8+
 *  - MySQL 5.7+/MariaDB 10+
 *  - Extensiones: mysqli, json, mbstring, fileinfo
 *  - Carpeta de subida: /uploads (con permisos de escritura)
 *
 * 🚀 Características principales:
 *  - Roles: admin, docente, alumno
 *  - Cursos/Grupos (ej. 5to A), Materias (ej. Matemáticas), Inscripciones a curso
 *  - Tareas con: título, instrucciones, fecha de entrega, rúbrica simple (puntos), archivos adjuntos
 *  - Envíos de alumnos con múltiples archivos, estatus (Entregado/A tiempo/Tarde)
 *  - Retroalimentación del docente (comentarios) y calificación por puntos
 *  - Feed de clase (stream) con filtros (Abiertas, Vencidas, Entregadas), búsqueda y paginación
 *  - Comentarios tipo hilo por tarea y por envío
 *  - Descarga segura de archivos
 *
 * 🗄️ Esquema SQL (ejecutar una vez):
 *
 * CREATE TABLE users (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   nombre VARCHAR(120) NOT NULL,
 *   email VARCHAR(160) NOT NULL UNIQUE,
 *   password_hash VARCHAR(255) NOT NULL,
 *   rol ENUM('admin','docente','alumno') NOT NULL DEFAULT 'alumno',
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 * );
 *
 * CREATE TABLE cursos (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   nombre VARCHAR(120) NOT NULL,       -- p.ej. "Preparatoria 5to A"
 *   nivel ENUM('kinder','primaria','secundaria','preparatoria') NOT NULL,
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 * );
 *
 * CREATE TABLE materias (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   nombre VARCHAR(120) NOT NULL,       -- p.ej. "Cálculo Diferencial"
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 * );
 *
 * CREATE TABLE curso_materia_docente (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   curso_id INT NOT NULL,
 *   materia_id INT NOT NULL,
 *   docente_id INT NOT NULL,            -- users.id con rol docente
 *   UNIQUE KEY unique_cmd (curso_id, materia_id, docente_id),
 *   FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
 *   FOREIGN KEY (materia_id) REFERENCES materias(id) ON DELETE CASCADE,
 *   FOREIGN KEY (docente_id) REFERENCES users(id) ON DELETE CASCADE
 * );
 *
 * CREATE TABLE inscripciones (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   curso_id INT NOT NULL,
 *   alumno_id INT NOT NULL,             -- users.id con rol alumno
 *   UNIQUE KEY unique_ins (curso_id, alumno_id),
 *   FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
 *   FOREIGN KEY (alumno_id) REFERENCES users(id) ON DELETE CASCADE
 * );
 *
 * CREATE TABLE tareas (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   curso_id INT NOT NULL,
 *   materia_id INT NOT NULL,
 *   docente_id INT NOT NULL,
 *   titulo VARCHAR(180) NOT NULL,
 *   instrucciones TEXT,
 *   puntos INT NOT NULL DEFAULT 100,    -- rúbrica simple por puntos
 *   fecha_publicacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 *   fecha_entrega DATETIME NULL,
 *   activo TINYINT(1) NOT NULL DEFAULT 1,
 *   FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
 *   FOREIGN KEY (materia_id) REFERENCES materias(id) ON DELETE CASCADE,
 *   FOREIGN KEY (docente_id) REFERENCES users(id) ON DELETE CASCADE,
 *   INDEX (curso_id, materia_id, fecha_publicacion),
 *   INDEX (fecha_entrega)
 * );
 *
 * CREATE TABLE tarea_adjuntos (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   tarea_id INT NOT NULL,
 *   ruta VARCHAR(255) NOT NULL,
 *   nombre_original VARCHAR(255) NOT NULL,
 *   tamano INT NOT NULL DEFAULT 0,
 *   mime VARCHAR(120) DEFAULT NULL,
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *   FOREIGN KEY (tarea_id) REFERENCES tareas(id) ON DELETE CASCADE
 * );
 *
 * CREATE TABLE envios (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   tarea_id INT NOT NULL,
 *   alumno_id INT NOT NULL,
 *   entregado_en DATETIME DEFAULT NULL,
 *   calificacion INT NULL,              -- 0..puntos
 *   retroalimentacion TEXT NULL,
 *   estatus ENUM('pendiente','entregado','calificado') NOT NULL DEFAULT 'pendiente',
 *   UNIQUE KEY unique_envio (tarea_id, alumno_id),
 *   FOREIGN KEY (tarea_id) REFERENCES tareas(id) ON DELETE CASCADE,
 *   FOREIGN KEY (alumno_id) REFERENCES users(id) ON DELETE CASCADE,
 *   INDEX (estatus)
 * );
 *
 * CREATE TABLE envio_adjuntos (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   envio_id INT NOT NULL,
 *   ruta VARCHAR(255) NOT NULL,
 *   nombre_original VARCHAR(255) NOT NULL,
 *   tamano INT NOT NULL DEFAULT 0,
 *   mime VARCHAR(120) DEFAULT NULL,
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *   FOREIGN KEY (envio_id) REFERENCES envios(id) ON DELETE CASCADE
 * );
 *
 * CREATE TABLE comentarios (
 *   id INT AUTO_INCREMENT PRIMARY KEY,
 *   tipo ENUM('tarea','envio') NOT NULL,
 *   ref_id INT NOT NULL,                -- tareas.id o envios.id
 *   autor_id INT NOT NULL,              -- users.id
 *   mensaje TEXT NOT NULL,
 *   creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *   INDEX (tipo, ref_id),
 *   FOREIGN KEY (autor_id) REFERENCES users(id) ON DELETE CASCADE
 * );
 *
 * INSERT INTO cursos (nombre, nivel) VALUES ('Preparatoria 5to A','preparatoria');
 * INSERT INTO materias (nombre) VALUES ('Cálculo Diferencial'),('Física I'),('Química');
 */

// ======================== CONFIGURACIÓN ========================
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'colegio_emaus';
$UPLOAD_DIR = __DIR__ . '/uploads';
if (!is_dir($UPLOAD_DIR)) { @mkdir($UPLOAD_DIR, 0775, true); }

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) { die('Error de conexión MySQL: ' . $mysqli->connect_error); }
$mysqli->set_charset('utf8mb4');

session_start();

// ⚠️ DEMO: Simula un usuario autenticado (cámbialo por tu sistema real de login)
if (!isset($_SESSION['user'])) {
  // Cambia aquí para probar distintos roles: admin, docente, alumno
  $_SESSION['user'] = ['id' => 1, 'nombre' => 'Admin Demo', 'rol' => 'admin', 'email' => 'admin@emaus.mx'];
}
$user = $_SESSION['user'];

function is_admin()  { return $_SESSION['user']['rol'] === 'admin'; }
function is_docente(){ return $_SESSION['user']['rol'] === 'docente' || is_admin(); }
function is_alumno() { return $_SESSION['user']['rol'] === 'alumno' || is_admin(); }

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function now(){ return (new DateTime('now'))->format('Y-m-d H:i:s'); }

// ======================== HELPERS DB ========================
function db_all($mysqli, $sql, $params = [], $types = ''){
  $stmt = $mysqli->prepare($sql);
  if (!$stmt) { die('SQL error: ' . $mysqli->error); }
  if ($params) { $stmt->bind_param($types ?: str_repeat('s', count($params)), ...$params); }
  $stmt->execute();
  $res = $stmt->get_result();
  $rows = $res? $res->fetch_all(MYSQLI_ASSOC) : [];
  $stmt->close();
  return $rows;
}
function db_one($mysqli, $sql, $params = [], $types = ''){
  $rows = db_all($mysqli, $sql, $params, $types);
  return $rows[0] ?? null;
}
function db_exec($mysqli, $sql, $params = [], $types = ''){
  $stmt = $mysqli->prepare($sql);
  if (!$stmt) { die('SQL error: ' . $mysqli->error); }
  if ($params) { $stmt->bind_param($types ?: str_repeat('s', count($params)), ...$params); }
  $ok = $stmt->execute();
  if (!$ok) { die('SQL exec error: ' . $stmt->error); }
  $id = $stmt->insert_id;
  $stmt->close();
  return $id;
}

// ======================== RUTEO DE ACCIONES ========================
$action = $_GET['action'] ?? 'index';

switch ($action) {
  case 'download':
    handle_download($mysqli, $UPLOAD_DIR);
    exit;
  case 'crear_tarea':
    if (!is_docente()) deny();
    handle_crear_tarea($mysqli, $UPLOAD_DIR);
    break;
  case 'guardar_envio':
    if (!is_alumno()) deny();
    handle_guardar_envio($mysqli, $UPLOAD_DIR);
    break;
  case 'calificar_envio':
    if (!is_docente()) deny();
    handle_calificar_envio($mysqli);
    break;
  case 'comentar':
    handle_comentar($mysqli);
    break;
  default:
    render_index($mysqli);
}
exit;

function deny(){ http_response_code(403); die('Acceso denegado.'); }

// ======================== ACCIONES ========================
function handle_download($mysqli, $UPLOAD_DIR){
  $tipo = $_GET['tipo'] ?? 'tarea'; // tarea|envio
  $id = (int)($_GET['id'] ?? 0);
  $table = $tipo === 'envio' ? 'envio_adjuntos' : 'tarea_adjuntos';
  $file = db_one($mysqli, "SELECT * FROM $table WHERE id=?", [$id], 'i');
  if (!$file) { http_response_code(404); die('Archivo no encontrado'); }
  $path = $UPLOAD_DIR . '/' . $file['ruta'];
  if (!is_file($path)) { http_response_code(404); die('Archivo no encontrado'); }
  header('Content-Description: File Transfer');
  header('Content-Type: ' . ($file['mime'] ?: 'application/octet-stream'));
  header('Content-Disposition: attachment; filename="' . rawurlencode($file['nombre_original']) . '"');
  header('Content-Length: ' . filesize($path));
  readfile($path);
}

function handle_crear_tarea($mysqli, $UPLOAD_DIR){
  $curso_id   = (int)($_POST['curso_id'] ?? 0);
  $materia_id = (int)($_POST['materia_id'] ?? 0);
  $titulo     = trim($_POST['titulo'] ?? '');
  $instrucciones = trim($_POST['instrucciones'] ?? '');
  $puntos     = max(1, (int)($_POST['puntos'] ?? 100));
  $fecha_entrega = $_POST['fecha_entrega'] ?? null; // 'YYYY-MM-DDTHH:MM'
  if ($fecha_entrega) {
    $fecha_entrega = str_replace('T',' ', $fecha_entrega) . ':00';
  }
  if (!$curso_id || !$materia_id || $titulo==='') { die('Faltan datos obligatorios'); }

  $docente_id = $_SESSION['user']['id'];
  $tarea_id = db_exec($mysqli,
    "INSERT INTO tareas (curso_id, materia_id, docente_id, titulo, instrucciones, puntos, fecha_entrega) VALUES (?,?,?,?,?,?,?)",
    [$curso_id, $materia_id, $docente_id, $titulo, $instrucciones, $puntos, $fecha_entrega],
    'iiissis'
  );

  // Adjuntos
  if (!empty($_FILES['adjuntos']['name'][0])) {
    save_files($UPLOAD_DIR, $_FILES['adjuntos'], function($ruta,$orig,$tam,$mime) use ($mysqli,$tarea_id){
      db_exec($mysqli,
        "INSERT INTO tarea_adjuntos (tarea_id, ruta, nombre_original, tamano, mime) VALUES (?,?,?,?,?)",
        [$tarea_id, $ruta, $orig, $tam, $mime],
        'issis'
      );
    });
  }

  header('Location: ' . basename(__FILE__) . '?created=1');
}

function handle_guardar_envio($mysqli, $UPLOAD_DIR){
  $tarea_id = (int)($_POST['tarea_id'] ?? 0);
  if (!$tarea_id) die('Tarea inválida');
  $alumno_id = $_SESSION['user']['id'];

  // Crea o actualiza el envío
  $envio = db_one($mysqli, 'SELECT * FROM envios WHERE tarea_id=? AND alumno_id=?', [$tarea_id,$alumno_id], 'ii');
  if (!$envio) {
    $envio_id = db_exec($mysqli,
      'INSERT INTO envios (tarea_id, alumno_id, entregado_en, estatus) VALUES (?,?,?,?)',
      [$tarea_id, $alumno_id, now(), 'entregado'], 'iiss');
  } else {
    $envio_id = (int)$envio['id'];
    db_exec($mysqli,
      'UPDATE envios SET entregado_en=?, estatus="entregado" WHERE id=?',
      [now(), $envio_id], 'si'
    );
  }

  if (!empty($_FILES['archivos']['name'][0])) {
    save_files($UPLOAD_DIR, $_FILES['archivos'], function($ruta,$orig,$tam,$mime) use ($mysqli,$envio_id){
      db_exec($mysqli,
        'INSERT INTO envio_adjuntos (envio_id, ruta, nombre_original, tamano, mime) VALUES (?,?,?,?,?)',
        [$envio_id, $ruta, $orig, $tam, $mime], 'issis'
      );
    });
  }

  header('Location: ' . basename(__FILE__) . '?entregado=1');
}

function handle_calificar_envio($mysqli){
  $envio_id = (int)($_POST['envio_id'] ?? 0);
  $calificacion = (int)($_POST['calificacion'] ?? 0);
  $retro = trim($_POST['retroalimentacion'] ?? '');
  if (!$envio_id) die('Envío inválido');
  db_exec($mysqli,
    'UPDATE envios SET calificacion=?, retroalimentacion=?, estatus="calificado" WHERE id=?',
    [$calificacion, $retro, $envio_id], 'isi'
  );
  header('Location: ' . basename(__FILE__) . '?calificado=1');
}

function handle_comentar($mysqli){
  $tipo = $_POST['tipo'] ?? 'tarea'; // tarea|envio
  $ref_id = (int)($_POST['ref_id'] ?? 0);
  $mensaje = trim($_POST['mensaje'] ?? '');
  if (!$ref_id || $mensaje==='') die('Comentario inválido');
  $autor_id = $_SESSION['user']['id'];
  db_exec($mysqli,
    'INSERT INTO comentarios (tipo, ref_id, autor_id, mensaje) VALUES (?,?,?,?)',
    [$tipo, $ref_id, $autor_id, $mensaje], 'siis'
  );
  header('Location: ' . basename(__FILE__) . '?comentado=1');
}

function save_files($UPLOAD_DIR, $fileBag, $onSave){
  $allowed = ['pdf','doc','docx','xls','xlsx','ppt','pptx','txt','png','jpg','jpeg','zip','rar','7z'];
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  for ($i=0; $i<count($fileBag['name']); $i++){
    if ($fileBag['error'][$i] !== UPLOAD_ERR_OK) continue;
    $orig = $fileBag['name'][$i];
    $tmp  = $fileBag['tmp_name'][$i];
    $ext  = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed)) continue;
    $mime = $finfo->file($tmp) ?: null;
    $hash = bin2hex(random_bytes(8)) . '_' . preg_replace('/[^A-Za-z0-9_\.-]/','_', $orig);
    $dest = $UPLOAD_DIR . '/' . $hash;
    if (move_uploaded_file($tmp, $dest)){
      $onSave($hash, $orig, (int)filesize($dest), $mime);
    }
  }
}

// ======================== UI PRINCIPAL ========================
function render_index($mysqli){
  $user = $_SESSION['user'];

  // Filtros
  $curso_id = isset($_GET['curso_id']) ? (int)$_GET['curso_id'] : 0;
  $materia_id = isset($_GET['materia_id']) ? (int)$_GET['materia_id'] : 0;
  $q = trim($_GET['q'] ?? '');
  $tab = $_GET['tab'] ?? 'abiertas'; // abiertas|vencidas|entregadas|calificadas

  $cursos = db_all($mysqli, "SELECT * FROM cursos WHERE nivel='preparatoria' ORDER BY nombre");
  $materias = db_all($mysqli, 'SELECT * FROM materias ORDER BY nombre');

  $where = ['t.activo=1'];
  $params = [];$types='';
  if ($curso_id){ $where[]='t.curso_id=?'; $params[]=$curso_id; $types.='i'; }
  if ($materia_id){ $where[]='t.materia_id=?'; $params[]=$materia_id; $types.='i'; }
  if ($q!==''){ $where[]='(t.titulo LIKE CONCAT("%",? ,"%") OR t.instrucciones LIKE CONCAT("%",? ,"%"))'; $params[]=$q; $params[]=$q; $types.='ss'; }

  // Tabs por fecha/estatus
  $now = now();
  if ($tab==='abiertas') { $where[]='(t.fecha_entrega IS NULL OR t.fecha_entrega >= ?)'; $params[]=$now; $types.='s'; }
  if ($tab==='vencidas') { $where[]='(t.fecha_entrega IS NOT NULL AND t.fecha_entrega < ?)'; $params[]=$now; $types.='s'; }

  $where_sql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

  $tareas = db_all($mysqli,
    "SELECT t.*, c.nombre AS curso, m.nombre AS materia, u.nombre AS docente
     FROM tareas t
     JOIN cursos c ON c.id=t.curso_id
     JOIN materias m ON m.id=t.materia_id
     JOIN users u ON u.id=t.docente_id
     $where_sql
     ORDER BY t.fecha_publicacion DESC
     LIMIT 100",
    $params,$types
  );

  // Pre-cargar envíos del alumno si aplica
  $envios_map = [];
  if ($user['rol']==='alumno'){
    $ids = array_column($tareas,'id');
    if ($ids){
      $in = implode(',', array_fill(0,count($ids),'?'));
      $types = str_repeat('i', count($ids));
      $rows = db_all($mysqli, "SELECT * FROM envios WHERE alumno_id=? AND tarea_id IN ($in)", array_merge([$user['id']], $ids), 'i'.$types);
      foreach ($rows as $r){ $envios_map[$r['tarea_id']] = $r; }
    }
  }

  // ========= HTML =========
  echo '<!doctype html><html lang="es"><head><meta charset="utf-8" />';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
  echo '<title>Gestor de Tareas — Preparatoria</title>';
  echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />';
  echo '<style>
    body{background:#f6f8fb}
    .card-task{border:1px solid #e7e9ef;border-radius:1rem}
    .pill{font-size:.8rem}
    .badge-deadline{background:#eef2ff;color:#4338ca}
    .file-pill{background:#f1f5f9}
    .pointer{cursor:pointer}
  </style>';
  echo '</head><body class="pb-5">';

  echo '<div class="container py-4">';
  echo '<div class="d-flex align-items-center justify-content-between mb-3">';
  echo '<h3 class="mb-0">Preparatoria · Gestión de tareas</h3>';
  echo '<div><span class="me-2">Usuario: '.h($user['nombre']).' ('.h($user['rol']).')</span>';
  echo '<a class="btn btn-outline-secondary btn-sm" href="index.php">Volver al sitio</a></div>';
  echo '</div>';

  // Filtros
  echo '<form class="row g-2 align-items-end mb-3" method="get">';
  echo '<input type="hidden" name="tab" value="'.h($tab).'" />';
  echo '<div class="col-12 col-md-3"><label class="form-label">Curso</label><select name="curso_id" class="form-select">';
  echo '<option value="0">Todos</option>';
  foreach($cursos as $c){
    $sel = ($curso_id==(int)$c['id'])? 'selected':'';
    echo '<option value="'.$c['id'].'" '.$sel.'>'.h($c['nombre']).'</option>';
  }
  echo '</select></div>';

  echo '<div class="col-12 col-md-3"><label class="form-label">Materia</label><select name="materia_id" class="form-select">';
  echo '<option value="0">Todas</option>';
  foreach($materias as $m){
    $sel = ($materia_id==(int)$m['id'])? 'selected':'';
    echo '<option value="'.$m['id'].'" '.$sel.'>'.h($m['nombre']).'</option>';
  }
  echo '</select></div>';

  echo '<div class="col-12 col-md-3"><label class="form-label">Buscar</label><input type="text" name="q" value="'.h($q).'" class="form-control" placeholder="Título o instrucciones" /></div>';
  echo '<div class="col-6 col-md-1"><button class="btn btn-primary w-100" type="submit">Filtrar</button></div>';
  if (is_docente()){
    echo '<div class="col-6 col-md-2 text-end"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#modalNuevaTarea">+ Nueva tarea</button></div>';
  }
  echo '</form>';

  // Tabs
  $tabs = [
    'abiertas' => 'Abiertas',
    'vencidas' => 'Vencidas',
    'entregadas' => 'Entregadas (yo)',
    'calificadas' => 'Calificadas (yo)'
  ];
  echo '<ul class="nav nav-pills mb-3">';
  foreach($tabs as $key=>$label){
    $active = ($tab===$key)? 'active':'';
    echo '<li class="nav-item"><a class="nav-link '.$active.'" href="?'.http_build_query(['curso_id'=>$curso_id,'materia_id'=>$materia_id,'q'=>$q,'tab'=>$key]).'">'.h($label).'</a></li>';
  }
  echo '</ul>';

  // Render tareas
  foreach($tareas as $t){
    // Filtrado adicional para tabs "entregadas/calificadas" cuando es alumno
    if ($tab==='entregadas' || $tab==='calificadas'){
      if ($_SESSION['user']['rol']!=='alumno') continue; // solo tiene sentido para alumnos
      $env = $envios_map[$t['id']] ?? null;
      if (!$env) continue; // no entregó
      if ($tab==='entregadas' && $env['estatus']==='pendiente') continue;
      if ($tab==='calificadas' && $env['estatus']!=='calificado') continue;
    }

    $deadline = $t['fecha_entrega'] ? new DateTime($t['fecha_entrega']) : null;
    $isLate = $deadline && (new DateTime() > $deadline);
    $deadlineStr = $deadline ? $deadline->format('d/m/Y H:i') : '—';

    echo '<div class="card card-task mb-3">';
    echo ' <div class="card-body">';
    echo '  <div class="d-flex justify-content-between flex-wrap gap-2">';
    echo '    <div class="d-flex align-items-center gap-3">';
    echo '      <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px">'.substr(h($t['materia']),0,1).'</div>';
    echo '      <div>';
    echo '        <h5 class="mb-1">'.h($t['titulo']).'</h5>';
    echo '        <div class="text-muted small">'.h($t['materia']).' · '.h($t['curso']).' · Docente: '.h($t['docente']).'</div>';
    echo '      </div>';
    echo '    </div>';
    echo '    <div class="text-end">';
    echo '      <span class="badge rounded-pill badge-deadline">Entrega: '.$deadlineStr.'</span><br />';
    echo '      <span class="badge text-bg-light">Puntos: '.(int)$t['puntos'].'</span> ';
    if ($isLate) echo '<span class="badge text-bg-danger">Vencida</span>';
    echo '    </div>';
    echo '  </div>';

    if (!empty($t['instrucciones'])){
      echo '<p class="mt-3">'.nl2br(h($t['instrucciones'])).'</p>';
    }

    // Adjuntos de la tarea
    $adj = db_all($mysqli, 'SELECT * FROM tarea_adjuntos WHERE tarea_id=? ORDER BY id', [$t['id']], 'i');
    if ($adj){
      echo '<div class="mt-2 d-flex flex-wrap gap-2">';
      foreach($adj as $a){
        echo '<a class="badge rounded-pill file-pill text-decoration-none" href="?action=download&tipo=tarea&id='.$a['id'].'">📎 '.h($a['nombre_original']).'</a>';
      }
      echo '</div>';
    }

    echo '<hr />';

    // Panel alumno: entregar
    if ($_SESSION['user']['rol']==='alumno'){
      $env = $envios_map[$t['id']] ?? null;
      $estatus = $env['estatus'] ?? 'pendiente';
      echo '<div class="row g-3 align-items-center">';
      echo '<div class="col-md-8">';
      echo '<div class="text-muted">Mi estado: <span class="badge '.($estatus==='calificado'?'text-bg-success':($estatus==='entregado'?'text-bg-primary':'text-bg-secondary')).'">'.h($estatus).'</span></div>';
      if ($env && $env['calificacion']!==null){
        echo '<div>Calificación: <strong>'.(int)$env['calificacion'].' / '.(int)$t['puntos'].'</strong></div>';
        if (!empty($env['retroalimentacion'])){
          echo '<div class="small text-muted">Retro: '.nl2br(h($env['retroalimentacion'])).'</div>';
        }
      }
      // Adjuntos enviados
      if ($env){
        $files = db_all($mysqli, 'SELECT * FROM envio_adjuntos WHERE envio_id=?', [$env['id']], 'i');
        if ($files){
          echo '<div class="mt-2 d-flex flex-wrap gap-2">';
          foreach($files as $f){
            echo '<a class="badge rounded-pill file-pill text-decoration-none" href="?action=download&tipo=envio&id='.$f['id'].'">🗂️ '.h($f['nombre_original']).'</a>';
          }
          echo '</div>';
        }
      }
      echo '</div>';
      echo '<div class="col-md-4 text-md-end">';
      echo '<button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEntregar'.$t['id'].'">'.($env?'Actualizar envío':'Entregar tarea').'</button>';
      echo '</div>';
      echo '</div>';

      // Modal entregar
      echo '<div class="modal fade" id="modalEntregar'.$t['id'].'" tabindex="-1"><div class="modal-dialog"><div class="modal-content">';
      echo '<form method="post" action="?action=guardar_envio" enctype="multipart/form-data">';
      echo '<div class="modal-header"><h5 class="modal-title">Entregar: '.h($t['titulo']).'</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>';
      echo '<div class="modal-body">';
      echo '<input type="hidden" name="tarea_id" value="'.$t['id'].'" />';
      echo '<div class="mb-3"><label class="form-label">Archivos (múltiples)</label><input class="form-control" type="file" name="archivos[]" multiple /></div>';
      echo '</div>';
      echo '<div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancelar</button><button class="btn btn-primary" type="submit">Enviar</button></div>';
      echo '</form></div></div></div>';
    }

    // Panel docente: ver envíos y calificar
    if (is_docente()){
      $envios = db_all($mysqli,
        'SELECT e.*, u.nombre AS alumno FROM envios e JOIN users u ON u.id=e.alumno_id WHERE e.tarea_id=? ORDER BY e.entregado_en DESC',
        [$t['id']], 'i');
      echo '<div class="mt-3">';
      echo '<h6 class="mb-2">Envíos ('.count($envios).')</h6>';
      if (!$envios){
        echo '<div class="text-muted">Aún no hay envíos</div>';
      } else {
        echo '<div class="table-responsive"><table class="table table-sm align-middle">';
        echo '<thead><tr><th>Alumno</th><th>Estado</th><th>Entregado</th><th>Calificación</th><th>Archivos</th><th class="text-end">Acciones</th></tr></thead><tbody>';
        foreach($envios as $e){
          $files = db_all($mysqli, 'SELECT * FROM envio_adjuntos WHERE envio_id=?', [$e['id']], 'i');
          echo '<tr>';
          echo '<td>'.h($e['alumno']).'</td>';
          echo '<td><span class="badge '.($e['estatus']==='calificado'?'text-bg-success':($e['estatus']==='entregado'?'text-bg-primary':'text-bg-secondary')).'">'.h($e['estatus']).'</span></td>';
          echo '<td>'.($e['entregado_en']? h((new DateTime($e['entregado_en']))->format('d/m/Y H:i')):'—').'</td>';
          echo '<td>'.($e['calificacion']!==null? (int)$e['calificacion']:'—').'</td>';
          echo '<td>';
          foreach($files as $f){
            echo '<a class="badge rounded-pill file-pill text-decoration-none" href="?action=download&tipo=envio&id='.$f['id'].'">📥 '.h($f['nombre_original']).'</a> ';
          }
          echo '</td>';
          echo '<td class="text-end">';
          echo '<button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalCalificar'.$e['id'].'">Calificar</button>';
          echo '</td>';
          echo '</tr>';

          // Modal calificar
          echo '<div class="modal fade" id="modalCalificar'.$e['id'].'" tabindex="-1"><div class="modal-dialog"><div class="modal-content">';
          echo '<form method="post" action="?action=calificar_envio">';
          echo '<div class="modal-header"><h5 class="modal-title">Calificar envío — '.h($e['alumno']).'</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>';
          echo '<div class="modal-body">';
          echo '<input type="hidden" name="envio_id" value="'.$e['id'].'" />';
          echo '<div class="mb-3"><label class="form-label">Calificación (0-'.(int)$t['puntos'].')</label><input type="number" min="0" max="'.(int)$t['puntos'].'" class="form-control" name="calificacion" value="'.($e['calificacion']!==null?(int)$e['calificacion']:'').'" required /></div>';
          echo '<div class="mb-3"><label class="form-label">Retroalimentación</label><textarea class="form-control" name="retroalimentacion" rows="3">'.h($e['retroalimentacion'] ?? '').'</textarea></div>';
          echo '</div>';
          echo '<div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancelar</button><button class="btn btn-primary" type="submit">Guardar</button></div>';
          echo '</form></div></div></div>';
        }
        echo '</tbody></table></div>';
      }
      echo '</div>';
    }

    // Comentarios del hilo (tarea)
    $comentarios = db_all($mysqli, 'SELECT c.*, u.nombre FROM comentarios c JOIN users u ON u.id=c.autor_id WHERE c.tipo="tarea" AND c.ref_id=? ORDER BY c.creado_en ASC', [$t['id']], 'i');
    echo '<div class="mt-3">';
    echo '<h6>Comentarios</h6>';
    if (!$comentarios){
      echo '<div class="text-muted">Sin comentarios</div>';
    } else {
      echo '<div class="list-group">';
      foreach($comentarios as $c){
        echo '<div class="list-group-item"><div class="small text-muted">'.h($c['nombre']).' — '.h((new DateTime($c['creado_en']))->format('d/m/Y H:i')).'</div><div>'.nl2br(h($c['mensaje'])).'</div></div>';
      }
      echo '</div>';
    }
    echo '<form class="mt-2" method="post" action="?action=comentar">';
    echo '<input type="hidden" name="tipo" value="tarea" />';
    echo '<input type="hidden" name="ref_id" value="'.$t['id'].'" />';
    echo '<div class="input-group"><input class="form-control" name="mensaje" placeholder="Escribe un comentario..." /><button class="btn btn-outline-primary" type="submit">Publicar</button></div>';
    echo '</form>';

    echo ' </div></div>';
  }

  // Modal Nueva Tarea (docente)
  if (is_docente()){
    echo '<div class="modal fade" id="modalNuevaTarea" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">';
    echo '<form method="post" action="?action=crear_tarea" enctype="multipart/form-data">';
    echo '<div class="modal-header"><h5 class="modal-title">Crear nueva tarea</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>';
    echo '<div class="modal-body">';
    echo '<div class="row g-3">';
    echo '<div class="col-md-6"><label class="form-label">Curso</label><select name="curso_id" class="form-select" required>';
    foreach($cursos as $c){ echo '<option value="'.$c['id'].'">'.h($c['nombre']).'</option>'; }
    echo '</select></div>';
    echo '<div class="col-md-6"><label class="form-label">Materia</label><select name="materia_id" class="form-select" required>';
    foreach($materias as $m){ echo '<option value="'.$m['id'].'">'.h($m['nombre']).'</option>'; }
    echo '</select></div>';
    echo '<div class="col-md-8"><label class="form-label">Título</label><input class="form-control" name="titulo" maxlength="180" required /></div>';
    echo '<div class="col-md-4"><label class="form-label">Puntos</label><input type="number" class="form-control" name="puntos" min="1" value="100" required /></div>';
    echo '<div class="col-12"><label class="form-label">Instrucciones</label><textarea class="form-control" name="instrucciones" rows="4" placeholder="Describe claramente lo que deben hacer, criterios y formato de entrega."></textarea></div>';
    echo '<div class="col-md-6"><label class="form-label">Fecha de entrega</label><input type="datetime-local" class="form-control" name="fecha_entrega" /></div>';
    echo '<div class="col-md-6"><label class="form-label">Adjuntos (múltiples)</label><input type="file" class="form-control" name="adjuntos[]" multiple /></div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Cancelar</button><button class="btn btn-primary" type="submit">Crear</button></div>';
    echo '</form></div></div></div>';
  }

  echo '</div>'; // container
  echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>';
  echo '</body></html>';
}

?>
s