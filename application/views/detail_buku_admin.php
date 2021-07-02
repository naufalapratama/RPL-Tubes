<!DOCTYPE html>
<html>

<title>$data</title>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- custom style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

    <style>
        .nav-link:hover{
            border-radius: 10px;
            background-color: #ffff;
            color: #e44242!important;
        }

        .move-top {
            position: relative;
        }

        a.move-top {
            text-align: center;
            position: fixed;
            right: 10px;
            bottom: -5px;
        }

        a.move-top span {
            color: #fafafa;
            width: 36px;
            height: 36px;
            border: transparent;
            line-height: 2em;
            background: #356BF6;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -o-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
        }
    </style>
</head>

<style>

</style>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #e44242;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Admin') ?>" style="color: #ffffff; cursor: pointer;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('Admin/tambahbuku') ?>" style="color: #ffffff;">Input Buku</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('Admin/datatransaksi') ?>" style="color: #ffffff;">History Transaction</a></li>
                    <li class="nav-item" role="presentation" style="margin-top: 5px;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top: 8px;padding-right: 16px;padding-bottom: 8px;padding-left: 16px;color: #e44242;background-color: #ffffff;border-radius: 10PX;"><strong><?= $this->session->userdata('username'); ?></strong></a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="<?= base_url('Admin/profileA') ?>">Profile</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('Main/logout'); ?>">Logout&nbsp;&nbsp;<i class="icon-logout"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="article-clean" id="move">
        <div class="container">
            <div class="row" style="margin-top: 55px;">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
        <div class="container" style="padding-bottom: 25%;">
            <div class="row">
                <div class="col-md-4"><img src="<?= base_url() ?>uploads/<?= $buku['photo'] ?>" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8">
                    <h1 class="text-center border rounded" style="background-color: #e44242;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;"><?= $buku['judul_buku'] ?></h1>
                    <p class="text-justify" style="margin-bottom: 0px;"><strong>Deskripsi </strong><?= $buku['deskripsi'] ?><br></p>
                    <br>
                    <p class="text-justify" style="margin-bottom: 0px;"><strong>Jumlah buku tersedia </strong><?= $buku['stok'] ?><br></p>
                </div>
            </div>
        </div>
    <div class="footer-distributed" style="background-color: #e44242;padding-top: 25px;padding-bottom: 25px;">
        <footer>
            <div class="container my-auto">
                <div class="row justify-content-center">
                    <div class="col-lg-3 item social">
                        <p style="color: rgb(255,255,255); font: Arial; height: 30px;">B BOOKS&copy; <?= date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- move top -->
        <div class="move-top text-right">
            <a href="#move" class="move-top">
                <span class="fa fa-chevron-up  mb-3" aria-hidden="true"></span>
            </a>
        </div>
        <!-- //move top -->
    </div>