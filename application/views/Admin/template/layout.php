<?php

	$this->load->view('Admin/template/header', array('title' => $title));
	$this->load->view('Admin/template/sidebar');
	$this->load->view($content);
	$this->load->view('Admin/template/footer');
?>
