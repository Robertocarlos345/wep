<?php
$conexion = mysqli_connect("localhost", "root", "", "test");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$nocontrol = $_POST['nocontrol'];
$correo = $_POST['correo'];

$consulta = "INSERT INTO estudiantes(nombre, nocontrol, correo) VALUES ('$nombre', '$nocontrol', '$correo')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    header("Location: union.html");
    exit();
} else {
    echo "Error al guardar los datos.";
}
?>
