<?php 
defined('BASEPATH') OR exit('No tienes Permiso');
	class Registrar_model extends CI_Model{
		private $idUsuario;
		private $nombre;
		private $apellido;
		private $email;
		private $password;
		private $tipo;
	function __construct(){				
		parent::__construct();
	}
		public function getId(){
			return $this->idUsuario;
		}
		public function setId($idUsuario){
			 $this->idUsuario=$idUsuario;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			 $this->nombre=$nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			 $this->apellido=$apellido;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			 $this->email=$email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			 $this->password=$password;
		}
		public function gettipo(){
			return $this->tipo;
		}
		public function settipo($tipo){
			 $this->tipo=$tipo;
		}

		public function guardar(){	
				
			$data=array(
				'idUsuario'=>$this->idUsuario,
				'nombre'=>$this->nombre,
				'apellido'=>$this->apellido,
				'email'=>$this->email,
				'password'=>$this->password,
				'tipo'=>$this->tipo				
			);
			$this->db->insert('usuario',$data);
		}
	}	
 ?>