<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function _construct(){
		parent::_construct();
	}	 
	public function index()
	{
		echo "Selamat Datang Para Mahasiswa Baru Prodi TI UMPWR";
	}

	public function biodata(){
		$data = array(
			'nim'=> "172520036",
			'nama'=> "Markus (Perf-Bharina)",
			'alamat'=> "Plaosan GG 6");
		$this->load->view('biodata', $data);
	}
}
