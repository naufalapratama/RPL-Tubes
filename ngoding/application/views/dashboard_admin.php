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

    <div class="article-clean">
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
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                            <input class="form-control" type="text" placeholder="Search Buku">
                            <div class="input-group-append"><button class="btn btn-light" type="button">Go</button></div>
                        </div>
                    </form>
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
                    <h1 class="text-center border rounded" style="background-color: #e44242;color: rgb(255,255,255);margin-top: 15px;margin-bottom: 15px;">' . $b->judul_buku . '</h1><i class="fa fa-user" style="font-size: 45px;"></i>
                    <p class="text-center" style="margin-bottom: 0px;">' . $b->nama_pengarang . '</p><i class="fa fa-users" style="font-size: 45px;"></i>
                    <p class="text-center" style="margin-bottom: 0px;">' . $b->penerbit . '</p><i class="fa fa-book" style="font-size: 45px;"></i>
                    <p class="text-center" style="margin-bottom: 0px;">' . substr($b->deskripsi, 0, 600) . '.....<br><br></p>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);margin-bottom: 0px;"><a class="btn btn-primary text-left" role="button" style="background-color: #e44242;" href="' . base_url('Admin/detailbuku/') . $b->id_buku . '">Read MORE</a></h1>
                    <h1 class="text-center" style="background-color: #ffffff;color: rgb(255,255,255);margin-bottom: 0px;"><a class="btn btn-primary text-left" role="button" style="background-color: #e44242;" href="' . base_url('Admin/editbuku/') . $b->id_buku . '">Update Buku</a></h1>
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
</body>

</html>