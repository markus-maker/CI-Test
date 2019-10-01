<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}	 
	
	public function index()
	{
		$data['data_mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('data_mahasiswa', $data);	
	}
}
