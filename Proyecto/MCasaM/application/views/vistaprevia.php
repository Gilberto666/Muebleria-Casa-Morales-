<?php
/**
* Pagina de vistaprevia
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado el ‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎04:19 pm
* Última Modificación el 19/07/2019
*/
?>
<div class="row">
   	<div class="col-sm-12 col-md-7" >
   	<!--Por medio de foreach se recuperá los valores del producto solicitado por el idProducto enviado de la pagina productos por medio de la url-->
    <?php foreach ($producto as $item) {?>
    	<!--Se mostrarán los valores al imprimir <?=$item->columnaBaseDeDatos?>-->
		<br><img src="<?=base_url();?>/assets/uploads/files/producto/<?=$item->imagen_producto;?>" style="width: 100%">
	</div>
	<div class="col-sm-12 col-md-5">
		<br><h5>Nombre del Producto:</h5>
		<h3><strong><?=$item->nombre_producto;?></strong></h3>
		<br>
		<h5>Precio: </h5>
		<h3><strong>$<?=$item->precio;?></strong></h3>
		<br>
		<h5>Número De Piezas:</h5>
		<h3><strong><?=$item->detalles;?></strong></h3>
		<br>			
		<button type="button" class="btn btn-info"><a href="<?=base_url(); ?>index.php/Carrito" style="color:white;">Regresar</a></button>
	</div>
	<!--Cierre de foreach-->
	<?php } ?>

</div><br>