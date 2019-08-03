<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/views/template
* @package application/view/template
*
* @version 1.0.0
* Creado el 07/06/2019
* Ultima modificacion el 02/08/2019
*/
?>
<?php 
	$this->load->view('template/header');	
	$this->load->view($contenido);
	$this->load->view('template/footer');
?>