<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/
* @package application/view/
*
* @version 1.0.0
* Creado el 01/08/2019
* Ultima modificacion el 02/08/2019
*/
?>
<h3 style="text-align: center;">Mueblería Casa Morales</h3><br>
<h4 style="text-align: center;">Catálogo</h4><br>

<table style="text-align: center; width: 100%">
	<thead>
	<?php foreach ($categoria as $item2) {?>
		<tr style="background-color: black; color: white;">
			<td colspan="6" style="text-align: center;"><h3><?php echo $item2->nombre_categoria; ?></h3></td>
		</tr>	
	</thead>
	<tbody>
		<tr>
			<td><h4>Serial</h4></td>
			<td><h4>Nombre</h4></td>
			<td><h4>Precio</h4></td>
			<td><h4>Cantidad</h4></td>
			<td><h4>Fecha Registro</h4></td>
			<td><h4>Descripción</h4></td>
		</tr>
		<?php foreach ($producto as $item) {?>
			<?php if ($item2->idCategoria==$item->producto_idCategoria) {?>		
		<tr>
			<td>MCM-<?php echo $item->idProducto; ?></td>
			<td><?php echo $item->nombre_producto; ?></td>
			<td><?php echo number_format($item->precio); ?></td>
			<td><?php echo $item->stock; ?></td>
			<td><?php echo $item->fecha_registro; ?></td>
			<td><?php echo $item->detalles; ?></td>
		</tr>
		<tr><td colspan="6"></td></tr>
			<?php } ?>
		<?php } ?>
	</tbody><br>
	<?php } ?>		
	
</table>