<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php

    require_once('Connections/job.php');
    // echo "<pre>";
    session_start();
    $UserName = $_POST['txtUser'];
    $Password = $_POST['txtPass'];
    $UserType = $_POST['cmbUser'];

    if ($UserType == "Administrator") {

        // Perform query
        $result = $conn->query("select * from user_master where UserName='" . $UserName . "' and Password='" . $Password . "'");
        $records = mysqli_num_rows($result);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($records == 0) {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            header("location:Admin/index.php");
        }
        mysqli_close($conn);
    } else if ($UserType == "JobSeeker") {
        $result = $conn->query("select * from jobseeker_reg where UserName='" . $UserName . "' and Password='" . $Password . "' and Status='Confirm'");
        $records = mysqli_num_rows($result);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($records == 0) {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            $_SESSION['ID'] = $row['JobSeekId'];
            $_SESSION['Name'] = $row['JobSeekerName'];
            // print_r($_SESSION);die;
            header("location:JobSeeker/index.php");
        }
        mysqli_close($conn);
    } else {

        $result = $conn->query("select * from employer_reg where UserName='" . $UserName . "' and Password='" . $Password . "' and Status='Confirm'");
        $records = mysqli_num_rows($result);
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($records == 0) {
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            $_SESSION['ID'] = $row['EmployerId'];
            $_SESSION['Name'] = $row['CompanyName'];
            header("location:Employer/index.php");
        }
        mysqli_close($conn);
    }
    ?>

</body>

</html>