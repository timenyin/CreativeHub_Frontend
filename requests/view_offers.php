<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - proposals dashboard page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Proposals Dashboard || maintenances services  ">

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
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

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
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0"
                                id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                            <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Graphics &
                                        Design</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Graphics
                                                        &
                                                        Design</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/logo.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Logo
                                                            Design</a>
                                                        <p class="mb-0 small">Craft unique logos for brands.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/business-card.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Business
                                                            Cards &
                                                            Stationery</a>
                                                        <p class="mb-0 small">Design personalized cards and stationery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/font.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Fonts
                                                            &
                                                            Typography</a>
                                                        <p class="mb-0 small">Create custom fonts and typefaces.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/settings.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Website
                                                            Design</a>
                                                        <p class="mb-0 small">Design visually appealing websites.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/user-interface.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">App
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
                                                    <img src="../assets/images/categories_Icons/front-development.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">UX
                                                            Design</a>
                                                        <p class="mb-0 small">Improve user experience with design.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/layout.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Landing
                                                            Page
                                                            Design</a>
                                                        <p class="mb-0 small">Develop focused, high-conversion pages.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/web-design.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Icon
                                                            Design</a>
                                                        <p class="mb-0 small">Design custom icons for branding.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/protected.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">NFT
                                                            Art</a>
                                                        <p class="mb-0 small">Create unique, blockchain-based digital
                                                            art.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/design.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Architecture
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
                                                        <a> <img src="../assets/images/client/google-play.svg"
                                                                class="btn-transition" alt="google-store"> </a>
                                                    </div>
                                                    <!-- App store button -->
                                                    <div class="col-6 col-sm-4 col-xxl-6">
                                                        <a> <img src="../assets/images/client/app-store.svg"
                                                                class="btn-transition" alt="app-store"> </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Video
                                                        &
                                                        Animation</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/animation.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Editing
                                                            &
                                                            Post-Production</a>
                                                        <p class="mb-0 small">Enhance raw footage professionally.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/bullhorn.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Social
                                                            & Marketing
                                                            Videos</a>
                                                        <p class="mb-0 small">Create engaging videos for promotion.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/presenter.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Presenter
                                                            Videos</a>
                                                        <p class="mb-0 small">Record videos featuring on-screen
                                                            presenters.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/mentorship.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Explainer
                                                            Videos</a>
                                                        <p class="mb-0 small">Simplify concepts with animated
                                                            explanations.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/product-lauch.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Animation</a>
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
                                                    <img src="../assets/images/categories_Icons/clapperboard.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Product
                                                            Videos</a>
                                                        <p class="mb-0 small">Showcase products through dynamic visuals.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/animation_motion.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Motion
                                                            Graphics</a>
                                                        <p class="mb-0 small">Combine animation and graphic design
                                                            seamlessly.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/film-reel.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Filmed
                                                            Video
                                                            Production</a>
                                                        <p class="mb-0 small">Capture live-action videos professionally.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/videogame.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_chref=">Game
                                                            Trailers</a>
                                                        <p class="mb-0 small">Promote games with cinematic previews.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Programming
                                                        &
                                                        Tech</a></h6>
                                                <hr> <!-- Divider -->

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/shopping.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Websites</a>
                                                        <p class="mb-0 small">Build and maintain functional websites.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/system.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Application
                                                            Development</a>
                                                        <p class="mb-0 small">Create custom software applications.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/virtual-assistant.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Software
                                                            Development</a>
                                                        <p class="mb-0 small">Develop tailored software solutions.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/app-development.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Mobile
                                                            Apps</a>
                                                        <p class="mb-0 small">Design apps for Android and iOS.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/check-in-desk.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Website
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
                                                    <img src="../assets/images/categories_Icons/cyber-security.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Support &
                                                            Cybersecurity</a>
                                                        <p class="mb-0 small">Ensure systems are secure and supported.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/currency-market.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Blockchain &
                                                            Cryptocurrency</a>
                                                        <p class="mb-0 small">Develop blockchain and crypto solutions.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/satisfaction.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">User Testing</a>
                                                        <p class="mb-0 small">Test and improve user experiences.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/gear.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">Electronics
                                                            Engineering</a>
                                                        <p class="mb-0 small">Design and develop electronic systems.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4  position-relative">
                                                    <img src="../assets/images/categories_Icons/quality-assurance.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id">QA & Review</a>
                                                        <p class="mb-0 small">Test and ensure quality assurance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Digital
                                                        Marketing</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/search.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=Search">Search</a>
                                                        <p class="mb-0 small">Optimize search engines for visibility.
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/connection.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=Social">Social</a>
                                                        <p class="mb-0 small">Promote brands via social platforms.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/iteration.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=MethodsTechniques">Methods
                                                            &
                                                            Techniques</a>
                                                        <p class="mb-0 small">Explore marketing methods and approaches.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/report.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AnalyticsStrategy">Analytics
                                                            & Strategy</a>
                                                        <p class="mb-0 small">Analyze data and plan marketing
                                                            strategies.</p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/industrial-revolution.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=IndustryPurposeSpecific">Industry
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
                                                    <img src="../assets/images/categories_Icons/crowdfunding.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=Crowdfunding">Crowdfunding</a>
                                                        <p class="mb-0 small">Build campaigns to raise funding online.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Music
                                                        &
                                                        Audio</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/search.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=MusicProductionWriting">Music
                                                            Production &
                                                            Writing</a>
                                                        <p class="mb-0 small">Compose and produce original music.</p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/connection.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AudioEngineeringPostProduction">Audio
                                                            Engineering & Post Production</a>
                                                        <p class="mb-0 small">Enhance audio with editing expertise.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/iteration.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=VoiceOverStreaming">Voice
                                                            Over & Streaming</a>
                                                        <p class="mb-0 small">Record and stream professional voiceovers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/report.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=LessonsTranscription">Lessons
                                                            &
                                                            Transcription</a>
                                                        <p class="mb-0 small">Learn and transcribe music effectively.
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 mt-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/industrial-revolution.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=DJing">DJing</a>
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
                                                    <img src="../assets/images/categories_Icons/crowdfunding.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=SoundDesign">Sound
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
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>


                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="../category.php?cat_id">Business</a>
                                    <div class=" dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Business</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/consultation.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=FormationConsulting">Formation
                                                            & Consulting</a>
                                                        <p class="mb-0 small">Start and grow your business effectively.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/business.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=OperationsManagement">Operations
                                                            &
                                                            Management</a>
                                                        <p class="mb-0 small">Streamline business processes and
                                                            management.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/legal.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=LegalServices">Legal
                                                            Services</a>
                                                        <p class="mb-0 small">Access professional legal support and
                                                            advice.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/profit.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=SalesCustomerCare">Sales
                                                            &
                                                            Customer Care</a>
                                                        <p class="mb-0 small">Boost sales and enhance customer
                                                            experience.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/evaluation.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=OnlineInvestigations">Online
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
                                                    <img src="../assets/images/categories_Icons/customer-service.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=CustomerCare">Customer
                                                            Care</a>
                                                        <p class="mb-0 small">Provide outstanding support to customers.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/project.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=SoftwareManagement">Software
                                                            Management</a>
                                                        <p class="mb-0 small">Manage business software and tools
                                                            effectively.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/analytics.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=MarketResearch">Market
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
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="../category.php?cat_id">Consulting</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Consulting</a>
                                                </h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/video-call.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=BusinessConsultants">Business
                                                            Consultants</a>
                                                        <p class="mb-0 small">Expert guidance for business growth.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/planning.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=MarketingStrategy">Marketing
                                                            Strategy</a>
                                                        <p class="mb-0 small">Plan and execute effective marketing
                                                            strategies.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/technological-support.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=TechConsulting">Tech
                                                            Consulting</a>
                                                        <p class="mb-0 small">Innovative solutions for tech challenges.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/coach.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=CoachingAdvice">Coaching
                                                            &
                                                            Advice</a>
                                                        <p class="mb-0 small">Personalized coaching for success.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/mentorship_co.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=Mentorship">Mentorship</a>
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
                                                    <img src="../assets/images/categories_Icons/data-strategy.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=DataConsulting">Data
                                                            Consulting</a>
                                                        <p class="mb-0 small">Optimize data for better decisions.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/pie-chart.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=DataVisualizationConsulting">Data
                                                            Visualization
                                                            Consulting</a>
                                                        <p class="mb-0 small">Transform data into visual insights.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->

                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/cyber-security_co.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=CybersecurityConsulting">Cybersecurity
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
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">Writing
                                                        & Translation</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/content-writing.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=ContentWriting">Content
                                                            Writing</a>
                                                        <p class="mb-0 small">Create engaging and original content.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/video-edition.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=EditingCritique">Editing
                                                            &
                                                            Critique</a>
                                                        <p class="mb-0 small">Polish and refine written work.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/books.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=BookeBookPublishing">Book
                                                            &
                                                            eBook Publishing</a>
                                                        <p class="mb-0 small">Publish books and eBooks professionally.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/hreflang.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=TranslationTranscription">Translation
                                                            &
                                                            Transcription</a>
                                                        <p class="mb-0 small">Convert language and audio to text.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/online-analytical.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=BusinessMarketingCopy">Business
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
                                                    <img src="../assets/images/categories_Icons/task.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=CareerWriting">Career
                                                            Writing</a>
                                                        <p class="mb-0 small">Write resumes and career documents.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/sheet.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=TechnicalWriting">Technical
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
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-5 mb-4 mb-xl-0">
                                                <h6 class="mb-0"><a href="../category.php?cat_id"
                                                        class="bg-primary text-primary bg-opacity-10 rounded-2 py-2 px-2 mb-0">View
                                                        AI
                                                        Services</a></h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/virtual-assistant-integration.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIMobileDevelopment">AI
                                                            Mobile Development</a>
                                                        <p class="mb-0 small">Create AI-powered mobile applications.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/artist.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIArtists">AI
                                                            Artists</a>
                                                        <p class="mb-0 small">Generate creative AI-driven artwork.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/speech.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIAudio">AI
                                                            Audio</a>
                                                        <p class="mb-0 small">Produce audio enhanced by AI tools.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/ai.png" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIVideo">AI
                                                            Video</a>
                                                        <p class="mb-0 small">Develop AI-assisted video content.</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="../assets/images/categories_Icons/database-management.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=DataAI">Data</a>
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
                                                    <img src="../assets/images/categories_Icons/analytics.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIBusinesses">AI
                                                            for Businesses</a>
                                                        <p class="mb-0 small">Integrate AI solutions into businesses.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="../assets/images/categories_Icons/ai-powered-support.png"
                                                        class="icon-md" alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0"
                                                            href="../category.php?cat_child_id=AIContent">AI
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
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
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
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2">
                                                            </polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 ">
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
                                                        <a href="our-business-solutions.php"
                                                            class="btn btn-sm btn-dark mb-0">Purchase
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
                                <li> <a href="../main-category.php"
                                        class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0">View
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
                            <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Explore</a>
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
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Megamenu</a>
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
                                        <div
                                            class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="../blog.php">Blog</a>
                                            <p class="mb-0 small text-truncate-2">Explore stories, ideas, and updates to
                                                inspire your journey and keep you informed.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div
                                            class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="../invent_friend.php">Invent a
                                                Friend</a>
                                            <p class="mb-0 small text-truncate-2">Connect and collaborate with
                                                like-minded
                                                individuals to spark innovation and creativity.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div
                                            class="position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
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
                                                <a class="stretched-link h6 mb-0"
                                                    href="../our-business-solutions.php">Our
                                                    Business Solutions</a>
                                                <p class="mb-0 small">To help companies locate and manage outstanding
                                                    independent contractors.</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fa-solid fa-crown text-info"></i></h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0"
                                                    href="../creativehub-pro.php">CreativeHub
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
                                                <a class="stretched-link h6 mb-0"
                                                    href="../creativehub-certified.php">CreativeHub Certified</a>
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
                                                <a href="#"> <img src="../assets/images/client/google-play.svg"
                                                        class="btn-transition" alt="google-store"> </a>
                                            </div>
                                            <!-- App store button -->
                                            <div class="col-6 col-sm-4 col-xxl-6">
                                                <a href="#"> <img src="../assets/images/client/app-store.svg"
                                                        class="btn-transition" alt="app-store"> </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action box -->
                                    <div class="col-12">
                                        <div class="alert alert-secondary alert-dismissible fade show mt-2 mb-0 rounded-3"
                                            role="alert">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs me-2">
                                                <img class="avatar-img rounded-circle"
                                                    src="../assets/images/element/question.png" alt="question-mark">
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
                            <a class="nav-link" href="../become-seller.php" aria-haspopup="true"
                                aria-expanded="false">Become a
                                seller</a>
                        </li>


                        <!-- Nav item 6 link-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                                <li>
                                    <a class="dropdown-item" href="https://github.com/timenyin/CreativeHub_ReadMe.git"
                                        target="_blank">
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
                            <a class="nav-link mb-0" role="button" href="#" id="navSearch" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-auto-close="outside" data-bs-display="static">
                                <i class="bi bi-search fs-5"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-start shadow rounded p-2 searchAtSmall"
                                aria-labelledby="navSearch">
                                <form class="input-group" onsubmit="return handleSearch()">
                                    <input id="searchInput" class="form-control border-primary" type="search"
                                        placeholder="Search" name="search_query" aria-label="Search">
                                    <button class="btn btn-primary m-0" type="submit" name="search">Search</button>
                                </form>

                                <!-- Recent search -->
                                <ul id="recentSearchList"
                                    class="list-group list-group-borderless p-2 small d-none d-sm-block">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-bold">Recent Searches:</span>
                                        <span onclick="clearHistory()" class="text-danger" style="cursor: pointer;"><i
                                                class="bi bi-x-lg"></i></span>
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
Page Banner START -->
        <section class="pt-0">
            <!-- Main banner background image -->
            <div class="container-fluid px-0">
                <div class="bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(../assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                            src="../assets/images/avatar/01.jpg" alt="">
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
                                                                src="../assets/images/client/vip-card.svg" alt=""
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


        <section class="pt-0 pt-lg-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0 text-success">View Offers (2) </h2>
                        <div class="" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                            <div class="card px-3">
                                <!-- Card body -->
                                <div class="card-body p-0 pt-3">
                                    <div class="vstack gap-3">
                                        <!-- Question item START -->
                                        <div class="border-bottom">
                                            <!-- Name and time -->
                                            <div class="d-sm-flex justify-content-sm-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <!-- Info -->
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Request Description</h5>
                                                        <small class="text-success"><i class="bi bi-info-circle"></i>
                                                            Please quote for a platform exactly like
                                                            CreativeHub website</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- request details -->
                                            <div class="bg-light rounded-3 p-3 mb-4">
                                                <div class="row g-4">
                                                    <!-- Amount Details -->
                                                    <div class="col-md-4">
                                                        <h6 class="small">Amount Details:</h6>
                                                        <div class="d-flex align-items-center">
                                                            <!-- amount  -->
                                                            <div class="avatar align-middle">
                                                                <div
                                                                    class="avatar-img rounded-1 badge bg-success bg-opacity-20 text-success rounded-0">
                                                                    <span
                                                                        class="text-white position-absolute top-50 start-50 translate-middle fw-bold"><i
                                                                            class="bi bi-coin"
                                                                            style="font-size: 25px;"></i></span>
                                                                </div>
                                                            </div>
                                                            <!-- Info -->
                                                            <div class="ms-2">
                                                                <h6 class="mb-0">Request Budget</h6>
                                                                <small class="h4">$120</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Date Details -->
                                                    <div class="col-md-4">
                                                        <h6 class="small">Date Details:</h6>
                                                        <div class="d-flex align-items-center">
                                                            <!-- amount  -->
                                                            <div class="avatar align-middle">
                                                                <div
                                                                    class="avatar-img rounded-1 badge bg-success bg-opacity-20 text-success rounded-0">
                                                                    <span
                                                                        class="text-white position-absolute top-50 start-50 translate-middle fw-bold"><i
                                                                            class="bi bi-calendar-day-fill"
                                                                            style="font-size: 25px;"></i></span>
                                                                </div>
                                                            </div>
                                                            <!-- Info -->
                                                            <div class="ms-2">
                                                                <h6 class="mb-0">Request Date</h6>
                                                                <small class="h5">July 23rd 2023</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Duration Time  -->
                                                    <div class="col-md-4">
                                                        <h6 class="small">Duration Time:</h6>
                                                        <div class="d-flex align-items-center">
                                                            <!-- amount  -->
                                                            <div class="avatar align-middle">
                                                                <div
                                                                    class="avatar-img rounded-1 badge bg-success bg-opacity-20 text-success rounded-0">
                                                                    <span
                                                                        class="text-white position-absolute top-50 start-50 translate-middle fw-bold"><i
                                                                            class="bi bi-clock-history"
                                                                            style="font-size: 25px;"></i></span>
                                                                </div>
                                                            </div>
                                                            <!-- Info -->
                                                            <div class="ms-2">
                                                                <h6 class="mb-0">Request Duration</h6>
                                                                <small class="h5">7 Days </small>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Categories Details -->
                                                    <div class="col-md-8">
                                                        <h6 class="small">Categories Details:</h6>
                                                        <div class="d-flex align-items-center">
                                                            <!-- amount -->
                                                            <div class="avatar align-middle flex-shrink-0">
                                                                <div class="avatar-img rounded-2 bg-success">
                                                                    <span
                                                                        class="text-white position-absolute top-50 start-50 translate-middle fw-bold">
                                                                        <i class="bi bi-boxes"
                                                                            style="font-size: 25px;"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h6 class="fw-normal mb-0">Request Categories</h6>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item">
                                                                        <span
                                                                            class="badge bg-success bg-opacity-10 text-success rounded-0 px-2 py-1">photoshop</span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span
                                                                            class="badge bg-success bg-opacity-10 text-success rounded-0 px-2 py-1">Programming
                                                                            & Tech</span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span
                                                                            class="badge bg-success bg-opacity-10 text-success rounded-0 px-2 py-1">Web
                                                                            Programming</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- end of request details  -->
                                        </div>
                                        <!-- Question item END -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <?php include('../includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <!-- Request Card -->
                        <section class="pt-0">
                            <div class="container position-relative">
                                <!-- No offer list  -->
                                <section class="pt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <!-- Image -->
                                                <img src="../assets/images/element/request_404.svg"
                                                    class="h-200px h-md-400px mb-4" alt="">
                                                <!-- Title -->
                                                <h1 class="display-1 text-danger mb-0">204</h1>
                                                <!-- Subtitle -->
                                                <h2>Oh no, Offers Yet!</h2>
                                                <!-- info -->
                                                <p class="mb-4">Your Request Still Not Received Offers.</p>
                                                <!-- Button -->
                                                <a href="index.php" class="btn btn-success mb-0">Take me to Homepage</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- End of no offer list  -->
                                <!-- Offer List -->
                                <div class="card border-1">
                                    <div class="card-body">
                                        <div class="row justify-content-lg-between">
                                            <div class="col-lg-8">
                                                <!-- Content Section -->
                                                <div class="d-flex align-items-start">
                                                    <!-- Image -->
                                                    <img src="../proposals/proposal_files/07.jpg"
                                                        class="rounded-2 img-fluid me-3" alt="Card image"
                                                        style="max-width: 150px;">
                                                    <!-- Title and Description -->
                                                    <div>
                                                        <h5>I Will Do Web Development In Laravel And React</h5>
                                                        <small>Satisfied conveying a dependent contented he gentleman
                                                            agreeable do be. Warrant private blushes removed an in
                                                            equally totally if. Delivered dejection necessary objection
                                                            do Mr prevailed. Mr feeling does chiefly cordial in
                                                            do.</small>
                                                        <ul class="list-inline mb-0 mt-2">
                                                            <li class="list-inline-item">
                                                                <span
                                                                    class="badge bg-info bg-opacity-10 text-info rounded-0 px-2 py-1">
                                                                    $ offer Budget:
                                                                    <span class="fw-bolder">$100</span>
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span
                                                                    class="badge bg-info bg-opacity-10 text-info rounded-0 px-2 py-1">
                                                                    $ offer Duration:
                                                                    <span class="fw-bolder">3 Days</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column align-items-center">
                                                <div class="avatar position-relative">
                                                    <img class="avatar-img rounded-circle" src="../user_images/10.jpg"
                                                        alt="avatar" style="width: 100px;">
                                                    <img src="../images/badge new-03.png" class="position-absolute"
                                                        style="width: 46px; top: 10px; left: 25px;" alt="Badge">
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6
                                                        class="h6 mb-3 d-flex justify-content-center align-items-center">
                                                        @LoriSteven
                                                        <i class="fa-regular fa-circle-dot fa-beat text-success fa-beat-fade ms-2"
                                                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.075; font-size:1em;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Am Online" data-bs-original-title="Am Online"
                                                            aria-hidden="true"></i>
                                                    </h6>
                                                    <div class="d-flex justify-content-center w-100">
                                                        <a href="http://localhost/CreativeHub/user.php"
                                                            class="btn btn-warning me-2 flex-grow-1">Contact
                                                            Now</a>
                                                        <button id="order-button-1"
                                                            class="btn btn-warning flex-grow-1">Order Now</button>
                                                        <!-- <button id="order-button-1" data-bs-toggle="modal"
                                                            data-bs-target="#featured-request-modal"
                                                            class="btn btn-warning flex-grow-1">Order Now</button> -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                        $("#order-button-1").click(function() {
                                            var proposal_id = ""; // Set the proposal ID if needed
                                            $.ajax({
                                                    method: "POST",
                                                    url: "offer_submit_order.php",
                                                    data: {
                                                        proposal_id: proposal_id
                                                    }
                                                })
                                                .done(function(data) {
                                                    $("#request-modal").html(data);
                                                    // $("#featured-request-modal").modal("show");
                                                });
                                        });
                                        </script>
                                    </div>
                                </div>
                                <!-- END Of offer List -->

                                <!-- Offer List -->
                                <div class="card border-1">
                                    <div class="card-body">
                                        <div class="row justify-content-lg-between">
                                            <div class="col-lg-8">
                                                <!-- Content Section -->
                                                <div class="d-flex align-items-start">
                                                    <!-- Image -->
                                                    <img src="../proposals/proposal_files/18.jpg"
                                                        class="rounded-2 img-fluid me-3" alt="Card image"
                                                        style="max-width: 150px;">
                                                    <!-- Title and Description -->
                                                    <div>
                                                        <h5>I Will Do Viral Youtube Seo Social Media Promotion</h5>
                                                        <small>Satisfied conveying a dependent contented he gentleman
                                                            agreeable do be. Warrant private blushes removed an in
                                                            equally totally if. Delivered dejection necessary objection
                                                            do Mr prevailed. Mr feeling does chiefly cordial in
                                                            do.</small>
                                                        <ul class="list-inline mb-0 mt-2">
                                                            <li class="list-inline-item">
                                                                <span
                                                                    class="badge bg-info bg-opacity-10 text-info rounded-0 px-2 py-1">
                                                                    $ offer Budget:
                                                                    <span class="fw-bolder">$100</span>
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span
                                                                    class="badge bg-info bg-opacity-10 text-info rounded-0 px-2 py-1">
                                                                    $ offer Duration:
                                                                    <span class="fw-bolder">3 Days</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column align-items-center">
                                                <div class="avatar position-relative">
                                                    <img class="avatar-img rounded-circle" src="../user_images/14.jpg"
                                                        alt="avatar" style="width: 100px;">
                                                    <img src="../images/badge new-06.png" class="position-absolute"
                                                        style="width: 46px; top: 10px; left: 25px;" alt="Badge">
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6
                                                        class="h6 mb-3 d-flex justify-content-center align-items-center">
                                                        @KantLuck12
                                                        <i class="fa-regular fa-circle-dot fa-beat text-success fa-beat-fade ms-2"
                                                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.075; font-size:1em;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Am Online" data-bs-original-title="Am Online"
                                                            aria-hidden="true"></i>
                                                    </h6>
                                                    <div class="d-flex justify-content-center w-100">
                                                        <a href="http://localhost/CreativeHub/user.php"
                                                            class="btn btn-warning me-2 flex-grow-1">Contact
                                                            Now</a>
                                                        <button id="order-button-1" data-bs-toggle="modal"
                                                            data-bs-target="#featured-request-modal"
                                                            class="btn btn-warning flex-grow-1">Order Now</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                        $("#order-button-1").click(function() {
                                            var proposal_id = ""; // Set the proposal ID if needed
                                            $.ajax({
                                                    method: "POST",
                                                    url: "offer_submit_order.php",
                                                    data: {
                                                        proposal_id: proposal_id
                                                    }
                                                })
                                                .done(function(data) {
                                                    $("#request-modal").html(data);

                                                });
                                        });
                                        </script>
                                    </div>
                                </div>
                                <!-- END Of offer List -->




                            </div>

                        </section>
                        <!-- End of Request Card  -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->
        <div id="request-modal"></div>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->


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
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                target="_blank"
                                href="https://www.instagram.com/creativehubsocials?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                    class="fab fa-fw fa-instagram"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                                target="_blank" href="https://twitter.com/AtCreativeHub"><i
                                    class="bi bi-twitter-x text-dark"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                                target="_blank" href="https://www.linkedin.com/in/creative-hub-1ab89b2bb/"><i
                                    class="fab fa-fw fa-linkedin-in"></i></a> </li>

                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                target="_blank" href="mailto:creativehubmessage@gmail.com"><i
                                    class="bi bi-google"></i></a>
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
                            <a target="_blank" href="coming-soon.html"> <img
                                    src="../assets/images/client/google-play.svg" alt="google-play">
                            </a>
                        </div>
                        <!-- App store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a target="_blank" href="coming-soon.html"> <img src="../assets/images/client/app-store.svg"
                                    alt="app-store">
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

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Functions -->
    <script src="../assets/js/functions.js"></script>



</body>

</html>