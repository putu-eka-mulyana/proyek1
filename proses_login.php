<?php 
session_start();
include 'model/proses.php';
$errUser='';
$errPass='';
$user=$_POST['username'];
$pass =$_POST['password'];
$password=sha1($pass);
if(!empty($password) && !empty($user)){
	if(cek_user($user)){
		$result = read("SELECT * FROM admin WHERE username='$user'")[0];
		if($result[2] === $password){
			$_SESSION['username']=$result[1];
			header("Location:index.php");
		}else{
			$errPass="password salah";
			header("Location:login.php");
		}
	}else{
		$errUser="user salah atau belum ada";
		header("Location:login.php");
	} 
	
}else{
	header("Location:login.php");
}
?>