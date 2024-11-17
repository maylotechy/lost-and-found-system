<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">

        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    <div class="d-flex justify-content-center align-items-center vh-50" style="margin-top:180px ">
                    <img src="/img/user-registratiob.png"  class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4 fw-bold">Create an Account!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="FirstName"
                                           placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="LastName"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="Username"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="InputEmail"
                                       placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="contactNumber"
                                       placeholder="Contact Number">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           id="InputPassword" placeholder="Password">
                                </div>
                                <div id="password-strength-meter"></div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="RepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <input type="checkbox" id="termsCheckbox">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#termsModal">
                                Terms and Conditions
                            </button>
                            <button id="registerButton"  disabled type="button"  class="btn btn-primary btn-block" onclick="Register()">Register</button>

                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="../frontend/login.php">Already have an account? Login!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5
                            class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">
                    <p>Welcome to
                        our Lost and Found web application! By accessing or using our services, you agree to be bound by the following terms and conditions:</p>

                    <h2>1. Use of the Service</h2>
                    <p>You agree to use our service only for lawful purposes and in a manner that does not infringe the rights of, or restrict or inhibit the use  
                        and enjoyment of, the service by any third party.</p>


                    <h2>2. User Accounts</h2>
                    <p>You are responsible for maintaining the confidentiality of your account and password and for restricting access to your  
                        computer. You agree to accept responsibility for all activities that occur under your  
                        account or password.</p>

                    <h2>3. Reporting Items</h2>
                    <ol>
                        <li>Provide accurate and complete information about the lost or found item.</li>
                        <li>Do not report any items that are illegal or prohibited.</li>
                        <li>Respect the privacy of others when reporting items.</li>
                    </ol>

                    <h2>4. Disclaimer</h2>
                    <p>We strive to maintain accurate and up-to-date information on our platform, but we make no warranties or representations as to the accuracy, completeness, or reliability of any information provided  
                        through the service.</p>

                    <h2>5. Limitation of Liability</h2>
                    <p>In no event shall we be liable for any direct, indirect, incidental, special, or consequential damages arising out of or  
                        in any way connected with the use of our service.</p>  


                    <h2>6. Changes to Terms</h2>
                    <p>We reserve the right to modify these terms and conditions at any time. We will post any changes on this page and update the "Last Updated" date.</p>

                    <p>Last Updated: November 13, 2024</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>
<script src="/scripts/sweetalert.js"></script>
<script src="/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript" src="/scripts/passwordchecker.js"></script>
<script>
    $(document).ready(function() {
        $("#termsCheckbox").change(function() {
            if (this.checked) {
                $("#registerButton").prop("disabled", false);
            } else {
                $("#registerButton").prop("disabled", true);
            }
        });


        // Check the checkbox when the modal is closed
        $('#termsModal').on('hidden.bs.modal', function () {
            $('#termsCheckbox').prop('checked', true);

            // Enable the register button if the checkbox is checked
            if ($('#termsCheckbox').is(':checked')) {
                $("#registerButton").prop("disabled", false);
            }
        });
    });
</script>


<script>
    function Register(){

        var username = document.getElementById("Username").value;
        var firstname = document.getElementById("FirstName").value;
        var lastname = document.getElementById("LastName").value;
        var email = document.getElementById("InputEmail").value;
        var password = document.getElementById("InputPassword").value;
        var contact_number = document.getElementById("contactNumber").value;
        var re_enter_pass = document.getElementById("RepeatPassword").value;
        var created_at = new Date().toISOString();
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var passwordPattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
        if (!username || !firstname || !lastname || !email || !password || !contact_number) {
            swal({
                title: "Error",
                text: "Please fill in all fields.",
                icon: "error",
            });
            return false; // Prevent form submission
        }
        var passwordInput = document.getElementById('InputPassword');
        var meter = document.getElementById('password-strength-meter');

        /*passwordInput.addEventListener('input', function() {
            var password_ = password.value;
            var result = zxcvbn(password_); // Assuming you're using zxcvbn

            // Basic visual feedback (customize as needed)
            meter.innerHTML = "Strength: " + result.score;

            // Add more detailed feedback and styling based on result.score
            if (result.score < 2) {
                meter.style.color = "red";
            } else if (result.score < 3) {
                meter.style.color = "orange";
            } else {
                meter.style.color = "green";
            }
        });*/
        if(password != re_enter_pass){
            swal({
                title: "Error",
                text: "Password does not match.",
                icon: "error",
            });
        }
        if (!passwordPattern.test(password)) {
            swal({
                title: "Error",
                text: "Password must be at least 8 characters long and contain at least one number and one symbol",
                icon: "error",
            });
            return false;
        }
        if (!emailPattern.test(email)) {
            swal({
                title: "Error",
                text: "Please enter a valid email.",
                icon: "error",
            });
        }

        $.ajax({
                type: "POST",
                url: '/backend/registration-backend.php',
                data: {
                    username: username,
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    password: password,
                    contact_number: contact_number,
                    created_at:created_at
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
