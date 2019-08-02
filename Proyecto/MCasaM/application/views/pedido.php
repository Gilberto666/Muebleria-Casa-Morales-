<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/
* @package application/view/
*
* @version 1.0.0
* Creado el 28/07/2019
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

	<div class="col-md-7" align="center"><br>
	<?php if ($direccion!=null) {?>
		<?php foreach ($direccion as $item) {?>
				<div class="card bg-light mb-3">
					<div class="card-header">Mis Datos </div>
					    <table class="table">
							<tbody>
								<tr>
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
							   	</tr>
							   	<tr>
									<td><strong>Municipio</strong>:</td>
									<td><?php echo $item->municipio;?></td>
							   	</tr>	
							   	<tr>
									<td><strong>Colonia</strong>:</td>
									<td><?php echo $item->colonia;?></td>
							   	</tr>
							   	<tr>
									<td><strong>Calle</strong>:</td>
									<td><?php echo $item->calle;?></td>
							   	</tr>
							   	<tr>
									<td><strong>Número</strong>: </td>
									<td># <?php echo $item->numero;?></td>
							   	</tr>	
							   	<tr>
									<td><strong>Teléfono</strong>:</td>
									<td><?php echo $item->telefono;?></td>
							   	</tr>			
						    </tbody>
						</table>
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
										<button type="summit" class="btn btn-outline-success btn-lg">Comprar Ahora</button><br>
									<form/>	
						<br>
					</div>
						   		<?php } ?>
	
			<?php }else{ ?>		
				<h3 >Agrega un domicilio</h3><br>
				<div class="form-container table-container">
					<form action="<?=base_url();?>index.php/Direcciones/guardar" method="post" id="crudForm"  enctype="multipart/form-data" accept-charset="utf-8">
						<div class="form-group codigo_postal_form_group row">
						<label class="col-sm-3 control-label">Código Postal<span class='required'>*</span></label>
		                    <div class="col-sm-9">
		                     	<input id='field-codigo_postal' class='form-control' name='codigo_postal' type='text' value="" maxlength='5' />
		                    </div>
		                </div>
		                <div class="form-group estado_idEstado_form_group row">
		                <label class="col-sm-3 control-label">Estado<span class='required'>*</span></label>
		                    <div class="col-sm-9">
		                    	<select id='field-estado_idEstado'  name='estado_idEstado' class='chosen-select' data-placeholder='Seleccionar Estado' style='width:300px'>
		                    		<?php foreach ($estado as $item) {?>
		                    				<option value='<?php echo $item->idEstado; ?>'><?php echo "$item->estado"; ?></option>
		                    		<?php } ?>                    		                   	
		                    	</select>
		                    </div>
		                </div>
		                <div class="form-group municipio_form_group row">
		                <label class="col-sm-3 control-label">Municipio<span class='required'>*</span></label>
		                    <div class="col-sm-9">
		                        <input id='field-municipio' class='form-control' name='municipio' type='text' value="" maxlength='100' />
		                    </div>
		                </div>
		                <div class="form-group colonia_form_group row">
		                <label class="col-sm-3 control-label">Colonia<span class='required'>*</span></label>
		                    <div class="col-sm-9">
		                        <input id='field-colonia' class='form-control' name='colonia' type='text' value="" maxlength='100' />
		                    </div>
		                </div>
		                <div class="form-group calle_form_group row">
		                <label class="col-sm-3 control-label">Calle<span class='required'>*</span></label>
		                	<div class="col-sm-9">
		                		<input id='field-calle' class='form-control' name='calle' type='text' value="" maxlength='100' />
		                	</div>
		                </div>
		                <div class="form-group numero_form_group row">
		                <label class="col-sm-3 control-label">Número<span class='required'>*</span></label>
		                	<div class="col-sm-9">
		                		<input id='field-numero' class='form-control' name='numero' type='text' value="" maxlength='10' />
		                	</div>
		                </div>
		                <div class="form-group telefono_form_group row">
		                <label class="col-sm-3 control-label">Teléfono<span class='required'>*</span></label>
		                	<div class="col-sm-9">
		                		<input id='field-telefono' class='form-control' name='telefono' type='text' value="" maxlength='15' />
		                	</div>
		                </div>
		                <input type="hidden" name='cliente_idCliente' value="<?php echo $this->session->userdata('idUsuario'); ?>">
		                <button class="btn btn-secondary btn-success b10" type="submit" id="form-button-save">Guardar</button>
		            </form>
		        </div>
    	<?php } ?> 
	</div>
</div>

  