<?php 
include "model/proses.php";
$jabatan =$_POST["tambah_jabatan"];

$result=insert("INSERT INTO jabatan(nama_jabatan)VALUE('$jabatan')");
if($result){
    header('Location: jabatan.php');
}
?>