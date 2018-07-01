<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CMahasiswa extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->data['username']     = $this->session->userdata('username');
        $this->data['role']     = $this->session->userdata('role');

        
        if (!isset($this->data['username'], $this->data['role']) or $this->data['role'] != "Mahasiswa")
        {
            $this->session->sess_destroy();
            redirect('index.php/cLogin');
            exit;
        }


        $this->load->model('mMahasiswa');
        $this->load->model('mTugasAkhir');
        $this->load->model('mDosen');
        $this->load->model('mSubjek');
    }
    

    public function index() {

            $this->data['title']        = 'Publikasi Tugas Akhir'.$this->title;;
            $this->data['content']      = 'Mahasiswa/vMahasiswa';
            $this->template($this->data, 'vMahasiswa'); 

    }



    public function dataDiri() {

        $this->data['title'] = "Mengisi Informasi Data Diri" ;
        $this->data['content'] = 'Mahasiswa/vDataDiri' ;
        $this->data['individu'] = $this->mMahasiswa->getDatabyNim($this->data['username']);
        $this->template($this->data, 'vMahasiswa');

        if ($this->POST('simpan')) 
        {
           $this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha_spaces', array(
                    'trim'      => 'Nama tidak boleh kosong',
                    'required'  => 'Nama tidak boleh kosong',
                    'alpha_spaces'     => 'Nama hanya boleh karakter'
                ));

           $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required', array(
                    'trim'      => 'Jurusan tidak boleh kosong',
                    'required'  => 'Jurusan tidak boleh kosong'
                ));

            $this->form_validation->set_rules('angkatan', 'Angkatan', 'trim|required|numeric', array(
                    'trim'      => 'Angkatan tidak boleh kosong',
                    'required'  => 'Angkatan tidak boleh kosong',
                    'numeric'   => 'Angkatan harus angka'
                ));

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
                    'trim'      => 'Email tidak boleh kosong',
                    'required'  => 'Email tidak boleh kosong',
                    'valid_email' => 'Email tidak valid'
                ));

            $this->form_validation->set_rules('nohp', 'Email', 'trim|required|numeric', array(
                    'trim'      => 'NoHp tidak boleh kosong',
                    'required'  => 'NoHp tidak boleh kosong',
                    'numeric'   => 'NoHp harus angka'
                ));

            if ($this->form_validation->run() == FALSE) {

                $this->flashmsg(validation_errors(),'danger');
                redirect('index.php/cMahasiswa/dataDiri');
                exit;
            }

            $nim        = $this->data['username'];
            $nama       = $this->POST('nama');
            $jurusan    = $this->POST('jurusan');
            $angkatan   = $this->POST('angkatan');
            $email      = $this->POST('email');
            $nohp       = $this->POST('nohp');
            

            $dataInd = array(
                            'nama'  => $nama,
                            'jurusan' => $jurusan,
                            'angkatan' => $angkatan,
                            'email' => $email,  
                            'nohp'    => $nohp
                        );
            $cekNIM_Individu = $this->mMahasiswa->getDatabyNim($nim);

            if (count($cekNIM_Individu) > 0 ) {
                    $this->mMahasiswa->update($nim, $dataInd);
                    $this->flashmsg('Data Diri berhasil disimpan!');
                    redirect('index.php/cMahasiswa/dataDiri');
                    exit;
            }
            $this->template($this->data, 'vMahasiswa');
        }

    }

    public function detilTA() 
    {

        $this->data['title']        = 'Mengisi Informasi Data TA';
        $this->data['content']      = 'Mahasiswa/vDetilTA' ;
        $this->data['ta']           = $this->mTugasAkhir->getDatabyNim($this->data['username']);
        $this->data['datasubjek']   = $this->mSubjek->getAll();
        $this->data['datasubjek1']   = $this->mSubjek->getSubjek();
        $this->data['dosen']        = $this->mDosen->getAll();
        $this->data['dosen1']       = $this->mDosen->getDosen1();
        $this->data['dosen2']       = $this->mDosen->getDosen2();
        $this->template($this->data, 'vMahasiswa');

        if ($this->POST('simpan'))
        {
           $this->form_validation->set_rules('judul', 'Judul', 'trim|required|alpha_spaces', array(
            'trim'             => 'Judul tidak boleh kosong',
            'required'         => 'Judul tidak boleh kosong',
            'alpha_spaces'     => 'Judul hanya boleh karakter'
            ));

           $this->form_validation->set_rules('subjek', 'Subjek', 'trim|required', array(
            'trim'             => 'Subjek tidak boleh kosong',
            'required'         => 'Subjek tidak boleh kosong'
            ));

           $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|numeric', array(
            'trim'      => 'Tahun tidak boleh kosong',
            'required'  => 'Tahun tidak boleh kosong',
            'numeric'     => 'Tahun harus angka'
            ));

           $this->form_validation->set_rules('dosenPembimbing1', 'Dosen Pembimbing1', 'trim|required', array(
            'trim'      => 'Dosen_pembimbing1 tidak boleh kosong',
            'required'  => 'Dosen_pembimbing1 tidak boleh kosong',
            ));

            $this->form_validation->set_rules('dosenPembimbing2', 'Dosen Pembimbing2', 'trim|required', array(
            'trim'      => 'Dosen_pembimbing2 tidak boleh kosong',
            'required'  => 'Dosen_pembimbing2 tidak boleh kosong',
            ));

            $this->form_validation->set_rules('abstrak', 'Abstrak', 'trim|required', array(
            'trim'      => 'Abstrak tidak boleh kosong',
            'required'  => 'Abstrak tidak boleh kosong'
                ));

            if ($this->form_validation->run() == FALSE) 
            {
                $this->flashmsg(validation_errors(), 'danger');
                redirect('index.php/cMahasiswa/detilTA');
                exit;
            }

            $judul              = $this->POST('judul');
            $subjek             = $this->POST('subjek');
            $tahun              = $this->POST('tahun');
            $dosenPembimbing1   = $this->POST('dosenPembimbing1');
            $dosenPembimbing2   = $this->POST('dosenPembimbing2');
            $abstrak            = $this->POST('abstrak');
            $status             = $this->POST('status');

            $dataTA     = array(
                            'judul'             => $judul,
                            'subjek'            => $subjek,
                            'tahun'             => $tahun,
                            'dosenPembimbing1'  => $dosenPembimbing1,
                            'dosenPembimbing2'  => $dosenPembimbing2,
                            'abstrak'           => $abstrak,
                            'status'            => $status
            );

            $cekNIM_TA  = $this->mTugasAkhir->getDatabyNim($nim);

            if (count($cekNIM_TA) > 0 ) {
                    $this->mTugasAkhir->update($nim, $dataTA);
                    $this->flashmsg('Data Diri berhasil disimpan!');
                    redirect('index.php/cMahasiswa/detilTA');
                    exit;
            }
            $this->template($this->data, 'vMahasiswa');
        }
    }


    public function unggah() 
    {

        $this->data['title'] = 'Unggah File TA';
        $this->data['content'] = 'Mahasiswa/vUnggah' ;
        $this->data['ta'] = $this->mTugasAkhir->getDatabyNim($this->data['username']);
        $this->template($this->data, 'vMahasiswa');


    }
    

    public function pratinjau() {
        if($this->POST('status') && $this->POST('nim')){
            $dokumen = $this->mTugasAkhir->get_row(['nim' => $this->POST('nim')]);

            if (isset($dokumen)){
                $nim = $this->POST('nim');

                if ($dokumen->status == 'none'){
                    $this->mTugasAkhir->update($nim, ['status' => 'delivered']);
                    echo "<button class='btn btn-sm btn-success' onclick=\"changeStatus('".$nim."')\">Terkirim</button>";
                }
                else {
                    $this->mTugasAkhir->update($nim, ['status' => 'none']);
                    echo "<button class='btn btn-sm btn-secondary' onclick=\"changeStatus('".$nim."')\">Kirim</button>";   
                }
            }
            exit;
        }

        $nim = $this->data['username'];
        $this->data['title']        = 'Pratinjau';
        $this->data['content']      = 'Mahasiswa/vPratinjau';
        $this->data['pratinjau'] = $this->mTugasAkhir->get_pratinjau_ta($nim);
        $this->template($this->data, 'vMahasiswa');

    }

    public function tanggapan() {
        $nim = $this->data['username'] ;
        $this->data['title']        = 'Tanggapan';
        $this->data['content']      = 'Mahasiswa/vTanggapan';
        // $this->data['dokumen']  = $this->mTugasAkhir->get_data($nim);

        // if($dok->status == 'confirmed') {
        //     $this->flashmsg('Tugas Akhir Kamu Sudah Dipublikasi', 'success');
        // }

        $this->template($this->data, 'vMahasiswa');

    }

    public function mengisiInformasiTA() {
        $this->data['title']  = 'Mengunggah Dokumen'.$this->title;
        $this->data['content']  = 'mahasiswa/mengunggah_dokumen';
        $this->data['ta'] = $this->tugas_akhir_m->getDatabyNim($this->data['username']);
        $this->data['individu'] = $this->Mahasiswa_m->getDatabyNim($this->data['username']);
        $this->data['dosen'] = $this->dosen_m->getAll();

        if ($this->POST('simpan')) {

            // $required = ['nama', 'jurusan', 'email', 'judul', 'konsentrasi', 'tahun', 'dosen_pembimbing1', 'dosen_pembimbing2', 'abstrak', 'upload_file'];

            // if(!$this->required_input($required)){
            //     $this->flashmsg('Data harus lengkap !', 'danger');
            //     redirect('mahasiswa/unggah-dokumen');
            // }

            // else{
                $nim        = $this->session->userdata('username');
                $nama       = $this->POST('nama');
                $jurusan    = $this->POST('jurusan');
                $email      = $this->POST('email');
                $angkatan   = $this->POST('angkatan');
                $alamat     = $this->POST('alamat');
                $judul      = $this->POST('judul');
                $konsentrasi= $this->POST('konsentrasi');
                $tahun      = $this->POST('tahun');
                $dp1        = $this->POST('dosen_pembimbing1');
                $dp2        = $this->POST('dosen_pembimbing2');
                $file       = $this->POST('upload_file');
                $abstrak    = $this->POST('abstrak');

                $dataInd = array(
                            'nama'  => $nama,
                            'jurusan' => $jurusan,
                            'email' => $email,
                            'angkatan' => $angkatan,
                            'alamat'    => $alamat
                        );

                $dataTA = array(
                            'judulTA' => $judul,
                            'konsentrasi' => $konsentrasi,
                            'tahun_pembuatan' => $tahun,
                            'dosen_pembimbing1' => $dp1,
                            'dosen_pembimbing2' => $dp2,
                            'abstrak' => $abstrak
                        );

                $cekNIM_TA = $this->tugas_akhir_m->getDatabyNim($nim);
                $cekNIM_Individu = $this->Mahasiswa_m->getDatabyNim($nim);

                if(count($cekNIM_Individu) > 0 && count($cekNIM_TA) > 0){
                    $this->Mahasiswa_m->update($nim, $dataInd);
                    $this->tugas_akhir_m->update($nim, $dataTA);
                    $this->uploadPDF($nim, 'upload_file');

                    $this->flashmsg('Data tugas akhir berhasil disimpan!');
                    redirect('mahasiswa/unggah-dokumen');
                    exit;
                }
            //}
        }
        $this->template($this->data, 'mahasiswa');
    }
}



?>