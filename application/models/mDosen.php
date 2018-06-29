<?php 

class MDosen extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'dosen';
		$this->data['primary_key']	= 'nip';
	}
	
	public function getAll(){
		$query = $this->db->get($this->data['table_name']);
		return $query->result();
	}

	public function getData(){
		$query = $this->db->query('Select username, password From user Inner Join mahasiswa on dosen.nip = user.username; ');
		return $query->result();
	}

	public function getDatabyNIP($nip){
		$this->db->where($this->data['primary_key'], $nip);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

   	public function insertByNIP($data, $nip){
   		$this->db->where($this->data['primary_key'],$nip);
		$query = $this->db->insert($this->data['table_name'], $data);
		return $query;
	}

	public function insert($data){
		$query = $this->db->insert($this->data['table_name'], $data);
		return $query;
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

	//Data Dosen

	function DataDosen_list(){
		$hasil=$this->db->query("SELECT * FROM dosen");
		return $hasil->result();
	}

	function simpan_DataDosen($nipDosen,$namaDosen,$emailDosen,$alamatDosen){
		$hasil=$this->db->query("INSERT INTO dosen (nip,nama,email,alamat)VALUES('$nipDosen','$namaDosen','$emailDosen','$alamatDosen')");
		// $query = $this->db->insert($this->data['table_name'],$data);
		// return $query;
		return $hasil;
	}

	function get_DataDosen_by_kode($nipDosen){
		$hsl=$this->db->query("SELECT * FROM dosen WHERE nip='$nipDosen'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip' => $data->nip,
					'nama' => $data->nama,
					'email' => $data->email,
					'alamat' => $data->alamat,
					);
			}
		}
		return $hasil;
	}

	function update_DataDosen($nipDosen,$namaDosen,$emailDosen,$alamatDosen){
		// $this->db->WHERE('NIM', $nimTTA);
		$hasil=$this->db->update("UPDATE dosen SET nama='$namaDosen', email='$emailDosen', alamat='$alamatDosen' WHERE nip='$nipDosen'");
		return $hasil;
	}

	function hapus_DataDosen($nipDosen){
		$hasil=$this->db->query("DELETE FROM dosen WHERE nip='$nipDosen'");
		return $hasil;
	}

	//Data Dosen

	public function get_data_dosen()
	{
		$query = $this->db->query('SELECT * FROM dosen ORDER BY nip ASC');

		return $query->result();
	}

	//Hapus Data Dosen
	public function hapus_dosen($nip)
	{
		return $this->db->delete('dosen', array('nip' => $nip));
	}
}