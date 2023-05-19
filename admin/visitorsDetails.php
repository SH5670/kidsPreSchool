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
                                <h1>New Visitors</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Visitor Details</li>
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
                                            <h3 class="card-title">Visitor Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">

                                                <tbody>
                                                    <?php
                                                    $visitors_rs = Database::search("SELECT * FROM `visitors` 
                                                    INNER JOIN `status` ON status.sid=visitors.status_id WHERE id='" . $_GET["id"] . "'");
                                                    $visitors_data = $visitors_rs->fetch_assoc();
                                                    ?>

                                                    <tr>
                                                        <th>Gurdian Name</th>
                                                        <td><?php echo $visitors_data['guardianName'] ?></td>
                                                        <th>Gurdain Email</th>
                                                        <td> <?php echo $visitors_data['guardianEmail'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Child Name</th>
                                                        <td><?php echo $visitors_data['childName'] ?></td>
                                                        <th>Child Age</th>
                                                        <td><?php echo $visitors_data['age'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Visit Time</th>
                                                        <td><?php echo $visitors_data['date_time'] ?></td>

                                                    </tr>

                                                    <?php if ($visitors_data['status_id'] != '1') : ?>
                                                        <tr>
                                                            <th>Visit Status</th>
                                                            <td><?php echo $visitors_data['state'] ?></td>

                                                        </tr>

                                                        <tr>
                                                            <th>Official Remark</th>
                                                            <td colspan="3"><?php echo $visitors_data['message'] ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <?php if ($visitors_data['status_id'] == '1') : ?>
                                                        <tr>
                                                            <td colspan="4" style="text-align:center;">
                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Take Action</button>
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


        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Visitor Satus</h4>
                    </div>
                    <div class="modal-body">
                        <div>

                            <p><select class="form-control" name="status" id="state" required>
                                    <option value="">Select Visitor Status</option>
                                    <option value="2">Visited</option>
                                    <option value="3">Not Visited</option>

                                </select></p>
                            <p><textarea class="form-control" name="officialremak" placeholder="Official Remark" id="remarks" rows="5" required></textarea></p>
                            <input type="submit" class="btn btn-primary" name="submit" value="update" onclick="updateVistors(<?php echo $visitors_data['id']; ?>);">

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