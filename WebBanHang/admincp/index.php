<?php 
 session_start();
 if(!isset($_SESSION['dangNhap'])){
 	header('Location:login.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <title>Hello ADMIN</title>
</head>
<body>
		<head> <h3 class="admin_title">WELLCOME ADMIN</h3></head>
		<div class="wrapper">
		<?php
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
		?>
		</div> 	
</body>
</html>