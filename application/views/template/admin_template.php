<?php
if($this->ion_auth->user()->row()->online == 'Off'){
	$this->ion_auth->logout();
	redirect('auth/login');
}else{
	require_once('layout/headStyle.php');
	require_once('layout/body.php');
	require_once('layout/footerLinkScript.php');
}

?>