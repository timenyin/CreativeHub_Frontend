<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Checkout page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Checkout || order your product Now">


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- checkout strip js -->
    <script src="https://checkout.stripe.com/checkout.js"></script>

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">




</head>

<body>

    <!-- Header START -->
    <?php include("includes/header.php"); ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class=" p-4 text-center rounded-3"
                            style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                            <h1 class="m-0">Checkout</h1>
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
                    <div class="col-xl-8  mb-sm-0">
                        <!-- Payments Process -->
                        <div class="card card-body shadow p-4">
                            <!-- Alert -->
                            <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2"
                                role="alert">
                                <div>
                                    <i class="bi bi-exclamation-octagon-fill me-2"></i>
                                    Your are spending from your Deposit Account ? <a href="dashboard.php"
                                        class="text-reset btn-link mb-0 fw-bold">View Dashboard </a>
                                </div>
                                <button type="button" class="btn btn-link mb-0 text-primary-hover text-end"
                                    data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                            </div>

                            <!-- Personal payments method  -->
                            <div class="col-md-12 mb-3">
                                <!--- col-md-12 mb-3 Starts --->
                                <div class="card propsal_header_main  payment-options">
                                    <!--- Personal payment options Starts --->
                                    <div class="card-header">
                                        <!--- card-header Starts --->
                                        <h4> Available Shopping Balance </h4>
                                    </div>
                                    <!--- card-body Starts --->
                                    <div class="card-body">
                                        <div class="col-md-12 text-center text-md-start">
                                            <!-- content details  -->
                                            <div class="card card-body border">
                                                <div class="d-xl-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="method"
                                                            id="shopping-balance" checked>

                                                    </div>
                                                    <ul class="list-inline vstack gap-4 flex-wrap mt-4 ms-3">
                                                        <!-- Item -->
                                                        <li class="list-inline-item  me-0">
                                                            <div
                                                                class="d-sm-flex justify-content-between align-items-center mb-3">
                                                                <div class="d-sm-flex align-items-center">
                                                                    <!-- Image -->
                                                                    <img src="assets/images/avatar/02.jpg"
                                                                        class="rounded-circle me-3 mb-2 mb-sm-0 h-70px"
                                                                        alt="">
                                                                    <!-- Title -->
                                                                    <h6 class="mb-2 mb-sm-0">Dennis Barrett
                                                                    </h6>
                                                                    <hr>
                                                                    <small class="mb-0 mt-2 mt-lg-0 ms-2 text-success">
                                                                        (From my CreativeHub Account)
                                                                    </small>
                                                                </div>

                                                                <!-- Year -->
                                                                <h6
                                                                    class="mb-0 badge bg-success rounded-0 px-2 py-2 bg-opacity-20 ">
                                                                    Available Balance: <span class="fw-bold">$744</span>
                                                                </h6>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!--- card-body Ends --->
                                </div>
                                <!--- col-md-12 mb-3 Ends --->
                            </div>
                            <!-- End Personal payments method  -->


                            <!--Other Payment method START -->
                            <div class="row g-3 mt-4">
                                <!-- Title -->
                                <h4 class="ms-3">Other Payment method</h4>

                                <div class="col-md-12">
                                    <!--- col-md-12 mb-3 Starts --->
                                    <div class="card  payment-options">
                                        <!--- Paypal payment options Starts --->
                                        <!--- card-body Starts --->
                                        <div class="card-body">
                                            <div class="col-md-12 text-center text-md-start">
                                                <!-- content details  -->
                                                <div class="card card-body border">
                                                    <div class="d-xl-flex justify-content-between align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="method"
                                                                id="paypal">

                                                        </div>
                                                        <ul class="list-inline vstack gap-4 flex-wrap mt-1 ms-3">
                                                            <!-- Item -->
                                                            <li class="list-inline-item  me-0">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-center">
                                                                    <div class="d-sm-flex align-items-center">
                                                                        <!-- Image -->
                                                                        <img src="assets/images/avatar/02.jpg"
                                                                            class="rounded-circle me-3 mb-2 mb-sm-0 h-70px"
                                                                            alt="">
                                                                        <!-- Title -->
                                                                        <h6 class="mb-2 mb-sm-0">Dennis Barrett
                                                                        </h6>
                                                                        <hr>
                                                                        <small
                                                                            class="mb-0 mt-2 mt-lg-0 ms-2 text-success">
                                                                            (Pay through Paypal Account)
                                                                        </small>
                                                                    </div>

                                                                    <!-- paypal icon -->
                                                                    <div class="col-lg-auto mt-4">
                                                                        <span class="float-right mr-4">
                                                                            <img class="checkout_payment_img"
                                                                                src="assets/images/element/paypalpay.svg"
                                                                                width="120" height="120"
                                                                                class="ms-2 width-xs-100">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!--- card-body Ends --->
                                    </div>
                                    <!--- Paypal payment-options Ends --->
                                </div>
                                <!--- col-md-12 mb-3 Ends --->


                                <div class="col-12">
                                    <div class="card payment-options">
                                        <!-- Credit or debit card  -->
                                        <!--- card-body Starts --->
                                        <div class="card-body">
                                            <div class="col-md-12 text-center text-md-start">
                                                <!-- content details  -->
                                                <div class="card card-body border">
                                                    <div class="d-xl-flex justify-content-between align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                id="credit-card" name="method">
                                                        </div>
                                                        <ul class="list-inline vstack gap-4 flex-wrap mt-1 ms-3">
                                                            <!-- Item -->
                                                            <li class="list-inline-item  me-0">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-center">
                                                                    <div class="d-sm-flex align-items-center">
                                                                        <!-- Image -->
                                                                        <img src="assets/images/avatar/02.jpg"
                                                                            class="rounded-circle me-3 mb-2 mb-sm-0 h-70px"
                                                                            alt="">
                                                                        <!-- Title -->
                                                                        <h6 class="mb-2 mb-sm-0">Dennis Barrett
                                                                        </h6>
                                                                        <hr>
                                                                        <small
                                                                            class="mb-0 mt-2 mt-lg-0 ms-2 text-success">
                                                                            (Pay through Credit Card Account)
                                                                        </small>
                                                                    </div>

                                                                    <!-- paypal icon -->
                                                                    <div class="col-lg-auto mt-4">
                                                                        <span class="float-right me-3">
                                                                            <img src="assets/images/element/creditCardPay.svg"
                                                                                width="90" height="90"
                                                                                class="ml-2 width-xs-100">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!--- card-body Ends --->
                                    </div>
                                    <!-- Credit or debit card END -->
                                </div>
                            </div>
                            <!-- Other Payment method END -->
                        </div>
                        <!--  Payments Process END -->
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-xl-4">
                        <div class="row mb-0">
                            <div class="col-md-6 col-xl-12">
                                <!-- Order summary START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-4">Order Summary <small style="font-size: 0.8rem;">Order quality:
                                            <span class="text-success">(2)</span></small> </h4>


                                    <!-- Course item START -->
                                    <div class="row g-3">
                                        <!-- Image -->
                                        <div class="col-sm-4">
                                            <img class="rounded" src="assets/images/courses/4by3/08.jpg" alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-sm-8">
                                            <h6 class="mb-0"><a href="proposals/proposal.php">I will
                                                    Sketch logo design from A to Z: for
                                                    an app designer</a>
                                            </h6>
                                            <!-- Info -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <!-- Price -->
                                                <span class="text-success">$150</span>

                                                <!-- Remove and edit button -->
                                                <div class="text-primary-hover">
                                                    <a href="checkout.php?remove_proposal" class="text-body me-2"><i
                                                            class="bi bi-trash me-1"></i>Remove</a>
                                                    <a href="proposals/proposal.php" class="text-body me-2"><i
                                                            class="bi bi-pencil-square me-1"></i>Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Course item END -->

                                    <hr> <!-- Divider -->
                                    <!-- Price and detail -->
                                    <ul class="list-group list-group-borderless mb-2">
                                        <li class="list-group-item px-0 d-flex justify-content-between my-2">
                                            <span class="h6 fw-light mb-0">Original Price</span>
                                            <span class="h6 fw-light mb-0 fw-bold">$500</span>
                                        </li>
                                        <hr class="bg-success border">
                                        <!--- form input-group Starts --->
                                        <li class="list-group list-group-borderless mb-2">
                                            <form action="post">
                                                <div class="input-group">
                                                    <input type="hidden" name="proposal_id" value="">
                                                    <input type="hidden" name="proposal_qty" value="">
                                                    <input type="text" name="code"
                                                        class="form-control form-control focusBtn apply-disabled"
                                                        placeholder="COUPON CODE">
                                                    <button type="submit" name="coupon_submit"
                                                        class="btn btn-success-soft">Apply
                                                        coupon</button>
                                                </div>
                                            </form>
                                            <!--- form input-group Ends --->
                                        </li>
                                        <hr>
                                        <span class="processing-fee">
                                            <li class="list-group-item px-0 d-flex justify-content-between ">
                                                <span class="h6 fw-light mb-0">Processing Discount</span>
                                                <span class="text-danger">$20</span>
                                            </li>
                                            <hr>
                                        </span>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h5 mb-0">Total Fee :</span>
                                            <span class="h5 mb-0 total-price">$520</span>
                                        </li>
                                    </ul>

                                    <form action="shopping_balance.php" method="post" id="shopping-balance-form">
                                        <!---- shopping-balance-form Starts --->
                                        <input type="hidden" name="amount" value="">
                                        <button type="submit" name="cart_submit_order"
                                            class="btn btn-lg btn-success w-100"
                                            onclick="return confirm('Do You Really Want To Order Proposals From Your Shopping Balance.')">
                                            Place Order
                                        </button>
                                    </form>

                                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"
                                        id="paypal-form">
                                        <!--- paypal-form Starts --->

                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="upload" value="1">
                                        <input type="hidden" name="handling_cart" value="1">
                                        <input type="hidden" name="business"
                                            value="sb-nnhbv16437012@business.example.com">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="cancel_return" value="cart_payment_options.php">
                                        <input type="hidden" name="return" value="paypal_order.php?cart_seller_id">



                                        <input type="hidden" name="item_name_1"
                                            value="I will Sketch logo design from A to Z: for an app designer">
                                        <input type="hidden" name="item_number_1" value="1">
                                        <input type="hidden" name="amount_1" value="520">
                                        <input type="hidden" name="quantity_1" value="1">


                                        <input type="hidden" name="item_name_2"
                                            value="I will Sketch logo design from A to Z: for an app designer">
                                        <input type="hidden" name="item_number_2" value="1">
                                        <input type="hidden" name="amount_2" value="520">
                                        <input type="hidden" name="quantity_2" value="1">
                                        <button type="submit" name="submit" class="btn btn-lg btn-success w-100">
                                            Pay With Paypal
                                        </button>

                                    </form>


                                    <form action="cart_charge.php" method="post" id="credit-card-form">
                                        <!--- credit-card-form Starts --->

                                        <input type="hidden" name="amount" value="">
                                        <input type="submit" class="btn btn-lg img-fluid btn-success w-100 strip-submit"
                                            data-key="pk_test_51L0aZcCWHilK5BnHfZxMQvDox3IL5sxEdgDTk0HCMpTi8fpZ1oCirU5rubFihfXKwzE5lzfqUwDNxkkm5EY5LGgO008ZvMxeF4"
                                            value="Pay With Credit Card" data-amount="52000" data-currency="usd"
                                            data-email="creativehubmessage@gmail.com" data-name="creativehub.com"
                                            data-image="assets/images/payment_icon.svg"
                                            data-description="Cart Proposals Payment" data-allow-remember-me="false">

                                        <script>
                                        $(document).ready(function() {
                                            $('.strip-submit').on('click', function(event) {
                                                event.preventDefault();
                                                var $button = $(this),
                                                    $form = $button.parents('form');
                                                var opts = $.extend({}, $button.data(), {
                                                    token: function(result) {
                                                        $form.append($('<input>').attr({
                                                            type: 'hidden',
                                                            name: 'stripeToken',
                                                            value: result.id
                                                        })).submit();
                                                    }
                                                });
                                                StripeCheckout.open(opts);
                                            });
                                        });
                                        </script>

                                    </form>
                                    <!--- credit-card-form Ends --->

                                    <!--- paypal-form Ends --->

                                    <!-- Content -->
                                    <p class="small mb-0 mt-2 text-center">By completing your
                                        purchase, you agree to
                                        these <a href="terms-of-service.php"><strong>Terms
                                                of Service</strong></a>
                                    </p>

                                </div>
                                <!-- Order summary END -->
                            </div>

                            <div class="col-md-6 col-xl-12">
                                <div class="card bg-blue p-3 position-relative overflow-hidden"
                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                        <svg width="92.6px" height="135.2px">
                                            <path class="fill-white"
                                                d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                            </path>
                                            <path class="fill-white"
                                                d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                            </path>
                                            <path class="fill-white"
                                                d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                            </path>
                                            <path class="fill-warning"
                                                d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                            </path>
                                            <polygon class="fill-warning opacity-6"
                                                points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                            </polygon>
                                        </svg>
                                    </figure>
                                    <!-- Body -->
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h5 class="card-title text-white mb-2">Advanced management tools</h5>
                                        <p class="text-white text-opacity-75">Seamlessly integrate freelancers into your
                                            team and projects.</p>
                                        <!-- Button -->
                                        <a href="our-business-solutions.php"
                                            class="btn btn-sm btn-warning mb-0">Purchase
                                            Premium</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
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
    <?php include("includes/footer.php"); ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>


    <!-- payments selection ------ -->
    <script>
    $(document).ready(function() {

        $('.processing-fee').hide();

        $('.total-price').html('$500');

        $('#paypal-form').hide();

        $('#credit-card-form').hide();


        $('#shopping-balance').click(function() {

            $('.col-md-5 .card br').show();

            $('.total-price').html('$500');

            $('.processing-fee').hide();

            $('#credit-card-form').hide();

            $('#paypal-form').hide();

            $('#shopping-balance-form').show();

        });



        $('#paypal').click(function() {

            $('.col-md-5 .card br').hide();

            $('.total-price').html('$520');

            $('.processing-fee').show();

            $('#credit-card-form').hide();

            $('#paypal-form').show();

            $('#shopping-balance-form').hide();

        });



        $('#credit-card').click(function() {

            $('.col-md-5 .card br').hide();

            $('.total-price').html('$520');

            $('.processing-fee').show();

            $('#credit-card-form').show();

            $('#paypal-form').hide();

            $('#shopping-balance-form').hide();

        });


    });
    </script>

</body>

</html>