<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pemilihan Gubernur DKI</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      <li><a href="<?php echo base_url();?>pages/kandidat">Kandidat</a></li>
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