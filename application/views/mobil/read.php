<div class="album py-5 bg-light">
        <div class="container">

        <div class="row judul-artikel">
        	<div class="col-md-12 text-center">
        		<h1><?php echo $title ?></h1>
        	</div>
        </div>

          <div class="row artikel">
            <div class="col-md-8">

            Oleh: <strong><?php echo $mobil->nama ?></strong> &emsp; Pada: <?php echo date('d-M-Y, H:i', strtotime($mobil->tanggal_post)) ?> WIB

            <p><br><img src="<?php echo base_url('assets/upload/image/'.$mobil->gambar) ?>" alt="<?php echo $mobil->nama_mobil ?>" class="img img-thumbnail img-responsive"></p>	
            
                <div class="row artikel-detail">

                    <div class="col-md-3">
                        <h6>Harga:</h6>
                        <i class="fa fa-money-bill-alt"></i> Rp. <?php echo number_format($mobil->harga,'0',',','.') ?>
                    </div>

                    <div class="col-md-3">
                        <h6>Tahun:</h6>
                        <i class="fa fa-calendar-alt"></i> <?php echo $mobil->tahun ?>
                    </div>

                    <div class="col-md-3">
                        <h6>Warna:</h6>
                        <i class="fa fa-palette"></i> <?php echo $mobil->warna ?>
                    </div>

                    <div class="col-md-3">
                        <h6>Transmisi:</h6>
                        <i class="fa fa-cogs"></i> <?php echo $mobil->transmisi ?>
                    </div>

                    <div class="col-md-3">
                        <h6>Bahan Bakar:</h6>
                        <i class="fa fa-gas-pump"></i> <?php echo $mobil->bahan_bakar ?>
                    </div>

                    <div class="col-md-3">
                        <h6>CC:</h6>
                        <i class="fa fa-car-side"></i> <?php echo number_format($mobil->cc,'0',',','.') ?> CC
                    </div>

                    <div class="col-md-3">
                        <h6>Masa STNK:</h6>
                        <i class="fa fa-hourglass-half"></i> <?php echo $mobil->masa_stnk ?>
                    </div>

                    <div class="col-md-3">
                        <h6>Kilometer:</h6>
                        <i class="fa fa-tachometer-alt"></i> <?php echo number_format($mobil->kilometer,'0',',','.') ?>
                    </div>

                    <div class="col-md-12 deskripsi">
                        <h6>Deskripsi:</h6>
                        <?php echo $mobil->deskripsi_mobil ?>
                    </div>

                    <div class="col-md-12">
                    <?php 
                    // Link contact
                    include('contact.php');
                     ?>
                     </div>

                </div>

            </div>

            <div class="col-md-4">
            	<aside>
	            	<h3>Mobil lainnya:</h3>
	            	<ul>
                        <?php foreach($listing as $listing) { ?>
	            		<li><a href="<?php echo base_url('mobil/read/'.$listing->slug_mobil) ?>">
                        <?php echo $listing->nama_mobil ?>         
                        </a></li>
                        <?php } ?>
	            	</ul>
	            </aside>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
