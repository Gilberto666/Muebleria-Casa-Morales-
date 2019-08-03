<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/models/
* @package application/models/
*
* @version 1.0.0
* Creado el 19/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php 
defined('BASEPATH') OR exit('No tienes Permiso');
	class ListarVistas_model extends CI_Model{
		private $idPromocion;
		private $idCategoria;
		private $idPedido;
		private $idEstado;
		private $idDireccion;
		private $idProducto;
		private $nombre_producto;
		private $precio;
		private $detalles;

		function __construct(){				
			parent::__construct();
		}
		public function getIdCategoria(){
			return $this->idCategoria;
		}
		public function setIdCategoria($idCategoria){
			 $this->idCategoria=$idCategoria;
		}	

		public function getIdPromo(){
			return $this->idPromocion;
		}
		public function setIdPromo($idPromocion){
			 $this->idPromocion=$idPromocion;
		}		
		public function getIdPedido(){
			return $this->idPedido;
		}
		public function setIdPedido($idPedido){
			 $this->idPedido=$idPedido;
		}

		public function getIdEstado(){
			return $this->idEstado;
		}
		public function setIdEstado($idEstado){
			 $this->idEstado=$idEstado;
		}
		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			 $this->idProducto=$idProducto;
		}
		public function getNombreProducto(){
			return $this->nombre_producto;
		}
		public function setNombreProducto($nombre_producto){
			 $this->nombre_producto=$nombre_producto;
		}
		public function getDetalles(){
			return $this->detalles;
		}
		public function setDetalles($detalles){
			 $this->detalles=$detalles;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			 $this->precio=$precio;
		}

		public function listarPromo(){
			if ($this->idPromocion!=null) {
				$this->db->where('idPromocion',$this->idPromocion);
			}	
				$promo= $this->db->get('promocion');
				return $promo->result();
		}

		public function listarProducto(){
			if ($this->idProducto!=null) {
				$this->db->where('idProducto',$this->idProducto);
			}	
				$producto= $this->db->get('producto');
				return $producto->result();
		}		

		public function listarCategoria(){
			if ($this->idCategoria!=null) {
				$this->db->where('idCategoria',$this->idCategoria);
			}	
				$categoria= $this->db->get('categoria');
				return $categoria->result();
		}

		public function listarProductoVistaPrevia(){
			$data=array(
				'idProducto'=>$this->idProducto,
				'nombre_producto'=>$this->nombre_producto,
				'detalles'=>$this->detalles,
				'precio'=>$this->precio
				);
				$this->db->where('idProducto',$this->idProducto);	
				$producto= $this->db->get('producto');
				return $producto->result();
		}

		public function listarEstados(){
			if ($this->idEstado!=null) {
				$this->db->where('idEstado',$this->idEstado);
			}	
				$estado= $this->db->get('estado');
				return $estado->result();
		}
 		public function listarPedido(){
			if ($this->idPedido!=null) {
				$this->db->where('idPedido',$this->idPedido);
			}	
				$pedido= $this->db->get('pedido');
				return $pedido->result();
		}
 
		public function listarDirecciones($cliente){
			if ($cliente!=null) {
				$this->db->where('cliente_idCliente',$cliente);
				
				$direccion= $this->db->get('direccion');
				return $direccion->result();
			}else{
				return null;
			}
		}

	}
 ?>