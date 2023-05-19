<?php
session_start();
include('../connection.php');

if (isset($_SESSION['a'])) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kids PreSchool Enrollment System | Dashboard</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/OverlayScrollbars.min.css">


        <link href="../resources/logo.png" rel="icon" />

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">

            <?php include_once('navbar.php'); ?>


            <?php include_once('sidebar.php'); ?>


            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <?php if ($_SESSION["a"]['adminType'] == 1) : ?>

                                <div class="col-lg-4 col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">

                                            <?php

                                            $subAdmin_rs = Database::search("SELECT * FROM `admin` WHERE adminType != '1'");
                                            $subAdmin_num = $subAdmin_rs->num_rows;

                                            ?>
                                            <h3><?php echo $subAdmin_num; ?></h3>
                                            <p>Sub Admins</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <a href="manageSubadmins.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="col-lg-4 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php

                                        $teachers_rs = Database::search("SELECT * FROM `teachers`");
                                        $teachers_num = $teachers_rs->num_rows;

                                        ?>
                                        <h3><?php echo $teachers_num; ?></h3>

                                        <p>Listed Teachers</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="manageTeachers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <?php

                                        $class_rs = Database::search("SELECT * FROM `class`");
                                        $class_num = $class_rs->num_rows;

                                        ?> <h3><?php echo $class_num; ?></h3>

                                        <p>Listed Classes</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <hr />


                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <?php

                                        $students_rs = Database::search("SELECT * FROM `student`");
                                        $students_num = $students_rs->num_rows;

                                        ?> <h3><?php echo $students_num; ?></h3>
                                        <p>Total Enrollments</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person"></i>
                                    </div>
                                    <a href="manageStudents.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <?php

                                        $new_rs = Database::search("SELECT * FROM `enrollments` WHERE enrollStatus_id = '3'");
                                        $new_num = $new_rs->num_rows;

                                        ?> <h3><?php echo $new_num; ?></h3>

                                        <p>New Enrollments</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="newEnrollments.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php

                                        $accepted_rs = Database::search("SELECT * FROM `enrollments` WHERE enrollStatus_id = '1'");
                                        $accepted_num = $accepted_rs->num_rows;

                                        ?> <h3><?php echo $accepted_num; ?></h3>

                                        <p>Accepted Enrollments</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="acceptedEnrolment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <?php

                                        $rejected_rs = Database::search("SELECT * FROM `enrollments` WHERE enrollStatus_id = '2'");
                                        $rejected_num = $rejected_rs->num_rows;

                                        ?> <h3><?php echo $rejected_num; ?></h3>
                                        <p>Rejected Enrollments</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="rejectedEnrolments.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <?php

                                        $tVisitors_rs = Database::search("SELECT * FROM `visitors`");
                                        $tVisitors_num = $tVisitors_rs->num_rows;

                                        ?> <h3><?php echo $tVisitors_num; ?></h3>
                                        <p>Total Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person"></i>
                                    </div>
                                    <a href="newVisitors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <?php

                                        $newVisitors_rs = Database::search("SELECT * FROM `visitors` WHERE status_id = '1'");
                                        $newVisitors_num = $newVisitors_rs->num_rows;

                                        ?> <h3><?php echo $newVisitors_num; ?></h3>

                                        <p>New Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="newVisitors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php

                                        $visited_rs = Database::search("SELECT * FROM `visitors` WHERE status_id = '2'");
                                        $visited_num = $visited_rs->num_rows;

                                        ?> <h3><?php echo $visited_num; ?></h3>
                                        <p>Visited Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="visitedVisitors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <?php

                                        $visited_rs = Database::search("SELECT * FROM `visitors` WHERE status_id = '1'");
                                        $visited_num = $visited_rs->num_rows;

                                        ?> <h3><?php echo $visited_num; ?></h3>
                                        <p>Not-visited Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="nonVisitors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/sparkline.js"></script>
        <script src="js/jquery.vmap.min.js"></script>
        <script src="js/jquery.vmap.usa.js"></script>
        <script src="js/jquery.knob.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="js/summernote-bs4.min.js"></script>
        <script src="js/jquery.overlayScrollbars.min.js"></script>
        <script src="js/adminlte.js"></script>
        <script src="js/script.js"></script>
        <script src="js/dashboard.js"></script>
    </body>

    </html>
<?php
} else {
    header('location:index.php');
}
?>