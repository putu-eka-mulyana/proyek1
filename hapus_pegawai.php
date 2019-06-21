<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
include 'model/proses.php';
$id =$_GET['id'];
	$query = "DELETE FROM pegawai WHERE id=".$id;
	if(mysqli_query($con,$query)){
		echo "<script>
			document.location.href='tampil_pegawai.php'
			alert('success')
		</script>";
	}else{
		echo "<script>
			alert('failed')
			document.location.href='tampil_pegawai.php'
		</script>";
	}
mysqli_close($con);

?>