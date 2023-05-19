<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>

    <link href="../resources/logo.png" rel="icon" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

</head>

<body>
    <div class="box ">
        <span>
            <div class="form col-12 d-block" id="signin">
                <a class="close " href="../home.php">&times;</a>

                <h2 class="col-12">Welcome</h2>
                <div class="input-group col-12">
                    <input type="text" name="loginUser" id="loginUser" required>
                    <label for="loginUser">UserName</label>
                </div>
                <div class="input-group col-12">
                    <input type="password" name="loginPassword" id="loginPassword" required>
                    <label for="loginPassword">Password</label>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="#forgot-pw" class="forgot-pw col-6 mt-2" onclick="changeView(); ">Forgot Password?</a>
                        <input type="submit" value="Login" class="submit-btn col-6" onclick="loginAdmin();">

                    </div>
                </div>

            </div>

            <div class="form d-none col-12" id="forgot-pw">
                <a class="close " onclick="changeView();">&times;</a>
                <h2 class="col-12">Reset Password</h2>
                <div class="input-group col-12">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <Button  class="submit-btn col-12 fw-bold" onclick="forgotPassword();">Submit</Button>
</div>
        </span>

        <!-- Modal -->
        <div class="modal" tabindex="-1" id="forgotAdminpw">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">
                                    <p class="form-label text-dark">New Password</p>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="new1">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <p class="form-label">Re-type Password</p>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="new2">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <p class="form-label">Verification Code</p>
                                    <input type="text" class="form-control" id="vcode" />
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary col-4" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary col-4" onclick="resetPassword();">Reset Password</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->


    </div>
    <script src="js/admin.js"></script>
</body>

</html>