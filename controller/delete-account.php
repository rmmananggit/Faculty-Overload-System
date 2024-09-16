<?php
session_start();
include('../config/config.php');

// Check if the user ID is set in the URL
if (isset($_GET['id'])) {
    // Get the user ID from the URL
    $userId = $_GET['id'];

    // Validate the user ID to ensure it's an integer
    if (filter_var($userId, FILTER_VALIDATE_INT)) {
        // Prepare the DELETE statement
        $deleteQuery = "DELETE FROM `employee` WHERE `userId` = ?";
        
        if ($stmt = mysqli_prepare($con, $deleteQuery)) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "i", $userId);
            
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Success message
                $_SESSION['status'] = "Account deleted successfully!";
                $_SESSION['status_code'] = "success";
            } else {
                // Error message
                $_SESSION['status'] = "Error deleting account: " . mysqli_error($con);
                $_SESSION['status_code'] = "error";
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            // Error preparing statement
            $_SESSION['status'] = "Error preparing statement: " . mysqli_error($con);
            $_SESSION['status_code'] = "error";
        }
    } else {
        // Invalid user ID
        $_SESSION['status'] = "Invalid user ID!";
        $_SESSION['status_code'] = "error";
    }
} else {
    // User ID not set
    $_SESSION['status'] = "No user ID provided!";
    $_SESSION['status_code'] = "error";
}

// Close the database connection
mysqli_close($con);

// Redirect to the previous page or a specific page
header('Location: ../hr.php'); // Adjust the redirection URL as needed
exit();
?>
