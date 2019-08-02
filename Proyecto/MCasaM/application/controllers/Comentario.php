<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 07/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php 

class Comentario extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('comentario');
			$crud->columns('idComentario','comentario','comentario_idEstatus','comentario_idCliente','comentario_idRespuesta');
			$crud->required_fields('comentario','estatus','comentario_idCliente');
			$crud->set_relation('comentario_idCliente','usuario','nombre');
			$crud->set_relation('comentario_idRespuesta','respuesta','respuesta');
			$crud->display_as('comentario_idRespuesta','Respuesta');
			$crud->display_as('comentario_idCliente','Cliente');			
			$crud->display_as('comentario_idEstatus','Estatus');
			$crud->set_relation('comentario_idEstatus','estatus','estatus');


			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/comentario.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>