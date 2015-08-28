<?php
//clear all session data after data clean and redirect to login page
 session_start();
 session_destroy();
 header('Location: index.php');
?>

