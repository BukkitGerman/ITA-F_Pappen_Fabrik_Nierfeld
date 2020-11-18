<?php
session_start();
$db = new SQLite3("../../server/database.db");
include '../../template/footer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
</head>
<body>
<div class="box">
	<?php
	echo file_get_contents("../../img/copy.html");
	echo file_get_contents("../../template/header.html");
	if(isset($_POST['usr']) && isset($_POST['pwd'])){
		$username = $_POST['usr'];
		$passwort = $_POST['pwd'];
		
		$stmt = $db->prepare("SELECT passwort, id FROM users WHERE username = :username");
		$stmt->bindValue(':username', $username);
		$stmt = $stmt->execute();
		$user = $stmt->fetchArray();
		$userpw = $user["passwort"];

		if ($user !== false){
			if(password_verify($passwort, $userpw)){
				$_SESSION['uid'] = $user['id'];
		    } else {
		        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
		    }
		}

	}
	?>
	<div class="wrapper">
		<div class="content">
			<script type="text/javascript" src="../js/main.js"></script>
			<script type="text/javascript" src="../js/login.js"></script>
			<?php
			if(isset($_SESSION['uid'])){
				?>
				<meta http-equiv="refresh" content="0; URL=http://localhost:1337/p/dashboard/">
				<?php
			}else{
			?>
			<div class='login'>
				<div class='logo'>
					<img src='../../img/logo.png' alt='logo'>
				</div>
				<div class='title'>Login</div>
				<div class='sub-title'>Administraion</div>
				<form method='POST'>
					<div class='username'><input id='usr' name='usr' placeholder='Username' type='text' required></div>
					<div class='password'><input id='pwd' name='pwd' placeholder='Password' type='password' required></div>
					<div class='submit'><input id='submit' name='submit' type='submit' value='Login'></div>
				</form>
				<p></p>
			</div>
			<?php
			}
			?>
		</div>
		<div class="push"></div>
	</div>
	<?php
	echo showFooter	("template/footer.php");
	?>
</div>
</body>
</html>