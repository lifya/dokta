<?php

class CLogout extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		// $this->session->unset_userdata('username');
		// $this->session->unset_userdata('id_role');
		$this->session->sess_destroy();
		redirect('index.php/cLogin');
		exit;
	}
}
