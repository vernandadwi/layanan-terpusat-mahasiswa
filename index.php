<?php
include_once '../layananTerpusat/util/utility.php';
include_once '../layananTerpusat/dbFunction/dbFunction.php';

session_start();
if (isset($_POST['aksi']) && isset($_POST['aksi']) == "Login") {
    $acc = $_POST['login-username'];
    $pass = $_POST['login-password'];
    $result = Login($acc, $pass);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nrp'] = $row['nrp'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['fakultas'] = $row['fakultas'];
        $_SESSION['role_idrole'] = $row['role_idrole'];
        $_SESSION['status'] = $row['status'];
          if($_SESSION['status']==-1){
          header("location:gantiPass.php");
        }else {
            header("location:./user/akses.php");
          }
    } else {
        ?>
        <script language="javascript">alert("Login Gagal");window.location.href = "index.php"</script>
        <?php
    }
}
?>

<link rel="stylesheet" href="css/firstView.css">
<link rel="stylesheet" href="css/header.css">

<html>
<header>
	<nav id="nav-bar">
            <li class="nav-logo"><img id="header-img" src="image/Signature Maranatha_H_Hitam.png"/></li>
	</nav>
</header>
<div class="login-box">
  <div class="col login-title">
    <h1>
      Selamat Datang Di Layanan Terpusat
      <br>
      FAKULTAS TEKNOLOGI INFORMASI
    </h1>

  </div>
  <div class="col login-form">
    <div class="avatar">
    </div>
    <form action="" method="POST">
      <label for="login" class="login">
        <input id="login" type="text" name ='login-username' id="login-username" placeholder="NRP / NIK" />
      </label>
      <label for="passwd" class="passwd">
        <input id="passwd" type="password" name='login-password' id="login-password" placeholder="Password Anda" />
      </label>
      <button class="button" type="submit" name="aksi">Sign In</button>
    </form>
    <div class="lost-passwd">
      <a href="#">Forgot your password?</a>
    </div>
      
      
  </div>
</div>
</html>
