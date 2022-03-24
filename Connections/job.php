<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job = "job";
$username_job = "root";
$password_job = "";
$conn = new mysqli($hostname_job, $username_job, $password_job, $database_job);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
