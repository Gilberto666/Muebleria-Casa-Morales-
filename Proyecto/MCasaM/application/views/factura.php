<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/
* @package application/view/
*
* @version 1.0.0
* Creado el 31/07/2019
* Ultima modificacion el 02/08/2019
*/
?>

<div class="row">
	<div class="col-md-12" align="center"><br>
		<?php foreach ($direccion as $item) {?>
			<div class="card bg-light mb-3">
			<div class="card-header"><h3>Mueblería Casa Morales</h3></div>
			    <table style="text-align: justify; width: 100%;">
					<tbody>
						<tr style="text-align: center;background-color: black; color: white;">
							<td colspan="4">Mis Datos</td>
					   	</tr>
						<tr>
							<td><strong>Nombre</strong>:</td>
							<td><?php echo $this->session->userdata('nombre'); ?></td>
							<td><strong>Apellido</strong>:</td>
							<td><?php echo $this->session->userdata('apellido'); ?></td>
					   	</tr>
					   	<tr>
							<td><strong>Correo</strong>:</td>
							<td><?php echo $this->session->userdata('email'); ?></td>
							<td><strong>Código Postal</strong>:</td>
							<td><?php echo $item->codigo_postal;?></td>
					   	</tr>	
					   	<tr>
							<td><strong>Estado</strong>:</td>
							<td><?php foreach ($estado as $item1) {?>
									<?php if ($item1->idEstado==$item->estado_idEstado) {?>
										<?php echo "$item1->estado"; ?>
									<?php } ?>
								<?php } ?></td>
							<td><strong>Municipio</strong>:</td>
							<td><?php echo $item->municipio;?></td>
					   	</tr>	
					   	<tr>
							<td><strong>Colonia</strong>:</td>
							<td><?php echo $item->colonia;?></td>
					   		<td><strong>Calle</strong>:</td>
							<td><?php echo $item->calle;?></td>
					   	</tr>
					   	<tr>
							<td><strong>Número</strong>: </td>
							<td># <?php echo $item->numero;?></td>
							<td><strong>Teléfono</strong>:</td>
							<td><?php echo $item->telefono;?></td>
					   	</tr>			
				    </tbody>
				</table>							
				<table style="text-align: justify; width: 100%;">			
					<thead style="background-color: black; border: 1;border-color: black;">
						<tr style="text-align: center; color: white;">
							<td colspan="3" >Pedidos</td>
					   	</tr>
						<tr style="text-align: center; color: white;">
							<th scope="col">Cantidad</th>
							<th scope="col">Nombre</th>
							<th scope="col">Precio</th>
						</tr>
					</thead>
			 			<?php $cart = $this->cart->contents();
						$grand_total = 0;
						foreach ($cart as $item){?>
					<tbody>
						<tr>
							<td><?php echo $item['qty']; ?></td>
							<td><?php echo $item['name']; ?></td>
							<td>$<?php echo number_format($item['subtotal'], 2) ?></td>
					   	</tr><?php $grand_total = $grand_total + $item['subtotal']; }  ?>
						<tr>
							<td></td>
							<td><h4>Total</h4></td>
							<td>$<?php echo number_format($grand_total, 2); ?></td>
				    	</tr>
				    </tbody>
				</table>
			</div>
		<?php } ?>
	</div>
</div>

  