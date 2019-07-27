<?php
defined('BASEPATH') OR exit('No tienes Permiso');

class Comentarios extends CI_Controller {
	function __construct(){				
		parent::__construct();
		$this->load->model('Comentarios_model');
	}
	
	public function registrar(){
		$data['contenido']='registrar';
		$this->load->view('template/admin/templateAdmin',$data);
	}
	
	public function guardar(){
		$this->Comentarios_model->setNombre($this->input->post('nombre'));
		$this->Comentarios_model->setApellido($this->input->post('apellido'));
		$this->Comentarios_model->setEmail($this->input->post('email'));
		$this->Comentarios_model->setPassword(md5($this->input->post('password')));		
		$this->Comentarios_model->settipo($this->input->post('tipo'));
		$this->Comentarios_model->guardar();
		redirect('MuebleriaCasaMorales/login');		
	}
}
