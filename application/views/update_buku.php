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
        .nav-link:hover {
            border-radius: 10px;
            background-color: #ffff;
            color: #e44242 !important;
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

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #e44242;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Admin') ?>" style="color: #ffffff;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
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
    <div class="contact-clean">
        <form method="post" action="<?= base_url('Admin/updatebuku') ?>" enctype="multipart/form-data" style="width: 900px;max-width: 900px;margin-top: 40px;">
            <?= form_hidden($buku['id_buku']); ?>
            <?= form_hidden($buku['photo']); ?>
            <h2 class="text-center">Update Buku</h2>
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group">
                <?php if ($buku['photo'] != NULL) { ?>
                    <img src="<?= base_url('uploads/' . $buku['photo']) ?>" width="200" height="200">
                <?php } ?>
                <input class="form-control" type="hidden" name="photo" id="photo" placeholder="Photo" value="<?= $buku['photo'] ?>"></input>
            </div>
            <p>Judul Buku</p>
            <div class="form-group"><input class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" value="<?= $buku['judul_buku'] ?>"></div>
            <p>Nama Pengarang</p>
            <div class="form-group"><input class="form-control" name="nama_pengarang" id="nama_pengarang" placeholder="Nama Pengarang" value="<?= $buku['nama_pengarang'] ?>"></input></div>
            <p>Penerbit</p>
            <div class=" form-group"><input class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" value="<?= $buku['penerbit'] ?>"></input></div>
            <p>Deskripsi</p>
            <div class=" form-group"><input class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi/Sinopsis Buku" value="<?= $buku['deskripsi'] ?>"></input></div>
            <p>Kategori</p>
            <div class="form-group">
                <select name="id_kategori" id="id_kategori" class="form-control">
                    <option value="<?php echo $buku['id_kategori'] ?>"><?php echo $buku['kategori'] ?></option>
                    <?php
                    foreach ($kategori->result() as $k) {
                        echo '<option value=' . $k->id_kategori . '>' . $k->kategori . '</option>';
                    }
                    ?>
                </select>
            </div>
            <p>Jumlah Stok Buku</p>
            <div class=" form-group"><input class="form-control" name="stok" id="stok" placeholder="Stok" value="<?= $buku['stok'] ?>"></input></div>
            <p>Password</p>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Ketik password anda"></div>
            <button type="submit" class="btn btn-primary" style="margin-left: 40%;">Update</button>
        </form>
    </div>
    <div class="footer-clean" style="background-color: #e44242;padding-top: 25px;padding-bottom: 25px;">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 item social">
                        <p style="color: rgb(255,255,255); font: Arial;">B BOOKS&copy; <?= date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- move top -->
    <div class="move-top text-right">
        <a href="#move" class="move-top">
            <span class="fa fa-chevron-up  mb-3" aria-hidden="true"></span>
        </a>
    </div>
    <!-- //move top -->
    </div>