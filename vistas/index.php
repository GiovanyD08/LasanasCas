<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/LASAÑAS CASERITAS/estilos/login.css">
    <title>LOGIN</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fd7e14;">
        <div class="container-fluid" style="font-weight: bold; font-size: 22px;">
          <a class="navbar-brand" href="index.php"><img src="/LASAÑAS CASERITAS/imagenes/logo.jpg" alt="logo" class="logo"></a>
            <div class="d-flex">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active mx-5" aria-current="page" href="index.php">Cliente Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active mx-5" href="registrar.php" tabindex="-1">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active mx-5" href="admin.php">Administrador Login</a>
              </li>
              
             </ul>
            </div>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="form-box">

            <img src="/LASAÑAS CASERITAS/imagenes/logo.jpg" alt="logo" class="logo">

            <h2 class="titulo">LOGIN</h2>

            <form action="../controladores/login.php" method="post">
                <input type="text" class="form-control" placeholder="Usuario" name="user" required>
                <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
                <button type="submit" class="btn btn-custom w-100" name="enviar">Ingresar</button>
            </form>

            <h6 class="my-4">¡ Si no te has registrado aún, ve al apartado de Registrarse !</h6>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>