<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('customer/Customer_m');

	}

	public function index(){
		$jenisRekening = $this->Customer_m->listJenisRekening();
		$data['listJenisRekening'] 	= $jenisRekening;
		$data['judul'] 				= 'PENDAFTARAN NASABAH';
		$template 					= 'admin_template';
		$view 						= 'customer/registration.php';

		$this->outputview->output_admin($view, $template, $data);
	}

}

/* End of file Registration.php */
/* Location: ./application/controllers/customer/Registration.php */