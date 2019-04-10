<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetAlamat_m extends CI_Model {

	public function desa(){
		$query 		= $this->db->get('alamat_desa');
		$execution 	= $query->result();

		return $execution;
	}

	public function kecamatan(){
		$query 		= $this->db->get('alamat_kecamatan');
		$execution 	= $query->result();

		return $execution;
	}
	public function kabupaten(){
		$query 		= $this->db->get('alamat_kabupaten');
		$execution 	= $query->result();

		return $execution;
	}

	public function provinsi(){
		$query 		= $this->db->get('alamat_provinsi');
		$execution 	= $query->result();

		return $execution;
	}

}

/* End of file getAlamat_m.php */
/* Location: ./application/models/other/getAlamat_m.php */