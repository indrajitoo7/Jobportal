<?php
require_once('../Connections/job.php');
if (!isset($_SESSION)) {
	session_start();
}


$JobId = $_GET['JobId'];
$JobSeekId = $_SESSION['ID'];
$Status = "Apply";
$Desc = "No Message";

// Establish Connection with MYSQL
// $con1 = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con1);
// Specify the query to Insert Record
$sql1 = "select * from application_master where JobSeekId='" . $JobSeekId . "' and JobId='" . $JobId . "'";
// execute query
$result1 = $conn->query($sql1);
$records1 = mysqli_num_rows($result1);
// Close The Connection
mysqli_close($conn);
if ($records1 == 0) {

	// Establish Connection with MYSQL
	// $con = mysql_connect("localhost", "root");
	// Select Database
	// mysql_select_db("job", $con);
	// Specify the query to Insert Record
	$sql = "insert into application_master (JobSeekId,JobId,Status,Description) values('" . $JobSeekId . "','" . $JobId . "','" . $Status . "','" . $Desc . "')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	mysqli_close($conn);

	echo '<script type="text/javascript">alert("Succesfully Applied For Job");window.location=\'SearchJob.php\';</script>';
} else {
	echo '<script type="text/javascript">alert("You have already Applied For Job");window.location=\'SearchJob.php\';</script>';
}
