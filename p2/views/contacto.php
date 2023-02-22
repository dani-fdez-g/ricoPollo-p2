<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>

<body>  
  
  <!-- formulario de contacto en html y css -->  
  <section class="vh-100">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center box-formulario h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 box-form ">
      <h1 class="txt-form">FORMULARIO DE CONTACTO</h1>
        <form class="txt-titulos" method="post">
            <!-- name input -->
            <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">NOMBRE:</label>
			      <input name="nombre" type="text" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un nombre valido" />
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">EMAIL:</label>
			      <input name="email" type="email" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un correo valido" />
          </div>
            <!-- ASUNTO input -->
            <div class="form-outline mb-4 ">
            <label class="form-label" for="form3Example3">ASUNTO:</label>
			      <input name="apellido" type="text" id="form3Example3" class="form-control form-control-lg input-formulario" placeholder="Introduce un apellido valido" />
          </div>

          <!-- MSJ input -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">MENSAJE:</label>
            <input name="password"  type="text" id="form3Example4" class="form-control form-control-lg input-formulario" placeholder="Introduce contraseña" />
          </div>
          <!-- botones y registrate -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">ENVIAR</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>

</html>
