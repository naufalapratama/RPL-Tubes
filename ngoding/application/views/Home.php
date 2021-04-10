<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <link href="<?= base_url(); ?>assets/img/icon.png" rel="icon">
    <!-- custom style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/style.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-8">
                <div class="row border-box">
                    <div class="col-sm-6 p-0">
                        <img src="<?= base_url(); ?>assets/img/pict.svg" weight="400" height="500" width="150% class=" img-fluid">
                    </div>
                    <div class="col-sm-6 p-0">
                        <div class="card">
                            <div class="card-header">
                                <img src="<?= base_url(); ?>assets/img/logo-yakes.png" height="80px" width="115px" class="img-fluid">
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('Auth/login') ?>">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control input-login" placeholder="NIP" id="nip" name="nip" value="<?= set_value('nip'); ?>">
                                        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" class="form-control input-login" placeholder="Password" id="password" name="password">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Login</button>
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