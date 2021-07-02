<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/favicon3.ico" />
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" data-aos="fade" id="mainNav" style="background-color: #e44242;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="<?= base_url('Main') ?>" style="color: #ffffff;">B&nbsp;</i> Books</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6">
                <img src="assets/img/login.png" style="width: 70%; padding-top: 10%; margin-left: 25%;">
            </div>
            <div class="col-md-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container" style="padding-top: 20%; margin-right: 15%;">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading m-4" style="font-family: 'Open Sans', sans-serif; text-align: center;"><strong>Welcome!</strong></h3>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" role="button" href="<?= base_url('Main/login') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>