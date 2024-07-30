<?php
include 'conexion.php';

// Obtener datos del POST
$data = json_decode(file_get_contents("php://input"), true);
$correo = $data['email'];
$contra = $data['password'];

// Validar campos
if (empty($correo) || empty($contra)) {
    echo json_encode(['status' => 'error', 'message' => 'El correo y la contraseña son obligatorios.']);
    exit();
}

// Verificar credenciales
$sql = "SELECT nombre FROM usuarios WHERE correo = ? AND contra = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $correo, $contra);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo json_encode(['status' => 'success', 'message' => "¡Nos alegra que hayas vuelto, {$user['nombre']}!"]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Credenciales inválidas.']);
}

$stmt->close();
$conn->close();
?>
