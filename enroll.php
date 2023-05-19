
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Enrollment System </title>
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
    <?php include_once('header.php'); ?>


    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Child Enrollment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Child Enrollment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Start your Child’s Early Education</h1>
                            <div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="fathername" placeholder="Father Name" required>
                                            <label for="gname">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="mothername" placeholder="Mother Name" required>
                                            <label for="gmail">Mother Name</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="mobile" placeholder="Parents Mobile No." required>
                                            <label for="gname">Guardian Mobile No.</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" placeholder="Parents Email" required>
                                            <label for="gmail">Guardian Email</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="address" placeholder="Parents Email" required>
                                            <label for="gmaaddressil">Permenent Address</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cname" placeholder="Child Name" required>
                                            <label for="cname">Child Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select class="form-control" id="gender"required>

                                                <option value="">Select a Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>

                                            </select>
                                            <label for="cage">Gender*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select class="form-control" id="age" required>
                                            <option value="0">Select</option>
                                                <option value="2 & 1/2 Year">2 & 1/2 Year</option>
                                                <option value="2 & 1/2-4 Year">2 & 1/2-4 Year</option>
                                                <option value="4-5 Year">4-5 Year</option>
                                            </select>
                                            <label for="cage">Child Age*</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <select class="form-control" id="enrollprogram" name="erollprogram" required>

                                                <option value="">Select a Program</option>
                                                <option value="1">Lower Nursery</option>
                                                <option value="2">Upper Nursery</option>
                                                <option value="3">Pre Grade</option>

                                            </select>
                                            <label for="cage">Program Enroll For*</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" onclick="enroll();">Submit</button>
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

    <?php include_once('footer.php'); ?>

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