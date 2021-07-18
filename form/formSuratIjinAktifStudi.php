<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Formulir Ijin Aktif Studi</title>

        <link rel="stylesheet" href="../css/mahasiswaAktif.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user.css">
    </head>

    <body>
        <br>
        <br>
        <div class="container">
            <form class="well form-horizontal" action="../secondView/secondViewIjinAktif.php" method="post"  id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <h3>Formulir Ijin Aktif Studi</h3>
                    <br>
                    

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="nama" placeholder="Nama Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="nrp" placeholder="NRP Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" placeholder="Alamat Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Pengajuan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tanggal" class="form-control"  type="date">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Semester</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="radio" name="semester" value="ganjil" />GANJIL
                                <input type="radio" name="semester" value="genap" />GENAP
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun Akademik</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tahun" placeholder="Tahun Akademik" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" name="simpan">Simpan<span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</body>

</html>
