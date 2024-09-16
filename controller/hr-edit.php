<?php
 include("../config/config.php");
 session_start();

 if (isset($_POST['editHr']))
 {
    $userId = $_POST['userId'];
    $employeeId = $_POST['employeeId'];
    $firstName = $_POST['firstName'];
    $middleName = !empty($_POST['middleName']) ? $_POST['middleName'] : null;
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $userStatus = $_POST['userStatus'];

    $query = "UPDATE `employee` SET `employeeId`='$employeeId',`firstName`='$firstName',`middleName`='$middleName',`lastName`='$lastName',`phoneNumber`='$phoneNumber',`emailAddress`='$emailAddress',`userStatus`='$userStatus' WHERE `userId` = $userId";
    
    $query_run = mysqli_query($con, $query);

    if ($query_run) {

        $_SESSION['status'] = "HR account update!";
        $_SESSION['status_code'] = "success";
        header('Location: ../hr.php');
        exit(0);
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}



?>