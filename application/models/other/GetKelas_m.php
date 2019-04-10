<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetKelas_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function getKelas(){
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('program_studi', 'kelas.idProdi = program_studi.idProdi', 'left');
		$this->db->order_by('nama_kelas', 'desc');
		$query = $this->db->get();

		$execute 	= $query->result();
		return $execute;
	}

	

}

/* End of file GetKelas.php */
/* Location: ./application/models/other/GetKelas.php */