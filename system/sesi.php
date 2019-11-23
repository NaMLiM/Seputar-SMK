<?php
	include_once("koneksi.php");
	if(session_status() == PHP_SESSION_NONE){
		session_start();
	}

	$cek_user = $_SESSION['username'];
	$cek_sql = mysqli_query($koneksi,"select * from users where USERNAME = '$cek_user' and (HAK = 'Admin' or HAK = 'Author')");
	$userlog = mysqli_fetch_array($cek_sql,MYSQLI_ASSOC);
	if(!isset($_SESSION['username'])){
		header("location:./login.php");
  }
?>