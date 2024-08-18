<?php
session_start();
include('../config/config.php');


if (isset($_POST['login'])) {
    $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT
	users.userId, 
	users.firstName, 
	users.middleName, 
	users.lastName, 
	users.phoneNumber, 
	users.address, 
	users.emailAddress, 
	users.`password`, 
	users.role, 
	users.isVerify, 
	users.userStatus, 
	users.otp, 
	users.`timeStamp`
FROM
	users
    WHERE
        users.emailAddress = '$emailAddress' AND
        users.`password` = '$password'
    LIMIT 1";

    $login_query_run = mysqli_query($con, $login_query);

    if ($login_query_run) {
        if (mysqli_num_rows($login_query_run) > 0) {
            $data = mysqli_fetch_assoc($login_query_run);

            $userId = $data['userId'];
            $fullName = $data['firstName'] . ' ' . $data['lastName'];
            $userRole = $data['role'];
            $userEmailAddress = $data['emailAddress'];
            $userStatus = $data['userStatus'];;


            $_SESSION['auth'] = true;
            $_SESSION['userRole'] = $userRole;
            $_SESSION['userStatus'] = $userStatus;
            $_SESSION['auth_user'] = [
                'userId' => $userId,
                'fullName' => $fullName,
                'userEmail' => $userEmailAddress,
            ];

            if ($userStatus == 'Inactive') {
                $_SESSION['status'] = "Your account is inactive!";
                header("Location: ../login.php");
                exit();
            } elseif ($userStatus == 'Pending') {
                $_SESSION['status'] = "Your account is still pending";
                header("Location: ../login.php");
                exit();
            } elseif ($userStatus == 'Active') {
                // $_SESSION['status'] = "Welcome $full_name!";
                header("Location: ../index.php");
                exit();
            }
        } else {
            $_SESSION['status'] = "Invalid Username and Password";
            header("Location: ../login.php");
            exit();
        }
    } else {
        // Handle the query execution error
        $_SESSION['status'] = "Error executing the login query: " . mysqli_error($con);
        header("Location: student_login.php");
        exit();
    }
} else {
    $_SESSION['status'] = "Invalid request";
    header("Location: student_login.php");
    exit();
}

?>