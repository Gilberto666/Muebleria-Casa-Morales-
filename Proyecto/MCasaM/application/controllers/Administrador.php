<?php 

class Administrador extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
			
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('administrador');
			$crud->columns('idAdministrador','nombre','apellido','email','password','tipo');
			$crud->required_fields('nombre','apellido','email','password','tipo');
			$crud->set_relation('tipo','tipo','nombre_tipo_usuario');

			$output=$crud->render();			
			$this->load->view('admin/administrador.php',(array)$output);

			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>