<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pelanggan_model');
	}	 

	public function data_pelanggan()
	{
		$data['data_pelanggan'] = $this->Pelanggan_model->get_data();
		$this->load->view('data_pelanggan', $data);	
	}

	public function tambah_pelanggan()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_pelanggan');	
	}

	public function kirim_pelanggan()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run()  != FALSE) {

		$nama_pelanggan=$this->input->post('nama_pelanggan');
		$alamat=$this->input->post('alamat');
		$no_hp=$this->input->post('no_hp');


		$data=array(
			'nama_pelanggan'=>$nama_pelanggan,
			'alamat'=>$alamat,
			'no_hp'=>$no_hp,
		);


		$this->Pelanggan_model->tambah_pelanggan($data, 'Pelanggan');
		redirect('pelanggan/data_pelanggan');	
	}else {
		$this->load->view('tambah_data_pelanggan');	
	}
	}

public function jualan()
	{
		$data['jualan'] = $this->Pelanggan_model->tampil_jualan();
		$this->load->view('pelanggan/jualan_hp', $data);	
	}
}
