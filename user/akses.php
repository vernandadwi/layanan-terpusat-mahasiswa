<?php
include_once '../header/header.php';
include_once '../util/utility.php';
?>
<html lang="en" >

    <head>
        <title>Teknologi Informasi</title>
        <link rel="stylesheet" href="../css/user.css">
        <link rel="stylesheet" href="../css/posting.css">

    </head>

    <body>
        <br>
        <br>
        <br>
        <br>
        <section id="section-boxes" >
            <div  id="boxes-title" class="boxes-title">
                <h1  >Formulir Pengajuan</h1>
                <hr class="section-hr">
            </div>
            <!--Form Baris Pertama-->
            <div class="boxes-container">
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa Aktif
                        <br>
                        Untuk Keperluan (KP, STA, TA, Tunjangan)</h4>
                    <hr>
                    <button type="button" class="boxes-button" onclick="window.location.href = '../form/formMahasiswaAktif.php'">Open Formulir</button>
                </div>
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa
                        <br>
                        Untuk Keperluan Tugas Mata Kuliah</h4>
                    <hr>
                    <button type="button" class=" boxes-button" onclick="window.location.href = '../form/formMahasiswaTugas.php'">Open Formulir</button>
                </div>
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa
                        <br>
                        Untuk Keperluan Akhir Masa Studi (Pengunduran Diri)</h4>
                    <hr>
                    <button type="button" class=" boxes-button" onclick="window.location.href = '../form/formSuratAkhirMasaStudi.php'">Open Formulir</button>
                </div>
            </div>
            <!--Form Baris Kedua-->
            <div class="boxes-container">
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa
                        <br>
                        Untuk Keperluan Ijin Aktif Studi</h4>
                    <hr>
                    <button type="button" class=" boxes-button" onclick="window.location.href = '../form/formSuratIjinAktifStudi.php'">Open Formulir</button>
                </div>
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa
                        <br>
                        Untuk Permohonan Cuti Studi</h4>
                    <hr>
                    <button type="button" class=" boxes-button" onclick="window.location.href = '../form/formSuratPermohonanCuti.php'">Open Formulir</button>
                </div>
                <div class="boxes">
                    <h4 align="center">Form Pengajuan Mahasiswa
                        <br>
                        Untuk Hapus Nilai</h4>
                    <hr>
                    <button type="button" class=" boxes-button" onclick="window.location.href = '../form/formHapusNilai.php'">Open Formulir</button>
                </div>
            </div>
        </section>

        <br>
        <br>

        <section id="section-features">
            <div class="features-title">
                <h1 class="section-title">Informasi Seputar Tata Usaha FIT</h1>
                <hr class="section-hr">
            </div>
            <div class="features-container">
                <div class="separator"></div>
                <div class="features">

                <head>
                </head>
                    <!----Untuk Berita---->
                    <br>
                    <?php
                    //buat dulu koneksi kedatabase
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpassword = '';
                    $dbname = 'kplayananterpusat';
                    $koneksi = mysql_connect($dbhost, $dbuser, $dbpassword);
                    mysql_select_db($dbname, $koneksi);

                    //buat query terlebih dahulu
                    $query = mysql_query("SELECT * FROM posting ORDER BY idposting DESC");
                    //cek apakah kita sudah memposting artikel atau belum
                    if (mysql_num_rows($query) == 0) {

                    //tampilkan pesan kalau artikel belum ada
                        echo 'maaf, belum ada artikel';
                    } else {
                    //buat pengulangan untuk menampilkan data artikel dengan
                    //menggunakan while dan definisikan kedalam variabel data
                        while ($data = mysql_fetch_array($query)) {

                    //kita akan menampilkan judul artikel
                            echo '<p><strong>' . $data['judul_artikel'] . '</strong></p>';

                    //tampilkan tanggal pembuatan artikel
                    //gunakan fungsi strtotime untuk merubah bentuk date
                    //kedalam bentuk string
                            echo '<p>Tanggal Berita : <em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';

                    //menampilkan isi artikel yang sudah kita buat
                            echo '<p>' . $data['isi_artikel'] . '</p>';
                            echo '<hr class="section-hr">';
                        }
                    }

                    //tutup koneksi database
                    mysql_close();
                    ?>
                
                </div>
                <div class="separator"></div>
            </div>
        </section>


        
        
        <div class="footer">
            <div class="attribution">
                <span class="attrib-icon">Universitas Kristen Maranatha
                </span>
                |
                <span class="attrib-menu">Fakultas Teknologi Informasi</span>
            </div>
        </div>
        <script  src="../js/user.js"></script>
    </body>
</html>
