<?php

require_once('../Connections/job.php');

$Id = $_GET['JobId'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update JobSeeker_Reg set Status='Confirm' where JobSeekId=" . $Id . "";
// Execute query
// mysql_query($sql, $con);
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
