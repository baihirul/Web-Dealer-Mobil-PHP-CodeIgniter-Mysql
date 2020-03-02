<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mobil_model');
		$this->load->model('kategori_model');
		$this->load->model('merek_model');
		$this->load->model('konfigurasi_model');
	}

	// Mainpage mobil
	public function index()
	{
		$konfigurasi	= $this->konfigurasi_model->listing();

		// Listing mobil dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('mobil/index/');
		$config['total_rows'] 	= count($this->mobil_model->total());
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 3;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$mobil 				= $this->mobil_model->mobil($limit,$start);
		// End listing mobil dengan Pagination

		$data = array( 	'title'		=> 'Mobil - '.$konfigurasi->namaweb,
						'deskripsi'	=> 'Mobil - '.$konfigurasi->namaweb,
						'keywords'	=> 'Mobil - '.$konfigurasi->namaweb,
						'paginasi'	=> $this->pagination->create_links(),
						'mobil'		=> $mobil,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'mobil/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Kategori mobil
	public function kategori($slug_kategori)
	{
		$kategori 		= $this->kategori_model->read($slug_kategori);
		$id_kategori	= $kategori->id_kategori;
		$konfigurasi	= $this->konfigurasi_model->listing();

		// Listing mobil dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('mobil/kategori/'.$slug_kategori.'/index/');
		$config['total_rows'] 	= count($this->mobil_model->total_kategori($id_kategori));
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 5;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(5)) ? ($this->uri->segment(5)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$mobil 				= $this->mobil_model->mobil_kategori($id_kategori,$limit,$start);
		// End listing mobil dengan Pagination

		$data = array( 	'title'		=> 'Kategori mobil: '.$kategori->nama_kategori,
						'deskripsi'	=> 'Kategori mobil: '.$kategori->nama_kategori,
						'keywords'	=> 'Kategori mobil: '.$kategori->nama_kategori,
						'paginasi'	=> $this->pagination->create_links(),
						'mobil'	=> $mobil,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'mobil/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Merek mobil
	public function merek($slug_merek)
	{
		$merek 			= $this->merek_model->read($slug_merek);
		$id_merek		= $merek->id_merek;
		$konfigurasi	= $this->konfigurasi_model->listing();

		// Listing mobil dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('mobil/merek/'.$slug_merek.'/index/');
		$config['total_rows'] 	= count($this->mobil_model->total_merek($id_merek));
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 5;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(5)) ? ($this->uri->segment(5)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$mobil 				= $this->mobil_model->mobil_merek($id_merek,$limit,$start);
		// End listing mobil dengan Pagination

		$data = array( 	'title'		=> 'Merek mobil: '.$merek->nama_merek,
						'deskripsi'	=> 'Merek mobil: '.$merek->nama_merek,
						'keywords'	=> 'Merek mobil: '.$merek->nama_merek,
						'paginasi'	=> $this->pagination->create_links(),
						'mobil'		=> $mobil,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'mobil/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail page mobil
	public function read($slug_mobil)
	{
		$mobil 		= $this->mobil_model->read($slug_mobil);
		$listing 	= $this->mobil_model->home();
		$kontak		= $this->konfigurasi_model->kontak();

		$data = array( 	'title'		=>	$mobil->nama_mobil,
						'deskripsi'	=>	$mobil->nama_mobil,
						'keywords'	=>	$mobil->nama_mobil,
						'mobil'		=>	$mobil,
						'kontak'	=> 	$kontak,
						'listing'	=>	$listing,
						'isi'		=>	'mobil/read'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Mobil.php */
/* Location: ./application/controllers/Mobil.php */