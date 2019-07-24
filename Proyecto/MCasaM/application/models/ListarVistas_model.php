<?php 
defined('BASEPATH') OR exit('No tienes Permiso');
	class ListarVistas_model extends CI_Model{
		private $idPromocion;
		private $idProducto;
		private $nombre_producto;
		private $precio;
		private $detalles;

		function __construct(){				
			parent::__construct();
		}
		public function getIdPromo(){
			return $this->idPromocion;
		}
		public function setIdPromo($idPromocion){
			 $this->idPromocion=$idPromocion;
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
	}
 ?>