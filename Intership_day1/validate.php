<?php
session_start();

$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');


if($_POST)
{
    $email=$_POST['email_id'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    

   // $select="select * from register_table where email_id='$email' && password='$password'";
    //$result=mysqli_query($connection,$select);
   // $num=mysqli_num_rows($result);
   
    $selectquery= mysqli_query($connection, "select * from  register_table where email_id='{$email}' && password='{$password}'") or die(mysqli_error($connection));
        $count = mysqli_num_rows($selectquery);
        $row = mysqli_fetch_array($selectquery);
    if($count>0)
        {
            $_SESSION['email_id']=$row['email_id'];
            $_SESSION['name']=$row['name'];
            
            header('location:app.php');
        }
    else
        {
            header('location:loginandregister.php');
        }
}   
?>