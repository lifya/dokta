<?php 

class MDosen extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'dosen';
		$this->data['primary_key']	= 'nip';
	}

	public function getData(){
		$query = $this->db->query('Select username, password From user Inner Join mahasiswa on dosen.nip = user.username; ');
		return $query->result();
	}

	public function getDatabyNim($nip){
		$this->db->where($this->data['primary_key'], $nip);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

   	public function insertByNim($data, $nip){
   		$this->db->where($this->data['primary_key'],$nip);
		$query = $this->db->insert($this->data['table_name'], $data);
		return $query;
	}

	public function insert($data){
		$query = $this->db->insert($this->data['table_name'], $data);
	}

   	public function update($nip, $data){
   		$this->db->where($this->data['primary_key'], $nip);
   		$query = $this->db->update($this->data['table_name'], $data);
   		return $query;
   	}

   	public function getNamaDosen1($nip){
		$query = $this->db->query('SELECT dosen.nama FROM dosen INNER JOIN
					tugas_akhir ON dosen.nip = tugas_akhir.dosenPembimbing1
   					WHERE dosen.nip = "'.$nip.'"
   				');
   		return $query->row();
	}

	public function getNamaDosen2($nip){
		$query = $this->db->query('SELECT dosen.nama FROM dosen INNER JOIN
					tugas_akhir ON dosen.nip = tugas_akhir.dosenPembimbing2
   					WHERE dosen.nip = "'.$nip.'"
   				');
   		return $query->row();
	}
}