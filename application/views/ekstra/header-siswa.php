<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ekstrakulikuler</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/clean/vendor/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/clean/css/clean-blog.css') ?>">
</head>
<body>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>
<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<a class="navbar-brand" href="#">Ekstrakulikuler</a>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="<?= base_url() ?>">Home</a>
			</li>
			<li>
				<a href="<?= base_url('ekstra/pilih') ?>">Pilih Ekskul</a>
			</li>
			<li>
				<a href="<?= base_url('ekstra/anda') ?>">Ekskul Anda</a>
			</li>
			<li>
				<a href="<?= base_url('kegiatan') ?>">Kegiatan Ekskul</a>
			</li>
			<li>
				<a href="<?= base_url('login/logout') ?>">Keluar</a>
			</li>
		</ul>
	</div>


</nav>