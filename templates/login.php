<?php
function showLogin(){
	echo "
	<div class='login'>
		<div class='logo'><img class='logo' src='images/logo.png' alt='logo'></div>
		<div class='title'>Login</div>
		<div class='sub-title'>Administraion</div>
		<form method='POST' action='/'>
			<div class='username'><input name='usr' placeholder='Username' type='text' required></div>
			<div class='password'><input name='pwd' placeholder='Password' type='password' required></div>
			<div class='submit'><input name='submit' type='submit' value='Login'></div>
		</form>
	</div>
	";	
}

?>