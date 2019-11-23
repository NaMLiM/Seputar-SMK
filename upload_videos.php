<?php
$allowedExts = array("webm", "mp4", "ogv", "3gp");

$temp = explode(".", $_FILES["video"]["name"]);

$extension = end($temp);

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["video"]["tmp_name"]);

if ((($mime == "video/webm")
|| ($mime == "video/mp4")
|| ($mime == "video/3gpp")
|| ($mime == "video/mp4v-es")
|| ($mime == "video/h264")
|| ($mime == "video/ogg"))
&& in_array(strtolower($extension), $allowedExts)) {
    $name = sha1(microtime()) . "." . $extension;

    move_uploaded_file($_FILES["video"]["tmp_name"], getcwd() . "/upload/videos/" . $name);

    $response = new StdClass;
    $response->link = "http://localhost/seputar_smk/upload/videos/" . $name;
    echo stripslashes(json_encode($response));
}
   ?>