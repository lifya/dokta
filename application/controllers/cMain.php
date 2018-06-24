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

        $data = array(
            'title' => 'Dokumentasi Tugas Akhir'.$this->title,
            'content' => 'Main/vMain',
            'tugasAkhir' => $this->mTugasAkhir->get_ta()
        );

        $this->load->view('Main/template/layout',$data);
       
    }
    

}



?>