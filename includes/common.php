<?php
// Database connection that works both locally and in Docker
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASSWORD') ?: '';
$db_name = getenv('DB_NAME') ?: 'ecommerce_db_winston';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
