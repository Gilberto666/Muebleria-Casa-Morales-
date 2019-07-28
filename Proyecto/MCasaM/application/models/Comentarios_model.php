<?php 
defined('BASEPATH') OR exit('No tienes Permiso');
	class Comentarios_model extends CI_Model{
		private $comentario;
		private $comentario_idEstatus;
		private $comentario_idCliente;
		private $comentario_idRespuesta;
	function __construct(){				
		parent::__construct();
	}
		public function getComentario(){
			return $this->comentario;
		}
		public function setComentario($comentario){
			 $this->comentario=$comentario;
		}
		public function getEstatus(){
			return $this->comentario_idEstatus;
		}
		public function setEstatus($comentario_idEstatus){
			 $this->comentario_idEstatus=$comentario_idEstatus;
		}
		public function getCliente(){
			return $this->comentario_idCliente;
		}
		public function setCliente($comentario_idCliente){
			 $this->comentario_idCliente=$comentario_idCliente;
		}
		public function getRespuesta(){
			return $this->comentario_idRespuesta;
		}
		public function setRespuesta($comentario_idRespuesta){
			 $this->comentario_idRespuesta=$comentario_idRespuesta;
		}

		public function guardar(){	
				
			$data=array(
				'comentario'=>$this->comentario,
				'comentario_idEstatus'=>$this->comentario_idEstatus,
				'comentario_idCliente'=>$this->comentario_idCliente,
				'comentario_idRespuesta'=>$this->comentario_idRespuesta
			);
			$this->db->insert('comentario',$data);
		}
	}	
 ?>