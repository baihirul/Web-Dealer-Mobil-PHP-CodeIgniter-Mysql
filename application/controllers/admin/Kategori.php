<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	}

	// Listing data kategori
	public function index()
	{
		$kategori = $this->kategori_model->listing();

		$data = array(	'title'		=>	'Data Kategori ('.count($kategori).')',
						'kategori'	=>	$kategori,
						'isi'		=> 	'admin/kategori/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah kategori
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori','Nama kategori','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('deskripsi_kategori','Deskripsi kategori','required',
			array(	'required'		=>	'%s harus diisi'));

		if($valid->run()){
			$config['upload_path']      = './assets/upload/image/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 5000;// Dalam kilobyte 
            $config['max_width']        = 5000;// Dalam pixel
            $config['max_height']       = 5000;// Dalam pixel

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar')){
			// End validasi

			$data = array(	'title'			=>	'Tambah Kategori',
							'error_upload'	=>	$this->upload->display_errors(),
							'isi'			=> 	'admin/kategori/tambah'
							);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		
		// Masuk database
		}else{
			// Proses manipulasi
			$upload_data	= array('uploads' =>$this->upload->data());

			/* Gambar asli disimpan di folder assets/upload/image
			Lalu gambar tersebut akan di buat versi mini atau thumbnail nya ke folder assets/upload/image/thumbs */
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
			// Gambar versi kecil dipindahkan
			$config['new_image']		= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio']	= TRUE;
			$config['width']         	= 200;
			$config['height']       	= 200;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i = $this->input;
			$data = array(	'id_user'				=>	$this->session->userdata('id_user'),
							'slug_kategori'			=>	url_title($this->input->post('nama_kategori'), 'dash', TRUE),
							'nama_kategori'			=>	$i->post('nama_kategori'),
							'deskripsi_kategori'	=>	$i->post('deskripsi_kategori'),
							'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->kategori_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/kategori'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Tambah Kategori',
						'isi'			=> 	'admin/kategori/tambah'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit kategori
	public function edit($id_kategori)
	{
		$kategori = $this->kategori_model->detail($id_kategori);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori','Nama kategori','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('deskripsi_kategori','Deskripsi kategori','required',
			array(	'required'		=>	'%s harus diisi'));

		if($valid->run()){
			// Kalau tidak ganti gambar
			if(!empty($_FILES['gambar']['name'])){

			$config['upload_path']      = './assets/upload/image/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 5000;// Dalam kilobyte 
            $config['max_width']        = 5000;// Dalam pixel
            $config['max_height']       = 5000;// Dalam pixel

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar')){
		// End validasi

		$data = array(	'title'			=>	'Edit Kategori',
						'kategori'		=> 	$kategori,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/kategori/edit'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
		// Masuk database
		}else{
			// Proses manipulasi
			$upload_data	= array('uploads' =>$this->upload->data());

			/* Gambar asli disimpan di folder assets/upload/image
			Lalu gambar tersebut akan di buat versi mini atau thumbnail nya ke folder assets/upload/image/thumbs */
			$config['image_library'] 	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
			// Gambar versi kecil dipindahkan
			$config['new_image']		= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio']	= TRUE;
			$config['width']         	= 200;
			$config['height']       	= 200;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i = $this->input;

			// Hapus gambar lama jika ada upload gambar baru
			if($kategori->gambar !="")
			{
				unlink('./assets/upload/image/'.$kategori->gambar);
				unlink('./assets/upload/image/thumbs/'.$kategori->gambar);
			}
			// End hapus gambar lama

			$data = array(	'id_kategori'	=>	$id_kategori,
							'id_user'				=>	$this->session->userdata('id_user'),
							'slug_kategori'			=>	url_title($this->input->post('nama_kategori'), 'dash', TRUE),
							'nama_kategori'			=>	$i->post('nama_kategori'),
							'deskripsi_kategori'	=>	$i->post('deskripsi_kategori'),
							'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->kategori_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/kategori'),'refresh');
		}}else{
			// Update kategori tanpa ganti gambar baru
			$i = $this->input;
			$data = array(	'id_kategori'	=>	$id_kategori,
							'id_user'				=>	$this->session->userdata('id_user'),
							'slug_kategori'			=>	url_title($this->input->post('nama_kategori'), 'dash', TRUE),
							'nama_kategori'			=>	$i->post('nama_kategori'),
							'deskripsi_kategori'	=>	$i->post('deskripsi_kategori'),
							// 'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->kategori_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/kategori'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Edit Kategori',
						'kategori'		=>	$kategori,
						'isi'			=> 	'admin/kategori/edit'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_kategori)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$kategori = $this->kategori_model->detail($id_kategori);

		// Hapus gambar
		if($kategori->gambar !="")
		{
			unlink('./assets/upload/image/'.$kategori->gambar);
			unlink('./assets/upload/image/thumbs/'.$kategori->gambar);
		}
		// End hapus gambar

		$data = array(	'id_kategori'	=>	$kategori->id_kategori);
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kategori'),'refresh');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */