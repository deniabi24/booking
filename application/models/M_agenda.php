<?php  

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class M_agenda extends CI_Model
{
	
	public function showAgenda(){
		$this->db->order_by('id_agenda','DESC');
		return $this->db->get('agenda', 5);
	}

	public function inputAgenda($data){
		
		$this->db->insert('agenda', $data);
		return $this;
	}

	public function deleteAgenda($id){
		$this->db->where('id_agenda', $id);
		return $this->db->delete('agenda');
	}

	public function getDataTransaksi(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('paket', 'transaksi.id_paket = paket.id_paket');
		$this->db->order_by('id_transaksi', 'DESC');
		return $this->db->get();
	}
}

?>