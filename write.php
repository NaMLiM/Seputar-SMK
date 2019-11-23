<!doctype html>
<html>
	<head>
    <?php
      include("system/sesi.php");
    ?>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
		<title>Menulis Berita</title>

    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/codemirror.min.css">
    <link rel="stylesheet" href="styles/write.css">

    <!-- Include editor styles. -->
    <link href="system/froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="system/froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="system/froala/css/plugins/code_view.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/draggable.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/colors.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/emoticons.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/image_manager.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/image.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/line_breaker.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/table.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/char_counter.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/video.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/fullscreen.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/file.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/quick_insert.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/help.min.css">
    <link rel="stylesheet" href="system/froala/css/third_party/spell_checker.min.css">
    <link rel="stylesheet" href="system/froala/css/plugins/special_characters.min.css">
    
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="system/froala/js/froala_editor.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/align.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/char_counter.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/code_beautifier.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/code_view.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/colors.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/draggable.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/emoticons.min.js"></script>
  	<script type="text/javascript" src="system/froala/js/plugins/entities.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/file.min.js"></script>    	<script type="text/javascript" src="system/froala/js/plugins/font_size.min.js"></script>
  	<script type="text/javascript" src="system/froala/js/plugins/font_family.min.js"></script>
  	<script type="text/javascript" src="system/froala/js/plugins/fullscreen.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/image.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/image_manager.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/line_breaker.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/inline_style.min.js"></script>
	  <script type="text/javascript" src="system/froala/js/plugins/link.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/lists.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/paragraph_format.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/paragraph_style.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/quick_insert.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/quote.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/table.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/save.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/url.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/video.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/help.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/print.min.js"></script>
    <script type="text/javascript" src="system/froala/js/third_party/spell_checker.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/special_characters.min.js"></script>
    <script type="text/javascript" src="system/froala/js/plugins/word_paste.min.js"></script>
	</head>
	<body>
    <div class="top-nav">
      <a href="user.php" class="batal">Batal</a>
      <img src="<?php echo $userlog['GAMBAR_USER']?>">
      <span><?php echo $userlog['USERNAME'] ?></span>
      <input type="button" class="publish" name="publish" value="Publish">
      <div class="setting-box">
        <a href="#" class="setting-btn">
          <i class="fas fa-cog"></i>
        </a>
      </div>
    </div>
    <div class="write">
			<input type="text" class="judul" name="judul" placeholder="Judul">
      <textarea class="berita"></textarea>
      <div class="option">
        <textarea class="deskripsi"></textarea>
      </div>
    	<script>
			$(function() {
				$('.berita').froalaEditor({
          imageUploadParam: 'image',
          imageUploadURL: 'upload_images.php',
          imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
          videoUploadParam: 'video',
          videoUploadURL: 'upload_videos.php',
          videoAllowedTypes: ['mp4', 'ogv', "webm", "3gp", "avi", " mp4v", "mpg4"]
         })
			});
      $(".publish").click(function(){
        var judul = $(".judul").val();
        var deskripsi = $(".deskripsi").val();
        var text = $(".berita").froalaEditor('html.get');
		    var berita = $(".berita").html(text).text();
        var dataTosend='judul='+judul+'&deskripsi='+deskripsi+'&berita='+berita;
        $.ajax({
          type: 'POST',
          url: 'save.php',
          data: dataTosend
        })
        .done(function(){
          alert("Berita Berhasil Dipublish");
		      document.location("user.php");
        })
      });
    	</script>
    </div>
  </body>
</html>