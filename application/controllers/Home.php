<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('OutputView');		
	}

	public function index(){
		$data['judul'] = 'Halaman Beranda';
		$template      = 'admin_template';
		$view          = 'home.php';
        $this->outputview->output_admin($view, $template, $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */