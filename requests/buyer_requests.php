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
                        <h2 class="mb-0">View Recent Buyer Request </h2>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Card START -->
                    <div class="col-xl-6">
                        <div class="card p-2 bg-transparent border-0">
                            <!-- Title -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <p class="my-0 h6 fw-light"> <i class="fa-solid fa-calendar-days text-warning"></i>
                                        10
                                        Offers Remaining for Today </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->

                    <!-- Card START -->
                    <div class="col-xl-6">
                        <div class="my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                            <div class="w-100">
                                <form class="rounded position-relative">
                                    <input id="search-input"
                                        class="form-control pe-5 py-3 bg-secondary bg-opacity-10 border-0" type="search"
                                        placeholder="Search for buyer request" aria-label="Search">
                                    <button
                                        class="btn btn-link bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div>
        </section>
        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <style>
                    .dropdown .dropdown-toggle:after {
                        content: "\f141";
                        font-family: "Font Awesome 5 Free";
                        font-weight: 900;
                        vertical-align: middle;
                        border: none;
                        float: right;
                    }
                    </style>

                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">User Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-3 p-xl-0">
                                <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                    <!-- Dashboard menu -->
                                    <div class="list-group list-group-dark list-group-borderless">
                                        <a class="list-group-item" href="../dashboard.php"><i
                                                class="text-danger bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>

                                        <!-- Dropdown for Marking -->
                                        <div class="list-group-item dropdown">
                                            <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="text-warning bi bi-shop-window fa-fw me-2"></i>Seller
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                                                <li><a class="dropdown-item" href="../selling_orders.php"><i
                                                            class="text-warning bi bi-border-style fa-fw me-2"></i>Order</a>
                                                </li>
                                                <li><a class="dropdown-item" href="../proposals/view_proposals.php"><i
                                                            class="text-warning bi bi-yelp fa-fw me-2"></i>View
                                                        Proposal</a></li>
                                                <li><a class="dropdown-item" href="../requests/buyer_requests.php"><i
                                                            class="text-warning bi bi-envelope-heart fa-fw me-2"></i>Request</a>
                                                </li>
                                                <li><a class="dropdown-item" href="revenue.php"><i
                                                            class="text-warning bi bi-coin fa-fw me-2"></i>Revenue</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Dropdown for Purchase -->
                                        <div class="list-group-item dropdown">
                                            <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="text-info bi bi-bag-plus fa-fw me-2"></i>Purchase
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                                                <li><a class="dropdown-item" href="../buying_orders.php"><i
                                                            class="text-info bi bi-border-style fa-fw me-2"></i>Order</a>
                                                </li>
                                                <li><a class="dropdown-item" href="../purchases.php"><i
                                                            class="text-info bi bi-cash-coin fa-fw me-2"></i>Payments</a>
                                                </li>
                                                <li><a class="dropdown-item" href="../favourites.php"><i
                                                            class="text-info bi bi-heart-half fa-fw me-2"></i>Favorite</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Dropdown for Request -->
                                        <div class="list-group-item dropdown">
                                            <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="text-success bi bi-envelope-heart fa-fw me-2"></i>Request
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                                                <li><a class="dropdown-item" href="../requests/post_request.php"><i
                                                            class="text-success bi bi-send-plus fa-fw me-2"></i>Post
                                                        Request</a></li>
                                                <li><a class="dropdown-item" href="../requests/manage_requests.php"><i
                                                            class="text-success bi bi-kanban fa-fw me-2"></i>Manage
                                                        Request</a></li>
                                            </ul>
                                        </div>

                                        <!-- Dropdown for Request -->
                                        <div class="list-group-item dropdown">
                                            <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="text-orange bi bi-toggles fa-fw me-2"></i>Negotiations
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                                                <li><a class="dropdown-item" href="../manage_contacts.php?my_buyers">
                                                        <i class="text-orange fa-solid fa-people-carry-box pe-1"></i>My
                                                        Buyers</a></li>
                                                <li><a class="dropdown-item" href="../manage_contacts.php?my_sellers"><i
                                                            class="text-orange fa-solid fa-people-group pe-1"></i>My
                                                        Sellers</a></li>
                                            </ul>
                                        </div>
                                        <a class="list-group-item" href="my_referrals.php"><i
                                                class="text-purple bi bi-people-fill fa-fw me-2"></i>My Referrals</a>
                                        <a class="list-group-item"
                                            href="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/conversations/inbox.php"><i
                                                class="text-success opacity-10 bi bi-chat-text-fill fa-fw me-2"></i>Conversation</a>
                                        <a class="list-group-item"
                                            href="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/user.php"><i
                                                class="text-info opacity-10 bi bi-person-lines-fill fa-fw me-2"></i>My
                                            Profile</a>
                                        <!-- Dropdown for Settings -->
                                        <div class="list-group-item dropdown">
                                            <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="text-danger bi bi-gear fa-fw me-2"></i>Settings
                                            </div>
                                            <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                                                <li><a class="dropdown-item" href="settings.php?profile_settings">
                                                        <i
                                                            class="text-danger bi bi-person-lines-fill fa-fw me-2"></i>Profile
                                                        Settings</a></li>
                                                <li><a class="dropdown-item" href="settings.php?account_settings"><i
                                                            class="text-danger bi bi-person-gear fa-fw me-2"></i>Account
                                                        Settings</a></li>
                                            </ul>
                                        </div>
                                        <a class="list-group-item  bg-danger-soft-hover" href="#!"><i
                                                class="fas fa-sign-out-alt fa-fw me-2"></i>Sign out</a>
                                    </div>
                                    <div id="extwaiokist" style="display:none" v="nipgg" q="b7567393" c="288.3" i="297"
                                        u="3.296" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1"
                                        w="false" e="" a="3" m="BMe=" vn="9adfy">
                                        <div id="extwaigglbit" style="display:none" v="nipgg" q="b7567393" c="288.3"
                                            i="297" u="3.296" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420"
                                            d="1" w="false" e="" a="3" m="BMe=">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <div class="card shadow rounded-2 p-0">
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1"
                                            data-bs-toggle="pill" data-bs-target="#active-proposal-pills" type="button"
                                            role="tab" aria-controls="active-proposal-pills" aria-selected="true"
                                            tabindex="0">
                                            Active
                                            <span
                                                class="badge bg-purple rounded-circle bg-opacity-10 ms-1 text-purple">7</span>
                                        </button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4"
                                            data-bs-toggle="pill" data-bs-target="#pending-approval-pills" type="button"
                                            role="tab" aria-controls="pending-approval-pills" aria-selected="true"
                                            tabindex="0">
                                            Offers Sent
                                            <span
                                                class="badge bg-success rounded-circle bg-opacity-10 ms-1 text-success">7</span>
                                        </button>
                                    </li>

                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">
                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade show active" id="active-proposal-pills" role="tabpanel"
                                        aria-labelledby="course-pills-tab-1">
                                        <div class="row mb-3">
                                            <div class="col-md-6">

                                            </div>
                                            <div class="col-md-6">
                                                <select id="sub-category" class="form-select border-warning"
                                                    aria-label="Default select example">
                                                    <option value="all">View sub categories</option>
                                                    <option value="1">machine leaning</option>
                                                    <option value="2">Web design</option>
                                                    <option value="3">Logo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Content for Buyer Request  tab -->
                                        <div class="row mb-5">
                                            <div class="col-lg-12 mx-auto">
                                                <!-- Title -->
                                                <div class="bg-light p-3 rounded-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6 text-center text-md-start">
                                                            <h6 class="mb-2 mb-md-0">Request Offers</h6>
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
                                                <div id="request_tr_4" class="row align-items-center p-3">
                                                    <div class="col-md-6 text-center text-md-start">
                                                        <!-- content details  -->
                                                        <div class="card card-body border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <!-- Avatar and info -->
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <!-- Avatar -->
                                                                    <div class="avatar flex-shrink-0">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="../user_images/03.jpg" alt="avatar">
                                                                    </div>
                                                                    <!-- Info -->
                                                                    <div>
                                                                        <h5 class="ps-0 mb-0 h6 fw-light">Dennis Barrett
                                                                        </h5>
                                                                        <span
                                                                            class="d-none d-sm-flex badge bg-success bg-opacity-10 text-success rounded-0 py-2"
                                                                            style="float: right;">
                                                                            Oct 14th 2023
                                                                        </span>
                                                                        <hr class="border-0 my-1">
                                                                        <h6 class="card-title mb-0">Web Developer Needed
                                                                        </h6>
                                                                        <small>I need a developer who will create my
                                                                            company website for me</small>
                                                                        <a href="#"
                                                                            class="badge bg-warning bg-opacity-10 text-warning rounded-0 px-2 py-2">
                                                                            <i class="bi bi-paperclip"></i>
                                                                            information.txt
                                                                        </a>
                                                                        <hr class="border-0 my-2">
                                                                        <span
                                                                            class="badge bg-secondary bg-opacity-10 text-secondary rounded-0 px-2 py-2">HTML&CSS</span>
                                                                        <span
                                                                            class="badge bg-secondary bg-opacity-10 text-secondary rounded-0 px-2 py-2">Web
                                                                            design</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="col-md-6 pt-2 pt-md-0">
                                                        <div class="row">
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md bg-success bg-opacity-10 rounded-circle text-success">
                                                                    3</div>
                                                            </div>
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md_min bg-success bg-opacity-10 rounded-circle text-success">
                                                                    Day 3</div>
                                                            </div>
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md bg-success bg-opacity-10 rounded-circle text-success">
                                                                    $15</div>
                                                                <!-- send offer  button -->
                                                                <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success shear_4"
                                                                    style="cursor: pointer; visibility: hidden;">
                                                                    <!-- Share button -->
                                                                    <a href="#" class="rounded small text-warning"
                                                                        role="button" id="dropdownShare"
                                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                                        data-bs-placement="top" aria-label="Share"
                                                                        data-bs-original-title="Share">
                                                                        <i class="fas fa-fw fa-share-alt"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                                        aria-labelledby="dropdownShare"
                                                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 36px);"
                                                                        data-popper-placement="bottom-end">
                                                                        <li>
                                                                            <div
                                                                                class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0 send_button_4">
                                                                                <i class="bi bi-link-45deg animation-blink"
                                                                                    aria-hidden="true"></i> send offer
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0 remove_request_4">
                                                                                <i class="bi bi-link-45deg animation-blink"
                                                                                    aria-hidden="true"></i> Delete
                                                                                Request
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- send offer  button end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                    $(document).ready(function() {
                                                        // Hide the button initially
                                                        $(".shear_4").css("visibility", "hidden");

                                                        // Show the button on mouse enter and hide on mouse leave
                                                        $("#request_tr_4").hover(
                                                            function() {
                                                                $(".shear_4").css("visibility", "visible");
                                                            },
                                                            function() {
                                                                $(".shear_4").css("visibility", "hidden");
                                                            }
                                                        );

                                                        // Handle click event on the send offer button
                                                        $(".send_button_4").click(function() {
                                                            var request_id =
                                                                ""; // Ensure this variable is properly set

                                                            $.ajax({
                                                                method: "POST",
                                                                url: "send_offer_modal.php",
                                                                data: {
                                                                    request_id: request_id
                                                                }
                                                            }).done(function(data) {
                                                                $(".append-modal").html(data);
                                                                // Initialize and show the modal (assuming the modal's ID is 'myModal')
                                                                $("#myModal").modal('show');
                                                            });
                                                        });

                                                        // Handle click event on the remove request button
                                                        $(".remove_request_4").click(function(event) {
                                                            event.preventDefault();
                                                            $("#request_tr_4").fadeOut(function() {
                                                                $(this).remove();
                                                            });
                                                        });
                                                    });
                                                    </script>

                                                    <hr class="my-3 m-0 border-warning"> <!-- Divider -->
                                                </div> <!-- Row END -->



                                                <!-- Table item -->
                                                <div id="request_tr_5" class="row align-items-center p-3">
                                                    <div class="col-md-6 text-center text-md-start">
                                                        <!-- content details  -->
                                                        <div class="card card-body border">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <!-- Avatar and info -->
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <!-- Avatar -->
                                                                    <div class="avatar flex-shrink-0">
                                                                        <img class="avatar-img rounded-circle"
                                                                            src="../user_images/07.jpg" alt="avatar">
                                                                    </div>
                                                                    <!-- Info -->
                                                                    <div>
                                                                        <h5 class="ps-0 mb-0 h6 fw-light">Dennis Barrett
                                                                        </h5>
                                                                        <span
                                                                            class="d-none d-sm-flex badge bg-success bg-opacity-10 text-success rounded-0 py-2"
                                                                            style="float: right;">
                                                                            Oct 14th 2023
                                                                        </span>
                                                                        <hr class="border-0 my-1">
                                                                        <h6 class="card-title mb-0">Graphic Design
                                                                            Needed
                                                                        </h6>
                                                                        <small>I need a developer who will create my
                                                                            company website for me</small>
                                                                        <a href="#"
                                                                            class="badge bg-warning bg-opacity-10 text-warning rounded-0 px-2 py-2">
                                                                            <i class="bi bi-paperclip"></i>
                                                                            information.txt
                                                                        </a>
                                                                        <hr class="border-0 my-2">
                                                                        <span
                                                                            class="badge bg-secondary bg-opacity-10 text-secondary rounded-0 px-2 py-2">HTML&CSS</span>
                                                                        <span
                                                                            class="badge bg-secondary bg-opacity-10 text-secondary rounded-0 px-2 py-2">Web
                                                                            design</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="col-md-6 pt-2 pt-md-0">
                                                        <div class="row">
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md bg-success bg-opacity-10 rounded-circle text-success">
                                                                    3</div>
                                                            </div>
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md_min bg-success bg-opacity-10 rounded-circle text-success">
                                                                    Day 3</div>
                                                            </div>
                                                            <!-- Check -->
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <div
                                                                    class="icon-md bg-success bg-opacity-10 rounded-circle text-success">
                                                                    $15</div>
                                                                <!-- send offer  button -->
                                                                <div class="dropdown icon-md ms-1 bg-warning bg-opacity-10 rounded-circle text-success shear_5"
                                                                    style="cursor: pointer; visibility: hidden;">
                                                                    <!-- Share button -->
                                                                    <a href="#" class="rounded small text-warning"
                                                                        role="button" id="dropdownShare"
                                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                                        data-bs-placement="top" aria-label="Share"
                                                                        data-bs-original-title="Share">
                                                                        <i class="fas fa-fw fa-share-alt"
                                                                            aria-hidden="true"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu ms-4 dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                                        aria-labelledby="dropdownShare"
                                                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 36px);"
                                                                        data-popper-placement="bottom-end">
                                                                        <li>
                                                                            <div class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0 send_button_5"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#quota-finish">
                                                                                <i class="bi bi-link-45deg animation-blink"
                                                                                    aria-hidden="true"></i> send offer
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="dropdown-item btn btn-sm text-warning me-2 mb-4 mb-sm-0 remove_request_5">
                                                                                <i class="bi bi-link-45deg animation-blink"
                                                                                    aria-hidden="true"></i> Delete
                                                                                Request
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- send offer  button end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                    $(document).ready(function() {
                                                        $(".shear_5").css("visibility", "hidden");

                                                        // Show the button on mouse enter and hide on mouse leave
                                                        $("#request_tr_5").hover(
                                                            function() {
                                                                $(".shear_5").css("visibility", "visible");
                                                            },
                                                            function() {
                                                                $(".shear_5").css("visibility", "hidden");
                                                            }
                                                        );
                                                        // $(".send_button_3").css("visibility", "hidden");
                                                        $(document).on("mouseenter", "#request_tr_5",
                                                            function() {
                                                                $(".send_button_5").css("visibility",
                                                                    "visible");
                                                            });
                                                        $(document).on("mouseleave", "#request_tr_5",
                                                            function() {
                                                                // $(".send_button_3").css("visibility", "hidden");
                                                            });

                                                        // Handle click event on the remove request button
                                                        $(".remove_request_5").click(function(event) {
                                                            event.preventDefault();
                                                            $("#request_tr_5").fadeOut(function() {
                                                                $(this).remove();
                                                            });
                                                        });
                                                    });
                                                    </script>

                                                    <hr class="my-3 m-0 border-warning"> <!-- Divider -->
                                                </div> <!-- Row END -->

                                            </div>


                                        </div>

                                    </div>

                                    <!-- Tab Pane -->
                                    <div class="tab-pane fade show" id="pending-approval-pills" role="tabpanel"
                                        aria-labelledby="course-pills-tab-4">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <h5>Offers Submitted For Buyer Request</h5>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <!-- Content for Sent Offer tab -->
                                        <?php include('../requests/buyer_offer_sent.php') ?>
                                    </div>


                                </div>
                            </div>
                            <!-- Tab contents END -->

                        </div>
                        <div id="extwaiokist" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297" u="5.418"
                            s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe="
                            vn="9adfy">
                            <div id="extwaigglbit" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297"
                                u="5.418" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e=""
                                a="3" m="BMe="></div>
                        </div>
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <div class="append-modal"></div>
    <div id="quota-finish" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border-radius: 5px !important;">
                <div class="modal-body">
                    <div class="alert alert-light alert-dismissible d-lg-flex justify-content-between align-items-center shadow p-4 "
                        role="alert">
                        <div>
                            <h4 class="text-dark">🥺 Try Again Tomorrow !</h4>
                            <p class="m-0 pe-3">You Have Already Sent 10 Offers Today, <span class="fw-bold"> Quota
                                    Finish</span></p>
                        </div>
                        <div class="d-flex mt-3 mt-lg-0">
                            <!-- <button type="button" class="btn btn-success btn-sm mb-0 me-2" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">Get Admission</span>
                        </button> -->
                            <div class="position-absolute end-0 top-0 mt-n3 me-n3">
                                <button type="button" class="btn btn-danger btn-round btn-sm mb-0"
                                    data-bs-dismiss="modal">
                                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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