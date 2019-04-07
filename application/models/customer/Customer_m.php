<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function getJangkaSimpanan($jenisRekening){
		$query = $this->db->get_where('jenis_rekening', array('idJenis_rekening' => $jenisRekening));
		return $query->row();
	}

	function getKodeRekeningNasabah(){
		$this->db->select('MAX(idRekening_nasabah)');
	}
	
	public function listJenisRekening(){
		$this->db->select('idJenis_rekening, nama_jenis_rekening, simpanan_berjangka');
		$this->db->from('jenis_rekening');
		$this->db->order_by('nama_jenis_rekening', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}


	public function addCustomer($data){
		$this->db->insert('nasabah',$data);
	}

}

/* End of file Customer_m.php */
/* Location: ./application/models/cutomer/Customer_m.php */