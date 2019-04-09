<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountType_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('noRek_helper');
	}

	public function insertData($data){
		$this->db->insert('jenis_rekening', $data);
		#$hasil=$this->db->query("INSERT INTO tbl_invoice (no_invoice) VALUES ('$no_invoice')");
        #return $hasil;
	}


	public function getKodeJenisRekening(){
		$this->db->select('MAX(idJenis_rekening) as kodrek', FALSE);
		$this->db->from('jenis_rekening');
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			foreach($query->result() as $k){
                $tmp = ((int)$k->kodrek)+1;
                $kodrek = sprintf("%04s", $tmp);
            }
		}else{
			$kodrek = '0001';
		}
		date_default_timezone_set('Asia/Jakarta');
		$koderekening 	= date('dm').$kodrek;

		return $koderekening;	
	}

}

/* End of file accountType_m.php */
/* Location: ./application/models/account/accountType_m.php */