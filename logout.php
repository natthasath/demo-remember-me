<?php

// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the "remember_user" cookie
setcookie('remember_user', '', time() - 3600);

// Redirect to the login page
header('Location: index.php');
exit;

?>
