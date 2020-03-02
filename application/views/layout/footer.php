<?php 
// Site dari konfigurasi
$site_info  = $this->konfigurasi_model->listing(); 
?>

<footer class="footer">
      	<div class="container">
      	<div class="row">
      		<div class="col-md-6">
		        <p>&copy; <?php echo date('Y') ?> <?php echo $site_info->namaweb ?> - <?php echo $site_info->tagline ?>
		        </p>
        	</div>

        	<div class="col-md-4">
		        <p>
		        	<a href="<?php echo base_url('profil') ?>">Profil Kami</a> | 
		        	<a href="<?php echo base_url('kontak') ?>">Kontak</a>
		        </p>
        	</div>

        	<div class="col-md-2">
		        <p class="float-right"><a href="#">Back to top</a></p>
        	</div>
        </div>
        </div>
      </footer>

</body>
<!-- Load javascript jquery -->
<script src="<?php echo base_url() ?>assets/template/jquery-ui/external/jquery/jquery.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- popper js -->
<script src="<?php echo base_url() ?>assets/template/bootstrap/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<!-- Load javascript bootstrap -->
<script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js" type="text/javascript"></script>
<!-- holder js -->
<script src="<?php echo base_url() ?>assets/template/bootstrap/assets/js/vendor/holder.min.js" type="text/javascript"></script>
<!-- fontawesome js -->
<script src="<?php echo base_url() ?>assets/template/fontawesome/js/all.min.js" type="text/javascript"></script>
</html>