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

class Producto extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('producto');
			$crud->columns('idProducto','imagen_producto','nombre_producto','precio','stock','fecha_registro','detalles','producto_idEstatus','producto_idCategoria');
			$crud->required_fields('imagen_producto','nombre_producto','precio','stock','fecha_registro','detalles','producto_idEstatus','producto_idCategoria');
			$crud->set_relation('producto_idCategoria','categoria','nombre_categoria');			
			$crud->display_as('nombre_producto','Nombre Producto');
			$crud->display_as('producto_idCategoria','Categoría');
			$crud->display_as('fecha_registro','Fecha de Registro');
			$crud->display_as('imagen_producto','Imagén del Producto');
			$crud->display_as('producto_idEstatus','Estatus');
			$crud->set_relation('producto_idEstatus','estatus','estatus');			
			$crud->set_field_upload('imagen_producto','assets/uploads/files/producto', "jpg|jpeg|png");

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/producto.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>

