<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetProdi_m extends CI_Model {

	function getProdi(){
		$query 		= $this->db->get('program_studi');
		$execute 	= $query->result();
		return $execute;
	}

}

/* End of file GetProdi_m.php */
/* Location: ./application/models/other/GetProdi_m.php */