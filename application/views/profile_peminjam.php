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

<body class="bg-light">
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
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <?php foreach ($user as $u) { ?>
                        <div class="col-sm-4 rounded-left" style="background-color: #e44242;">
                            <div class="card-block text-center text-white">
                                <i class="fas fa-user-tie fa-7x mt-5"></i>
                                <h2 class="font-weight-bold mt-4"><?= $this->session->userdata('nama'); ?></h2>
                                <p><?= $this->session->userdata('role'); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white rounded-right">
                            <h3 class="mt-3 text-center"><strong>INFORMATION</strong></h3>
                            <hr class="badge-primary mt-0 w-25">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">NIM</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('nim'); ?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Program Studi</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('prodi'); ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Email</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('email'); ?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">No Telp</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('no_telp'); ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Tahun Angkatan</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('tahun_angkatan'); ?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Alamat</p>
                                    <h6 class="text-muted"><?= $this->session->userdata('alamat'); ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>