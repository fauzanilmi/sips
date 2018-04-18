<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPS</title>
    
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='container' style='margin-top: 100px;'>
        <div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6'>
                <p style="color:red;margin-bottom: 0px;" align="center"><font size="6"><b>Sistem Informasi Pengarsipan Surat</font></b></p>
                <p style="color:grey;" align="center"><b>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Samarinda</b></p>
                <hr size="12px">
                <p align="center" style="margin-bottom: 30px;"><img src="https://upload.wikimedia.org/wikipedia/id/3/38/Logo_Kota_Samarinda.png" alt="Dinas Samarinda" width="200" height="206"></p>
                <h1></h1>
            </div>
            <div class='col-md-3'></div>
        <div class='col-md-4'></div>
            <div class='col-md-4'>
                <div class='panel'>
                <div class='panel panel-default'>
                <div class="panel panel-heading" style="margin-bottom: 0px;"><h4>Sign In</h4></div>
                    <div class='panel-body'>
                        <!-- validation message for a successful login -->
                        <?php if ($this->session->flashdata('error')) {?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php  } ?>
                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Login/loginUser') ?>

                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                        

                    </div>
                    <div class="panel panel-footer" style="margin-bottom: 0px;">
                    <p align = "right"><button type="submit" class="btn btn-primary">Sign In</button></p>
                    </div>
                    <?php echo form_close() ?>
                </div>
                </div>
            </div>
            <div class='col-md-4'></div>
            
        </div>

    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
