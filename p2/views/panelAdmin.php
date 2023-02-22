<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>PANEL ADMIN - RICOPOLLO</title>
</head>

    <body>
        <!-- menu de acceso a las categorias en el escritorio -->
        <section class="menu-categorias">
            
            <div class="categoria ms-5 me-2"><a href="#AÑADIR" class="categoria-txt">AÑADIR</a></div>
            <div class="categoria ms-2 me-2 "><a href="#DEL" class="categoria-txt">ELIMINAR</a></div>
            <div class="categoria ms-2 me-2 "><a href="#UPDATE" class="categoria-txt">EDITAR</a></div>

        </section>
        <!-- fin menu de acceso a las categorias en el escritorio -->

<section class="vh-100">
      <!-- add form -->
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-8 col-lg-6 col-xl-4 box-form" style="margin-top: 10%">
      <h1 class="txt-form" id="AÑADIR">AÑADIR PRODUCTO</h1>
        <form class="txt-titulos" method="post" action="<?=base_url."?controller=producto&action=adminAñadirProducto"?>">
          <!-- nombre-->
          <div class="form-outline mb-3 ">
            <label class="form-label" for="form3Example3">NOMBRE:</label>
			      <input required name="nombre" type="text" id="form3Example3" class="form-control form-control-lg " placeholder="Introduce un correo valido" />
          </div>
          <!-- descripcion -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">DESCRIPCION:</label>
            <input required name="descripcion" type="text" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce contraseña" />
          </div>
          <!-- imagen -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">IMAGEN:</label>
            <input required name="imagen" type="file" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce contraseña" />
          </div>
          <!-- precio -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">PRECIO:</label>
            <input required name="precio" type="number" step="0.01" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce precio" />
          </div>
           <!-- categoria   -->
           <div class="form-outline mb-3">
            <label class="form-label" for="lang">CATEGORIA</label><br>
                <select required name="categoria" id="categoria" class="form-control form-control-lg">
                  <option value="1">hamburguesa</option>
                  <option value="2">ensalada</option>
                  <option value="3">cubo</option>
                  <option value="4">tira</option>
                  <option value="5">complemento</option>
                  <option value="6">bebida</option>
                </select>
            </div>
          <!-- boton -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">AÑADIR</button>
          </div>

        </form>
    </div>
    </div>   
  </div> 
 <!-- delete product -->
 <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-8 col-lg-6 col-xl-4 box-form" style="margin-top: 10%">
      <h1 class="txt-form" id="DEL">ELIMINAR PRODUCTO</h1>
        <form class="txt-titulos" method="post" action="<?=base_url."?controller=producto&action=adminEliminarProducto"?>">
          <!-- nombre-->
          <div class="form-outline mb-3 ">
            <label class="form-label" for="form3Example3">NOMBRE:</label>
			      <input required name="nombre" type="text" id="form3Example3" class="form-control form-control-lg " placeholder="Introduce un correo valido" />
          </div>
           <!-- categoria   -->
           <div class="form-outline mb-3">
            <label class="form-label" for="lang">CATEGORIA</label><br>
                <select required name="categoria" id="categoria" class="form-control form-control-lg">
                  <option value="1">hamburguesa</option>
                  <option value="2">ensalada</option>
                  <option value="3">cubo</option>
                  <option value="4">tira</option>
                  <option value="5">complemento</option>
                  <option value="6">bebida</option>
                </select>
            </div>
          <!-- boton -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">ELIMINAR</button>
          </div>

        </form>
    </div>
    </div>   
  </div> 
  <!-- modificar product -->
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-8 col-lg-6 col-xl-4 box-form" style="margin-top: 10%">
      <h1 class="txt-form" id="UPDATE">EDITAR PRODUCTO</h1>
        <form class="txt-titulos" method="post" action="<?=base_url."?controller=producto&action=adminModificarProducto"?>">
          <!-- id producto -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">ID:</label>
            <input required name="codigo_producto" type="number" step="0.01" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce precio" />
          </div>
          <!-- nombre-->
          <div class="form-outline mb-3 ">
            <label class="form-label" for="form3Example3">NOMBRE:</label>
			      <input required name="nombre" type="text" id="form3Example3" class="form-control form-control-lg " placeholder="Introduce un correo valido" />
          </div>
          <!-- descripcion -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">DESCRIPCION:</label>
            <input required name="descripcion" type="text" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce contraseña" />
          </div>
          <!-- imagen -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">IMAGEN:</label>
            <input required name="imagen" type="file" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce contraseña" />
          </div>
          <!-- precio -->
          <div class="form-outline mb-3">
			      <label class="form-label" for="form3Example4">PRECIO:</label>
            <input required name="precio" type="number" step="0.01" id="form3Example4" class="form-control form-control-lg " placeholder="Introduce precio" />
          </div>
           <!-- categoria   -->
           <div class="form-outline mb-3">
            <label class="form-label" for="lang">CATEGORIA</label><br>
                <select required name="categoria" id="categoria" class="form-control form-control-lg">
                  <option value="1">hamburguesa</option>
                  <option value="2">ensalada</option>
                  <option value="3">cubo</option>
                  <option value="4">tira</option>
                  <option value="5">complemento</option>
                  <option value="6">bebida</option>
                </select>
            </div>
          <!-- boton -->
           <div class="mt-4 pt-2">
            <button type="submit" class="btn-pedir" style="margin:0px;">AÑADIR</button>
          </div>

        </form>
    </div>
    </div>   
  </div> 
</section>    
    
</body>


<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
