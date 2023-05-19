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
        <title>Kids PreSchool Enrollment System | New Enrollments</title>

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
                                <h1>New Enrollments</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">New Enrollments</li>
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
                                            <h3 class="card-title">Enrollment Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">

                                                <tbody>
                                                    <?php
                                                    $enrol_rs = Database::search("SELECT * FROM `enrollments` 
                                                    INNER JOIN `classType` ON enrollments.classType_id=classType.id WHERE enrollments.eid='" . $_GET["id"] . "'");
                                                    $enrol_data = $enrol_rs->fetch_assoc();
                                                    ?>


                                                    <tr>
                                                        <th>Enrollment Number</th>
                                                        <td colspan="3"><?php echo $enrol_data['id'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Father Name</th>
                                                        <td><?php echo $enrol_data['fatherName'] ?></td>
                                                        <th>Mother Name</th>
                                                        <td> <?php echo $enrol_data['motherName'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Parent Mobile No</th>
                                                        <td><?php echo $enrol_data['mobile'] ?></td>
                                                        <th>Parent Email Id</th>
                                                        <td><?php echo $enrol_data['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Child Name</th>
                                                        <td><?php echo $enrol_data['childName'] ?></td>
                                                        <th>Child Age</th>
                                                        <td><?php echo $enrol_data['age'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Program Enroll For</th>
                                                        <td><?php echo $enrol_data['type'] ?></td>

                                                    </tr>

                                                   

                                                    <?php if ($enrol_data['enrollStatus_id'] != '3') : ?>
                                                       
                                                        <tr>
                                                            <th>Official Remark</th>
                                                            <td colspan="3"><?php echo $enrol_data['message'] ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <?php if ($enrol_data['enrollStatus_id'] == '3') : ?>
                                                        <tr>
                                                            <td colspan="4" style="text-align:center;">
                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#takeAction">Take Action</button>
                                                            </td>
                                                        <?php endif; ?>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>

        </div>


        <div id="takeAction" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Enrollment Satus</h4>
                    </div>
                    <div class="modal-body">
                        <div>

                            <p><select class="form-control" id="status" required>
                                    <option value="">Select Enrollment Status</option>
                                    <option value="1">Accepted</option>
                                    <option value="2">Rejected</option>

                                </select></p>
                            <p><textarea class="form-control" placeholder="Official Remark" rows="5" id="message" required></textarea></p>
                            <Button class="btn btn-primary" onclick="submit(<?php echo $enrol_data['eid']; ?>);">Submit</Button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
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