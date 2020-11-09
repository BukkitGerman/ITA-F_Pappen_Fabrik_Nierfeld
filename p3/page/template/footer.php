<?php

function showFooter(){

echo "
<footer>
	<div class='footer'>
		<ul class='nav__links'>
			<li><a class='link' name='agb' href='/p/agb/'>AGB</a></li>
			<li><a class='link' name='impressum' href='/p/impressum/'>IMPRESSUM</a></li>
			<li><a class='link' name='datenschutz' href='/p/datenschutz/'>DATENSCHUTZ</a></li>
		</ul>
	</div>
	";
	if(!isset($_SESSION['uid'])){
		echo "<a class='log link' name='login' href='/p/login/'><button>Login</button></a>";
	}else{
		echo "<a class='log link' name='admin' href='/p/dashboard/'><button>Dashboard</button></a>";
	}
	/*echo "
</footer>
<form method='GET' class='link__form' id='produkte' action='/'><input type='hidden' name='p' value='produkte'/></form>
<form method='GET' class='link__form' id='philosophie' action='/'><input type='hidden' name='p' value='philosophie'/></form>
<form method='GET' class='link__form' id='historie' action='/'><input type='hidden' name='p' value='historie'/></form>
<form method='GET' class='link__form' id='team' action='/'><input type='hidden' name='p' value='team'/></form>
<form method='GET' class='link__form' id='agb' action='/'><input type='hidden' name='p' value='agb'/></form>
<form method='GET' class='link__form' id='impressum' action='/'><input type='hidden' name='p' value='impressum'/></form>
<form method='GET' class='link__form' id='datenschutz' action='/'><input type='hidden' name='p' value='datenschutz'/></form>
<form method='GET' class='link__form' id='kontakt' action='/'><input type='hidden' name='p' value='kontakt'/></form>
<form method='GET' class='link__form' id='login' action='page/login.php'><input type='hidden' name='p' value='login'/></form>";
*/
}