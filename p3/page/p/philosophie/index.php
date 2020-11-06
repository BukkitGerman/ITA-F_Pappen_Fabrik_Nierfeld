<?php
session_start();
include '../../server/parsedown-1.7.4/Parsedown.php';
include '../../template/footer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
	<link rel="stylesheet" type="text/css" href="../../css/team.css">
</head>
<body>
<?php
echo file_get_contents("../../template/header.html");
echo file_get_contents("../../img/copy.html");
?>
<script type="text/javascript" src="../../js/main.js"></script>
<div class="wrapper">
	<div class="content">
		<?php
			$Parsedown = new Parsedown();
			echo $Parsedown->text(file_get_contents("../../content/philosophie.md"));
		 ?>
	</div>
	<div class="push"></div>
</div>
<?php
	echo showFooter	("../template/footer.php");
?>
</body>
</html>