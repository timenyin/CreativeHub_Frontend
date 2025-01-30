<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub- Proposal Title Here</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - [Title Here]">

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
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/choices/css/choices.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/splide/splide.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">



</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="../index.php">
                    <img class="light-mode-item navbar-brand-item" src="../assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="../assets/images/logo-light.svg" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav category menu START -->
                    <ul class="navbar-nav navbar-nav-scroll menu-count ms-5">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                            <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                            <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Graphics &
                                        Design</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Graphics
                                                        &
                                                        Design</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/logo.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Logo
                                                            Design</a>
                                                        <p class="mb-0 small">Craft unique logos for brands.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/business-card.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Business
                                                            Cards &
                                                            Stationery</a>
                                                        <p class="mb-0 small">Design personalized cards and stationery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/font.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Fonts
                                                            &
                                                            Typography</a>
                                                        <p class="mb-0 small">Create custom fonts and typefaces.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/settings.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Website
                                                            Design</a>
                                                        <p class="mb-0 small">Design visually appealing websites.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/user-interface.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">App
                                                            Design</a>
                                                        <p class="mb-0 small">Create layouts for mobile applications.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/front-development.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">UX
                                                            Design</a>
                                                        <p class="mb-0 small">Improve user experience with design.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/layout.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Landing
                                                            Page
                                                            Design</a>
                                                        <p class="mb-0 small">Develop focused, high-conversion pages.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/web-design.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Icon
                                                            Design</a>
                                                        <p class="mb-0 small">Design custom icons for branding.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/protected.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">NFT
                                                            Art</a>
                                                        <p class="mb-0 small">Create unique, blockchain-based digital
                                                            art.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/design.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Architecture
                                                            &
                                                            Interior Design</a>
                                                        <p class="mb-0 small">Plan and design spaces innovatively.</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4 mb-3">
                                                <h6 class="mb-0">Download CreativeHub</h6>
                                                <hr>
                                                <!-- Image -->
                                                <img src="../assets/images/element/14.svg" alt="">

                                                <!-- Download button -->
                                                <div class="row g-2 justify-content-center mt-3">
                                                    <!-- Google play store button -->
                                                    <div class="col-6 col-sm-4 col-xxl-6">
                                                        <a> <img src="../assets/images/client/google-play.svg" class="btn-transition" alt="google-store"> </a>
                                                    </div>
                                                    <!-- App store button -->
                                                    <div class="col-6 col-sm-4 col-xxl-6">
                                                        <a> <img src="../assets/images/client/app-store.svg" class="btn-transition" alt="app-store"> </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Video &
                                        Animation</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Video
                                                        &
                                                        Animation</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/animation.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Editing
                                                            &
                                                            Post-Production</a>
                                                        <p class="mb-0 small">Enhance raw footage professionally.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/bullhorn.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Social
                                                            & Marketing
                                                            Videos</a>
                                                        <p class="mb-0 small">Create engaging videos for promotion.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/presenter.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Presenter
                                                            Videos</a>
                                                        <p class="mb-0 small">Record videos featuring on-screen
                                                            presenters.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/mentorship.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Explainer
                                                            Videos</a>
                                                        <p class="mb-0 small">Simplify concepts with animated
                                                            explanations.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/product-lauch.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Animation</a>
                                                        <p class="mb-0 small">Produce captivating animated content.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/clapperboard.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Product
                                                            Videos</a>
                                                        <p class="mb-0 small">Showcase products through dynamic visuals.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/animation_motion.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Motion
                                                            Graphics</a>
                                                        <p class="mb-0 small">Combine animation and graphic design
                                                            seamlessly.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/film-reel.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Filmed
                                                            Video
                                                            Production</a>
                                                        <p class="mb-0 small">Capture live-action videos professionally.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/videogame.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_chref=">Game
                                                            Trailers</a>
                                                        <p class="mb-0 small">Promote games with cinematic previews.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Programming &
                                        Tech</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Programming
                                                        &
                                                        Tech</a></h6>
                                                <hr> <!-- Divider -->

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/shopping.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Websites</a>
                                                        <p class="mb-0 small">Build and maintain functional websites.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/system.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Application
                                                            Development</a>
                                                        <p class="mb-0 small">Create custom software applications.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/virtual-assistant.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Software
                                                            Development</a>
                                                        <p class="mb-0 small">Develop tailored software solutions.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/app-development.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Mobile
                                                            Apps</a>
                                                        <p class="mb-0 small">Design apps for Android and iOS.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/check-in-desk.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Website
                                                            Platforms</a>
                                                        <p class="mb-0 small">Create sites using CMS or frameworks.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/cyber-security.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Support &
                                                            Cybersecurity</a>
                                                        <p class="mb-0 small">Ensure systems are secure and supported.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/currency-market.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Blockchain &
                                                            Cryptocurrency</a>
                                                        <p class="mb-0 small">Develop blockchain and crypto solutions.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/satisfaction.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">User Testing</a>
                                                        <p class="mb-0 small">Test and improve user experiences.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/gear.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">Electronics
                                                            Engineering</a>
                                                        <p class="mb-0 small">Design and develop electronic systems.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4  position-relative">
                                                    <img src="../assets/images/categories_Icons/quality-assurance.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id">QA & Review</a>
                                                        <p class="mb-0 small">Test and ensure quality assurance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Digital
                                        Marketing</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Digital
                                                        Marketing</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/search.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=Search">Search</a>
                                                        <p class="mb-0 small">Optimize search engines for visibility.
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/connection.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=Social">Social</a>
                                                        <p class="mb-0 small">Promote brands via social platforms.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/iteration.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=MethodsTechniques">Methods
                                                            &
                                                            Techniques</a>
                                                        <p class="mb-0 small">Explore marketing methods and approaches.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/report.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AnalyticsStrategy">Analytics
                                                            & Strategy</a>
                                                        <p class="mb-0 small">Analyze data and plan marketing
                                                            strategies.</p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/industrial-revolution.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=IndustryPurposeSpecific">Industry
                                                            &
                                                            Purpose-Specific</a>
                                                        <p class="mb-0 small">Focus on niche or targeted marketing
                                                            goals.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/crowdfunding.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=Crowdfunding">Crowdfunding</a>
                                                        <p class="mb-0 small">Build campaigns to raise funding online.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Music &
                                        Audio</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Music
                                                        &
                                                        Audio</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/search.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=MusicProductionWriting">Music
                                                            Production &
                                                            Writing</a>
                                                        <p class="mb-0 small">Compose and produce original music.</p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/connection.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AudioEngineeringPostProduction">Audio
                                                            Engineering & Post Production</a>
                                                        <p class="mb-0 small">Enhance audio with editing expertise.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/iteration.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=VoiceOverStreaming">Voice
                                                            Over & Streaming</a>
                                                        <p class="mb-0 small">Record and stream professional voiceovers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/report.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=LessonsTranscription">Lessons
                                                            &
                                                            Transcription</a>
                                                        <p class="mb-0 small">Learn and transcribe music effectively.
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 mt-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/industrial-revolution.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=DJing">DJing</a>
                                                        <p class="mb-0 small">Mix and perform music as a DJ.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/crowdfunding.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=SoundDesign">Sound
                                                            Design</a>
                                                        <p class="mb-0 small">Create unique sounds for media projects.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Business</a>
                                    <div class=" dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Business</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/consultation.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=FormationConsulting">Formation
                                                            & Consulting</a>
                                                        <p class="mb-0 small">Start and grow your business effectively.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/business.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=OperationsManagement">Operations
                                                            &
                                                            Management</a>
                                                        <p class="mb-0 small">Streamline business processes and
                                                            management.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/legal.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=LegalServices">Legal
                                                            Services</a>
                                                        <p class="mb-0 small">Access professional legal support and
                                                            advice.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/profit.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=SalesCustomerCare">Sales
                                                            &
                                                            Customer Care</a>
                                                        <p class="mb-0 small">Boost sales and enhance customer
                                                            experience.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/evaluation.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=OnlineInvestigations">Online
                                                            Investigations</a>
                                                        <p class="mb-0 small">Research and investigate online insights.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/customer-service.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=CustomerCare">Customer
                                                            Care</a>
                                                        <p class="mb-0 small">Provide outstanding support to customers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/project.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=SoftwareManagement">Software
                                                            Management</a>
                                                        <p class="mb-0 small">Manage business software and tools
                                                            effectively.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/analytics.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=MarketResearch">Market
                                                            Research</a>
                                                        <p class="mb-0 small">Gather insights to understand market
                                                            trends.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->

                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Consulting</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Consulting</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/video-call.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=BusinessConsultants">Business
                                                            Consultants</a>
                                                        <p class="mb-0 small">Expert guidance for business growth.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/planning.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=MarketingStrategy">Marketing
                                                            Strategy</a>
                                                        <p class="mb-0 small">Plan and execute effective marketing
                                                            strategies.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/technological-support.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=TechConsulting">Tech
                                                            Consulting</a>
                                                        <p class="mb-0 small">Innovative solutions for tech challenges.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/coach.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=CoachingAdvice">Coaching
                                                            &
                                                            Advice</a>
                                                        <p class="mb-0 small">Personalized coaching for success.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/mentorship_co.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=Mentorship">Mentorship</a>
                                                        <p class="mb-0 small">Learn and grow with experienced mentors.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/data-strategy.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=DataConsulting">Data
                                                            Consulting</a>
                                                        <p class="mb-0 small">Optimize data for better decisions.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/pie-chart.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=DataVisualizationConsulting">Data
                                                            Visualization
                                                            Consulting</a>
                                                        <p class="mb-0 small">Transform data into visual insights.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/cyber-security_co.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=CybersecurityConsulting">Cybersecurity
                                                            Consulting</a>
                                                        <p class="mb-0 small">Secure your systems and data effectively.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->

                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Writing
                                        & Translation</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Writing
                                                        & Translation</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/content-writing.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=ContentWriting">Content
                                                            Writing</a>
                                                        <p class="mb-0 small">Create engaging and original content.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/video-edition.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=EditingCritique">Editing
                                                            &
                                                            Critique</a>
                                                        <p class="mb-0 small">Polish and refine written work.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/books.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=BookeBookPublishing">Book
                                                            &
                                                            eBook Publishing</a>
                                                        <p class="mb-0 small">Publish books and eBooks professionally.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/hreflang.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=TranslationTranscription">Translation
                                                            &
                                                            Transcription</a>
                                                        <p class="mb-0 small">Convert language and audio to text.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/online-analytical.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=BusinessMarketingCopy">Business
                                                            & Marketing
                                                            Copy</a>
                                                        <p class="mb-0 small">Craft persuasive business-focused content.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/task.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=CareerWriting">Career
                                                            Writing</a>
                                                        <p class="mb-0 small">Write resumes and career documents.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/sheet.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=TechnicalWriting">Technical
                                                            Writing</a>
                                                        <p class="mb-0 small">Simplify complex ideas with clarity.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="category.php?cat_id">AI
                                        Services</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id" class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">View
                                                        AI
                                                        Services</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/virtual-assistant-integration.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIMobileDevelopment">AI
                                                            Mobile Development</a>
                                                        <p class="mb-0 small">Create AI-powered mobile applications.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/artist.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIArtists">AI
                                                            Artists</a>
                                                        <p class="mb-0 small">Generate creative AI-driven artwork.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/speech.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIAudio">AI
                                                            Audio</a>
                                                        <p class="mb-0 small">Produce audio enhanced by AI tools.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/ai.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIVideo">AI
                                                            Video</a>
                                                        <p class="mb-0 small">Develop AI-assisted video content.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/database-management.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=DataAI">Data</a>
                                                        <p class="mb-0 small">Leverage AI for data analysis.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5">
                                                <h6 class="mb-0"><a class="bg-opacity-10 rounded-2 py-2 px-2 mb-0">Sub
                                                        Categories List</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/analytics.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIBusinesses">AI
                                                            for Businesses</a>
                                                        <p class="mb-0 small">Integrate AI solutions into businesses.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/ai-powered-support.png" class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="../category.php?cat_child_id=AIContent">AI
                                                            Content</a>
                                                        <p class="mb-0 small">Generate content using AI technology.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 ">
                                                            </polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Advanced management tools
                                                        </h5>
                                                        <p class="text-white text-opacity-75">Seamlessly integrate
                                                            freelancers into your
                                                            team and projects.</p>
                                                        <!-- Button -->
                                                        <a href="our-business-solutions.php" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a href="../main-category.php" class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0">View
                                        all
                                        categories</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Nav category menu END -->

                    <!-- Nav Search START -->
                    <!-- <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form method="post" class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                name="search_query" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit" name="search">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div> -->
                    <!-- Nav Search END -->

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto ms-5">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                            <ul class="dropdown-menu" aria-labelledby="demoMenu">
                                <li> <a class="dropdown-item" href="../user_homepage.php">User's Home</a></li>
                                <li> <a class="dropdown-item" href="../main-category.php">Category</a></li>
                                <li> <a class="dropdown-item" href="../category.php">Categories Search</a></li>
                                <li> <a class="dropdown-item" href="proposal.php">Proposals</a></li>

                                <li> <a class="dropdown-item" href="../cart.php">Cart</a></li>
                                <li> <a class="dropdown-item" href="../checkout.php">Checkout</a></li>

                                <li> <a class="dropdown-item" href="../search.php">Search</a></li>
                                <li> <a class="dropdown-item" href="../Sign-in.php">Sign-in</a></li>
                                <li> <a class="dropdown-item" href="../sign-up.php">Sign-up</a></li>
                                <li> <a class="dropdown-item" href="../forgot-password.php">Forgot Password</a></li>
                                <li> <a class="dropdown-item" href="../change_pass.php">New Password</a></li>

                                <li> <a class="dropdown-item" href="../blog.php">Blog</a></li>
                                <li> <a class="dropdown-item" href="../single-blog.php">Single Blog</a></li>
                                <li> <a class="dropdown-item" href="../coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Megamenu-->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Megamenu</a>
                            <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                <div class="row p-4">
                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3 mb-3">
                                        <h6 class="mb-0">Footer Sections</h6>
                                        <hr>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="../privacy-policy.php">Privacy Policy</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../terms-of-service.php">Terms of
                                                    Service</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../property-claims.php">Property
                                                    Claims</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../help-&-Support.php">Help & Support</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../consumer&services.php">Consumer
                                                    Services</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../trust&safety.php">Trust & Safety</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../sellingon.php">Selling on
                                                    CreativeHub</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../buyingon.php">Buying on
                                                    CreativeHub</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3 mb-3">
                                        <h6 class="mb-0">Community Section</h6>
                                        <hr>
                                        <!-- Dropdown item -->
                                        <div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="../blog.php">Blog</a>
                                            <p class="mb-0 small text-truncate-2">Explore stories, ideas, and updates to
                                                inspire your journey and keep you informed.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="../invent_friend.php">Invent a
                                                Friend</a>
                                            <p class="mb-0 small text-truncate-2">Connect and collaborate with
                                                like-minded
                                                individuals to spark innovation and creativity.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="../become-seller.php">Become a
                                                Seller</a>
                                            <p class="mb-0 small text-truncate-2">Join our platform to showcase your
                                                products and grow your business with ease.</p>
                                        </div>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3 mb-3">
                                        <h6 class="mb-0">Our Business</h6>
                                        <hr>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0">
                                                <i class="fas fa-stamp text-google-icon"></i>
                                            </h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="../our-business-solutions.php">Our
                                                    Business Solutions</a>
                                                <p class="mb-0 small">To help companies locate and manage outstanding
                                                    independent contractors.</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fa-solid fa-crown text-info"></i></h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="../creativehub-pro.php">CreativeHub
                                                    Pro</a>
                                                <p class="mb-0 small">Companies looking to augment internal resources
                                                    with
                                                    outstanding independent skills.</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="bi bi-patch-check-fill text-purple"></i></h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="../creativehub-certified.php">CreativeHub Certified</a>
                                                <p class="mb-0 small">IT partners who wish to provide certified
                                                    specialists
                                                    to their clients.</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fa-solid fa-handshake text-warning"></i>
                                            </h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="partnerships.php">CreativeHub
                                                    Partnerships</a>
                                                <p class="mb-0 small">Ideal for you and the top freelance marketplace
                                                    for
                                                    digital services worldwide.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3 mb-3">
                                        <h6 class="mb-0">Download CreativeHub</h6>
                                        <hr>
                                        <!-- Image -->
                                        <img src="../assets/images/element/14.svg" alt="">

                                        <!-- Download button -->
                                        <div class="row g-2 justify-content-center mt-3">
                                            <!-- Google play store button -->
                                            <div class="col-6 col-sm-4 col-xxl-6">
                                                <a href="#"> <img src="../assets/images/client/google-play.svg" class="btn-transition" alt="google-store"> </a>
                                            </div>
                                            <!-- App store button -->
                                            <div class="col-6 col-sm-4 col-xxl-6">
                                                <a href="#"> <img src="../assets/images/client/app-store.svg" class="btn-transition" alt="app-store"> </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action box -->
                                    <div class="col-12">
                                        <div class="alert alert-secondary alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs me-2">
                                                <img class="avatar-img rounded-circle" src="../assets/images/element/question.png" alt="question-mark">
                                            </div>
                                            <!-- Info -->
                                            <span class="fw-bolder text-danger">Note:</span> This are the remaining
                                            FrontEnd Pages
                                            Been
                                            Created
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <!-- Nav item 5 Become a Seller -->
                        <li class="nav-item">
                            <a class="nav-link" href="../become-seller.php" aria-haspopup="true" aria-expanded="false">Become a
                                seller</a>
                        </li>


                        <!-- Nav item 6 link-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                                <li>
                                    <a class="dropdown-item" href="https://github.com/timenyin/CreativeHub_ReadMe.git" target="_blank">
                                        <i class="text-secondary fab fa-github me-2"></i>Github
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../docs/index.php" target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item" href="../docs/snippets-hero-banner.html" target="_blank">
                                        <i class="text-orange fas fa-project-diagram me-2"></i>FlowChart Layout
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- Recent search -->
                        <!-- Search -->
                        <li class="nav-item dropdown nav-search">
                            <a class="nav-link mb-0" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-display="static">
                                <i class="bi bi-search fs-5"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-start shadow rounded p-2 searchAtSmall" aria-labelledby="navSearch">
                                <form class="input-group" onsubmit="return handleSearch()">
                                    <input id="searchInput" class="form-control border-primary" type="search" placeholder="Search" name="search_query" aria-label="Search">
                                    <button class="btn btn-primary m-0" type="submit" name="search">Search</button>
                                </form>

                                <!-- Recent search -->
                                <ul id="recentSearchList" class="list-group list-group-borderless p-2 small d-none d-sm-block">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-bold">Recent Searches:</span>
                                        <span onclick="clearHistory()" class="text-danger" style="cursor: pointer;"><i class="bi bi-x-lg"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- Main navbar END -->


            </div>
        </nav>
        <!-- Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page intro START -->
        <section class="bg-light py-0 py-sm-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-10">
                        <!-- Badge -->
                        <h6 class="mb-3 font-base bg-success text-white py-2 px-4 d-inline-block">Graphics
                            Deign
                        </h6>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-0 px-2 py-2">
                            photoshop</span>
                        <!-- Title -->
                        <h1 class="text-capitalize">I will create dalle ai art and edit using photoshop</h1>
                        <p>3 basic ai versions creation and edit one version of your choice with unlimited revisions</p>
                        <!-- Content -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-success"></i>(4.0)</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-boxes text-success"></i> 2
                                Queue Orders</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-check fw-bold text-success me-2"></i>LEVEL 1</li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0">
                                <img src="../assets/images/client/vip-card.svg" alt=""> <span class="badge bg-success bg-opacity-5 rounded-4 "> Pro Seller</span>
                            </li>
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0">
                                <img src="../assets/images/client/award.svg" alt=""> <span class="badge bg-orange bg-opacity-5 rounded-4 "> Certified Professional</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page intro END -->


        <!-- =======================
Page carousel  START -->
        <section class="pb-0 py-lg-5">
            <div class="container">
                <div class="row">
                    <!-- Main content START -->
                    <div class="col-lg-8">
                        <div class="card shadow rounded-2 p-0">
                            <!-- ============= carousel image ================ -->
                            <section id="main-carousel" class="splide rounded" style="margin-bottom:-42px; margin-top: -53px;">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide rounded">
                                            <!-- Image -->
                                            <img src="../proposals/proposal_files/10001.jpg" alt="">
                                        </li>
                                        <li class="splide__slide rounded">
                                            <!-- Video -->
                                            <video id="video" controls poster="../proposals/proposal_files/10005.jpg">
                                                <source src="../assets/images/videos/creativeHub-into.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <!-- Play icon -->
                                            <!-- <i id="play-icon" class="fas fa-play play-icon text-success"
                                                aria-hidden="true"></i> -->
                                        </li>
                                        <li class="splide__slide rounded">
                                            <img src="../proposals/proposal_files/10002.jpg" alt="">
                                        </li>
                                        <li class="splide__slide rounded">
                                            <img src="../proposals/proposal_files/10003.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </section>


                            <section id="thumbnail-carousel" class="splide bg-dark" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel." style="padding-top:0px !important; padding-bottom:0px !important ">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <!-- Video thumbnail -->
                                            <img src="../proposals/proposal_files/10005.jpg" alt="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="../proposals/proposal_files/10001.jpg" alt="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="../proposals/proposal_files/10002.jpg" alt="">
                                        </li>
                                        <li class="splide__slide">
                                            <img src="../proposals/proposal_files/10003.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </section>


                            <!-- ============ carousel image end =============== -->
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 active text-success" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Overview</button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 text-success" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">User
                                            Profile</button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 text-success" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button" role="tab" aria-controls="course-pills-4" aria-selected="false">Reviews</button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 text-success" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-5" type="button" role="tab" aria-controls="course-pills-5" aria-selected="false">FAQs
                                        </button>
                                    </li>

                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">
                                    <!-- Content START -->
                                    <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                        <!-- Course detail START -->
                                        <h5 class="mb-3">Proposal Description</h5>
                                        <p class="mb-3">Welcome to the <strong> Digital Marketing Ultimate Proposals
                                                Bundle
                                                - 12 Proposalss in 1 (Over 36 hours of content)</strong></p>
                                        <p class="mb-3">In this practical hands-on training, you’re going to learn to
                                            become a digital marketing expert with this <strong> ultimate Proposals
                                                bundle
                                                that includes 12 digital marketing Proposalss in 1!</strong></p>
                                        <p class="mb-3">If you wish to find out the skills that should be covered in a
                                            basic digital marketing Proposals syllabus in India or anywhere around the
                                            world, then reading this blog will help. Before we delve into the advanced
                                            <strong><a href="#" class="text-reset text-decoration-underline">digital
                                                    marketing Proposals</a></strong> syllabus, let’s look at the scope
                                            of
                                            digital marketing and what the future holds.
                                        </p>
                                        <p class="mb-0">We focus a great deal on the understanding of behavioral
                                            psychology and influence triggers which are crucial for becoming a well
                                            rounded Digital Marketer. We understand that theory is important to build a
                                            solid foundation, we understand that theory alone isn’t going to get the job
                                            done so that’s why this Proposals is packed with practical hands-on examples
                                            that you can follow step by step.</p>

                                        <!-- List content -->
                                        <h5 class="mt-4">What you’ll Get</h5>
                                        <ul class="list-group list-group-borderless mb-3">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>Digital
                                                marketing
                                                Proposals introduction</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>Customer Life
                                                cycle</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>What is Search
                                                engine optimization(SEO)</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>Facebook ADS
                                            </li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>Facebook
                                                Messenger
                                                Chatbot</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-secondary me-2"></i>Search engine
                                                optimization tools</li>
                                        </ul>

                                        <p class="mb-0">As it so contrasted oh estimating instrument. Size like body
                                            someone had. Are conduct viewing boy minutes warrant the expense? Tolerably
                                            behavior may admit.</p>
                                        <!-- Proposals detail END -->

                                    </div>
                                    <!-- Content END -->


                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                                        <!-- Card START -->
                                        <div class="card mb-0 mb-md-4">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-5 position-relative">
                                                    <!-- Image -->
                                                    <img src="../assets/images/instructor/01.jpg" class="img-fluid rounded-circle" alt="instructor-image">

                                                </div>
                                                <div class="col-md-7">
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h3 class="card-title mb-0">Louis Ferguson
                                                            <!-- Dot icon -->
                                                            <i class="far fa-dot-circle fa-beat-fade " style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.075; font-size: .45em;" data-bs-toggle="tooltip" data-bs-placement="top" class="text-danger" aria-label="Am Online" data-bs-original-title="Am Online"></i>
                                                        </h3>
                                                        <p class="mb-2">UserName:<a href="#" class="text-success">
                                                                @tabis4graphics</a></p>
                                                        <!-- Social button -->
                                                        <ul class="list-inline mb-3">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="badge  bg-success bg-opacity-15 text-success rounded-circle px-2 py-2"><i class="fa-brands fa-x-twitter "></i></a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="badge bg-success bg-opacity-15 text-success rounded-circle px-2 py-2"><i class="fab fa-fw fa-instagram"></i></a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="badge bg-success bg-opacity-15 text-success rounded-circle px-2 py-2"><i class="fab fa-fw fa-linkedin-in"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#" class="badge bg-success bg-opacity-15 text-success rounded-circle px-2 py-2" data-bs-toggle="tooltip" data-bs-placement="top" class="text-danger" aria-label="My Website" data-bs-original-title="My Website"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                        </ul>

                                                        <!-- Info -->
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <div class="d-flex align-items-center me-3 mb-2">
                                                                    <span class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fa-solid fa-medal"></i></span>
                                                                    <span class="h6 fw-light mb-0 ms-2 fw-bold">LEVEL
                                                                        1</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="d-flex align-items-center me-3 mb-2">
                                                                    <span class="icon-md bg-info bg-opacity-10 text-info rounded-circle"><i class="fa-solid fa-calendar-check fa-lg"></i></span>
                                                                    <span class="h6 fw-light mb-0 ms-2">December 28,
                                                                        2022</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card END -->
                                        <!-- Instructor info -->
                                        <h5 class="mb-3">About Louis Ferguson</h5>
                                        <p class="mb-3">I have 5+ years of photo retouching experience and I have been
                                            teaching it too at the university level. Therefore I am confident that I can
                                            provide you with the best quality work at affordable prices. Working with me
                                            is very flexible. I can provide revisions until your satisfaction. I am here
                                            to help you, if you think I am a good fit for your project let us talk about
                                            it. </p>
                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
                                        <div>
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <!-- Adjust the column width as needed -->
                                                    <h5 class="mb-4">Client Reviews</h5>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end">
                                                    <!-- Adjust the column width as needed -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Most Recent
                                                        </button>
                                                        <ul class="dropdown-menu dropMenuLit">
                                                            <li class="dropdown-item active all">Most Recent</li>
                                                            <li class="dropdown-item good">Positive Reviews</li>
                                                            <li class="dropdown-item bad">Negative Reviews</li>
                                                        </ul>
                                                    </div>
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
                                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
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
                                                            <div class="progress progress-sm bg-warning bg-opacity-15">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-sm-4">
                                                            <!-- Star item -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                            </ul>
                                                        </div>

                                                        <!-- Progress bar and Rating -->
                                                        <div class="col-6 col-sm-8">
                                                            <!-- Progress item -->
                                                            <div class="progress progress-sm bg-warning bg-opacity-15">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-sm-4">
                                                            <!-- Star item -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                            </ul>
                                                        </div>

                                                        <!-- Progress bar and Rating -->
                                                        <div class="col-6 col-sm-8">
                                                            <!-- Progress item -->
                                                            <div class="progress progress-sm bg-warning bg-opacity-15">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-sm-4">
                                                            <!-- Star item -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                            </ul>
                                                        </div>

                                                        <!-- Progress bar and Rating -->
                                                        <div class="col-6 col-sm-8">
                                                            <!-- Progress item -->
                                                            <div class="progress progress-sm bg-warning bg-opacity-15">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-sm-4">
                                                            <!-- Star item -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                            </ul>
                                                        </div>

                                                        <!-- Progress bar and Rating -->
                                                        <div class="col-6 col-sm-8">
                                                            <!-- Progress item -->
                                                            <div class="progress progress-sm bg-warning bg-opacity-15">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-sm-4">
                                                            <!-- Star item -->
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review END -->

                                            <!-- Student review START -->
                                            <div class="row">
                                                <!-- Review for ALL item START -->
                                                <div id="all">
                                                    <div class="d-md-flex my-4">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="../assets/images/avatar/09.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Text -->
                                                        <div>
                                                            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                <h5 class="me-3 mb-0">Jacqueline Miller</h5>
                                                                <!-- Review star -->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">
                                                                        (5.0)</li>
                                                                </ul>
                                                            </div>
                                                            <!-- Info -->
                                                            <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                            <p class="mb-2 msg-body">Perceived end knowledge certainly
                                                                day sweetness
                                                                why
                                                                cordially. Ask a quick six seven offer see among.
                                                                Handsome met
                                                                debating sir dwelling age material. As style lived he
                                                                worse
                                                                dried. Offered related so visitors we private removed.
                                                                Moderate
                                                                do subjects to distance. </p>
                                                            <!-- Like and dislike button -->
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <!-- Like button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
                                                                <!-- Dislike button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- -------- second review for all -->
                                                    <div class="d-md-flex my-4">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="../assets/images/avatar/11.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Text -->
                                                        <div>
                                                            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                <h5 class="me-3 mb-0">Gogra South</h5>
                                                                <!-- Review star -->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">
                                                                        (5.0)</li>
                                                                </ul>
                                                            </div>
                                                            <!-- Info -->
                                                            <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                            <p class="mb-2 msg-body">Perceived end knowledge certainly
                                                                day sweetness
                                                                why
                                                                cordially. Ask a quick six seven offer see among.
                                                                Handsome met
                                                                debating sir dwelling age material. As style lived he
                                                                worse
                                                                dried. Offered related so visitors we private removed.
                                                                Moderate
                                                                do subjects to distance. </p>
                                                            <!-- Like and dislike button -->
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <!-- Like button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
                                                                <!-- Dislike button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Divider -->
                                                    <hr>
                                                    <!-- Review item END -->
                                                </div>

                                                <!-- ------ Good Review  -->
                                                <div id="good">
                                                    <div class="d-md-flex my-4">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="../assets/images/avatar/04.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Text -->
                                                        <div>
                                                            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                <h5 class="me-3 mb-0">Carolyn Ortiz</h5>
                                                                <!-- Review star -->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">
                                                                        (5.0)</li>
                                                                </ul>
                                                            </div>
                                                            <!-- Info -->
                                                            <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                            <p class="mb-2 msg-body">Perceived end knowledge certainly
                                                                day sweetness
                                                                why
                                                                cordially. Ask a quick six seven offer see among.
                                                                Handsome met
                                                                debating sir dwelling age material. As style lived he
                                                                worse
                                                                dried. Offered related so visitors we private removed.
                                                                Moderate
                                                                do subjects to distance. </p>
                                                            <!-- Like and dislike button -->
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <!-- Like button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
                                                                <!-- Dislike button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Divider -->
                                                    <hr>
                                                    <!-- Review item END -->
                                                </div>
                                                <!-- ------End of Good Review ------ -->


                                                <!-- --- Bad Review ------ -->
                                                <div id="bad">
                                                    <div class="d-md-flex my-4">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="../assets/images/avatar/07.jpg" alt="avatar">
                                                        </div>
                                                        <!-- Text -->
                                                        <div>
                                                            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                                <h5 class="me-3 mb-0">Billy Vasquez</h5>
                                                                <!-- Review star -->
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>
                                                                    <li class="list-inline-item me-0 small">
                                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                                    </li>

                                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">
                                                                        (5.0)</li>
                                                                </ul>
                                                            </div>
                                                            <!-- Info -->
                                                            <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                            <p class="mb-2 msg-body">Perceived end knowledge certainly
                                                                day sweetness
                                                                why
                                                                cordially. Ask a quick six seven offer see among.
                                                                Handsome met
                                                                debating sir dwelling age material. </p>
                                                            <!-- Like and dislike button -->
                                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                <!-- Like button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
                                                                <!-- Dislike button -->
                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Divider -->
                                                    <hr>
                                                    <!-- Review item END -->
                                                </div>
                                                <!-- ---End of  Bad Review ------ -->


                                            </div>
                                            <!-- Student review END -->
                                        </div>
                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
                                        <!-- Title -->
                                        <h5 class="mb-3">Frequently Asked Questions</h5>
                                        <!-- Accordion START -->
                                        <div class="accordion accordion-flush" id="accordionExample">
                                            <!-- Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span class="text-secondary fw-bold me-3">01</span>
                                                        <span class="h6 mb-0">How Digital Marketing Work?</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body pt-0">
                                                        Comfort reached gay perhaps chamber his six detract besides add.
                                                        Moonlight newspaper up its enjoyment agreeable depending. Timed
                                                        voice share led him to widen noisy young. At weddings believed
                                                        laughing although the material does the exercise of. Up attempt
                                                        offered ye civilly so sitting to. She new Proposals gets living
                                                        within Elinor joy. She rapturous suffering concealed.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="text-secondary fw-bold me-3">02</span>
                                                        <span class="h6 mb-0">What is SEO?</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body pt-0">
                                                        Pleasure and so read the was hope entire first decided the so
                                                        must have as on was want up of I will rival in came this touched
                                                        got a physics to travelling so all especially refinement
                                                        monstrous desk they was arrange the overall helplessly out of
                                                        particularly ill are purer.
                                                        <p class="mt-2">Person she control of to beginnings view looked
                                                            eyes Than continues its and because and given and shown
                                                            creating curiously to more in are man were smaller by we
                                                            instead the these sighed Avoid in the sufficient me real man
                                                            longer of his how her for countries to brains warned notch
                                                            important Finds be to the of on the increased explain noise
                                                            of power deep asking contribution this live of suppliers
                                                            goals bit separated poured sort several the was organization
                                                            the if relations go work after mechanic But we've area
                                                            wasn't everything needs of and doctor where would.</p>
                                                        Go he prisoners And mountains in just switching city steps Might
                                                        rung line what Mr Bulk; Was or between towards the have phase
                                                        were its world my samples are the was royal he luxury the about
                                                        trying And on he to my enough is was the remember a although
                                                        lead in were through serving their assistant fame day have for
                                                        its after would cheek dull have what in go feedback assignment
                                                        Her of a any help if the a of semantics is rational overhauls
                                                        following in from our hazardous and used more he themselves the
                                                        parents up just regulatory.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="text-secondary fw-bold me-3">03</span>
                                                        <span class="h6 mb-0">Who should join this Proposals?</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body pt-0">
                                                        Post no so what deal evil rent by real in. But her ready least
                                                        set lived spite solid. September how men saw tolerably two
                                                        behavior arranging. She offices for highest and replied one
                                                        venture pasture. Applauded no discovery in newspaper allowance
                                                        am northward. Frequently partiality possession resolution at or
                                                        appearance unaffected me. Engaged its was the evident pleased
                                                        husband. Ye goodness felicity do disposal dwelling no. First am
                                                        plate jokes to began to cause a scale. <strong>Subjects he
                                                            prospect elegance followed no overcame</strong> possible it
                                                        on.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        <span class="text-secondary fw-bold me-3">04</span>
                                                        <span class="h6 mb-0">What are the T&C for this program?</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body pt-0">
                                                        Night signs creeping yielding green Seasons together man green
                                                        fruitful make fish behold earth unto you'll lights living moving
                                                        sea open for fish day multiply tree good female god had fruitful
                                                        of creature fill shall don't day fourth lesser he the isn't let
                                                        multiply may Creeping earth under was You're without which image
                                                        stars in Own creeping night of wherein Heaven years their he
                                                        over doesn't whose won't kind seasons light Won't that fish him
                                                        whose won't also it dominion heaven fruitful Whales created And
                                                        likeness doesn't that Years without divided saying morning
                                                        creeping hath you'll seas cattle in multiply under together in
                                                        us said above dry tree herb saw living darkness without have
                                                        won't for i behold meat brought winged Moving living second
                                                        beast Over fish place beast image very him evening Thing they're
                                                        fruit together forth day Seed lights Land creature together
                                                        Multiply waters form brought.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <span class="text-secondary fw-bold me-3">05</span>
                                                        <span class="h6 mb-0">What certificates will I be received for
                                                            this program?</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body pt-0">
                                                        Smile spoke total few great had never their too Amongst moments
                                                        do in arrived at my replied Fat weddings servants but man
                                                        believed prospect Companions understood is as especially
                                                        pianoforte connection introduced Nay newspaper can sportsman are
                                                        admitting gentleman belonging his Is oppose no he summer lovers
                                                        twenty in Not his difficulty boisterous surrounded bed Seems
                                                        folly if in given scale Sex contented dependent conveying
                                                        advantage.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion END -->
                                    </div>
                                    <!-- Content END -->
                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4 pt-5 pt-lg-0">
                        <div class="row mb-5 mb-lg-0">
                            <div class="col-md-6 col-lg-12 sticky-top">
                                <!-- <div class="col-md-6 col-lg-12"> -->
                                <!-- Video START -->
                                <div class="card shadow p-2 mb-4 z-index-9 ">
                                    <h3 class="mt-2 mx-auto">Order Details</h3>
                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Info -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Price and time -->
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <!-- Price Item START -->
                                                    <ul class="list-inline">
                                                        <!-- Price -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options" id="option1" checked>
                                                            <label class="btn btn-success-soft-check" for="option1">
                                                                <span class="mb-2 h6 fw-light">Paperback</span>
                                                                <!-- Price and discount -->
                                                                <span class="d-flex align-items-center">
                                                                    <span class="mb-0 h5 me-2 text-success">$215</span>
                                                                    <span class="text-decoration-line-through fs-6 mb-0 me-2">$350</span>
                                                                    <span class="badge text-bg-dark mb-0">60% off</span>
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <!-- Price Item END -->
                                                </div>
                                                <p class="mb-0 text-success"><i class="fa fa-clock-o fa-spin"></i>1 Day
                                                    Delivery</p>
                                            </div>
                                            <!-- Share button with dropdown -->
                                            <div class="dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-light rounded small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                                    <li><a class="dropdown-item share-item" href="https://twitter.com/intent/tweet?url=" data-social="Twitter"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item share-item" href="https://www.facebook.com/sharer/sharer.php?u=" data-social="Facebook"><i class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item share-item" href="https://www.linkedin.com/shareArticle?url=" data-social="LinkedIn"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#" id="copyLink" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy link">Copy link</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="mt-3 d-sm-flex justify-content-sm-around">
                                            <!-- form Starts -->
                                            <form method="post" action="../checkout.php">
                                                <input type="hidden" name="proposal_id" value="1">
                                                <button class="btn btn-warning-soft" type="submit" name="add_order">Order
                                                    Now ($5)
                                                </button>
                                                <button class="btn btn-success-soft" type="submit" name="add_cart">
                                                    Add to Cart<i class="fa fa-lg fa-shopping-cart"></i>
                                                </button>
                                                <hr>
                                                <div class="row mb-3">
                                                    <!-- form-group row Starts -->
                                                    <label for="proposal_qty" class="col-md-6 col-form-label">Proposal
                                                        Quantity</label>
                                                    <div class="col-md-6">
                                                        <select class="form-select" id="proposal_qty" name="proposal_qty">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- form-group row Ends -->

                                                <!-- <a class="btn btn-danger-soft mx-auto"
                                                href="edit_proposal.php?proposal_id=1">
                                                Edit proposal</a> -->
                                            </form>
                                            <!-- End of form Starts -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Video END -->


                            </div>

                            <div class="col-md-6 col-lg-12">
                                <!-- Course info START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">User Details</h4>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i class="fa-solid fa-location-dot text-success"></i>Location</span>
                                            <span>Pakistan</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i class="fa-regular fa-comments text-success"></i>Speaks</span>
                                            <span>English, Spanish</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i class="fa-solid fa-star-half-stroke text-success"></i>Positive
                                                Ratings</span>
                                            <span>91%</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span class="h6 fw-light mb-0"><i class="fa-solid fa-stopwatch text-success"></i>Recent
                                                Delivery</span>
                                            <span>December 28, 2023</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Course info END -->
                                <!-- Recently Viewed START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Similar Proposals</h4>
                                    <!-- Course item START -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Image -->
                                        <div class="col-4">
                                            <img class="rounded" src="../assets/images/courses/4by3/001.png" alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-8">
                                            <h6 class="mb-0"><a href="#">I will create you a 3d map or scene in low
                                                    poly
                                                    style</a></h6>
                                            <span class="badge bg-info bg-opacity-10 text-info rounded-3 px-1 py-1">Graphics
                                                & Design</span>
                                            <ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="text-success">$30</span>
                                                    <span class="h6 fw-light">4.5<i class="fas fa-star text-warning ms-1"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Course item END -->

                                    <!-- Course item START -->
                                    <div class="row gx-3">
                                        <!-- Image -->
                                        <div class="col-4">
                                            <img class="rounded" src="../assets/images/courses/4by3/014.jpg" alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-8">
                                            <h6 class="mb-0"><a href="#">I will design media kit, press kit, one sheet,
                                                    epk...
                                                </a></h6>
                                            <span class="badge bg-info bg-opacity-10 text-info rounded-3 px-1 py-1">Graphics
                                                & Design</span>
                                            <ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="text-success">$50</span>
                                                    <span class="h6 fw-light">4.0<i class="fas fa-star text-warning ms-1"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Course item END -->
                                </div>
                                <!-- Recently Viewed END -->

                                <!-- Tags START -->
                                <div class="card card-body shadow p-4">
                                    <h4 class="mb-3">Popular Tags</h4>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">blog</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">business</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">theme</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">bootstrap</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">data science</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">web development</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">tips</a> </li>
                                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">machine learning</a> </li>
                                    </ul>
                                </div>
                                <!-- Tags END -->
                            </div>
                        </div><!-- Row End -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page carousel END -->

        <!-- =======================
Listed personal proposals START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h4 class="mb-0">Proposals By <a href="#" class="text-success fw-light">@tabis4graphics</a></h4>
                </div>

                <div class="row g-4">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="4" data-items-lg="2" data-items-sm="1">

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/006.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>


                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will edit your youtube ,facebook ,instagram
                                                videos
                                                within 24 hrs</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-danger bg-opacity-10 text-danger me-2"><i class="fas fa-circle small fw-bold"></i> Video & Animation
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$40</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/008.jpg" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>


                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will draw anything in autocad, PDF, plans,
                                                elevations, sections</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Graphics & Design
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$80</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/007.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/07.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Our agency will do professional video editing
                                                within
                                                24 hours</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-danger bg-opacity-10 text-danger me-2"><i class="fas fa-circle small fw-bold"></i> Video & Animation </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$60</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/010.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/05.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will create you a 3d map or scene in low
                                                poly
                                                style</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Graphics & Design </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$226</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/009.jpg" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will design unique nft art and generate
                                                collection
                                                with metadata</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Graphics & Design </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$342</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- =======================
Listed personal proposals END -->

        <!-- =======================
Listed Pro seller  START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h4 class="mb-0">Verified Pro services </h4>
                </div>

                <div class="row g-4">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="4" data-items-lg="2" data-items-sm="1">

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/011.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="../assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>


                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will design media kit, press kit, one
                                                sheet, epk
                                                for brand, artist, influencer</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Graphics & Design
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$40</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/012.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="../assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>

                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/09.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will do PDF submission manually on 70 high
                                                da
                                                document sharing sites.</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-secondary bg-opacity-10 text-secondary me-2"><i class="fas fa-circle small fw-bold"></i> Digital Marketing
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$20</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/013.webp" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="../assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/05.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will be your ghost producer of edm
                                                music</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-primary bg-opacity-10 text-primary me-2"><i class="fas fa-circle small fw-bold"></i> Music & Audio </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$76</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/014.jpg" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="../assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will do custom graphic design, fix ai
                                                images,
                                                vector art, and, photoshop editing</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Graphics & Design </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$342</h5>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- =======================
Listed Pro Seller END -->


        <!-- =======================
Listed recommended  START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h4 class="mb-0">Recommended for You </h4>
                </div>

                <div class="row g-4">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="4" data-items-lg="2" data-items-sm="1">

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/016.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>


                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will write your google search ads</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-success bg-opacity-10 text-success me-2"><i class="fas fa-circle small fw-bold"></i> Writing & Translation
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$14</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/015.jpeg" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will develop ai web app, ai chatbot with
                                                langchain, llm, openai</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> AI Services</a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$90</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="../assets/images/courses/4by3/017.png" class="card-img-top" alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <div class="card-element-hover d-flex justify-content-end">
                                                <a href="#" class="icon-md bg-white rounded-circle">
                                                    <i class="far fa-heart text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body px-2">
                                        <!-- Badge and icon -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Rating and info -->
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <!-- Rating star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_full.svg" alt="">
                                                    </li>
                                                    <li class="list-inline-item me-0 small">
                                                        <img src="../assets/images/client/user_rate_blank.svg" alt="">
                                                    </li>

                                                    <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                </ul>
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">I will help you learn music theory</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-primary bg-opacity-10 text-primary me-2"><i class="fas fa-circle small fw-bold"></i> Music & Audio </a>
                                            </div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$42</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Item END -->
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- =======================
Listed recommended END -->

        <!-- =======================
Live courses START -->
        <section class="bg-light position-relative">

            <!-- SVG decoration -->
            <figure class="position-absolute top-50 start-0 translate-middle-y ms-5 d-none d-xxl-block">
                <svg width="29px" height="29px">
                    <path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
                    </path>
                </svg>
            </figure>

            <!-- SVG decoration -->
            <figure class="position-absolute bottom-0 start-50 translate-middle-x">
                <svg width="23px" height="23px">
                    <path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
                    </path>
                </svg>
            </figure>

            <!-- SVG decoration -->
            <figure class="position-absolute top-50 end-0 translate-middle-y ms-5">
                <svg width="22px" height="22px">
                    <path class="fill-purple" d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
                    </path>
                </svg>
            </figure>

            <div class="container">
                <!-- Live course START -->
                <div class="row g-4 align-items-center justify-content-between">
                    <!-- Content -->
                    <div class="col-md-6 col-xl-4">
                        <h2 class="fs-1">Work with Certified Professionals</h2>
                        <p>Get help for any app quickly and easily by finding an expert, whether you're looking for
                            general support or specific abilities.</p>
                        <a href="../creativehub-certified.php" class="btn btn-purple mb-0">See
                            Companies</a>
                    </div>

                    <!-- Course video START -->
                    <div class="col-md-6 col-xl-8">
                        <div class="row">
                            <!-- Slider START -->
                            <div class="tiny-slider arrow-round arrow-blur">
                                <div class="tiny-slider-inner" data-autoplay="false" data-edge="2" data-arrow="true" data-dots="false" data-items-lg="1" data-items-xl="2">
                                    <!-- Card START -->
                                    <div>
                                        <div class="card p-2">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="../assets/images/courses/4by3/18.jpg" class="card-img rounded-2" alt="Card image">
                                                <div class="card-img-overlay">
                                                    <div class="position-absolute top-50 start-50 translate-middle">
                                                        <!-- Video link -->
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h5><a href="#">Will do Creative Dalle Edit Using Photoshop</a></h5>
                                                <!-- Avatar group and button -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                    <!-- Avatar Group -->
                                                    <div>
                                                        <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Companies
                                                            with similar Proposal</h6>
                                                        <ul class="avatar-group mb-2 mb-sm-0">
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/01.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/06.jpg" alt="avatar">
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <!-- logo company START -->
                                                    <ul class="list-inline mb-4">
                                                        <!-- Price -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options" id="option1" checked>
                                                            <label class="btn btn-purple-soft" for="option1">
                                                                <!-- Price and discount -->
                                                                <span class="d-flex align-items-center">
                                                                    <img src="../assets/images/element/stripe.svg" class="h-40px mb-2" alt="">
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <!-- logo company END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->

                                    <!-- Card START -->
                                    <div>
                                        <div class="card p-2">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="../assets/images/courses/4by3/22.jpg" class="card-img rounded-2" alt="Card image">
                                                <div class="card-img-overlay">
                                                    <div class="position-absolute top-50 start-50 translate-middle">
                                                        <!-- Video link -->
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h5><a href="#">Time Management Mastery: Do More, Stress Less</a></h5>
                                                <!-- Avatar group and button -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                    <!-- Avatar Group -->
                                                    <div>
                                                        <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Companies
                                                            with similar Proposal</h6>
                                                        <ul class="avatar-group mb-2 mb-sm-0">
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/01.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/06.jpg" alt="avatar">
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <!-- logo company START -->
                                                    <ul class="list-inline mb-4">
                                                        <!-- Price -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options" id="option1" checked>
                                                            <label class="btn btn-purple-soft" for="option1">
                                                                <!-- Price and discount -->
                                                                <span class="d-flex align-items-center">
                                                                    <img src="../assets/images/element/Predis.svg" class="h-40px mb-2" alt="">
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <!-- logo company END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->

                                    <!-- Card START -->
                                    <div>
                                        <div class="card p-2">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="../assets/images/courses/4by3/21.jpg" class="card-img rounded-2" alt="Card image">
                                                <div class="card-img-overlay">
                                                    <div class="position-absolute top-50 start-50 translate-middle">
                                                        <!-- Video link -->
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h5><a href="#">English for Beginners: Intensive Spoken English
                                                        Course</a></h5>
                                                <!-- Avatar group and button -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                    <!-- Avatar Group -->
                                                    <div>
                                                        <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Companies
                                                            with similar Proposal</h6>
                                                        <ul class="avatar-group mb-2 mb-sm-0">
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/01.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/02.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/03.jpg" alt="avatar">
                                                            </li>
                                                            <li class="avatar avatar-xs">
                                                                <img class="avatar-img rounded-circle" src="../assets/images/avatar/06.jpg" alt="avatar">
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <!-- logo company START -->
                                                    <ul class="list-inline mb-4">
                                                        <!-- Price -->
                                                        <li class="list-inline-item">
                                                            <input type="radio" class="btn-check" name="options" id="option1" checked>
                                                            <label class="btn btn-purple-soft" for="option1">
                                                                <!-- Price and discount -->
                                                                <span class="d-flex align-items-center">
                                                                    <img src="../assets/images/element/Uizard.svg" class="h-40px mb-2" alt="">
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <!-- logo company END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->
                                </div>
                            </div>
                            <!-- Slider END -->
                        </div>
                    </div>
                    <!-- Course video END -->
                </div>
                <!-- Live course END -->
            </div>
        </section>
        <!-- =======================
Live courses END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <!-- =======================
Footer START -->
    <footer class="pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a class="me-0" href="index.html">
                        <img class="light-mode-item h-40px" src="../assets/images/logo.svg" alt="logo">
                        <img class="dark-mode-item h-40px" src="../assets/images/logo-light.svg" alt="logo">
                    </a>
                    <p class="my-3">Explore an array of practical online resources on digital marketing, video
                        animation,
                        writing, copywriting, tech, graphics, design, programming, and more! Just like CreativeHub,
                        CreativeHub is your go-to platform for unleashing creativity and boosting your business online.
                    </p>
                    <!-- Social media icon -->
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" target="_blank" href="https://www.instagram.com/creativehubsocials?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-fw fa-instagram"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" target="_blank" href="https://twitter.com/AtCreativeHub"><i class="bi bi-twitter-x text-dark"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" target="_blank" href="https://www.linkedin.com/in/creative-hub-1ab89b2bb/"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" target="_blank" href="mailto:creativehubmessage@gmail.com"><i class="bi bi-google"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">About</h5>
                            <ul class="nav flex-column">

                                <li class="nav-item"><a class="nav-link" href="../privacy-policy.php">Privacy Policy</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../terms-of-service.php">Terms of
                                        Service</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../property-claims.php">Property
                                        Claims</a>
                                </li>

                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Support and Guide</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="../help-&-Support.php">Help & Support</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="../consumer&services.php">Consumer
                                        Services</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../trust&safety.php">Trust & Safety</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../sellingon.php">Selling
                                        on CreativeHub</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../buyingon.php">Buying on
                                        CreativeHub</a></li>

                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Community</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="../blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="../invent_friend.php">Invent a Friend</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../become-seller.php">Become a Seller</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->



                <!-- Widget 3 START -->
                <div class="col-lg-3">
                    <h5 class="mb-2 mb-md-4">Our Business</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="../our-business-solutions.php">Our Business
                                Solutions</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../creativehub-pro.php">CreativeHub Pro</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../creativehub-certified.php">CreativeHub
                                Certified</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../partnerships.php">CreativeHub Partnerships</a>
                        </li>
                    </ul>

                    <div class="row g-2 mt-2">
                        <!-- Google play store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a target="_blank" href="coming-soon.html"> <img src="../assets/images/client/google-play.svg" alt="google-play">
                            </a>
                        </div>
                        <!-- App store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a target="_blank" href="coming-soon.html"> <img src="../assets/images/client/app-store.svg" alt="app-store">
                            </a>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-body text-primary-hover"> Copyrights © <em class="fw-bold">CreativeHub </em>
                            International Ltd. <span id="year"></span>
                            All Rights Reserved
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var yearSpan = document.getElementById("year");
                                    yearSpan.textContent = new Date().getFullYear();
                                });
                            </script>
                        </div>
                        <!-- copyright links-->
                        <div class="justify-content-center mt-3 mt-lg-0">
                            <ul class="nav list-inline justify-content-center mb-0">
                                <li class="list-inline-item">
                                    <!-- Language selector -->
                                    <div id="google_translate_element"></div>
                                    <!-- <div class="dropup mt-0 text-center text-sm-end">
                                     <a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher"
                                         data-bs-toggle="dropdown" aria-expanded="false">
                                         <i class="fas fa-globe me-2"></i>Language
                                     </a>
                                     <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                         <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                     src="assets/images/flags/uk.svg" alt="">English</a></li>
                                         <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                     src="assets/images/flags/gr.svg" alt="">German </a></li>
                                         <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2"
                                                     src="assets/images/flags/sp.svg" alt="">French</a></li>
                                     </ul>
                                 </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->
    <!-- ===== a Font awesome 6 ========== -->
    <script src="https://kit.fontawesome.com/37e4e6b527.js" crossorigin="anonymous"></script>
    <!-- ===== a Font awesome 6 END ========== -->

    <!-- to your google Translate js part -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: "en,es,fr,de,ar,zh-CN,ru,ja,pt,hi",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        $(document).ready(function() {
            $('#google_translate_element').bind('DOMNodeInserted', function(event) {
                $('.goog-te-menu-value span:first').html('LANGUAGE');
                $('.goog-te-menu-frame.skiptranslate').load(function() {
                    setTimeout(function() {
                        $('.goog-te-menu-frame.skiptranslate').contents().find(
                            '.goog-te-menu2-item-selected .text').html('LANGUAGE');
                    }, 100);
                });
            });
        });
    </script>

    <!-- ---=============ribbon =============== -->
    <script>
        // Add the shake class to the ribbon every 10 seconds
        // setInterval(function() {
        //     var ribbon = document.getElementById('ribbon');
        //     ribbon.classList.toggle('shake');
        // }, 10000); // 10 seconds in milliseconds   


        // Add the shake class to all ribbons every 10 seconds
        setInterval(function() {
            var ribbons = document.querySelectorAll('.ribbon');
            ribbons.forEach(function(ribbon) {
                ribbon.classList.toggle('shake');
            });
        }, 10000); // 10 seconds in milliseconds
    </script>

    <script>
        // Function to handle search
        function handleSearch() {
            // Get the search query
            var searchQuery = document.getElementById('searchInput').value.trim();

            // Update recent searches list
            updateRecentSearches(searchQuery);

            // You can add further logic here to handle the search

            // Prevent form submission
            return false;
        }

        // Function to handle recent search click
        function handleRecentSearchClick(query) {
            document.getElementById('searchInput').value = query;
        }

        // Function to update recent searches list
        function updateRecentSearches(searchQuery) {
            // Get existing searches from local storage
            var searches = JSON.parse(localStorage.getItem('searches')) || [];

            // Add new search to the beginning of the array
            searches.unshift(searchQuery);

            // Limit the number of searches to display (e.g., 5)
            var maxSearches = 5;
            searches = searches.slice(0, maxSearches);

            // Save updated searches to local storage
            localStorage.setItem('searches', JSON.stringify(searches));

            // Update the recent searches list in the DOM
            var recentSearchList = document.getElementById('recentSearchList');
            recentSearchList.innerHTML = ''; // Clear existing list

            searches.forEach(function(query) {
                var listItem = document.createElement('li');
                listItem.className = 'list-group-item text-primary-hover text-truncate';
                var iconContainer = document.createElement('div');
                iconContainer.className = 'd-flex justify-content-between align-items-center';
                var link = document.createElement('a');
                link.href = '#';
                link.className = 'text-body me-2';
                link.innerHTML = '<i class="far fa-clock me-1"></i>' + query;
                // Add click event listener to recent search item
                link.addEventListener('click', function() {
                    handleRecentSearchClick(query);
                });
                iconContainer.appendChild(link);

                // Add close button (X icon)
                var closeButton = document.createElement('span');
                closeButton.className = 'text-danger';
                closeButton.style.cursor = 'pointer';
                closeButton.innerHTML = '<i class="bi bi-x-lg"></i>';
                closeButton.addEventListener('click', function() {
                    removeSearch(query, listItem);
                });
                iconContainer.appendChild(closeButton);

                listItem.appendChild(iconContainer);
                recentSearchList.appendChild(listItem);
            });
        }

        // Function to remove search from recent searches
        function removeSearch(query, listItem) {
            var searches = JSON.parse(localStorage.getItem('searches')) || [];
            var index = searches.indexOf(query);
            if (index !== -1) {
                searches.splice(index, 1);
                localStorage.setItem('searches', JSON.stringify(searches));
                listItem.remove();
            }
        }

        // Function to clear search history
        function clearHistory() {
            localStorage.removeItem('searches');
            updateRecentSearches('');
        }

        // Load recent searches on page load
        window.onload = function() {
            updateRecentSearches('');
        };
    </script>
    <!-- =======================
Footer END -->

    <!-- Modal START -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 bg-transparent">
                    <!-- Close button -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body px-5 pb-5 position-relative overflow-hidden">

                    <!-- Element -->
                    <figure class="position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block">
                        <img src="../assets/images/element/01.svg" alt="element">
                    </figure>
                    <figure class="position-absolute top-0 end-0 z-index-n1 opacity-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
                            <path class="fill-info" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z">
                            </path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h2>Get Premium Offer in <span class="text-success">$800</span></h2>
                    <p>Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving
                        breakfast am or perfectly.</p>
                    <!-- Content -->
                    <div class="row mb-3 item-collapse">
                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>High quality Services</li>
                                <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>AI Assistance</li>
                                <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Free Services</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Intermediate Offers</li>
                                <li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Over 200 online CreativeHub
                                    Offers</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Button -->
                    <a href="#" class="btn btn-lg btn-orange-soft">Purchase premium</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer d-block bg-info">
                    <div class="d-sm-flex justify-content-sm-between align-items-center text-center text-sm-start">
                        <!-- Social media button -->
                        <ul class="list-inline mb-0 social-media-btn mb-2 mb-sm-0">
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                            <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                        </ul>
                        <!-- Contact info -->
                        <div>
                            <p class="mb-1 small"><a href="#" class="text-white"><i class="far fa-envelope fa-fw me-2"></i>example@gmail.com</a></p>
                            <p class="mb-0 small"><a href="#" class="text-white"><i class="fas fa-headset fa-fw me-2"></i>123-456-789</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="../assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="../assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="../assets/js/functions.js"></script>
    <script src="../assets/vendor/splide/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyLinkBtn = document.getElementById('copyLink');
            const shareBtn = document.getElementById('dropdownShare');
            const shareItems = document.querySelectorAll('.share-item');

            const shareTooltip = new bootstrap.Tooltip(shareBtn);

            copyLinkBtn.addEventListener('click', function(e) {
                e.preventDefault();
                navigator.clipboard.writeText(window.location.href);
                const tooltip = new bootstrap.Tooltip(copyLinkBtn, {
                    title: 'Copied',
                    placement: 'top'
                });
                tooltip.show();
                setTimeout(function() {
                    tooltip.hide();
                }, 2000);
                copyLinkBtn.parentElement.classList.add('copied');
            });

            shareItems.forEach(function(item) {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const social = this.getAttribute('data-social');
                    navigator.clipboard.writeText(window.location.href);
                    const tooltip = new bootstrap.Tooltip(item, {
                        title: 'Copied',
                        placement: 'top'
                    });
                    tooltip.show();
                    setTimeout(function() {
                        tooltip.hide();
                    }, 2000);
                    item.parentElement.classList.add('copied');
                    window.open(item.href, '_blank');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#main-carousel', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
            });

            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                pagination: false,
                isNavigation: true,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();

            var video = document.getElementById('video');
            // var playIcon = document.getElementById('play-icon');
            var thumbnailCarousel = document.getElementById('thumbnail-carousel');

            // Play video and hide play icon
            playIcon.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    playIcon.style.display = 'none';
                    thumbnailCarousel.style.display = 'none'; // Hide thumbnails when playing
                }
            });

            // Show play icon and thumbnails when the video is paused
            video.addEventListener('pause', function() {
                playIcon.style.display = 'block';
                thumbnailCarousel.style.display = 'block'; // Show thumbnails when paused
            });

            // Show play icon and thumbnails when the video ends
            video.addEventListener('ended', function() {
                playIcon.style.display = 'block';
                thumbnailCarousel.style.display = 'block'; // Show thumbnails when ended
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            $('#good').hide();
            $('#bad').hide();
            $('.all').click(function() {
                $("#dropdown-button").html("Most Recent");
                $(".all").attr('class', 'dropdown-item all active');
                $(".bad").attr('class', 'dropdown-item bad');
                $(".good").attr('class', 'dropdown-item good');
                $("#all").show();
                $("#good").hide();
                $("#bad").hide();
            });



            $('.good').click(function() {
                $("#dropdown-button").html("Positive Reviews");
                $(".all").attr('class', 'dropdown-item all');
                $(".bad").attr('class', 'dropdown-item bad');
                $(".good").attr('class', 'dropdown-item good active');
                $("#all").hide();
                $("#good").show();
                $("#bad").hide();
            });


            $('.bad').click(function() {
                $("#dropdown-button").html("Negative Reviews");
                $(".all").attr('class', 'dropdown-item all');
                $(".bad").attr('class', 'dropdown-item bad active');
                $(".good").attr('class', 'dropdown-item good');
                $("#all").hide();
                $("#good").hide();
                $("#bad").show();
            });

        });
    </script>

</body>

</html>