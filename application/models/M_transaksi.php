<?php  

/**
 * 
 */
class M_transaksi extends CI_Model
{
	
	public function getDataTransaksi(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('paket', 'transaksi.id_paket = paket.id_paket');
		return $this->db->get();
	}
	public function getDataPaket($id){
		$this->db->select('harga_paket');
		$this->db->from('paket');
		$this->db->where('id_paket', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function input_transaksi_data($data){
		$this->db->insert('transaksi', $data);
		return $this;
	}

	public function delete_transaksi($id){
		$this->db->where('id_transaksi', $id);
		$this->db->delete('transaksi');
		return $this;
	}
}

?>