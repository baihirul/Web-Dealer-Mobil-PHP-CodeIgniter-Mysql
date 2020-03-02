<!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Berita</span>
              <span class="info-box-number"><?php echo count($berita) ?><small> berita</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-image"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Galeri</span>
              <span class="info-box-number"><?php echo count($galeri) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number"><?php echo count($user) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mobil</span>
              <span class="info-box-number"><?php echo count($mobil) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Gambar</th>
  <th>Judul</th>
  <th>Jenis</th>
  <th>Status</th>
  <th>Penulis</th>
  <th>Tanggal</th>
  <th width="12%">Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($berita as $berita) { ?>

<tr>
  <td><?php echo $i ?></td>
  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" width="60" class="img img-thumbnail"></td>
  <td><?php echo $berita->judul_berita ?></td>
  <td><?php echo $berita->jenis_berita ?></td>
  <td><?php echo $berita->status_berita ?></td>
  <td><?php echo $berita->nama ?></td>
  <td><?php echo $berita->tanggal_post ?></td>
  <td>
    
    <a href="<?php echo base_url('admin/berita/edit/'.$berita->id_berita) ?>" title="Edit Berita" class="btn btn-warning btn-xs">
      <i class="fa fa-edit"></i> Edit
    </a>
    

  </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>