<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>REGISTRO - RICOPOLLO</title>
</head> 

    <body>
    <section class="vh-100">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center box-formulario h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 box-form ">
      <h1 class="txt-form">REGISTRO</h1>
        <form class="txt-titulos" method="post">
            <!-- name input -->
            <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">NOMBRE:</label>
			      <input name="nombre" type="text" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un nombre valido" />
          </div>
            <!-- surname input -->
            <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">APELLIDO:</label>
			      <input name="apellido" type="text" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un apellido valido" />
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">CORREO ELECTRONICO:</label>
			      <input name="email" type="email" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un correo valido" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">CONTRASEÑA:</label>
            <input name="password"  type="password" id="form3Example4" class="form-control form-control-lg input-formulario" placeholder="Introduce contraseña" />
          </div>
          <!-- botones y registrate -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">REGISTRARME</button>
            <p>Tienes una cuenta? <a href=<?=base_url."?controller=usuario&action=acceder"?> class="link-danger">iniciar sesion</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

    </body>
    

</html>
