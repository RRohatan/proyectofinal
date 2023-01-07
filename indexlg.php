
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
     
        <a class="navbar-brand" href="#"><img name="img" src="/proyectofinal/img/unicordoba.png" height= "100px" width = "100%"></a>
        <h1>ACTAS</h1>
        <h3>PORTAL DE LOGIN</h3>
      </div>
    </nav>
<form action="" method="POST">
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <div class="form-group">
          <label class="form-group">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
          <label class="form-group">Contraseña</label>
            <input type="password" name="contraseña" class="form-control"  >
          </div>
         
          <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Aún no tienes una cuenta? <a href="views/login/registro.php"
          style="color: #393f81;">Registrate aquí</a></p>
         
          <input type="submit" name="register" class="btn btn-success btn-block" value="Ingresar">
          <a href="views/login/recuperar.php"
          style="color: #393f81;">Olvido la contraseña</a>
      </form>
      </div>
    </div>
  </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
