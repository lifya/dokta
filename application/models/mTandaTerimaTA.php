<?php
class MTandaTerimaTA extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'tanda_terima_ta';
	}

	function TandaTerimaTA_list(){
		$hasil=$this->db->query("SELECT tanda_terima_ta.nim, tanda_terima_ta.nama, tanda_terima_ta.tanggal FROM tanda_terima_ta");
		return $hasil->result();
	}

	function simpan_TandaTerimaTA($data){
		// $hasil=$this->db->query("INSERT INTO tanda_terima_ta (nim,nipus,nama,tanggal)VALUES('$nimTTTA','09021181520025','$namaTTTA','$tglTTTA')");
		$query = $this->db->insert($this->data['table_name'],$data);
		return $query;
	}

	function get_TandaTerimaTA_by_kode($nimTTTA){
		$hsl=$this->db->query("SELECT tanda_terima_ta.nim, tanda_terima_ta.nama, tanda_terima_ta.tanggal FROM tanda_terima_ta WHERE nim='$nimTTTA'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nim' => $data->nim,
					'nama' => $data->nama,
					'tanggal' => $data->tanggal,
					);
			}
		}
		return $hasil;
	}

	function update_TandaTerimaTA($nimTTTA,$data){
		$this->db->WHERE('NIM', $nimTTA);
		$hasil=$this->db->update($this->data['table_name'], $data);
		return $hasil;
	}

	function hapus_TandaTerimaTA($nimTTTA){
		$hasil=$this->db->query("DELETE FROM tanda_terima_ta WHERE nim='$nimTTTA'");
		return $hasil;
	}
	
}