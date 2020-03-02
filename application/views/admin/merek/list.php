<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>

 <p>
  <a href="<?php echo base_url('admin/merek/tambah') ?>" title="Tambah Merek Baru" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
 </p>

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Gambar</th>
  <th>Nama Merek</th>
  <th>Penulis</th>
  <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($merek as $merek) { ?>

<tr>
  <td><?php echo $i ?></td>
  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$merek->gambar) ?>" width="60" class="img img-thumbnail"></td>
  <td><?php echo $merek->nama_merek ?></td>
  <td><?php echo $merek->nama ?></td>
  <td>
    
    <a href="<?php echo base_url('admin/merek/edit/'.$merek->id_merek) ?>" title="Edit Merek" class="btn btn-warning btn-xs">
      <i class="fa fa-edit"></i> Edit
    </a>

    <?php 
    // Link delete
    include('delete.php');
     ?>

  </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>