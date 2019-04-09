<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function getNomorRekeningNasabah(){
		$queryNPSN 		= $this->db->get_where('settings', array('id_settings' => '1'));
		$exeNPSN 		= $queryNPSN->row();
		$npsn 			= $exeNPSN->npsn;

		$this->db->select('MAX(idRekening_nasabah) as norek', FALSE);
		$this->db->from('rekening_nasabah');
		$this->db->where('DATE(datetime_insert)', date('Y-m-d'));
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			foreach($query->result() as $k){
                $tmp = ((int)$k->norek)+1;
                $norek = sprintf("%03s", $tmp);
            }
		}else{
			$norek = '001';
		}
		date_default_timezone_set('Asia/Jakarta');
		$nomerRekening 	= $npsn.date('dmy').$norek;

		return $nomerRekening;
	}

	function getJangkaSimpanan($jenisRekening){
		$query = $this->db->get_where('jenis_rekening', array('idJenis_rekening' => $jenisRekening));
		return $query->row();
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

	public function addRekeningNasabah($rekening){
		$this->db->insert('rekening_nasabah2', $rekening);
	}

}

/* End of file Customer_m.php */
/* Location: ./application/models/cutomer/Customer_m.php */