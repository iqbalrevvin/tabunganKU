<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function noRek($noRek){ //PERCOBAAN
  $noRek = $noRek;
  $noRek1 = substr($noRek,0,4);
  $noRek2 = substr($noRek,4,2);
  $noRek3 = substr($noRek,6,2);
  $noRekening = $noRek1."-".$noRek2."-".$noRek3;
  return "$noRekening";
}

/* End of file noRek_helper.php */
/* Location: ./application/helpers/noRek_helper.php */