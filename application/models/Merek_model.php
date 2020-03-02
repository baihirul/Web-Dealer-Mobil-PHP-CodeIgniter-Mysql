<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merek_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing merek
	public function listing()
	{
		$this->db->select('merek.*, user.nama');
		$this->db->from('merek');
		// join
		$this->db->join('user','user.id_user = merek.id_user','LEFT');
		// end join
		$this->db->order_by('id_merek','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Home merek
	public function home()
	{
		$this->db->select('merek.*, user.nama');
		$this->db->from('merek');
		// join
		$this->db->join('user','user.id_user = merek.id_user','LEFT');
		// end join
		$this->db->order_by('id_merek','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}

	// Merek
	public function merek($limit,$start)
	{
		$this->db->select('merek.*, user.nama');
		$this->db->from('merek');
		// join
		$this->db->join('user','user.id_user = merek.id_user','LEFT');
		// end join
		$this->db->order_by('id_merek','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total merek
	public function total()
	{
		$this->db->select('merek.*, user.nama');
		$this->db->from('merek');
		// join
		$this->db->join('user','user.id_user = merek.id_user','LEFT');
		// end join
		$this->db->order_by('id_merek','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Read merek
	public function read($slug_merek)
	{
		$this->db->select('merek.*, user.nama');
		$this->db->from('merek');
		// join
		$this->db->join('user','user.id_user = merek.id_user','LEFT');
		// end join
		$this->db->where(array(	'merek.slug_merek'	=> $slug_merek));
		$this->db->order_by('id_merek','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail merek
	public function detail($id_merek)
	{
		$this->db->select('*');
		$this->db->from('merek');
		$this->db->where('id_merek',$id_merek);
		$this->db->order_by('id_merek');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah/insert data
	public function tambah($data)
	{
		$this->db->insert('merek',$data);
	}

	// Edit/update merek
	public function edit($data)
	{
		$this->db->where('id_merek',$data['id_merek']);
		$this->db->update('merek',$data);
	}

	// Delete/hapus merek
	public function delete($data)
	{
		$this->db->where('id_merek',$data['id_merek']);
		$this->db->delete('merek',$data);
	}

}

/* End of file Merek_model.php */
/* Location: ./application/models/Merek_model.php */