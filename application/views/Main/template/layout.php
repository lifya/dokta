<?php

	$this->load->view('Main/template/header', array('title' => $title));
	$this->load->view('Main/template/topnavbar');
	$this->load->view('Main/template/search');
	$this->load->view('Main/template/navbar');
	$this->load->view($content);
	$this->load->view('Main/template/footer');
?>