<?php
/**
* Pagina de login
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:37 pm
* Última Modificación el 19/07/2019
*/
?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="card border-primary" align="center">
    	<div class="card-header"><h2>INICIA YA!!!</h2></div>
    	<div class="card-body text-primary">
    		<h5 class="card-title">Tu cuenta</h5>
    			<!--Este formulario enviará el email y la password al Controlador Login en su función index, al ser exitoso el logueo, activiará en el menú el botón del CPanel en el caso de ser administrador y ocultará los botones de registrar y login-->
    			<form method="post" action="<?=base_url()?>index.php/Login" id="crudForm">
					<div class="form-group">
			    		<label for="email">Email</label><br>
			    		<input type="email" class="form-control" name="email" id="email"  placeholder=" name@example.com" autofocus required>
					</div>
					<div>
						<label for="pass">Password:</label><br>
						<input type="password"  class="form-control" name="password" id="password" placeholder="Ingresa un password" required><br>
					</div>
					<div>
						<button type="submit" class="btn btn-info btn-lg">Enviar</button>
					</div>
				</form>
  			</div>
		</div><br>
	</div>
</div>

				
			  





