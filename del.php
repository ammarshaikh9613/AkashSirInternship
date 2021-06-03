<?php 
$connection=mysqli_connect("localhost","root","","student_db") or die(mysqli_error($connection));


$id=$_GET['delid'];


$q=mysqli_query($connection,"
            UPDATE STUDENT SET IS_DELETE = 1  WHERE ST_ID='{$id}'
") or die(mysqli_error($connection)); 

if($q)
{
    echo "<script>alert('RECORD DELTED');window.location='display.php';</script>";

}

?>