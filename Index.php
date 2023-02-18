<!doctype html>
<html lang="en">
<head>
  <title>Login - My Website</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .gradient-custom {
      background: linear-gradient(to right, #fc00ff, #00dbde);
    }
    
    .card {
      box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3);
    }
    
    .form-label {
      color: #fff;
    }
    
    .form-control:focus {
      box-shadow: none;
    }
    
    .btn-outline-light {
      color: #fff;
      border-color: #fff;
    }
    
    .btn-outline-light:hover {
      background-color: #fff;
      color: #343a40;
    }
    
    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-right h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 10rem;">
            <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
              <p class="text-white-50 mb-5">Ingresa tus datos para iniciar sesión</p>
              <form action="validar.php" method="post">
                <div class="form-outline form-white mb-4">
                  <input type="text" name="usuario" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Usuario</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
                
              </form>
              <?php
              if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == "INCORRECTO"){
                  echo "<p class='error-message'>Datos incorrectos</p>";
                } 
                else if($error == "VACIO"){
                  echo "<p class='error-message'>Por favor llene los campos </p>";
      }
    }
  ?>
</body>
</html>