<?php

session_start();

if( !isset($_SESSION['email_id']))
{
    header("location:login.php");
    
}

echo "Welcome:".$_SESSION['name'];
?>

<a href="logout.php">Logout</a>