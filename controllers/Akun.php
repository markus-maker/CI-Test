<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Akun_model');
	}	 
	
	public function data_akun()
	{
		$data['data_akun'] = $this->Akun_model->get_data();
		$this->load->view('data_akun', $data);	
	}

	public function tambah_akun()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_akun');	
	}

	public function kirim_akun()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()  != FALSE) {

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$status=$this->input->post('status');


		$data=array(
			'username'=>$username,
			'password'=>$password,
			'status'=>$status,
		);


		$this->Akun_model->tambah_akun($data, 'Akun');
		redirect('Akun/data_akun');	
	}else {
		$this->load->view('tambah_data_akun');	
	}
}
}
