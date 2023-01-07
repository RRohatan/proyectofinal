<?php include "header.php"; ?>

<form  name="formulario" id="formulario" method="POST">
<div class="container p-4">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <div class="card card-body">
      <div class="form-group">
          <label class="form-group">Username</label>
            <input type="text" id="txtUsername" name="Username" class="form-control" required>
          </div>
          <div class="form-group">
          <label class="form-group">Contraseña</label>
            <input type="password" id="txtContraseña" name="passwordd" class="form-control" required>
          </div>
          <div class="form-group">
          <label class="form-group">Nombre</label>
            <input type="text" id="txtNombre" name="Nombres" class="form-control" required>
          </div>
          <div class="form-group">
          <label class="form-group">Apellido</label>
            <input type="text" id="txtApellidos" name="Apellidos" class="form-control" required>
          </div>
        
          <div class="form-group">
          <label class="form-group">Tipo de Usuario</label>
            <input type="number" id="txtTipo_id" name="Tipo_id" class="form-control" required>
          </div>

          <div class="form-group">
          <a href="/proyectofinal/indexlg.php">Regresar</a>
          </div>

          <input type="submit" name="register" id="guardar" class="btn btn-success btn-block" value="guardar" >
          
      </form>
      </div>
    </div>
  </div>
</div>
</form>
<?php include "footer.php"; ?>


 <script src="../template/js/guardar_usuario.js"></script>

 