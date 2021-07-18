<?php
function Login($acc, $pass) {
    $link = createMySQLConnection();
    $query = "SELECT * FROM user WHERE nrp='$acc' AND password=MD5('$pass')";
    $result = mysqli_query($link, $query);
    return $result;
}

function getAllUser() {
    $link = createMySQLConnection();
    $query = "SELECT * FROM user";
    $result = mysqli_query($link, $query);
    return $result;
}

function getAllPosting(){
    $link = createMySQLConnection();
    $query = "SELECT * FROM posting ORDER BY idposting DESC";
    $result = mysqli_query($link, $query);
    return $result;
}

function getAllHistory(){
    $link = createMySQLConnection();
    $query = "SELECT * FROM history ORDER BY idhistory DESC";
    $result = mysqli_query($link, $query);
    return $result;
}

function getAllHistoryByNRP($acc)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM history WHERE user_nrp = (?) ORDER BY idhistory DESC';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$acc);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function getAllMatkul(){
    $link = createMySQLConnection();
    $query = "SELECT * FROM matakuliah";
    $result = mysqli_query($link, $query);
    return $result;
}

function addHistory($user_nrp, $namaForm, $tanggal, $status,$idForm) {
   $link = createMySQLConnection();
   $query = "INSERT INTO history (user_nrp, namaForm, tanggal_pengajuan, status,idForm) VALUES(?, ?, ?, ?,?)";
   if ($stmt = mysqli_prepare($link, $query)) {
       mysqli_stmt_bind_param($stmt, "sssss", $user_nrp,$namaForm,$tanggal,$status,$idForm);
       mysqli_stmt_execute($stmt) or die(mysqli_error($link));
       mysqli_commit($link);
       mysqli_stmt_close($stmt);
   }
   mysqli_close($link);
}

function addPosting($judul_artikel, $isi_artikel, $tgl_artikel) {
    $link = createMySQLConnection();
    $query = "INSERT INTO posting (judul_artikel, isi_artikel, tgl_artikel) VALUES(?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sss", $judul_artikel, $isi_artikel, $tgl_artikel);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function updatePosting($judul_artikel, $isi_artikel, $tgl_artikel,$id) {
    $link = createMySQLConnection();
    $query = "UPDATE posting SET judul_artikel=?,isi_artikel=?,tgl_artikel=? WHERE idposting=?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssss", $judul_artikel, $isi_artikel, $tgl_artikel,$id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

    function editPosting($id)
    {
      $link = createMySQLConnection();
      $query = 'SELECT * FROM posting where idposting=?';

      mysqli_autocommit($link, FALSE);
      if($stmt = mysqli_prepare($link,$query))
      {
        // s = string , i for int , d for double , b for blob
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        $hasil = mysqli_stmt_get_result($stmt);
      }
      mysqli_close($link);
      return $hasil;
    }

function addUser($nrp,$nama,$pass,$fakultas,$prodi,$progpend,$tmpt_lahir,$tgl_lahir,$alamat,$nohp,$email,$status,$roleidRole) {
        $link = createMySQLConnection();
        $query = "INSERT INTO user VALUES(?, ?, md5(?), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $query)) {
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $nrp,$nama,$pass,$fakultas,$prodi,$progpend,$tmpt_lahir,$tgl_lahir,$alamat,$nohp,$email,$status,$roleidRole);
            mysqli_stmt_execute($stmt) or die(mysqli_error($link));
            mysqli_commit($link);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }

function updateUser($nrp,$nama,$pass,$fakultas,$prodi,$progpend,$tmpt_lahir,$tgl_lahir,$alamat,$nohp,$email,$status,$roleidRole) {
    $link = createMySQLConnection();
    $query = "UPDATE user SET nama=?, password=?, fakultas=?, prodi=?, prog_pend=?, tempat_lahir=?, tgl_lahir=?, alamat=?, no_hp=?, email=? WHERE nrp=?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssi", $nrp,$nama,$pass,$fakultas,$prodi,$progpend,$tmpt_lahir,$tgl_lahir,$alamat,$nohp,$email,$status,$roleidRole);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function deleteUser($nrp) {
    $link = createMySQLConnection();
    $query = "DELETE FROM user WHERE nrp = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $nrp);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);

}

function deletePosting($id) {
    $link = createMySQLConnection();
    $query = "DELETE FROM posting WHERE idposting = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);

}
function updatePassword($newpass,$nrp) {
    $link = createMySQLConnection();
    $query = "UPDATE user SET password=MD5(?), status=1 WHERE nrp =? ";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ss",$newpass,$nrp);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function updateHistory($idhistory,$status) {
    $link = createMySQLConnection();
    $query = "UPDATE history SET status=? WHERE idhistory=?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "si", $status,$idhistory);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}



function getLastIdAktif()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_mhs_aktif ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function getLastIdAktifTugas()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_tugas ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function getLastIdAkhirMasaStudi()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_masa_studi ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function getLastIdCuti()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_cuti ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function getLastAktifStudi()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_aktif_studi ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function getLastHapus()
{
  $link = createMySQLConnection();
  $query = "SELECT id_surat FROM form_hapus_nilai ORDER BY id_surat DESC LIMIT 1";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_array($result);
  $id_result = $data['id_surat'];

  mysqli_close($link);
  return $id_result;
}

function addAktif($nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,$status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_mhs_aktif (nama, semester, tahun_ajaran, alamat_mhs, no_hp, surat_ditujukan, jabatan, nama_instansi, alamat_instansi, keperluan, nama_ortu, NIK, alamat, kota, provinsi, tanggal, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,$status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastIdAktif();
    addHistory($user_nrp, 'Formulir Mahasiswa Aktif', $tanggal, $status,$id_result);
}

function addMahasiswaTugas1($tanggal, $matakuliah, $kodematakuliah, $ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $user_nrp, $status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_tugas (tanggal, matakuliah, kode_matakuliah, surat_ditujukan, jabatan, nama_instansi, alamat_instansi, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $tanggal, $matakuliah, $kodematakuliah, $ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $user_nrp, $status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastIdAktifTugas();
    addHistory($user_nrp, 'Formulir Mahasiswa Pengajuan Tugas', $tanggal, $status,$id_result);
}

function addMahasiswaTugas2($user_nrp,$nama1, $nrp1, $nama2, $nrp2, $nama3, $nrp3, $nama4, $nrp4, $nama5, $nrp5, $nama6, $nrp6, $nama7, $nrp7, $nama8, $nrp8, $nama9, $nrp9, $nama10, $nrp10) {
    $link = createMySQLConnection();
    $query = "UPDATE form_tugas SET nama1=?, nrp1=?, nama2=?, nrp2=?, nama3=?, nrp3=?, nama4=?, nrp4=?, nama5=?, nrp5=?, nama6=?, nrp6=?, nama7=?, nrp7=?, nama8=?, nrp8=?, nama9=?, nrp9=?, nama10=?, nrp10=? WHERE user_nrp = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $nama1, $nrp1, $nama2, $nrp2, $nama3, $nrp3, $nama4, $nrp4, $nama5, $nrp5, $nama6, $nrp6, $nama7, $nrp7, $nama8, $nrp8, $nama9, $nrp9, $nama10, $nrp10, $user_nrp);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }}

function addAkhirMasaStudi($fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,$status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_masa_studi (fakultas, program_studi, program_pendidikan, nama, tempat_lahir, tanggal_lahir, alamat, kota, kode_pos, no_hp, provinsi, email, semester, tahun_akademik, alasan, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,$status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastIdAkhirMasaStudi();
    $tanggal = date('Y-m-d');
    addHistory($user_nrp, 'Formulir Mahasiswa Akhir Masa Studi', $tanggal, $status,$id_result);
}

function addPermohonanCuti($nama, $fakultas, $prodi, $alamat, $no_hp, $tahun_akademik, $semester, $alasan, $alasan2, $tanggal_pengajuan, $user_nrp, $status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_cuti (nama, fakultas, prodi, alamat, no_hp, tahun_akademik, semester, alasan, alasan2, tanggal_pengajuan, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssss", $nama, $fakultas, $prodi, $alamat, $no_hp, $tahun_akademik, $semester, $alasan, $alasan2, $tanggal_pengajuan, $user_nrp, $status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastIdCuti();
    addHistory($user_nrp, 'Formulir Mahasiswa Permohonan Cuti Studi', $tanggal_pengajuan, $status,$id_result);
}

function addIjinAktifStudi($nama, $alamat, $tanggal_pengajuan, $semester, $tahun_akademik, $user_nrp, $status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_aktif_studi (nama, alamat, tanggal_pengajuan, semester, tahun_akademik, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssss", $nama, $alamat, $tanggal_pengajuan, $semester, $tahun_akademik, $user_nrp, $status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastAktifStudi();
    $tanggal = date('Y-m-d');
    addHistory($user_nrp, 'Formulir Mahasiswa Ijin Aktif Studi', $tanggal, $status,$id_result);
}



function addIHapusNilai1($nama, $email, $no_hp, $tanggal_pengajuan, $kodeMK1, $nama1, $nilai1, $semester1,$kodeMK2,$nama2,$nilai2,$semester2,$kodeMK3,$nama3,$nilai3,$semester3,$kodeMK4,$nama4,$nilai4,$semester4,$kodeMK5,$nama5,$nilai5,$semester5,$user_nrp, $status) {
    $link = createMySQLConnection();
    $query = "INSERT INTO form_hapus_nilai (nama, email, no_hp, tanggal_pengajuan, kodeMK1, nama1, nilai1, semester1, kodeMK2, nama2, nilai2, semester2, kodeMK3, nama3, nilai3, semester3, kodeMK4, nama4, nilai4, semester4, kodeMK5, nama5, nilai5, semester5, user_nrp, status_pengajuan) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssss", $nama, $email, $no_hp, $tanggal_pengajuan, $kodeMK1, $nama1, $nilai1, $semester1,$kodeMK2,$nama2,$nilai2,$semester2,$kodeMK3,$nama3,$nilai3,$semester3,$kodeMK4,$nama4,$nilai4,$semester4,$kodeMK5,$nama5,$nilai5,$semester5,$user_nrp, $status);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
    $id_result = getLastHapus();
    addHistory($user_nrp, 'Formulir Mahasiswa Hapus Nilai', $status,$id_result);
}

function addIHapusNilai2($kodeMK6, $nama6, $nilai6, $semester6,$kodeMK7,$nama7,$nilai7,$semester7,$kodeMK8,$nama8,$nilai8,$semester8,$kodeMK9,$nama9,$nilai9,$semester9,$kodeMK10,$nama10,$nilai10,$semester10,$user_nrp) {
    $link = createMySQLConnection();
    $query = "UPDATE form_hapus_nilai SET kodeMK6=?, nama6=?, nilai6=?, semester6=?, kodeMK7=?, nama7=?, nilai7=?, semester7=?, kodeMK8=?, nama8=?, nilai8=?, semester8=?, kodeMK9=?, nama9=?, nilai9=?, semester9=?, kodeMK10=?, nama10=?, nilai10=?, semester10=? WHERE user_nrp = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $kodeMK6, $nama6, $nilai6, $semester6,$kodeMK7,$nama7,$nilai7,$semester7,$kodeMK8,$nama8,$nilai8,$semester8,$kodeMK9,$nama9,$nilai9,$semester9,$kodeMK10,$nama10,$nilai10,$semester10,$user_nrp);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
}

function PrintMAByNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_mhs_aktif WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function PrintMTByNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_tugas WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function PrintSPCyNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_cuti WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function PrintIASyNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_masa_studi WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function PrintHNByNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_hapus_nilai WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function PrintSAMSByNRP($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_masa_studi WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function EditMhsAktif($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_mhs_aktif WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function editAktif($nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,$id) {
    $link = createMySQLConnection();
    $query = "UPDATE form_mhs_aktif SET nama=?, semester=?, tahun_ajaran=?, alamat_mhs=?, no_hp=?, surat_ditujukan=?, jabatan=?, nama_instansi=?, alamat_instansi=?, keperluan=?, nama_ortu=?, NIK=?, alamat=?, kota=?, provinsi=?, tanggal=?, user_nrp=? WHERE id_surat = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,$id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function EditMhsTugas($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_tugas WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function editTugas1($tanggal, $matakuliah, $kodematakuliah, $ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $user_nrp,$id) {
    $link = createMySQLConnection();
    $query = "UPDATE form_tugas SET tanggal=?, matakuliah=?, kode_matakuliah=?, surat_ditujukan=?, jabatan=?, nama_instansi=?, alamat_instansi=?, nama_instansi=?, alamat_instansi=?, user_nrp=? WHERE id_surat = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssssss", $tanggal, $matakuliah, $kodematakuliah, $ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $user_nrp,$id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function editTugas2($nama1, $nrp1, $nama2, $nrp2, $nama3, $nrp3, $nama4, $nrp4, $nama5, $nrp5, $nama6, $nrp6, $nama7, $nrp7, $nama8, $nrp8, $nama9, $nrp9, $nama10, $nrp10, $id) {
    $link = createMySQLConnection();
    $query = "UPDATE form_tugas SET nama1=?, nrp1=?, nama2=?, nrp2=?, nama3=?, nrp3=?, nama4=?, nrp4=?, nama5=?, nrp5=?, nama6=?, nrp6=?, nama7=?, nrp7=?, nama8=?, nrp8=?, nama9=?, nrp9=?, nama10=?, nrp10=? WHERE id_surat = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $nama1, $nrp1, $nama2, $nrp2, $nama3, $nrp3, $nama4, $nrp4, $nama5, $nrp5, $nama6, $nrp6, $nama7, $nrp7, $nama8, $nrp8, $nama9, $nrp9, $nama10, $nrp10, $id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

function EditMhsAkhirMasaStudi($id)
{
  $link = createMySQLConnection();
  $query = 'SELECT * FROM form_masa_studi WHERE id_surat = ?';

  mysqli_autocommit($link, FALSE);
  if($stmt = mysqli_prepare($link,$query))
  {
    // s = string , i for int , d for double , b for blob
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    $hasil = mysqli_stmt_get_result($stmt);
  }
  mysqli_close($link);
  return $hasil;
}

function editAkhirMasaStudi($fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,$id) {
    $link = createMySQLConnection();
    $query = "UPDATE form_masa_studi SET fakultas=?, program_studi=?, program_pendidikan=?, nama=?, tempat_lahir=?, tanggal_lahir=?, alamat=?, kota=?, kode_pos=?, no_hp=?, provinsi=?, email=?, semester=?, tahun_akademik=?, alasan=?, user_nrp=? WHERE id_surat = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,$id);
        mysqli_stmt_execute($stmt) or die(mysqli_error($link));
        mysqli_commit($link);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>
