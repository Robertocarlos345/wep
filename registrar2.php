<?php  
include("con_db2.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1) {
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);

        $consulta = "INSERT INTO login(usuario,password) VALUES ('$usuario', '$password')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php 
        } else {
            ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">¡por favor complete los campos</h3>
        <?php
    }
}
?>
