<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Citruss ::</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/slate.bootstrap.min.css">
</head>
<body style="background-color:#222;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top:10%;">
                    <div class="panel-heading">
                        <h1 align="center">Silakan Login</h1>
                    </div>
                    <div class="panel-body" style="background-color:#ccc;">
                        <form action="<?php echo base_url('C_login/user_login') ?>" method="post" class="form-horizontal">
                          <?php if($error = $this->session->flashdata('pesan')): ?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="alert alert-dismissible alert-primary">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php echo $error; ?>
                                    </div>
                                </div>
                            </div>
                          <?php endif ?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="username" value="<?php echo set_value('username') ?>" placeholder="Masukkan Username">
                                </div>
                                <div class="col-md-12">
                                    <?php echo form_error('username','<span class="text-danger">','</span>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password">
                                </div>
                                <div class="col-md-12">
                                    <?php echo form_error('password','<span class="text-danger">','</span>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="btn btn-primary btn-block" type="submit" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

</body>
</html>