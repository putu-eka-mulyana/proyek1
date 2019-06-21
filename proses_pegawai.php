<?php 
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

$tgl_lahir=date("Y-m-d", strtotime($tgl));
$tgg_masuk = date("Y-m-d", strtotime($tanggal_masuk));
$result = insert("INSERT INTO `pegawai` (`id`, `nip`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `tanggal_masuk`, `status_pernikahan`, `status kerja`, `jabatan_id`) VALUES 
                                        (NULL, '$nip', '$nama', '$tgl_lahir', '$jk','$agama', '$alamat','$tlp', '$tgg_masuk', '$status_pernikahan', '$status_pekerjaan', '$jabatan');");
if($result ==1 ){
    header('Location: tampil_pegawai.php');
}
?>