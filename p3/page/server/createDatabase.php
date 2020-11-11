<?php

	$db = new SQLite3('database.db');

	//User Database
	
	$db->exec("CREATE TABLE IF NOT EXISTS users(
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		username VARCHAR(64) NOT NULL,
		email VARCHAR(255) NOT NULL,
		passwort VARCHAR(255) NOT NULL,
		created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)");
	


	$pw_hash = password_hash("Password", PASSWORD_DEFAULT);

	$smt = $db->prepare("INSERT INTO users (username, email, passwort) VALUES (:username, :email, :passwort)");
	$smt->bindValue(':username', "Testuser");
	$smt->bindValue(':email', "Test@user.de", SQLITE3_TEXT);
	$smt->bindValue('passwort', $pw_hash);
	$smt->execute();


?>