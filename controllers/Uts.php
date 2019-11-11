<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Uts_model');
	}	 

	public function ambil_data_diri($id)
	{
		$data['ambil_data_uts'] = $this->Uts_model->get_id($id);
		$this->load->view('ubah_data_uts', $data);	
	}

	
	public function data_diri()
	{
		$data['data_uts'] = $this->Uts_model->get_data();
		$this->load->view('data_uts', $data);	
	}

	public function tambah_data()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_uts');	
	}
		
	public function kirim_data()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|is_unique[uts.nama]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telfon', 'no_telfon', 'required');

		if($this->form_validation->run()  != FALSE) {

			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$no_telfon = $this->input->post('no_telfon');


		$data=array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'email'=>$email,
			'no_telfon'=>$no_telfon,
		);


		$this->Uts_model->tambah_data($data, 'Uts');
		redirect('uts/data_diri');	
	}else {
		$this->load->view('tambah_data_uts');	
	}
}

public function ubah_data()
	{
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_telfon = $this->input->post('no_telfon');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run()  != FALSE) {

		$data=array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'email'=>$email,
			'no_telfon'=>$no_telfon,
		);


		$this->Uts_model->ubah_data($id,$data, 'Uts');
		$this->session->set_flashdata('success', 'Data Berhasil diperbaharui');
		redirect('uts/data_diri');	
	}else {
		$data['ambil_data_uts'] = $this->Uts_model->get_id($id);
		$this->load->view('ubah_data_uts', $data);	
	}
}


public function hapus($id){
	$where = array('id' => $id);
	$this->Uts_model->hapus_data($where,'uts');
	redirect('Uts/data_diri');
	}
}
