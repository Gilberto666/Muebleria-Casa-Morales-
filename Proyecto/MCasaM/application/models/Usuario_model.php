<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/models/
* @package application/models/
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
class Usuario_model extends CI_Model
{
	public function getUser($email='')
	{
		$result=$this->db->query("SELECT * FROM usuario WHERE email='".$email."'LIMIT 1");
		if ($result->num_rows()>0) {
			return $result->row();
		}else{
			return null;
		}
	}
}
?>