<div class="album py-5 bg-light">
        <div class="container">

        <div class="row judul-artikel">
        	<div class="col-md-12 text-center">
        		<h1><?php echo $title ?></h1>
        	</div>
        </div>

          <div class="row artikel">
            <div class="col-md-8">

            Oleh: <strong><?php echo $profil->nama ?></strong> &emsp; Pada: <?php echo date('d-M-Y, H:i', strtotime($profil->tanggal_post)) ?> WIB

            <p><br><img src="<?php echo base_url('assets/upload/image/'.$profil->gambar) ?>" alt="<?php echo $profil->judul_berita ?>" class="img img-thumbnail img-responsive"></p>	
            
            <?php echo $profil->isi_berita ?>

            </div>

            <div class="col-md-4">
            	<aside>
	            	<h3>Berita lainnya:</h3>
	            	<ul>
                        <?php foreach($listing as $listing) { ?>
	            		<li><a href="<?php echo base_url('profil/read/'.$listing->slug_berita) ?>">
                        <?php echo $listing->judul_berita ?>         
                        </a></li>
                        <?php } ?>
	            	</ul>
	            </aside>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
