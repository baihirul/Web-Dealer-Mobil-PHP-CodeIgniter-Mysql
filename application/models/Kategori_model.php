<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing kategori
	public function listing()
	{
		$this->db->select('kategori.*, user.nama');
		$this->db->from('kategori');
		// join
		$this->db->join('user','user.id_user = kategori.id_user','LEFT');
		// end join
		$this->db->order_by('id_kategori','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Home kategori
	public function home()
	{
		$this->db->select('kategori.*, user.nama');
		$this->db->from('kategori');
		// join
		$this->db->join('user','user.id_user = kategori.id_user','LEFT');
		// end join
		$this->db->order_by('id_kategori','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}

	// Kategori
	public function kategori($limit,$start)
	{
		$this->db->select('kategori.*, user.nama');
		$this->db->from('kategori');
		// join
		$this->db->join('user','user.id_user = kategori.id_user','LEFT');
		// end join
		$this->db->order_by('id_kategori','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total kategori
	public function total()
	{
		$this->db->select('kategori.*, user.nama');
		$this->db->from('kategori');
		// join
		$this->db->join('user','user.id_user = kategori.id_user','LEFT');
		// end join
		$this->db->order_by('id_kategori','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Read kategori
	public function read($slug_kategori)
	{
		$this->db->select('kategori.*, user.nama');
		$this->db->from('kategori');
		// join
		$this->db->join('user','user.id_user = kategori.id_user','LEFT');
		// end join
		$this->db->where(array(	'kategori.slug_kategori'	=> $slug_kategori));
		$this->db->order_by('id_kategori','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail kategori
	public function detail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id_kategori);
		$this->db->order_by('id_kategori');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah/insert data
	public function tambah($data)
	{
		$this->db->insert('kategori',$data);
	}

	// Edit/update kategori
	public function edit($data)
	{
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->update('kategori',$data);
	}

	// Delete/hapus kategori
	public function delete($data)
	{
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->delete('kategori',$data);
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */