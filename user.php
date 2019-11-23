<?php
  include_once("system/koneksi.php");
  include_once("system/sesi.php");
?>
<html>
  <head>
    <title><?php echo $userlog['USERNAME'] ?></title>
    <link href="styles/user.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  <body>
    <div class="top-nav">
      <a href="index.php" class="Home">Home</a>
      <div class="user-box">
        <a  class="user-img" href="profile.php?user=<?php echo $userlog['ID_USER']?>">
          <img src="<?php echo $userlog['GAMBAR_USER']?>">
        </a>
      </div>
      <div class="write-box">
        <a href="write.php" class="write-btn">
          <i class="fas fa-edit"></i>
          <span>Write</span>
        </a>
      </div>
    </div>
    <div class="manage">
      <?php
        $id_user = $userlog['ID_USER'];
        $news = mysqli_query($koneksi,"select * from berita where ID_USER='$id_user' order by TGL_BERITA");
        while($data=mysqli_fetch_array($news)){
          echo "<a href='news.php?read=".$data['ID_BERITA']."'>";
          echo "<div class='news'>";
          echo "<h2>".$data['JUDUL_BERITA']."</h2>";
          echo "<p>".$data['DESKRIPSI_BERITA']."</p>";
          echo "Tanggal: ".$data['TGL_BERITA']."</span>";
          echo "</div>";
          echo "</a>";
        }
      ?>
    </div>
  </body>
</html>