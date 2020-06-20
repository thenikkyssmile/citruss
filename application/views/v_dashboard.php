<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/datatables.min.css">
</head>
<body>

    <div class="container">
        <h1 align="center">Sebuah Tabel</h1><br>
        
        <a style="margin-bottom: 10px;" href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#AddModal">Tambah</a>
        <table id="datatable" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
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
                        <h1 align="center">Tambah</h1>
                    </div>
                    <div class="mocal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>NIM</label>
                                <input class="form-control" type="text" name="nim" placeholder="Masukkan nim" required="">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" style="resize:none;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-sm btn-danger" type="button" value="Batal" data-dismiss="modal">
                                <input class="btn btn-sm btn-success" type="submit" name="" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>selamat datang <?php echo anchor('C_login/keluar', 'keluar', 'attributes'); ?></h1>

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