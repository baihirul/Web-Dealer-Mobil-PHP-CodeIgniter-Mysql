<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>

<?php 
// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');

// Atribut
$attribut = 'class="alert alert-info"';
// Form open
echo form_open(base_url('admin/profile'));
 ?>
<div class="row">
<div class="col-md-6">
	<div class="form-group">
		<label>Nama User</label>
		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" required>			
	</div>	

	<div class="form-group">
		<label>Email User</label>
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>" required>			
	</div>

	<div class="form-group">
		<label>Level Hak Akses User</label>
		<input type="text" name="akses_level" class="form-control" value="<?php echo $user->akses_level ?>" readonly>		
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>" readonly>			
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>			
	</div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>
</div>
</div>
 <?php 
// Form close
 echo form_close();
  ?>