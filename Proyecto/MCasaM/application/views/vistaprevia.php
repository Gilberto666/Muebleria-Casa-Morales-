<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/
* @package application/view/
*
* @version 1.0.0
* Creado el 07/06/2019
* Ultima modificacion el 02/08/2019
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