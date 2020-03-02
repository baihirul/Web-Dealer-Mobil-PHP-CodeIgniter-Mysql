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
echo form_open_multipart(base_url('admin/mobil/edit/'.$mobil->id_mobil),$attribut);
 ?>

<div class="row">
 <div class="col-md-8">
 	<div class="form-group form-group-lg">
 		<label>Nama Mobil</label>
 		<input type="text" name="nama_mobil" class="form-control" placeholder="Nama Mobil" value="<?php echo $mobil->nama_mobil ?>" required>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Status Mobil</label>
 		<select name="status_mobil" class="form-control">
 			<option value="Publish">Publish</option>
 			<option value="Draft" <?php if($mobil->status_mobil=="Draft"){echo "selected"; } ?>>Draft</option>
 		</select>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group">
 		<label>Kategori Mobil</label>
 		<select name="id_kategori" class="form-control">
 			
 			<?php foreach($kategori as $kategori) { ?>
 			<option value="<?php echo $kategori->id_kategori ?>" <?php if($mobil->id_kategori==$kategori->id_kategori){echo "selected"; } ?>>
 				<?php echo $kategori->nama_kategori ?>
 			</option>
 			<?php } ?>
 		</select>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group">
 		<label>Merek Mobil</label>
 		<select name="id_merek" class="form-control">
 			
 			<?php foreach($merek as $merek) { ?>
 			<option value="<?php echo $merek->id_merek ?>" <?php if($mobil->id_merek==$merek->id_merek){echo "selected"; } ?>>
 				<?php echo $merek->nama_merek ?>
 			</option>
 			<?php } ?>
 		</select>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group">
 		<label>Upload gambar</label>
 		<input type="file" name="gambar" class="form-control">
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Harga</label>
 		<input type="number" name="harga" class="form-control" placeholder="Harga" value="<?php echo $mobil->harga ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Tahun</label>
 		<input type="number" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo $mobil->tahun ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Warna</label>
 		<input type="text" name="warna" class="form-control" placeholder="Warna" value="<?php echo $mobil->warna ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Transmisi</label>
 		<input type="text" name="transmisi" class="form-control" placeholder="Transmisi" value="<?php echo $mobil->transmisi ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Bahan Bakar</label>
 		<input type="text" name="bahan_bakar" class="form-control" placeholder="Bahan Bakar" value="<?php echo $mobil->bahan_bakar ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>CC</label>
 		<input type="number" name="cc" class="form-control" placeholder="CC" value="<?php echo $mobil->cc ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Masa STNK</label>
 		<input type="date" name="masa_stnk" class="form-control" placeholder="Masa STNK" value="<?php echo $mobil->masa_stnk ?>" required>
 	</div>
 </div>

 <div class="col-md-3">
 	<div class="form-group">
 		<label>Kilometer</label>
 		<input type="number" name="kilometer" class="form-control" placeholder="Kilometer" value="<?php echo $mobil->kilometer ?>" required>
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group">
 		<label>Deskripsi Mobil</label>
 		<textarea name="deskripsi_mobil" class="form-control tinymce" placeholder="Deskripsi Mobil"><?php echo $mobil->deskripsi_mobil ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group">
 		<label>Keyword mobil (untuk SEO Google)</label>
 		<textarea name="keywords" class="form-control" placeholder="Keywords Mobil"><?php echo $mobil->keywords ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
	<div class="form-group text-right">
	 	<button type="submit" name="submit" class="btn btn-success btn-lg">
	 		<i class="fa fa-save"></i> Simpan Mobil
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