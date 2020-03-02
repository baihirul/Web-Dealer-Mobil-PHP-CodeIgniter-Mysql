<?php 
// Site dari konfigurasi
$site_info  = $this->konfigurasi_model->listing(); 

// Menu berita
$menu_berita  = $this->konfigurasi_model->menu_berita();
$menu_kategori = $this->konfigurasi_model->menu_kategori();
$menu_merek = $this->konfigurasi_model->menu_merek();
$menu_profil = $this->konfigurasi_model->menu_profil();
 ?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="top">
      	<div class="container">
        <img style="max-width: 50px;" src="<?php echo base_url('assets/upload/image/thumbs/'.$site_info->logo) ?>">
        &emsp;
        <a class="navbar-brand" href="<?php echo base_url() ?>"><?php echo $site_info->namaweb ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

            <!-- Home -->
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- Berita -->
	           <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('berita') ?>">Berita</a>
            </li>
            
            <!-- Kategori -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <?php foreach($menu_kategori as $menu_kategori) { ?>
              <a class="dropdown-item" href="<?php echo base_url('mobil/kategori/'.$menu_kategori->slug_kategori) ?>"><?php echo $menu_kategori->nama_kategori ?></a>
              <?php } ?>

              <a class="dropdown-item" href="<?php echo base_url('mobil') ?>">Index Mobil</a>

            </div>
          </li>

          <!-- Merek -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Merek
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <?php foreach($menu_merek as $menu_merek) { ?>
              <a class="dropdown-item" href="<?php echo base_url('mobil/merek/'.$menu_merek->slug_merek) ?>"><?php echo $menu_merek->nama_merek ?></a>
              <?php } ?>

              <a class="dropdown-item" href="<?php echo base_url('mobil') ?>">Index Mobil</a>

            </div>
          </li>

            <!-- Profil -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <?php foreach($menu_profil as $menu_profil) { ?>
              <a class="dropdown-item" href="<?php echo base_url('profil/read/'.$menu_profil->slug_berita) ?>"><?php echo $menu_profil->judul_berita ?></a>
              <?php } ?>

            </div>
          </li>

            <!-- Kontak -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('kontak') ?>">Contact</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
