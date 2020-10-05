<?php
include "../server/main.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<?php
	echo file_get_contents("../img/copy.html");
	echo file_get_contents("../template/header.html");
	?>
	<div class="wrapper">
		<div class="content">
			<script type="text/javascript" src="../js/main.js"></script>
			<div class='login'>
				<div class='logo'><img class='logo' src='../img/logo.png' alt='logo'></div>
				<div class='title'>Login</div>
				<div class='sub-title'>Administraion</div>
				<form method='POST' action='?p=login&login=1'>
					<div class='username'><input name='usr' placeholder='Username' type='text' required></div>
					<div class='password'><input name='pwd' placeholder='Password' type='password' required></div>
					<div class='submit'><input name='submit' type='submit' value='Login'></div>
				</form>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php
	echo file_get_contents("../template/footer.php");
	?>
</body>
</html>