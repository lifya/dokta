<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CMain extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index() {

		$this->data['title']        = 'Dokumentasi Tugas Akhir';
        $this->data['content']      = 'Main/vMain';
        $this->template($this->data, 'vMain');
    }
    

}



?>