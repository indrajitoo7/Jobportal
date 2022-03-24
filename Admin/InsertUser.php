<?php
require_once('../Connections/job.php');

$UserName = $_POST['txtUserName'];
$Password = $_POST['txtPassword'];


$result = $conn->query("insert into User_Master	(UserName,Password) values('" . $UserName . "','" . $Password . "')");

mysqli_close($conn);

echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';
