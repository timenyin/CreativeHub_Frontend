<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Order Management || Order Number: #1198390 </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - Order Management ">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugins -->
    <script src="assets/vendor/antennaiojs/js/jquery.barrating.min.js"></script>
    <link rel="stylesheet" href="assets/vendor/antennaiojs/css/fontawesome-stars.css">


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
                                            src="proposals/proposal_files/0P1.jpg" alt="">
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
                        <!-- alert order in Active progress  -->
                        <div id="order-status-bar" class="container">
                            <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2"
                                role="alert">
                                <!-- Avatar -->
                                <div class="d-flex align-items-center">
                                    <div class="ps-4">

                                        <small>Payment Still Active</small>
                                        <small class="text-success fw-bold p-1 rounded-5" style="border: 2px dotted;">
                                            Order
                                            Number:
                                            #1198390</small>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="d-flex align-items-center d-none d-md-flex">
                                    <div class="px-4">
                                        <span class="badge bg-success bg-opacity-10 text-success rounded  fw-bolder">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Still Active" data-bs-original-title="Still Active"
                                                class="btn btn-sm btn-success-soft btn-round me-1 mb-0"
                                                aria-describedby="tooltip155984"><i class="fa-solid fa-blog fa-fade"
                                                    style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;"
                                                    aria-hidden="true"></i></div>
                                            <span class="px-1">Still Active...</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of alert order in Active progress  -->

                        <!-- alert order in Canalled progress  -->
                        <div id="order-status-bar" class="container">
                            <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2"
                                role="alert">
                                <!-- Avatar -->
                                <div class="d-flex align-items-center">
                                    <div class="ps-4">

                                        <small class="">Payment Returned: </small>
                                        <small class="text-danger fw-bold p-1  rounded-5" style="border: 2px dotted;">
                                            Order
                                            Cancelled </small>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="d-flex align-items-center d-none d-md-flex">
                                    <div class="px-4">
                                        <span class="badge bg-danger bg-opacity-10 text-danger rounded  fw-bolder">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Order Cancelled" data-bs-original-title="Order Cancelled"
                                                class="btn btn-sm btn-danger-soft btn-round me-1 mb-0"
                                                aria-describedby="tooltip155984"><i
                                                    class="fa-solid fa-handshake-simple-slash fa-fade"
                                                    style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;"
                                                    aria-hidden="true"></i></div>
                                            <span class="px-1">Cancelled...</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of alert order in Canalled progress  -->


                        <!-- alert order in Marketer  progress  -->
                        <div id="order-status-bar" class="container">
                            <!-- selling_order -->
                            <?php if (isset($_GET['selling_order'])) { ?>
                            <div class="alert alert-warning alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-1"
                                role="alert">
                                <!-- Avatar -->
                                <div class="d-flex align-items-center">
                                    <div class="ps-4">

                                        <small>Payment Sent: </small>
                                        <small class="text-orange fw-bold p-1 rounded-5" style="border: 2px dotted;">
                                            Order
                                            Completed EARNED: $16.00</small>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="d-flex align-items-center d-none d-md-flex">
                                    <div class="px-4">
                                        <span class="badge bg-orange bg-opacity-10 text-orange rounded  fw-bolder">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Order Completed" data-bs-original-title="Order Completed"
                                                class="btn btn-sm btn-orange-soft btn-round me-1 mb-0"
                                                aria-describedby="tooltip155984"><i
                                                    class="fa-solid fa-list-check fa-fade"
                                                    style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;"
                                                    aria-hidden="true"></i></div>
                                            <span class="px-1">Completed!!!</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <?php } elseif (isset($_GET["buying_order"])) { ?>
                            <!-- buying_order  -->
                            <div class="alert alert-warning alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-1"
                                role="alert">
                                <!-- Avatar -->
                                <div class="d-flex align-items-center">
                                    <div class="ps-4">

                                        <small> Delivery Submitted: </small>
                                        <small class="text-orange fw-bold p-1 rounded-5" style="border: 2px dotted;">
                                            Order
                                            Completed </small>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="d-flex align-items-center d-none d-md-flex">
                                    <div class="px-4">
                                        <span class="badge bg-orange bg-opacity-10 text-orange rounded  fw-bolder">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Order Completed" data-bs-original-title="Order Completed"
                                                class="btn btn-sm btn-orange-soft btn-round me-1 mb-0"
                                                aria-describedby="tooltip155984">
                                                <i class="fa-solid fa-list-check fa-fade" aria-hidden="true"
                                                    style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;"></i>
                                            </div>
                                            <span class="px-1">Completed!!!</span>
                                        </span>

                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                        <!-- End of alert order in Marketer progress  -->

                        <!-- alert order in Purchase  progress  -->

                        <!-- End of alert order in Purchase progress  -->

                        <!-- Order Management Content -->
                        <div class="card shadow rounded-2 p-0 mt-3">
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-6"
                                            data-bs-toggle="pill" data-bs-target="#course-pills-6" type="button"
                                            role="tab" aria-controls="course-pills-6" aria-selected="true">Order
                                            Management

                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-1"
                                            data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button"
                                            role="tab" aria-controls="course-pills-1" aria-selected="false"
                                            tabindex="-1">Resolution Services
                                    </li>
                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">

                                    <!-- Order activity Content START -->
                                    <div class="tab-pane fade active show" id="course-pills-6" role="tabpane1"
                                        aria-labelledby="course-pills-tab-6">
                                        <!-- seller profile details  START -->

                                        <?php if (isset($_GET['selling_order'])) { ?>
                                        <div class="card p-2 bg-transparent border">
                                            <div class="row g-0">
                                                <div class="col-md-3 pt-5">
                                                    <img src="proposals/proposal_files/10001.jpg" class="rounded-2"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="card-body">
                                                        <!-- Badge and dropdown -->
                                                        <div class="d-flex justify-content-between">
                                                            <!-- Badge -->
                                                            <div>
                                                                <span
                                                                    class="badge bg-success bg-opacity-10 text-success rounded px-2 py-2 "
                                                                    style="letter-spacing: 2px;">
                                                                    Order: #119839</span>
                                                            </div>

                                                            <!-- Dropdown -->
                                                            <div class="dropdown flex-shrink-0">
                                                                <a href="#"
                                                                    class="text-primary-hover text-secondary p-0 mb-0"
                                                                    id="cardShareAction2" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </a>
                                                                <!-- Card share action dropdown menu -->
                                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto"
                                                                    aria-labelledby="cardShareAction2">
                                                                    <li><a class="dropdown-item" href="user.php">View
                                                                            Purchaser Profile</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Title -->
                                                        <h6 class="card-title mt-3 mb-0"> Purchaser Name: <span
                                                                class="text-success"> Marry Jane</span> </h6>
                                                        <h6 class="card-title mt-3 mb-0">
                                                            <div class="mb-4">
                                                                <span>Order Status: </span>
                                                                <span class="text-success fw-bold p-1 rounded-5"
                                                                    style="border: 2px dotted; letter-spacing: 2px; ">Completed</span>
                                                            </div>
                                                        </h6>
                                                        <!-- Button and list -->
                                                        <div
                                                            class="d-flex justify-content-between align-items-center p-0">
                                                            <!-- List -->
                                                            <ul class="nav nav-divider small mb-0 d-none d-md-block">
                                                                <li class="nav-item h6 mb-0">Date: June 03 2024</li>
                                                            </ul>
                                                            <!-- Dropdown -->
                                                            <div
                                                                class="bg-success bg-opacity-10 p-3 me-5 rounded-3 h-100">
                                                                <div
                                                                    class="d-flex mb-1 justify-content-between align-items-center">
                                                                    <h6 class="mb-0">Proposal Amount</h6>
                                                                    <span
                                                                        class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">USD</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mb-0 h2">$</span>
                                                                    <h2 class="mb-2 mt-2">18.00</h2>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } elseif (isset($_GET["buying_order"])) { ?>
                                        <!-- buying profile details Starts -->
                                        <div class="card p-2 bg-transparent border">
                                            <div class="row g-0">
                                                <div class="col-md-3 pt-5">
                                                    <img src="proposals/proposal_files/10001.jpg" class="rounded-2"
                                                        alt="Card image">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="card-body">
                                                        <!-- Badge and dropdown -->
                                                        <div class="d-flex justify-content-between">
                                                            <!-- Badge -->
                                                            <div>
                                                                <span
                                                                    class="badge bg-success bg-opacity-10 text-success rounded px-2 py-2 "
                                                                    style="letter-spacing: 2px;">
                                                                    Order: #119839</span>
                                                            </div>

                                                            <!-- Dropdown -->
                                                            <div class="dropdown flex-shrink-0">
                                                                <a href="#"
                                                                    class="text-primary-hover text-secondary p-0 mb-0"
                                                                    id="cardShareAction2" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </a>
                                                                <!-- Card share action dropdown menu -->
                                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto"
                                                                    aria-labelledby="cardShareAction2">
                                                                    <li><a class="dropdown-item" href="user.php">View
                                                                            Seller Profile</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Title -->
                                                        <h6 class="card-title mt-3 mb-0"> Seller Name: <span
                                                                class="text-success"> Lori Stevens</span> </h6>
                                                        <h6 class="card-title mt-3 mb-0">
                                                            <div class="mb-4">
                                                                <span>Order Status: </span>
                                                                <span class="text-success fw-bold p-1 rounded-5"
                                                                    style="border: 2px dotted; letter-spacing: 2px; ">#7655333565</span>
                                                            </div>
                                                        </h6>
                                                        <!-- Button and list -->
                                                        <div
                                                            class="d-flex justify-content-between align-items-center p-0">
                                                            <!-- List -->
                                                            <ul class="nav nav-divider small mb-0 d-none d-md-block">
                                                                <li class="nav-item h6 mb-0">Date: June 03 2024</li>
                                                            </ul>
                                                            <!-- Dropdown -->
                                                            <div
                                                                class="bg-success bg-opacity-10 p-3 me-5 rounded-3 h-100">
                                                                <div
                                                                    class="d-flex mb-1 justify-content-between align-items-center">
                                                                    <h6 class="mb-0">Proposal Amount</h6>
                                                                    <span
                                                                        class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">USD</span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="mb-0 h2">$</span>
                                                                    <h2 class="mb-2 mt-2">21.00</h2>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- buying profile details END  -->
                                        <?php } ?>
                                        <!-- seller profile details END -->
                                        <!-- table for items proposal start -->
                                        <div class="col-lg-12 mx-auto mt-2">
                                            <!-- Title -->
                                            <div class="bg-light p-3 rounded-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6 text-center text-md-start">
                                                        <h5 class="mb-2 mb-md-0">Feature Request</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-4 text-center py-2">
                                                                <h6 class="mb-0">Offers</h6>
                                                            </div>
                                                            <div class="col-4 text-center py-2">
                                                                <h6 class="mb-0">Duration</h6>
                                                            </div>
                                                            <div class="col-4 text-center  py-2">
                                                                <h6 class="mb-0">Budget
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Table item -->
                                            <div id="request_tr_5" class="row align-items-center p-3">
                                                <div class="col-md-6 text-center text-md-start">
                                                    <!-- content details  -->
                                                    <div class="card card-body border">
                                                        <div
                                                            class="d-xl-flex justify-content-between align-items-center">
                                                            <!-- Avatar and info -->
                                                            <div class="hstack gap-2 mb-2 mb-xl-0">
                                                                <!-- Info -->
                                                                <div>
                                                                    <small class="card-title mb-0"><i
                                                                            class="fa-solid text-success pe-2  fa-solid fa-chevron-right"></i>
                                                                        I Will Do Viral Youtube Seo Social Media
                                                                        Promotion </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- Content table 1-->
                                                <div class="col-md-6 pt-2 pt-md-0">
                                                    <div class="row">
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <div
                                                                class="icon-md bg-success bg-opacity-10 rounded-circle text-success">
                                                                2
                                                            </div>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <div
                                                                class="icon-md_min bg-success bg-opacity-10 rounded-circle text-success">
                                                                3 Days
                                                            </div>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <div
                                                                class="icon-md_min bg-success bg-opacity-10 rounded-circle text-success">
                                                                <?php if (isset($_GET["selling_order"])) { ?>
                                                                $18.00

                                                                <?php } elseif (isset($_GET["buying_order"])) { ?>

                                                                $21.00

                                                                <?php } ?>
                                                            </div>
                                                            <br>

                                                            <!-- send offer  button end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- conte table 1 end  -->

                                                <!-- processing fee-->
                                                <?php if (isset($_GET["buying_order"])) {  ?>
                                                <div
                                                    class="col-md-6 text-center text-md-start d-flex justify-content-end mt-2">
                                                    <span
                                                        class="badge bg-success bg-opacity-10 text-success rounded px-2 py-2 ">
                                                        Processing Fee</span>
                                                </div>
                                                <div class="col-md-6 pt-2 pt-md-0">
                                                    <div class="row">
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <i class="fa-solid fa-minus pt-4 text-success"></i>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <i class="fa-solid fa-minus pt-4 text-success"></i>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <div
                                                                class="icon-md_min bg-success bg-opacity-10 rounded-circle text-success mt-3">
                                                                $1.00
                                                            </div>
                                                            <br>

                                                            <!-- send offer  button end -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } ?>

                                                <!-- processing fee END -->

                                                <!-- Content table 1-->
                                                <div
                                                    class="col-md-6 text-center text-md-start d-flex justify-content-end mt-2">
                                                    <span
                                                        class="badge bg-orange bg-opacity-10 text-orange rounded px-2 py-2 ">
                                                        Total Amount</span>
                                                </div>
                                                <div class="col-md-6 pt-2 pt-md-0">
                                                    <div class="row">
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <i class="fa-solid fa-minus pt-4 text-orange"></i>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <i class="fa-solid fa-minus pt-4 text-orange"></i>
                                                        </div>
                                                        <!-- Check -->
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <div
                                                                class="icon-md_min bg-orange bg-opacity-10 rounded-circle text-orange mt-3">
                                                                <?php if (isset($_GET["selling_order"])) { ?>

                                                                $18.00

                                                                <?php } elseif (isset($_GET["buying_order"])) { ?>
                                                                $22.00

                                                                <?php } ?>
                                                            </div>
                                                            <br>

                                                            <!-- send offer  button end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- conte table 1 end  -->
                                            </div> <!-- Row END -->
                                            <hr class="m-0"> <!-- Divider -->
                                        </div>
                                        <!-- table for items proposal End  -->

                                        <!-- table for items proposal start -->
                                        <div class="col-lg-12 mx-auto mt-2">
                                            <!-- Title -->
                                            <div class="bg-light p-3 rounded-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-12 text-center text-md-start">
                                                        <h5 class="mb-2 mb-md-0">Description</h5>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Table item -->
                                            <div class="row align-items-center p-3">
                                                <div class="col-md-12 text-center text-md-start">
                                                    <!-- content details  -->
                                                    <div class="card card-body border">
                                                        <div
                                                            class="d-xl-flex justify-content-between align-items-center">
                                                            <!-- Avatar and info -->
                                                            <div class="hstack gap-2 mb-2 mb-xl-0">
                                                                <!-- Info -->
                                                                <div>
                                                                    <p class="card-title mb-0">
                                                                        Lorem ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Assumenda magni quae
                                                                        quaerat ut voluptate voluptatibus expedita
                                                                        ducimus consequuntur, doloribus voluptates
                                                                        vero, iste nesciunt.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div> <!-- Row END -->
                                            <!-- seller -->
                                            <?php if (isset($_GET["selling_order"])) { ?>

                                            <div class="container pb-3">
                                                <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2"
                                                    role="alert">
                                                    <div>
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xs me-2">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/payment_icon.svg" alt="avatar">
                                                        </div>
                                                        <!-- Info -->
                                                        <small id="countdown-heading">Notification From CreativeHub:
                                                            <span class="fw-bolder"> Needs To Deliver
                                                                Your Order Before This Time</span> </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- buyer -->
                                            <?php } elseif (isset($_GET["buying_order"])) { ?>
                                            <div class="container pb-3">
                                                <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2"
                                                    role="alert">
                                                    <div>
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xs me-2">
                                                            <img class="avatar-img rounded-circle"
                                                                src="assets/images/payment_icon.svg" alt="avatar">
                                                        </div>
                                                        <!-- Info -->
                                                        <small id="countdown-heading">Notification From CreativeHub:
                                                            <span class="fw-bolder"> Seller Needs To Deliver Your
                                                                Order Before This Time</span> </small>
                                                    </div>

                                                </div>
                                            </div>

                                            <?php } ?>

                                            <section id="countdown-timer" class="py-0 py-lg-5 mt-3">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 position-relative z-index-1">
                                                            <!-- Image -->
                                                            <div
                                                                class="d-none d-lg-block position-absolute bottom-0 start-0 ms-0">
                                                                <img src="assets/images/element/38.png"
                                                                    class="img-fluid" alt="Image"
                                                                    style="max-width: 52%;">
                                                            </div>
                                                            <div
                                                                class="bg-warning p-4 p-sm-5 rounded position-relative z-index-n1 overflow-hidden">
                                                                <!-- SVG decoration -->
                                                                <figure
                                                                    class="position-absolute top-50 end-0 translate-middle-y me-n7">
                                                                    <svg class="fill-orange rotate-193 opacity-2"
                                                                        width="676px" height="161.3px"
                                                                        viewBox="0 0 676 161.3"
                                                                        style="enable-background:new 0 0 676 161.3;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M53.6,18.8c28.6,8.8,50.3,27.3,70.9,48c19.9,19.9,39.5,40.8,65.3,53c53.3,24.9,116,12.4,168.2-9.1 c58.4-23.9,113.2-59.8,176.2-70.3c30.9-5.1,64.1-2.6,90.9,14.7c22.4,14.4,34.4,36.9,39.5,62.4c2.9,14.5,3.9,29.2,4.6,43.9h6.8 c-0.2-4.2-0.5-8.3-0.8-12.5c-1.7-24.1-4.9-49.1-17.6-70.3c-14.5-23.9-40-39.2-67-44.8c-32.9-6.8-67.2-0.3-98.5,10.2 c-30.3,10-59,24.2-87.7,38.1c-54.8,26.4-115.5,53.1-177.9,42c-14.5-2.6-28.7-7.4-41.7-14.7c-12.8-7.3-23.9-16.7-34.6-26.7 c-20.7-19.6-39.4-42-64.1-56.8c-25.6-15.4-56.4-22.2-86-19H0v6.9C17.9,11.8,36.3,13.5,53.6,18.8z">
                                                                        </path>
                                                                    </svg>
                                                                </figure>

                                                                <div
                                                                    class="row align-items-end justify-content-end position-relative">
                                                                    <div class="col-lg-10">
                                                                        <div
                                                                            class="row g-3 d-flex align-items-center justify-content-center">

                                                                            <!-- Counter item -->
                                                                            <div class="col-sm-6 col-lg-3 text-center">
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <h4 id="days"
                                                                                        class="display-6 text-white fw-bold mb-0 countdown-number">

                                                                                    </h4>
                                                                                </div>
                                                                                <h6 class="text-dark mb-0 fw-bold">Days
                                                                                </h6>
                                                                            </div>

                                                                            <!-- Counter item -->
                                                                            <div class="col-sm-6 col-lg-3 text-center">
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <h4 id="hours"
                                                                                        class="display-6 text-white fw-bold mb-0 countdown-number">

                                                                                    </h4>
                                                                                </div>
                                                                                <h6 class="text-dark mb-0 fw-bold">Hours
                                                                                </h6>
                                                                            </div>

                                                                            <!-- Counter item -->
                                                                            <div class="col-sm-6 col-lg-3 text-center">
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <h4 id="minutes"
                                                                                        class="display-6 text-white fw-bold mb-0 countdown-number">
                                                                                    </h4>

                                                                                </div>
                                                                                <h6 class="text-dark mb-0 fw-bold">
                                                                                    Minutes</h6>
                                                                            </div>

                                                                            <!-- Counter item -->
                                                                            <div class="col-sm-6 col-lg-3 text-center">
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <h4 id="seconds"
                                                                                        class="display-6 text-white fw-bold mb-0 countdown-number">

                                                                                    </h4>

                                                                                </div>
                                                                                <h6 class="text-dark mb-0 fw-bold">
                                                                                    Seconds</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- Row END -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- chat section  -->
                                            <section id="order-conversations">
                                                <?php include('order_conversations.php') ?>
                                            </section>

                                            <?php if (isset($_GET["selling_order"])) { ?>
                                            <!--- center Starts --->
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-outline-success rounded-3 btn-sm  py-2"
                                                    data-bs-toggle="modal" data-bs-target="#deliver-order-modal">
                                                    <span class="lead">Deliver Your Order</span>
                                                </button>
                                            </div>
                                            <!--- center Ends --->

                                            <?php } elseif (isset($_GET["buying_order"])) { ?>
                                            <!--- center Starts --->
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-outline-success rounded-3 btn-sm  py-2"
                                                    data-bs-toggle="modal" data-bs-target="#revision-request-modal">
                                                    <span class="lead">Deliver Your Order</span>
                                                </button>
                                            </div>
                                            <!--- center Ends --->

                                            <?php } ?>

                                            <!-- Reviews Rating -->
                                            <div class="tab-pane fade active show mt-5" role="tabpanel"
                                                aria-labelledby="course-pills-tab-0">
                                                <div>
                                                    <div class="row mb-5">
                                                        <div class="col-md-6">
                                                            <!-- Adjust the column width as needed -->
                                                            <h5 class="mb-4">Order Reviews</h5>
                                                        </div>

                                                    </div>
                                                    <!-- Review START -->
                                                    <div class="row mb-4">
                                                        <!-- Rating info -->
                                                        <div class="col-md-4 mb-3 mb-md-0">
                                                            <div class="text-center">
                                                                <!-- Info -->
                                                                <h2 class="mb-0">4.5</h2>
                                                                <!-- Star -->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item me-0"><i
                                                                            class="fas fa-star text-warning"
                                                                            aria-hidden="true"></i></li>
                                                                    <li class="list-inline-item me-0"><i
                                                                            class="fas fa-star text-warning"
                                                                            aria-hidden="true"></i></li>
                                                                    <li class="list-inline-item me-0"><i
                                                                            class="fas fa-star text-warning"
                                                                            aria-hidden="true"></i></li>
                                                                    <li class="list-inline-item me-0"><i
                                                                            class="fas fa-star text-warning"
                                                                            aria-hidden="true"></i></li>
                                                                    <li class="list-inline-item me-0"><i
                                                                            class="fas fa-star-half-alt text-warning"
                                                                            aria-hidden="true"></i></li>
                                                                </ul>
                                                                <p class="mb-0">(Based on todays review)</p>
                                                            </div>
                                                        </div>

                                                        <!-- Progress-bar and star -->
                                                        <div class="col-md-8">
                                                            <div class="row align-items-center">
                                                                <!-- Progress bar and Rating -->
                                                                <div class="col-6 col-sm-8">
                                                                    <!-- Progress item -->
                                                                    <div
                                                                        class="progress progress-sm bg-warning bg-opacity-15">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 100%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 col-sm-4">
                                                                    <!-- Star item -->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                </div>

                                                                <!-- Progress bar and Rating -->
                                                                <div class="col-6 col-sm-8">
                                                                    <!-- Progress item -->
                                                                    <div
                                                                        class="progress progress-sm bg-warning bg-opacity-15">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 80%"
                                                                            aria-valuenow="80" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 col-sm-4">
                                                                    <!-- Star item -->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                </div>

                                                                <!-- Progress bar and Rating -->
                                                                <div class="col-6 col-sm-8">
                                                                    <!-- Progress item -->
                                                                    <div
                                                                        class="progress progress-sm bg-warning bg-opacity-15">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 60%"
                                                                            aria-valuenow="60" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 col-sm-4">
                                                                    <!-- Star item -->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                </div>

                                                                <!-- Progress bar and Rating -->
                                                                <div class="col-6 col-sm-8">
                                                                    <!-- Progress item -->
                                                                    <div
                                                                        class="progress progress-sm bg-warning bg-opacity-15">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 40%"
                                                                            aria-valuenow="40" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 col-sm-4">
                                                                    <!-- Star item -->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                </div>

                                                                <!-- Progress bar and Rating -->
                                                                <div class="col-6 col-sm-8">
                                                                    <!-- Progress item -->
                                                                    <div
                                                                        class="progress progress-sm bg-warning bg-opacity-15">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 20%"
                                                                            aria-valuenow="20" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6 col-sm-4">
                                                                    <!-- Star item -->
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="fas fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                        <li class="list-inline-item me-0 small"><i
                                                                                class="far fa-star text-warning"
                                                                                aria-hidden="true"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Review END -->

                                                    <!-- Seller review START -->
                                                    <div class="row">
                                                        <!-- Review for ALL item START -->
                                                        <div id="all">
                                                            <div class="d-md-flex my-4">
                                                                <!-- Avatar -->
                                                                <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="user_images/07.jpg" alt="avatar">
                                                                </div>
                                                                <!-- Text -->
                                                                <div>
                                                                    <div
                                                                        class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                        <h5 class="me-3 mb-0">Jacqueline Miller</h5>
                                                                        <!-- Review star -->
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>
                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_blank.svg"
                                                                                    alt="">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- Info -->
                                                                    <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                                    <p class="mb-2 msg-body">Perceived end knowledge
                                                                        certainly
                                                                        day sweetness
                                                                        why
                                                                        cordially. Ask a quick six seven offer see
                                                                        among.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <!-- -------- buyer replay review  -->
                                                            <div class="d-md-flex ms-5 my-4">
                                                                <!-- Avatar -->
                                                                <div class="avatar avatar-md me-4 flex-shrink-0">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="user_images/05.jpg" alt="avatar">
                                                                </div>
                                                                <!-- Text -->
                                                                <div>
                                                                    <div
                                                                        class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                        <h5 class="me-3 mb-0">Gogra South</h5>
                                                                        <!-- Review star -->
                                                                        <ul class="list-inline mb-0">
                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>

                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_full.svg"
                                                                                    alt="">
                                                                            </li>
                                                                            <li class="list-inline-item me-0 small">
                                                                                <img src="assets/images/client/user_rate_blank.svg"
                                                                                    alt="">
                                                                            </li>


                                                                        </ul>
                                                                    </div>
                                                                    <!-- Info -->
                                                                    <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                                    <p class="mb-2 msg-body">Perceived end knowledge
                                                                        certainly
                                                                        day sweetness
                                                                        why
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- Divider -->

                                                            <!-- Review item END -->
                                                        </div>


                                                    </div>
                                                    <!-- Student review END -->
                                                </div>
                                            </div>


                                            <!-- End of chat section -->
                                            <hr class="m-0"> <!-- Divider -->

                                            <!-- post Review  -->
                                            <!-- Seller Review -->
                                            <?php if (isset($_GET["selling_order"])) { ?>
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fs-5">Review to Buyer</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                                            <h6 class="h6">Star your Seller <i
                                                                    class="fa-solid fa-hand-point-right fa-beat"></i>
                                                            </h6>
                                                            <select name="rating" id="rating-select"
                                                                class="rating-select" aria-label="Review Rating mb-2">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="message" class="form-label h6">Review Experience
                                                                With
                                                                Buyer*</label>
                                                            <textarea class="form-control" rows="6" name="review"
                                                                required placeholder="your message"></textarea>
                                                        </div>
                                                        <div class="card-footer border-0 d-flex justify-content-center">
                                                            <input type="submit" name="seller_review_submit"
                                                                class="btn btn-sm btn-warning" value="Give a Review">

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                            <!-- Initialize Bar Rating -->
                                            <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#rating-select').barrating({
                                                    theme: 'fontawesome-stars'
                                                });
                                            });
                                            </script>



                                            <!-- update review to buyer ---- -->
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fs-5"> Update Review to Buyer</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                                            <h6 class="h6">Star your Seller <i
                                                                    class="fa-solid fa-hand-point-right fa-beat"></i>
                                                            </h6>
                                                            <select name="rating" id="rating-select-update"
                                                                class="rating-select-update"
                                                                aria-label="Review Rating mb-2">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="message" class="form-label h6">Review Experience
                                                                With
                                                                Buyer *</label>
                                                            <textarea class="form-control" rows="6" name="review"
                                                                required placeholder="your message"></textarea>
                                                        </div>
                                                        <div class="card-footer border-0 d-flex justify-content-center">
                                                            <input type="submit" name="seller_review_update"
                                                                class="btn btn-sm btn-warning"
                                                                value="Update Seller Review">

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                            <!-- Initialize Bar Rating -->
                                            <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#rating-select-update').barrating({
                                                    theme: 'fontawesome-stars',
                                                    initialRating: '5'
                                                });
                                            });
                                            </script>

                                            <!-- =================================================== -->
                                            <!-- ===========Review to Seller=========== -->
                                            <!-- =================================================== -->

                                            <?php } elseif (isset($_GET["buying_order"])) { ?>
                                            <!-- Buyer Review  -->
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fs-5">Review to Seller</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                                            <h6 class="h6">Star your Seller <i
                                                                    class="fa-solid fa-hand-point-right fa-beat"></i>
                                                            </h6>
                                                            <select name="rating" id="rating-select"
                                                                class="rating-select" aria-label="Review Rating mb-2">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="message" class="form-label h6">Review Experience
                                                                With
                                                                Seller *</label>
                                                            <textarea class="form-control" rows="6" name="review"
                                                                required placeholder="your message"></textarea>
                                                        </div>
                                                        <div class="card-footer border-0 d-flex justify-content-center">
                                                            <input type="submit" name="buyer_review_submit"
                                                                class="btn btn-sm btn-warning" value="Give a Review">

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                            <!-- Initialize Bar Rating -->
                                            <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#rating-select').barrating({
                                                    theme: 'fontawesome-stars'
                                                });
                                            });
                                            </script>



                                            <!-- update review to buyer ---- -->
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fs-5"> Update Review to Seller</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                                            <h6 class="h6">Star your Seller <i
                                                                    class="fa-solid fa-hand-point-right fa-beat"></i>
                                                            </h6>
                                                            <select name="rating" id="rating-select-update"
                                                                class="rating-select-update"
                                                                aria-label="Review Rating mb-2">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="message" class="form-label h6">Review Experience
                                                                With
                                                                Seller *</label>
                                                            <textarea class="form-control" rows="6" name="review"
                                                                required placeholder="your message"></textarea>
                                                        </div>
                                                        <div class="card-footer border-0 d-flex justify-content-center">
                                                            <input type="submit" name="buyer_review_update"
                                                                class="btn btn-sm btn-warning"
                                                                value="Update Seller Review">

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                            <!-- Initialize Bar Rating -->
                                            <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#rating-select-update').barrating({
                                                    theme: 'fontawesome-stars',
                                                    initialRating: '5'
                                                });
                                            });
                                            </script>



                                            <?php } ?>

                                        </div>
                                        <!-- table for items proposal End  -->

                                        <!-- Buyer comments  -->
                                        <div class="card">
                                            <div class="card-header border-0">

                                            </div>
                                            <div class="card-body">
                                                <form id="insert-message-form" class="clearfix" method="post">
                                                    <div class="alert alert-info alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                                        <h3 class="card-title fs-5"> Message Description </h3>
                                                        <div>
                                                            <nav aria-label="breadcrumb">
                                                                <ol
                                                                    class="breadcrumb breadcrumb-dark mb-0 d-flex align-items-center">
                                                                    <li
                                                                        class="breadcrumb-item h6 d-flex align-items-center">
                                                                        Lori Stevens
                                                                        <i class="fa-regular fa-circle-dot fa-beat text-success fa-beat-fade ms-2"
                                                                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.075; font-size:1.55em;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Am Online"
                                                                            data-bs-original-title="Am Online"
                                                                            aria-hidden="true"></i>
                                                                    </li>
                                                                    <small class="mx-4 h6" aria-current="page">Local
                                                                        Time: 09:23 AM</small>
                                                                </ol>
                                                            </nav>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label h6">Message *</label>
                                                        <textarea class="form-control" id="message" rows="5"
                                                            placeholder="Type Your Message Here..." required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="attachment" class="form-label"> Attach File
                                                            (optional)* </label>
                                                        <input type="file" id="file" class="form-control">
                                                    </div>
                                                    <div class="card-footer border-0 d-flex justify-content-center">
                                                        <input type="submit" class="btn btn-sm btn-warning"
                                                            value="Send Message">

                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- Order activity Content END -->



                                    <!-- Resolution Services Content START -->
                                    <div class="tab-pane fade" id="course-pills-1" role="tabpanel"
                                        aria-labelledby="course-pills-tab-1">
                                        <!-- Order Cancellation  -->
                                        <div class="card card-body shadow p-4 p-sm-5 position-relative">
                                            <div class="card-header border-0">
                                                <h2>Cancellation Request</h2>
                                            </div>
                                            <!-- SVG decoration -->
                                            <figure class="position-absolute top-0 start-100 mt-n5 ms-n7">
                                                <svg enable-background="new 0 0 167 107">
                                                    <path class="fill-danger"
                                                        d="m87.1 1c-0.4 0.5-0.8 1-1.3 1.5l-3 2.7c-2.6 2.3-5.1 4.7-7.8 6.8-13.4 10.5-26.8 21-40.1 31.5l-25.8 20.4c-0.4 0.3-0.8 0.6-1.1 0.9-0.7 0.6-1.5 1-2.4 0.2-0.8-0.7-0.6-1.7-0.1-2.4 0.6-1 1.4-2 2.2-2.8 0.5-0.4 1-0.9 1.5-1.3 2.8-2.6 5.7-5.2 8.6-7.5 21.6-16.6 43.3-33.1 65.8-48.5 1.2-0.9 2.5-1.7 3.8-2.5 0 0 0.1 0.1 0.4 0.2-0.2 0.3-0.5 0.6-0.7 0.8zm78.9 20.9c-0.4 0.2-0.7 0.4-1.1 0.6-0.3 0.2-0.7 0.5-1.1 0.7-14.6 8.6-29 17.5-43.1 27-21.6 14.4-43 29.2-63.4 45.2-3.8 3-7.5 6-11.2 9-0.6 0.5-1.1 0.9-1.7 1.3-0.8 0.6-1.6 0.9-2.4 0.2s-0.6-1.7-0.1-2.4c0.6-1 1.3-2 2.2-2.8l0.1-0.1c2.5-2.3 5-4.6 7.7-6.6 30.4-23 61.6-44.5 94.9-63 3.8-2.1 7.7-4.1 11.6-6 1.9-1 3.9-2 5.8-3 0.5-0.2 1-0.4 1.4-0.6 0.2 0.1 0.3 0.3 0.4 0.5zm-66.1-13.4c0.7-0.5 1.3-1.1 1.9-1.7-0.1-0.1-0.2-0.2-0.5-0.3-0.7 0.5-1.4 1-2.1 1.6-0.7 0.5-1.4 1.1-2.1 1.6-4 2.9-8.1 5.8-12.1 8.7-19.3 13.8-38.6 27.7-57.8 41.8-5.4 3.9-10.5 8.1-15.6 12.3-2.1 1.7-4.2 3.5-6.3 5.2-1.5 1.2-2.8 2.6-4.1 4-0.5 0.5-1 1.1-1.2 1.8-0.1 0.5 0.1 1.2 0.4 1.5s1.1 0.4 1.5 0.2c0.8-0.4 1.5-0.9 2.2-1.5l7.2-6c4.2-3.6 8.5-7.1 12.8-10.5 10.6-8.2 21.3-16.4 31.9-24.5l23.4-18c6.9-5.4 13.7-10.8 20.5-16.2zm0.5 13.5c-1.1 1-2.2 2-3.4 2.9-3.3 2.6-6.7 5.2-10 7.8-11 8.5-22 17-32.9 25.6-6.4 5.1-12.8 10.3-19.1 15.4-3.5 2.8-7 5.7-10.5 8.5-0.8 0.7-1.6 1.4-2.5 1.9-0.5 0.3-1.6 0.3-1.9 0-0.4-0.4-0.5-1.4-0.2-1.9 0.4-0.8 1-1.6 1.7-2.3 0.7-0.6 1.4-1.3 2.1-1.9 1.7-1.6 3.4-3.2 5.2-4.7 20-15.8 40.2-31.3 61.3-45.6 2.3-1.6 4.7-3.1 7.1-4.6 0.5-0.3 1-0.7 1.5-1 0.4-0.2 0.8-0.4 1.2-0.7 0.1 0.1 0.1 0.2 0.2 0.3s0.2 0.2 0.2 0.3zm7 13.4 0.6-0.6c-0.3-0.2-0.4-0.3-0.4-0.3-1.5 1.1-3 2.2-4.5 3.2-16.7 11.1-32.8 23-48.7 35.1-4.7 3.5-9.3 7.1-13.9 10.7-0.9 0.7-1.7 1.5-2.4 2.3-0.6 0.7-0.9 1.6-0.2 2.4 0.7 0.9 1.6 0.8 2.4 0.3 1.1-0.6 2.2-1.3 3.2-2.1 1.8-1.4 3.5-2.8 5.2-4.3 1.7-1.4 3.5-2.8 5.2-4.3 12.1-9.5 24.3-19 36.5-28.4l15-12c0.6-0.4 1.3-1.2 2-2z">
                                                    </path>
                                                </svg>
                                            </figure>

                                            <!-- Form START -->
                                            <form method="post" class="row g-3 position-relative">
                                                <!-- Comment -->
                                                <div class="col-12">
                                                    <label class="form-label"> Request a Message *</label>
                                                    <textarea name="cancellation_message"
                                                        placeholder="Enter Your Cancellation Request Message"
                                                        class="form-control" rows="6" required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Cancellation Reason</option>
                                                        <?php if (isset($_GET["selling_order"])) { ?>
                                                        <option> Buyer is not responding </option>
                                                        <option> Buyer does not accept work </option>
                                                        <option> Buyer tells me to, cancel this order. </option>
                                                        <?php } elseif (isset($_GET["buying_order"])) { ?>
                                                        <option> Seller is not responding </option>
                                                        <option> Seller did't do well in the work </option>
                                                        <option> Seller tells me to, cancel this order. </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <!-- Button -->
                                                <div class="col-12">
                                                    <input type="submit" name="submit_cancellation_request"
                                                        value="Send Cancellation"
                                                        class="btn btn-outline-success mb-0 py-2 px-2">

                                                </div>
                                            </form>
                                            <!-- Form END -->
                                        </div>
                                    </div>
                                    <!-- Resolution Services  Content END -->
                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>

                        <!-- End of Management Content -->


                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Deliver Modal --- -->
    <?php if (isset($_GET["selling_order"])) { ?>
    <!-- first review  -->
    <div class="modal fade" id="deliver-order-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Deliver Your
                        Order </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="message" class="form-label">Deliver your message *</label>
                            <textarea class="form-control" rows="6" name="delivered_message" required
                                placeholder="your message"></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Upload document</label>
                            <input name="revison_file" class="form-control" type="file" id="formFile">
                        </div>
                        <div class="modal-footer border-0">
                            <input type="submit" name="submit_delivered" class="btn btn-sm btn-warning"
                                value="Submit Review">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php } elseif (isset($_GET["buying_order"])) { ?>
    <!-- first review  -->
    <div class="modal fade" id="revision-request-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h3 class="modal-title fs-5" id="exampleModalLabel"> Submit Your Revision Request Now</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="message" class="form-label">Deliver your message *</label>
                            <textarea class="form-control" rows="6" name="revison_message" required
                                placeholder="your message"></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="formFile" class="form-label">Upload document</label>
                            <input name="revison_file" class="form-control" type="file" id="formFile">
                        </div>
                        <div class="modal-footer border-0">
                            <input type="submit" name="submit_revison" class="btn btn-sm btn-warning"
                                value="Submit Review">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


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

    <script>
    $(document).ready(function() {
        // Set the date we're counting down to

        var countDownDate = new Date("Dec 10, 2025 20:46:03").getTime();

        // Update the count down every 1 second

        var x = setInterval(function() {
            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
            // If the count down is over, write some text 
            if (distance < 0) {

                clearInterval(x);

                <?php if (isset($_GET["selling_order"])) { ?>

                document.getElementById("countdown-heading").innerHTML =
                    "You Failed To Deliver Your Order On Time";
                <?php } elseif (isset($_GET["buying_order"])) { ?>

                document.getElementById("countdown-heading").innerHTML =
                    "Seller Failed To Deliver Your Order On Time";

                <?php } ?>

                $("#countdown-timer .countdown-number").addClass("countdown-number-late");

                document.getElementById("days").innerHTML = "Your";
                document.getElementById("hours").innerHTML = "Order";
                document.getElementById("minutes").innerHTML = "Is";
                document.getElementById("seconds").innerHTML = "Late";
            }
        }, 1000);

    });
    </script>

</body>

</html>