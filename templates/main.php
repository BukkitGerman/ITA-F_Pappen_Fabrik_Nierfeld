<?php 
function showNavbar(){
	echo "
	<header>
		<a href='/'><img class='logo' src='images/logo.png' alt='logo'></a>
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


function showFooter($status = false){
	
	echo "
	<footer>
		<div class='footer'>
			<ul class='nav__links'>
				<li><a class='link' name='agb' href='#'>AGB</a></li>
				<li><a class='link' name='impressum' href='#'>IMPRESSUM</a></li>
				<li><a class='link' name='datenschutz' href='#'>DATENSCHUTZ</a></li>
			</ul>
		</div>";
		if($status === false){
		echo "<a class='log link' name='login' href='#'><button>Login</button></a>";
		}else{
		echo "<a class='log link' name='logout' href='#'><button>Logout</button></a>";
		}
	echo file_get_contents("copy.html");
	echo "
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
	if($status === false){
	echo "<form method='GET' class='link__form' id='login' action='/'><input type='hidden' name='p' value='login'/></form>";
	}else{
	echo "<form method='GET' class='link__form' id='logout' action='/'><input type='hidden' name='p' value='logout'/></form>";
	}
}


function showHome(){
	echo '<div class="car_show"><section class="carousel" aria-label="Gallery">
			<ol class="carousel__viewport">
			<li id="carousel__slide1"
			tabindex="0"
			class="carousel__slide">
			<div class="carousel__snapper">
			<a href="#carousel__slide4"
			class="carousel__prev">Go to last slide</a>
			<a href="#carousel__slide2"
			class="carousel__next">Go to next slide</a>
			</div>
			</li>
			<li id="carousel__slide2"
			tabindex="0"
			class="carousel__slide">
			<div class="carousel__snapper"></div>
			<a href="#carousel__slide1"
			class="carousel__prev">Go to previous slide</a>
			<a href="#carousel__slide3"
			class="carousel__next">Go to next slide</a>
			</li>
			<li id="carousel__slide3"
			tabindex="0"
			class="carousel__slide">
			<div class="carousel__snapper"></div>
			<a href="#carousel__slide2"
			class="carousel__prev">Go to previous slide</a>
			<a href="#carousel__slide4"
			class="carousel__next">Go to next slide</a>
			</li>
			<li id="carousel__slide4"
			tabindex="0"
			class="carousel__slide">
			<div class="carousel__snapper"></div>
			<a href="#carousel__slide3"
			class="carousel__prev">Go to previous slide</a>
			<a href="#carousel__slide1"
			class="carousel__next">Go to first slide</a>
			</li>
			</ol>
			<aside class="carousel__navigation">
			<ol class="carousel__navigation-list">
			<li class="carousel__navigation-item">
			<a href="#carousel__slide1"
			class="carousel__navigation-button">Go to slide 1</a>
			</li>
			<li class="carousel__navigation-item">
			<a href="#carousel__slide2"
			class="carousel__navigation-button">Go to slide 2</a>
			</li>
			<li class="carousel__navigation-item">
			<a href="#carousel__slide3"
			class="carousel__navigation-button">Go to slide 3</a>
			</li>
			<li class="carousel__navigation-item">
			<a href="#carousel__slide4"
			class="carousel__navigation-button">Go to slide 4</a>
			</li>
			</ol>
			</aside>
		</section></div>';
}
 ?>


 