<?php
	include_once("koneksi.php");
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($koneksi,"select * from users where USERNAME='$username' && PASSWORD='$password'");
  $result=mysqli_fetch_row($query);
	if($result>0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = mysqli_query($koneksi,"select NAMA_USER from users where USERNAME='$username'");
		$_SESSION['status'] = "login";
		$_SESSION['hak'] = mysqli_query($koneksi,"select HAK from users where USERNAME='$username'");
		header("location:../user.php");
	}
	else{
		session_start();
		$_SESSION['status']="fail";
		/*header("location:../login.php");*/
	}