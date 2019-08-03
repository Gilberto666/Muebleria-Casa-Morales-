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
			$crud->columns('idPedido','cantidad_producto','fecha_pedido','total','pedido_idEstatus','pedido_idCliente');
			$crud->required_fields('cantidad_producto','fecha_pedido','total','estatus','pedido_idCliente');
			$crud->set_relation('pedido_idCliente','usuario','nombre');
			$crud->display_as('fecha_pedido','Fecha Pedido');
			$crud->display_as('pedido_idCliente','Cliente');
			$crud->display_as('pedido_idEstatus','Estatus');
			$crud->set_relation('pedido_idEstatus','estatus','estatus');


			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/pedido.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>

