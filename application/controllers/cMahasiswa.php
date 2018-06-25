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
        $this->data['role']         = $this->session->userdata('role');
        
        // if (!isset($this->data['username'], $this->data['role']) or $this->data['role'] != "mahasiswa")
        // {
        //     $this->session->sess_destroy();
        //     redirect('index.php/cLogin');
        //     exit;
        // }

        $this->load->model('mMahasiswa');
    }
    

    public function index() {


        $this->data['title']        = 'Publikasi Tugas Akhir'.$this->title;;
        $this->data['content']      = 'Mahasiswa/vMahasiswa';
        $this->template($this->data, 'vMahasiswa');
    }

    public function dataDiri() {

        if ($this->input->post('simpan')) {

            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama'); 
            $jurusan = $this->input->post('jurusan');    
            $angkatan = $this->input->post('angkatan'); 
            $email = $this->input->post('email'); 
            $nohp = $this->input->post('nohp'); 

            $object = array('nama' => $nama, 
                        'nim' => $nim,
                        'jurusan' => $jurusan,
                        'angkatan' => $angkatan,
                        'email' => $email,
                        'nohp' => $nohp,
                        );

            $query = $this->mMahasiswa->tambah_data($object);

            if($query)
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-success" style="text-align:center;">Data Berhasil Ditambahkan</div>');

                    redirect('index.php/cMahasiswa/dataDiri');
                }else
                {
                    echo "GAGAL";
                }
        }
        else
        {
            $this->data['title']        = 'Data Diri';
            $this->data['content']      = 'Mahasiswa/vDataDiri';
            $this->template($this->data, 'vMahasiswa');
        }
    }

    public function detilTA() {

         if ($this->input->post('simpan')) {

            $subjek = $this->input->post('subjek'); 
            $bidangilmu = $this->input->post('bidangilmu'); 
            $judul = $this->input->post('judul');    
            $tahun = $this->input->post('tahun'); 
            $dosenpembimbing1 = $this->input->post('dosenpembimbing1'); 
            $dosenpembimbing2 = $this->input->post('dosenpembimbing2');
            $abstrak = $this->input->post('abstrak'); 
            //$dokumenPDF = $this->input->post('dokumenPDF'); 
            //$status = $this->input->post('status'); 

            $object = array('Subjek' => $subjek,
                        'bidangilmu' => $bidangilmu,
                        'judul' => $judul,
                        'tahun' => $tahun,
                        'dosenpembimbing1' => $dosenpembimbing1,
                        'dosenpembimbing2' => $dosenpembimbing2,
                        'abstrak' => $abstrak,
                        //'dokumenPDF' => $dokumenPDF,
                        //'status' => $status,
                        );

            $query = $this->mMahasiswa->tambah_data_ta($object);

            if($query)
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-success" style="text-align:center;">Data Berhasil Ditambahkan</div>');

                    redirect('index.php/cMahasiswa/detilTA');
                }else
                {
                    echo "GAGAL";
                }
        }
        else
        {
            $this->data['title']        = 'Detil Tugas Akhir';
            $this->data['content']      = 'Mahasiswa/vDetilTA';
            $this->template($this->data, 'vMahasiswa');
        }
    }


    public function unggah() 
        {

        if ($this->input->post('simpan')) {

            $dokumenPDF = $this->input->post('dokumenPDF');


            $object = array('dokumenPDF' => $dokumenPDF, 
                        );

            $query = $this->mMahasiswa->tambah_data_pdf($object);

            if($query)
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-success" style="text-align:center;">Data Berhasil Ditambahkan</div>');

                    redirect('index.php/cMahasiswa/unggah');
                }else
                {
                    echo "GAGAL";
                }
        }
        else
        {
            $this->data['title']        = 'Pratinjau';
            $this->data['content']      = 'Mahasiswa/vUnggah';
            $this->template($this->data, 'vMahasiswa');
        }

    }
    

    public function pratinjau() {
        $this->data['title']        = 'Pratinjau';
        $this->data['content']      = 'Mahasiswa/vPratinjau';
        $this->template($this->data, 'vMahasiswa');

    }

    public function tanggapan() {
        $this->data['title']        = 'Tanggapan';
        $this->data['content']      = 'Mahasiswa/vTanggapan';
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