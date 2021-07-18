<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
if(isset($_POST['submit'])){
$judul_artikel = filter_input(INPUT_POST, "judul", FILTER_SANITIZE_SPECIAL_CHARS);
$tgl_artikel = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
$isi_artikel=$_POST['isi'];
addPosting($judul_artikel, $isi_artikel, $tgl_artikel);
header("location:historyposting.php?navito=user");
}

?>
<script src="../tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<head>

</head>

<br />
<br />
<br />
<br />
<br />
<div class="inner contact">
    <!-- Form Area -->
    <div class="contact-form">
        <!-- Form -->
        <form id="contact-us" method="post" action="">
            <!-- Left Inputs -->
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                <!-- judul -->
                Judul Berita :
                <input type="text" name="judul" height="100" required="required" placeholder="Judul Berita" size="70"/>
            </div>
            <br>
            <div data-wow-delay=".5s">
                <!-- judul -->
                Tanggal Berita :
                <input type="date" name="tanggal" required="required"/>
            </div>
            <br>
            <br>
            <!-- Right Inputs -->
            <div  data-wow-delay=".5s">
                <!-- Message -->
                Isi beritas :
                <textarea class="tinymce" name="isi" id="isi"></textarea>
            </div><!-- End Right Inputs -->

<!--            upload gambar-->
           <!-- <form enctype="multipart/form-data" method="post" action="proses_upload.php">
                <table align="center" border="0">
                    <tr>
                        <td>Silahkan Tekan Tombol Browse Untuk mencari file yang ingin diupload</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="file" name="adiputra"></td>
                        <td></td>
                    </tr>
                </table>
            </form>-->
                <br>
                <br>
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <input type="submit" name="submit" value="Tambah">
                </div><!-- End Bottom Submit -->
                    <!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
        </form>


    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->


