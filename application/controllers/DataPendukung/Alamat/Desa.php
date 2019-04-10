<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('outputView');
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud 		= new grocery_CRUD();

		$crud->set_table('alamat_desa');
		$crud->set_subject('Daftar Desa');

		/*VALIDATION*/
		$crud->required_fields('nama_desa');
		/*------------*/

		/*CALLBACK*/
		$crud->callback_column('nama_desa',array($this,'desa_callback'));
		/*--------------*/


		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Desa';
		#$data['crumb'] 	= ['Alamat' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

	function desa_callback($value, $primary_key = null){
		$value = '<b>'.$value.'</b>';
		return $value;
	}

}

/* End of file Desa.php */
/* Location: ./application/controllers/DataPendukung/Alamat/Desa.php */