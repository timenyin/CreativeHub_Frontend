<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Cart page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Cart || Select you Orders">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

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
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class=" p-4 text-center rounded-3" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                            <h1 class="m-0">View Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="pt-5">
            <div class="container">

                <div class="row g-4 g-sm-5">
                    <!-- Main content START -->
                    <div class="col-lg-8 mb-4 mb-sm-0">
                        <div class="card card-body p-4 shadow">
                            <!-- Alert -->
                            <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2" role="alert">
                                <div>
                                    <span class="fs-5 me-1">🔥</span>
                                    Get at a limited discount, please checkout within<strong class="text-danger ms-1">6
                                        days and 18 hours</strong>
                                </div>
                                <button type="button" class="btn btn-link mb-0 text-primary-hover text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                            </div>



                            <div class="table-responsive border-0 rounded-3">
                                <!-- Table START -->
                                <table class="table align-middle p-4 mb-0">
                                    <!-- Table head -->
                                    <!-- Table body START -->
                                    <tbody class="border-top-0">
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-lg-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px w-md-80px mb-2 mb-md-0">
                                                        <img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
                                                    </div>
                                                    <!-- Title -->
                                                    <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
                                                        <a href="proposals/proposal.php">I will Building Scalable APIs
                                                            with GraphQL </a>
                                                    </h6>
                                                </div>
                                            </td>

                                            <!-- Amount item -->
                                            <td class="text-center">
                                                <h5 class="text-success mb-0">$350</h5>
                                            </td>

                                            <!-- Action item -->
                                            <td class="d-flex align-items-center justify-content-end" style="margin-top:22px">
                                                <input type="text" name="quantity" class="form-control quantity me-2 focusBtn" data-proposal_id="" value="1" style="width:30%;">
                                                <a href="cart.php?remove_proposal" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="fas fa-fw fa-times"></i></a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-lg-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px w-md-80px mb-2 mb-md-0">
                                                        <img src="assets/images/courses/4by3/10.jpg" class="rounded" alt="">
                                                    </div>
                                                    <!-- Title -->
                                                    <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
                                                        <a href="proposals/proposal.php">I will Building Scalable
                                                            Bootstrap 5 From Scratch </a>
                                                    </h6>
                                                </div>
                                            </td>

                                            <!-- Amount item -->
                                            <td class="text-center">
                                                <h5 class="text-success mb-0">$350</h5>
                                            </td>

                                            <!-- Action item -->
                                            <td class="d-flex align-items-center justify-content-end" style="margin-top:22px">
                                                <input type="text" name="quantity" class="form-control quantity me-2 focusBtn" data-proposal_id="" value="1" style="width:30%;">
                                                <a href="cart.php?remove_proposal" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="fas fa-fw fa-times"></i></a>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Coupon input and button -->
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <a href="main-category.php" class="badge bg-danger bg-opacity-10 text-danger rounded-0 px-3 py-3">
                                        View More Categories
                                    </a>
                                </div>
                                <!-- Update button -->
                                <div class="col-md-6 text-md-end">
                                    <span class="badge bg-success bg-opacity-10 text-success rounded-0 px-3 py-3">
                                        Total Amount: <span class="fw-bold">$443</span>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4">
                        <!-- Card total START -->
                        <div class="card card-body p-4 shadow">
                            <!-- Title -->
                            <h4 class="mb-3">Cart Total</h4>

                            <!-- Price and detail -->
                            <ul class="list-group list-group-borderless mb-2">
                                <li class="list-group-item px-0 d-flex justify-content-between my-2">
                                    <span class="h6 fw-light mb-0">Original Price</span>
                                    <span class="h6 fw-light mb-0 fw-bold">$500</span>
                                </li>
                                <hr class="bg-success border">
                                <li class="list-group list-group-borderless mb-2">
                                    <form action="post">
                                        <div class="input-group">
                                            <input type="text" name="code" class="form-control form-control focusBtn apply-disabled" placeholder="COUPON CODE">
                                            <button type="submit" name="coupon_submit" class="btn btn-success-soft">Apply
                                                coupon</button>
                                        </div>
                                    </form>
                                </li>
                                <hr>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Processing Discount</span>
                                    <span class="text-danger">$20</span>
                                </li>
                                <hr>
                                <li class="list-group-item px-0 d-flex justify-content-between">
                                    <span class="h5 mb-0">Total Fee :</span>
                                    <span class="h5 mb-0">$520</span>
                                </li>
                            </ul>

                            <!-- Button -->
                            <div class="d-grid">
                                <a href="cart_payment_options.php" class="btn btn-lg btn-success">Proceed to
                                    Checkout</a>
                            </div>

                            <!-- Content -->
                            <p class="small mb-0 mt-2 text-center">By completing your purchase, you agree to these <a href="terms-of-service.php"><strong>Terms of
                                        Service</strong></a></p>

                        </div>
                        <!-- Card total END -->
                    </div>
                    <!-- Right sidebar END -->

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
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>