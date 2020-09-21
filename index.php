<?php  
include "templates/main.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
<script type="text/javascript" src="js/main.js"></script>
<?php 
showNavbar();
?>
<div class="wrapper">
	<div class="content">
		<?php

		echo "Lorem ipsum officia ut pariatur elit cillum qui cupidatat mollit velit veniam magna qui exercitation aute do in veniam minim cillum deserunt aliquip magna duis veniam in pariatur dolore aliqua fugiat voluptate incididunt.";
			#if(isset($_POST['produkte'])){
			#	echo "Testing Message.";
			#}
		?>
	</div>
	<div class="push"></div>
</div>
<?php
showFooter();
?>
</body>
</html>