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
        
        if (!isset($this->data['username'], $this->data['role']) or $this->data['role'] != "Admin")
        {
            $this->session->sess_destroy();
            redirect('index.php/cLogin');
            exit;
        }
        
		$this->load->model('mTandaTerimaTA');
        $this->load->model('mTugasAkhir');
        $this->load->model('mDosen');
	}

	public function index() {

		$this->data['title']        = 'Dashbord';
        $this->data['content']      = 'Admin/vAdmin';
        $this->data['dataTADelivered']  = $this->mTugasAkhir->getDataByStatus('delivered');
        $this->data['dataTAConfirm']    = $this->mTugasAkhir->getDataByStatus('confirmed');
        $this->data['dataTandaTerima']  = $this->mTandaTerimaTA->getAll();
        $this->data['dataDosen']    = $this->mDosen->DataDosen_list();
        $this->template($this->data, 'vAdmin');
    
	}

	public function tandaTerimaTA() {
		if($this->POST('username') && $this->POST('get')){
            $nim = $this->POST('username');
            $this->data['tandaTerimaTA'] = $this->mTandaTerimaTA->getDatabyNim($nim);
            $dataTerimaTA = array(
                'nim' => $this->data['tandaTerimaTA']->nim,
                'nama' => $this->data['tandaTerimaTA']->nama,
                'tanggal' => $this->data['tandaTerimaTA']->tanggal
            );
            echo json_encode($dataTerimaTA);
            exit;
        }

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
            $nipus =$this->data['username'];
            $nimTTTA=$this->input->post('nimTTTA');
            $namaTTTA=$this->input->post('namaTTTA');
            $tglTTTA=$this->input->post('tglTTTA');

            $cekNim = $this->mTandaTerimaTA->getDataByNim($nimTTTA);
            if(count($cekNim)>0){
                $this->flashmsg('Nim telah ada','danger');
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
                $this->flashmsg('Berhasil');
                redirect('index.php/cAdmin/tandaTerimaTA');
            } 
        }
    }

    function update_TandaTerimaTA(){
        if($this->POST('edit_data_tanda_terima')){
            $nimTTTA=$this->POST('nimTTTA');
            $namaTTTA=$this->POST('namaTTTA_edit');
            $tglTTTA=$this->POST('tglTTTA_edit');
            $data = array(
                        'nama' => $namaTTTA,
                        'tanggal' => $tglTTTA
            );
            $this->mTandaTerimaTA->update_TandaTerima($nimTTTA, $data);
            $this->flashmsg('Data berhasil diubah', 'success');
            redirect('index.php/cAdmin/tandaTerimaTA');
            exit;
        }
    }

    function hapus_TandaTerimaTA($nim){
        $this->mTandaTerimaTA->hapus_TandaTerima($nim);
        $this->flashmsg('Data berhasil dihapus', 'success');
        redirect('index.php/cAdmin/tandaTerimaTA');

    }

    //Tugas Akhir
    public function tugasAkhir() {
        if($this->POST('status') && $this->POST('nim')){
            $dokumen = $this->mTugasAkhir->get_row(['nim' => $this->POST('nim')]);

            if (isset($dokumen)){
                $nim = $this->POST('nim');

                if ($dokumen->status == 'delivered'){
                    $this->mTugasAkhir->update($nim, ['status' => 'confirmed']);
                    echo "<button class='btn btn-sm btn-success' onclick=\"changeStatus('".$nim."')\"><b>Terkonfirmasi</b></button>";
                }
                else {
                    $this->mTugasAkhir->update($nim, ['status' => 'delivered']);
                    echo "<button class='btn btn-sm btn-secondary' onclick=\"changeStatus('".$nim."')\"><b>Konfirmasi</b></button>";   
                }
            }
            exit;
        }

        $this->data['title']        = 'Tugas Akhir';
        $this->data['content']      = 'Admin/vTugasAkhir';
        $this->data['dataTA']       = $this->mTugasAkhir->get_delivered_ta();
        $this->template($this->data, 'vAdmin');
    }

    function hapus_tugasAkhir($nim){
        $this->mTugasAkhir->hapus_tugas_akhir($nim);
        $this->flashmsg('Data tugas akhir ditolak', 'success');
        redirect('index.php/cAdmin/tugasAkhir');

    }

    public function detilTA() {

        $nim = $this->uri->segment(3);
        $this->data['title']        = 'Detil Tugas Akhir';
        $this->data['content']      = 'Admin/vDetilTA';
        $this->data['detilTA'] = $this->mTugasAkhir->get_pratinjau_ta($nim);
        $this->template($this->data, 'vAdmin');

    }

    // Data Dosen
    public function dataDosen() {
        if($this->POST('username') && $this->POST('get')){
            $nip = $this->POST('username');
            $this->data['dDosen'] = $this->mDosen->getDataByNIP($nip);
            $dataDosen = array(
                    'nip' => $this->data['dDosen']->nip,
                    'nama' => $this->data['dDosen']->nama,
                    'email' => $this->data['dDosen']->email,
                    'alamat' => $this->data['dDosen']->alamat
            );
            echo json_encode($dataDosen);
            exit;
        }

        $this->data['title']        = 'Data Dosen';
        $this->data['content']      = 'Admin/vDataDosen';
        $this->data['data_dosen'] = $this->mDosen->get_data_dosen();
        $this->template($this->data, 'vAdmin');
    }

    function simpan_DataDosen(){
        if ($this->POST('save')) {            
            $nipDosen=$this->input->post('nipDosen');
            $namaDosen=$this->input->post('namaDosen');
            $emailDosen=$this->input->post('emailDosen');
            $alamatDosen=$this->input->post('alamatDosen');
            $cekNIP = $this->mDosen->getDataByNIP($nipDosen);

            if(count($cekNIP)>0){
                $this->flashmsg('Nip telah ada', 'danger');
                redirect('index.php/cAdmin/dataDosen');
            } else {
                $data = array(
                        'nip' => $nipDosen,
                        'nama' => $namaDosen,
                        'email' => $emailDosen,
                        'alamat'  => $alamatDosen
                );

                $this->mDosen->insert($data);
                $this->flashmsg('Berhasil','success');
                redirect('index.php/cAdmin/dataDosen');
            }
        }          
    }

    function update_DataDosen(){
        if($this->POST('save')){
            $nipDosen=$this->input->post('nip');
            $namaDosen=$this->input->post('namaDosen_edit');
            $emailDosen=$this->input->post('emailDosen_edit');
            $alamatDosen=$this->input->post('alamatDosen_edit');

            $data = array(
                        'nama' => $namaDosen,
                        'email' => $emailDosen,
                        'alamat' => $alamatDosen
            );

            $this->mDosen->update($nipDosen, $data);
            $this->flashmsg('Berhasil', 'success');
            redirect('index.php/cAdmin/dataDosen');
            exit;
        }
    }

    function hapus_DataDosen($nip){
        $this->mDosen->hapus_DataDosen($nip);
        $this->flashmsg('Data berhasil dihapus', 'success');
        redirect('index.php/cAdmin/dataDosen');
    }
}