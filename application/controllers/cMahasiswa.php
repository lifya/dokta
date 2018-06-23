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
	}
	

	public function index() {

		$this->data['title']        = 'Publikasi Tugas Akhir'.$this->title;;
        $this->data['content']      = 'Mahasiswa/vMahasiswa';
        $this->template($this->data, 'vMahasiswa');
    }

    public function dataDiri() {
		$this->data['title']        = 'Data Diri';
		$this->data['content']      = 'Mahasiswa/vDataDiri';
        $this->template($this->data, 'vMahasiswa');

	}

	public function detilTA() {
		$this->data['title']        = 'Pratinjau';
		$this->data['content']      = 'Mahasiswa/vDetilTA';
        $this->template($this->data, 'vMahasiswa');

	}

	public function unggah() {
		$this->data['title']        = 'Pratinjau';
		$this->data['content']      = 'Mahasiswa/vUnggah';
        $this->template($this->data, 'vMahasiswa');

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
}



?>