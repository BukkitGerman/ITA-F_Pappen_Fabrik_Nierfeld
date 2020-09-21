<?php 
function showNavbar(){
	echo "
	<header>
		<img class='logo' src='images/logo.png' alt='logo'>
		<nav>
			<ul class='nav__links'>
				<li><a class='link' name='produkte' href='#'>PRODUKTE</a></li>
				<li><a class='link' name='philosophie' href='#'>PHILOSOPHIE</a></li>
				<li><a class='link' name='historie' href='#'>HISTORIE</a></li>
				<li><a class='link' name='team' href='#'>DAS TEAM</a></li>
			</ul>
		</nav>
		<a class='cta link' name='kontakt' href='#'><button>Kontakt</button></a>
	</header>
	";
}


function showFooter(){
	echo "
	<footer>
		<div class='footer'>
			<ul class='nav__links'>
				<li><a class='link' name='agb' href='#'>AGB</a></li>
				<li><a class='link' name='impressum' href='#'>IMPRESSUM</a></li>
				<li><a class='link' name='datenschutz' href='#'>DATENSCHUTZ</a></li>
			</ul>
		</div>
		<a class='log link' name='login' href='#'><button>Login</button></a>
	</footer>
	<form method='POST' class='link__form' id='produkte' action='/'><input type='hidden' name='produkte' value='produkte'/></form>
	<form method='POST' class='link__form' id='philosophie' action='/'><input type='hidden' name='philosophie' value='philosophie'/></form>
	<form method='POST' class='link__form' id='historie' action='/'><input type='hidden' name='historie' value='historie'/></form>
	<form method='POST' class='link__form' id='team' action='/'><input type='hidden' name='team' value='team'/></form>
	<form method='POST' class='link__form' id='agb' action='/'><input type='hidden' name='agb' value='agb'/></form>
	<form method='POST' class='link__form' id='impressum' action='/'><input type='hidden' name='impressum' value='impressum'/></form>
	<form method='POST' class='link__form' id='datenschutz' action='/'><input type='hidden' name='datenschutz' value='datenschutz'/></form>
	";
}

 ?>


 