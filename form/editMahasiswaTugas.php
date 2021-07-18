<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';


session_start();
$id=$_GET['id'];
$result = EditMhsTugas($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
  }
  $array1 = $array[0];
  

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
            <form class="well form-horizontal" action="./editTugas.php?id=<?php echo $id ?>" method="post"  id="contact_form">
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
                                <input name="tanggal" class="form-control" type="date" value="<?php echo date('Y-m-d', strtotime($array1['tanggal'])) ?>">

                            </div>
                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">NRP Pengaju Surat</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="nama" class="form-control"  type="text" value="<?php echo $array1['user_nrp']?>">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label" >Tugas Mata Kuliah & Kode Mata Kuliah</label> 
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                
                                <input name="kode" value="<?php echo $array1['kode_matakuliah']?>" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Surat Ditujukan Kepada Nama Bapak / Ibu</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
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
                        <label class="col-md-4 control-label">Alamat Lengkap Instansi / Perusahaan</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="alamat" value="<?php echo $array1['alamat_instansi']?>" class="form-control"  type="text">
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
                    <td><input type="text" name="nama1" value="<?php echo $array1['nama1']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp1" value="<?php echo $array1['nrp1']?>" size="40"/></td>
                    <!----- nama dan nrp 6---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama6" value="<?php echo $array1['nama6']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp6" value="<?php echo $array1['nrp6']?>" size="40"/></td>
                </tr>
                <!----- nama dan nrp 2---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama2" value="<?php echo $array1['nama2']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp2" value="<?php echo $array1['nrp2']?>" size="40"/></td>
                    
                    <!----- nama dan nrp 7---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama7" value="<?php echo $array1['nama7']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp7" value="<?php echo $array1['nrp7']?>" size="40"/></td>
                </tr>
                <!----- nama dan nrp 3---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama3" value="<?php echo $array1['nama3']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp3" value="<?php echo $array1['nrp3']?>" size="40"/></td>
                    <!----- nama dan nrp 8---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama8" value="<?php echo $array1['nama8']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp8" value="<?php echo $array1['nrp8']?>" size="40"/></td>
                </tr>
                <!----- nama dan nrp 4---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama4" value="<?php echo $array1['nama4']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp4" value="<?php echo $array1['nrp4']?>" size="40"/></td>
                    <!----- nama dan nrp 9---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama9" value="<?php echo $array1['nama9']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp9" value="<?php echo $array1['nrp9']?>" size="40"/></td>
                </tr>
                <!----- nama dan nrp 5---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama5" value="<?php echo $array1['nama5']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp5" value="<?php echo $array1['nrp5']?>" size="40"/></td>
                    <!----- nama dan nrp 10---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :    
                    </td>
                    <td><input type="text" name="nama10" value="<?php echo $array1['nama10']?>" size="40"/>
                    <br>
                    <input type="text" width="1000" name="nrp10" value="<?php echo $array1['nrp10']?>" size="40"/></td>
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
