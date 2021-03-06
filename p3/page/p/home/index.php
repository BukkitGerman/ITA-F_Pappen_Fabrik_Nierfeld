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
</head>
<body>
<div class="box">
	<?php
	include("../../template/header.html");
	echo file_get_contents("../../img/copy.html");
	?>
	<div class="wrapper">
		<div class="content sbs">
			<div id="con_">
				<div class="slideshow-container">
					<div class="mySlides fade">
					  <div class="numbertext">1 / 4</div>
					  <img src="../../img/slider1.jpg" style="width:100%">
					  <div class="text">Büro</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 4</div>
					  <img src="../../img/slider2.jpg" style="width:100%">
					  <div class="text">Alterpapier abgabe</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 4</div>
					  <img src="../../img/slider3.jpg" style="width:100%">
					  <div class="text">Einfahrt</div>
					</div>
					<div class="mySlides fade">
					  <div class="numbertext">4 / 4</div>
					  <img src="../../img/slider4.jpg" style="width:100%">
					  <div class="text">Hof</div>
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<div id="slider_dots" style="text-align:center">
  					<span class="dot" onclick="currentSlide(1)"></span> 
  					<span class="dot" onclick="currentSlide(2)"></span> 
  					<span class="dot" onclick="currentSlide(3)"></span> 
  					<span class="dot" onclick="currentSlide(4)"></span> 
				</div>
			<?php
				$Parsedown = new Parsedown();
				echo $Parsedown->text(file_get_contents("../../content/home.md"));
			 ?>
			</div>
			 <div class="main-sidebar">
			 	<div>
				<?php 
					echo $Parsedown->text(file_get_contents("../../content/sidebar.md"));
				?>
				</div>
				<div class="map">
					<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1822.1139755095364!2d6.495312477945048!3d50.55889390154258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf742247146abd%3A0xd391913a928d4082!2sPappenfabrik%20Nierfeld%20Josef%20Piront%20GmbH%20%26%20Co.%20KG!5e0!3m2!1sde!2sde!4v1607441772179!5m2!1sde!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
		
		<div class="push"></div>
	</div>
	<?php
		echo showFooter	("../template/footer.php");
	?>
</div>
<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>