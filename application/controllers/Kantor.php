<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kantor extends CI_Controller {
    public function __construct() {
      parent::__construct();
        $this->load->model('Pegawai');
    }

  	public function index(){
    	$this->load->view('kantor');
  	}

  	public function cari(){
    	$keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
    	$data_pegawai['pegawai_kantor'] = $this->Pegawai->cari($keyword); //mencari data karyawan berdasarkan inputan
    	$this->load->view('tampilpegawai', $data_pegawai); //menampilkan data yang sudah dicari
  	}
	function tampil_pegawai()
    {
    	$kode='all';
		$this->load->model('pegawai');
    	$data_pegawai['pegawai_kantor']=$this->pegawai->tampil_data_pegawai($kode);  
    	$this->load->view('tampilpegawai',$data_pegawai);
    }
	function tambah_pegawai()
	{
		$this->load->view('tambahpegawai');
	}
	function simpan_pegawai()
	{
		if (isset($_POST['mysubmit'])){
			$data = array(
				'NIP'		    => $this->input->post('NIP'),
                'Nama'          => $this->input->post('Nama'),                                        
                'Jabatan'   	=> $this->input->post('Jabatan'),
				'Jenis_kelamin'	=> $this->input->post('Jenis_kelamin'),    
                'Alamat'	    => $this->input->post('Alamat'),
				'mode'			=> $this->input->post('mode')
			);
			$this->load->model('pegawai');
			$hasil=$this->pegawai->simpan_data_pegawai($data);
			if ($hasil){
				echo "Simpan data berhasil";
			}else{
				echo "Simpan data gagal";
			}
			echo "<br/>";
			echo anchor('kantor/tampil_pegawai', 'Kembali');
		}
	}
	function koreksi_pegawai($kd)
	{
		$this->load->model('pegawai');
    	$data_pegawai['datapegawai']=$this->pegawai->tampil_data_pegawai($kd);  
		$this->load->view('koreksipegawai',$data_pegawai);
	}
	function konfirm_hapus_pegawai($kd)
	{
		$this->load->model('pegawai');
    	$data_pegawai['datapegawai']=$this->pegawai->tampil_data_pegawai($kd);  
		$this->load->view('konfirmhapus',$data_pegawai);
	}
	function hapus_pegawai($kd)
	{
		$this->load->model('pegawai');
    	$hasil=$this->pegawai->hapus_data_pegawai($kd);
		if ($hasil){
				echo "Hapus data berhasil";	
		}else{
				echo "Hapus data gagal";
		}
		echo "<br/>";
		echo anchor('kantor/tampil_pegawai', 'Kembali');
	}
}
?>