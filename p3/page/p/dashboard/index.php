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
	<link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
	<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>
<body>
<div class="box">
	<?php
	include("../../template/header.html");
	echo file_get_contents("../../img/copy.html");
	?>
	<script type="text/javascript" src="../../js/main.js"></script>
	<script type="text/javascript" src="../../js/dashboard.js"></script>
	<div class="wrapper">
		<div class="content">
			<div class="sidebar">
				<div class="inner">
					<div><div class="point home"></div><a class="li ed home" href="?edit=home">HOME</a></div>
					<div><div class="point sideb"></div><a class="li ed sideb" href="?edit=sidebar">SIDEBAR</a></div>
					<div><div class="point produkte"></div><a class="li ed produkte" href="?edit=produkte">PRODUKTE</a></div>
					<div><div class="point philosohpie"></div><a class="li ed philosohpie" href="?edit=philosophie">PHILOSOPHIE</a></div>
					<div><div class="point historie"></div><a class="li ed historie" href="?edit=historie">HISTORIE</a></div>
					<div><div class="point team"></div><a class="li ed team" href="?edit=team">TEAM</a></div>
					<div><div class="point agb"></div><a class="li ed agb" href="?edit=agb">AGB</a></div>
					<div><div class="point impressum"></div><a class="li ed impressum" href="?edit=impressum">IMPRESSUM</a></div>
					<div><div class="point datenschutz"></div><a class="li ed datenschutz" href="?edit=datenschutz">DATENSCHUTZ</a></div>
					<div><div class="point logout"></div><a class="li logout" id="logout" href="logout.php">LOGOUT</a></div>
				</div>
			</div>
			<div class="editable">
			<?php
				if(isset($_SESSION['uid'])){
					if(isset($_GET['edit'])){
						?>
						<script type="text/javascript" src="../../js/contentManager.js"></script>
						<?php
						$sites = array();
						if ($handle = opendir('../../content')) {
							while (false !== ($entries_[] = readdir($handle)));
							sort($entries_);
			    			$entries = array_reverse($entries_);
							
							foreach($entries as $entry) {
								if($entry !== "." && $entry !== ".." && $entry !== "historie"){
									$site = substr($entry, 0, -3);
									array_push($sites, $site);
									
								}
							}
							array_pop($sites);
						}

						foreach ($sites as $key => $value) {
							if(strtolower($_GET['edit']) === strtolower($value) && strtolower($value) != "historie"){
							?>
							<form method="POST" action="../../../server/changeContent.php">
								<input type="hidden" name="file" value=<?php echo $value ?>>
								<div id="editor">
									<textarea class='edit' name=<?php echo $value ?> id=<?php echo $value ?>></textarea>
									<div id="compiledMarkdown"></div>
								</div>
								<div class="btnBox">
									<input type="submit" name="aendern" value="Ändern">
								</div>
							</form>
							<?php
							}
						}

						if(strtolower($_GET['edit']) === strtolower("historie")) {
								//Thinking about a solution!
								if ($h_handle = opendir('../../content/historie')) {
									while (false !== ($h_entries_[] = readdir($h_handle)));
									sort($h_entries_);
			    					$h_entries = array_reverse($h_entries_);
						
								?>
									<form method="POST" action="../../../server/changeContentHistorie.php">
									<div id=selection>
										<select id="historie_entry">
											<option value="t">Eintrag auswählen</option>
											<option value="new">Neuer Eintrag</option>
											<?php
											array_pop($h_entries);
											foreach($h_entries as $h_entry) {
												if($h_entry !== "." && $h_entry !== ".."){
													?>
														<option value=<?php echo $h_entry ?>><?php echo substr($h_entry, 0 ,-3) ?></option>
													<?php
												}
											}
											?>
										</select>
										<div class="ninp">
											<label class="ninp">Datum eintragen (Jahr)
											<input class="ninp" type="number" name="en" minlength="4" maxlength="4" min="1900">
											</label>
										</div>
									</div>
									<?php
								}
								?>
										<input type="hidden" class='gett' name="file" value="">
										<div id="editor">
											<textarea class='edit' name=""></textarea>
											<div id="compiledMarkdown"></div>
										</div>
										<div class="btnBox">
											<input type="submit" name="aendern" value="Ändern">
											<input class="remove" type="submit" name="remove" value="Löschen"/>
										</div>
									</form>
								<?php
							}


					}
				}else{
			?>
					<meta http-equiv="refresh" content="0; URL=http://localhost:1337">
			<?php
				}
			?>
		</div>
		</div>
		<div class="push"></div>
	</div>
	<?php
		echo showFooter	("../template/footer.php");
	?>
</div>
</body>
</html>