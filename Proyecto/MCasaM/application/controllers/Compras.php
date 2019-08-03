<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 31/07/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php
defined('BASEPATH') OR exit('No tienes Permiso');

class Compras extends CI_Controller {
	function __construct(){				
		parent::__construct();
		$this->load->model('Compras_model');
	}
	
	public function registrar(){
		$data['contenido']='registrar';
		$this->load->view('template/admin/templateAdmin',$data);
	}
	
	public function guardar(){
		$this->Compras_model->setFecha_compra($this->input->post('fecha_compra'));
		$this->Compras_model->setPendiente($this->input->post('pendiente'));
		$this->Compras_model->setCompra_idPedido($this->input->post('compra_idPedido'));
		$this->Compras_model->guardar();
		redirect('Factura/factura/');
	}
}
