<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <?php $i=1; foreach($slider as $slider) { ?>

          <div class="carousel-item <?php if($i==1) { echo 'active'; } ?>">
            <img class="first-slide" src="<?php echo base_url('assets/upload/image/'.$slider->gambar) ?>" alt="<?php echo $slider->judul_galeri ?>">
            <div class="container">
              <div class="carousel-caption col-md-6 text-left">

                <h1><?php echo $slider->judul_galeri ?></h1>

                <p><?php echo nl2br($slider->isi_galeri) ?></p>
                <p><a class="btn btn-lg btn-primary" href="<?php echo $slider->website ?>" role="button">Lihat Mobil</a></p>
              </div>
            </div>
          </div>

          <?php $i++; } ?>
          
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </main>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">

          <?php foreach($kategori as $kategori) { ?>

          <div class="col-lg-3">
            <img class="rounded-circle" src="<?php echo base_url('assets/upload/image/thumbs/'.$kategori->gambar) ?>" alt="<?php echo $kategori->nama_kategori ?>" width="160" height="160">

            <h2><?php echo $kategori->nama_kategori ?></h2>
            <p><?php echo character_limiter($kategori->deskripsi_kategori,70) ?></p>
            <p><a class="btn btn-primary" href="<?php echo base_url('mobil/kategori/'.$kategori->slug_kategori) ?>" role="button">
            	<i class="fa fa-forward"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-3 -->

          <?php } ?>

        </div><!-- /.row -->
</div>

<!-- tampilan album -->
<div class="album py-5 bg-light">
        <div class="container">

        <div class="row judul">
        	<div class="col-md-12 text-center">
        		<h1>Terbaru</h1>
        	</div>
        </div>

          <div class="row">

            <?php foreach($mobil as $mobil) { ?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">

                <img class="card-img-top img-responsive" src="<?php echo base_url('assets/upload/image/thumbs/'.$mobil->gambar) ?>" alt="Card image cap">

                <div class="card-body card-mobil">

	            	<h2><a href="<?php echo base_url('mobil/read/'.$mobil->slug_mobil) ?>"><?php echo character_limiter($mobil->nama_mobil,30) ?></a></h2>

	              <p class="card-text mobil">
                  <i class="fa fa-money-bill-alt"></i> Rp. <?php echo number_format($mobil->harga,'0',',','.') ?>
                  <br><i class="fa fa-calendar-alt"></i>&nbsp; <?php echo $mobil->tahun ?>
                  <br><i class="fa fa-tachometer-alt"></i> <?php echo number_format($mobil->kilometer,'0',',','.') ?> KM
                </p>

	              <p class="text-right"><a href="<?php echo base_url('mobil/read/'.$mobil->slug_mobil) ?>" class="btn btn-success btn-group-sm"><i class="fa fa-eye"></i> Detail...</a></p>
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
