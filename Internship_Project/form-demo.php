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
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Default form</h4>
                                        <p class="card-description">
                                            Basic form layout
                                        </p>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Username</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    Remember me
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
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
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="js/file-upload.js"></script>
        <!-- End custom js for this page-->
    </body>

</html>
