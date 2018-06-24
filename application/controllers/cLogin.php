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
	    $username 		= $this->session->userdata('username');
	    $role	 		= $this->session->userdata('role');

	    if(isset($username, $role)){
	    	if($role == "mahasiswa"){
	    		redirect('index.php/cMahasiswa');
	    		exit;
	    	}
	    	else{
	    		redirect('index.php/cAdmin');
	    		exit;
	    	}
	    }

	     // load form_validation library
        $this->load->library('form_validation');
        $this->load->model('mMahasiswa');
        $this->load->model('mAdmin');
	}

	public function index()
	{
		if ($this->POST('login-signin')) {

  			$this->form_validation->set_rules('username', 'Username', 'required|min_length[14]|max_length[18]|numeric', array(
  					'required'		=> 'Username tidak boleh kosong', 
  					'min_length' 	=> 'Username harus lebih dari 14 karakter', 
  					'max_length'	=> 'Username harus maksimum 18 karakter', 
  					'numeric' 		=> 'Username harus angka'
  				));
  			$this->form_validation->set_rules('password', 'Password', 'required', array(
  					'required'		=> 'Password tidak boleh kosong'));

			if ($this->form_validation->run() == FALSE)
	        {
	        	$this->flashmsg(validation_errors(), 'danger');
	            redirect('index.php/cLogin');
	            exit;
	        }

			$this->data = [
    			'username'	=> $this->POST('username'),
    			'password'	=> md5($this->POST('password'))
			];

			$role = $this->POST('role');
			
			$this->load->model('mLogin');
			$result = $this->mLogin->login($this->data);
			if (!isset($result)) {
				$this->flashmsg('Username atau password salah','danger');
			}

			if(isset($role)){
		    	if($role == "mahasiswa"){
		    		$cek_data = $this->mMahasiswa->get(['NIM' => $this->POST('username')]);
		    	}
		    	else{
		    		$cek_data = $this->mAdmin->get(['NIPUS' => $this->POST('username')]);
		    	}
		    	
		    	if(count($cek_data) != 0){
					$this->session->set_userdata('role', $role);
					if($role == "mahasiswa"){
						redirect('index.php/cMahasiswa');
						exit;
					}
					elseif($role == "admin"){
						redirect('index.php/cAdmin');
						exit;
					}
					else{
						$this->flashmsg('Akun tidak terdaftar!','danger');
						redirect('index.php/cLogin');
						exit;
					}
				}
				else{
					$this->flashmsg('Akun tidak terdaftar!','danger');
					redirect('index.php/cLogin');
					exit;
				}
			}
		}

		$this->data['title'] = 'Login'.$this->title;
		$this->load->view('Mahasiswa/vLogin',$this->data);
		}
}
