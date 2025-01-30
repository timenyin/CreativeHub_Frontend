<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - consumer & services</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - consumer & services">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- google recaptcha --------- -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <?php include('includes/header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
Page Banner START -->
        <section class="bg-primary bg-opacity-10">
            <div class="container">
                <div class="row">
                    <!-- Content START -->
                    <div class="col-lg-8 mx-auto text-center">
                        <!-- Title -->
                        <h1 class="display-6">Search Solution. Get Support</h1>
                        <p class="mb-0">If you have any questions, please feel free to contact us, Our customer service
                            center is working for you 24/7.</p>
                    </div>
                    <!-- Content END -->

                    <!-- Image -->
                    <div class="col-12 mt-6">
                        <img src="assets/images/element/help-center.svg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Recommended topics START -->
        <section>
            <div class="container">
                <!-- Titles -->
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-center mb-4">Recommended Topics</h2>
                    </div>
                </div>

                <!-- Row START -->
                <div class="row g-4">
                    <div class="col-md-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card bg-light h-100">
                            <!-- Title -->
                            <div class="card-header bg-light pb-0 border-0">
                                <i class="bi bi-emoji-smile fs-1 text-success"></i>
                                <h5 class="card-title mb-0 mt-2">Get started </h5>
                            </div>
                            <!-- List -->
                            <div class="card-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Gulp and
                                            Customization</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Color Scheme and
                                            Logo Settings</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Dark mode, RTL
                                            Version and Lazy Load</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Sources, Credits
                                            and Changelog</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Updates and
                                            Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card bg-light h-100">
                            <!-- Title -->
                            <div class="card-header bg-light pb-0 border-0">
                                <i class="bi bi-layers fs-1 text-warning"></i>
                                <h5 class="card-title mb-0 mt-2">Account Setup</h5>
                            </div>
                            <!-- List -->
                            <div class="card-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Connecting to your
                                            Account</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Edit your profile
                                            information</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Connecting to
                                            other Social Media Accounts</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Adding your
                                            profile picture</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Describing your
                                            store</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card bg-light h-100">
                            <!-- Title -->
                            <div class="card-header bg-light pb-0 border-0">
                                <i class="bi bi-info-circle fs-1 text-orange"></i>
                                <h5 class="card-title mb-0 mt-2">Other Topics </h5>
                            </div>
                            <!-- List -->
                            <div class="card-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Security &amp;
                                            Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Author, Publisher
                                            &amp; Admin Guides</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Pricing plans</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Sales Tax &amp;
                                            Regulatory Fees</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 me-2"></i>Promotions &amp;
                                            Deals</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <!-- Card START -->
                        <div class="card bg-light h-100">
                            <!-- Title START -->
                            <div class="card-header bg-light pb-0 border-0">
                                <i class="bi bi-house fs-1 text-purple"></i>
                                <h5 class="card-title mb-0 mt-2">Advanced Usage </h5>
                            </div>
                            <!-- List -->
                            <div class="card-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 fa-fw me-2"></i>Admin &amp;
                                            Billing</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 fa-fw me-2"></i>Become a
                                            Pro</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 fa-fw me-2"></i>Mobile
                                            application</a></li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 fa-fw me-2"></i>Guide</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link d-flex" href="help-center-detail.html"><i class="fas fa-angle-right text-primary pt-1 fa-fw me-2"></i>Promotions
                                            &amp; Deals</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Recommended topics END -->


        <!-- ===========FROM SUBMTION ======================= -->
        <div class="container">
            <!-- container Starts -->

            <!-- Top alert START -->
            <div class="container my-3">
                <div class="alert alert-info alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2" role="alert">
                    <div>
                        <!-- Avatar -->
                        <div class="avatar avatar-xs me-2">
                            <img class="avatar-img rounded-circle" src="assets/images/plan_logo.png" alt="avatar">
                        </div>
                        <!-- Info -->
                        Waring! You can not submits a support request, without logging into this website <a href="sign-in.php" class="alert-link">Join Now</a>
                    </div>
                    <button type="button" class="btn btn-link text-primary-hover mb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
            <!-- Top alert END -->


            <div class="row">
                <!--- row Starts --->
                <div class="col-md-12">
                    <!--- col-md-12 Starts -->
                    <div class="card">
                        <!-- card Starts -->
                        <div class="card-header text-center ">
                            <!--- card-header text-center  Starts --->
                            <h3> Submit A Request </h3>
                            <p class="">
                                If you have any questions, pease feel free to contact us, Our customer service center is
                                working for you 24/7.
                            </p>
                        </div>
                        <!--- card-header text-center Ends --->
                        <div class="card-body">
                            <!-- card-body Starts -->
                            <!--- center Starts --->
                            <form class="col-md-8 contact-form mx-auto" action="consumer&services.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="enquiryType" class="form-label">Select Enquiry Type</label>
                                    <select id="enquiryType" name="enquiry_type" class="form-select select_tag" required>
                                        <option value="" url="consumer&services.php"> Select Enquiry </option>
                                        <option value="1" url="consumer&services.php?enquiry_id"> Order Support
                                        </option>
                                        <option value="2" url="consumer&services.php?enquiry_id"> Review Removal
                                        </option>
                                        <option value="3" url="consumer&services.php?enquiry_id"> Account Support
                                        </option>
                                        <option value="4" url="consumer&services.php?enquiry_id"> Report A Bug </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" rows="6" name="message" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="orderNumber" class="form-label">Order Number *</label>
                                    <input type="text" class="form-control" id="orderNumber" name="order_number" required>
                                </div>

                                <div class="mb-3">
                                    <label for="orderRule" class="form-label">Order Rule *</label>
                                    <select id="orderRule" name="order_rule" class="form-select" required>
                                        <option value="" disabled selected>Select Order Rule</option>
                                        <option>Buyer</option>
                                        <option>Seller</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="attachment" class="form-label">Attachment</label>
                                    <input type="file" class="form-control" id="attachment" name="file">
                                </div>

                                <div class="form-group">
                                    <!--- form-group Starts -->
                                    <label> Please Verify That You Are Human </label>
                                    <div class="g-recaptcha" data-sitekey="6LcRbMgpAAAAAOI2PzP7zc_52MDhfs5R_6ukB7JX">
                                    </div>
                                </div>
                                <!--- form-group Ends -->

                                <div class="text-center mt-4">
                                    <button type="submit" name="submit" class="btn btn-info w-100 mb-0">
                                        <i class="fa fa-paper-plane"></i> Report Message
                                    </button>
                                </div>
                            </form>

                            <!--- col-md-8 contact-form Ends -->

                            <!--- center Ends --->
                        </div><!-- card-body Ends -->
                    </div><!-- card Ends -->
                </div>
                <!--- col-md-12 Ends -->
            </div>
            <!--- row Ends --->
        </div><!-- container Ends -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

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
        $(document).ready(function() {

            $(".select_tag").change(function() {

                url = $(".select_tag option:selected").attr('url');


                window.location.href = url;


            });


        });
    </script>

</body>

</html>