<?php
class MTandaTerimaTA extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		// $this->data['table_name'] 	= 'tanda_terima_ta';
		// $this->data['primary_key']	= 'nim';
	}
	function TandaTerimaTA_list(){
		$hasil=$this->db->query("SELECT tanda_terima_ta.nim, tanda_terima_ta.nama, tanda_terima_ta.tanggal FROM tanda_terima_ta");
		return $hasil->result();
	}
//---------------------------------------------------------------------------
	public function getDatabyNim($nim){
		$this->db->where('nim', $nim);
		$query = $this->db->get('tanda_terima_ta');
		return $query->row();
	}

	public function getAll(){
		$query = $this->db->get('tanda_terima_ta');
		return $query->result();
	}

	function simpan_TandaTerimaTA($data){
		$query = $this->db->insert('tanda_terima_ta',$data);
		return $query;
	}

	function hapus_TandaTerima($nim){
		$this->db->where('nim',$nim);
		$query = $this->db->delete('tanda_terima_ta');
		return $query;
	}

	public function update_TandaTerima($nim, $data){
   		$this->db->where('nim', $nim);
   		$query = $this->db->update('tanda_terima_ta', $data);
   		return $query;
   	}
   	
//-----------------------------------------------------------------------------

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
	// function update_TandaTerimaTA($nimTTTA,$data){
	// 	$this->db->WHERE('NIM', $nimTTA);
	// 	$hasil=$this->db->update($this->data['table_name'], $data);
	// 	return $hasil;
	// }
	
}