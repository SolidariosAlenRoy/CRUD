
<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'dev';
$databasePassword = 'devs';
// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);