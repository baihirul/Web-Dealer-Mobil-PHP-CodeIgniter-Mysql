<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model');
	}

	// Listing data pesan
	public function index()
	{
		$pesan = $this->kontak_model->listing();

		$data = array(	'title'	=>	'Data Pesan ('.count($pesan).')',
						'pesan'	=>	$pesan,
						'isi'	=> 	'admin/pesan/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Detail data pesan
	public function detail($id_pesan)
	{
		$pesan = $this->kontak_model->detail($id_pesan);

		$data = array(	'title'	=>	'Data Pesan',
						'pesan'	=>	$pesan,
						'isi'	=> 	'admin/pesan/detail'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_pesan)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$pesan = $this->kontak_model->detail($id_pesan);

		$data = array(	'id_pesan'	=>	$pesan->id_pesan);
		$this->kontak_model->delete($data);
		$this->session->set_flashdata('sukses', 'Pesan telah dihapus');
		redirect(base_url('admin/pesan'),'refresh');
	}

}

/* End of file Pesan.php */
/* Location: ./application/controllers/admin/Pesan.php */