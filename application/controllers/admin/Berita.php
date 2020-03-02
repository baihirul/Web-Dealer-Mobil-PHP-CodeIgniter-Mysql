<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	// Listing data berita
	public function index()
	{
		$berita = $this->berita_model->listing();

		$data = array(	'title'		=>	'Data Berita ('.count($berita).')',
						'berita'	=>	$berita,
						'isi'		=> 	'admin/berita/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah berita
	public function tambah()
	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('judul_berita','Judul berita','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('isi_berita','Isi berita','required',
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

		$data = array(	'title'			=>	'Tambah Berita',
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/berita/tambah'
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
			$config['width']         	= 400;
			$config['height']       	= 400;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i = $this->input;
			$data = array(	'id_user'		=>	$this->session->userdata('id_user'),
							'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
							'judul_berita'	=>	$i->post('judul_berita'),
							'isi_berita'	=>	$i->post('isi_berita'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_berita'	=>	$i->post('status_berita'),
							'jenis_berita'	=>	$i->post('jenis_berita'),
							'keywords'		=>	$i->post('keywords'),
							'tanggal_post'	=>	date('Y-m-d H:i:s')
						);
			$this->berita_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/berita'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Tambah Berita',
						'isi'			=> 	'admin/berita/tambah'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit berita
	public function edit($id_berita)
	{
		$berita = $this->berita_model->detail($id_berita);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('judul_berita','Judul berita','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('isi_berita','Isi berita','required',
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

		$data = array(	'title'			=>	'Edit Berita',
						'berita'		=> 	$berita,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/berita/edit'
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
			$config['width']         	= 400;
			$config['height']       	= 400;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			$i = $this->input;

			// Hapus gambar lama jika ada upload gambar baru
			if($berita->gambar !="")
			{
				unlink('./assets/upload/image/'.$berita->gambar);
				unlink('./assets/upload/image/thumbs/'.$berita->gambar);
			}
			// End hapus gambar

			$data = array(	'id_berita'		=>	$id_berita,
							'id_user'		=>	$this->session->userdata('id_user'),
							'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
							'judul_berita'	=>	$i->post('judul_berita'),
							'isi_berita'	=>	$i->post('isi_berita'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_berita'	=>	$i->post('status_berita'),
							'jenis_berita'	=>	$i->post('jenis_berita'),
							'keywords'		=>	$i->post('keywords')
						);
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/berita'),'refresh');
		}}else{
			// Update berita tanpa ganti gambar baru
			$i = $this->input;
			$data = array(	'id_berita'		=>	$id_berita,
							'id_user'		=>	$this->session->userdata('id_user'),
							'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
							'judul_berita'	=>	$i->post('judul_berita'),
							'isi_berita'	=>	$i->post('isi_berita'),
							// 'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_berita'	=>	$i->post('status_berita'),
							'jenis_berita'	=>	$i->post('jenis_berita'),
							'keywords'		=>	$i->post('keywords')
						);
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/berita'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Edit Berita',
						'berita'		=>	$berita,
						'isi'			=> 	'admin/berita/edit'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_berita)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$berita = $this->berita_model->detail($id_berita);

		// Hapus gambar
		if($berita->gambar !="")
		{
			unlink('./assets/upload/image/'.$berita->gambar);
			unlink('./assets/upload/image/thumbs/'.$berita->gambar);
		}
		// End hapus gambar

		$data = array(	'id_berita'	=>	$berita->id_berita);
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/berita'),'refresh');
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */