<?php
 include("../config/config.php");
 session_start();

 if (isset($_POST['facultyAdd']))
 {
    $employeeId = $_POST['employeeId'];
    $firstName = $_POST['firstName'];
    $middleName = !empty($_POST['middleName']) ? $_POST['middleName'] : null;
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $userStatus = "Active";
    $password = $employeeId . '@' . $lastName;
    $role = 3;
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $employmentType = $_POST['employmentType'];
    $rank = $_POST['rank'];


    $query = "INSERT INTO `employee`(`employeeId`, `firstName`, `middleName`, `lastName`, `phoneNumber`,`emailAddress`, `password`, `department`, `designation`, `employmentType`, `rank`, `userStatus`, `role`) VALUES ('$employeeId','$firstName','$middleName','$lastName','$phoneNumber','$emailAddress','$password','$department','$designation','$employmentType','$rank','$userStatus','$role')";
    
    $query_run = mysqli_query($con, $query);

    if ($query_run) {

        $_SESSION['status'] = "Faculty account created!";
        $_SESSION['status_code'] = "success";
        header('Location: ../faculty.php');
        exit(0);
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}



?>