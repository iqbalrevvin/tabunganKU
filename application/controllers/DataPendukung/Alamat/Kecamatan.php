<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('outputView');
		$this->load->library('grocery_CRUD');
	}

	// List all your items
	public function index(){
		$crud 		= new grocery_CRUD();

		$crud->set_table('alamat_kecamatan');
		$crud->set_subject('Daftar Kecamatan');

		/*VALIDATION*/
		$crud->required_fields('nama_kecamatan');
		/*------------*/

		/*CALLBACK*/
		#$crud->callback_column('nama_kecamatan',array($this,'kecamatan_callback'));
		/*--------------*/


		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Kecamatan';;
		#$data['crumb'] 	= ['Kecamatan' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

	/*function kecamatan_callback($value, $primary_key = null){
		$value = '<b>'.$value.'</b>';
		return $value;
	}*/

	
}

/* End of file Desa.php */
/* Location: ./application/controllers/DataPendukung/Alamat/Desa.php */
