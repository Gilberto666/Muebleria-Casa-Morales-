<?php
defined('BASEPATH') OR exit('No tienes Permiso');

class Registrar extends CI_Controller {
	function __construct(){				
		parent::__construct();
		$this->load->model('Registrar_model');
	}
	
	public function registrar(){
		$data['contenido']='registrar';
		$this->load->view('template/admin/templateAdmin',$data);
	}
	
	public function guardar(){
		$this->Registrar_model->setNombre($this->input->post('nombre'));
		$this->Registrar_model->setApellido($this->input->post('apellido'));
		$this->Registrar_model->setEmail($this->input->post('email'));
		$this->Registrar_model->setPassword($this->input->post('password'));		
		$this->Registrar_model->settipo($this->input->post('tipo'));
		$this->Registrar_model->guardar();
		redirect('MuebleriaCasaMorales/login');		
	}
}
