<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 27/07/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
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
