<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include 'model/proses.php';
$id =$_POST['id'];
$ket =$_POST['keterangan'];
$result=insert("INSERT INTO absensi(`pegawai_id`,`keterangan`) VALUE ('$id','$ket')");
if(mysqli_query($con,$result) == 0){
		echo "<script>
			alert('absensi success')
			document.location.href='index.php'
			</script>";
	mysqli_close($con);
}
?>