<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('customer/Customer_m');
		$this->load->model('other/GetAlamat_m');
	}

	public function index(){
		#$data['listJenisRekening'] 	= $jenisRekening;
		$data['judul'] 					= 'PENDAFTARAN NASABAH';
		$template 						= 'admin_template';
		$view 							= 'customer/registration.php';
		// $data['crumb']	 				= [
		//     								'Pendaftaran Nasabah' => ''
		// 								  ];

		$this->outputview->output_admin($view, $template, $data);
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

	public function formRegisterView(){
		$jenisRekening 					= $this->Customer_m->listJenisRekening();
		$data['desa'] 					= $this->GetAlamat_m->desa();
		$data['kecamatan'] 				= $this->GetAlamat_m->kecamatan();
		$data['kabupaten'] 				= $this->GetAlamat_m->kabupaten();
		$data['provinsi'] 				= $this->GetAlamat_m->provinsi();
		$data['listJenisRekening'] 		= $jenisRekening;
		$data['judul'] 					= 'PENDAFTARAN NASABAH';

		$this->load->view('customer/formRegistration', $data, FALSE);
	}

	function addCustomer(){
		$validate 		= $this->form_validation;
		$validate->set_rules('NIK', 'NIK', 'min_length[16]|max_length[16]|numeric|is_unique[nasabah.no_identitas]');
		$validate->set_rules('noHP', 'No. Hp', 'min_length[11]|max_length[14]|numeric');
		$validate->set_rules('email', 'Email', 'valid_email|is_unique[nasabah.email]');

		if ($validate->run() == TRUE) {
			$callback = [
			    'status' 	=> 'sukses',
			    'pesan' 	=> 'Data Berhasil Disimpan' 
			];
			$i = $this->input;
			//INSERT KE TABEL NASABAH
			$data = [
				'tipe_nasabah' 	=> $i->post('tipeNasabah'),
				'no_identitas' 	=> $i->post('NIK'),
				'nama_nasabah' 	=> $i->post('namaNasabah'),
				'jenis_kelamin' => $i->post('JK'),
				'tempat_lahir'  => $i->post('tempatLahir'),
				'tanggal_lahir' => $i->post('tanggalLahir'),
				'no_hp' 		=> $i->post('noHP'),
				'email' 		=> $i->post('email'),
				'alamat' 		=> $i->post('alamat'),
				'desa' 			=> $i->post('desa'),
				'kecamatan' 	=> $i->post('kecamatan'),
				'kabupaten' 	=> $i->post('kabupaten'),
				'provinsi' 		=> $i->post('provinsi')
			];
			$this->Customer_m->addCustomer($data);
			//INSERT KE TABEL REKENING NASABAH
			$norek 			= $this->Customer_m->getNomorRekeningNasabah();
			$session 		= $this->ion_auth->user()->row(); 
			$rekening = [
			    'nomor_rekening' 			=> $norek,
			    'no_identitas' 				=> $i->post('NIK'),
				'idJenis_rekening' 			=> $i->post('jenisRekening'),
				'jangka_simpanan' 			=> $i->post('jangkaSimpanan'),
				'tujuan_pembukaan_rekening' => $i->post('tujuanPembukaan'),
				'jam_pembukaan' 			=> date('H:i:s'),
				'tanggal_pembukaan' 		=> date('Y-m-d'),
				'saldo_akhir' 				=> $i->post('setorAwal'),
				'petugas' 					=> $session->first_name
			];
			$this->Customer_m->addRekeningNasabah($rekening);
			//FLASH DATA
			$this->session->set_flashdata('sukses', 'Data Nasabah Berhasil Ditambahkan');
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