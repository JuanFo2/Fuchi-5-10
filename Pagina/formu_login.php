<!DOCTYPE html>
<html>
<head>
  <title>Desert Dream</title>
  <link rel="icon" href="img/Logofuchi.png">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  
</head>
<?php include "Navbar.php" ?>
<body style= "background-color: black;" >
 
      
    
    <br><br><br><br><br><br><br><br><br>
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-6" >
        <!-- Formulario de inicio de sesión -->
        <form action="login.php" method="POST">
          <h2 class="mt-5 mb-4 " style="color: white;">Iniciar sesión</h2>
          <!-- Campo de entrada para el nombre de usuario -->
          <div class="form-group">
            <input type="text" class="form-control" name="nombre_user" placeholder="Nombre de usuario" required>
          </div>
          <!-- Campo de entrada para la contraseña -->
          <div class="form-group">
            <input type="password" class="form-control" name="contrasena_user" placeholder="Contraseña" required>
          </div>
          <!-- Botón para enviar el formulario -->
          <button type="submit" class="btn btn-primary" name="login">Iniciar sesión</button>
        </form>
        <!-- Enlace para redirigir al formulario de registro -->
        <p class="mt-3" style="color: white;">¿No tienes una cuenta? <a href="formu_registrarse.php">Regístrate aquí</a></p>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
