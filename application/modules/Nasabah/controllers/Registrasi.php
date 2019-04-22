<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->model('Nasabah_m');
		$this->load->model('other/GetAlamat_m');
		$this->load->model('other/GetKelas_m');
		$this->load->model('other/GetProdi_m');
		$this->load->model('other/GetJabatan_m');
	}

	/*HALAMAN AWAL REGISTRASI NASABAH*/
	public function index(){
		#$data['listJenisRekening'] 	= $jenisRekening;
		$data['judul'] 					= 'PENDAFTARAN NASABAH';
		$template 						= 'admin_template';
		$view 							= 'Registrasi/registrasi.php';
		// $data['crumb']	 				= [
		//     								'Pendaftaran Nasabah' => ''
		// 								  ];

		$this->outputview->output_admin($view, $template, $data);
	}
	/*-------------------------------------------------------------------------*/

	/*DETAIL NASABAH SAAT MEMILIH JENIS NASABAH*/
	function cekTipeNasabah(){
		$tipeNasabah 	= $this->input->post('tipeNasabah');
		$getProdi 		= $this->GetProdi_m->getProdi();
		$getKelas 		= $this->GetKelas_m->getKelas();
		$getJabatan 	= $this->GetJabatan_m->getJabatan();
		$data = [
		    'tipeNasabah' 	=> $tipeNasabah, 
		    'prodi' 		=> $getProdi,
		    'kelas' 		=> $getKelas,
		    'jabatan' 		=> $getJabatan
		];

		$this->load->view('Registrasi/selectDetailNasabah', $data);
	}
	/*-------------------------------------------------------------------------*/

	/*CEK JENIS TABUNGAN BERJANGKA SAAT MEMILIH JENIS REKENING*/
	function cekJenisRekening(){
		$jenisRekening 				= $this->input->post('jenisRekening');
		$getJenisSimpanan 			= $this->Nasabah_m->getJangkaSimpanan($jenisRekening);
		$data = [
		    'jangkaSimpan' => $getJenisSimpanan,
		    'jenis' => $jenisRekening
		];
		$this->load->view('Registrasi/selectJangkaSimpanan', $data);
	}
	/*----------------------------------------------------------------------------------*/

	/*INTERFACE FROM REGISTRASI NASABAH*/
	public function formRegisterView(){
		$jenisRekening 					= $this->Nasabah_m->listJenisRekening();
		$data['desa'] 					= $this->GetAlamat_m->desa();
		$data['kecamatan'] 				= $this->GetAlamat_m->kecamatan();
		$data['kabupaten'] 				= $this->GetAlamat_m->kabupaten();
		$data['provinsi'] 				= $this->GetAlamat_m->provinsi();
		$data['listJenisRekening'] 		= $jenisRekening;
		$data['judul'] 					= 'PENDAFTARAN NASABAH';

		$this->load->view('Registrasi/formRegistrasi', $data, FALSE);
	}
	/*--------------------------------------------------------------------------*/

	/*INPUT DATA NASABAH*/
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

			/*INSERT KE TABEL NASABAH*/
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
			$this->Nasabah_m->addCustomer($data);


			/*INSERT KE TABEL REKENING*/
			$norek 			= $this->Nasabah_m->getNomorRekeningNasabah();
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
			$this->Nasabah_m->addRekeningNasabah($rekening);

			/*INSERT KE TABEL DETAIL NASABAH*/
				
			

			if($i->post('tipeNasabah') == 'Siswa'):
				$detailNasabah = [
				    'no_identitas' => $i->post('NIK'),
				    'idKelas' => $i->post('kelas') 
				];
				$this->Nasabah_m->addDetailSiswa($detailNasabah);
			else:
				$detailNasabah = [
				    'no_identitas' 	=> $i->post('NIK'),
				    'idJabatan' 	=> $i->post('jabatan')
				];
				$this->Nasabah_m->addDetailTenpen($detailNasabah);
			endif;

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
	/*------------------------------------------------------------------------------------------------*/

}

/* End of file Registrasi.php */
/* Location: ./application/modules/Nasabah/controllers/Registrasi.php */