<?php
require_once('../Connections/job.php');

$Id = $_GET['UserId'];

$result = $conn->query("delete from User_Master where UserId='" . $Id . "'");

// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';
