<?php
defined('BASEPATH') OR exit('Tidak Dapat Mengakses File');
/**
 * 
 */
class Transaksi extends CI_Controller
{
	

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url().'login');
		}
		$this->load->model('M_transaksi', 'm');
	

	}

	public function index(){
		 
		$data = array(
			'jam' => 'Jam',
			'judul' => 'Transaksi',
			'header' => 'Data Transaksi',
			'subheader' => 'Lihat Data Transaksi',
			'result' => $this->m->getDataTransaksi()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('pages/transaksi', $data);
		$this->load->view('layout/footer');
	}

	public function getDataPaket($id = NULL){

		$id = $this->input->post('id_paket');
		if ($id) {
			$query = $this->m->getDataPaket($id);
			echo json_encode($query);
		}else{
			return false;
		}
		

	}

	public function add(){
		$data = array(
			'judul' => 'Transaksi',
			'header' => 'Form Transaksi',
			'subheader' => 'Input Data Transaksi',
		);

		$this->load->view('layout/header', $data);
		$this->load->view('pages/input_transaksi', $data);
		$this->load->view('layout/footer_transaksi_form');
	}

	function add_transaksi(){
		$data = array(
			'id_transaksi' => '',
			'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
			'id_paket' => $this->input->post('id_paket'),
			'harga_paket' => $this->input->post('harga_paket'),
			'durasi' => $this->input->post('durasi'),
			'sub_total' => $this->input->post('subtotal'),
			'diskon' => $this->input->post('diskon')*100,
			'total' => $this->input->post('total')
		);

		$checking = $this->m->input_transaksi_data($data);
		if ($checking) {
			redirect(base_url().'transaksi');
		}else{
			return false;
		}
	}

	function delete($id=NULL){
		if (!isset($id)) show_404();
		if($this->m->delete_transaksi($id)){
			redirect(base_url().'transaksi');
		}else{
			return false;
		}
	}
}

?>