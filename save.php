<?php
  include_once("system/koneksi.php");
  include_once("system/sesi.php");

  $judul = $_POST['judul'];
  $berita = $_POST['berita'];
  $deskripsi = $_POST['deskripsi'];
	$urldb = array('%20',' ',"!","?");
	$url = "berita/".$_POST['judul'].".html";
  $url = str_replace($urldb,"-",$url);
  $id = $userlog['ID_USER'];
  $gambar = "Placeholder";
  $add = mysqli_query($koneksi, "insert into berita values (NULL,'$id','$judul',NOW(),'$url','$deskripsi','$gambar')");
	if($add){
    if($open=fopen($url, "w")){
      if(fwrite($open,$berita))
      fclose($open);
    }
    else{?>
      <script language="javascript">
		    alert('Terjadi Kesalah Saat Menulis Berita');
      </script><?php
    }
  }
	else{
		echo "Terjadi Kesalahan";
  }
?>