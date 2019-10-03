<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Buku_model'); //pemanggil Buku_model.php agar model bisa digunakan
	}	 
	
	public function index()
	{
		$data['data_buku'] = $this->Buku_model->get_data(); //pemanggil Buku_model.php agar model bisa digunakan
		$this->load->view('data_buku', $data);	//pemanggil data_buku.php agar terlihat saat kita membuka browser
	}
}
