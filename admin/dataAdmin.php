<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
if (isset($_POST['ubah']))
    $nrp = $_POST['nrp'];
else
    $nrp = '';

if (isset($_POST['ubahOk'])) {
    $nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
    $fakultas = filter_input(INPUT_POST, "fakultas", FILTER_SANITIZE_SPECIAL_CHARS);
    $prodi = filter_input(INPUT_POST, "progstud", FILTER_SANITIZE_SPECIAL_CHARS);
    $progpend = filter_input(INPUT_POST, "progpend", FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpt_lahir = filter_input(INPUT_POST, "tempat_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $tgl_lahir = filter_input(INPUT_POST, "tanggal_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $nohp = filter_input(INPUT_POST, "no_hp", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $roleidRole = filter_input(INPUT_POST, "role_idRole", FILTER_SANITIZE_SPECIAL_CHARS);
    updateUser($nrp, $nama, $pass, $fakultas, $prodi, $progpend, $tmpt_lahir, $tgl_lahir, $alamat, $nohp, $email, $roleidRole);
    header("location:dataAdmin.php?navito=user");
} elseif (isset($_POST['aksi'])) {
    $nrp = filter_input(INPUT_POST, "nrp1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama = filter_input(INPUT_POST, "nama1", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pwd1", FILTER_SANITIZE_SPECIAL_CHARS);
    $fakultas = filter_input(INPUT_POST, "fakultas1", FILTER_SANITIZE_SPECIAL_CHARS);
    $prodi = filter_input(INPUT_POST, "progstud1", FILTER_SANITIZE_SPECIAL_CHARS);
    $progpend = filter_input(INPUT_POST, "progpen1", FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpt_lahir = filter_input(INPUT_POST, "tempat_lahir1", FILTER_SANITIZE_SPECIAL_CHARS);
    $tgl_lahir = filter_input(INPUT_POST, "tanggal_lahir1", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nohp = filter_input(INPUT_POST, "no_hp1", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email1", FILTER_SANITIZE_SPECIAL_CHARS);
    $roleidRole = filter_input(INPUT_POST, "id_role1", FILTER_SANITIZE_SPECIAL_CHARS);
    $status = -1;
    addUser($nrp, $nama, $pass, $fakultas, $prodi, $progpend, $tmpt_lahir, $tgl_lahir, $alamat, $nohp, $email, $status, $roleidRole);
    header("location:dataAdmin.php?navito=user");
}

$del = filter_input(INPUT_GET, "delete");
if ($del != '' && !empty($del)) {
    deleteUser($del);
}
?>

<head>
    <meta charset="UTF-8">
    <title>Data Admin</title>
    <link rel="stylesheet" href="../css/addUser.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<br>
<br>
<br>
<br>
<br>
<table class="table">
    <thead>
    <th>NRP</th>
    <th>Nama</th>
    <th>Password</th>
    <th>Fakultas</th>
    <th>Program Studi</th>
    <th>Program Pendidikan</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Email</th>
    <th>Role_idRole</th>
    <th>Proses</th>
</thead>
<tbody>
    <?php
    $result = getAllUser();
    while ($row = mysqli_fetch_row($result)) {
        ?>
    <form method='post' action=''>
        <tr>
            <?php
            if ($nrp == $row[0]) {
                ?>
                <td class="data"><?= $row[0] ?><input type='hidden' name='nrp' value='<?= $row[0] ?>'/></td>
                <td class="data"><input type='text' name='nama' value='<?= $row[1] ?>'/></td>
                <td class="data"><input type='text' name='pass' value='<?= $row[2] ?>'/></td>
                <td class="data"><input type='text' name='fakultas' value='<?= $row[3] ?>'/></td>
                <td class="data"><input type='text' name='progstud' value='<?= $row[4] ?>'/></td>
                <td class="data"><input type='text' name='progpend' value='<?= $row[5] ?>'/></td>
                <td class="data"><input type='text' name='tempat_lahir' value='<?= $row[6] ?>'/></td>
                <td class="data"><input type='text' name='tanggal_lahir' value='<?= $row[7] ?>'/></td>
                <td class="data"><input type='text' name='alamat' value='<?= $row[8] ?>'/></td>
                <td class="data"><input type='text' name='no_hp' value='<?= $row[9] ?>'/></td>
                <td class="data"><input type='text' name='email' value='<?= $row[10] ?>'/></td>
                <td class="data"><input type='text' name='role_idRole' value='<?= $row[11] ?>'/></td>
                <td>
                    <input type='submit' value='Perbaharui' name='ubahOk'/>
                </td>
                <?php
            } else {
                ?>
                <td><a onClick='javascript: return confirm("Please confirm deletion");' href='?navito=user&delete=<?= $row[0] ?>'><?= $row[0] ?></a></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
                <td><?= $row[5] ?></td>
                <td><?= $row[6] ?></td>
                <td><?= $row[7] ?></td>
                <td><?= $row[8] ?></td>
                <td><?= $row[9] ?></td>
                <td><?= $row[10] ?></td>
                <td><?= $row[11] ?></td>
                <td>
                    <input type='submit' value='Ubah' name='ubah'/>
                    <input type='hidden' name='nrp' value='<?= $row[0] ?>'/>
                </td>
                <?php
            }
            ?>

        </tr>
    </form>
    <?php
}
?>

</tbody>
</table>
<br>
<div class="container">
    <!-- Trigger the modal with a button -->
    <a href="../user/akses.php" class="action-button shadow animate blue">Kembali</a>
    <button type="button" class="action-button shadow animate blue" data-toggle="modal" data-target="#myModal">Tambah Pengguna</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Pengguna</h4>
                </div>
                <div class="modal-body">
                    <table align="center" width="600px" height="400px">
                        <form method='post' action=''>
                            <tr>
                                <td>NRP</td>
                                <td><input type='text' name='nrp1'/></td>
                            </tr>                   
                            <tr>
                                <td><label>Nama</label></td>
                                <td><input type='text' name='nama1'/></td>
                            </tr>
                            <tr>
                                <td><label>Password</label></td>
                                <td><input type='text' name='pwd1'/><br/></td>
                            </tr>
                            <tr>
                                <td><label>Fakultas</label></td>
                                <td><input type='text' name='fakultas1'/></td>
                            </tr>
                            <tr>
                                <td><label>Program Studi</label></td>
                                <td><input type="radio" name="progstud1" value="Sistem Informasi"/> Sistem Informasi &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="progstud1" value="Teknik Informatika"/> Teknik Informatika</td>
                            </tr>
                            <tr>
                                <td><label>Program Pendidikan</label></td>
                                <td><input type="radio" name="progpen1" value="S1"/>S1 &nbsp &nbsp &nbsp<input type="radio" name="progpen1" value="S2"/>S2 &nbsp &nbsp &nbsp<input type="radio" name="progpen1" value="S3"/>S3</td>
                            </tr>
                            <tr>
                                <td><label>Tempat Lahir</label></td>
                                <td><input type='text' name='tempat_lahir1'/></td>
                            </tr>
                            <tr>
                                <td><label>Tanggal Lahir</label></td>
                                <td><input type='date' name='tanggal_lahir1'/></td>
                            </tr>
                            <tr>
                                <td><label>Alamat</label></td>
                                <td><input type='text' name='alamat1'/></td>
                            </tr>
                            <tr>
                                <td><label>No Hp</label></td>
                                <td><input type='text' name='no_hp1'/></td>
                            </tr>
                            <tr>
                                <td><label>Email</label></td>
                                <td><input type='text' name='email1'/></td>
                            </tr>
                            <tr>
                                <td><label>id_Role</label></td>
                                <td><input type='text' name='id_role1'/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type='submit' value='Simpan' name='aksi'/></td>
                            </tr>    
                        </form>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        
</div>

