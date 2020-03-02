<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Kontak">
	<i class="fa fa-phone"></i> Lihat Nomor Telepon
</button>

<div class="modal modal-primary fade" id="Kontak">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Menghubungi kami</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <strong>
          <i class="fa fa-phone"></i>&nbsp; <?php echo $kontak->telepon ?>
          <br><i class="fab fa-whatsapp"></i>&nbsp; <?php echo $kontak->whatsapp ?>
          <br><i class="fa fa-envelope"></i>&nbsp; <?php echo $kontak->email ?>
        </strong>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

        <a href="<?php echo base_url('kontak') ?>" class="btn btn-outline pull-right"><i class="fa fa-map-marked-alt"></i> Lihat Alamat</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->