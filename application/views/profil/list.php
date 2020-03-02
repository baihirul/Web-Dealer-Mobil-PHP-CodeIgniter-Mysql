<div class="album py-5 bg-light">
    <div class="container">

        <div class="row judul">
        	<div class="col-md-12 text-center">
        		<h1><?php echo $title ?></h1>
        	</div>
        </div>     
          <div class="row">

            <?php foreach($profil as $profil) { ?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top img-responsive" src="<?php echo base_url('assets/upload/image/thumbs/'.$profil->gambar) ?>" alt="<?php echo $profil->judul_berita ?>">

                <div class="card-body judul-berita">
	            	<h2><a href="<?php echo base_url('profil/read/'.$profil->slug_berita) ?>"><?php echo character_limiter($profil->judul_berita,45) ?></a></h2>

	              <p class="card-text berita"><?php echo strip_tags(character_limiter($profil->isi_berita,80)) ?></p>

	              <p class="text-right"><a href="<?php echo base_url('profil/read/'.$profil->slug_berita) ?>" class="btn btn-success btn-group-sm"><i class="fa fa-eye"></i> Detail...</a></p>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>

        <div class="container">
          <div class="row">

            <?php if(isset($paginasi) && $total > $limit) { ?>
            <div class="paginasi col-md-12 text-right">
              <p>Halaman: <?php echo $paginasi; ?></p>
            </div>
            <?php } ?>
          </div>
        </div>
               
    </div>
</div>