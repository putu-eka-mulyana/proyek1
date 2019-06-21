<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "model/proses.php";
$nip                = $_POST['nip'];
$nama               = $_POST['nama'];
$tgl                = $_POST['tgl'];
$tlp                = $_POST['tlp'];
$jk                 = $_POST['jk'];
$agama              = $_POST['agama'];
$alamat             = $_POST['alamat'];
$tanggal_masuk      = $_POST["tanggal_masuk"];
$status_pernikahan  = $_POST['kawin'];
$status_pekerjaan   = $_POST["status_pekerjaan"];
$jabatan            = $_POST['jabatan'];
$gajihpokok			= $_POST['gajihpokok'];
$tunjangan			= $_POST['tunjangan'];
$tanggalgajian		= $_POST['tanggalgajian'];

$tgl_gajian=date("Y-m-d", strtotime($tanggalgajian));
$tgl_lahir=date("Y-m-d", strtotime($tgl));
$tgg_masuk = date("Y-m-d", strtotime($tanggal_masuk));
$result = insert("INSERT INTO `pegawai` (`id`, `nip`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `tanggal_masuk`, `status_pernikahan`, `status_kerja`, `jabatan_id`,`gajih_pokok`,`tunjangan`,`tanggal_gajian`) VALUES 
                                        (NULL, '$nip', '$nama', '$tgl_lahir', '$jk','$agama', '$alamat','$tlp', '$tgg_masuk', '$status_pernikahan', '$status_pekerjaan', '$jabatan','$gajihpokok','$tunjangan','$tgl_gajian');");
if($result ==1 ){
    header('Location: tampil_pegawai.php');
}
?>