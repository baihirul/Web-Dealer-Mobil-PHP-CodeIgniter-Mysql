<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	// Mainpage berita
	public function index()
	{
		$konfigurasi	= $this->konfigurasi_model->listing();

		// Listing berita dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('berita/index/');
		$config['total_rows'] 	= count($this->berita_model->total());
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 3;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$berita 				= $this->berita_model->berita($limit,$start);
		// End listing berita dengan Pagination

		$data = array( 	'title'		=> 'Berita - '.$konfigurasi->namaweb,
						'deskripsi'	=> 'Berita - '.$konfigurasi->namaweb,
						'keywords'	=> 'Berita - '.$konfigurasi->namaweb,
						'paginasi'	=> $this->pagination->create_links(),
						'berita'	=> $berita,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'berita/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail page berita
	public function read($slug_berita)
	{
		$berita 	= $this->berita_model->read($slug_berita);
		$listing 	= $this->berita_model->home();

		$data = array( 	'title'		=>	$berita->judul_berita,
						'deskripsi'	=>	$berita->judul_berita,
						'keywords'	=>	$berita->judul_berita,
						'berita'	=>	$berita,
						'listing'	=>	$listing,
						'isi'		=>	'berita/read'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */