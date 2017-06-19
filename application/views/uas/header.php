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

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('uas/css/clean-blog.css') ?>">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('uas/vendor/font-awesome/css/font-awesome.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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
                <a class="navbar-brand" href="<?php echo base_url('ekstra/home') ?>">Ekstrakulikuler</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('ekstra/home') ?>">Home</a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Olahraga<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('ekstra/basket') ?>">Basket</a></li>
                        <li><a href="<?php echo base_url('ekstra/futsal') ?>">Futsal</a></li>
                        <li><a href="<?php echo base_url('ekstra/karate') ?>">Karate</a></li>
                        <li><a href="<?php echo base_url('ekstra/volly') ?>">Volly</a></li>
                    </ul>
                    </li>

                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Seni<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('ekstra/band') ?>">Band</a></li>
                        <li><a href="<?php echo base_url('ekstra/drumband') ?>">DrumBand</a></li>
                        <li><a href="<?php echo base_url('ekstra/padus') ?>">Padus</a></li>
                    </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('kegiatan') ?>">Kegiatan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ekstra/daftar') ?>">Daftar Ekstrakulikuler</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ekstra/tampil') ?>">Data Ekstrakulikuler</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cetak')?>">Cetak</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ('login/register')?>">Register</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ('login')?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    