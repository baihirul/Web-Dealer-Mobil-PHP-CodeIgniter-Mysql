<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merek extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('merek_model');
	}

	// Listing data merek
	public function index()
	{
		$merek = $this->merek_model->listing();

		$data = array(	'title'	=>	'Data Merek ('.count($merek).')',
						'merek'	=>	$merek,
						'isi'	=> 	'admin/merek/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah merek
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_merek','Nama merek','required',
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

		$data = array(	'title'			=>	'Tambah Merek',
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/merek/tambah'
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
							'slug_merek'			=>	url_title($this->input->post('nama_merek'), 'dash', TRUE),
							'nama_merek'			=>	$i->post('nama_merek'),
							'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->merek_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/merek'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Tambah Merek',
						'isi'			=> 	'admin/merek/tambah'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit merek
	public function edit($id_merek)
	{
		$merek = $this->merek_model->detail($id_merek);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_merek','Nama merek','required',
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

		$data = array(	'title'			=>	'Edit Merek',
						'merek'			=> 	$merek,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/merek/edit'
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
			if($merek->gambar !="")
			{
				unlink('./assets/upload/image/'.$merek->gambar);
				unlink('./assets/upload/image/thumbs/'.$merek->gambar);
			}
			// End hapus gambar

			$data = array(	'id_merek'	=>	$id_merek,
							'id_user'				=>	$this->session->userdata('id_user'),
							'slug_merek'			=>	url_title($this->input->post('nama_merek'), 'dash', TRUE),
							'nama_merek'			=>	$i->post('nama_merek'),
							'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->merek_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/merek'),'refresh');
		}}else{
			// Update merek tanpa ganti gambar baru
			$i = $this->input;
			$data = array(	'id_merek'	=>	$id_merek,
							'id_user'				=>	$this->session->userdata('id_user'),
							'slug_merek'			=>	url_title($this->input->post('nama_merek'), 'dash', TRUE),
							'nama_merek'			=>	$i->post('nama_merek'),
							// 'gambar'				=>	$upload_data['uploads']['file_name'],
							'urutan'				=>	$i->post('urutan')
						);
			$this->merek_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/merek'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Edit Merek',
						'merek'		=>	$merek,
						'isi'			=> 	'admin/merek/edit'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_merek)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$merek = $this->merek_model->detail($id_merek);

		// Hapus gambar
		if($merek->gambar !="")
		{
			unlink('./assets/upload/image/'.$merek->gambar);
			unlink('./assets/upload/image/thumbs/'.$merek->gambar);
		}
		// End hapus gambar

		$data = array(	'id_merek'	=>	$merek->id_merek);
		$this->merek_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/merek'),'refresh');
	}

}

/* End of file Merek.php */
/* Location: ./application/controllers/admin/Merek.php */