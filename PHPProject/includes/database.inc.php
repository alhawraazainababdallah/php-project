<?php
define("ServerName", "localhost");
define("Username", "root");
define("Password", "");
define("Database", "phpproject");
/*
 * Server name: localhost
 * Xampp default Username: root
 * Xampp default password: empty strign
*/
$conn = mysqli_connect(ServerName, Username, Password) or die(mysqli_error($conn));


mysqli_select_db($conn, Database) or die("Could not connect to database");



?>