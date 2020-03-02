<?php 
// Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>


<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th width="20%">Nama</th>
  <th width="20%">Email</th>
  <th width="35%">Pesan</th>
  <th width="15%">Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($pesan as $pesan) { ?>

<tr>
  <td><?php echo $i ?></td>
  <td><?php echo $pesan->nama ?></td>
  <td><?php echo $pesan->email ?></td>
  <td><?php echo substr($pesan->pesan, 0,15) ?></td>
  <td>

    <a href="<?php echo base_url('admin/pesan/detail/'.$pesan->id_pesan) ?>" title="Detail Pesan" class="btn btn-warning btn-xs">
      <i class="fa fa-eye"></i> Detail
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