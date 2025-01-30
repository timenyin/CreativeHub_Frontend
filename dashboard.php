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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

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
                <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens <i class="bi bi-patch-check-fill text-info small"></i>
                                        </h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>Positive Ratings : 100%
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>React Delivery :
                                                June 2024
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fa-solid fa-calendar-day text-secondary me-1" aria-hidden="true"></i>Member Since : April 2021</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-center mt-2 mt-md-0">
                                        <ul class="list-inline mt-3">
                                            <!-- Price -->
                                            <li class="list-inline-item">
                                                <input type="radio" class="btn-check" name="options" id="option3" checked="">
                                                <label class="btn btn-success-soft-check" for="option3">
                                                    <span class="mb-2 h6 fw-light">creativeHub's Choice</span>
                                                    <!-- Price and discount -->
                                                    <span class="d-flex align-items-center">
                                                        <span class="mb-0 h5 me-2 text-success">VIP</span>
                                                        <span class="text-decoration-line-through fs-6 mb-0 me-2">CON</span>
                                                        <span class="badge  mb-0"> <img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work." data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Dashboard Menu <i class="fa-solid fa-arrow-right-long animation-blink" aria-hidden="true"></i></a>
                            <button class="btn btn-blue d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
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
                        <!-- payment cards -->
                        <div class="row g-4 mb-4">
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-primary bg-opacity-10 h-100 p-3 rounded-3">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Balance </h6>
                                        <span class="badge bg-primary bg-opacity-10 text-primary ms-2 mb-0">Available
                                            for Withdrawal</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="purecounter mb-2 mt-2" data-purecounter-start="0" data-purecounter-end="8485" data-purecounter-delay="300">8,485</h2>
                                    </div>

                                    <a href="#" class="btn btn-sm btn-primary rounded-5  mb-0">Withdraw Earning</a>
                                </div>
                            </div>
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-success bg-opacity-10 p-3 rounded-3 h-100">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Last month payout</h6>
                                        <span class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">Paid</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="purecounter mb-2 mt-2" data-purecounter-start="0" data-purecounter-end="1225" data-purecounter-delay="300">12,25</h2>
                                    </div>


                                </div>
                            </div>
                            <!-- Box item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="bg-danger bg-opacity-10 p-3 rounded-3 h-100">
                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <h6 class="mb-0">Deposit </h6>
                                        <span class="badge bg-danger bg-opacity-10 text-danger ms-2 mb-0">expenses</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mb-0 h2">$</span>
                                        <h2 class="purecounter mb-2 mt-2" data-purecounter-start="0" data-purecounter-end="1556" data-purecounter-delay="300">1556</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of payment card -->

                        <!-- Counter boxes START -->
                        <div class="row g-4">
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-6">
                                <div class="d-flex align-items-center bg-orange bg-opacity-10 rounded-3 py-2 px-5">
                                    <i class="fa-regular fa-hourglass-half fa-fw text-orange" style="font-size: 1.5rem;"></i>
                                    <div class="ms-2"><span class="h6">Sales In Queue :
                                            19</span></div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-6">
                                <div class="d-flex align-items-center bg-orange bg-opacity-10 rounded-3 py-2 px-5">
                                    <i class="fa-solid fa-box-open fa-fw text-orange" style="font-size: 1.5rem;"></i>
                                    <div class="ms-2"><span class="h6">Open Purchases :
                                            27</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-2">

                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center bg-purple bg-opacity-10 rounded-3 py-2 px-5">
                                    <i class="bi bi-cart-check-fill" style="font-size: 1.5rem;"></i>
                                    <div class="ms-2"><span class="h6">Orders Completed :
                                            23</span></div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center bg-purple bg-opacity-10 rounded-3 py-2 px-5">
                                    <i class="bi bi-cart-plus-fill text-purple" style="font-size: 1.5rem;"></i>
                                    <div class="text-primary-hover ms-2"><span class="h6">Orders Delivered :
                                            8</span></div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center bg-danger bg-opacity-10 rounded-3 py-2 px-5">
                                    <i class="bi bi-cart-x-fill text-danger" style="font-size: 1.5rem;"></i>
                                    <div class="ms-2"><span class="h6">Orders Cancelled : 3</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter boxes END -->

                        <div class="card shadow rounded-2 p-0 mt-3">
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 btn-success-soft-check text-success mb-md-0 active" style="border:none !important;" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Notification</button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 btn-success-soft-check text-success mb-md-0" style="border:none !important;" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false" tabindex="-1">Messages</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">
                                    <!-- Content START -->
                                    <div class="tab-pane fade active show" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                        <!-- Notification START -->
                                        <div class="card-body p-0">
                                            <ul class="list-group list-unstyled list-group-flush">
                                                <!-- inbox item -->
                                                <li style="position: relative;">
                                                    <a href="http://CreativeHub/conversations/insert_message.php?single_message_id" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <u class="small h6">Sam Courts</u>
                                                            <p class="text-body small m-0">Congratulate <b>Joan
                                                                    Wallace</b> for graduating from <b>Microverse
                                                                    university</b></p>
                                                            <u class="small me-auto">11:04 Jun 07 2024</u>
                                                        </div>
                                                    </a>
                                                    <div style="position: absolute;top: 4px;right: 9px;">
                                                        <a href="dashboard.php?delete_notification" class="badge bg-danger bg-opacity-10 text-danger btn-round btn-sm mb-0" style=" font-size: 0.9rem !important; height: 22px !important; width: 22px !important;line-height: 23px !important;">
                                                            <span><i class="bi bi-x-lg" aria-hidden="true"></i></span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <!-- end of inbox item -->
                                                <!-- inbox item -->
                                                <li style="position: relative;">
                                                    <a href="http://CreativeHub/conversations/insert_message.php?single_message_id" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <u class="small h6">Sam Courts</u>
                                                            <p class="text-body small m-0">Congratulate <b>Joan
                                                                    Wallace</b> for graduating from <b>Microverse
                                                                    university</b></p>
                                                            <u class="small me-auto">11:04 Jun 07 2024</u>
                                                        </div>
                                                    </a>
                                                    <div style="position: absolute;top: 4px;right: 9px;">
                                                        <a href="dashboard.php?delete_notification" class="badge bg-danger bg-opacity-10 text-danger btn-round btn-sm mb-0" style=" font-size: 0.9rem !important; height: 22px !important; width: 22px !important;line-height: 23px !important;">
                                                            <span><i class="bi bi-x-lg" aria-hidden="true"></i></span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <!-- end of inbox item -->
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                                        <!-- Message START -->
                                        <div class="card-body p-0">
                                            <ul class="list-group list-unstyled list-group-flush">
                                                <!-- inbox item -->
                                                <li style="position: relative;">
                                                    <a href="http://CreativeHub/conversations/insert_message.php?single_message_id" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <u class="small h6">Sam Courts</u>
                                                            <p class="text-body small m-0">Congratulate <b>Joan
                                                                    Wallace</b> for graduating from <b>Microverse
                                                                    university</b></p>
                                                            <u class="small me-auto">11:04 Jun 07 2024</u>
                                                        </div>
                                                    </a>

                                                </li>
                                                <!-- end of inbox item -->
                                                <!-- inbox item -->
                                                <li style="position: relative;">
                                                    <a href="http://CreativeHub/conversations/insert_message.php?single_message_id" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                        <div class="me-3">
                                                            <div class="avatar avatar-md">
                                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <u class="small h6">Sam Courts</u>
                                                            <p class="text-body small m-0">Congratulate <b>Joan
                                                                    Wallace</b> for graduating from <b>Microverse
                                                                    university</b></p>
                                                            <u class="small me-auto">11:04 Jun 07 2024</u>
                                                        </div>
                                                    </a>

                                                </li>
                                                <!-- end of inbox item -->
                                            </ul>
                                        </div>
                                        <a href="conversations/inbox.php" class="btn btn-success me-2 mb-2 mt-3 mb-sm-0">See all incoming messages <i class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                    <!-- Content END -->

                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>


                        <!-- Sellers & Buyers List table START -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-transparent rounded-3 mt-5">
                                    <!-- Card header START -->
                                    <h5 class="pb-3 px-4 mb-md-0">My Contact History</h5>
                                    <div class="card-header border-bottom px-4 py-3">
                                        <ul class="nav nav-pills nav-tabs-line py-0" id="sell-buyer-pills-tab" role="tablist">
                                            <!-- Tab item -->
                                            <li class="nav-item me-2 me-sm-4 " role="presentation">
                                                <button class="nav-link btn-success-soft-check  mb-2 mb-md-0 text-success active" style="border:none !important;" id="buyer-pills-tab" data-bs-toggle="pill" data-bs-target="#buyer-pills" type="button" role="tab" aria-controls="buyer_dashboard" aria-selected="true">Buyers
                                                    Profiles</button>
                                            </li>
                                            <!-- Tab item -->
                                            <li class="nav-item me-2 me-sm-4" role="presentation">
                                                <button class="nav-link btn-success-soft-check text-success mb-2 mb-md-0" style="border:none !important;" text-success id="seller-pills-tab" data-bs-toggle="pill" data-bs-target="#seller-pills" type="button" role="tab" aria-controls="seller_dashboard" aria-selected="false" tabindex="-1">Seller Profiles</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Proposals profiles list START -->
                                    <!-- Tab contents START -->
                                    <div class="card-body p-1">
                                        <div class="tab-content" id="buy&sell-pills-tabContent">
                                            <!-- buyer pill  -->
                                            <div class="tab-pane fade show active" id="buyer-pills" role="tabpanel" aria-labelledby="buyer-pills-tab">
                                                <div class="row g-1 justify-content-center">
                                                    <!-- Card item START -->
                                                    <div class="col-lg-10 col-xl-6">
                                                        <div class="card shadow p-2">
                                                            <div class="row g-0">
                                                                <!-- Image -->
                                                                <div class="col-md-4">
                                                                    <img src="assets/images/instructor/01.jpg" class="rounded-3" alt="...">
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <!-- Title -->
                                                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                                            <div>
                                                                                <h5 class="card-title mb-0"><a href="#">Dennis Barrett</a></h5>
                                                                                <a href="" class="h6 fw-light">Username:<span class="small text-success mb-2 mb-sm-0">@Dennis</span></a>
                                                                            </div>
                                                                            <!-- Dropdown Menu -->
                                                                            <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success send_button_4" style="cursor: pointer; visibility: visible;">
                                                                                <!-- Share button -->
                                                                                <a href="#" class="rounded small text-warning" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false" data-bs-placement="top" aria-label="Share" data-bs-original-title="Share">
                                                                                    <i class="fas fa-fw fa-share-alt" aria-hidden="true"></i>
                                                                                </a>

                                                                                <!-- Dropdown Menu Items -->
                                                                                <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare" style="">
                                                                                    <li>
                                                                                        <a href="user.php" class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0">
                                                                                            <i class="bi bi-link-45deg animation-blink" aria-hidden="true"></i>
                                                                                            view profile
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Content -->
                                                                        <!-- Info -->
                                                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                                            <!-- Title -->
                                                                            <h6><a class="text-decoration-underline text-underline text-success mb-0" href=""> View History</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card item END -->


                                                    <!-- Card item START -->
                                                    <div class="col-lg-10 col-xl-6">
                                                        <div class="card shadow p-2">
                                                            <div class="row g-0">
                                                                <!-- Image -->
                                                                <div class="col-md-4">
                                                                    <img src="assets/images/instructor/02.jpg" class="rounded-3" alt="...">
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <!-- Title -->
                                                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                                            <div>
                                                                                <h5 class="card-title mb-0"><a href="#">Jacqueline Miller</a>
                                                                                </h5>
                                                                                <a href="" class="h6 fw-light">Username:<span class="small text-success mb-2 mb-sm-0">@Jacqueline</span></a>
                                                                            </div>
                                                                            <!-- Dropdown Menu -->
                                                                            <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success send_button_4" style="cursor: pointer; visibility: visible;">
                                                                                <!-- Share button -->
                                                                                <a href="#" class="rounded small text-warning" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false" data-bs-placement="top" aria-label="Share" data-bs-original-title="Share">
                                                                                    <i class="fas fa-fw fa-share-alt" aria-hidden="true"></i>
                                                                                </a>

                                                                                <!-- Dropdown Menu Items -->
                                                                                <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare" style="">
                                                                                    <li>
                                                                                        <a href="user.php" class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0">
                                                                                            <i class="bi bi-link-45deg animation-blink" aria-hidden="true"></i>
                                                                                            view profile
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Content -->
                                                                        <!-- Info -->
                                                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                                            <!-- Title -->
                                                                            <h6><a class="text-decoration-underline text-underline text-success mb-0" href=""> View History</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card item END -->
                                                </div>
                                            </div>
                                            <!-- END of buyer pill -->

                                            <!-- seller pill -->
                                            <div class="tab-pane fade" id="seller-pills" role="tabpanel" aria-labelledby="seller-pills-tab">
                                                <div class="row g-1 justify-content-center">
                                                    <!-- Card item START -->
                                                    <div class="col-lg-10 col-xl-6">
                                                        <div class="card shadow p-2">
                                                            <div class="row g-0">
                                                                <!-- Image -->
                                                                <div class="col-md-4">
                                                                    <img src="assets/images/instructor/03.jpg" class="rounded-3" alt="...">
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <!-- Title -->
                                                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                                            <div>
                                                                                <h5 class="card-title mb-0"><a href="#">Samuel Bishop</a></h5>
                                                                                <a href="" class="h6 fw-light">Username:<span class="small text-success mb-2 mb-sm-0">@Samuel77</span></a>
                                                                            </div>
                                                                            <!-- Dropdown Menu -->
                                                                            <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success send_button_4" style="cursor: pointer; visibility: visible;">
                                                                                <!-- Share button -->
                                                                                <a href="#" class="rounded small text-warning" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false" data-bs-placement="top" aria-label="Share" data-bs-original-title="Share">
                                                                                    <i class="fas fa-fw fa-share-alt" aria-hidden="true"></i>
                                                                                </a>

                                                                                <!-- Dropdown Menu Items -->
                                                                                <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare" style="">
                                                                                    <li>
                                                                                        <a href="user.php" class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0">
                                                                                            <i class="bi bi-link-45deg animation-blink" aria-hidden="true"></i>
                                                                                            view profile
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Content -->
                                                                        <!-- Info -->
                                                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                                            <!-- Title -->
                                                                            <h6><a class="text-decoration-underline text-underline text-success mb-0" href=""> View History</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card item END -->

                                                    <!-- Card item START -->
                                                    <div class="col-lg-10 col-xl-6">
                                                        <div class="card shadow p-2">
                                                            <div class="row g-0">
                                                                <!-- Image -->
                                                                <div class="col-md-4">
                                                                    <img src="assets/images/instructor/08.jpg" class="rounded-3" alt="...">
                                                                </div>

                                                                <!-- Card body -->
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <!-- Title -->
                                                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                                                            <div>
                                                                                <h5 class="card-title mb-0"><a href="#">Joan Wallace</a></h5>
                                                                                <a href="" class="h6 fw-light">Username:<span class="small text-success mb-2 mb-sm-0">@Joan58</span></a>
                                                                            </div>
                                                                            <!-- Dropdown Menu -->
                                                                            <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success send_button_4" style="cursor: pointer; visibility: visible;">
                                                                                <!-- Share button -->
                                                                                <a href="#" class="rounded small text-warning" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false" data-bs-placement="top" aria-label="Share" data-bs-original-title="Share">
                                                                                    <i class="fas fa-fw fa-share-alt" aria-hidden="true"></i>
                                                                                </a>

                                                                                <!-- Dropdown Menu Items -->
                                                                                <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare" style="">
                                                                                    <li>
                                                                                        <a href="user.php" class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0">
                                                                                            <i class="bi bi-link-45deg animation-blink" aria-hidden="true"></i>
                                                                                            view profile
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Content -->
                                                                        <!-- Info -->
                                                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                                            <!-- Title -->
                                                                            <h6><a class="text-decoration-underline text-underline text-success mb-0" href=""> View History</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card item END -->
                                                </div>
                                            </div>
                                            <!-- seller pill -->

                                        </div>
                                    </div>
                                    <!-- Tab contents END -->
                                    <!-- Proposals Profiles list END -->
                                </div>
                            </div>
                        </div>
                        <!-- Sellers & Buyers List table END -->

                        <!-- Sellers & Buyers List table END -->


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