<?php 

class Direccion extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('direccion');
			$crud->columns('idDireccion','codigo_postal','estado_idEstado','municipio','colonia','calle','numero','telefono','cliente_idCliente');
			$crud->required_fields('codigo_postal','estado_idEstado','municipio','colonia','calle','numero','telefono','cliente_idCliente');
			$crud->display_as('numero','Número');
			$crud->display_as('cliente_idCliente','Número de Cliente');
			$crud->display_as('codigo_postal','Código Postal');
			$crud->display_as('telefono','Teléfono');
			$crud->display_as('estado_idEstado','Estado');
			$crud->set_relation('cliente_idCliente','usuario','nombre');
			$crud->set_relation('estado_idEstado','estado','estado');


			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/direccion.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>
