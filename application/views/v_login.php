<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Citruss ::</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
</head>
<body style="background-color:#222;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="panel-heading panel panel-default" style="margin-top:10%;">
                        <h1 align="center">Silakan Login</h1>
                    </div>
                    <div class="panel-body" style="background-color:#ccc;">
                        <form action="" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="password" placeholder="Masukkan Password" required="">
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
</body>
</html>