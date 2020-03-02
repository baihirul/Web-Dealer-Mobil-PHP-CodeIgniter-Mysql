<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mobil_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('kategori_model');
		$this->load->model('galeri_model');
	}

	// Main page - Homepage
	public function index()
	{
		$konfigurasi 	= $this->konfigurasi_model->listing();
		$slider			= $this->galeri_model->slider();
		$kategori 		= $this->kategori_model->home();
		$mobil 			= $this->mobil_model->home();

		// Listing mobil dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('home/index/');
		$config['total_rows'] 	= count($this->mobil_model->total());
		$config['per_page'] 	= 9;
		$config['uri_segment']	= 2;
			// Limit dan start
			$limit 					= $config['per_page'];
			$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
			// End limit dan start
		$this->pagination->initialize($config);

		$mobil 				= $this->mobil_model->mobil($limit,$start);
		// End listing mobil dengan Pagination

		$data = array(	'title' 	=> $konfigurasi->namaweb.' - '.$konfigurasi->tagline,
						'keywords'	=> $konfigurasi->namaweb.' - '.$konfigurasi->tagline.', '.
											$konfigurasi->keywords,
						'deskripsi'	=> $konfigurasi->deskripsi,
						'paginasi'	=> $this->pagination->create_links(),
						'slider'	=> $slider,
						'kategori'	=> $kategori,
						'mobil'		=> $mobil,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'isi'		=> 'home/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */