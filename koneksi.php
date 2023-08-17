<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_sir';

$conn = mysqli_connect($host, $username, $password, $database);
date_default_timezone_set('Asia/Jakarta');

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];

include 'proses/function.php';

$baseurl = $directoryURI;
?>