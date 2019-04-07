<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('customer/Customer_m');

	}

	function cekJenisRekening(){
		$jenisRekening 				= $this->input->post('jenisRekening');
		$getJenisSimpanan 			= $this->Customer_m->getJangkaSimpanan($jenisRekening);
		$data = [
		    'jangkaSimpan' => $getJenisSimpanan,
		    'jenis' => $jenisRekening
		];
		$this->load->view('customer/selectJangkaSimpanan', $data);
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
		$validate->set_rules('NIK', 'NIK', 'min_length[16]|max_length[16]|numeric|is_unique[nasabah.no_identitas]');
		$validate->set_rules('email', 'Email', 'valid_email|is_unique[nasabah.email]');

		if ($validate->run() == TRUE) {
			$callback = [
			    'status' 	=> 'sukses',
			    'pesan' 	=> 'Data Berhasil Disimpan' 
			];
			$i = $this->input;
			$data = [
				'tipe_nasabah' 	=> $i->post('tipeNasabah'),
				'no_identitas' 	=> $i->post('NIK'),
				'nama_nasabah' 	=> $i->post('namaNasabah'),
				'jenis_kelamin' => $i->post('JK'),
				'tempat_lahir'  => $i->post('tempatLahir'),
				'tanggal_lahir' => $i->post('tanggalLahir'),
				'no_hp' 		=> $i->post('noHP'),
				'email' 		=> $i->post('email')
			];
			$this->Customer_m->addCustomer($data);		
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