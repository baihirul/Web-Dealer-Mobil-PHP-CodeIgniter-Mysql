<?php 
// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');

// Error upload
if(isset($error_upload)){
	echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

// Atribut
$attribut = 'class="alert alert-info"';
// Form open
echo form_open_multipart(base_url('admin/berita/edit/'.$berita->id_berita),$attribut);
 ?>

<div class="row">
 <div class="col-md-8">
 	<div class="form-group form-group-lg">
 		<label>Judul Berita</label>
 		<input type="text" name="judul_berita" class="form-control" placeholder="Judul berita" value="<?php echo $berita->judul_berita ?>" required>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Status Berita</label>
 		<select name="status_berita" class="form-control">
 			<option value="Publish">Publish</option>
 			<option value="Draft" <?php if($berita->status_berita=="Draft"){echo "selected"; } ?>>Draft</option>
 		</select>
 	</div>
 </div>

 <div class="col-md-6">
 	<div class="form-group">
 		<label>Jenis Berita</label>
 		<select name="jenis_berita" class="form-control">
 			<option value="Berita">Berita</option>
 			<option value="Profil" <?php if($berita->jenis_berita=="Profil"){echo "selected"; } ?>>Profil</option>
 		</select>
 	</div>
 </div>

 <div class="col-md-6">
 	<div class="form-group">
 		<label>Upload gambar</label>
 		<input type="file" name="gambar" class="form-control">
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group">
 		<label>Isi berita</label>
 		<textarea name="isi_berita" class="form-control tinymce" placeholder="Isi Berita"><?php echo $berita->isi_berita ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group">
 		<label>Keyword berita (untuk SEO Google)</label>
 		<textarea name="keywords" class="form-control" placeholder="Keywords Berita"><?php echo $berita->keywords ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
	<div class="form-group text-right">
	 	<button type="submit" name="submit" class="btn btn-success btn-lg">
	 		<i class="fa fa-save"></i> Simpan Berita
	 	</button>
	 	<button type="reset" name="reset" class="btn btn-default btn-lg">
	 		<i class="fa fa-times"></i> Reset
	 	</button>
	</div>
	</div>
</div>

 <?php 
// Form close
 echo form_close();
  ?>