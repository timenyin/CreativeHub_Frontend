<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub Favorite Page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="View Your Favorites proposals content ">

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
                    <div class="container">
                        <div class="row">
                            <div class="col-12  mt-5">
                                <!-- Title -->
                                <h1 class="text-white">Favorite Services</h1>
                                <p class="lead">Favorite lists that contains your preferred services.</p>
                            </div>
                        </div>
                    </div>
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
                                        <h1 class="my-1 fs-4">Lori Stevens <i class="bi bi-patch-check-fill text-info small"></i></h1>
                                        <p>Username:<span class="text-success">@Lori266</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profile banner END -->
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
                <!-- Content and button -->
                <div class="d-sm-flex justify-content-sm-between align-items-center mb-4">
                    <h5 class="mb-2 mb-sm-0">You have 3 items in Favorite List</h5>
                    <div class="text-end"> <a href="favourites.php?add_favourites" class="btn btn-success-soft mb-0"><i class="fa fa-lg fa-shopping-cart" aria-hidden="true"></i>Add to Chart</a> </div>
                </div>
                <div class="row g-4">
                    <!-- Card item START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <!-- <img src="proposals/proposal_files/08.jpg" class="card-img-top" alt="course image"> -->
                            <img src="proposals/proposal_files/10148.png" class="custom-img-cover rounded" alt="proposals image">
                            <!-- Ribbon -->
                            <div class="ribbon shake" id="ribbon">
                                <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work." data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                            </div>

                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-purple bg-opacity-10 text-purple">Web
                                        Development</span>
                                    <!-- Tooltip Trigger -->
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" class="text-danger" aria-label="Add To Favorites" data-bs-original-title="Add To Favorites"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="proposals/proposal.php">I will make ugc content
                                        for your brand, I am
                                        tattooed male creator</a></h5>
                                <small class="mb-2 text-truncate-2">Proposal By: <span class="text-capitalize text-purple">Jonas Madison </span></small>
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
                                    <span class="h6 fw-light mb-0 text-purple"><i class="fa-solid fa-medal " aria-hidden="true"></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                    <span class="h6 fw-light mb-0 text-purple"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign" aria-hidden="true"></i>20</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="proposals/proposal_files/10136.jpg" class="custom-img-cover rounded" alt="proposals image">
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-success bg-opacity-10 text-success">Video & Animation</span>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" class="text-danger" aria-label="Add To Favorites" data-bs-original-title="Add To Favorites"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="proposals/proposal.php">I will make Video & Animation
                                        content
                                        for your brand, I am
                                    </a></h5>
                                <!-- seller name -->
                                <small class="mb-2 text-truncate-2">Proposal By:
                                    <span class="text-capitalize text-success">Jonas Madison </span>
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
                                    <span class="h6 fw-light mb-0 text-success"><i class="fa-solid fa-medal " aria-hidden="true"></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                    <span class="h6 fw-light mb-0 text-success"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign" aria-hidden="true"></i>20</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="proposals/proposal_files/10135.jpg" class="custom-img-cover rounded" alt="proposals image">
                            <!-- Ribbon -->
                            <div class="ribbon shake" id="ribbon">
                                <span><img src="assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work." data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work.">
                                </span>
                            </div>
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-purple bg-opacity-10 text-purple">Web
                                        Development</span>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" class="text-danger" aria-label="Add To Favorites" data-bs-original-title="Add To Favorites"><i class="fas fa-heart" aria-hidden="true"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="proposals/proposal.php">I will make ugc content
                                        for your brand, I am
                                        tattooed male creator</a></h5>
                                <small class="mb-2 text-truncate-2">Proposal By: <span class="text-capitalize text-purple">Jonas Madison </span>
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
                                    <span class="h6 fw-light mb-0 text-purple"><i class="fa-solid fa-medal " aria-hidden="true"></i>&nbsp;<small class="fw-bold">LEVEL-1</small></span>
                                    <span class="h6 fw-light mb-0 text-purple"><small>STATING AT</small> <span class="fw-bold"><i class="fa-solid fa-dollar-sign" aria-hidden="true"></i>20</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                </div>
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