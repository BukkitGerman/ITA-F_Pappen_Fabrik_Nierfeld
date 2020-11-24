<?php
session_start();
if(isset($_POST['file']) && isset($_SESSION['uid'])){
	file_put_contents('../content/historie/'.$_POST['file'].'.md', $_POST[$_POST['file']]);
}

header("Location: /p/dashboard/");
?>