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
	class MuebleriaCasaMorales extends CI_Controller{
	function __construct(){				
		parent::__construct();
		$this->load->model('Grocery_crud_model');
		$this->load->model('ListarVistas_model');

	}
		public function index(){
			$data['contenido']='inicio';
			$data['promocion']=$this->ListarVistas_model->listarPromo();
			$this->load->view('template/template',$data);
		}
		public function Nosotros(){			
			$data['contenido']='nosotros';
			$this->load->view('template/template',$data);
		}
		public function Contacto(){
			$data['contenido']='contacto';
			$this->load->view('template/template',$data);
		}
		public function Comentarios(){
			$data['contenido']='comentarios';
			$this->load->view('template/template',$data);
		}
		public function Login(){
			$data['contenido']='login';
			$this->load->view('template/template',$data);
		}
		public function Registrar(){
			$data['contenido']='registrar';
			$this->load->view('template/template',$data);
		}


		public function vistaprevia($idProducto){
			$data['contenido']='vistaprevia';
			$this->ListarVistas_model->setIdProducto($idProducto);
			$data['producto']=$this->ListarVistas_model->listarProductoVistaPrevia();
			$this->load->view('template/template',$data);
		}
		public function RegistroExitoso(){
			$data['contenido']='RegistroExitoso';
			$this->load->view('template/template',$data);
		}

		public function RegistroExitosoDos(){
			$data['contenido']='RegistroExitosoDos';
			$this->load->view('template/template',$data);
		}
		
		public function logout(){
			$this->session->sess_destroy();
			redirect('MuebleriaCasaMorales/index');
		}
	}
?>