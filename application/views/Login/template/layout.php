<?php

	$this->load->view('Login/template/header', array('title' => $title));
	$this->load->view($content);
	$this->load->view('Login/template/footer');
?>