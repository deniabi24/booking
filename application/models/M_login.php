<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


	public function checkingData($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		return $query->num_rows();
	}

	public function getDataUser($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users')->row();
		 
	}

}

?>