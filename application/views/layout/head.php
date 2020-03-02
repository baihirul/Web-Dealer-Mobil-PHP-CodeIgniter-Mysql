<?php 
// Site dari konfigurasi
$site_info	= $this->konfigurasi_model->listing();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<!-- Icon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/upload/image/thumbs/'.$site_info->icon) ?>">
	<!-- Description -->
	<meta name="description" content="<?php echo $deskripsi ?>">
	<!-- Keyword -->
	<meta name="keywords" content="<?php echo $title.', '.$keywords ?>">
	<!-- Author -->
	<meta name="author" content="<?php echo $title ?>">
	<!-- CSS Bootstrap 4-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/bootstrap.min.css">
	<!-- CSS buatan sendiri -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/style.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/template/fontawesome/css/all.css">
	<!-- Theme style AdminLTE -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
</head>
<body>
