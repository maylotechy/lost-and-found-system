<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image">
                            <div class="d-flex justify-content-center align-items-center vh-50" style="margin-top:100px ">
                                <img src="/img/login.png"  class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" id="welcome">Welcome Back!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="username" aria-describedby="emailHelp"
                                               placeholder="Enter username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button id="logInButton"   type="button"  class="btn btn-primary btn-block" onclick="Login()">Log In</button>
                                    <hr>

                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="../frontend/user_registration.php"> Need an account? Sign up here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>
<script src="/scripts/sweetalert.js"></script>
<script src="/plugins/toastr/toastr.min.js"></script>
<script>
        function Login(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        $.ajax({
        type: "POST",
        url: '/backend/login-backend.php',
        data: {
        username: username,
        password: password
    },
        success: function(data) {
        const obj = JSON.parse(data);
        if(obj.response == "success")
    {
        swal({
        title: "Success",
        text: obj.message,
        icon: "success",
    });
        window.setTimeout(function() {
        window.location.href = "user-homepage.php";

        }, 2000);
    }else
    {
        swal({
        title: "Failed",
        text: obj.message,
        icon: "error",
    });
    }
    },
        error: function(xhr, textStatus, errorThrown) {
        alert("Error");
    }
    });
        return false;
    }
</script>


</body>

</html>
