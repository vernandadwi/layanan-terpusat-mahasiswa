<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';


?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Form Mahasiswa Aktif</title>

        <link rel="stylesheet" href="../css/mahasiswaAktif.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user.css">
    </head>


    <body>
        <br>
        <br>
        <div class="container">
            <form class="well form-horizontal" action="../secondView/secondViewMahasiswaAktif.php" method="post"  id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <h3>Form Pengajuan Mahasiswa Aktif Untuk Keperluan KP, STA, TA, Tunjangan</h3>
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
                        <label class="col-md-4 control-label" >Nama Lengkap Mahasiswa</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="nama" placeholder="Nama Mahasiswa" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP Mahasiswa</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="nrp" placeholder="NRP Mahasiswa" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Semester</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="radio" name="semester" value="Ganjil" />GANJIL
                                <input type="radio" name="semester" value="Genap" />GENAP
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun Ajaran</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="tahun_ajaran" placeholder="Tahun Ajaran Mahasiswa" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Lengkap Mahasiswa</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" placeholder="Alamat" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">No.Tlp / HP Mahasiswa</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="telpon" placeholder="No Telepon" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Surat Ditujukan Kepada Nama Bapak / Ibu</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="ditujukan" placeholder="Ditujukan Kepada" class="form-control"  type="text">
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
                        <label class="col-md-4 control-label">Alamat Instansi / Perusahaan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat_instansi" placeholder="Alamat Instansi" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Untuk Keperluan Pengajuan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <br>
                                <br>
                                <input type="radio" name="keperluan" value="Kerja Praktek" class="keperluan"/> Observasi KP / Magang KP
                                <br>
                                <input type="radio" name="keperluan" value="Seminar Tugas Akhir" class="keperluan"/> Observasi STA / Magang STA
                                <br>
                                <input type="radio" name="keperluan" value="Tugas Akhir" class="keperluan"/> Observasi TA / Magang TA
                                <br>
                                <input type="radio" name="keperluan" value="Tunjangan" class="keperluan"/> Tunjangan
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div id="form2" style="display:none">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Lengkap OrangTua</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="nama_ortu" placeholder="Nama OrangTua" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">NIK / NIP (Nomor Induk Kepegawaian)</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="nik" placeholder="NIK / NIP OrangTua" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Lengkap OrangTua</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="alamat_ortu" placeholder="Alamat OrangTua" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Kota</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="kota" placeholder="Kota Anda" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Provinsi</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="provinsi" placeholder="Provinsi Anda" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>



                    <!-- tambahkan jquery-->
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function () {
                            $(":radio.keperluan").click(function () {
                                $("#form2").hide()
                                if ($(this).val() == "Tunjangan") {
                                    $("#form2").show();
                                }
                            });
                        });
                    </script>



                    <!-- Button simpan -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" name="simpan">SIMPAN <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</body>

</html>
