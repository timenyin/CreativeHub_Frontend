<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Settings </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Settings || Profile Settings ">

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
    <link rel="stylesheet" type="text/css" href="assets/css/custome.css">

</head>


<body>

    <!-- Header START -->
    <?php include('includes/user_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="pt-0">
            <!-- Main banner background image -->
            <div class="container-fluid px-0">
                <div class="bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <!-- Profile banner START -->
                    <div class="col-12">
                        <div class="card bg-transparent card-body p-0">
                            <div class="row d-flex justify-content-between">
                                <!-- Avatar -->
                                <div class="col-auto mt-4 mt-md-0">
                                    <div class="avatar avatar-xxl mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="assets/images/avatar/01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens <i
                                                class="bi bi-patch-check-fill text-info small"></i>
                                        </h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-2"></i>Positive Ratings : 100%
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-user-graduate text-orange me-2"></i>React Delivery :
                                                June 2024
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fa-solid fa-calendar-day text-secondary me-1"
                                                    aria-hidden="true"></i>Member Since : April 2021</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-center mt-2 mt-md-0">
                                        <ul class="list-inline mt-3">
                                            <!-- Price -->
                                            <li class="list-inline-item">
                                                <input type="radio" class="btn-check" name="options" id="option3"
                                                    checked="">
                                                <label class="btn btn-success-soft-check" for="option3">
                                                    <span class="mb-2 h6 fw-light">creativeHub's Choice</span>
                                                    <!-- Price and discount -->
                                                    <span class="d-flex align-items-center">
                                                        <span class="mb-0 h5 me-2 text-success">VIP</span>
                                                        <span
                                                            class="text-decoration-line-through fs-6 mb-0 me-2">CON</span>
                                                        <span class="badge  mb-0"> <img
                                                                src="assets/images/client/vip-card.svg" alt=""
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work."
                                                                data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profile banner END -->

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Dashboard Menu <i
                                    class="fa-solid fa-arrow-right-long animation-blink" aria-hidden="true"></i></a>
                            <button class="btn btn-blue d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <?php include('includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <!-- Nav Pills for switching between Profile Settings and Account Settings -->
                        <ul class="nav nav-pills mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile_settings" data-bs-toggle="pill">Profile
                                    Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#account_settings" data-bs-toggle="pill">Account Settings</a>
                            </li>
                        </ul>

                        <!-- Tab content START -->
                        <div class="tab-content">
                            <!-- Profile Settings Tab -->
                            <div id="profile_settings" class="tab-pane fade show active custom-active-tab">
                                <?php include("profile_settings.php"); ?>
                            </div>

                            <!-- Account Settings Tab -->
                            <div id="account_settings" class="tab-pane fade">
                                <?php include("account_settings.php"); ?>
                            </div>
                        </div>
                        <!-- Tab content END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- paypal_withdraw_modal modal fade Starts -->
    <div id="paypal_withdraw_modal" class="modal fade" tabindex="-1" aria-labelledby="paypalWithdrawModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <!-- modal-dialog Starts -->
            <div class="modal-content">
                <!-- modal-content Starts -->
                <div class="modal-header border-0">
                    <!-- modal-header Starts -->
                    <h5 class="modal-title pt-3" id="paypalWithdrawModalLabel">Withdraw Revenues to your PayPal Account
                    </h5>
                    <button type="button" class="btn-close d-none d-sm-flex" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- modal-header Ends -->
                <div class="modal-body">
                    <!-- modal-body Starts -->

                    <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2"
                        role="alert">
                        <div>
                            <i class="bi bi-exclamation-octagon-fill me-2"></i>
                            Please provide your PayPal <a href="settings.php?account_settings" class="text-info">account
                                email</a> in order to withdraw
                            revenues to your PayPal account.
                        </div>
                    </div>



                    <p class="dash_col_head-main-2 mt-2 small">
                        Your Revenues Will Be Paid To The PayPal Email Address Account:
                        <strong class="text-success">loristeven@gmail.com</strong>
                    </p>

                    <!-- form Starts -->
                    <form action="paypal_adaptive.php" method="post">

                        <div class="mb-3 row">
                            <!-- form-group row Starts -->
                            <label for="withdrawAmount" class="col-md-5 col-form-label">
                                Enter Amount ($)
                            </label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input type="number" id="withdrawAmount" name="amount"
                                        class="form-control form-control_request-summary" min="5" max="1000"
                                        placeholder="5 Minimum" required>
                                </div>
                            </div>
                        </div>
                        <!-- form-group row Ends -->

                        <div class="row">
                            <!-- form-group row Starts -->
                            <div class="col-md-5 offset-md-7">
                                <input type="submit" name="withdraw" value="Withdraw Amount"
                                    class="btn btn-success btn-sm text-white form-control">
                            </div>
                        </div>
                        <!-- form-group row Ends -->
                    </form>
                    <!-- form Ends -->

                </div>
                <!-- modal-body Ends -->

                <div class="modal-footer border-0">
                    <!-- modal-footer Starts -->
                    <button type="button" class="btn btn-sm btn-info" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- modal-footer Ends -->

            </div>
            <!-- modal-content Ends -->
        </div>
        <!-- modal-dialog Ends -->
    </div>
    <!-- paypal_withdraw_modal modal fade Ends -->


    <!-- =======================
Footer START -->
    <?php include('includes/footer.php') ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>
    <script>
    document.getElementById('uploadfile-1').addEventListener('change', function(event) {
        const file = event.target.files[0]; // Get the selected file

        if (file) {
            // Check if the file is an image
            const fileTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
            if (fileTypes.includes(file.type)) {
                const reader = new FileReader();

                // Once the file is read, display it
                reader.onload = function(e) {
                    document.getElementById('uploadfile-1-preview').src = e.target.result;
                };

                reader.readAsDataURL(file); // Read the file as a data URL for preview

                // Display the image name and type
                const imageInfo = document.getElementById('image-info');
                imageInfo.textContent = `Selected image: ${file.name} (${file.type})`;
            } else {
                alert('Please select a valid image file.');
            }
        }
    });
    </script>

    <script>
    $(document).ready(function() {

        $("#textarea-about").on('input', function() {
            var textarea_about = $(this).val(); // Get the current value of the textarea
            $(".count-about").text(textarea_about.length); // Update the character count
        });

    });
    </script>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to toggle password visibility
        function togglePasswordVisibility(event) {
            // Get the input field associated with the clicked icon
            var inputField = event.target.closest('.input-group').querySelector('input');

            // Toggle the type attribute between 'password' and 'text'
            if (inputField.type === "password") {
                inputField.type = "text";
                event.target.classList.remove('fa-eye');
                event.target.classList.add('fa-eye-slash');
            } else {
                inputField.type = "password";
                event.target.classList.remove('fa-eye-slash');
                event.target.classList.add('fa-eye');
            }
        }

        // Attach click event listener to all eye icons
        var eyeIcons = document.querySelectorAll('.input-group .fa-eye, .input-group .fa-eye-slash');
        eyeIcons.forEach(function(icon) {
            icon.addEventListener('click', togglePasswordVisibility);
        });
    });
    </script>



</body>

</html>