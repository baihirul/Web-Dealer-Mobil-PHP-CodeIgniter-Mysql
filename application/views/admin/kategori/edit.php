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
echo form_open_multipart(base_url('admin/kategori/edit/'.$kategori->id_kategori),$attribut);
 ?>

<div class="row">
 <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Nama Kategori</label>
 		<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo $kategori->nama_kategori ?>" required>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Upload gambar</label>
 		<input type="file" name="gambar" class="form-control">
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Urutan</label>
 		<input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $kategori->urutan ?>">
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group">
 		<label>Deskripsi Kategori</label>
 		<textarea name="deskripsi_kategori" class="form-control tinymce" placeholder="Deskripsi Kategori"><?php echo $kategori->deskripsi_kategori ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
	<div class="form-group text-right">
	 	<button type="submit" name="submit" class="btn btn-success btn-lg">
	 		<i class="fa fa-save"></i> Simpan Kategori
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