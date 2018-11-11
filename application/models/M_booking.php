<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_booking extends CI_Model {

	public function getDataBooking(){
		$this->db->select('start');
		$this->db->select('end');
		$this->db->select('status');
		$this->db->from('tbl_booking');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function inputBooking($data){
		$this->db->insert('tbl_booking', $data);
		return $this;
	}

}

/* End of file M_booking.php */
/* Location: ./application/models/M_booking.php */