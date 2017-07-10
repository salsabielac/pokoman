<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ekskul</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/clean/vendor/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Ekskul Benerasn</a>
		<ul class="nav navbar-nav">
			<li class="active">
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