<?php
session_start();
include '../../server/parsedown-1.7.4/Parsedown.php';
include '../../template/footer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/timeline.css">
</head>
<body>
<div class="box">
<?php
echo file_get_contents("../../template/header.html");
?>
<script type="text/javascript" src="../../js/main.js"></script>
<script type="text/javascript" src="../../js/timeline.js"></script>
<div class="wrapper">
	<div class="content">
		<?php
			$Parsedown = new Parsedown();

			if ($handle = opendir('../../content/historie')) {

				echo "<div class='timeline'><ul id='tl'>";
				$files = array();

			    while (false !== ($entries_[] = readdir($handle)));
			    	sort($entries_);
			    	$entries = array_reverse($entries_);

			    	foreach($entries as $entry) {
			    	
				    	if($entry !== "." && $entry !== ".."){
					    	$text = strstr($Parsedown->text(file_get_contents("../../content/historie/$entry")), "\n");
					    	$head = strstr($text, "</h3>", true);
					    	$body = strstr($text, "</h3>");
					    	$datum = strstr($Parsedown->text(file_get_contents("../../content/historie/$entry")), "\n", true);

					    	echo "<li><div class='tl_content'>";
					    	echo $head;
					    	echo $body;
					    	echo "</div>";
					    	echo "<div class='point'></div>";
					    	echo "<div class='date'>";
					    	echo $datum;
					    	echo "</div>";
					    	echo "</li>";
					    }

				   	}

			    echo "</ul></div>";
			    closedir($handle);
			}



		 ?>
	</div>
	<div class="push"></div>
</div>
<?php
	echo showFooter	("../template/footer.php");
?>
</div>
</body>
</html>