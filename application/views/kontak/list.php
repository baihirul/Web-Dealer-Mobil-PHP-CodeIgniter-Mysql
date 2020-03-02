<div class="album py-5 bg-light">
  <div class="container">

    <div class="row judul-artikel">
      <div class="col-md-12 text-center">
        <h1><?php echo $title ?></h1>
      </div>
    </div>

      <div class="row artikel">
        <div class="col-md-5">
        <p>
          <!-- Map dari Google Map -->
          <?php echo $konfigurasi->map ?>

        </p>
        </div>  

        <div class="col-md-7">
        <p>
          <strong><?php echo $konfigurasi->namaweb ?></strong>
          <br><?php echo nl2br($konfigurasi->alamat) ?>
          <br><i class="fa fa-phone"></i> <?php echo $konfigurasi->telepon ?>
          <br><i class="fa fa-envelope"></i> <?php echo $konfigurasi->email ?>
          <br><i class="fa fa-globe"></i> <?php echo $konfigurasi->website ?>
        </p>
        <hr>

        <p>Anda dapat menghubungi kami melalui formulir dibawah ini</p>

        <?php 
        // Notifikasi
        if($this->session->flashdata('sukses')){
          echo '<div class="alert alert-success">';
          echo $this->session->flashdata('sukses');
          echo '</div>';
        }
        
        // Error warning
        echo validation_errors('<div class="alert alert-warning">','</div>');

        // Atribut
        $attribut = 'class="alert alert-secondary"';

        // Form open
        echo form_open(base_url('kontak/pesan'),$attribut);
         ?>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" placeholder="Nama Anda" class="form-control" value="<?php echo set_value('nama') ?>" required>
            </div>
          </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Anda" class="form-control" value="<?php echo set_value('email') ?>" required>
              </div>
            </div>

          <div class="col-md-12">
              <div class="form-group">
                <label>Pesan</label>
                <textarea name="pesan" class="form-control" placeholder="Pesan Anda" value="<?php echo set_value('pesan') ?>" required></textarea>
              </div>

              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">
                  <i class="fa fa-paper-plane"></i> Kirim Pesan
                </button>

          </div>
          </div>

        </div>
        </form>

        <?php 
        // Form close
         echo form_close();
          ?>

        </div>
      </div>
  </div>
</div>