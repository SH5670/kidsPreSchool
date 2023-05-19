<?php
// Get the current page URL
$currentURL = $_SERVER['REQUEST_URI'];

// Define an array of navigation items with their URLs
$navItems = array(
    'Home' => '/',
    'About' => '/about',
    'Services' => '/services',
    'Contact' => '/contact'
);

// Function to check if a URL matches the current page URL
function isCurrentPage($url)
{
    global $currentURL;
    return ($url === $currentURL);
}
?>
    <div class="container-xxl bg-white p-0 " style="box-shadow: 0px 4px 6px rgba(0, 0, 200, 1);">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 t"><img class="mb-2" src="resources/logo.png" style="height: 48px;" alt=""> Kids PreSchool</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="classes.php" class="nav-item nav-link">Classes</a>
                    <a href="contactUs.php" class="nav-item nav-link">Contact Us</a>
                    <a href="admin/login.php" class="nav-item nav-link">Admin</a>
                </div>
                <a href="visit.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Schedule a Visit<i class="fa fa-arrow-right ms-3"></i></a>
                &nbsp;&nbsp;
                <a href="enroll.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Enroll Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->