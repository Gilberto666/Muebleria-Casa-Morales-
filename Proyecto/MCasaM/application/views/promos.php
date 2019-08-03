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

<table style="text-align: center; width: 100%">
	<thead>
	
		<tr style="background-color: black; color: white;">
			<td colspan="6" style="text-align: center;"><h3>Promociones</h3></td>
		</tr>	
	</thead>
	<tbody>
		<tr>
			<td><h4>Serial</h4></td>
			<td><h4>Nombre</h4></td>
			<td><h4>Fecha Inicial</h4></td>
			<td><h4>Fecha Final</h4></td>
			<td><h4>Descripción</h4></td>
			<td><h4>Estatus</h4></td>
		</tr>	
		<?php foreach ($promo as $item) {?>
		<tr>
			<td>MCM-<?php echo $item->idPromocion; ?></td>
			<td><?php echo $item->nombre_promocion; ?></td>
			<td><?php echo $item->fecha_inicial;?></td>
			<td><?php echo $item->fecha_final ;?></td>
			<td><?php echo $item->descripcion_promo ;?></td>
			<td><?php if ($item->promocion_idEstatus==1) {
				echo "Promoción Activada";
			}else{
				echo "Promoción Desactivada";
			}
				?>
			</td>
		</tr>
		<?php } ?>
	</tbody><br>
</table>