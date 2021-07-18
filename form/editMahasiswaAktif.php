<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
session_start();
$id=$_GET['id'];
$result = EditMhsAktif($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
  }
  $array1 = $array[0];
  $nama = $array1['nama'];

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
            <form class="well form-horizontal" action="./editmhs.php?id=<?php echo $id ?>" method="post"  id="contact_form">
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
                                <input name="tanggal" class="form-control" type="date" value="<?php echo date('Y-m-d', strtotime($array1['tanggal'])) ?>">

                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" >Nama Lengkap Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="nama" class="form-control"  type="text" value="<?php echo $array1['nama']?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="nrp" value="<?php echo $array1['user_nrp']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Semester</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="radio" name="semester" value="Ganjil" <?php echo ($array1['Semester']=='Ganjil')?'checked':'' ?>>GANJIL
                                <input type="radio" name="semester" value="Genap" <?php echo ($array1['Semester']=='Genap')?'checked':'' ?>>GENAP
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun Ajaran</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="tahun_ajaran" value="<?php echo $array1['tahun_ajaran']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Lengkap Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" value="<?php echo $array1['alamat_mhs']?>" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">No.Tlp / HP Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="telpon" value="<?php echo $array1['no_hp']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Surat Ditujukan Kepada Nama Bapak / Ibu</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="ditujukan" value="<?php echo $array1['surat_ditujukan']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jabatan Bapak / Ibu Tersebut</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="jabatan" value="<?php echo $array1['jabatan']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Instansi / Perusahaan</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="instansi" value="<?php echo $array1['nama_instansi']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Instansi / Perusahaan</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat_instansi" value="<?php echo $array1['alamat_instansi']?>" class="form-control"  type="text">
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
                                <input type="radio" name="keperluan" value="Kerja Praktek" class="keperluan" <?php echo ($array1['keperluan']=='Kerja Praktek')?'checked':'' ?>/> Observasi KP / Magang KP
                                <br>
                                <input type="radio" name="keperluan" value="Seminar Tugas Akhir" class="keperluan" <?php echo ($array1['keperluan']=='Seminar Tugas Akhir')?'checked':'' ?>/> Observasi STA / Magang STA
                                <br>
                                <input type="radio" name="keperluan" value="Tugas Akhir" class="keperluan" <?php echo ($array1['keperluan']=='Tugas Akhir')?'checked':'' ?>/> Observasi TA / Magang TA
                                <br>
                                <input type="radio" name="keperluan" value="Tunjangan" class="keperluan" <?php echo ($array1['keperluan']=='Tunjangan')?'checked':'' ?>/> Tunjangan
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
                                    <input name="nama_ortu" value="<?php echo $array1['nama_ortu']?>" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">NIK / NIP (Nomor Induk Kepegawaian)</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="nik" value="<?php echo $array1['NIK']?>" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Lengkap OrangTua</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="alamat_ortu" value="<?php echo $array1['alamat']?>" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Kota</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="kota" value="<?php echo $array1['kota']?>" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Provinsi</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="provinsi" value="<?php echo $array1['provinsi']?>" class="form-control"  type="text">
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
