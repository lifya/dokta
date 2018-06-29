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

		if($this->session->userdata('status') == "login"){
			
			if($this->session->userdata('role') == "Mahasiswa") {
				redirect(base_url("index.php/CMahasiswa"));

			} else if($this->session->userdata('role') == "Admin") {
				redirect(base_url("index.php/CAdmin"));
			}
            
        }

	     // load form_validation library
        //$this->load->library('form_validation');
        $this->load->model('mMahasiswa');
        $this->load->model('mAdmin');
        $this->load->model('mUser');
	}

	public function index()
	{
		$this->load->view('Mahasiswa/vLogin',$this->data);
		
	}

	public	function aksi_login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			

			$where = array(
				'username' => $username,
				'password' => md5($password),
				);

			$cek = $this->mUser->cek_login("user",$where)->num_rows();
			if($cek > 0) {
				$dataMember = $this->mUser->cek_login("user",$where)->result_array();

				$data_session = array(
					'username' => $username,
					'dataMember' => $dataMember,
					'status' => 'login',
					'role' => $dataMember[0]['role']
					);
	 
				$this->session->set_userdata($data_session);
	 			if($dataMember[0]['role']=='Mahasiswa'){

					redirect(base_url("index.php/CMahasiswa"));
	 			} else if($dataMember[0]['role']=='Admin'){
	 				
					redirect(base_url("index.php/CAdmin"));
	 			}
				

			} else {
				$this->flashmsg('Username atau Password Salah !','danger');
				redirect(base_url("index.php/CLogin"));

			}
	}

	public function tambah_user() {

	if ($this->input->post('signin')) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// $level = $this->input->post('$level');

		$cekNim = $this->mUser->getDataByNim($username);
            if(count($cekNim)>0){
                $this->flashmsg('Nim telah ada','danger');
                redirect('index.php/cLogin');
            }

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'role' => 'Mahasiswa'
		);
		$data2 = array(
			'nim' => $username
		);
		
		$query = $this->mUser->tambah_data_user($data,'user');
		$query = $this->mMahasiswa->tambah_data_user($data2,'mahasiswa');
		

		if($query)
            {
                $this->flashmsg('Data berhasil di tambahkan !','success');

                redirect('index.php/cLogin');
            }else {
                $this->flashmsg('Data gagal di tambahkan !','danger');
            }

        } else {
			redirect('index.php/CLogin');
        }
		
		

		
	}
}
