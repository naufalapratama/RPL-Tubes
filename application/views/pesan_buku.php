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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Peminjam') ?>" style="color: #ffffff;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="<?= base_url('Peminjam/datatransaksi') ?>" style="color: #ffffff;">History Transaction</a></li>
                    <li class="nav-item" role="presentation" style="margin-top: 5px;">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding-top: 8px;padding-right: 16px;padding-bottom: 8px;padding-left: 16px;color: #e44242;background-color: #ffffff;border-radius: 10PX;"><strong><?= $this->session->userdata('username'); ?></strong></a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item nav-link" role="presentation" href="<?= base_url('Peminjam/profileP') ?>">Profile</a>
                                <a class="dropdown-item nav-link" role="presentation" href="<?= base_url('Main/logout'); ?>">Logout&nbsp;&nbsp;<i class="icon-logout"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contact-clean" id="move">
        <form method="post" action="<?= base_url("Peminjam/inputpesanan/") . $pesan['id_buku'] ?>" style="width: 900px;max-width: 900px;margin-top: 40px;">
            <h2 class="text-center">Order</h2>
            <hr class="aboutunderbrown">
            <p>Name</p>
            <div class="form-group"><input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Anda" value="<?= $this->session->userdata('nama'); ?>" readonly></div>
            <p>Email</p>
            <div class="form-group"><input class="form-control" type="text" name="email" id="email" placeholder="Alamat Email Anda" value="<?= $this->session->userdata('email'); ?>" readonly></div>
            <p>Judul Buku</p>
            <div class="form-group"><input class="form-control" type="text" name="judul_buku" id="judul_buku" value="<?= $pesan['judul_buku'] ?>" readonly></div>
            <p>Tanggal Peminjaman</p>
            <div class="form-group"><input class="form-control" type="date" name="tanggal_peminjaman" id="tanggal_peminjaman"></div>
            <p>Tanggal Pengembalian</p>
            <div class="form-group"><input class="form-control" type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"></div>
            <p>Jumlah Buku</p>
            <div class="form-group"><input class="form-control" type="number" max="1000" name="jumlah_buku" id="jumlah_buku"></input></div>
            <div class="form-group text-center"><button class="btn btn-primary" type="submit">Order</button></div>
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
</body>