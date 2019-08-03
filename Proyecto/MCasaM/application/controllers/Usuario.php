<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 06/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php
class Usuario extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
			
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('usuario');
			$crud->columns('idUsuario','nombre','apellido','email','password','tipo');
			$crud->required_fields('nombre','apellido','email','password','tipo');
			$crud->set_relation('tipo','tipo','nombre_tipo_usuario');

			$output=$crud->render();			
			$this->load->view('admin/usuario.php',(array)$output);

			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>