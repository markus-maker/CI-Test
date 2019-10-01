<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('buku');
		return $query->result();
	}
}
