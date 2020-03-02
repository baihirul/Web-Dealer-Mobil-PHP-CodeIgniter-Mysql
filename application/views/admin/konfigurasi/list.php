<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');

// Error upload
if(isset($error_upload)){
	echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

// Atribut
$attribut = 'class="alert alert-info"';

// Form open
echo form_open_multipart(base_url('admin/konfigurasi'),$attribut);
 ?>

<input type="hidden" name="id_konfigurasi" value="<?php echo $konfigurasi->id_konfigurasi ?>">
<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

<div class="row">
	<div class="col-md-6">
		
		<div class="form-group">
			<label>Nama Perusahaan/Organisasi</label>
			<input type="text" name="namaweb" class="form-control" placeholder="Nama web" value="<?php echo $konfigurasi->namaweb ?>">
		</div>

		<div class="form-group">
			<label>Tagline Perusahaan/Organisasi</label>
			<input type="text" name="tagline" class="form-control" placeholder="Tagline Perusahaan/Organisasi" value="<?php echo $konfigurasi->tagline ?>">
		</div>

		<div class="form-group">
			<label>Website</label>
			<input type="url" name="website" class="form-control" placeholder="Website" value="<?php echo $konfigurasi->website ?>">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email Perusahaan/Organisasi" value="<?php echo $konfigurasi->email ?>">
		</div>

		<div class="form-group">
			<label>Telepon</label>
			<input type="text" name="telepon" class="form-control" placeholder="Telepon Perusahaan/Organisasi" value="<?php echo $konfigurasi->telepon ?>">
		</div>

		<div class="form-group">
			<label>Facebook URL</label>
			<input type="url" name="facebook" class="form-control" placeholder="Facebook URL" value="<?php echo $konfigurasi->facebook ?>">
		</div>

		<div class="form-group">
			<label>Instagram URL</label>
			<input type="url" name="instagram" class="form-control" placeholder="Instagram URL" value="<?php echo $konfigurasi->instagram ?>">
		</div>

	</div>

	<div class="col-md-6">

		<div class="form-group">
			<label>Alamat Perusahaan/Organisasi/Website</label>
			<textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $konfigurasi->alamat ?></textarea>
		</div>

		<div class="form-group">
			<label>Deskripsi Perusahaan/Organisasi/Website</label>
			<textarea name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo $konfigurasi->deskripsi ?></textarea>
		</div>

		<div class="form-group">
			<label>Keywords</label>
			<textarea name="keywords" class="form-control" placeholder="Keywords"><?php echo $konfigurasi->keywords ?></textarea>
		</div>

		<div class="form-group">
			<label>Metatext (dari Google Analytics)</label>
			<textarea name="metatext" class="form-control" placeholder="Metatext"><?php echo $konfigurasi->metatext ?></textarea>
		</div>

		<div class="form-group">
			<label>Google Maps</label>
			<textarea name="map" class="form-control" placeholder="Google Maps"><?php echo $konfigurasi->map ?></textarea>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Konfigurasi">
		</div>

	</div>

</div>

<?php 
// Form close
echo form_close();
 ?>