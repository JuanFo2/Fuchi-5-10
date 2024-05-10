<?php
// Se utiliza para llamar al archivo que contiene la conexión a la base de datos
require_once 'conexion.php';

// Validamos que el formulario y que el botón "registro" haya sido presionado
if (isset($_POST['registro'])) {

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['nombre_user'];
    $contrasena = md5($_POST['contrasena_user']);
    $correo = $_POST['correo_user'];

    // Insertamos los datos en la base de datos
    
    
    $verificarcorreo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$correo'")  ;
    $verificarusuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$usuario'")  ;
   
    if (mysqli_num_rows($verificarcorreo) > 0 || mysqli_num_rows($verificarusuario) > 0 ) {
        //correo repetido
        echo '
        <script>
            alert("Este correo o usuario ya existe, intentalo de nuevo");
            window.location = "home.php"
        </script>
    ';
} else {
    $cadena = "INSERT INTO usuarios(id, nombre, email, contrasena) VALUES (null, '$usuario', '$correo', '$contrasena')";
    $resultado = MySqli_query($conexion, $cadena);
}
    if ($resultado) {
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "home.php";
        </script>
    ';
    } else {
        echo '
        <script>
            alert("Intente nuevamente");
            window.location = "home.php";
        </script>';
    }

  


    
    }
   

?>
