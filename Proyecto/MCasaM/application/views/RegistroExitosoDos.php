<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/
* @package application/view/
*
* @version 1.0.0
* Creado el 30/07/2019
* Ultima modificacion el 02/08/2019
*/
?>
<div class="col-md-12" align="center">		
	<div class="card" style="width: 50%;">
		<div class="alert alert-success" role="alert">
			<h3>Dirección Agregada</h3>
		</div>
		<img src="<?=base_url();?>images/baseline-done_outline-24px.svg" class="card-img-top"style="height: 30%; width: 30%;">
		<div class="card-body">
			<?php $cart = $this->cart->contents();
			$grand_total = 0;$total_pedidos = 0;
				foreach ($cart as $item){?>
				<form action="<?=base_url();?>index.php/Pedidos/guardar" method="post">
					<input type="hidden" name="cantidad_producto" value="<?php echo $total_pedidos = $total_pedidos + $item['qty']; ?>">
	 				<input type="hidden" name="total" value="<?php echo $grand_total = $grand_total + $item['subtotal'];?>">
					<input type="hidden" name="fecha_pedido" <?php $fecha = date("Y")."-".date("m")."-".date("d");?> value="<?php echo $fecha; ?>">
	 				<input type="hidden" name="pedido_idEstatus" value="1">
					<input type="hidden" name="pedido_idCliente" value="<?php echo $this->session->userdata('idUsuario'); ?>">
				<?php } ?>
					<button type="summit" class="btn btn-outline-success btn-lg">Comprar Ahora</button>
				<form/>				
		</div>
	</div><br>
</div>