<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing berita
	public function listing()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing berita home
	public function home()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Berita'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing berita main page
	public function berita($limit,$start)
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Berita'));
		$this->db->order_by('id_berita','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total berita main page
	public function total()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Berita'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Read berita main page
	public function read($slug_berita)
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'			=> 'Publish',
								'berita.slug_berita'	=>	$slug_berita));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail berita
	public function detail($id_berita)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita',$id_berita);
		$this->db->order_by('id_berita');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah/insert data
	public function tambah($data)
	{
		$this->db->insert('berita',$data);
	}

	// Edit/update berita
	public function edit($data)
	{
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->update('berita',$data);
	}

	// Delete/hapus berita
	public function delete($data)
	{
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->delete('berita',$data);
	}

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */