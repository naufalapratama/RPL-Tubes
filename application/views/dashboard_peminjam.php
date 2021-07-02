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
    <div class="article-clean" id="move">
        <div class="container">
            <div class="row" style="margin-top: 55px;">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <?php echo form_open('Peminjam/caribuku') ?>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                        <input class="form-control" type="text" placeholder="Search Buku" name="keyword">
                        <div class="input-group-append"><button class="btn btn-primary" type="submit">Go</button></div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    foreach ($buku as $b) {
        echo ('<div data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center"><img src="' . base_url('uploads/') . $b->photo . '" style="max-width: 350px;padding-top: 15px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;"></div>
                <div class="col-md-8 text-center" style="padding-bottom: 15px;">
                    <h1 class="text-center border rounded" style="background-color: #e44242;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">' . $b->judul_buku . '</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa fa-user" style="font-size: 30px;"></i>
                            <p class="text-center" style="margin-bottom: 0px;">' . $b->nama_pengarang . '</p>
                        </div>
                        <div class="col-md-6">
                            <i class="fa fa-users" style="font-size: 30px;"></i>
                            <p class="text-center" style="margin-bottom: 0px;">' . $b->penerbit . '</p>
                        </div>
                    </div>
                    <i class="fa fa-book" style="font-size: 30px;"></i>
                    <p class="text-center" style="margin-bottom: 0px;">' . substr($b->deskripsi, 0, 600) . '.....<br><br></p>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);margin-bottom: 0px;"><a class="btn btn-primary text-left" role="button" style="background-color: #e44242;" href="' . base_url('Peminjam/inputpesanan/') . $b->id_buku . '">ORDER</a></h1>
                </div>
            </div>
        </div>
    </div>');
    }
    ?>
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