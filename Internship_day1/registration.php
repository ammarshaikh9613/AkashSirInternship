<?php
session_start();
header('location:loginandregister.php');
$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');

$name=$_POST['name'];
$email=$_POST['email_id'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$dob=$_POST['dob'];

$select="select * from register_table where email_id='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register_table(name,email_id,password,date_of_birth,mobile_no,address,gender) values('$name','$email','$password','$dob','$mobile','$address','$gender')";
    mysqli_query($connection,$reg);
}
?>