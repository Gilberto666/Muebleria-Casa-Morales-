<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		public function index()
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->load->model('Usuario_model');
			$fila=$this->Usuario_model->getUser($email);

			if($fila!=null){
				if($fila->password==$password){
					$data = array(
								'idUsuario' => $fila->idUsuario,
								'nombre' => $fila->nombre,
								'apellido' =>$fila->apellido,
								'email' =>$fila->email,
								'tipo'=>$fila->tipo,
								'login'=> true
							);

					$this->session->set_userdata($data);
					redirect('MuebleriaCasaMorales/index');
				}else{
					redirect('MuebleriaCasaMorales/index');

				}
			}
			else{
				redirect('MuebleriaCasaMorales/index');
			}
		}


	}

?>