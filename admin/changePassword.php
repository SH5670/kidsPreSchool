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
    <title>Kids PreSchool Enrollment System | My Profile</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
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
                <h1>Change Password</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="adminDashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Change Password</li>
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
                    <h3 class="card-title">Change your Password</h3>
                  </div>

                  <div>
                    <div class="card-body">

                      <div class="form-group">
                        <label>Current Password</label>
                        <input class="form-control" id="cpw" type="password" required="true">
                      </div>
                      <div class="form-group">
                        <label>New Password</label>
                        <input class="form-control " id="npw1" type="password" required="true">
                      </div>

                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="form-control " id="npw2" type="password" required="true">
                      </div>


                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" onclick="changePassword(<?php echo $_SESSION['a']['id'] ?>);">Change</button>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </section>
      </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/adminlte.js"></script>
    <script src="js/script.js"></script>
    <script src="js/admin.js"></script>
  </body>

  </html>
<?php
} else {
  header('location:../index.php');
}
?>