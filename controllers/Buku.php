<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Buku_model');
	}	 
	
	public function index()
	{
		$data['data_buku'] = $this->Buku_model->get_data();
		$this->load->view('data_buku', $data);	
	}
}
