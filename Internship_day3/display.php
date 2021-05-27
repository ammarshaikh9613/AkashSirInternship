<?php 

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$city=$_POST['city'];
echo "Welcome".$name."<br>";
echo "Your Details..";
echo "<br>";
echo "Birthdate:".$dob."<br>";
echo "Mobile:".$mobile. "<br>";
echo "Email:".$email. "<br>";
echo "Adress:".$address."<br>";
echo "City:".$city. "<br>";

?>