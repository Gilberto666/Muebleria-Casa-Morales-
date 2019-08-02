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
	class Direcion_model extends CI_Model{
		private $codigo_postal;
		private $estado_idEstado;
		private $municipio;
		private $colonia;
		private $calle;
		private $numero;
		private $telefono;
		private $cliente_idCliente;
	function __construct(){				
		parent::__construct();
	}
		public function getCodigo_postal(){
			return $this->codigo_postal;
		}
		public function setCodigo_postal($codigo_postal){
			 $this->codigo_postal=$codigo_postal;
		}
		public function getEstado_idEstado(){
			return $this->estado_idEstado;
		}
		public function setEstado_idEstado($estado_idEstado){
			 $this->estado_idEstado=$estado_idEstado;
		}
		public function getMunicipio(){
			return $this->municipio;
		}
		public function setMunicipio($municipio){
			 $this->municipio=$municipio;
		}
		public function getColonia(){
			return $this->colonia;
		}
		public function setColonia($colonia){
			 $this->colonia=$colonia;
		}
		public function getCalle(){
			return $this->calle;
		}
		public function setCalle($calle){
			 $this->calle=$calle;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			 $this->numero=$numero;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			 $this->telefono=$telefono;
		}
		public function getCliente_idCliente(){
			return $this->cliente_idCliente;
		}
		public function setCliente_idCliente($cliente_idCliente){
			 $this->cliente_idCliente=$cliente_idCliente;
		}

		public function guardar(){	
				
			$data=array(
				'codigo_postal'=>$this->codigo_postal,
				'estado_idEstado'=>$this->estado_idEstado,
				'municipio'=>$this->municipio,
				'colonia'=>$this->colonia,
				'calle'=>$this->calle,
				'numero'=>$this->numero,
				'telefono'=>$this->telefono,
				'cliente_idCliente'=>$this->cliente_idCliente				
			);
			$this->db->insert('direccion',$data);
		}
	}	
 ?>