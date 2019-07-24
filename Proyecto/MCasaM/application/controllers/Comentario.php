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
			$crud->columns('idComentario','comentario','estatus','comentario_idCliente','comentario_idRespuesta');
			$crud->required_fields('comentario','estatus','comentario_idCliente');
			$crud->set_relation('comentario_idCliente','cliente','nombre_cliente');
			$crud->set_relation('comentario_idRespuesta','respuesta','respuesta');
			$crud->display_as('comentario_idRespuesta','Respuesta');
			$crud->display_as('comentario_idCliente','Cliente');

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/comentario.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>