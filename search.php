<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub: Explore Diverse Digital Resources for Business Growth</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="keywords" content="CreativeHub, digital marketing, video animation, writing, copywriting, tech, graphics, design, programming, online resources" />
    <meta name="description" content="Discover a wealth of online resources spanning digital marketing, video animation, writing, tech, and more on CreativeHub. Empower your business and unleash creativity with our diverse categories.">

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

        window.addEventListener('DOMContentLoaded', () => {
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
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

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
        <section class="bg-blue align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Title -->
                        <h1 class="text-white">Find the Perfect Service Provider</h1>
                        <p class="lead">Explore a World of Talent and Services on Our Marketplace</p>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item btn btn-white "><i class="fa-solid fa-photo-film"></i>
                                        <a class="text-dark" href="sellingon.php">How
                                            CreativeHub Works</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Main content START -->
                    <div class="col-lg-8 col-xl-9">

                        <!-- Search option START -->
                        <div class="row mb-4 align-items-center">

                            <!-- Select option -->
                            <div class="col-xl-11">
                                <p class="lead mt-3"><i class="fa-solid fa-quote-left search_quot"></i>I will create
                                    modern minimalist and luxury logo design<i class="fa-solid fa-quote-right search_quot"></i> </p>
                            </div>

                            <!-- Content -->
                            <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center mt-3 mt-xl-0">
                                <!-- Advanced filter responsive toggler START -->
                                <button class="btn btn-orange  mb-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                    <i class="fas fa-sliders-h me-1"></i> Show filter
                                </button>
                                <!-- Advanced filter responsive toggler END -->
                                <!-- <p class="mb-0 text-end">Showing 1-7 of 32 result</p> -->
                            </div>

                        </div>
                        <!-- Search option END -->

                        <!-- Course Grid START -->
                        <div class="row g-4" id="search_proposals">

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10135.jpg" class="custom-img-cover" alt="course image">
                                    <!-- Ribbon -->
                                    <div class="ribbon" id="ribbon">
                                        <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <!-- Tooltip Trigger -->
                                            <a href="#" class="h6 fw-light mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will design a
                                                luxury brand initial
                                                letters, monogram logo</a></h5>
                                        <small class="mb-2 text-truncate-2">Proposal By: <span class="text-capitalize text-info">Jonas Madison </span></small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-5</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10160.jpg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">H Kissm </span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10135.jpg" class="custom-img-cover" alt="course image">
                                    <!-- Ribbon -->
                                    <div class="ribbon" id="ribbon">
                                        <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <!-- Tooltip Trigger -->
                                            <a href="#" class="h6 fw-light mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will design a
                                                luxury brand initial
                                                letters, monogram logo</a></h5>
                                        <small class="mb-2 text-truncate-2">Proposal By: <span class="text-capitalize text-info">Jonas Madison </span></small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-5</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10001.jpg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make AI Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">Douglas W </span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10136.jpg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">Sahl M</span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10137.jpg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">Co Nusa </span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10169.jpg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">Marry J </span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10155.png" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">Will Brons </span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-xl-4">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="proposals/proposal_files/10144.jpeg" class="custom-img-cover" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge bg-info bg-opacity-10 text-info">Graphics &
                                                Design</span>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="proposals/proposal.php">I will make Design
                                                content for your brand, Logo</a></h5>
                                        <!-- seller name -->
                                        <small class="mb-2 text-truncate-2">Proposal By:
                                            <span class="text-capitalize text-info">KissDoz</span>
                                        </small>
                                        <!-- Rating star -->
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
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0 text-info"><i class="fa-solid fa-medal "></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                            <span class="h6 fw-light mb-0 text-info"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign"></i>20</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                        </div>
                        <!-- Course Grid END -->
                        <!-- loader  -->
                        <div id="wait"></div>
                        <!--  end of loader  -->


                        <!-- Pagination START -->
                        <div class="col-12">
                            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                                <ul d="search_pagination" class="pagination pagination-warning-soft d-inline-block d-md-flex rounded mb-0">
                                    <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item mb-0 active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->


                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4 col-xl-3">
                        <?php include("includes/search_sidebar.php"); ?>
                    </div>
                    <!-- Right sidebar END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- =======================
Newsletter START -->
        <section class="pt-0">
            <div class="container position-relative overflow-hidden">
                <!-- SVG decoration -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                    <svg>
                        <path d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z" fill="#fff" fill-rule="evenodd" opacity=".502" />
                        <path d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z" fill="#fff" fill-rule="evenodd" opacity=".102" />
                        <path d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z" fill="#fff" fill-rule="evenodd" opacity=".2" />
                        <path d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z" fill="#fff" fill-rule="evenodd" opacity=".2" />
                    </svg>
                </figure>
                <!-- Svg decoration -->
                <figure class="position-absolute bottom-0 end-0 mb-5 d-none d-sm-block">
                    <svg class="rotate-130" width="258.7px" height="86.9px" viewBox="0 0 258.7 86.9">
                        <path stroke="white" fill="none" stroke-width="2" d="M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5" />
                        <path stroke="white" fill="none" stroke-width="2" d="M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5" />
                    </svg>
                </figure>

                <div class="bg-grad-pink p-3 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z" />
                            </svg>
                        </figure>
                        <!-- Newsletter -->
                        <div class="col-12 position-relative my-2 my-sm-3">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-6">
                                    <h3 class="text-white mb-3 mb-lg-0">Subscribe to our Newsletter for New Features
                                        Updates
                                    </h3>
                                </div>
                                <!-- Input item -->
                                <div class="col-lg-6 text-lg-end">
                                    <form class="bg-body rounded p-2">
                                        <div class="input-group">
                                            <input class="form-control border-0 me-1" type="email" placeholder="Enter Your Email">
                                            <button type="button" class="btn btn-dark mb-0 rounded">Subscribe!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
Newsletter END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <?php include('includes/footer.php') ?>
    <!-- ===============
Footer END -->


    <script>
        // ========== Using JQUERY =============// 
        $(document).ready(function() {

            // ========= TO  GET SELLER AND CLEAR =========

            // ------------- get_cat_id & clear_cat_id ---------

            $(".get_cat_id").click(function() {

                if ($('.get_cat_id:checked').length > 0) {
                    $(".clear_cat_id").show();
                } else {
                    $(".clear_cat_id").hide();
                }
            });



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

            // ========= END OF GET SELLER AND CLEAR =========


            // ========== To clear ALL SELLERS FITTERS ============

            $(".clear_cat_id").click(function() {
                $(".clear_cat_id").hide();
            });

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

        function clearCat() {
            $('.get_cat_id').prop('checked', false);
        }

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

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

    <!-- Bootstrap Tooltip Initialization -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>

</body>

</html>