<?php

require_once('../Connections/job.php');
if (!isset($_SESSION)) {
	session_start();
}
$Degree = $_POST['cmbQual'];
$Uni = $_POST['txtBoard'];
$Passing = $_POST['cmbYear'];
$Per = $_POST['txtPer'];
$Id = $_SESSION['ID'];
if ($Degree == "Other") {
	$Degree = $_POST['txtOther'];
}
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Insert Record
$sql = "insert into JobSeeker_Education(JobSeekId,Degree,University,PassingYear,Percentage) values('" . $Id . "','" . $Degree . "','" . $Uni . "','" . $Passing . "','" . $Per . "')";
// execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);

echo '<script type="text/javascript">alert("Profile Created Succesfully");window.location=\'Education.php\';</script>';
