<?php
	session_start();
	include"koneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$psw=md5($password);
	$sql="select * from user where pengguna='$username' and sandi='$psw'";
	$query=mysqli_query($koneksi,$sql);
	if($hasil=mysqli_fetch_array($query,MYSQLI_NUM)){
		$_SESSION['pengguna']=$username;
		$_SESSION['user']=$hasil[0];
		$_SESSION['nama']=$hasil[1];
		$toto=$_SESSION['pengguna'];
		header("location:index.php");
	}else{
		header("location:login.php?stat=0");
	}
?>
