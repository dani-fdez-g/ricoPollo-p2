<!DOCTYPE html PUBLIC>
<html>
<head>  
    <title>COMPRA - RICOPOLLO</title>
</head> 

<body>
    
        <div class="container box-compra">
            <!-- tabla -->
            <table>
                <!-- encabezado tabla -->
                <tr>
                    <th class="encabezados txt-center">Producto</th>
                    <th class="encabezados">Cantidad</th>
                    <th class="encabezados txt-center">Precio</th>
                </tr>
                <!-- contenido tabla -->
                <?php
                        $pos=0;
                        foreach($_SESSION['sel'] as $pedido){
                            ?>
                        <tr class="border-box-producto">
                     
                            <td class="box-producto"><img class="img-carrito me-3" src="<?= $pedido->getProducto()->getImagen();?>"><?= $pedido->getProducto()->getNombre();?></td>
                            <form action="<?=base_url."?controller=producto&action=compra"?>" method="post">
                                    <input type="hidden" name="pos" value=<?=$pos?>>
                                    <td><button class="ms-2 btn-cantidad me-2" type="submit" name="add"> + </button>
                                    <?= $pedido->getCantidad();?>
                                    <button class="btn-cantidad ms-2 " type="submit" name="del"> - </button></td>

                            </form>
                            <td class="txt-center"><?=$pedido->getProducto()->getPrecio();?> $</td>
                            <td>
                                
                            </td>
                        </tr>
                        <?php $pos++;
                        }
                 
                 ?>
                        <tr>
                    
                        <td></td>                    
                        <td class="txt-center txt-precio">TOTAL</td>
                        <td class="txt-center txt-precioTotal"><?=$precioFinal?> $</td>
             
                    </tr>
            </table>
            <!-- fin tabla -->
            <!-- se muestra la cookie del precio del anterior producto -->
                        <div class="cookie">
                            <p>Tu ultimo pedido => <?= $_COOKIE['ultimoPrecio']?> $</p>  
                        </div>
<!-- botonera para finalizar o seguir pidiendo -->
                        <a href="<?=base_url."?controller=producto&action=confirmar"?>"><button type="submit"class="btn-comprar-ya me-5 ms-5 " > COMPRAR </button></a>
                        <a href="<?=base_url."?controller=producto&action=carta"?>"><button type="submit" class="btn-seguir-pedido me-5 ms-5  ">  PEDIR MAS </button></a>
     
        </div>

    



</body>


<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
