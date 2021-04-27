<?php
/**
 * 
 */
class Users_model extends CI_Model
{

	public function getAllUsers(){
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}
}
?>