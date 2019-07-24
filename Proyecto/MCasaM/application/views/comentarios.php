<?php
/**
* Pagina de comentarios
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado ‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:39 pm
* Última Modificación el 19/07/2019
*/
?>
<div class="col-sm-12 col-md-9" style="margin-left: 30px;"><br><br>
	<h3 align="center">DÉJANOS TU COMENTARIO!!!</h3>			 
 	<form action="#" method="post"> 
		<div class="row">
			<div class="col-md-4">
				<label for="nombre_c">Nombre :</label><br> <input type="text" class="form-control" name="nombre_c" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" autofocus required title="Ajusta el formato"/>
			</div>
			<div class="col-md-4">
				<label for="apellido">Apellido :</label><br> <input type="text" class="form-control" name="apellido" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required title="Ajusta el formato"/> 
			</div>
			<div class="col-md-4">
				<label for="email_c">E-mail   :</label><br> <input type="email" class="form-control" name="email_c"  pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Ajusta el formato"/>
			</div>
			<div class="col-md-12">
				<label for="mensaje">Mensaje :</label><br> <textarea type="text" size="150" class="form-control" name="mensaje" pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0-9 ,.'-]{4,240}" required title="Ajusta el formato"></textarea>
			</div>
			<div class="col-md-12">
				<br>
				<input type="hidden" name="privilegio" value="0">
				<input type="hidden" name="comenid_usuario">
				<button type="submit" class="btn btn-success">Publicar</button>	
			</div>
		</div>
	</form><br>
</div>			