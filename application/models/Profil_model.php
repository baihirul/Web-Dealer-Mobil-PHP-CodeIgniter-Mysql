<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing profil
	public function listing()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing profil home
	public function home()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing profil main page
	public function profil($limit,$start)
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total profil main page
	public function total()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_berita'		=> 'Publish',
								'jenis_berita'		=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Read profil main page
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

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */