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
}

?>