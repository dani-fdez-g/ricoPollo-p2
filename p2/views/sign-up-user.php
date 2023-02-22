<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>INICAR SESION - RICOPOLLO</title>
</head> 
    <body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 box-form" style="margin-top: 10%">
      <h1 class="txt-form">iniciar sesion</h1>
        <form class="txt-titulos" method="post" action=<?=base_url."?controller=usuario&action=acceder"?>>
          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">CORREO ELECTRONICO:</label>
			      <input name="email" type="email" id="form3Example3" class="form-control form-control-lg "
              placeholder="Introduce un correo valido" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">CONTRASEÑA:</label>
            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg "
              placeholder="Introduce contraseña" />
          </div>
          <!-- botones y registrate -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">INICIAR SESION</button>
            <p class="mt-2 pt-1 mb-0">No tienes una cuenta? <a href=<?=base_url."?controller=usuario&action=registro"?> class="link-danger">Registrate</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
    </body>
    
</html>
