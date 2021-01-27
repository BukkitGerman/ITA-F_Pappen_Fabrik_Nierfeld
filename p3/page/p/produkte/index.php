<?php
session_start();
include '../../server/parsedown-1.7.4/Parsedown.php';
require '../../server/markdown-extended/src/bootstrap.php';
include '../../template/footer.php';
use \MarkdownExtended\MarkdownExtended; 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/team.css">
</head>
<body>
<div class="box">
<?php
echo file_get_contents("../../template/header.html");
echo file_get_contents("../../img/copy.html");
?>
<script type="text/javascript" src="../../js/main.js"></script>
<div class="wrapper">
	<div class="content">
		<?php
			$Parsedown = new Parsedown();
			$content = file_get_contents("../../content/produkte.md");
			$content = explode ("---", $content);

			function startsWith( $haystack, $needle ) {
			    $length = strlen( $needle );
			    return substr( $haystack, 0, $length ) === $needle;
			}

			foreach ($content as $c => $key) {
				if($Parsedown->text($key) == "<p>+++</p>"){
					echo "<br>";
					echo "<hr>";
				}elseif(startsWith($Parsedown->text($key), "<p>++Head")){
					echo "<h2 style='text-align: center;'>". substr($Parsedown->text($key), 9) ."</h2>";
				}else{
					echo "<div class='outer-spo'>";
					echo "	<a href='#hide".$c."' class='hide btn' id='hide".$c."'>+ ".explode(" ", trim($key))[0]."</a>";
					echo "	<a href='#show".$c."' class='show btn' id='show".$c."'>- ".explode(" ", trim($key))[0]."</a>";
					echo "<hr class='line'>";
					echo "	<div class='inner-content'>";
					echo 		$Parsedown->text($key);
					echo "	</div>";
					echo "</div>";
				}
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