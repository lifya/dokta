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

        if ($this->input->post('simpan')) {

            $username = $this->input->post('username');
            $password = $this->input->post('password'); 
            $role= $this->input->post('role'); 


            $object = array('username' => $username, 
                        'password' => md5($password),
                        'role' => 'Mahasiswa',
                        );

            $query = $this->mMahasiswa->tambah_data_user($object);

             if($query)
                {
            
                    $this->flashmsg('Data berhasil di tambahkan !','danger');
                    redirect('index.php/cLogin');
        
		     }else
        {
		$this->data['title'] = 'Login'.$this->title;
		$this->load->view('Mahasiswa/vLogin',$this->data);
        }

	}
}
}