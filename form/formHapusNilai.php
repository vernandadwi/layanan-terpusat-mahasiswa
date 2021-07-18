<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Form Hapus Nilai</title>

        <link rel="stylesheet" href="../css/mahasiswaAktif.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/user.css">
    </head>


    <body>
        <br>
        <br>
        <div class="container">
            <form class="well form-horizontal" action="../secondView/secondViewHapusNilai.php" method="post"  id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <h3>Form Pengajuan Mahasiswa Hapus Nilai</h3>
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
                        <label class="col-md-4 control-label">NRP</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="nrp" placeholder="NRP Anda" class="form-control"  type="text">

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
                        <label class="col-md-4 control-label">Email Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="Email Anda" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">No.Tlp / HP Mahasiswa</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="telpon" placeholder="No Telpon" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <table  width="800" align="center" cellpadding = "10" >
                        <tr>
                            <td>No</td>
                            <td>Kode Matakuliah</td>
                            <td>Nama MataKuliah</td>
                            <td>Nilai</td>
                            <td>Semester</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>
                                <select name="Kode1">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td>
                                <select name="Nama1" position="center">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td><input name="nilai1" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                            <td><input name="semester1" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <select name="Kode2">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td>
                                <select name="Nama2" position="center">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td><input name="nilai2" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                            <td><input name="semester2" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <select name="Kode3">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td>
                                <select name="Nama3" position="center">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td><input name="nilai3" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                            <td><input name="semester3" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <select name="Kode4">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td>
                                <select name="Nama4" position="center">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td><input name="nilai4" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                            <td><input name="semester4" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <select name="Kode5">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td>
                                <select name="Nama5" position="center">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    $matkul = getAllMatkul();
                                    while ($qtabel = mysqli_fetch_array($matkul)) {
                                        echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                    }
                                    ?>
                                </select></td>
                            <td><input name="nilai5" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                            <td><input name="semester5" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>
                              <select name="Kode6">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td>
                              <select name="Nama6" position="center">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td><input name="nilai6" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                          <td><input name="semester6" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>
                              <select name="Kode7">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td>
                              <select name="Nama7" position="center">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td><input name="nilai7" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                          <td><input name="semester7" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>
                              <select name="Kode8">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td>
                              <select name="Nama8" position="center">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td><input name="nilai8" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                          <td><input name="semester8" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>
                              <select name="Kode9">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td>
                              <select name="Nama9" position="center">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td><input name="nilai9" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                          <td><input name="semester9" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                      </tr>
                      <tr>
                          <td>10</td>
                          <td>
                              <select name="Kode10">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['kode_Matkul'] . '">' . $qtabel['kode_Matkul'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td>
                              <select name="Nama10" position="center">
                                  <option value="" selected="selected">-</option>
                                  <?php
                                  $matkul = getAllMatkul();
                                  while ($qtabel = mysqli_fetch_array($matkul)) {
                                      echo '<option value="' . $qtabel['nama_MK'] . '">' . $qtabel['nama_MK'] . '</option>';
                                  }
                                  ?>
                              </select></td>
                          <td><input name="nilai10" placeholder="Masukkan Nilai Anda" class="form-control"  type="text"></td>
                          <td><input name="semester10" placeholder="Semester Anda Mengambil" class="form-control"  type="text"></td>
                      </tr>
                    </table>


                    <br>
                    <br>
                    <br>
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
