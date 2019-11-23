<?php
  include_once("system/koneksi.php");
  $getread = $_GET['read'];
	$url = mysqli_query($koneksi,"select URL_BERITA from berita where ID_BERITA = '$getread'");
	$title = mysqli_query($koneksi,"select JUDUL_BERITA from berita where ID_BERITA = '$getread'");
	$title = mysqli_fetch_array($title)['JUDUL_BERITA'];
	$url = mysqli_fetch_array($url)['URL_BERITA'];
?>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div class="read-news">
      <?php
      include($url);
			?>
		</div>
	</body>
</html>