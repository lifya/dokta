<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class CLogin extends MY_Controller
{

	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$username = $this->session->userdata('username');
		if (isset($username))
		{
			redirect('Proses');
			exit;
		}
		$this->load->model('mLogin');
	}

	public function index()
	{
		if ($this->POST('login-submit'))
		{
			
			if (!$this->mLogin->required_input(['username','password'])) 
			{
				$this->flashmsg('Data harus lengkap','warning');
				redirect('vLogin');
				exit;
			}
			
			$this->data = [
				'username'	=> $this->POST('username'),
				'password'	=> md5($this->POST('password'))
			];

			$result = $this->mLogin->login($this->data);
			if (!isset($result)) 
			{
				$this->flashmsg('Username atau password salah','danger');
			}
			redirect('vLogin');
			exit;
		}
		$this->data['title'] = 'LOGIN'.$this->title;
		$this->load->view('Mahasiswa/vLogin',$this->data);
	}
}
