<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
    die("No hay conexión: " . mysqli_connect_error());

$nombre = $_POST['txtusuario'];
$pass = $_POST['txtpassword'];

if ($nombre == "" || $pass == "") {
    echo "No ingreso";
} else {
    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$nombre' AND password = '$pass'");
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
        echo "Bienvenido: " . $nombre;
        include("union.html");
    } else if ($nr == 0) {
        echo "No ingreso";
    }
}
?>
