<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>CARTA - RICOPOLLO</title>
</head>

    <body>
        <!-- menu de acceso a las categorias en el escritorio -->
        <section class="menu-categorias">
            
            <div class="categoria ms-5 me-2"><a href="#hamburguesas" class="categoria-txt">hamburguesas</a></div>
            <div class="categoria ms-2 me-2 "><a href="#ensaladas" class="categoria-txt">ensaladas</a></div>
            <div class="categoria ms-2 me-2 "><a href="#cubos_tiras" class="categoria-txt">cubos y tiras</a></div>
            <div class="categoria ms-2 me-2 "><a href="#complementos" class="categoria-txt">complementos</a></div>
            <div class="categoria ms-2 me-2 "><a href="#bebidas" class="categoria-txt">bebidas</a></div>

        
        </section>
        <!-- fin menu de acceso a las categorias en el escritorio -->

<div class="container">
        <section id="hamburguesas" > <!--hamburguesas-->
        <h3 class="titulos" >Hamburguesas</h3>
            <div class="row">
                <?php foreach ($hamburguesas as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center; " class="card-image-product">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-hamburguesa" value="<?= $key?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
        </section> <!-- fin hamburguesas-->
        <section id="ensaladas" > <!--ensaladas-->
        <h3 class="titulos" >ensaladas</h3>
            <div class="row">
                <?php foreach ($ensaladas as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-ensalada" value="<?php echo $key;?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
        </section> <!-- fin ensaladas-->
            
        <section id="cubos_tiras"> <!--cubos_tiras-->
            <div class="row">
            <h3 class="titulos" >cubos & tiras</h3>
                <?php foreach ($cubos as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-cubo" value="<?php echo $key;?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
                <?php foreach ($tiras as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product w-100">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-tira" value="<?php echo $key;?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
                
            </div>
        </section> <!-- fin cubos_tiras-->

        <section id="complementos" > <!--complementos-->
        <h3 class="titulos" >complementos</h3>
            <div class="row">
                <?php foreach ($complementos as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-complemento" value="<?php echo $key;?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
        </section> <!-- fin complementos-->
        <section id="bebidas" > <!--bebidas-->
        <h3 class="titulos" >bebidas</h3>
            <div class="row">
                <?php foreach ($bebidas as $key => $producto){ ?>
                    <div class="col-6 col-sm-3">
                        
                        <div class="card">
                            <div class="card-name-product">
                                <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                            </div>
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product">
                                <div class="des-producto">
                                <h3 class="titulo">INGREDIENTES</h3>
                                <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                                </div>
                            </div>
                            <div class="card-body-producto">
                                <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                                <form action="<?=base_url."?controller=producto&action=carta"?>" method='post'>
                                        <input type="hidden" name="producto-bebida" value="<?php echo $key;?>">
                                        <button class="btn-add" type="submit">AÑADIR</button>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                <?php }?>
        </section> <!-- fin bebidas-->

    </div>        
    
</body>


<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
