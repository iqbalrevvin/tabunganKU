<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetJabatan_m extends CI_Model {

	function getJabatan(){
		$query 		= $this->db->get('jabatan');
		$execute 	= $query->result();

		return $execute;
	}
	

}

/* End of file GetJabatan_m.php */
/* Location: ./application/models/other/GetJabatan_m.php */