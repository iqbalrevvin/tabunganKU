<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('language');
		$this->lang->load('auth');
		$this->load->library('OutputView');		
	}

	function index()
	{
		if (!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}else{
			redirect('home');
		}
	}

	public function login()
	{
		if (!$this->ion_auth->logged_in()){
			$data['redirect'] = site_url('home');
			$view             = 'auth/login';
			$template         = 'auth_template';
			$this->outputview->output_front($view, $template, $data);
		}else{
			redirect('home');
		}
		
	}

	function ajax_login()
	{
		$remember = (bool) $this->input->post('remember');
		
		if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)){
			//JIKA USER TERDETEKSI ONLINE
			if($this->ion_auth->user()->row()->online == 'On'){
				//JIKA KONDISI USER ADALAH ADMIN
				if($this->ion_auth->is_admin()){
					$data = array('online' => 'On');
					$id = $this->ion_auth->user()->row()->id;
					$this->ion_auth->update($id, $data);
					echo "true";
				}else{
					echo "online";
					$this->ion_auth->logout();
				}
			//JIKA TERDETEKSI TIDAK ONLINE
			}else{
				$data = array('online' => 'On');
				$id = $this->ion_auth->user()->row()->id;
				$this->ion_auth->update($id, $data);
				echo "true";
			}
		}else{
			echo "false";
		}
	}

	public function logout()
	{
		$id = $this->ion_auth->user()->row()->id;
		$data = array('online' => 'Off');
		$this->ion_auth->update($id, $data);
		$logout = $this->ion_auth->logout();
		
		redirect('auth/login');
	}

}