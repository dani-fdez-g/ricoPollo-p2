<!DOCTYPE html PUBLIC>
<html>
<head>
    <!-- pagina de inicio -->
    <title>HOME - RICOPOLLO</title>
</head> 

<body>
        <!-- carrusel de ofertas -->
        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="true">
            <div class="carousel-inner">
            <div class="carousel-item ">
                <a href=<?=base_url."?controller=producto&action=carta"?>><img src="assets/img/carusel 1.webp" class="d-block w-100" alt="oferta del mes"></a>
            </div>
            <div class="carousel-item active">
                <a href=<?=base_url."?controller=producto&action=carta"?>><img src="assets/img/carusel 2.webp" class="d-block w-100" alt="oferta del mes"></a>
            </div>
            <div class="carousel-item">
                <a href=<?=base_url."?controller=producto&action=carta"?>><img src="assets/img/carusel 3.webp" class="d-block w-100" alt="oferta del mes"></a>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- fin carrusel de ofertas -->
        <!-- seccion para compartir -->
        <section class="container">
            <div class="row">
            <h3 class="titulos" >para compartir</h3>
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
                            <div style="background-image: URL(<?php echo $producto->getImagen();?>); background-repeat: no-repeat; background-size: 100% auto; background-position: center;" class="card-image-product ">
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
        </section>  
        <!-- fin de seccion para compartir -->            

<!-- banner publicitario -->
            <img class="publi-1 mt-3" src="assets/img/publi1.webp">
            <img class="que-te-apetece" src="assets/img/que-te-apetece-hoy.svg">
            <a class="btn-pedir" style="float:left;" type="submit" href=<?=base_url."?controller=producto&action=carta"?>>PEDIR AHORA <img src="assets/img/moto.svg"></a>
            <div class="video-box">
                <iframe width="320" height="200" src="https://www.youtube.com/embed/9nSqqwa8SHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
<!-- fin del banner publicitario -->

</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
 <!-- fin pagina de inicio -->
</html>
