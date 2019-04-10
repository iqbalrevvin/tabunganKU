<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('outputView');
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();

		$crud->set_table('kelas');
		$crud->set_subject('Daftar Kelas');
		$crud->display_as('idProdi', 'Program Studi');

		/*VALIDATION*/
		$crud->required_fields('nama_kelas', 'idProdi');
		/*------------*/

		/*RELATION*/
		$crud->set_relation('idProdi', 'program_studi', 'nama_program_studi');

		/*CALLBACK*/
		#$crud->callback_column('nama_kelas',array($this,'kelas_callback'));
		/*--------------*/


		$output 		= $crud->render();
		$data['judul'] 	= 'Daftar Kelas';
		#$data['crumb'] 	= ['Alamat' => ''];
		$template 		= 'admin_template';
		$view 			= 'grocery';

		$this->outputview->output_admin($view, $template, $data, $output);
	}

	// function kelas_callback($value, $primary_key = null){
	// 	$value = '<b>'.$value.'</b>';
	// 	return $value;
	// }

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Sekolah/Kelas.php */