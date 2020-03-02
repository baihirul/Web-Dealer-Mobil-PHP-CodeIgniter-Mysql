<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing pesan
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->order_by('id_pesan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail pesan
	public function detail($id_pesan)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id_pesan',$id_pesan);
		$this->db->order_by('id_pesan');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah/insert data
	public function tambah($data)
	{
		$this->db->insert('pesan',$data);
	}

	// Delete/hapus pesan
	public function delete($data)
	{
		$this->db->where('id_pesan',$data['id_pesan']);
		$this->db->delete('pesan',$data);
	}

}

/* End of file Pesan_model.php */
/* Location: ./application/models/Pesan_model.php */