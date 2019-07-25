<?php 

class Estado extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('estado');
			$crud->columns('idEstado','estado','estado_idEstatus');
			$crud->required_fields('estatus','estado');
			$crud->display_as('estado_idEstatus','Estatus');
			$crud->set_relation('estado_idEstatus','estatus','estatus');

			

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/estado.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>