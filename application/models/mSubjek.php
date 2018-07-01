<?php 

class MSubjek extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'subjek';
		$this->data['primary_key']	= 'idSubjek';
	}

	public function getAll(){
		$query = $this->db->get($this->data['table_name']);
		return $query->result();
	}

	public function getSubjek(){
		$query = $this->db->query('select distinct subjek.namaSubjek, subjek.idSubjek from subjek inner join tugas_akhir on subjek.idSubjek = tugas_akhir.idSubjek;');
		return $query->result();
	}

	public function getDosen1(){
		$query = $this->db->query('select distinct dosen.nama, dosen.nip from dosen inner join tugas_akhir on dosen.nip = tugas_akhir.dosenPembimbing1 where dosen.nip != tugas_akhir.dosenPembimbing2;');
		return $query->result();
	}

	public function getDatabyNim($idSubjek){
		$this->db->where($this->data['primary_key'], $idSubjek);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

	public function insertAll($data, $idSubjek){
		$this->db->where($this->data['primary_key'],$idSubjek);
		$query = $this->db->insert($this->data['table_name'], $data);
		return $query;
	}

	public function update($idSubjek, $data){
   		$this->db->where($this->data['primary_key'], $idSubjek);
   		$query = $this->db->update($this->data['table_name'], $data);
   		return $query;
   	}
}