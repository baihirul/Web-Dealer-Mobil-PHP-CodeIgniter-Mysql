<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model');
	}

	// Listing data kontak
	public function index()
	{
		$kontak = $this->kontak_model->listing();

		$data = array(	'title'		=>	'Data Pesan ('.count($kontak).')',
						'kontak'	=>	$kontak,
						'isi'		=> 	'admin/kontak/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_kontak)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$kontak = $this->kontak_model->detail($id_kontak);

		$data = array(	'id_kontak'	=>	$kontak->id_kontak);
		$this->kontak_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kontak'),'refresh');
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/admin/Kontak.php */