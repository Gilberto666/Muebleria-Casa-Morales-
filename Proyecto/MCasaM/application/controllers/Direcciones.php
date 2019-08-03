<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 30/07/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php
defined('BASEPATH') OR exit('No tienes Permiso');

class Direcciones extends CI_Controller {
	function __construct(){				
		parent::__construct();
		$this->load->model('Direcion_model');
	}
	
	public function guardar(){
		$this->Direcion_model->setCodigo_postal($this->input->post('codigo_postal'));
		$this->Direcion_model->setEstado_idEstado($this->input->post('estado_idEstado'));
		$this->Direcion_model->setMunicipio($this->input->post('municipio'));
		$this->Direcion_model->setColonia($this->input->post('colonia'));
		$this->Direcion_model->setCalle($this->input->post('calle'));
		$this->Direcion_model->setNumero($this->input->post('numero'));
		$this->Direcion_model->setTelefono($this->input->post('telefono'));
		$this->Direcion_model->setCliente_idCliente($this->input->post('cliente_idCliente'));
		$this->Direcion_model->guardar();
		redirect('MuebleriaCasaMorales/RegistroExitosoDos');		
	}
}