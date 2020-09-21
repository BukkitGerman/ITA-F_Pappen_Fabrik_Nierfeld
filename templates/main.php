<?php 
function showNavbar(){
	echo "
	<header>
		<img class='logo' src='images/logo.png' alt='logo'>
		<nav>
			<ul class='nav__links'>
				<li><a href='#'>PRODUKTE</a></li>
				<li><a href='#'>PHILOSOPHIE</a></li>
				<li><a href='#'>HISTORIE</a></li>
				<li><a href='#'>DAS TEAM</a></li>
			</ul>
		</nav>
		<a class='cta' href='#'><button>Kontakt</button></a>
	</header>
	";
}


function showFooter(){
	echo "
	<footer>
		<div class='footer'>
			<ul class='nav__links'>
				<li><a href='#'>AGB</a></li>
				<li><a href='#'>IMPRESSUM</a></li>
				<li><a href='#'>DATENSCHUTZ</a></li>
			</ul>
		</div>
		<a class='log' href='#'><button>Login</button></a>
	</footer>
	";
}

 ?>


 