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
	<div class="col-md-5" align="center"><br>
		<h3 >Pedido</h3>
		<table class="table">			
			<thead class="thead-dark">
				<tr>
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
	<div class="col-md-7" align="center" style="margin-top: 5%;">
		<?php foreach ($pedido as $item) {
			if ($item->pedido_idCliente==$this->session->userdata('idUsuario')) {
				if($item->pedido_idEstatus==1){ ?>
					<form action="<?=base_url();?>index.php/Compras/guardar" method="post">
						<input type="hidden" name="fecha_compra" <?php $fecha = date("Y")."-".date("m")."-".date("d");?> value="<?php echo $fecha; ?>">
						<input type="hidden" name="pendiente" value="1">
						<input type="hidden" name="compra_idPedido" value="<?php echo $item->idPedido;?>">
									 
						<button type="summit" class="btn btn-outline-success btn-lg">Generar Factura De Pago</button>
					<form/>
			<?php }else {
				}			
			}
		} ?>
	</div>
</div>