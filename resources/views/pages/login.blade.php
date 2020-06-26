<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="icon" href="assets/img/favicon.png">

    <title>Login - Flexy - Admin Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/extends-bootstrap.css?{{ time() }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- BEGIN: Icons CSS-->
    <link rel="stylesheet" href="assets/feathericons/feathericons.min.css">
    <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="assets/css/login.css?{{ time() }}">
</head>
<body>
    
    <div class="login-container">
        <div class="login-wrapper bg-white">
            <div class="text-center">
                <img src="assets/img/flexy_text.png" width="150" alt="" />
            </div>
            <div class="mt-5">
                <h4 class="mb-0 orange-1">Login</h4>
                <p class="mt-0"><small>Welcome back, please login into your account</small></p>
            </div>
            <div class="form-login-wrapper">
                <form class="form-login" action="" name="" method="post">
                    <div class="form-group mb-2">
                        <label class="text-small mb-1">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-none"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control border-left-none box-shadow-none border-grey" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-small mb-1">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-none"><i class="icon-lock"></i></span>
                            </div>
                            <input type="password" class="form-control border-left-none box-shadow-none border-grey" placeholder="Password">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-small" for="remember">Remember me</label>
                        </div>
                        <div class="">
                            <a href="#" class="orange-1 text-small">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <button href="dashboard.html" class="btn btn-block btn-shadhow btn-warning text-white relative btn-login">Login <i class='bx bx-right-arrow-alt'></i></button> -->
                        <a href="/dashboard.html" class="btn btn-block btn-shadhow btn-warning text-white relative btn-login">Login <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                    <div class="form-group">
                        <div class="divider-text"><span>Or Login With</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-block btn-google btn-social"><i class='bx bxl-google'></i> Google</a>
                        </div>
                        <div class="col-md-6 mt-2 mt-md-0">
                            <a href="#" class="btn btn-block btn-facebook btn-social"><i class='bx bxl-facebook-square'></i> Facebook</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>