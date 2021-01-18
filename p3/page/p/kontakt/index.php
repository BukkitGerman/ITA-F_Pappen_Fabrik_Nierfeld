<?php
session_start();
include '../../server/parsedown-1.7.4/Parsedown.php';
include '../../template/footer.php';

$response = '';
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$response = 'Email is not valid!';
	} else if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$response = 'Please complete all fields!';
	} else {
		$to      = 'preussjustin@outlook.de';
		$from    = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['msg'];
		$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		$response = 'Message sent!';		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
</head>
<body>
<div class="box">
<?php
echo file_get_contents("../../template/header.html");
?>
<script type="text/javascript" src="../../js/main.js"></script>
<div class="wrapper">
	<div class="content">
		<div class="contact-div">
			<form class="contact" method="post" action="../../p/kontakt/index.php">
				<h1>Kontakt</h1>
				<input type="email" name="email" placeholder="Deine Email Adresse" required>
				<input type="text" name="name" placeholder="Dein Name" required>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Warum möchten sie uns kontaktieren?" required></textarea>
				<input type="submit">
			</form>
			<?php if ($response): ?>
			<p><?php echo $response; ?></p>
			<?php endif; ?>
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