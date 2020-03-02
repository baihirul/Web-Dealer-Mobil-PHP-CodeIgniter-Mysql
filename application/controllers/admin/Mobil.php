<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mobil_model');
		$this->load->model('kategori_model');
		$this->load->model('merek_model');
	}

	// Listing data mobil
	public function index()
	{
		$mobil = $this->mobil_model->listing();

		$data = array(	'title'	=>	'Data Mobil ('.count($mobil).')',
						'mobil'	=>	$mobil,
						'isi'	=> 	'admin/mobil/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah mobil
	public function tambah()
	{
		$kategori = $this->kategori_model->listing();
		$merek = $this->merek_model->listing();

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_mobil','Nama Mobil','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('deskripsi_mobil','Deskripsi Mobil','required',
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

		$data = array(	'title'			=>	'Tambah Mobil',
						'kategori'		=>	$kategori,
						'merek'			=>	$merek,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/mobil/tambah'
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
			$data = array(	'id_user'			=>	$this->session->userdata('id_user'),
							'id_kategori'		=>	$i->post('id_kategori'),
							'id_merek'			=>	$i->post('id_merek'),
							'slug_mobil'		=>	url_title($this->input->post('nama_mobil'), 'dash', TRUE),
							'nama_mobil'		=>	$i->post('nama_mobil'),
							'deskripsi_mobil'	=>	$i->post('deskripsi_mobil'),
							'harga'				=>	$i->post('harga'),
							'tahun'				=>	$i->post('tahun'),
							'warna'				=>	$i->post('warna'),
							'transmisi'			=>	$i->post('transmisi'),
							'bahan_bakar'		=>	$i->post('bahan_bakar'),
							'cc'				=>	$i->post('cc'),
							'masa_stnk'			=>	$i->post('masa_stnk'),
							'kilometer'			=>	$i->post('kilometer'),
							'gambar'			=>	$upload_data['uploads']['file_name'],
							'status_mobil'		=>	$i->post('status_mobil'),
							'keywords'			=>	$i->post('keywords'),
							'tanggal_post'		=>	date('Y-m-d H:i:s')
						);
			$this->mobil_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/mobil'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Tambah Mobil',
						'kategori'		=>	$kategori,
						'merek'			=>	$merek,
						'isi'			=> 	'admin/mobil/tambah'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit mobil
	public function edit($id_mobil)
	{
		$mobil = $this->mobil_model->detail($id_mobil);
		$kategori = $this->kategori_model->listing();
		$merek = $this->merek_model->listing();

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_mobil','Nama Mobil','required',
			array(	'required'		=>	'%s harus diisi'));

		$valid->set_rules('deskripsi_mobil','Deskripsi Mobil','required',
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

		$data = array(	'title'			=>	'Edit Mobil',
						'kategori'		=>	$kategori,
						'mobil'			=> 	$mobil,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=> 	'admin/mobil/edit'
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
			if($mobil->gambar !="")
			{
				unlink('./assets/upload/image/'.$mobil->gambar);
				unlink('./assets/upload/image/thumbs/'.$mobil->gambar);
			}
			// End hapus gambar

			$data = array(	'id_mobil'			=>	$id_mobil,
							'id_user'			=>	$this->session->userdata('id_user'),
							'id_kategori'		=>	$i->post('id_kategori'),
							'id_merek'			=>	$i->post('id_merek'),
							'slug_mobil'		=>	url_title($this->input->post('nama_mobil'), 'dash', TRUE),
							'nama_mobil'		=>	$i->post('nama_mobil'),
							'deskripsi_mobil'	=>	$i->post('deskripsi_mobil'),
							'harga'				=>	$i->post('harga'),
							'tahun'				=>	$i->post('tahun'),
							'warna'				=>	$i->post('warna'),
							'transmisi'			=>	$i->post('transmisi'),
							'bahan_bakar'		=>	$i->post('bahan_bakar'),
							'cc'				=>	$i->post('cc'),
							'masa_stnk'			=>	$i->post('masa_stnk'),
							'kilometer'			=>	$i->post('kilometer'),
							'gambar'			=>	$upload_data['uploads']['file_name'],
							'status_mobil'		=>	$i->post('status_mobil'),
							'keywords'			=>	$i->post('keywords'),
							'tanggal_post'		=>	date('Y-m-d H:i:s')
						);
			$this->mobil_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/mobil'),'refresh');
		}}else{
			// Update mobil tanpa ganti gambar baru
			$i = $this->input;
			$data = array(	'id_mobil'		=>	$id_mobil,
							'id_user'			=>	$this->session->userdata('id_user'),
							'id_kategori'		=>	$i->post('id_kategori'),
							'id_merek'			=>	$i->post('id_merek'),
							'slug_mobil'		=>	url_title($this->input->post('nama_mobil'), 'dash', TRUE),
							'nama_mobil'		=>	$i->post('nama_mobil'),
							'deskripsi_mobil'	=>	$i->post('deskripsi_mobil'),
							'harga'				=>	$i->post('harga'),
							'tahun'				=>	$i->post('tahun'),
							'warna'				=>	$i->post('warna'),
							'transmisi'			=>	$i->post('transmisi'),
							'bahan_bakar'		=>	$i->post('bahan_bakar'),
							'cc'				=>	$i->post('cc'),
							'masa_stnk'			=>	$i->post('masa_stnk'),
							'kilometer'			=>	$i->post('kilometer'),
							// 'gambar'			=>	$upload_data['uploads']['file_name'],
							'status_mobil'		=>	$i->post('status_mobil'),
							'keywords'			=>	$i->post('keywords'),
							'tanggal_post'		=>	date('Y-m-d H:i:s')
						);
			$this->mobil_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/mobil'),'refresh');
		}}
		// End masuk database

		$data = array(	'title'			=>	'Edit Mobil',
						'kategori'		=>	$kategori,
						'merek'			=>	$merek,
						'mobil'			=>	$mobil,
						'isi'			=> 	'admin/mobil/edit'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($id_mobil)
	{
		// Proteksi delete
		$this->check_login->check();
		
		$mobil = $this->mobil_model->detail($id_mobil);

		// Hapus gambar
		if($mobil->gambar !="")
		{
			unlink('./assets/upload/image/'.$mobil->gambar);
			unlink('./assets/upload/image/thumbs/'.$mobil->gambar);
		}
		// End hapus gambar

		$data = array(	'id_mobil'	=>	$mobil->id_mobil);
		$this->mobil_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/mobil'),'refresh');
	}

}

/* End of file Mobil.php */
/* Location: ./application/controllers/admin/Mobil.php */