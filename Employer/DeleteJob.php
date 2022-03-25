<?php
require_once('../Connections/job.php');
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Insert Record
$sql = "delete from Job_Master where JobId='" . $Id . "'";
// execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'ManageJob.php\';</script>';
