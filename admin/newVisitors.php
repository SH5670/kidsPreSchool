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
        <title>Kids PreSchool Enrollment System | New Visitors</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
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
                                <h1>New Visitors</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">New Visitors</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">


                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Visitors' Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Parent Name</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>Child Name</th>
                                                        <th>Date & Time</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $visitors_rs = Database::search("SELECT * FROM `visitors` WHERE visitors.status_id='1'");
                                                    $visitors_num = $visitors_rs->num_rows;

                                                    for ($x = 0; $visitors_num > $x; $x++) {
                                                        $visited_data = $visitors_rs->fetch_assoc();
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $x + '1'; ?></td>
                                                            <td><?php echo $visited_data['guardianName']; ?></td>
                                                            <td><?php echo $visited_data['guardianMobile']; ?></td>
                                                            <td><?php echo $visited_data['guardianEmail']; ?></td>
                                                            <td><?php echo $visited_data['childName']; ?></td>
                                                            <td><?php echo $visited_data['date_time']; ?></td>

                                                            <th>
                                                                <a href="visitorsDetails.php?id=<?php echo $visited_data['id']; ?>" title="View Details" class="btn btn-primary btn-xm"> View Details</a>

                                                            </th>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>

            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/adminlte.js"></script>
        <script src="js/script.js"></script>
        <script src="js/admin.js"></script>


    </body>

    </html>
<?php
} else {
    header('location:../home.php');
}
?>