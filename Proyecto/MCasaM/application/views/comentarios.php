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
<div class="col-sm-12 col-md-9" style="margin-left: 30px;"><br><br>
	<h3 align="center">DÉJANOS TU COMENTARIO!!!</h3>			 
	<form action="<?php if($this->session->userdata('idUsuario')!=null){ ?>
 		<?=base_url();?>index.php/Comentarios/guardar
        <?php }else {?>
         <?=base_url();?>index.php/MuebleriaCasaMorales/login
        <?php } ?> " method="post">
		<div class="row">
			<div class="col-md-4">
				<label for="nombre">Nombre :</label><br> <input type="text" class="form-control" name="nombre" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" 
				value="<?php if($this->session->userdata('idUsuario')!=null){ 
					echo $this->session->userdata('nombre');
				}else {
				} ?> " 
				autofocus required title="Ajusta el formato"/>
			</div>
			<div class="col-md-4">
				<label for="apellido">Apellido :</label><br> <input type="text" class="form-control" name="apellido" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" 
				value="<?php if($this->session->userdata('idUsuario')!=null){ 
					echo $this->session->userdata('apellido');
				}else {
				} ?> " 
				required title="Ajusta el formato"/> 
			</div>
			<div class="col-md-4">
				<label for="email">E-mail   :</label><br> <input type="email" class="form-control" name="email"  pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
				value="<?php if($this->session->userdata('idUsuario')!=null){ 
					echo $this->session->userdata('email');
				}else {
				} ?> " 
				required title="Ajusta el formato"/>
			</div>
			<div class="col-md-12">
				<label for="comentario">Mensaje :</label><br> <textarea type="text" size="150" class="form-control" name="comentario" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0-9 ,.'-]{4,240}" required title="Ajusta el formato"></textarea>
			</div>
			<div class="col-md-12">
				<br>
				<input type="hidden" name="comentario_idEstatus" value="2">
				<input type="hidden" name="comentario_idRespuesta" value="1">
				<input type="hidden" name="comentario_idCliente" value="<?php echo $this->session->userdata('idUsuario'); ?>">
				<button type="submit" class="btn btn-success">Publicar</button>	
			</div>
		</div>
	</form><br>
</div>			