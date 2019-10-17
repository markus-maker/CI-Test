<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('akun');
		return $query->result();
	}

	public function tambah_akun($data, $table)
	{
		$this->db->insert($table, $data);	
	}
}
