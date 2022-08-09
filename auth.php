<?php
$username = $_POST['usuario'];
$password = $_POST['contrasenha'];

if ($username == "" && $password == "") {
    echo '<script>alert("Debe ingresar su correo y contraseña");'
            . 'window.location.href="index.html"'
            . '</script>';
        return false;
}

// Aqui vamos a conectanos a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "ecommerce");

$sql = "SELECT u.username, u.contrasenha, u.nivel_perfil ";
$sql.= "FROM usuario u ";
$sql.= "WHERE u.username = '$username' AND u.contrasenha = '$password'";

$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

if ($fila['username'] == $username && $fila['contrasenha'] == $password ) {
    switch($fila['nivel_perfil']) {
        case 1:
            // header("Location: ./page_admin.php");
            echo '<script>alert("Bienvenido Sr Adminitrador");'
            . 'window.location.href="login.html"'
            . '</script>';
            break;
        case 2:
            // header("Location: ./page_user.php");
            echo '<script>alert("Bienvenido Sr Usuario");'
            . 'window.location.href="login.html"'
            . '</script>';
            break;
    }

} else {
    echo '<script>alert("Usuario y Clave invalidas");'
        . 'window.location.href="login.html"'
        . '</script>';
}
?>