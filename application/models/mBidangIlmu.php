<?php 

class MBidangIlmu extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'bidang_ilmu';
		$this->data['primary_key']	= 'idBidangIlmu';
	}

	public function getAll(){
		$query = $this->db->get($this->data['table_name']);
		return $query->result();
	}

	public function getDatabyNim($idBidangIlmu){
		$this->db->where($this->data['primary_key'], $idSubjek);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

	public function insertAll($data, $idBidangIlmu){
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