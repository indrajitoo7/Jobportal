
<?php
require_once('../Connections/job.php');
if (!isset($_SESSION)) {
	session_start();
}
$FeedBack = $_POST['txtFeedback'];
$FDate = date('y/m/d');
$Id = $_SESSION['ID'];



// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Insert Record
$sql = "insert into Feedback(JobSeekId,Feedback,FeedbakDate) values('" . $Id . "','" . $FeedBack . "','" . $FDate . "')";
// execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);

echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';
