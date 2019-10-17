<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('member');
		return $query->result();
	}

	public function tambah_data($data, $table)
	{
		$this->db->insert($table, $data);	
	}

	public function tampil_film()
	{
		$this->db->select('id_member, judul_film, jenis_film, produser, sutradara, penulis,produksi, nama_pengunjung, alamat, no_hp, kunjungan');
		$this->db->from('member');
		$this->db->join('cinema' , 'cinema.id = member.id');
		$query = $this->db->get();
		return $query->result();
	}
}
