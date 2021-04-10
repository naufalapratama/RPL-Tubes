<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #e44242;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Main') ?>" style="color: #ffffff;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="background-color: #ffffff;border-radius: 5px;"><a class="nav-link js-scroll-trigger" href="<?= base_url('') ?>" style="color: #e44242;height: 35px;">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                            </div>
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading m-4">Welcome!</h3>
                                <?= $this->session->flashdata('message'); ?>
                                <form method="post" action="<?= base_url('Main') ?>">
                                    <div class="form-label-group">
                                        <label for="username_adm">Username</label>
                                        <input type="text" id="username_adm" class="form-control" placeholder="Username" name="username_adm" required autofocus>
                                        <?= form_error('username_adm', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-label-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-label-group p-3">
                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>