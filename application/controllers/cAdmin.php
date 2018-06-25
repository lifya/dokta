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
        //$this->data['username']     = $this->session->userdata('username');
		$this->load->model('mTandaTerimaTA');
        $this->load->model('mDosen');
	}

	public function index() {

		$this->data['title']        = 'Dashbord';
        $this->data['content']      = 'Admin/vAdmin';
        $this->template($this->data, 'vAdmin');
    
	}

	public function tandaTerimaTA() {
		$this->data['title']        = 'Tanda Terima Tugas Akhir';
		$this->data['content']      = 'Admin/vTandaTerimaTA';
        $this->data['dataTA']       = $this->mTandaTerimaTA->getAll();
        $this->template($this->data, 'vAdmin');
	}


    //Tanda Terima TA

    function data_TandaTerimaTA(){
        $data=$this->mTandaTerimaTA->TandaTerimaTA_list();
        echo json_encode($data);
    }

    function get_TandaTerimaTA(){
        $nimTTTA=$this->dump($nimTTTA);
        $data=$this->mTandaTerimaTA->get_TandaTerimaTA_by_kode($nimTTTA);
        echo json_encode($data);
    }

    function simpan_TandaTerimaTA(){
        if ($this->POST('simpan')) {
            $nipus = $this->session->userdata('username');
            $nimTTTA=$this->input->post('nimTTTA');
            $namaTTTA=$this->input->post('namaTTTA');
            $tglTTTA=$this->input->post('tglTTTA');

            $cekNim = $this->mTandaTerimaTA->getDataByNim($nimTTTA);
            if(count($cekNim)>0){
                $this->flashmsg('Nim telah ada', 'danger');
                redirect('index.php/cAdmin/tandaTerimaTA');
            }
            else{
                $data = array(
                        'nim' => $nimTTTA,
                        'nipus' => $nipus,
                        'tanggal' => $tglTTTA,
                        'nama'  => $namaTTTA
                );
                $this->mTandaTerimaTA->simpan_TandaTerimaTA($data);
                $this->flashmsg('Berhasil','success');
                redirect('index.php/cAdmin/tandaTerimaTA');
            } 
        }
    }

    function update_TandaTerimaTA(){
        // $nimTTTA=$this->input->post('nimTTTA');
        // $namaTTTA=$this->input->post('namaTTTA');
        // $tglTTTA=$this->input->post('tglTTTA');
        // $data=$this->mTandaTerimaTA->update_TandaTerimaTA($nimTTTA,$namaTTTA,$tglTTTA);
        // echo json_encode($data);
    }

    function hapus_TandaTerimaTA($nim){
        $this->mTandaTerimaTA->hapus_TandaTerima($nim);
        $this->flashmsg('Data berhasil dihapus', 'success');
        redirect('index.php/cAdmin/tandaTerimaTA');

    }

    // Tanda Terima TA

	public function tugasAkhir() {
		$this->data['title']        = 'Tugas Akhir';
		$this->data['content']      = 'Admin/vTugasAkhir';
        $this->template($this->data, 'vAdmin');
	}


    // Data Dosen
	public function dataDosen() {
		$this->data['title']        = 'Data Dosen';
		$this->data['content']      = 'Admin/vDataDosen';
        $this->data['data_dosen'] = $this->mDosen->get_data_dosen();
        $this->template($this->data, 'vAdmin');
	}

    // Hapus Data Dosen
    public function hapus_data_dosen($nip)
    {
        $query = $this->mDosen->hapus_dosen($nip);

        if ($query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data Berhasil Dihapus</div>');
                
            redirect('admin/vDataDosen');
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Data Gagal Dihapus</div>');
                
            redirect('admin/vDataDosen');
        }
    }

    //Edit Data Dosen
    public function edit_data_dosen()
    {
        $this->data['title']        = 'Edit Data Dosen';
        $this->data['content']      = 'Admin/vEditDosen';
       // $this->data['data_dosen'] = $this->mDosen->get_data_dosen();
        $this->template($this->data, 'vAdmin');
    }

    function data_Dosen(){
        $data=$this->mDosen->DataDosen_list();
        echo json_encode($data);
    }

    function get_DataDosen(){
        $nipDosen=$this->input->get('id');
        $data=$this->mDosen->get_DataDosen_by_kode($nipDosen);
        echo json_encode($data);
    }

    function simpan_DataDosen(){
        $nipDosen=$this->input->post('nipDosen');
        $namaDosen=$this->input->post('namaDosen');
        $emailDosen=$this->input->post('emailDosen');
        $alamatDosen=$this->input->post('alamatDosen');
        $data=$this->mDosen->simpan_DataDosen($nipDosen,$namaDosen,$emailDosen,$alamatDosen);
        echo json_encode($data);
    }

    function update_DataDosen(){
        $nipDosen=$this->input->post('nipDosen');
        $namaDosen=$this->input->post('namaDosen');
        $emailDosen=$this->input->post('emailDosen');
        $alamatDosen=$this->input->post('alamatDosen');
        $data=$this->mDosen->update_DataDosen($nipDosen,$namaDosen,$emailDosen,$alamatDosen);
        echo json_encode($data);
    }

    function hapus_DataDosen(){
        $nipDosen=$this->input->post('nip');
        $data=$this->mDosen->hapus_DataDosen($nipDosen);
        echo json_encode($data);
    }

    // Data Dosen
	
}


?>