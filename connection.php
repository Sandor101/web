<?php
// Open a new connection to the MySQL server

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "register";

$con = new mysqli($dbhost,$dbuser,$dbpass, $dbname);
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{//for connection error finding
		die("Nem sikerült csatlakozni.");
}