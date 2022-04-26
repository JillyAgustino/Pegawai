<?php
class Pegawai extends CI_Model 
{
	public function __construct() {
	    parent:: __construct();
	}
	public function data(){
	    return $this->db->get('pegawai_kantor')->result();
	}
	public function cari($keyword){
	    $this->db->like('Nama', $keyword)->or_like('Jabatan', $keyword); //mencari data yang serupa dengan keyword
	    return $this->db->get('pegawai_kantor')->result();
	}
	
    public function tampil_data_pegawai($kode){
		if ($kode=='all'){
			$hasil=$this->db->get('pegawai_kantor');	
		}else{
			$this->db->where('NIP',$kode);
			$hasil=$this->db->get('pegawai_kantor');
		}
        return $hasil->result();
    }

	public function simpan_data_pegawai($data){
		if ($data['mode']=='baru'){
			unset($data['mode']);
			$hasil=$this->db->insert('pegawai_kantor', $data); 	
		}else{
			unset($data['mode']);
			$this->db->where('NIP',$data['NIP']);
			$hasil=$this->db->update('pegawai_kantor', $data); 	
		}
		return $hasil;
	}

	public function hapus_data_pegawai($kode){
		$this->db->where('NIP', $kode);
		$hasil=$this->db->delete('pegawai_kantor'); 
		return $hasil;
	}
}
?>