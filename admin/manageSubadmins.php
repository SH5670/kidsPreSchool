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
        <title>Kids PreSchool Enrollment System | Manage Sub admin</title>

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
                                <h1>Manage Sub Admins</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="adminDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Manage Sub Admins</li>
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
                                            <h3 class="card-title">Sub Admin Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Username</th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile Number</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $subadmin_rs = Database::search("SELECT * FROM `admin` WHERE adminType = '2'");
                                                    $subadmin_num = $subadmin_rs->num_rows;

                                                    for($x = 0;$subadmin_num>$x;$x++){
                                                        $subadmin_data = $subadmin_rs->fetch_assoc();
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $x+'1'; ?></td>
                                                            <td><?php echo $subadmin_data['userName']; ?></td>
                                                            <td><?php echo $subadmin_data['name']; ?></td>
                                                            <td><?php echo $subadmin_data['email']; ?></td>
                                                            <td><?php echo $subadmin_data['mobile']; ?></td>
                                                            <th>
                                                                <a href="editSubadmins.php?id=<?php echo $subadmin_data["id"]; ?>" title="Edit Sub Admin Details"> <i class="fa fa-edit" aria-hidden="true"></i></a>
                                                                <a onclick="deleteSubadmin('<?php echo $subadmin_data['id']; ?>')" style="color:red;" title="Delete this record" ><i class="fa fa-trash" aria-hidden="true"></i> </a>
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

    </html><?php
        } else {
            header('location:../home.php');
        }
            ?>