<?php
session_start();

unset( $_SESSION['auth']);
unset( $_SESSION['user_type']);
unset( $_SESSION['auth_user']);

header("Location: ../login.php");
exit(0);
?>
