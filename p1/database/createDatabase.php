<?php
	$db = new SQLite3("database.db");

	//User Database
	$db->exec("CREATE TABLE IF NOT EXISTS users(
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		username VARCHAR(64) NOT NULL,
		email VARCHAR(255) NOT NULL,
		passwort VARCHAR(255) NOT NULL,
		created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)");

	$db->exec("INSERT INTO users (username, email, passwort) VALUES ('Testuser', 'test@email.de', 'test1234')");
?>