
<?php
require_once('../Connections/job.php');

$Id = $_POST['txtNewsId'];
$News = $_POST['txtNews'];
$Date = $_POST['txtDate'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost","root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update News_Master set News='" . $News . "',NewsDate='" . $Date . "' where NewsId=" . $Id . "";
// Execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
