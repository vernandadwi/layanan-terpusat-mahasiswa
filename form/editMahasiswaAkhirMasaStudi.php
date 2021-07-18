<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
//include '../header/headerForm.php';
session_start();
$id=$_GET['id'];
$result = EditMhsAkhirMasaStudi($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
  }
  $array1 = $array[0];

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
            <form class="well form-horizontal" action="./editAkhirMasaStudi.php?id=<?php echo $id ?>" method="post"  id="contact_form">
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
                                <input name="fakultas" placeholder="Nama Fakultas" class="form-control"  type="text" value="<?php echo $array1['fakultas']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jurusan/Prog.Studi</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="jurusan" placeholder="Nama Jurusan" class="form-control"  type="text" value="<?php echo $array1['program_studi']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Program Pendidikan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="radio" name="progpen" value="diploma" <?php echo ($array1['progpen']=='diploma')?'checked':'' ?>/>Diploma
                                <input type="radio" name="progpen" value="sarjana" <?php echo ($array1['progpen']=='sarjana')?'checked':'' ?>/>Sarjana
                                <input type="radio" name="progpen" value="keahlian" <?php echo ($array1['progpen']=='keahlian')?'checked':'' ?>/>Keahlian/Profesi
                                <input type="radio" name="progpen" value="magister" <?php echo ($array1['progpen']=='magister')?'checked':'' ?>/>Magister
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
                                <input name="nama" placeholder="Nama Anda" class="form-control" type="text" value="<?php echo $array1['nama']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tempat Lahir</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tempat_lahir" placeholder="Tempat Lahir" class="form-control"  type="text" value="<?php echo $array1['tempat_lahir']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Lahir</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="tanggal_lahir" class="form-control"  type="date" value="<?php echo $array1['tanggal_lahir']?>">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="nrp" placeholder="NRP Anda" class="form-control"  type="text" value="<?php echo $array1['user_nrp']?>">
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
