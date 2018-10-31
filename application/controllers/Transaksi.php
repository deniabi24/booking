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
			'judul' => 'Transaksi',
			'header' => 'Data Transaksi',
			'subheader' => 'Lihat Data Transaksi',
			'result' => $this->m->getDataTransaksi()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('pages/transaksi', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$data = array(
			'judul' => 'Transaksi',
			'header' => 'Form Transaksi',
			'subheader' => 'Input Data Transaksi',
		);

		$this->load->view('layout/header', $data);
		$this->load->view('pages/input_transaksi', $data);
		$this->load->view('layout/footer');
	}
}

?>