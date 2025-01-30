<!DOCTYPE html>
<html lang="en">
<title>CreativeHub - Category</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Harmony2k">
<meta name="keywords" content="CreativeHub, categories, graphics, design, digital marketing, writing, translation, video animation, programming, tech" />
<meta name="description" content="Explore a variety of categories on CreativeHub including graphics, digital marketing, writing, and more.">

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
        <section class="bg-dark align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover; ">
            <!-- <section class="bg-dark align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover; background-color: #0cbc87 !important;"> -->
            <!-- Main banner background image -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Title -->
                        <h1 class="text-white">Logo Design</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex">
                            <p class="lead">Stand out from the crowd with a logo that fits your brand personality</p>
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


                <!-- Search option START -->
                <div class="container-flex">
                    <div class="row mb-4 align-items-center">
                        <?php include('includes/category_sidebar.php') ?>
                    </div>
                </div>

                <!-- Search option END -->

                <!-- Course list START -->
                <div class="row g-4 justify-content-center" id="category_proposals">

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10140.jpg" alt="card image">
                                    <!-- Ribbon -->

                                    <div class="ribbon" id="ribbon">
                                        <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will create a
                                                    professional
                                                    minimalist business logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites"><i class="fas fa-heart text-danger"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Jonas Madison</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-5</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10137.jpg" alt="card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will create
                                                    modern minimalist logo
                                                    design for your business</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" class="h6 fw-light"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Jonas Madison</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-5</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10144.jpeg" alt="card image">
                                    <!-- Ribbon -->

                                    <div class="ribbon" id="ribbon">
                                        <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will create a
                                                    professional
                                                    minimalist business logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites"><i class="fas fa-heart text-danger"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Gemma</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-5</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10146.png" alt="card image">
                                    <!-- Ribbon -->
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will do
                                                    minimalist modern luxury
                                                    business logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites"><i class="fas fa-heart text-danger"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Numair Madison</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10151.jpg" alt="card image">
                                    <!-- Ribbon -->
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will create
                                                    minimalist logo design
                                                    for your business</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Nancy C</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10141.png" alt="card image">
                                    <!-- Ribbon -->

                                    <div class="ribbon" id="ribbon">
                                        <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will create a
                                                    professional
                                                    minimalist logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Rachel</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-3</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10162.jpg" alt="card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will do Watch
                                                    3d
                                                    logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites"><i class="fas fa-heart text-danger"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Jessica C</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-4</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10155.png" alt="card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will design a
                                                    luxury brand initial
                                                    letters, monogram logo</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Mark G</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-2</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10002.jpg" alt="card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will do Watch
                                                    AI 3d
                                                    logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Flichi Studio</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-4</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xxl-6">
                        <div class="card rounded overflow-hidden shadow">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4 bg-info">
                                    <img class="custom-img-cover" src="proposals/proposal_files/10169.jpg" alt="card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="card-title mb-0"><a href="proposals/proposal.php">I will do Watch
                                                    Watermark
                                                    logo design</a></h5>
                                            <!-- Wishlist icon -->
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Content -->
                                        <!-- Info -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0">By: <span class="text-info">Flichi Studio</span></li>
                                            <li class="list-inline-item h6 fw-light mb-1 mb-sm-0"> <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                    Design</span></li>
                                        </ul>
                                        <!-- Rating -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>

                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_full.svg" alt="">
                                            </li>
                                            <li class="list-inline-item me-0 small">
                                                <img src="assets/images/client/user_rate_blank.svg" alt="">
                                            </li>

                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                        </ul>
                                        <div class="d-flex justify-content-between mt-3">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-4</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                </div>
                <!-- Course list END -->

                <!-- Pagination START -->
                <div class="col-12">
                    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                        <ul d="search_pagination" class="pagination pagination-warning-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active" aria-current="page"><a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->

            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- =======================
Action box START -->
        <section class="pt-0">
            <div class="container position-relative">
                <!-- SVG -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                    <svg>
                        <path d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z" fill="#fff" fill-rule="evenodd" opacity=".502" />
                        <path d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z" fill="#fff" fill-rule="evenodd" opacity=".102" />
                        <path d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z" fill="#fff" fill-rule="evenodd" opacity=".2" />
                        <path d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z" fill="#fff" fill-rule="evenodd" opacity=".2" />
                    </svg>
                </figure>

                <div class="bg-success p-4 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- Svg -->
                        <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z" />
                            </svg>
                        </figure>
                        <!-- Action box -->
                        <div class="col-11 position-relative">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-7">
                                    <h3 class="text-white">Become an Certified Professionals</h3>
                                    <p class="text-white mb-3 mb-lg-0">Get help for any app quickly and easily by
                                        finding an expert,
                                        whether you're looking for general support or specific abilities.</p>
                                </div>
                                <!-- Button -->
                                <div class="col-lg-5 text-lg-end">
                                    <a href="creativehub-certified.php" class="btn btn-dark mb-0">Started today</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
Action box END -->

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
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

    <script>
        // ========== Using JQUERY =============// 
        $(document).ready(function() {

            // ========= TO  GET SELLER AND CLEAR ========

            // ------------- get_delivery_time & clear_delivery_time ---------

            $(".get_delivery_time").click(function() {
                if ($('.get_delivery_time:checked').length > 0) {
                    $(".clear_delivery_time").show();
                } else {
                    $(".clear_delivery_time").hide();
                }
            });



            // ------------- get_seller_level & clear_seller_level ---------

            $(".get_seller_level").click(function() {
                if ($('.get_seller_level:checked').length > 0) {
                    $(".clear_seller_level").show();
                } else {
                    $(".clear_seller_level").hide();
                }
            });

            // ------------- get_seller_language & clear_seller_language ---------
            $(".get_seller_language").click(function() {
                if ($('.get_seller_language:checked').length > 0) {
                    $(".clear_seller_language").show();
                } else {
                    $(".clear_seller_language").hide();
                }
            });


            $(".clear_delivery_time").click(function() {
                $('.get_delivery_time').prop('checked', false);
                $(".multi-collapse").removeClass(
                    "show"); // Remove the 'show' class from all multi-collapse elements
                $(".btn-more[href='#multiCollapseExample3']").attr('aria-expanded',
                    'false'); // Set aria-expanded attribute to 'false'
                $("#multiCollapseExample3").removeClass(
                    "show"); // Remove the 'show' class from the collapse body
                $(this).hide();
            });

            $(".clear_seller_level").click(function() {
                $('.get_seller_level').prop('checked', false);
                $(".multi-collapse").removeClass(
                    "show"); // Remove the 'show' class from all multi-collapse elements
                $(this).hide();
            });

            $(".clear_seller_language").click(function() {
                $('.get_seller_language').prop('checked', false);
                $(".multi-collapse").removeClass(
                    "show"); // Remove the 'show' class from all multi-collapse elements
                $(this).hide();
            });

            // ========= END OF GET SELLER AND CLEAR =========


            // ========== To clear ALL SELLERS FITTERS ============

            $(".clear_delivery_time").click(function() {
                $(".clear_delivery_time").hide();
            });

            $(".clear_seller_level").click(function() {
                $(".clear_seller_level").hide();
            });

            $(".clear_seller_language").click(function() {
                $(".clear_seller_language").hide();
            });

        });

        // ========== END  clear ALL SELLERS FITTERS ============


        // =============== TO Clear ALL FUNCTION IN CHECKBOX FITTERS ======
        function clearDelivery() {
            $('.get_delivery_time').prop('checked', false);
        }

        function clearLevel() {
            $('.get_seller_level').prop('checked', false);
        }

        function clearLanguage() {
            $('.get_seller_language').prop('checked', false);
        }

        // =============== TO Clear ALL FUNCTION IN CHECKBOX FITTERS ======
    </script>

    <!-- Bootstrap Tooltip Initialization -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>


</body>

</html>