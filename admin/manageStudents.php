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
        <title>Kids PreSchool Enrollment System | Manage Students</title>

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
                                <h1>Manage Students</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Manage Students</li>
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
                                            <h3 class="card-title">Students Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Student Name</th>
                                                        <th>Parent Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile Number</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $student_rs = Database::search("SELECT * FROM `student` INNER JOIN `parent` ON student.parent_id=parent.pid");
                                                    $students_num = $student_rs->num_rows;

                                                    for ($x = 0; $students_num > $x; $x++) {
                                                        $student_data = $student_rs->fetch_assoc();
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $x + '1'; ?></td>
                                                            <td><?php echo $student_data['sname']; ?></td>
                                                            <td><?php echo $student_data['fatherName']; ?></td>
                                                            <td><?php echo $student_data['email']; ?></td>
                                                            <td><?php echo $student_data['mobile']; ?></td>
                                                            <th>
                                                                <a href="editStudents.php?id=<?php echo $student_data["sid"]; ?>" title="Edit Student Details"> <i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                <a onclick="deleteStudent('<?php echo $student_data['sid']; ?>')" style="color:red;" title="Delete this record"><i class="fa fa-trash" aria-hidden="true"></i> </a>
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


        </script>
    </body>

    </html>
<?php
} else {
    header('location:../home.php');
}
?>