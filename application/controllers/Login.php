<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_login', 'm');
	}
	
	public function index($error = NULL)
	{
		$data = array(
			'judul' =>'150 FutsallApp',
			'tittle' => '150',
			'error' => $error
		);
		$this->load->view('pages/login', $data);
	}

	public function logMeIn(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		
		$cek = $this->m->checkingData($username, $password);
		if ($cek == 1) {
			// get data user login
			$getData = $this->m->getDataUser($username, $password);

			// get session
			$data = array(
				'username' => $getData->username,
				'logged' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url().'dashboard');
		}else{
			$error = '<script>alert("Data Tidak Valid")</script>';
			$this->index($error);
		}
	}

	public function logMeOut(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}

?>