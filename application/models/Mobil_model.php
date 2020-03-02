<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing mobil dasbor
	public function listing()
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing mobil home
	public function home()
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'		=> 'Publish'));
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing mobil main page
	public function mobil($limit,$start)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'		=> 'Publish'));
		$this->db->order_by('id_mobil','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total mobil main page
	public function total()
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'		=> 'Publish'));
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing kategori mobil main page
	public function mobil_kategori($id_kategori,$limit,$start)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'			=> 'Publish',
								'mobil.id_kategori'	=>	$id_kategori));
		$this->db->order_by('id_mobil','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total kategori mobil main page
	public function total_kategori($id_kategori)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'			=> 'Publish',
								'mobil.id_kategori'	=>	$id_kategori));
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Listing merek mobil main page
	public function mobil_merek($id_merek,$limit,$start)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'		=> 'Publish',
								'mobil.id_merek'	=>	$id_merek));
		$this->db->order_by('id_mobil','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total merek mobil main page
	public function total_merek($id_merek)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'		=> 'Publish',
								'mobil.id_merek'	=>	$id_merek));
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->result();
	}


	// Read mobil main page
	public function read($slug_mobil)
	{
		$this->db->select('mobil.*, kategori.nama_kategori, kategori.slug_kategori, merek.nama_merek, merek.slug_merek, user.nama');
		$this->db->from('mobil');
		// join
		$this->db->join('kategori','kategori.id_kategori = mobil.id_kategori','LEFT');
		$this->db->join('merek','merek.id_merek = mobil.id_merek','LEFT');
		$this->db->join('user','user.id_user = mobil.id_user','LEFT');
		// end join
		$this->db->where(array(	'status_mobil'			=> 'Publish',
								'mobil.slug_mobil'	=>	$slug_mobil));
		$this->db->order_by('id_mobil','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail mobil
	public function detail($id_mobil)
	{
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->where('id_mobil',$id_mobil);
		$this->db->order_by('id_mobil');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah/insert data
	public function tambah($data)
	{
		$this->db->insert('mobil',$data);
	}

	// Edit/update mobil
	public function edit($data)
	{
		$this->db->where('id_mobil',$data['id_mobil']);
		$this->db->update('mobil',$data);
	}

	// Delete/hapus mobil
	public function delete($data)
	{
		$this->db->where('id_mobil',$data['id_mobil']);
		$this->db->delete('mobil',$data);
	}

}

/* End of file Mobil_model.php */
/* Location: ./application/models/Mobil_model.php */