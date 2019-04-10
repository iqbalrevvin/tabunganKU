<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramStudi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('outputView');
		$this->load->library('grocery_CRUD');

	}

	// List all your items
	public function index(){
		$crud 		= new grocery_CRUD();

		$crud->set_table('program_studi');
		$crud->set_subject('Daftar Program Studi');

		/*VALIDATION*/
		$crud->required_fields('nama_program_studi', 'singkatan_prodi');
		/*------------*/

		/*CALLBACK*/
		#$crud->callback_column('nama_program_studi',array($this,'prodi_callback'));
		/*--------------*/


		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Program Studi';
		#$data['crumb'] 	= ['Alamat' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

	/*function prodi_callback($value, $primary_key = null){
		$value = '<b>'.$value.'</b>';
		return $value;
	}*/
	

}

/* End of file ProgramStudi.php */
/* Location: ./application/controllers/Sekolah/ProgramStudi.php */
