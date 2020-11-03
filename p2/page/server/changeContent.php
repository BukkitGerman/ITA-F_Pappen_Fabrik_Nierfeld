<?php
session_start();
if(isset($_POST['produkte']) && isset($_POST['file']) && isset($_SESSION['uid'])){
	file_put_contents('../template/content/'.$_POST['file'].'.html',$_POST['produkte']);
}
?>

<meta http-equiv="refresh" content="0; URL=http://localhost:1337/dashboard/">