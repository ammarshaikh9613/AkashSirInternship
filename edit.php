<?php

$connection=mysqli_connect("localhost","root","","student_db") or die(mysqli_error($connection));


if(!isset($_GET['id']) || empty($_GET['id']))
{
    header("location:Display.php");
}
$id=$_GET['id'];
$edtq=mysqli_query($connection,"select * from student where st_id='{$id}' ") or die(mysqli_error($connection));


$editdata=mysqli_fetch_array($edtq);
//print_r($editdata);

if($_POST)
{

        $name=$_POST['sname'];
        $dob=$_POST['sdob'];
        $email=$_POST['semail'];
        $gender=$_POST['sgender'];
        $mobile=$_POST['smobile'];
        $dist=$_POST['sdist'];
        $address=$_POST['saddress'];
        $pincode=$_POST['spincode'];
        $bloodgroup=$_POST['sbg'];
        $pass=$_POST['spass'];


        $uq=mysqli_query($connection,"
        
            UPDATE STUDENT SET st_name='{$name}',st_gender='{$gender}',st_dob='{$dob}',st_email='{$email}',st_mobile='{$mobile}',
            st_address='{$address}',st_area='{$dist}',st_pincode='{$pincode}',st_bloodgroup='{$bloodgroup}',st_password='{$pass}'
            where st_id='{$id}'
        ") or die(mysqli_error($connection));

        if($uq)
        {
            echo "<script>alert('RECORD UPDATED');window.location='Display.php';</script>";
        }

       
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT STUDENT</title>

    <style>
    table
    {
       /* border: 1px solid black;*/
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        
        }
    body
    {
        font-size: 20px;
    }  
    td{
        margin-top:40px;
        padding-top:30px;
        width:50%;
    }    
    a{
        text-align: center;
        display: block;
    }  
    
    </style>


</head>
<body>
    <form method="post">
    
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" placeholder="Enter your name" required="" name="sname" value="<?php echo $editdata['st_name'];?>"></td>
            
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                male <input type="radio"  <?php  if($editdata['st_gender']=='male'){ echo 'checked';}  ?>  required="" name="sgender" value="male">
                female <input type="radio" <?php  if($editdata['st_gender']=='female'){ echo 'checked';}  ?>  required="" name="sgender" value="female">
                
        </td>
            
        </tr>
        <tr>
            <td>DOB:</td>
            <td><input type="date" required=""  value="<?php echo $editdata['st_dob'];?>"  name="sdob"></td>
            
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" value="<?php echo $editdata['st_email'];?>" placeholder="Enter your email" name="semail" required=""></td>
            
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><input type="tel" placeholder="Enter your Phone No:"  value="<?php echo $editdata['st_mobile'];?>" required="" name="smobile"></td>
            
        </tr>
        <tr>
            <td>Adress:</td>
            <td><textarea name="saddress"  required=""><?php echo $editdata['st_address'];?></textarea></td>
            
        </tr>
        <tr>
            <td>District:</td>
            <td>
        <select class="form-control" name="sdist" >
                    <option <?php if($editdata['st_area']=="Ambawadi"){echo"selected";}?>>Ambawadi</option>
                            <option <?php if($editdata['st_area']=="Ambli"){echo"selected";}?>>Ambli</option>
                            <option <?php if($editdata['st_area']=="Shapur"){echo"selected";}?>>Shapur</option>
                            <option <?php if($editdata['st_area']=="Jamalpur"){echo"selected";}?>>Jamalpur</option>
                            <option <?php if($editdata['st_area']=="Khanpur"){echo"selected";}?>>Khanpur</option>
                            
        </select>
    
            </td>
            
        </tr>

                                

        <tr>
            <td>pincode:</td>
            <td><input type="number" value="<?php echo $editdata['st_pincode'];?>" placeholder="Enter pincode" required="" name="spincode"></td>
            
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>
            <select class="form-control" name="sbg" >
                            <option <?php if($editdata['st_bloodgroup']=="A+"){echo"selected";}?>>A+</option>
                            <option <?php if($editdata['st_bloodgroup']=="A-"){echo"selected";}?>>A-</option>
                            <option <?php if($editdata['st_bloodgroup']=="B+"){echo"selected";}?>>B+</option>
                            <option <?php if($editdata['st_bloodgroup']=="B-"){echo"selected";}?>>B-</option>
                            <option <?php if($editdata['st_bloodgroup']=="AB+"){echo"selected";}?>>AB+</option>
                            <option <?php if($editdata['st_bloodgroup']=="AB-"){echo"selected";}?>>AB-</option>
                            <option <?php if($editdata['st_bloodgroup']=="O+"){echo"selected";}?>>O+</option>
                            <option <?php if($editdata['st_bloodgroup']=="O-"){echo"selected";}?>>O-</option>
                            
                            
                            
        </select>

            </td>
            
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" value="<?php echo $editdata['st_password'];?>" placeholder="Enter your name" required="" name="spass"></td>
            
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>

    </form>


   <a href='Display.php'>Display record</a>;
</body>
</html>