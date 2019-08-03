<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 20/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
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
		$this->Registrar_model->setPassword(md5($this->input->post('password')));		
		$this->Registrar_model->settipo($this->input->post('tipo'));
		$this->Registrar_model->guardar();
		redirect('MuebleriaCasaMorales/RegistroExitoso');		
	}
}
