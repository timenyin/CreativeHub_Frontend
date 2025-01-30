<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Terms & Services </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - Terns & Services">

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
    <?php include('includes/sub_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Banner START -->
        <section class="position-relative">

            <!-- SVG decoration -->
            <figure class="position-absolute top-50 end-0 translate-middle-y mt-n8">
                <svg class="rtl-flip" width="1360.5px" height="793px" viewBox="0 0 1360.5 793" style="enable-background:new 0 0 1360.5 793;" xml:space="preserve">
                    <path class="fill-primary opacity-1" d="M33.5,766.3c75.3-24.2,124.5-20.3,155.2-62.8c35.4-49,53.1-184.7,138-191.2s100.9,55.6,208.8-21.2 s44.5-134.3,166.4-174.9c121.8-40.6,177,80.1,279.6,36s122.1-248.4,178.8-290.9c49.3-37,171.2-56.7,200.2-61.1v793H33.5 C33.5,793-41.9,790.4,33.5,766.3z" />
                </svg>
            </figure>

            <div class="container position-relative mt-0 mt-sm-5 pt-5">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <!-- Title -->
                        <h1 class="mb-3">CreativeHub's <em class="text-warning">Legal</em> Portal</h1>
                        <h6 class="mb-3">Everything you ought to read but don't want to</h6>
                    </div>
                    <div class="col-md-7">
                        <!-- Image -->
                        <img src="assets/images/element/05.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- Category START -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row g-4 text-center">
                            <p class="mb-0">Choose a category to quickly find the help you need</p>
                            <!-- Category item -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-body card-border-hover bg-purple bg-opacity-15 p-0">
                                    <a href="privacy-policy.php" class="py-5">
                                        <h2><i class="bi bi-file-earmark-medical"></i></h2>
                                        <h6 class="mb-0">Terms of Service</h6>
                                        <p class="px-3 mt-4">Terms and conditions that users accept when using our
                                            platforms

                                        </p>
                                    </a>
                                </div>
                            </div>


                            <!-- Category item -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-body card-border-hover  bg-opacity-20 p-0">
                                    <a href="privacy-policy.php" class="py-5">
                                        <h2><i class="bi bi-patch-check-fill"></i></h2>
                                        <h6 class="mb-0">CreativeHub Pro Terms of Service</h6>
                                        <p class="px-3">Terms and conditions that customers accept when using
                                            our CreativeHub Pro platforms</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Category item -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-body card-border-hover bg-purple bg-opacity-15 p-0">
                                    <a href="privacy-policy.php" class="py-5">
                                        <h2><i class="bi bi-shield-lock-fill"></i></h2>
                                        <h6 class="mb-0">Privacy Policy</h6>
                                        <p class="px-3 mt-4">The personal data we gather from users and our methods
                                            of using it
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <!-- Category item -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-body card-border-hover  bg-opacity-20 p-0">
                                    <a href="privacy-policy.php" class="py-5">
                                        <h2><i class="bi bi-house-add-fill"></i></h2>
                                        <h6 class="mb-0">CreativeHub Partnerships</h6>
                                        <p class="px-3 mt-4">Find your perfect match on the top global freelance
                                            marketplace</p>
                                    </a>
                                </div>
                            </div>


                        </div> <!-- Row END -->
                    </div>
                </div>
            </div>
            <!-- Category END -->
        </section>
        <!-- =======================
Main Banner END -->



        <!-- =======================
About START -->
        <section class="pb-0 pb-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/06.svg" class="position-relative" alt="">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>Legal Terms</h2>
                        <p class="mb-2">The terms that govern the use of our platform
                            Unique terms of service for each CreativeHub product and program</p>
                        <!-- Info list -->
                        <ul class="list-group list-group-borderless mb-2">
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Trademark
                                    Infringement</p>
                            </li>
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Information Collection</p>
                            </li>
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Repeat
                                    Infringers</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Copyright
                                    Violation
                                </p>
                            </li>

                        </ul>
                        <!-- Button -->
                        <a href="property-claims.phpp" class="btn btn-primary-soft mb-0">More
                            Details</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About END -->

        <!-- =======================
About2 START -->
        <section class="pb-0 pb-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>Privacy Policy</h2>
                        <p class="mb-2">How we protect our users’ privacy</p>
                        <!-- Info list -->
                        <ul class="list-group list-group-borderless mb-2">
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Cookie
                                    Policy</p>
                            </li>
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Privacy
                                    Policy</p>
                            </li>

                        </ul>
                        <!-- Button -->
                        <a href="privacy-policy.php" class="btn btn-primary-soft mb-0">More
                            Details</a>
                    </div>
                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/07.svg" class="position-relative" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About-2 END -->


        <!-- =======================
About3 START -->
        <section class="pb-0 pb-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">

                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/31.svg" class="position-relative" alt="">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>Personal Information</h2>
                        <p class="mb-2"> We generally follow the guideline that personal data should only be retained
                            for as
                            long as necessary to fulfill the purposes for which it was obtained. We may,
                            however, keep your personal information on file for longer periods of time in
                            specific situations. Personal data will be kept on file for the following reasons:</p>
                        <!-- Info list -->
                        <ul class="list-group list-group-borderless mb-2">

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Admin
                                    Policy</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Account
                                    members </p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Closure
                                    and disabling of accounts</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Ownership
                                    and limitations</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Proprietary Restrictions </p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Disclaimer of Warranties</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Limitation on Liability</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Confidentiality</p>
                            </li>

                        </ul>
                        <!-- Button -->
                        <a href="privacy-policy.php" class="btn btn-primary-soft mb-0">More
                            Details</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
About-3 END -->


        <!-- =======================
About2 START -->
        <section class="pb-0 pb-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>CreativeHub Partnerships</h2>
                        <p class="mb-2">Embark on a connection that is ideal for you and the top freelance marketplace
                            for digital services worldwide.</p>
                        <!-- Info list -->
                        <ul class="list-group list-group-borderless mb-2">
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Affiliate
                                    program
                            </li>
                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Creator
                                    Network</p>
                            </li>

                            <li class="list-group-item d-flex align-items-center px-0">
                                <p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i>Referral
                                    program</p>
                            </li>

                        </ul>
                        <!-- Button -->
                        <a href="partnerships.php" class="btn btn-primary-soft mb-0">More
                            Details</a>
                    </div>
                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/32.svg" class="position-relative" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About-2 END -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- ======= Footer START -->
    <?php include('includes/footer.php'); ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>