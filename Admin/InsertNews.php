
<?php

require_once('../Connections/job.php');

$News = $_POST['txtNews'];
$Date = $_POST['txtDate'];
// Establish Connection with MYSQL
// $con = mysql_connect("localhost", "root");
// Select Database
// mysql_select_db("job", $con);
// Specify the query to Insert Record
$sql = "insert into News_Master	(News,NewsDate) 	values('" . $News . "','" . $Date . "')";
// execute query
$conn->query($sql);
// Close The Connection
mysqli_close($conn);
echo '<script type="text/javascript">alert("New News Inserted Succesfully");window.location=\'News.php\';</script>';
