<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/models/
* @package application/models/
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
	class Pedidos_model extends CI_Model{
		private $idPedido;
		private $cantidad_producto;
		private $total;
		private $fecha_pedido;
		private $pedido_idEstatus;
		private $pedido_idCliente;
	function __construct(){				
		parent::__construct();
	}
		public function getId(){
			return $this->idPedido;
		}
		public function setId($idPedido){
			 $this->idPedido=$idPedido;
		}
		public function getCantidad_producto(){
			return $this->cantidad_producto;
		}
		public function setCantidad_producto($cantidad_producto){
			 $this->cantidad_producto=$cantidad_producto;
		}
		public function getFecha_pedido(){
			return $this->fecha_pedido;
		}
		public function setFecha_pedido($fecha_pedido){
			 $this->fecha_pedido=$fecha_pedido;
		}
		public function getTotal(){
			return $this->total;
		}
		public function setTotal($total){
			 $this->total=$total;
		}
		public function getPedido_idEstatus(){
			return $this->pedido_idEstatus;
		}
		public function setPedido_idEstatus($pedido_idEstatus){
			 $this->pedido_idEstatus=$pedido_idEstatus;
		}
		public function getPpedido_idCliente(){
			return $this->pedido_idCliente;
		}
		public function setPedido_idCliente($pedido_idCliente){
			 $this->pedido_idCliente=$pedido_idCliente;
		}
		

		public function guardar(){	
				
			$data=array(
				'idPedido'=>$this->idPedido,
				'cantidad_producto'=>$this->cantidad_producto,
				'fecha_pedido'=>$this->fecha_pedido,
				'total'=>$this->total,
				'pedido_idEstatus'=>$this->pedido_idEstatus,
				'pedido_idCliente'=>$this->pedido_idCliente
			);
			$this->db->insert('pedido',$data);
		}
	}	
 ?>