<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/models/
* @package application/models/
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
	class Compras_model extends CI_Model{
		private $idCompra;
		private $fecha_compra;
		private $pendiente;
		private $compra_idPedido;
	function __construct(){				
		parent::__construct();
	}
		public function getId(){
			return $this->idCompra;
		}
		public function setId($idCompra){
			 $this->idCompra=$idCompra;
		}
		public function getFecha_compra(){
			return $this->fecha_compra;
		}
		public function setFecha_compra($fecha_compra){
			 $this->fecha_compra=$fecha_compra;
		}
		public function getPendiente(){
			return $this->pendiente;
		}
		public function setPendiente($pendiente){
			 $this->pendiente=$pendiente;
		}
		public function getCompra_idPedido(){
			return $this->compra_idPedido;
		}
		public function setCompra_idPedido($compra_idPedido){
			 $this->compra_idPedido=$compra_idPedido;
		}

		public function guardar(){	
				
			$data=array(
				'idCompra'=>$this->idCompra,
				'fecha_compra'=>$this->fecha_compra,
				'pendiente'=>$this->pendiente,
				'compra_idPedido'=>$this->compra_idPedido
			);
			$this->db->insert('compra',$data);
		}
	}	
 ?>