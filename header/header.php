<?php
include_once '../util/utility.php';
include_once '../dbFunction/dbFunction.php';
?>
<link rel="stylesheet" href="../css/header.css">

<body>
    <?php
    session_start();
    $role = $_SESSION['role_idrole'];
    $nama=$_SESSION['nama'];
    if ($role == 2) {
        echo '<header >
        <nav id="nav-bar">
            <li class="nav-logo"><img id="header-img" src="../image/Signature Maranatha_H_Hitam.png"/></li>
            <ul class="nav-menu">
                <li><a href="#boxes-title">Formulir Pengajuan</a></li>
                 
                <li class="dropdown">
                <a href="#">Edit<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-content">
                            <a href="../admin/historyposting.php">Edit Berita</a>
                        
                            <a href="../admin/pengajuanMasuk.php">Request Pengajuan</a>
                            
                            <a href="../admin/dataAdmin.php">Data Pengguna</a>
                        </li>                   
                    </ul>
                </li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>';
    } else if ($role == 1) {
        echo '<header>
        <nav id="nav-bar">
            <li class="nav-logo"><img id="header-img" src="../image/Signature Maranatha_H_Hitam.png"/></li>
            <ul class="nav-menu">
                <li><a href="#boxes-title">Formulir Pengajuan</a></li>
                <li><a href="../user/history.php" >History</a></li>  
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>';
    }
    ?>
</body>

