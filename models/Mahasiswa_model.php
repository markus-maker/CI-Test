<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	public function tambah_data($data, $table)
	{
		$this->db->insert($table, $data);	
	}

	public function ubah_data($id, $data, $table)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);	
	}

	public function tampil_data_peminjaman()
	{
		$this->db->select('judul_buku, penerbit, tgl_pinjam, tgl_kembali, nim, nama, kelas');
		$this->db->from('mahasiswa');
		$this->db->join('pinjam_buku' , 'pinjam_buku.id_mahasiswa = mahasiswa.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_id($id)
	{
		$this->db->from('mahasiswa');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}
