<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->query("Select * from buku"); //pemanggil db praktikum-ci tabel buku
		return $query->row_array(); //hasilnya akan terlihat sebagai array di browser
	}
}
