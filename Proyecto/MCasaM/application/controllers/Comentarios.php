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
		$this->Comentarios_model->setComentario($this->input->post('comentario'));
		$this->Comentarios_model->setEstatus($this->input->post('comentario_idEstatus'));
		$this->Comentarios_model->setCliente($this->input->post('comentario_idCliente'));
		$this->Comentarios_model->setRespuesta($this->input->post('comentario_idRespuesta'));		
		$this->Comentarios_model->guardar();
		redirect('MuebleriaCasaMorales/RegistroExitoso');		
	}
}
