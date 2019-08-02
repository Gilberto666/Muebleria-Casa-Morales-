<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/admin
* @package application/view/admin
*
* @version 1.0.0
* Creado el 07/06/2019
* Ultima modificacion el 02/08/2019
*/
?>
<?php 
if($this->session->userdata('login')==false){
	redirect('MuebleriaCasaMorales');
}else {
?>
<?php 
if($this->session->userdata('tipo')!=1&&$this->session->userdata('tipo')!=3){
	redirect('MuebleriaCasaMorales');
}else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Casa Morales</title>
    <link rel="shortcut icon" href="<?=base_url();?>images/M_CM_L.ico" />
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/diseno_boot.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/my_style.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/animacion_style.css"/>
    <?php foreach ($css_files as $file) {?>
		<link rel="stylesheet" type="text/css" href="<?=$file;?>">
	<?php } ?>											
</head>
<body>
	<div class="container">
	    <header>
	      	<div class="row">
	      		<div class="col-sm-12 col-md-12">
					<iframe src="<?=base_url();?>media/header/header.html" style="width: 100%; height: 100%; border:solid;border-color:#ffffff;"></iframe>
	      		</div>    
	    	</div>
	 	</header>
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3E4095;" sticky-top>
	 		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav mr-auto ml-auto"> 
				        <?php if($this->session->userdata('tipo')!=3){?>
						<li class="nav-item active"><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales">Inicio </a><br>
				        </li>
				        <li class="nav-item">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Usuario/">Usuarios</a><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Producto/">Productos</a>
				        </li> 	
						<?php }else {
						?><li class="nav-item active">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales">Inicio </a><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Producto/">Productos</a>
				        </li> 
				        <?php } ?> 
				        <li class="nav-item">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Categoria/">Categorías</a><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Comentario">Comentarios</a><br>
				        </li>
				        <li class="nav-item">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Compra">Compras</a><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Pedido">Pedidos</a>
				        </li>
				        <li class="nav-item">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Promocion">Promociones</a><br>
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Respuesta">Respuestas</a>
				        </li>
				        <li class="nav-item">
				        <a style="color:white;" class="nav-link btn-outline-primary" href="<?=base_url(); ?>index.php/Reportes">Reportes</a>
	            		<br><a style="color:white; background-color:red;" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/logout" class="nav-link btn-outline-primary">Cerrar Sesión</a>
	            		</li>			        
			     	</ul>
				</div>
			</nav> 
		</div>
	 	<div class="row">
	 		<div class="col-sm-12 col-md-12" align="center">
	 			<h2>Pedidos</h2>
	 		</div>
	 	</div>
	 	<!--Variable output almacena toda la información y formularios creados por Grocery Crud-->
		<?=$output;?>

		<?php foreach ($js_files as $file){?>
		<script type="text/javascript" src="<?=$file;?>"></script>
		<?php } ?>
		<footer>
		    <br>   
		    <p align="center">TrueWorkSoft. <br> Copyright &copy; 2019 <br>Todos los derechos reservados.</p>        
		</footer> 
	</div>
 </body>
</html>
<?php } ?>
<?php } ?>