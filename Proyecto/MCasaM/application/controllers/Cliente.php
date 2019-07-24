<?php 

class Cliente extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('cliente');
			$crud->columns('idCliente','nombre_cliente','apellido_cliente','email_cliente','password_cliente','telefono','tipo');
			$crud->required_fields('nombre_cliente','apellido_cliente','email_cliente','password_cliente','telefono','tipo');
			$crud->display_as('nombre_cliente','Nombre');
			$crud->display_as('apellido_cliente','Apellido');
			$crud->display_as('email_cliente','Email');
			$crud->display_as('password_cliente','Password');
			$crud->display_as('telefono','Teléfono');
			$crud->set_relation('tipo','tipo','nombre_tipo_usuario');


			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/cliente.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>