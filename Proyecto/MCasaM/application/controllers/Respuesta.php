<?php 

class Respuesta extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('respuesta');
			$crud->columns('idRespuesta','respuesta','respuesta_idEstatus');
			$crud->required_fields('respuesta','respuesta_idEstatus');
			$crud->set_relation('tipo','tipo','nombre_tipo_usuario');
			$crud->display_as('respuesta_idEstatus','Estatus');
			$crud->set_relation('respuesta_idEstatus','estatus','estatus');		

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/respuesta.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>