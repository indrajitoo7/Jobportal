<?php

require_once('../Connections/job.php');

$txtId = $_POST['txtId'];
$txtName = $_POST['txtName'];
$txtContact = $_POST['txtContact'];
$txtAddress = $_POST['txtAddress'];
$txtCity = $_POST['txtCity'];
$txtEmail = $_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtArea = $_POST['txtArea'];
$txtUser = $_POST['txtUser'];
$txtPassword = $_POST['txtPassword'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update employer_reg  set CompanyName='" . $txtName . "',ContactPerson='" . $txtContact . "',Address='" . $txtAddress . "',City='" . $txtCity . "',Email='" . $txtEmail . "',Mobile='" . $txtMobile . "',Area_Work='" . $txtArea . "',UserName='" . $txtUser . "',Password='" . $txtPassword . "' where EmployerId=" . $txtId . "";
// Execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
