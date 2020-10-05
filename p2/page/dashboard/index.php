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
</head>
<body>
<?php
	echo file_get_contents("../img/copy.html");
	echo file_get_contents("../template/header.html");
?>
<div class="wrapper">
	<div class="content">
	<script type="text/javascript" src="../js/main.js"></script>
		<?php 
			if(isset($_SESSION['uid'])){
				?>
				<P>DASHBOARD</P>
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