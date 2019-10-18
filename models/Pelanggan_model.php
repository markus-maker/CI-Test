<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('pelanggan');
		return $query->result();
	}

	public function tambah_pelanggan($data, $table)
	{
		$this->db->insert($table, $data);	
	}

	public function tampil_jualan()
	{
		$this->db->select('id_barang, nama_barang, jumlah_barang, harga_barang, nama_pelanggan, alamat, no_hp');
		$this->db->from('barang');
		$this->db->join('pelanggan' , ' pelanggan.id = barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}
}
