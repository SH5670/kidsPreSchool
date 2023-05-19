<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Classes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="resources/logo.png" rel="icon" />

</head>

<body>
    <?php
    include_once('header.php');
    require "connection.php";
    ?>


    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Classes</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-decoration-none text-primary fw-bold"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item text-decoration-none text-primary fw-bold"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white fw-bold active" aria-current="page">Classes</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Classes Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">School Classes</h1>

            </div>
            <div class="row g-1">

                <?php

                $classes_rs = Database::search("SELECT * FROM `classType`");
                $classes_num = $classes_rs->num_rows;

                for ($x = 0; $classes_num > $x; $x++) {
                    $classes_data = $classes_rs->fetch_assoc();
                ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp p-4" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle" style="height: 280px;">
                                <img class="img-fluid rounded-circle" src="resources/<?php echo $classes_data["url"]; ?>">
                            </div>
                            <div class="bg-light rounded">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="ms-3">
                                        <h4 class="text-dark mb-1"><?php echo $classes_data["type"]; ?></h6>
                                    </div>

                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small><?php echo $classes_data["age"]; ?> years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Classes:</h6>
                                            <small><?php echo $classes_data["classes"]; ?></small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>25 per class</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Classes End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Schedule a Visit</h1>
                            <div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="gname" placeholder="Guardian Name" required>
                                            <label for="gname">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gmobile" placeholder="Guardian Mobile" required>
                                            <label for="gmail">Guardian Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gemail" placeholder="Guardian Email" required>
                                            <label for="gmail">Guardian Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cname" placeholder="Child Name" required>
                                            <label for="cname">Child Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select class="form-control" id="agegroup" required>
                                                <option value="0">Select</option>
                                                <option value="2 & 1/2 Year">2 & 1/2 Year</option>
                                                <option value="2 & 1/2-4 Year">2 & 1/2-4 Year</option>
                                                <option value="4-5 Year">4-5 Year</option>

                                            </select>
                                            <label for="cage">Child Age</label>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <label class="ms-2 p-1" for="cage">Visit Time</label>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="datetime-local" id="time"  required>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" name="message" required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" onclick="scheduleTime();">Submit</button>
                                    </div>
                                </div>
            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="resources/kid.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- Footer End -->

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>

</body>

</html>