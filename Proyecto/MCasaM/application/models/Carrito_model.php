<?php 

class Carrito_model extends CI_Model
{
	
	public function get_all()
	{
		$sql= $this->db->get('producto');//nombre de la tabla
		return $sql->result_array();//regresa los resultados en un array
	}
}

?>