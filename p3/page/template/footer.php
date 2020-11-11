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
}