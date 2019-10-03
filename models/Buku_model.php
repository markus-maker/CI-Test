<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('buku'); //pemanggil db praktikum-ci tabel buku
		return $query->result(); //hasilnya akan terlihat sebagai array di browser
	}
}
