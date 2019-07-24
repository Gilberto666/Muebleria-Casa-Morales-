<?php 
class Login extends CI_CONTROLLER{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model');

	}

	public function index(){
		$this->load->view('login');
	}

	public function login(){
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$this->Usuario_model->setUsuario($user);
		$this->Usuario_model->setPassword($pass);
		$cantidad = $this->Usuario_model->login();
		if ($cantidad <= 0) {
			redirect('Usuario/index');
		}else{
			$datosUsuario=$this->Usuario_model->listar();

			foreach ($datosUsuario as $du) {
				$sesion_data = array(
					'user' => $du->user
				);
			}
			$this->session->set_userdata($set_userdata);
			redirect('Usuario/index');
		}
	}
}
