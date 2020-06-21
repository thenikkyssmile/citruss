<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/datatables.min.css">
    
</head>
<body>
    <div class="container">
    <h1 align="center">Datatable</h1><br>
    <h1><?php echo anchor('C_login/keluar', 'keluar', 'attributes'); ?></h1>

    <a style="margin-bottom: 10px;" href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddModal">Tambah</a>
    <table id="datatable" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr> 
        </thead>
        <tbody>
            <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
            </tr>
        </tbody>
    </table>
    </div>
    
    <div id="AddModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 align="center">Tambah Data</h1>
                    </div>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/datatables.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').dataTable();
    });
</script>
