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
	<link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
</head>
<body>
<div class="box">
	<?php
	include("../../template/header.html");
	echo file_get_contents("../../img/copy.html");
	?>
	<script type="text/javascript" src="../../js/main.js"></script>
	<script type="text/javascript" src="../../js/dashboard.js"></script>
	<div class="wrapper">
		<div class="content">
			<div class="sidebar">
				<div class="inner">
					<div><div class="point home"></div><a class="li home" href="?edit=home">HOME</a></div>
					<div><div class="point produkte"></div><a class="li produkte" href="?edit=produkte">PRODUKTE</a></div>
					<div><div class="point philosohpie"></div><a class="li philosohpie" href="?edit=philosohpie">PHILOSOPHIE</a></div>
					<div><div class="point historie"></div><a class="li historie" href="?edit=historie">HISTORIE</a></div>
					<div><div class="point team"></div><a class="li team" href="?edit=team">TEAM</a></div>
					<div><div class="point logout"></div><a class="li logout" id="logout" href="logout.php">LOGOUT</a></div>
				</div>
			</div>
			<div class="editable">
			<?php
				if(isset($_SESSION['uid'])){
					if(isset($_GET['edit'])){
						?>
						<script type="text/javascript" src="../../js/contentManager.js"></script>
						<?php
						if($_GET['edit'] === 'home'){
							?>
							<form method="POST" action="../../../server/changeContent.php">
								<input type="hidden" name="file" value="home">
								<textarea class='edit' name='home' id='home'></textarea>
								<input type="submit" name="aendern" value="Ändern">
							</form>
							<?php
						}
					}
				}else{
			?>
					<meta http-equiv="refresh" content="0; URL=http://localhost:1337">
			<?php
				}
			?>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php
		echo showFooter	("../template/footer.php");
	?>
</div>
</body>
</html>