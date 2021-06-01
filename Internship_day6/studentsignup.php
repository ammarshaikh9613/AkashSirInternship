

<?php 

        $connection=mysqli_connect("localhost","root","","student_db") or die(mysqli_error($connection));
        /*if(!$connection)
        {
            echo "database is not connected";
        }
        else
        {
            echo "db connected";
        }*/

        
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
       

            $q=mysqli_query($connection,"
            insert into student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_area,st_pincode,st_bloodgroup,st_password) 
            values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$dist}','{$pincode}','{$bloodgroup}','{$pass}')
            
            ") or die(mysqli_error($connection));

            if($q)
            {
                echo "<script>alert('Record added!');</script>";
            }
        }
        
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    
    </style>


</head>
<body>
    <form method="post">
    
    <table>
        <caption>Student's SignUp</caption>
    
        <tr>
            <td>Name:</td>
            <td><input type="text" placeholder="Enter your name" required="" name="sname"></td>
            
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                male <input type="radio"  required="" name="sgender" value="male">
                female <input type="radio"  required="" name="sgender" value="female">
                
        </td>
            
        </tr>
        <tr>
            <td>DOB:</td>
            <td><input type="date" required=""  name="sdob"></td>
            
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" placeholder="Enter your email" name="semail" required=""></td>
            
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><input type="tel" placeholder="Enter your Phone No:" required="" name="smobile"></td>
            
        </tr>
        <tr>
            <td>Adress:</td>
            <td><textarea name="saddress" required=""></textarea></td>
            
        </tr>
        <tr>
            <td>District:</td>
            <td>
                <input list="dist" required="" name="sdist">

                <datalist id="dist">
                    <option value="Ambawadi">
                    <option value="Ambli">
                    <option value="Shapur">
                    <option value="Jamalpur">
                    <option value="Khanpur">
                    
                </datalist>

            </td>
            
        </tr>
        <tr>
            <td>pincode:</td>
            <td><input type="number" placeholder="Enter pincode" required="" name="spincode"></td>
            
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>
                <select name="sbg" required="">
                        <option value="">Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        
                        
                </select>


            </td>
            
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" placeholder="Enter your name" required="" name="spass"></td>
            
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>

    </form>
</body>
</html>