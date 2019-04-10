<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

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

		$crud->set_table('alamat_provinsi');
		$crud->set_subject('Daftar Provinsi');

		/*VALIDATION*/
		$crud->required_fields('nama_provinsi');
		/*------------*/

		/*CALLBACK*/
		$crud->callback_column('nama_provinsi',array($this,'provinsi_callback'));
		/*--------------*/


		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Provinsi';;
		#$data['crumb'] 	= ['Kecamatan' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

	function provinsi_callback($value, $primary_key = null){
		$value = '<b>'.$value.'</b>';
		return $value;
	}

	
}

/* End of file Desa.php */
/* Location: ./application/controllers/DataPendukung/Alamat/Desa.php */
