<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function listJenisRekening(){
		$this->db->select('idJenis_rekening, nama_jenis_rekening, simpanan_berjangka');
		$this->db->from('jenis_rekening');
		$this->db->order_by('nama_jenis_rekening', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Customer_m.php */
/* Location: ./application/models/cutomer/Customer_m.php */