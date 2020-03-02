<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
	}

	// Mainpage profil
	public function index()
	{
		$konfigurasi	= $this->konfigurasi_model->listing();

		// Listing profil dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('profil/index/');
		$config['total_rows'] 	= count($this->profil_model->total());
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 3;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$profil 				= $this->profil_model->profil($limit,$start);
		// End listing profil dengan Pagination

		$data = array( 	'title'		=> 'Profil - '.$konfigurasi->namaweb,
						'deskripsi'	=> 'Profil - '.$konfigurasi->namaweb,
						'keywords'	=> 'Profil - '.$konfigurasi->namaweb,
						'paginasi'	=> $this->pagination->create_links(),
						'profil'	=> $profil,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'profil/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail page profil
	public function read($slug_berita)
	{
		$profil 	= $this->profil_model->read($slug_berita);
		$listing	= $this->profil_model->home();

		$data = array( 	'title'		=>	$profil->judul_berita,
						'deskripsi'	=>	$profil->judul_berita,
						'keywords'	=>	$profil->judul_berita,
						'profil'	=>	$profil,
						'listing'	=>	$listing,
						'isi'		=>	'profil/read'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */