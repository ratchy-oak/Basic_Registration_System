<?php
$mysqli = new mysqli('localhost', 'root', '', 'Registration');

if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

session_start();
?>