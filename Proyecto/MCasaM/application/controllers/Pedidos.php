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

class Pedidos extends CI_Controller {
	function __construct(){				
		parent::__construct();
		$this->load->model('Pedidos_model');
	}
	
	public function registrar(){
		$data['contenido']='registrar';
		$this->load->view('template/admin/templateAdmin',$data);
	}
	
	public function guardar(){
		$this->Pedidos_model->setCantidad_producto($this->input->post('cantidad_producto'));
		$this->Pedidos_model->setTotal($this->input->post('total'));
		$this->Pedidos_model->setFecha_pedido($this->input->post('fecha_pedido'));
		$this->Pedidos_model->setPedido_idEstatus($this->input->post('pedido_idEstatus'));
		$this->Pedidos_model->setPedido_idCliente($this->input->post('pedido_idCliente'));		
		$this->Pedidos_model->guardar();
		redirect('Carrito/compras');		
	}
}
