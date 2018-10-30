<?php  
defined('BASEPATH') OR exit('Tidak Dapat Mengakses File');

/**
 * 
 */
class Errorpage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index(){
		$this->load->view('pages/errorpage');
	}
}
?>