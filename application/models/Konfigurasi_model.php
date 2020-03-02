<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing()
	{
		$query = $this->db->get('konfigurasi');
		return $query->row();
	}

	// Kontak pada detail mobil
	public function kontak()
	{
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$query = $this->db->get();
		return $query->row();
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_konfigurasi',$data['id_konfigurasi']);
		$this->db->update('konfigurasi',$data);
	}

	// Menu berita
	public function menu_berita()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'berita.status_berita'	=> 'Publish',
								'berita.jenis_berita'	=> 'Berita'));
		$this->db->group_by('berita.id_berita');
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Menu kategori
	public function menu_kategori()
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'mobil.status_mobil'	=> 'Publish'));
		$this->db->group_by('mobil.id_kategori');
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Menu merek
	public function menu_merek()
	{
		$this->db->select('mobil.*, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'mobil.status_mobil'	=> 'Publish'));
		$this->db->group_by('mobil.id_merek');
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Menu profil
	public function menu_profil()
	{
		$this->db->select('berita.*, user.nama');
		$this->db->from('berita');
		// join
		$this->db->join('user','user.id_user = berita.id_user','LEFT');
		// end join
		$this->db->where(array(	'berita.status_berita'	=> 'Publish',
								'berita.jenis_berita'	=> 'Profil'));
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */