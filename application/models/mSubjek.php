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