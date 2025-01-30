<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Purchase</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Purchase || Purchase Layout ">

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

                        <!-- Billing history START -->
                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="mb-0">Billing history</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Student list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Date</th>
                                                <th scope="col" class="border-0">Purchased Method</th>
                                                <th scope="col" class="border-0">Payment Process</th>
                                                <th scope="col" class="border-0">Amount</th>
                                                <th scope="col" class="border-0 rounded-end">Action</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody>
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Date item -->
                                                <td>4/2/2023</td>

                                                <!-- Title item -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Proposal Purchased from Shopping
                                                        Balance</h6>
                                                </td>

                                                <!-- Payment method item -->
                                                <td><img src="assets/images/client/paymentlogo.svg" class="h-40px"
                                                        alt=""></td>


                                                <!-- total item -->
                                                <td class="text-success">$350</td>

                                                <!-- Action item -->
                                                <td>
                                                    <a href="order_details.php?order_id=" target="blank"
                                                        class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="view proposal"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Date item -->
                                                <td>10/1/2023</td>

                                                <!-- Title item -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Proposal Purchased from Credit Card /
                                                        Stripe</h6>
                                                </td>

                                                <!-- Payment method item -->
                                                <td><img src="assets/images/client/mastercard.svg" class="h-40px"
                                                        alt=""><span class="ms-2">****2588</span></td>



                                                <!-- total item -->
                                                <td class="text-success">$242</td>

                                                <!-- Action item -->
                                                <td>
                                                    <a href="order_details.php?order_id=" target="blank"
                                                        class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="view proposal"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Date item -->
                                                <td>21/1/2023</td>

                                                <!-- Title item -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Proposal Purchased from Paypal</h6>
                                                </td>

                                                <!-- Payment method item -->
                                                <td><img src="assets/images/client/paypal.svg" class="w-80px" alt="">
                                                </td>



                                                <!-- total item -->
                                                <td class="text-success">$576</td>

                                                <!-- Action item -->
                                                <td>
                                                    <a href="order_details.php?order_id=" target="blank"
                                                        class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="view proposal"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Table item -->
                                            <tr>
                                                <!-- Date item -->
                                                <td>18/1/2023</td>

                                                <!-- Title item -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0">Proposal Purchased from Credit Card /
                                                        Stripe</h6>
                                                </td>

                                                <!-- Payment method item -->
                                                <td><img src="assets/images/client/mastercard.svg" class="h-40px"
                                                        alt=""><span class="ms-2">****2588</span></td>


                                                <!-- total item -->
                                                <td class="text-danger">-$425</td>

                                                <!-- Action item -->
                                                <td>
                                                    <a href="order_details.php?order_id=" target="blank"
                                                        class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="view proposal"><i class="bi bi-eye"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Student list table END -->
                            </div>
                            <!-- Card body START -->
                        </div>
                        <!-- Billing history END -->

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
    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>