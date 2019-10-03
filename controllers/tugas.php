<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tugas_model'); //pemanggil Tugas_model.php agar model bisa digunakan
	}	 
	
	public function index()
	{
		$data['data_tugas'] = $this->Tugas_model->get_data(); //pemanggil Tugas_model.php agar model bisa digunakan
		$this->load->view('data_tugas', $data);	//pemanggil data_tugas.php agar terlihat saat kita membuka browser
	}
}
