<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CAdmin extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->data['username']     = $this->session->userdata('username');
        $this->data['role']         = $this->session->userdata('role');
        
        if (!isset($this->data['username'], $this->data['role']) or $this->data['role'] != "admin")
        {
            $this->session->sess_destroy();
            redirect('index.php/clogin');
            exit;
        }
	}

	public function index() {

		$this->data['title']        = 'Dashbord';
        $this->data['content']      = 'Admin/vAdmin';
        $this->template($this->data, 'vAdmin');
    
	}

	public function tandaTerimaTA() {
		$this->data['title']        = 'Tanda Terima Tugas Akhir';
		$this->data['content']      = 'Admin/vTandaTerimaTA';
        $this->template($this->data, 'vAdmin');
	}

	public function tugasAkhir() {
		$this->data['title']        = 'Tugas Akhir';
		$this->data['content']      = 'Admin/vTugasAkhir';
        $this->template($this->data, 'vAdmin');
	}

	public function dataDosen() {
		$this->data['title']        = 'Data Dosen';
		$this->data['content']      = 'Admin/vDataDosen';
        $this->template($this->data, 'vAdmin');
	}
}



?>