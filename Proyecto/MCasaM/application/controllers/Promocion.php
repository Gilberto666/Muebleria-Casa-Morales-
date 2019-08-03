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

class Promocion extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('promocion');
			$crud->columns('idPromocion','nombre_promocion','fecha_inicial','fecha_final','descripcion_promo','imagen_promo','promocion_idProducto','promocion_idEstatus');
			$crud->required_fields('nombre_promocion','fecha_inicial','fecha_final','descripcion_promo','imagen_promo','promocion_idProducto','promocion_idEstatus');
			$crud->set_relation('promocion_idProducto','producto','nombre_producto');			
			$crud->display_as('nombre_promocion','Nombre Promoción');
			$crud->display_as('promocion_idProducto','Producto');
			$crud->display_as('fecha_final','Fecha Final');
			$crud->display_as('fecha_inicial','Fecha Inicial');
			$crud->display_as('imagen_promo','Imagén del Promoción');
			$crud->display_as('idPromocion','IdPromoción');
			$crud->display_as('descripcion_promo','Descripción Promoción');
			$crud->display_as('promocion_idEstatus','Estatus');
			$crud->set_relation('promocion_idEstatus','estatus','estatus');			
			$crud->set_field_upload('imagen_promo','assets/uploads/files/promo', "jpg|jpeg|png");



			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/promocion.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>

