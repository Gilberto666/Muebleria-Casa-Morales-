<?php 

class Compra extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('compra');
			$crud->columns('idCompra','fecha_compra','estatus','compra_idPedido');
			$crud->required_fields('fecha_compra','estatus','compra_idPedido');
			$crud->set_relation('compra_idPedido','pedido','idPedido');
			$crud->display_as('compra_idPedido','Número Pedido');
			$crud->display_as('fecha_compra','Fecha de la compra');

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/compra.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>
