<?php
require_once('../Connections/job.php');

$Id = $_POST['txtUserId'];
$Name = $_POST['txtUserName'];
$Password = $_POST['txtPass'];

$result = $conn->query("Update User_Master set UserName='" . $Name . "',Password='" . $Password . "' where UserId=" . $Id . "");

mysqli_close($conn);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
