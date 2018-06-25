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

}



?>