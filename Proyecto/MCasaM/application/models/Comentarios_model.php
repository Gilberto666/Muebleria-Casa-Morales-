<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/models/
* @package application/models/
*
* @version 1.0.0
* Creado el 28/07/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
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