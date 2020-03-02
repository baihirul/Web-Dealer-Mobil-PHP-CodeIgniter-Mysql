<div class="album py-5 bg-light">
    <div class="container">

        <div class="row judul">
        	<div class="col-md-12 text-center">
        		<h1><?php echo $title ?></h1>
        	</div>
        </div>     
          <div class="row">

            <?php foreach($mobil as $mobil) { ?>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top img-responsive" src="<?php echo base_url('assets/upload/image/thumbs/'.$mobil->gambar) ?>" alt="<?php echo $mobil->nama_mobil ?>">

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