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
echo form_open(base_url('admin/pesan/detail/'.$pesan->id_pesan),$attribut);
 ?>

<div class="row">
 <div class="col-md-6">
 	<div class="form-group form-group-lg">
 		<label>Nama Pengirim</label>
 		<input type="text" name="nama" class="form-control" placeholder="Nama Pengirim" value="<?php echo $pesan->nama ?>">
 	</div>
 </div>

 <div class="col-md-6">
 	<div class="form-group form-group-lg">
 		<label>Email</label>
 		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $pesan->email ?>">
 	</div>
 </div>

 <div class="col-md-12">
 	<div class="form-group form-group-lg">
 		<label>Email</label>
 		<textarea name="pesan" class="form-control" placeholder="Isi Pesan"><?php echo $pesan->pesan ?></textarea>
 	</div>
 </div>

 <div class="col-md-12">
	<div class="form-group text-right">
	 	<button type="button" name="kebali" class="btn btn-success btn-lg" onclick="history.back(-1)">
	 		<i class="fa fa-backward"></i> Kembali
	 	</button>
	</div>
	</div>
</div>

 <?php 
// Form close
 echo form_close();
  ?>