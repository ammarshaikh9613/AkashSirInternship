<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />


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




</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" name="sname" placeholder="Username">
                    </div>
                    
             
                    <div class="form-group">
                      <label for="exampleInputUsername1">DOB</label>
                      <input type="DATE" name="sdob" class="form-control">
                    </div>   

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="semail" class="form-control" placeholder="Email">
                    </div>  
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">GENDER</label>
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="sgender" value="male"  checked>
                              Male
                            </label>
                        </div>
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="sgender" value="female" >
                              Female
                            </label>
                        </div>
                    </div>
                        
                         
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile</label>
                      <input type="tel" class="form-control" name="smobile">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control"  name="saddress" rows="4"></textarea>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">District</label>
                    <select class="form-control" name="sdist">
                      <option value="Ambawadi">Ambawadi</option>
                      <option value="Ambli">Ambli</option>
                      <option value="Shapur">Shapur</option>
                      <option value="Jamalpur">Jamalpur</option>
                      <option value="Khanpur">Khanpur</option>
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Postcode</label>
                      <input type="text"  name="spincode" class="form-control">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Blood Group</label>
                    <select  name="sbg" class="form-control" id="exampleFormControlSelect2">
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
                    </div>
                   
                      
                    

                    
                    <div class="form-group" >
                      <label for="exampleInputPassword1">Password</label>
                      <input   name="spass" type="text" class="form-control"  placeholder="Password">
                    </div>
                    
                    
                   
                <div class="mt-3">
                  <input type="submit" value="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
