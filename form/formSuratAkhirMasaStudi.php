<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Formulir Akhir Masa Studi</title>

        <link rel="stylesheet" href="../css/mahasiswaAktif.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user.css">
    </head>

    <body>
        <br>
        <br>
        <div class="container">
            <form class="well form-horizontal" action="../secondView/secondViewAkhirMasaStudi.php" method="post"  id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <h3>Formulir Akhir Masa Studi</h3>
                    <br>
                    

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Fakultas</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="fakultas" placeholder="Nama Fakultas" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jurusan/Prog.Studi</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="jurusan" placeholder="Nama Jurusan" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Program Pendidikan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="radio" name="progpen" value="diploma" />Diploma
                                <input type="radio" name="progpen" value="sarjana" />Sarjana
                                <input type="radio" name="progpen" value="keahlian" />Keahlian/Profesi
                                <input type="radio" name="progpen" value="magister" />Magister
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="nama" placeholder="Nama Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tempat Lahir</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tempat_lahir" placeholder="Tempat Lahir" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Lahir</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tanggal_lahir" class="form-control"  type="date">
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
                        <label class="col-md-4 control-label">Alamat Lengkap (Isi Setiap Kolom)</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" placeholder="Alamat Anda" class="form-control"  type="text">
                                <input name="kota" placeholder="Kota Anda" class="form-control"  type="text">
                                <input name="kode" placeholder="KodePos Anda" class="form-control"  type="text">
                                <input name="telp" placeholder="No Telp Anda" class="form-control"  type="text">
                                <input name="provinsi" placeholder="Provinsi Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="email" placeholder="Email Anda" class="form-control" type="text">
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
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alasan Mengundurkan Diri</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alasan" placeholder="Alasan Pengunduran Diri" class="form-control" type="text">
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
