<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('customer/Customer_m');

	}

	public function index(){
		#$data['listJenisRekening'] 	= $jenisRekening;
		$data['judul'] 					= 'PENDAFTARAN NASABAH';
		$template 						= 'admin_template';
		$view 							= 'customer/registration.php';

		$this->outputview->output_admin($view, $template, $data);
	}

	public function formRegisterView(){
		$jenisRekening = $this->Customer_m->listJenisRekening();
		$data['listJenisRekening'] 	= $jenisRekening;
		$data['judul'] 				= 'PENDAFTARAN NASABAH';
		#$template 					= 'blank';
		#$view 						= 'customer/formRegistration.php';
		#$this->outputview->output_admin($view, $template, $data);
		$this->load->view('customer/formRegistration', $data, FALSE);
	}

	function addCustomer(){
		$validate = $this->form_validation;
		$validate->set_rules('NIK', 'NIK', 'required|min_length[16]|max_length[16]');

		if ($validate->run() == TRUE) {
			$callback = [
			    'status' 	=> 'sukses',
			    'pesan' 	=> 'Data Berhasil Disimpan' 
			];
		}else{
			$callback = [
			    'status' 	=> 'gagal',
			    'pesan' 	=> validation_errors() 
			];
		}
		echo json_encode($callback);
	}

}

/* End of file Registration.php */
/* Location: ./application/controllers/customer/Registration.php */