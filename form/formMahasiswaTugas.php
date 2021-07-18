<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';


?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Form Mahasiswa Pengajuan Tugas</title>
        
        
        <link rel="stylesheet" href="../css/mahasiswaAktif.css">
    </head>

    <body>
        <br>
        <br>
        <br>
        <div class="container">
            <form class="well form-horizontal" action="../secondView/secondViewMahasiswaTugas.php" method="post"  id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <h3>Form Pengajuan Mahasiswa Untuk Keperluan Tugas Mata Kuliah</h3>
                    <br>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Pengajuan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="tanggal" class="form-control"  type="date">

                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP Pengaju Surat</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="pengaju" placeholder="NRP Pengaju Surat" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label" >Tugas Mata Kuliah & Kode Mata Kuliah</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="nama" placeholder="Nama Mata Kuliah" class="form-control"  type="text">
                                <input name="kode" placeholder="Kode Mata Kuliah" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Surat Ditujukan Kepada Nama Bapak / Ibu</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="ditujukan" placeholder="Nama Surat Ditujukan" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jabatan Bapak / Ibu Tersebut</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="jabatan" placeholder="Jabatan Bapak / Ibu" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Instansi / Perusahaan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="instansi" placeholder="Nama Instansi" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Lengkap Instansi / Perusahaan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" placeholder="Alamat Instansi" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    
                    </br>
            <h1 align="center">Nama Dan NRP Anggota Kelompok</h1>
            <table  width="800" align="center" cellpadding = "10">

                <!----- nama dan nrp 1---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama1" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp1" size="40"/></td>
                    <!----- nama dan nrp 6---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama6" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp6" size="40"/></td>
                </tr>
                <!----- nama dan nrp 2---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama2" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp2" size="40"/></td>
                    
                    <!----- nama dan nrp 7---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama7" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp7" size="40"/></td>
                </tr>
                <!----- nama dan nrp 3---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama3" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp3" size="40"/></td>
                    <!----- nama dan nrp 8---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama8" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp8" size="40"/></td>
                </tr>
                <!----- nama dan nrp 4---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama4" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp4" size="40"/></td>
                    <!----- nama dan nrp 9---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama9" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp9" size="40"/></td>
                </tr>
                <!----- nama dan nrp 5---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama5" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp5" size="40"/></td>
                    <!----- nama dan nrp 10---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama10" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp10" size="40"/></td>
                </tr>               
            </table>
            
            
            
                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</body>

</html>
