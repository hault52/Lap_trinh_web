<?php
 // Kết Nối DataBase
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'ban_hang';
$mysqli = new mysqli("localhost","root","","ban_hang");
if($mysqli->connect_error){
die("Failed to connect with MySQL: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
?> 