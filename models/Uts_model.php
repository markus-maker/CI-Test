<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uts_model extends CI_Model {

	public function get_data()
	{
		$this->db->select('*');
     	$this->db->from('uts');
     	$this->db->order_by('id' , 'DESC');
     	$query = $this->db->get();
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

	public function get_id($id)
	{
		$this->db->from('uts');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
