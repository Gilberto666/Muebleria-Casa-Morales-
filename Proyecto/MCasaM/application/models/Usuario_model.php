<?php 
/**
 * 
 */
class Usuario_model extends CI_Model
{
	//**Datos Administrador**//
	private $idAdministrador;
	private $nombre;
	private $apellido;
	private $email;
	private $password;
	private $tipo;
	

	//**Datos Cliente**//
	private $idCliente;
	private $nombre_cliente;
	private $apellido_cliente;
	private $email_cliente;
	private $password_cliente;

	function __construct(){				
		parent::__construct();
	}

	//**Get y Set Administrador**//
	public function getIdA(){
		return $this->idAdministrador;
	}
	public function setIdA($idAdministrador){
		$this->idAdministrador=$idAdministrador;
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
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo=$tipo;
	}
	//**Get y Set Cliente**//
	public function getIdC(){
		return $this->idCliente;
	}
	public function setIdC($idCliente){
		$this->idCliente=$idCliente;
	}
	public function getNombreC(){
		return $this->nombre_cliente;
	}
	public function setNombreC($nombre_cliente){
		$this->nombre_cliente=$nombre_cliente;
	}
	public function getApellidoC(){
		return $this->apellido_cliente;
	}
	public function setApellidoC($apellido_cliente){
		$this->apellido_cliente=$apellido_cliente;
	}
	public function getEmail_C(){
		return $this->email_cliente;
	}
	public function setEmailC($email_cliente){
		$this->email_cliente=$email_cliente;
	}
	public function getPasswordC(){
		return $this->password_cliente;
	}
	public function setPasswordC($password_cliente){
		$this->password_cliente=$password_cliente;
	}
//**********************************************************************************************************************************//
	public function login(){
		$llave = $this->db->select("AES_ENCRYPT('$this->pass','$this->user') as pass")
						  ->get();
		$llave = $llave->result();

		foreach ($llave as $l ) {
			$pass = $l->pass;	
		}

		$data = array(
			'user' => $this->user,
			'pass' => $pass
		);
		$usu =$this->db->where($data)
					   ->get('usuario');
			return $usu->num_rows();
	}

	public function listar(){
		if ($this->user != null) {
			$this->db->where('user',$this->user);
		}
		$res = $this->db->get('Usuario');
		return $res->result();
	}
}
?>