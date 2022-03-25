<?php
require_once('../Connections/job.php');
if (!isset($_SESSION)) {
	session_start();
}
$txtTitle = $_POST['txtTitle'];
$txtTotal = $_POST['txtTotal'];
$cmbQual = $_POST['cmbQual'];
$txtDesc = $_POST['txtDesc'];
$Name = $_SESSION['Name'];
if ($cmbQual == "Other") {
	$cmbQual = $_POST['txtOther'];
}
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Insert Record
$sql = "insert into job_master (CompanyName,JobTitle,Vacancy,MinQualification,Description) values('" . $Name . "','" . $txtTitle . "','" . $txtTotal . "','" . $cmbQual . "','" . $txtDesc . "')";
// execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("Walkin Inserted Succesfully");window.location=\'ManageJob.php\';</script>';
