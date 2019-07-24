<?php 

class Pedido extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('pedido');
			$crud->columns('idPedido','cantidad_producto','fecha_pedido','total','estatus','pedido_idCliente','pedido_idProducto');
			$crud->required_fields('cantidad_producto','fecha_pedido','total','estatus','pedido_idCliente','pedido_idProducto');
			$crud->set_relation('pedido_idCliente','cliente','idCliente');
			$crud->set_relation('pedido_idProducto','producto','idProducto');			
			$crud->display_as('fecha_pedido','Fecha Pedido');
			$crud->display_as('pedido_idProducto','Productos');
			$crud->display_as('pedido_idCliente','Cliente');

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/pedido.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>

