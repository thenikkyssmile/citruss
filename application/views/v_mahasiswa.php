<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/datatables.min.css">
    <style type="text/css" media="screen">
        th,td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 align="center">Datatable</h1><br>

    <?php if($pesan = $this->session->flashdata('pesan')): ?>
        <div class="form-group">
            <div class="col-md-12">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $pesan; ?>
                </div>
            </div>
        </div>
    <?php endif ?>

        <div class="row">
            <a onclick="return confirm('Are you Sure?')" href="<?php echo base_url('c_login/keluar') ?>" class="btn btn-sm btn-info" style="float: right;">Log Out</a>
        </div>

    <a style="margin-bottom: 10px;" href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddModal">Tambah</a>
    <table id="datatable" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr> 
        </thead>
        <?php 
            $no = 1;
            if ($data->num_rows() > 0) {
                foreach ($data->result() as $row){
        ?>
            <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nim; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <?php if ($row->status == "Aktif"): ?>
                        <td>
                            <span class="label label-success">
                                <?php echo $row->status; ?>
                            </span>
                        </td>
                    <?php else: ?>
                        <td>
                            <span class="label label-danger">
                                <?php echo $row->status; ?>
                            </span>
                        </td>
                    <?php endif ?>
                    <td>
                        <a href="<?php echo base_url("C_mahasiswa/EditMahasiswa/{$row->id}") ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
            </tr>
        <?php
                }
            }
        ?>
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
                    <form action="<?php echo base_url('C_mahasiswa/insertMahasiswa') ?>" method="post">
                        <div class="form-group">
                            <label>Nim</label>
                            <input class="form-control" type="text" name="nim" placeholder="Masukkan Nim" required="">
                        </div>
                        <div class="col-md-12">
                            <?php echo form_error('nim', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required="">
                        </div>
                        <div class="col-md-12">
                            <?php echo form_error('nama', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" cols="30" rows="10" style="resize:none;"></textarea>
                        </div>
                        <div class="col-md-12">
                            <?php echo form_error('alamat', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <?php echo form_error('status', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                          <input class="btn btn-sm btn-default" type="button" value="Batal" data-dismiss="modal">
                          <input class="btn btn-sm btn-primary" type="submit" value="Simpan">
                        </div>
                    </form>
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
