<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ekskul</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/clean/vendor/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Ekskul Beneran</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="<?= base_url('admin') ?>">Login Admin</a>
			</li>
			<li>
				<a href="<?= base_url('login') ?>">Login Siswa</a>
			</li>
		</ul>
	</div>
</nav>