<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CMain extends MY_Controller
{   
	private $data = [];
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTugasAkhir');
		$this->load->model('mMahasiswa');
		$this->load->model('mBidangIlmu');
		$this->load->model("mSubjek");
	}
	

	public function index() {

        $this->data['title']  = 'Home'.$this->title;
        $this->data['content']  = 'Main/vMain';
        $this->data['B1'] = $this->mTugasAkhir->get_bidang_ilmu('B001');
        $this->data['B2'] = $this->mTugasAkhir->get_bidang_ilmu('B002');
        $this->data['B3'] = $this->mTugasAkhir->get_bidang_ilmu('B003');
        $this->template($this->data, 'vMain');
       
    }


    public function tampil_pdf($getNim)
    {

        if (file_exists('assets/File_TugasAkhir/'.$getNim.'.pdf'))
        {
           if (isset($getNim) && !empty($getNim)) 
           { 

              $fileInfo = $this->tugas_akhir_m->get_data($getNim);

              $uploads_folder = 'assets/File_TugasAkhir/';
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