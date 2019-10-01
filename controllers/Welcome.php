<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "<h6> copyright by : Markus Haryadi W == UMPWR 2019</h6> "."<br/>";
		echo "<b> Jadwal Mata Kuliah Pemrograman Framework </b> "."<br/>";
		$hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat','Sabtu');
		for($i=0;$i<count($hari);$i++){
			if($hari[$i] == "Rabu"){
				echo " <br/> 1. Teori Pemrograman Web Framework Pada Hari ".$hari[$i];
			}
		}
		for($j=0;$j<count($hari);$j++){
			if($hari[$j] == "Kamis"){
				echo " <br/> 2. Praktikum Pemrograman Web Framework Pada Hari ".$hari[$j];
			}
		}
		echo "<br/> <br/>";
		$this->load->view('table');
		
	}
}
