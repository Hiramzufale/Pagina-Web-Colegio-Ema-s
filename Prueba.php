<?php
include "config.php"; // importa la conexión

// Probar la conexión
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos.<br>";
}

// Insertar un registro de prueba
$sql = "INSERT INTO preinscripcion 
        (nombre, apaterno, amaterno, curp, nivel, grado, procedencia, promedio, turno, tutorNombre, tutorTel, tutorEmail, comentarios, acepto) 
        VALUES 
        ('Juan', 'Pérez', 'López', 'TEST123456HDFRRN09', 'Preparatoria', '3°', 'Escuela Prueba', 8.5, 'Matutino', 'Carlos Pérez', '6621234567', 'carlos@test.com', 'Registro de prueba', 1)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registro insertado correctamente. ID generado: " . $conn->insert_id;
} else {
    echo "⚠️ Error al insertar: " . $conn->error;
}

$conn->close();
?>
