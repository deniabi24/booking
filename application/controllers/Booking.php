<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url().'login');
		}
		$this->load->model('M_booking', 'm');
	}

	public function index()
	{
		$data['judul'] = 'Booking Lapangan';
		$data['header']= 'Data Booking';
		$data['subheader'] = 'Lihat Data Booking';



		
		$this->load->view('pages/booking/header', $data);
		$this->load->view('pages/booking/content', $data);
		$this->load->view('pages/booking/footer');
	}

	public function dataBooking(){
		$result = $this->m->getDataBooking();
		
		foreach($result as $row){
			$sp = $row->status;
		    if($sp == 'lunas'){
		        $color = "green";
		    }elseif ($sp == 'booking') {
		        $color = "blue";
		    }else{
		        $color = "red";
		    }
		    $data[] = array(
		        
		        'title' => $row->status,
		        'color' => $color,
		        'start' => $row->start,
		        'end' => $row->end,
		    );
		}

		echo json_encode($data);
	}

	public function input(){
		$data = array(
			'nama' => $this->input->post('nama_cs'),
			'club' => $this->input->post('nama_cl'),
			'telpon' => $this->input->post('phone'),
			'alamat' => $this->input->post('alamat'),
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
			'status' => $this->input->post('status_pembayaran')

		);
		if ($data) {
			$this->m->inputBooking($data);
			redirect(base_url().'booking');
		}
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */