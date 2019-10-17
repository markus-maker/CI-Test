<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}	 
	
	public function data_diri()
	{
		$data['data_mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('data_mahasiswa', $data);	
	}

	public function tambah_data()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_mahasiswa');	
	}

	public function kirim_data()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run()  != FALSE) {

		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$kelas=$this->input->post('kelas');


		$data=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'kelas'=>$kelas,
		);


		$this->Mahasiswa_model->tambah_data($data, 'Mahasiswa');
		redirect('mahasiswa/data_diri');	
	}else {
		$this->load->view('tambah_data_mahasiswa');	
	}
}

public function peminjaman()
	{
		$data['peminjaman'] = $this->Mahasiswa_model->tampil_data_peminjaman();
		$this->load->view('peminjaman/peminjaman_buku', $data);	
	}
}
