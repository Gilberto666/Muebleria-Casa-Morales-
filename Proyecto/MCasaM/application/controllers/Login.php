<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 20/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
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
				if($fila->password==md5($password)){
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