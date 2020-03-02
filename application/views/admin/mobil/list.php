<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>

 <p>
  <a href="<?php echo base_url('admin/mobil/tambah') ?>" title="Tambah Mobil Baru" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
 </p>

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Gambar</th>
  <th>Nama Mobil</th>
  <th>Kategori</th>
  <th>Merek</th>
  <th>Status</th>
  <th>Penulis</th>
  <th>Tanggal</th>
  <th width="12%">Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($mobil as $mobil) { ?>

<tr>
  <td><?php echo $i ?></td>
  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$mobil->gambar) ?>" width="60" class="img img-thumbnail"></td>
  <td><?php echo $mobil->nama_mobil ?></td>
  <td><?php echo $mobil->nama_kategori ?></td>
  <td><?php echo $mobil->nama_merek ?></td>
  <td><?php echo $mobil->status_mobil ?></td>
  <td><?php echo $mobil->nama ?></td>
  <td><?php echo $mobil->tanggal_post ?></td>
  <td>
    
    <a href="<?php echo base_url('admin/mobil/edit/'.$mobil->id_mobil) ?>" title="Edit Mobil" class="btn btn-warning btn-xs">
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