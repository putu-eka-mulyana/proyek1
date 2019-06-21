<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include "model/proses.php";
if(isset($_POST['submit'])){
	$id 				= $_POST['id'];
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

    $result = insert("UPDATE `pegawai`SET 
        nip='$nip',
        nama_lengkap='$nama',
        tanggal_lahir='$tgl_lahir',
        jenis_kelamin='$jk',
        agama='$agama',
        alamat='$alamat',
        no_tlp='$tlp', 
        tanggal_masuk='$tgg_masuk', 
        status_pernikahan='$status_pernikahan', 
        status_kerja='$status_pekerjaan', 
        jabatan_id='$jabatan' WHERE id='$id'");
        var_dump($result);
        if($result ==1 ){
            header('Location: tampil_pegawai.php');
        }
}
?>