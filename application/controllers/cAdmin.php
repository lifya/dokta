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
		$this->load->model('mTandaTerimaTA');
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


    //Tanda Terima TA

    function data_TandaTerimaTA(){
        $data=$this->mTandaTerimaTA->TandaTerimaTA_list();
        echo json_encode($data);
    }

    function get_TandaTerimaTA(){
        $nimTTTA=$this->input->get('id');
        $data=$this->mTandaTerimaTA->get_TandaTerimaTA_by_kode($nimTTTA);
        echo json_encode($data);
    }

    function simpan_TandaTerimaTA(){
        $nimTTTA=$this->input->post('nimTTTA');
        $namaTTTA=$this->input->post('namaTTTA');
        $tglTTTA=$this->input->post('tglTTTA');
        $data=$this->mTandaTerimaTA->simpan_TandaTerimaTA($nimTTTA,$namaTTTA,$tglTTTA);
        echo json_encode($data);
    }

    function update_TandaTerimaTA(){
        $nimTTTA=$this->input->post('nimTTTA');
        $namaTTTA=$this->input->post('namaTTTA');
        $tglTTTA=$this->input->post('tglTTTA');
        $data=$this->mTandaTerimaTA->update_TandaTerimaTA($nimTTTA,$namaTTTA,$tglTTTA);
        echo json_encode($data);
    }

    function hapus_TandaTerimaTA(){
        $nimTTTA=$this->input->post('nimTTTA');
        $data=$this->mTandaTerimaTA->hapus_TandaTerimaTA($nimTTTA);
        echo json_encode($data);
    }

    // Tanda Terima TA

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