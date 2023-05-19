<?php 
session_start();
include_once('../connection.php');
if (isset($_SESSION['a'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kids PreSchool Enrollment System | Add Student</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/dashboard.css">

        <link href="../resources/logo.png" rel="icon" />

    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php include_once("navbar.php"); ?>
            <?php include_once("sidebar.php"); ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Student</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Student</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Fill the Info</h3>
                                    </div>
                                  
                                    <div>
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="form-group col-6">
                                                <label>Father's Name</label>
                                                <input type="text" placeholder="Enter Father's Username" id="f" class="form-control" required>
                                                <span id="user-availability-status" style="font-size:14px;"></span>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Mother's Name</label>
                                                <input type="text" class="form-control" id="mn" placeholder="Enter Mother's Full Name" required>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" id="e" placeholder="Enter email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="text">Mobile Number</label>
                                                <input type="text" class="form-control" id="m" placeholder="Enter mobile" pattern="[0-9]{10}" title="10 numeric characters only" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" id="a" placeholder="Address" required>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-8">
                                                <label>Student's Name</label>
                                                <input type="text" class="form-control" id="s" placeholder="Enter Students's Name" required>
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Gender</label>
                                                <select class="form-control" id="g" required>

                                                    <option value="">Select a Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>

                                                </select>
                                            </div>
                                            </div>


                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" onclick="addStudent();">Submit</button>
                                        </div>
</div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bs-custom-file-input.min.js"></script>
        <script src="js/adminlte.js"></script>
        <script src="js/script.js"></script>
        <script src="js/admin.js"></script>

        <script>
            $(function() {
                bsCustomFileInput.init();
            });
        </script>
    </body>

    </html>
<?php
} else {
    header('location:../../home.php');
}

?>