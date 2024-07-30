<?php
include 'conexion.php';

// Obtener datos del POST
$data = json_decode(file_get_contents("php://input"), true);
$nombre = $data['nombre'];
$correo = $data['correo'];
$contra = $data['contra'];

// Validar campos
if (empty($nombre) || empty($correo) || empty($contra)) {
    echo json_encode(['status' => 'error', 'message' => 'Todos los campos son obligatorios.']);
    exit();
}

// Verificar si el usuario ya existe
$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['status' => 'error', 'message' => 'El correo electrónico ya está registrado.']);
} else {
    // Insertar nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, correo, contra) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $contra);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => "¡Bienvenido, $nombre! Registro exitoso."]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar el usuario.']);
    }
}

$stmt->close();
$conn->close();
?>
