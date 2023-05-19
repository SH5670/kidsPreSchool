<?php
session_start();
include_once('../connection.php');
if (isset($_SESSION['a']) & isset($_GET["id"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kids PreSchool Enrollment System | Edit Sub admin</title>

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
                                <h1>Edit Subadmin Details</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Edit Subadmin Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
$subadmin_rs = Database::search("SELECT * FROM `admin` WHERE id='".$_GET["id"]."'");
$subadmin_data = $subadmin_rs->fetch_assoc();
                ?>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Update the Info</h3>
                                    </div>
                                  
                                    <form name="subadmin" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Username (used for login)</label>
                                                <input type="text" name="sadminusername" id="u" class="form-control" value="<?php echo $subadmin_data['userName']; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" id="n" name="fullname" value="<?php echo $subadmin_data['name']; ?>" placeholder="Enter Sub-Admin Full Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" id="e" name="emailid" placeholder="Enter email" required value="<?php echo $subadmin_data['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="text">Mobile Number</label>
                                                <input type="text" class="form-control" id="m" name="mobilenumber" placeholder="Enter mobile" pattern="[0-9]{10}" title="10 numeric characters only" required value="<?php echo $subadmin_data['mobile']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="p" placeholder="Password" required value="<?php echo $subadmin_data['password']; ?>">
                                            </div>


                                            <?php  ?>

                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" onclick="updateSubadmin(<?php echo $subadmin_data['id']; ?>);">Update</button>
                                        </div>
                                    </form>
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
echo("<script>alert('Something is Missing')</script>");
}
