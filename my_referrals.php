<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub- Dashboard </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Dashboard user admin">

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

                                    <!-- certified user -->
                                    <!-- Button -->
                                    <!-- <div class="d-flex align-items-center mt-2 mt-md-0 mx-3">
                                        <ul class="list-inline mt-3">
                                           
                                            <li class="list-inline-item">
                                                <input type="radio" class="btn-check" name="options" id="option1"
                                                    checked="">
                                                <label class="btn btn-success-soft-check" for="option1">
                                                    <span class="mb-2 h6 fw-light">creativeHub's Choice</span>
                                                   
                                                    <span class="d-flex align-items-center">
                                                        <span class="mb-0 h5 me-2 text-success">Certified
                                                        </span>
                                                        <span
                                                            class="text-decoration-line-through fs-6 mb-0 me-2">CON</span>
                                                        <span class="badge  mb-0"> <img
                                                                src="assets/images/client/award.svg" alt=""
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work."
                                                                data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div> -->

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
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0 text-purple">Manger your Referral </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="card mb-3 border-1">
                        <div class="card-body">
                            <p class="dash_col_head-main-2">
                                For each unique member you refer that signs up, you will get
                                <span class="fw-bold text-purple">10%</span>
                                added to your account balance once it is approved by us.
                            </p>
                            <h4 class="referrals_link-border">
                                <span class="ref-link-main">Your Unique Referral Link Is:</span>
                                <mark class="ref-link-sub h6"
                                    id="referralLink">http://localhost/freelance?referall=788886667</mark>
                                <button
                                    class="btn btn-sm btn-purple float-end d-lg-block d-md-block d-none me-1 mb-1 mb-md-0"
                                    id="copyButton" onclick="copyToClipboard()">
                                    <i class="bi bi-copy" id="copyIcon"></i> <span id="copyText">copy-link</span>
                                </button>
                            </h4>
                            <p class="dash_col_head-main-2 text-danger">
                                <span class="text-purple">Note:</span>
                                If we decide a referral is fraud, it will be declined and you will not receive anything.
                            </p>
                        </div>
                    </div>
                    <!-- Left sidebar START -->
                    <?php include('includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <!-- payment cards -->
                        <div class="row g-4 mb-4">
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-purple bg-opacity-10 h-100 p-3 rounded-3">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Balance </h6>
                                        <span class="badge bg-purple bg-opacity-10 text-purple ms-2 mb-0">Orders
                                            Approved: <span class="small h5">23</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="mb-2 mt-2">200</h2>
                                    </div>
                                    <button class="btn btn-sm btn-purple rounded-5  mb-0 disabled">
                                        Earned Referral</button>
                                </div>
                            </div>
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-success bg-opacity-10 p-3 rounded-3 h-100">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Balance</h6>
                                        <span class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">Orders
                                            Pending: <span class="small h5">8</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="mb-2 mt-2">180</h2>
                                    </div>
                                    <button class="btn btn-sm btn-success rounded-5  mb-0 disabled">
                                        Pending Referral</button>
                                </div>
                            </div>
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-danger bg-opacity-10 p-3 rounded-3 h-100">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Balance</h6>
                                        <span class="badge bg-danger bg-opacity-10 text-danger ms-2 mb-0">Orders
                                            Declined: <span class="small h5">3</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="mb-2 mt-2">80</h2>
                                    </div>
                                    <button class="btn btn-sm btn-danger rounded-5  mb-0 disabled">
                                        Declined Referral</button>
                                </div>
                            </div>
                        </div>
                        <!-- End of payment card  -->

                        <!-- payment table details -->
                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="mb-0">Payouts</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Payout list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Username</th>
                                                <th scope="col" class="border-0">Your Commission</th>
                                                <th scope="col" class="border-0">Status</th>
                                                <th scope="col" class="border-0 rounded-end">Signup Date</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body START -->
                                        <tbody>
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Matt Law</h6>
                                                </td>

                                                <!-- Table data -->
                                                <td>$86.00
                                                    <!-- Drop down with id -->
                                                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare">
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Commission</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>
                                                        <!-- Divider -->

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="me-4 small">Us royalty withholding</span>
                                                                <span class="text-danger small">-$0.00</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Earning</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <span
                                                        class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                                </td>

                                                <!-- Table data -->
                                                <td>18/1/2023</td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Lori Stevens</h6>
                                                </td>

                                                <!-- Table data -->
                                                <td>$180.00
                                                    <!-- Drop down with id -->
                                                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare2"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare2">
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Commission</span>
                                                                <span class="h6 mb-0 small">$180</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>
                                                        <!-- Divider -->

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="me-4 small">Us royalty withholding</span>
                                                                <span class="text-danger small">-$0.00</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Earning</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <span class="badge bg-danger bg-opacity-10 text-danger">Cancelled
                                                    </span>
                                                </td>

                                                <!-- Table data -->
                                                <td>22/1/2023</td>
                                            </tr>


                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <!-- Title -->
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Bennet Rogues</h6>
                                                </td>

                                                <!-- Table data -->
                                                <td>$3.00
                                                    <!-- Drop down with id -->
                                                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare4"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare4">
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Commission</span>
                                                                <span class="h6 mb-0 small">$3.00</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>
                                                        <!-- Divider -->

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="me-4 small">Us royalty withholding</span>
                                                                <span class="text-danger small">-$0.00</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>

                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Earning</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <span
                                                        class="badge bg-orange bg-opacity-10 text-orange">Pending</span>
                                                </td>

                                                <!-- Table data -->
                                                <td>12/1/2023</td>
                                            </tr>
                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Payout list table END -->

                            </div>
                            <!-- Card body START -->
                        </div>
                        <!-- End of payment table details  -->



                    </div>
                    <!-- End of payment card -->

                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

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
    <!-- Vendors -->
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>


</body>

</html>