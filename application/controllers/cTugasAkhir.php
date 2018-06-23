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
	}
	

	public function index() {
		$this->data['title']        = 'Daftar Tugas Akhir';
		$this->data['content']      = 'Main/vDaftarTA';
        $this->template($this->data, 'vDaftarTA');

    }
    

	public function detilTA() {
		$this->data['title']        = 'Detil Tugas Akhir';
		$this->data['content']      = 'Main/vDetilTA';
        $this->template($this->data, 'vDaftarTA');

	}
}



?>