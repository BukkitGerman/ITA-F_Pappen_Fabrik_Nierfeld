	<?php  
include "templates/main.php";
include "templates/produkte.php";
include "templates/login.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<script type="text/javascript" src="js/main.js"></script>
<?php 
showNavbar();
?>
<div class="wrapper">
	<div class="content">
		<?php
		if(isset($_POST['usr']) && isset($_POST['pwd'])){
			/* TODO: DB Abfrage
			 * Session setzten.
			 * User Login
			 *
			 */
		}

		if(isset($_GET['p'])){
			if($_GET['p'] === "produkte"){
				echo showProdukte();
			}elseif($_GET['p'] === "philosophie"){

			}elseif($_GET['p'] === "historie"){

			}elseif($_GET['p'] === "team"){

			}elseif($_GET['p'] === "agb"){

			}elseif($_GET['p'] === "impressum"){

			}elseif($_GET['p'] === "datenschutz"){

			}elseif($_GET['p'] === "login"){
				showLogin();
			}elseif($_GET['p'] === "kontakt"){

			}else{
				echo "Home";
			}
		}else{
			echo "Home";
			#TODO Add showHome Function
		}
		?>
	</div>
	<div class="push"></div>
</div>
<?php
showFooter();
?>
</body>
</html>