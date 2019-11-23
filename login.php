<html>
	<head>
    <link rel="stylesheet" href="styles/login.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Seputar SMK | Login</title>
		<?php
    session_start();
    if(!isset($_SESSION['status'])){
      $_SESSION['status'] = "welcome";
    }
		if($_SESSION['status']=="fail"){
			?><script type="text/javascript">
			alert("Username/Password Salah!");
			</script><?php
			$_SESSION['status']="welcome";
		}
		?>
	</head>
	<body>
    <div class="back">
      <a class="arrow" href="index.php">
        <i class="fas fa-arrow-circle-left"></i>
      </a>
    </div>
		<div class="loginbox">
			<h1>Login</h1>
      <form action="system/login.php" method="POST">
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input type="text" name="username" placeholder="Username">
        </div>
        <div class="textbox">
          <i class="fas fa-key"></i>
          <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" value="Sign in" name="login">
			</form>
		</div>
  </body>
</html>