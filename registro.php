<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "cecytem");

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $carrera = $_POST['carrera'];

    $verificar = "SELECT * FROM alumnos WHERE correo = '$correo'";
    $resultado = $conn->query($verificar);

    if ($resultado->num_rows > 0) {
        echo "<h3>Ya existe un registro con este correo: <strong>$correo</strong>.</h3>";
        echo "<a href='formulario.html'>← Volver al formulario</a>";
    } else {

        $sql = "INSERT INTO alumnos (nombre, apellido, correo, carrera)
                VALUES ('$nombre', '$apellido', '$correo', '$carrera')";

        if ($conn->query($sql) === TRUE) {
            echo "<h3>Registro exitoso. ¡Bienvenido, $nombre!</h3>";
            echo "<a href='Login.html'>← Volver a la página principal</a>";
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
