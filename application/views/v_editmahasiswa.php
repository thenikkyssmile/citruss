<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit mahasiswa</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/slate.bootstrap.min.css">

</head> 
<body>
    <div class="col-lg-6 col-lg-offset-3"><br>
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
                <legend class="text-primary">Edit</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                       <?php echo form_input(['name'=>'nim',
                                            'class'=>'form-control',
                                            'placeholder'=>'Nim',
                                            'value'=>set_value('nim', $data->nim)]); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                       <?php echo form_input(['name'=>'nama',
                                            'class'=>'form-control',
                                            'placeholder'=>'Nama',
                                            'value'=>set_value('nama', $data['nama'])]); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-10">
                            <?php
                                echo form_textarea(['name'=>'alamat',
                                                    'class'=>'form_control',
                                                    'value'=>set_value('alamat', $data->alamat)]);
                            ?>
                        </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label>
                    <div class="col-lg-10">
                        <select name="status" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
</body>
</html>

