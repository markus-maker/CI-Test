<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}	 

	public function ambil_data_diri($id)
	{
		$data['ambil_data_mahasiswa'] = $this->Mahasiswa_model->get_id($id);
		$this->load->view('ubah_data_mahasiswa', $data);	
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
		$this->form_validation->set_rules('nim', 'Nim', 'trim|required|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|is_unique[mahasiswa.nama]required');

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

public function ubah_data()
	{
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run()  != FALSE) {

		$data=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'kelas'=>$kelas,
		);


		$this->Mahasiswa_model->ubah_data($id,$data, 'Mahasiswa');
		$this->session->set_flashdata('success', 'Data Berhasil diperbaharui');
		redirect('mahasiswa/data_diri');	
	}else {
		$data['ambil_data_mahasiswa'] = $this->Mahasiswa_model->get_id($id);
		$this->load->view('ubah_data_mahasiswa', $data);	
	}
}

public function peminjaman()
	{
		$data['peminjaman'] = $this->Mahasiswa_model->tampil_data_peminjaman();
		$this->load->view('peminjaman/peminjaman_buku', $data);	
	}

public function hapus($id){
	$where = array('id' => $id);
	$this->Mahasiswa_model->hapus_data($where,'mahasiswa');
	redirect('Mahasiswa/data_diri');
	}

public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Mahasiswa_model->cek_login("admin",$where)->num_rows();
		if($cek > 0){
	 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
	 
			$this->session->set_userdata($data_session);
	 
			redirect(base_url("admin"));
		}else{
			echo "Username dan password salah !";
		}
	}
}
