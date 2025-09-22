<?php
include "../config.php"; // conexión BD

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // -------- DATOS DE TEXTO --------
    $nombre       = $_POST['nombre'] ?? '';
    $apaterno     = $_POST['apaterno'] ?? '';
    $amaterno     = $_POST['amaterno'] ?? '';
    $curp         = $_POST['curp'] ?? '';
    $nivel        = $_POST['nivel'] ?? '';
    $grado        = $_POST['grado'] ?? '';
    $procedencia  = $_POST['procedencia'] ?? '';
    $promedio     = $_POST['promedio'] ?? null;
    $turno        = $_POST['turno'] ?? '';
    $tutorNombre  = $_POST['tutorNombre'] ?? '';
    $tutorTel     = $_POST['tutorTel'] ?? '';
    $tutorEmail   = $_POST['tutorEmail'] ?? '';
    $comentarios  = $_POST['comentarios'] ?? '';
    $acepto       = $_POST['acepto'] ?? 0;

    if ($acepto != 1) {
        echo json_encode(["status" => "error", "message" => "Debes aceptar el Aviso de Privacidad."]);
        exit;
    }

    // -------- ARCHIVOS --------
    $uploadDir = __DIR__ . "/../uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    function guardarArchivo($campo, $uploadDir) {
        if (!isset($_FILES[$campo]) || $_FILES[$campo]['error'] != UPLOAD_ERR_OK) {
            return null; // No se subió archivo
        }
        $ext = pathinfo($_FILES[$campo]['name'], PATHINFO_EXTENSION);
        $filename = $campo . "_" . time() . "." . $ext;
        $ruta = $uploadDir . $filename;

        if (move_uploaded_file($_FILES[$campo]['tmp_name'], $ruta)) {
            return "uploads/" . $filename; // ruta relativa
        }
        return null;
    }

    $acta     = guardarArchivo("acta", $uploadDir);
    $curpFile = guardarArchivo("curpFile", $uploadDir);
    $boleta   = guardarArchivo("boleta", $uploadDir);
    $conducta = guardarArchivo("conducta", $uploadDir);

    // -------- INSERT --------
    $sql = "INSERT INTO preinscripcion 
            (nombre, apaterno, amaterno, curp, nivel, grado, procedencia, promedio, turno, tutorNombre, tutorTel, tutorEmail, comentarios, acepto, acta, curpFile, boleta, conducta) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param(
            "sssssssdssssisssss",
            $nombre,
            $apaterno,
            $amaterno,
            $curp,
            $nivel,
            $grado,
            $procedencia,
            $promedio,
            $turno,
            $tutorNombre,
            $tutorTel,
            $tutorEmail,
            $comentarios,
            $acepto,
            $acta,
            $curpFile,
            $boleta,
            $conducta
        );

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Preinscripción guardada correctamente"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error al guardar: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Error en la preparación de la consulta."]);
    }

    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Método no permitido."]);
}
