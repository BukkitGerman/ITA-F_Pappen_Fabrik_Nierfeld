<?php
session_start();

if(isset($_POST['file']) && isset($_SESSION['uid'])){
	if(!(isset($_POST['remove']))){
			var_dump($_POST);
		if($_POST['file'] == "new"){
			if(isset($_POST['en'])){

				file_put_contents('../content//historie/'.$_POST['en'].'.md', $_POST[$_POST['file']]);
			}
		}else{
			file_put_contents('../content/historie/'.$_POST['file'].'.md', $_POST[$_POST['file']]);
		}
	}else{
		unlink('../content/historie/'.$_POST['file'].'.md');
	}
}

header("Location: /p/dashboard/");
?>