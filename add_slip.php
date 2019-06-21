<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
	include 'model/proses.php';
	$id = $_POST['id'];
	$total= $_POST['gajih'];
	$potongan =$_POST['potongan'];
	$result = insert("INSERT INTO slip_gajih (total_gajih,potongan,pegawai_id) VALUES ('$total','$potongan','$id')");
	if($result ==1 ){
    header('Location: laporan_gajih.php');
}
?>