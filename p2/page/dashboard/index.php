<?php 
session_start();

include "../server/main.php";
include '../template/footer.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>
<?php
	echo file_get_contents("../img/copy.html");
	echo file_get_contents("../template/header.html");
?>
<div class="wrapper">
	<div class="content">
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/contentManager.js"></script>
		<div class="sidebar">

		</div>
		<?php 
			if(isset($_SESSION['uid'])){
				?>
				<P>DASHBOARD</P>
				<a class='log link' name='login' href='/login/logout.php'><button>Logout</button></a>
				<form method="POST" action="../server/changeContent.php">
					<textarea class='edit' name='produkte' id='produkte'></textarea>
					<input type="button" id="bold" value="bold"/>
    				<input type="button" id="italic" value="italic" />
    				<input type="button" id="underline" value="underline" />
					<input type="hidden" name="file" value="produkte">
					<input type="submit" name="aendern" value="Ändern">
				</form>
					
					
				<?php
			}else{
				?>
				<meta http-equiv="refresh" content="0; URL=http://localhost:1337">
				<?php
			}
		?>
	</div>
	<div class="push"></div>
</div>
<?php
	echo showFooter	("../template/footer.php");
?>
</body>
</html>