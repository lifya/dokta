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

	     // load form_validation library
        $this->load->library('form_validation');
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
					'nama' => $username,
					'status' => "login",
					'dataMember' => $dataMember,
					'role' => $dataMember[0]['role']
					);
	 
				$this->session->set_userdata($data_session);
	 			if($dataMember[0]['role']=='Mahasiswa'){

					redirect(base_url("index.php/CMahasiswa"));
	 			} else if($dataMember[0]['role']=='Admin'){
	 				
					redirect(base_url("index.php/CAdmin"));
	 			}
				

			} else {
				echo "<script>alert('Username atau Password salah');history.go(-1);</script>";

			}
	}

	public function tambah_user() {

	if ($this->input->post('signin')) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// $level = $this->input->post('$level');

		
		$data = array(
		'username' => $username,
		'password' => md5($password),
		'role' => 'Mahasiswa'
		// 'level' => $level
		);
		
		$query = $this->mUser->tambah_data_user($data,'user');

		if($query)
            {
                // $this->flashmsg('Data berhasil di tambahkan !','danger');

                // redirect('index.php/cLogin');

                echo "<script>alert('Register berhasil');history.go(-1);</script>";
            }else {
                echo "<script>alert('Gagal');history.go(-1);</script>";
            }

        } else {
			redirect('index.php/CLogin');
        }
		
		

		
	}
}
