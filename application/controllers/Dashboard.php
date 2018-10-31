<?php  
defined('BASEPATH') OR exit('Tidak Dapat Mengakses File');
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url().'login');
		}
		$this->load->model('M_agenda', 'm');
		$this->load->helper('date');
	}

	public function index(){
		$data['judul'] = '150 FutsallApp';
		$data['agenda_data'] = $this->m->showAgenda();
		$data['transaksi'] = $this->m->getDataTransaksi();

		$this->load->view('layout/header', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('layout/footer');
	}

	public function agendaInput(){
		$data = array(
			'id_agenda' => '',
			'agenda' => $this->input->post('agenda'),
			'tanggal_agenda' => $this->input->post('tanggal')
		);
		$this->m->inputAgenda($data);
		redirect(base_url().'dashboard');
	}

	public function deleteAgenda($id = NULL){
		if (!isset($id)) show_404();
		if($this->m->deleteAgenda($id)){
			redirect(base_url().'dashboard');
		}
	}
}

?>