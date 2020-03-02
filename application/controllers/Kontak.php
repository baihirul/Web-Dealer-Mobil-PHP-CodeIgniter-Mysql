<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('kontak_model');
	}

	// Main page - Kontakpage
	public function index()
	{
		$konfigurasi 	= $this->konfigurasi_model->listing();

		$data = array(	'title' 		=> 'Kontak '.$konfigurasi->namaweb.' - '.$konfigurasi->tagline,
						'keywords'		=> 'Kontak '.$konfigurasi->namaweb.' - '.$konfigurasi->tagline,
						'deskripsi'		=> 'Kontak '.$konfigurasi->namaweb.' - '.$konfigurasi->tagline,
						'konfigurasi'	=> $konfigurasi,
						'isi'			=> 'kontak/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Kirim pesan
	public function pesan()
	{
		$i = $this->input;

		$data = array(	'nama'		=>	$i->post('nama'),
						'email'		=>	$i->post('email'),
						'pesan'		=>	$i->post('pesan')
					);
		$this->kontak_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Terimakasih telah menghubungi kami');
		redirect(base_url('kontak'));
	}

}
/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */