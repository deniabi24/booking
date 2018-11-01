<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url().'login');
		}
	}

	public function index()
	{
		$data = array(
			'judul' => 'Booking Lapangan',
			'header' => 'Data Booking',
			'subheader' => 'Lihat Data Booking',
		);
		$this->load->view('layout/header', $data);
		$this->load->view('pages/booking', $data);
		$this->load->view('layout/footer');
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */