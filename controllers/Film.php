<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Film_model');
	}	 

public function film()
	{
		$data['film'] = $this->Film_model->tampil_film();
		$this->load->view('film/film_bioskop', $data);	
	}
}
