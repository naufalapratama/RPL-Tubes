<!DOCTYPE html>
<html>

<title>$data</title>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- custom style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #e44242;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Admin') ?>" style="color: #ffffff;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('Admin/tambahbuku') ?>" style="color: #ffffff;">Input Buku</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_main/artikel') ?>" style="color: #ffffff;">Data Transaksi Peminjam</a></li>
                    <li class="nav-item" role="presentation" style="margin-top: 5px;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top: 8px;padding-right: 16px;padding-bottom: 8px;padding-left: 16px;color: #e44242;background-color: #ffffff;border-radius: 10PX;"><strong><?= $this->session->userdata('username_adm'); ?></strong></a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="<?= base_url('c_dokter/update') ?>">Profile</a>
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
            <h2 class="text-left">Update Buku</h2>
            <?= $this->session->flashdata('message'); ?>
            <p>Judul Buku</p>
            <div class="form-group"><input class="form-control" type="text" name="judul_buku" id="judul_buku" placeholder="Judul Buku" value="<?= $buku['judul_buku'] ?>"></div>
            <p>Nama Pengarang</p>
            <div class="form-group"><input class="form-control" name="nama_pengarang" id="nama_pengarang" placeholder="Nama Pengarang" value="<?= $buku['nama_pengarang'] ?>"></input></div>
            <p>Penerbit</p>
            <div class=" form-group"><input class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" value="<?= $buku['penerbit'] ?>"></input></div>
            <p>Deskripsi</p>
            <div class=" form-group"><input class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi/Sinopsis Buku" value="<?= $buku['deskripsi'] ?>"></input></div>
            <p>Password</p>
            <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Ketik password anda"></div>
            <div class="form-group text-center"><button class="btn btn-primary" type="submit" value="upload">Update</button></div>
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