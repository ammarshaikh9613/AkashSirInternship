
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Student's Table</title>
        <!-- base:css -->
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png" />
    </head>

    <body>
        <div class="container-scroller d-flex">
            <!-- partial:partials/_sidebar.html -->
            <?php
            include './themepart/sidebar.php';
            ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
                <?php
                include './themepart/navbar.php';
                ?>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">

                            <div class="col-lg-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        
                                        <div class="table-responsive pt-3">
                                            <?php 
                                          
$connection=mysqli_connect("localhost","root","","student_db") or die(mysqli_error($connection));
        
$q=mysqli_query($connection,"
    select * from student where is_delete=0

") or die(mysqli_error($connection));
                                                echo "<center>";
                                                    echo "<table class='table table-bordered'>";
                                                        echo "<tr>";
                                                            echo "<th>Student Id</th>";
                                                            echo "<th>Student Name</th>";
                                                            echo "<th>Student Gender</th>";
                                                            echo "<th>Student DOB</th>";
                                                            echo "<th>Email</th>";
                                                            echo "<th>Mobile No</th>";
                                                            echo "<th>Adress</th>";
                                                            echo "<th>Area</th>";
                                                            echo "<th>Pincode</th>";
                                                            echo "<th>BloodGroup</th>";
                                                            echo "<th>Action</th>";


                                                            echo "</tr>";

                                                        $i=0;
                                                        while($row=mysqli_fetch_array($q))
                                                        {
                                                        $i++;
                                                        echo "<tr>";
                                                            echo "<td>$i</td>";
                                                            echo "<td>{$row['st_name']}</td>";
                                                            echo "<td>{$row['st_gender']}</td>";
                                                            echo "<td>{$row['st_dob']}</td>";
                                                            echo "<td>{$row['st_email']}</td>";
                                                            echo "<td>{$row['st_mobile']}</td>";
                                                            echo "<td>{$row['st_address']}</td>"; 
                                                            echo "<td>{$row['st_area']}</td>";
                                                            echo "<td>{$row['st_pincode']}</td>";
                                                            echo "<td>{$row['st_bloodgroup']}</td>";
                                                            echo "<td><a href='delete-student.php?delid={$row['st_id']}'>Delete</a></td>";

                                                            echo "</tr>";

                                                        }

                                                        echo "</table>";
                                                    echo "</center>";
                                                    ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php
                    include './themepart/footer.php';
                    ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- base:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <!-- endinject -->
        <!-- End custom js for this page-->
    </body>

</html>


