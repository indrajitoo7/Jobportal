<?php
require_once('../Connections/job.php');

$Id = $_GET['EmpId'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update Employer_Reg set Status='Confirm' where EmployerId=" . $Id . "";
// Execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
