<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>

 <p>
  <a href="<?php echo base_url('admin/kategori/tambah') ?>" title="Tambah Kategori Baru" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
 </p>

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Gambar</th>
  <th>Nama Kategori</th>
  <th>Penulis</th>
  <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori as $kategori) { ?>

<tr>
  <td><?php echo $i ?></td>
  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$kategori->gambar) ?>" width="60" class="img img-thumbnail"></td>
  <td><?php echo $kategori->nama_kategori ?></td>
  <td><?php echo $kategori->nama ?></td>
  <td>
    
    <a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" title="Edit Kategori" class="btn btn-warning btn-xs">
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