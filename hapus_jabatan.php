<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
	require 'model/proses.php';
	$id =$_GET['id'];
	$query = "DELETE FROM jabatan WHERE id=".$id;
	if(mysqli_query($con,$query)){
		echo "<script>
			document.location.href='jabatan.php'
			alert('success')
		</script>";
	}else{
		echo "<script>
			alert('failed')
		</script>";
	}
mysqli_close($con);
	
	
?>