<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CTugasAkhir extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("mTugasAkhir");
		$this->load->model("mMahasiswa");
		$this->load->model("mBidangIlmu");
		$this->load->model("mSubjek");
		$this->load->model("mDosen");
	}
	

	public function index() {
		$this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/vDaftarTA';
        $this->template($this->data, 'vDaftarTA');
    }

    public function B001() {
		$this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/B001';
		$this->data['B1'] = $this->mTugasAkhir->get_bidang_ilmu('B001');
        $this->template($this->data, 'vDaftarTA');
    }

    public function B002() {
		$this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/B002';
        $this->data['B2'] = $this->mTugasAkhir->get_bidang_ilmu('B002');
        $this->template($this->data, 'vDaftarTA');
    }

    public function B003() {
		$this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/B003';
        $this->data['B3'] = $this->mTugasAkhir->get_bidang_ilmu('B003');
        $this->template($this->data, 'vDaftarTA');
    }

	public function detilTA() {
		$nim = $this->uri->segment(3);

		$this->data['title']        = 'Detil Tugas Akhir';
		$this->data['content']      = 'Main/vDetilTA';
        $this->data['detilTA'] = $this->mTugasAkhir->get_detail_ta($nim);
        $this->template($this->data, 'vDaftarTA');
	}

	public function hasilPencarian() {

		$keyword = $this->input->post('keyword');

	    $this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/vHasilPencarian';

        $this->data['search'] = $this->mTugasAkhir->search_ta($keyword);

	      

        $this->template($this->data, 'vDaftarTA');
	}

	public function tampilPDF($getNim)
    {

        if (file_exists('assets/dokumenTA/'.$getNim.'.pdf'))
        {
           if (isset($getNim) && !empty($getNim)) 
           { 

              $fileInfo = $this->mTugasAkhir->get_data($getNim);

              $uploads_folder = 'assets/dokumenTA/';
              $file_name = $getNim.'.pdf';
              $file = '';
              foreach ($fileInfo as $key => $value) 
              {
                  $value->url_pdf = base_url().$uploads_folder. $getNim .'pdf'; 
                  $file = $uploads_folder.$file_name; 

              }        
                      $data['file'] = $file;
                      $data['nim'] = $getNim;
                    

                      $this->load->view('tampil',$data);
            } 
        }
        else
        {
              $this->flashmsg('File tidak ada !','danger');
              redirect('mahasiswa/data_dokumen');  
        }

    }
}



?>