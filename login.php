<?php
// Se utiliza para llamar al archivo que contiene la conexión a la base de datos
require_once 'conexion.php';

// Validamos que el formulario y que el botón "login" haya sido presionado
if (isset($_POST['login'])) {

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['nombre_user'];
    $contrasena = md5($_POST['contrasena_user']);

    // Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
    $cadena = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND contrasena = '$contrasena'";
    $resultado = MySqli_query($conexion, $cadena);
    $numero_registros = mysqli_num_rows($resultado);

    if ($numero_registros != 0) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
        header("Location: home_log.php");
    } else {
        // Credenciales inválidas
        echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña." . "<br>";
    }
}
?>