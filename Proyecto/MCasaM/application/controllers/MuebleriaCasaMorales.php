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

		public function logout(){
			$this->session->sess_destroy();
			redirect('MuebleriaCasaMorales/index');
		}
	}
?>