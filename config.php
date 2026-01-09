<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'BD';

$mysqli = @new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    $mysqli = null;
}
?>
