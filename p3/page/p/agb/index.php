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
	<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>
<body>
<div class="box">
<?php
echo file_get_contents("../../template/header.html");
?>
<script type="text/javascript" src="../../js/main.js"></script>
<div class="wrapper">
	<div class="content">
		<?php
			$Parsedown = new Parsedown();
			echo $Parsedown->text(file_get_contents("../../content/agb.md"));
		 ?>
	</div>
	<div class="push"></div>
</div>
<?php
	echo showFooter	("../template/footer.php");
?>
</div>
</body>
</html>