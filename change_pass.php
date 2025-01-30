<!DOCTYPE html>
<html lang="en">


<head>
    <title>Recovery your CreativeHub Password</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Recovery your CreativeHub Password">
    <meta name="keywords"
        content="CreativeHub, Forgot, forgot-password, login, sign up, signup, innovative solutions, creative platform">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Dark mode -->
    <script>
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
        if (storedTheme) {
            return storedTheme
        }
        return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
    }

    const setTheme = function(theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
        var el = document.querySelector('.theme-icon-active');
        if (el != 'undefined' && el != null) {
            const showActiveTheme = theme => {
                const activeThemeIcon = document.querySelector('.theme-icon-active use')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                })

                btnToActive.classList.add('active')
                activeThemeIcon.setAttribute('href', svgOfActiveBtn)
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (storedTheme !== 'light' || storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })

            showActiveTheme(getPreferredTheme())

            document.querySelectorAll('[data-bs-theme-value]')
                .forEach(toggle => {
                    toggle.addEventListener('click', () => {
                        const theme = toggle.getAttribute('data-bs-theme-value')
                        localStorage.setItem('theme', theme)
                        setTheme(theme)
                        showActiveTheme(theme)
                    })
                })

        }
    })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <!-- Header START -->
    <?php include('includes/min_header.php') ?>
    <!-- Header END -->
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <div class="text-center">
                                    <h2 class="fw-bold">Discover the perfect freelance service in no time</h2>
                                    <p class="mb-0 h6 fw-light">Hand your project over to a talented freelancer in
                                        minutes,
                                        get long-lasting results.</p>
                                </div>
                            </div>
                            <!-- SVG Image -->
                            <img src="assets/images/element/02.svg" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/08.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/12.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/09.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/11.jpg" alt="avatar"></li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ freelancers are waiting for you, joined us
                                    now it's your turn.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="row login_detalis align-items-center">
                            <!-- row Starts -->

                            <div class=" col-md-12 mt-5 mb-5">
                                <!--- col-md-12 mt-5 mb-5 Starts --->
                                <div class="card change-pass">
                                    <!--- card change-pass Starts -->
                                    <div class="card-header card_header_chg">
                                        <!-- card-header text-center Starts -->
                                        <h3> Dear <span class="text-primary"> Harmony2k</span> Change Password </h3>
                                    </div>
                                    <!-- card-header text-center Ends -->
                                    <div class="card-body  justify-content-center">
                                        <!--- card-body d-flex justify-content-center Starts -->
                                        <form method="post" class="col-md-12">
                                            <!-- form col-md-8 Starts -->

                                            <div class="form-group">
                                                <!-- form-group Starts -->
                                                <label>Enter Your Password</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input_FromCheck input_grp"
                                                            id="basic-addon1">
                                                            <i class="fa fa-check tick1 text-success"></i>
                                                            <i class="fa fa-times cross1 text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" name="new_pass" id="password"
                                                        class="form-control chang_pass_outline" aria-label="Username"
                                                        aria-describedby="basic-addon1" required>

                                                    <!-- input-group-addon Starts -->
                                                    <span class="input-group-text input_grp" id="last-prepend">
                                                        <div id="meter_wrapper">
                                                            <!-- meter_wrapper Starts -->
                                                            <span id="pass_type"></span>
                                                            <div id="meter"></div>
                                                        </div>
                                                        <!-- meter_wrapper Ends -->
                                                    </span>
                                                    <!-- input-group-addon Ends -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- form-group Starts -->
                                                <label>Enter Your New Password Again</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input_FromCheck input_grp"
                                                            id="basic-addon1">
                                                            <i class="fa fa-check tick1 text-success"></i>
                                                            <i class="fa fa-times cross1 text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" name="new_pass_again" id="confirm_password"
                                                        class="form-control chang_pass_outline" required>
                                                </div>
                                                <!--- input-group Ends --->
                                            </div><!-- form-group Ends -->

                                            <div class="text-center">
                                                <!-- text-center Starts -->
                                                <button type="submit" name="submit" class="btn btn-primary"
                                                    style="border-radius:0px">
                                                    <i class="fa fa-wrench mx-1" aria-hidden="true"></i>Change Password
                                                </button>
                                            </div><!-- text-center Ends -->
                                        </form>
                                        <!-- form col-md-8 Ends -->
                                        <!-- form col-md-8 Ends -->
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

    <!--- Password Strength checker code starts  --->
    <script>
    $(document).ready(function() {
        $("#password").keyup(function() {
            check_pass();
        });

    });

    function check_pass() {
        var val = document.getElementById("password").value;
        var meter = document.getElementById("meter");
        var no = 0;
        if (val != "") {

            // If the password length is less than or equal to 6
            if (val.length <= 6) no = 1;

            // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
            if (val.length > 6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(
                    /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))) no = 2;

            // If the password length is greater than 6 and contain alphabet,number,special character respectively
            if (val.length > 6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(
                    /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(
                    /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))) no = 3;

            // If the password length is greater than 6 and must contain alphabets,numbers and special characters
            if (val.length > 6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))
                no = 4;

            if (no == 1) {
                $("#meter").animate({
                    width: '50px'
                }, 300);
                meter.style.backgroundColor = "red";
                document.getElementById("pass_type").innerHTML = "Very Weak";
            }

            if (no == 2) {
                $("#meter").animate({
                    width: '100px'
                }, 300);
                meter.style.backgroundColor = "#F5BCA9";
                document.getElementById("pass_type").innerHTML = "Weak";
            }

            if (no == 3) {
                $("#meter").animate({
                    width: '150px'
                }, 300);
                meter.style.backgroundColor = "#FF8000";
                document.getElementById("pass_type").innerHTML = "Good";
            }

            if (no == 4) {
                $("#meter").animate({
                    width: '200px'
                }, 300);
                meter.style.backgroundColor = "#00FF40";
                document.getElementById("pass_type").innerHTML = "Strong";
            }
        } else {
            meter.style.backgroundColor = "";
            document.getElementById("pass_type").innerHTML = "";
        }

    }
    </script>

    <!--- Password Strength checker code Ends  --->
    <!--- Tick and Cross code starts  --->

    <script>
    $(document).ready(function() {
        $('.tick1').hide();
        $('.cross1').hide();
        $('.tick2').hide();
        $('.cross2').hide();
        $('#confirm_password').focusout(function() {
            var password = $('#password').val();
            var confirmPassword = $('#confirm_password').val();
            if (password == confirmPassword) {
                $('.tick1').show();
                $('.cross1').hide();
                $('.tick2').show();
                $('.cross2').hide();
            } else {

                $('.tick1').hide();
                $('.cross1').show();
                $('.tick2').hide();
                $('.cross2').show();
            }

        });

    });
    </script>
    <!--- Tick and Cross code Ends  --->

    <script>
    $(document).ready(function() {
        if ($(window).width() <= 450) {
            $('#last-prepend').addClass('hidden');
        }
    });
    </script>

</body>

</html>