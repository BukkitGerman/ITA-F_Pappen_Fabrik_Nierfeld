<?php
	include "../templates/main.php";
	include "../templates/produkte.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/slideshow.js"></script>
<?php 
showNavbar();
?>
<div class="wrapper">
	<div class="content">
<?php
if(isset($_GET['login'])){
	$username = $_POST['usr'];
	$password = $_POST['pwd'];
}
?>
	<div class='login'>
		<div class='logo'><img class='logo' src='../images/logo.png' alt='logo'></div>
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
showFooter();
?>
</body>
</html>