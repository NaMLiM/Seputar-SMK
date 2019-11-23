<?php
  include_once("system/koneksi.php");
  
  $news = mysqli_query($koneksi,"select * from berita,users where berita.ID_USER = users.ID_USER order by TGL_BERITA desc limit 0,4");
?>
<html>
	<head>
		<title>Seputar SMK</title>
		<link rel="stylesheet" type="text/css" href="styles/home.css">
		<link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	</head>
	<body class="bg">
    <div class="top-nav" id="top-nav">
      <a href="index.php">
        <img src="img/logo.png" class="logo">
      </a>
			<a class="nav" href="index.php">Home</a>
      <div class="search-box">
        <input type="text" name="search" placeholder="Type here to search" class="search-text" />
        <a href="#" class="search-btn">
          <i class="fa fa-search"></i>
        </a>
      </div>
    </div>
    <div class="content">
		  <div class="header">
			  <img class="slideshow"/>
		  </div>
		  <div class="main">
			  <div class="news-box">
				  <?php
					  while($data=mysqli_fetch_array($news)){
        		  echo "<a href='news.php?read=".$data['ID_BERITA']."'>";
						  echo "<div class='news'>";
						  echo "<h2>".$data['JUDUL_BERITA']."</h2>";
						  echo "<p>".$data['DESKRIPSI_BERITA']."</p>";
						  echo "<span>ditulis oleh ".$data['NAMA_USER']." pada ".$data['TGL_BERITA']."</span>";
          	  echo "</div>";
          	  echo "</a>";
					  }
				  ?>
			  </div>
			  <div class="archive-box">
    		  <?php
      		  echo "Work in progress";
      	  ?>
			  </div>
		  </div>
    </div>
    <script type="text/javascript">
      window.onscroll = function() {myFunction()};
      var navbar = document.getElementById("top-nav");
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        }
        else {
          navbar.classList.remove("sticky");
        }
      }
    </script>
  </body>
</html>