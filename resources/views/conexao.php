<?php
$user = "root"; 
$password = ""; 
$database = "laravel"; 
$hostname = "localhost";
$mysqli = new mysqli('localhost', 'root', '', 'laravel');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

