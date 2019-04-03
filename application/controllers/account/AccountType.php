<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountType extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('OutputView');
		$this->load->library('grocery_CRUD');
		$this->load->model('account/AccountType_m');
	}

	public function index(){
		
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('jenis_rekening');
		$crud->set_subject('Jenis Rekening');
		$crud->unset_columns( 'deskripsi_jenis_rekening', 'setor_awal', 'minimal_setoran');
		#$crud->fields('kode_jenis_rekening','nama_jenis_rekening');
		$crud->display_as('kode_jenis_rekening','Kode Rekening');
    	$crud->display_as('nama_jenis_rekening','Jenis Rekening');
    	$crud->unset_texteditor('deskripsi_jenis_rekening','full_text');
    	$crud->order_by('kode_jenis_rekening','DESC');

    	$crud->required_fields('nama_jenis_rekening', 'setor_awal', 'minimal_setoran', 'fitur_penarikan', 'fitur_transfer', 'simpanan_berjangka', 'deskripsi_jenis_rekening');

    	//FIELD TYPES
		$crud->change_field_type('kode_jenis_rekening', 'invisible');

		//CALLBACK
		$crud->callback_before_insert(array($this,'kodrek_callback'));
		$crud->callback_column('kode_jenis_rekening', array($this, 'kodrekBold_callback'));
		$crud->callback_column('nama_jenis_rekening', array($this, 'jenisRekening_callback'));
		$crud->callback_column('fitur_penarikan', array($this, 'fiturPenarikan_callback'));
		$crud->callback_column('fitur_transfer', array($this, 'fiturTransfer_callback'));
		$crud->callback_column('simpanan_berjangka', array($this, 'simpananBerjangka_callback'));

		
    	
    	//GENERATE
    	$output 		= $crud->render();
    	$data['judul'] 	= 'KELOLA JENIS REKENING';
    	$data['crumb'] 	= array('Jenis Rekening' => '' );
    	$template 		= 'admin_template';
    	$view 			= 'grocery';

    	
    	

    	$this->outputview->output_admin($view, $template, $data, $output);

	}

	function kodrek_callback($post_array){
    	$post_array['kode_jenis_rekening'] = $this->AccountType_m->getKodeJenisRekening();
    	return $post_array;
	}

	function kodrekBold_callback($value, $row){
		$value = '<b>'.$value.'</b>';
		return $value;
	}

	function jenisRekening_callback($value, $row){
		$value = '<b>'.$value.'</b>';
		return $value;
	}

	function fiturPenarikan_callback($value, $row){
		if($value == 'YA'){
			$val = '<span class="m-badge m-badge--info m-badge--wide m-badge--rounded">Ya</span>';
		}else{
			$val = '<span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Tidak</span>';
		}
		return $val;
	}

	function fiturTransfer_callback($value, $row){
		if($value == 'YA'){
			$val = '<span class="m-badge m-badge--info m-badge--wide m-badge--rounded">Ya</span>';
		}else{
			$val = '<span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Tidak</span>';
		}
		return $val;
	}

	function simpananBerjangka_callback($value, $row){
		if($value == 'YA'){
			$val = '<span class="m-badge m-badge--info m-badge--wide m-badge--rounded">Ya</span>';
		}else{
			$val = '<span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Tidak</span>';
		}
		return $val;
	}


	function create_jenis_rekening($post_array, $primary_key = null){
		$kodeRekening = $this->AccountType_m->getKodeJenisRekening();
		$data = array('kode_jenis_rekening' 		=> $post_array[$this->AccountType_m->getKodeJenisRekening()], 
						'nama_jenis_rekening' 		=> $post_array['nama_jenis_rekening'],
						'setor_awal' 				=> $post_array['setor_awal'],
						'minimal_setoran' 			=> $post_array['minimal_setoran'],
						'fitur_penarikan' 			=> $post_array['fitur_penarikan'],
						'fitur_transfer' 			=> $post_array['fitur_transfer'],
						'simpanan_berjangka' 		=> $post_array['simpanan_berjangka'],
						'deskripsi_jenis_rekening' 	=> $post_array['deskripsi_jenis_rekening']
				);
		return $this->AccountType_m->insertData($data);
	}

}

/* End of file AccountType.php */
/* Location: ./application/controllers/customer/AccountType.php */