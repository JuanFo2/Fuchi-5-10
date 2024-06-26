<!DOCTYPE html>
<html>
<head>
  <title>Dream Desert</title>
  <link rel="icon" href="img/Logofuchi.png">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style= "background-color: black;">
  
<?php include "Navbar.php" ?>
    
    <br><br><br>  <br><br><br>  <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Formulario de registro -->
        <form action="register.php" method="POST">
          <h2 class="mt-5 mb-4" style="color: white;">Regístrate</h2>
          <!-- Campo de entrada para el nombre de usuario -->
          <div class="form-group">
            <input type="text" class="form-control" name="nombre_user" placeholder="Nombre de usuario" required>
          </div>
          <!-- Campo de entrada para la contraseña -->
          <div class="form-group">
            <input type="password" class="form-control" name="contrasena_user" placeholder="Contraseña" required>
          </div>
		  <!-- Campo de entrada para el correo -->
          <div class="form-group">
            <input type="email" class="form-control" name="correo_user" placeholder="Correo" required>
          </div>
          <!-- Botón para enviar el formulario de registro -->
          <button type="submit" class="btn btn-primary" name="registro">Registrarse</button>
        </form>
        <!-- Enlace para redirigir al formulario de inicio de sesión -->
        <p class="mt-3" style="color: white;">¿Ya tienes una cuenta? <a href="formu_login.php">Inicia sesión aquí</a></p>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>