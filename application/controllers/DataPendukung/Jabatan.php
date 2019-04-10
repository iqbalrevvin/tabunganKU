<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('outputView');
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		$crud 		= new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('jabatan');
		$crud->set_subject('Daftar Jabatan');

		/*VALIDATION*/
		$crud->required_fields('nama_jabatan');
		/*------------*/

		/*CALLBACK*/
		#$crud->callback_column('nama_jabatan',array($this,'jabatan_callback'));
		/*--------------*/

		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Jabatan';
		#$data['crumb'] 	= ['Alamat' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/DataPendukung/Jabatan.php */