<?php
function showLogin(){
	echo "
	<div class='outer-login'>
		<form class='login' method='POST' action='/?p=admin'>
			<h1>Login</h1>
			<input type='text' name='username'/><br/>
			<input type='password' name='password'/><br/>
			<input type='submit' name='submit' value='Login'><br/>
		</form>
	</div>
	";	
}

?>