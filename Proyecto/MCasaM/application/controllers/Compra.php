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
			$crud->columns('idCompra','fecha_compra','pendiente','compra_idPedido');
			$crud->required_fields('fecha_compra','pendiente','compra_idPedido');
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
