<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
$nrp = '';

if(isset($_POST['ubah'])){
  $id=$_POST['IdForm'];
  header("location:./editposting.php?id=$id");}
?>

<link rel="stylesheet" href="../css/addUser.css">
<br>
<br>
<br>
<br>
<table class="table">
    <thead>
    <th>Id Posting</th>
    <th>Judul Artikel</th>
    <th>Isi Artikel</th>
    <th>Tanggal Artikel</th>
    <th>Edit Posting</th>
</thead>
<tbody>
    <?php
        session_start();
    $result = getAllPosting();
    while ($row = mysqli_fetch_row($result)) {
        ?>
    <form method='post' action=''>
        <tr>
          <td><?= $row[0] ?></td>
          <td><?= $row[1] ?></td>
          <td><?= $row[2] ?></td>
          <td><?= $row[3] ?></td>
          <td>
              <input type='submit' value='EDIT' name='ubah'/>
              <input type='text' id='IdForm'name='IdForm' value='<?= $row[0] ?>'readonly='' hidden=''/>
          </td>
        </tr>
    </form>
    <?php
}
?>
</tbody>
</table>

<br>
<a href="../user/akses.php" class="action-button shadow animate blue">Kembali</a>
<a href="posting.php" class="action-button shadow animate blue">Tambah Posting</a>
