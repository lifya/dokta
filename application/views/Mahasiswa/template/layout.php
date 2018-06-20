<?php

	$this->load->view('Mahasiswa/template/header', array('title' => $title));
	$this->load->view('Mahasiswa/template/sidebar');
	$this->load->view($content);
	$this->load->view('Mahasiswa/template/footer');
?>