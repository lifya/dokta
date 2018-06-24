<?php 

class MTugasAkhir extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'tugas_akhir';
		$this->data['primary_key']	= 'nim';
	}

	public function getAll(){
		$query = $this->db->get($this->data['table_name']);
		return $query->result();
	}

	public function getDatabyNim($nim){
		$this->db->where($this->data['primary_key'], $nim);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

	public function insertAll($data, $nim){
		$this->db->where($this->data['primary_key'],$nim);
		$query = $this->db->insert($this->data['table_name'], $data);
		return $query;
	}

	public function update($nim, $data){
   		$this->db->where($this->data['primary_key'], $nim);
   		$query = $this->db->update($this->data['table_name'], $data);
   		return $query;
   	}

   	public function get_ta()
	{
		$query = $this->db->query('SELECT tugas_akhir.judul, mahasiswa.nama, tugas_akhir.tahun, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu');

		return $query->result();
	}

	public function get_data($nim)
	{
		$this->db->where('NIM',$nim);
		$query = $this->db->get('tugas_akhir');
		return $query->result();
	}
}