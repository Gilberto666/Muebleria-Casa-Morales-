<?php 

class Categoria extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud  =  new grocery_CRUD(); 
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('categoria');
			$crud->columns('idCategoria','nombre_categoria','estatus');
			$crud->required_fields('nombre_categoria','estatus');
			$crud->display_as('idCategoria','IdCategoría');
			$crud->display_as('nombre_categoria','Categoría');


			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/categoria.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>