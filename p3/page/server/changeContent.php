<?php
session_start();
if(isset($_POST['home']) && isset($_POST['file']) && isset($_SESSION['uid'])){
	file_put_contents('../content/'.$_POST['file'].'.md', $_POST['home']);
}

header("Location: /p/dashboard/");
?>