<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESPEKA</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">ESPEKA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php if(!empty($pengguna)){ ?>
      <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li><a href="<?php echo base_url();?>pages/nilai">Nilai</a></li>
      <li><a href="<?php echo base_url();?>pages/kriteria">Kriteria</a></li>
      <li><a href="<?php echo base_url();?>pages/karyawan">Karyawan</a></li>
      <li><a href="<?php echo base_url();?>pages/rangking">Rangking</a></li>
      <li><a href="<?php echo base_url();?>pages/laporan">Laporan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $pengguna->nama_lengkap; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <!-- <li><a href="<?php echo base_url();?>pages/profil">Profil</a></li> -->
        <li role="separator" class="divider"></li>
        <li><a href="<?php echo base_url();?>pages/logout">Logout</a></li>
        </ul>
      </li>
      </ul>
    <?php } ?>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  
    <div class="container">