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
	<form method='GET' class='link__form' id='produkte' action='/'><input type='hidden' name='p' value='produkte'/></form>
	<form method='GET' class='link__form' id='philosophie' action='/'><input type='hidden' name='p' value='philosophie'/></form>
	<form method='GET' class='link__form' id='historie' action='/'><input type='hidden' name='p' value='historie'/></form>
	<form method='GET' class='link__form' id='team' action='/'><input type='hidden' name='p' value='team'/></form>
	<form method='GET' class='link__form' id='agb' action='/'><input type='hidden' name='p' value='agb'/></form>
	<form method='GET' class='link__form' id='impressum' action='/'><input type='hidden' name='p' value='impressum'/></form>
	<form method='GET' class='link__form' id='datenschutz' action='/'><input type='hidden' name='p' value='datenschutz'/></form>
	<form method='GET' class='link__form' id='kontakt' action='/'><input type='hidden' name='p' value='kontakt'/></form>
	";
	if($status === true){
	echo "<form method='GET' class='link__form' id='login' action='/'><input type='hidden' name='p' value='login'/></form>";
	}else{
	echo "<form method='GET' class='link__form' id='login' action='/'><input type='hidden' name='p' value='login'/></form>";
	}
}

 ?>


 