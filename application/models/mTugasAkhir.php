<?php 

class MTugasAkhir extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'tugas_akhir';
		$this->data['primary_key']	= 'nim';
	}

	public function get_data($nim)
	{
		$this->db->where('nim',$nim);
		$query = $this->db->get('tugas_akhir');
		return $query->result();
	}


   	public function get_detail_ta($nim)
	{
		$query = $this->db->query("SELECT tugas_akhir.judul, mahasiswa.nama, mahasiswa.nim, tugas_akhir.tahun, mahasiswa.jurusan, mahasiswa.angkatan, mahasiswa.email, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek, tugas_akhir.abstrak FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu where tugas_akhir.nim = '$nim' AND tugas_akhir.status = 'confirmed'
			");
			


		return $query->result();
	}

	public function get_pratinjau_ta($nim)
	{
		$query = $this->db->query("SELECT tugas_akhir.judul, tugas_akhir.status, mahasiswa.nama, mahasiswa.nim, tugas_akhir.tahun, mahasiswa.jurusan, mahasiswa.angkatan, mahasiswa.email, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek, tugas_akhir.abstrak FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu where tugas_akhir.nim = '$nim'
			");
			


		return $query->result();
	}

	public function get_delivered_ta()
	{
		$query = $this->db->query("SELECT tugas_akhir.judul, tugas_akhir.status, mahasiswa.nama, mahasiswa.nim, tugas_akhir.tahun, mahasiswa.jurusan, mahasiswa.angkatan, mahasiswa.email, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek, tugas_akhir.abstrak FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu where tugas_akhir.status = 'delivered'
			");
			


		return $query->result();
	}


	public function get_bidang_ilmu($idBidangIlmu)
	{
		$query = $this->db->query("SELECT tugas_akhir.nim, tugas_akhir.judul, mahasiswa.nama, tugas_akhir.tahun, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu where bidang_ilmu.idBidangIlmu = '$idBidangIlmu' AND tugas_akhir.status ='confirmed' LIMIT 0, 4");

		return $query->result();

	}

	public function get_ta_all_bidang($idBidangIlmu)
	{
		$query = $this->db->query("SELECT tugas_akhir.nim, tugas_akhir.judul, mahasiswa.nama, tugas_akhir.tahun, bidang_ilmu.namaBidangIlmu, subjek.namaSubjek FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu where bidang_ilmu.idBidangIlmu = '$idBidangIlmu' AND tugas_akhir.status ='confirmed'");

		return $query->result();

	}

	public function search_ta($keyword){
		$query = $this->db->query('
			SELECT * FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu WHERE tugas_akhir.status ="confirmed" AND  (mahasiswa.nama LIKE "%'.$keyword.'" OR tugas_akhir.tahun LIKE "%'.$keyword.'" OR tugas_akhir.judul LIKE "%'.$keyword.'" OR bidang_ilmu.namaBidangIlmu LIKE "%'.$keyword.'%") 
			UNION
			SELECT * FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu WHERE tugas_akhir.status ="confirmed" AND (mahasiswa.nama LIKE "%'.$keyword.'%" OR tugas_akhir.tahun LIKE "%'.$keyword.'%" OR tugas_akhir.judul LIKE "%'.$keyword.'%" OR bidang_ilmu.namaBidangIlmu LIKE "%'.$keyword.'%")
			UNION
			SELECT * FROM mahasiswa INNER JOIN tugas_akhir ON mahasiswa.nim = tugas_akhir.nim INNER JOIN subjek ON tugas_akhir.idSubjek = subjek.idSubjek INNER JOIN bidang_ilmu ON subjek.idBidangIlmu = bidang_ilmu.idBidangIlmu WHERE tugas_akhir.status ="confirmed" AND (mahasiswa.nama LIKE "'.$keyword.'%" OR tugas_akhir.tahun LIKE "'.$keyword.'%" OR tugas_akhir.judul LIKE "'.$keyword.'%" OR bidang_ilmu.namaBidangIlmu LIKE "'.$keyword.'%")
							       ');
		return $query->result();
	}
}