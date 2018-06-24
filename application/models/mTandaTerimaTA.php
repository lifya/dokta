<?php
class MTandaTerimaTA extends CI_Model{

	function TandaTerimaTA_list(){
		$hasil=$this->db->query("SELECT tanda_terima_ta.nim, tanda_terima_ta.nama, tanda_terima_ta.tanggal FROM tanda_terima_ta");
		return $hasil->result();
	}

	function simpan_TandaTerimaTA($nimTTTA,$namaTTTA,$tglTTTA){
		$hasil=$this->db->query("INSERT INTO tanda_terima_ta (nim,nipus,nama,tanggal)VALUES('$nimTTTA','09021181520025','$namaTTTA','$tglTTTA')");
		return $hasil;
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

	function update_TandaTerimaTA($nimTTTA,$namaTTTA,$tglTTTA){
		$hasil=$this->db->query("UPDATE tanda_terima_ta SET nama='$namaTTTA',tanggal='$tglTTTA' WHERE nim='$nimTTTA'");
		return $hasil;
	}

	function hapus_TandaTerimaTA($nimTTTA){
		$hasil=$this->db->query("DELETE FROM tanda_terima_ta WHERE nim='$nimTTTA'");
		return $hasil;
	}
	
}