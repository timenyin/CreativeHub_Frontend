<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Invert a Friend</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Invert a Friend To CreativeHub">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <?php include('includes/sub_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Banner START -->
        <section class="position-relative overflow-hidden pb-0 pb-sm-5">

            <!-- SVG decoration -->
            <figure class="ms-5 position-absolute top-0 start-0">
                <svg width="29px" height="29px">
                    <path class="fill-orange opacity-4"
                        d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
                    </path>
                </svg>
            </figure>

            <!-- Content START -->
            <div class="container">
                <div class="row align-items-center justify-content-xl-between g-4 g-md-5">
                    <!-- Left content START -->
                    <div
                        class="col-lg-7 col-xl-5 position-relative z-index-1 text-center text-lg-start mb-2 mb-md-9 mb-xl-0">
                        <!-- Badge -->
                        <h6
                            class="mb-3 font-base bg-primary bg-opacity-10 text-primary py-2 px-4 rounded-2 d-inline-block">
                            Priorities First </h6>
                        <!-- Title -->
                        <h1 class="mb-4">Log in to begin recommending friends to
                            <span class="position-relative d-inline-block"> CreativeHub
                                <!-- SVG decoration -->
                                <span
                                    class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                    <svg width="387.7px" height="119.7px">
                                        <path class="fill-warning"
                                            d="M382.7,51.4c-0.2-1-0.4-2-0.7-3c-0.2-0.6-0.5-1.2-0.9-1.7c-0.6-0.9-1.5-1.7-2.9-2.2l0.1-0.1l-0.1,0.1 c0.2-0.9-0.4-1.2-1.2-1.3c-0.1,0-0.2,0-0.4-0.1c-0.2-0.2-0.5-0.5-0.7-0.7c0-0.7-0.1-1.3-0.6-1.7c-0.3-0.2-0.7-0.4-1.3-0.5 c0-0.7-0.2-1.1-0.6-1.4c-0.3-0.2-0.7-0.4-1.2-0.5c-0.2,0-0.3-0.1-0.5-0.1c-1.1-0.9-2.2-1.8-3.4-2.7c0-0.1,0-0.2-0.1-0.3 c-0.1-0.2-0.3-0.4-0.7-0.4c-2.1-1.2-4.2-2.3-6.2-3.5c-14.1-8.5-31.1-10.2-46.8-14.7c-9.6-2.7-19.8-3.4-29.8-4.7 c-13.3-1.8-26.7-1.5-40-2.5c-5.4-0.4-10.8-0.7-16.1-0.7c-2.8,0-5.7-0.6-8.3-0.2c-5.8,0.9-11.6,1.5-17.4,1.8c-2,0.1-3.9,0.2-5.9,0.2 c-0.2,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0.1c-2.1,0-4.3,0.1-6.4,0.2c-2.1,0.1-4.3,0.1-6.4-0.1c-13-0.8-25.3,1.7-37.8,3.5 c-6,0.9-11.9,2.2-17.9,3.5c-6.5,1.4-13.3,1.7-19.8,3.3c-9.6,2.3-19.3,4.4-29.1,6c-9.5,1.6-18.9,3.9-28.2,6.4 c-8.5,2.3-16.2,5.9-23.8,9.7c-4.4,2.2-9,4.1-12.4,7.6c-4.1,4.3-6.6,9.4-10,14.1C1.9,68,2.5,70.8,4.6,74c4.7,7.3,12.9,10.3,21.3,13.4 c4.1,1.5,8.6,2.4,12.5,4.3c5.5,2.6,10.9,5.4,16.7,7.6c12.3,4.6,25.1,8,38.1,10.5c7.1,1.4,14.5,2.1,21.8,2.6 c11.2,0.8,22.5,2.5,33.8,1.9c0.8,0.7,1.5,0.7,2.1-0.1c1.6-0.7,3.4,0.2,5.1-0.1c8.8-1.5,17.8-0.8,26.8-0.6c5,0.1,10.1,0.8,15.1,0.6 c9.4-0.4,18.8-1,28.2-1.9c12.9-1.2,25.7-2.4,38.2-5.3c0.3,0.4,0.5,0.3,0.6-0.1c1.1-0.2,2.3-0.4,3.4-0.6c0.3,0.3,0.5,0.2,0.7-0.1 c1.2-0.3,2.4-0.6,3.7-0.8c7.9-0.8,15.8-1.4,23.6-2.4c4.9-0.6,9.7-1.8,14.5-2.8c0.4,0.2,0.8,0.3,1.1,0.2c0.2,0,0.3-0.1,0.4-0.2 c0.1-0.1,0.1-0.1,0.2-0.2s0.1-0.2,0.2-0.2c0.5-0.1,1-0.3,1.5-0.4c0.1,0,0.2,0.1,0.3,0.1c0.3,0,0.5-0.1,0.6-0.4c0,0,0,0,0,0l0,0 c0,0,0,0,0,0c0.4-0.1,0.8-0.2,1.3-0.3c0,0,0,0,0.1,0c0.2,0,0.3,0,0.5,0c0.4,0,0.7-0.2,0.8-0.7c1.1-0.4,2.2-0.8,3.3-1.3 c0.2,0.1,0.4,0.1,0.6,0c0.1,0,0.2-0.1,0.2-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0-0.1,0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0 c0.6,0.2,1,0.2,1.4,0c0.2-0.1,0.3-0.2,0.5-0.4c0.1-0.2,0.2-0.4,0.3-0.6c1.2-0.5,2.4-1,3.7-1.6c3.7-1.6,7.3-3.3,11.1-4.4 c11.2-3.4,21.5-7.9,30.2-14.9c1.8-0.4,2.9-1.2,3.7-2.4c0.5-0.7,0.8-1.4,1.1-2.2c1.1-0.1,1.7-0.6,2.1-1.1c0.4-0.6,0.6-1.3,0.7-2 c0-0.1,0.1-0.2,0.2-0.3c1.1,0.1,1.4-0.7,1.8-1.3C382.2,61.1,383.8,56.5,382.7,51.4z M9.5,72.3c-0.4-0.9-0.8-2-0.2-2.9 c4.3-6.9,8-14.3,15.9-19c6.6-3.9,13.9-6.9,21.1-10c10.1-4.3,21.1-6,32-8.1c0,0.2,0,0.4,0.1,0.6l0,0c-2.5,0.9-5.1,1.7-7.7,2.6 c-7.7,2.5-15.4,5-22.9,7.9c-10,3.9-18.1,9.9-23.8,17.8c-1.2,1.6-2.5,3.1-3.7,4.6c-5.1,6.3-2.3,11,2.9,16.4c0.3,0.3,0.7,0.7,0.9,1.1 C17.6,81.2,12,78.2,9.5,72.3z M372.5,60.6c-4,6.6-9.6,11.9-16.6,16.1c-4.8,2.9-10.5,5-16.2,6.8c-7.8,2.5-15.1,5.6-22.5,8.6 c-9.3,3.8-19,5.9-29.3,6.8c-14.1,1.2-27.8,3.6-41.6,5.9c-11.4,2-23.2,2.4-34.8,3.6c-13.2,1.4-26.4,0.4-39.6,0.2 c-7.4-0.1-14.8,0.8-22.1,1.2c-6.1,0.4-12.2,0.3-18.3-0.2c-9.2-0.7-18.5-1.3-27.7-2.2c-6.5-0.6-13.1-1.7-19.4-3.4 c-7.5-2-14.9-4-22.4-6c-1.2-0.3-2.3-0.6-3.2-1.3c-0.5-0.2-0.9-0.4-1.5-0.6c0.1,0,0.2-0.1,0.3-0.1c0.7-0.2,1.2,0,1.8,0.2c0,0,0,0,0,0 c8.1,1.1,16.2,2.8,24.4,3.2c1.2,0.1,2.4,0.1,3.5,0.1c1.1,0,3,0.5,3.1-0.6c0.1-1.4-1.8-2-3.3-2c-5,0-9.9-0.5-14.8-1.2 c-10.8-1.6-21.5-3.4-31.6-7.2c-6.9-2.5-12.7-6.4-16.2-12.3c-1.1-1.9-1.2-3.7-0.2-5.7c7.6-14.6,21.3-23.3,38.6-28.9 c15.7-5.1,31.3-10.6,47.6-14.2c11.7-2.6,23.7-4.3,35.3-6.9c20-4.5,40.6-5.7,61.3-6.4c8.5-0.3,16.8-2,25.4-1.3 c19.7,1.6,39.4,2.8,59.1,5.5c10.6,1.5,21.4,2.9,32.1,4c8.4,0.8,16.8,3.3,24.8,6.5c7.4,3,14.1,6.8,20,11.7 C374.7,46.2,376.4,54.2,372.5,60.6z" />
                                    </svg>
                                </span>
                            </span>
                        </h1>
                        <!-- Content -->
                        <p class="mb-3">You may earn up to $500 in creativeHub Credits — up to $100 from each referral —
                            plus
                            they'll receive 10% off their first order.

                        </p>
                        <!-- Button -->
                        <div class="my-4">
                            <a href="sign-in.php" class="btn btn-primary me-2 mb-4 mb-sm-0">Sign Now</a>
                        </div>


                        <!-- Counter START -->
                        <div class="row g-3 mb-3 mb-lg-0">
                            <!-- Item -->
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-lg fs-4 text-orange bg-orange bg-opacity-10 rounded"> <i
                                            class="bi bi-cash-coin"></i></div>
                                    <!-- Info -->
                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <h4 class="purecounter fw-bold mb-0" data-purecounter-start="0"
                                                data-purecounter-end="400" data-purecounter-delay="100">0</h4>
                                            <span class="h4 mb-0">+</span>
                                        </div>
                                        <div>Paid Referrals</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-lg fs-4 text-info bg-info bg-opacity-10 rounded"> <i
                                            class="fas fa-user-tie"></i> </div>
                                    <!-- Info -->
                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <h4 class="purecounter fw-bold mb-0" data-purecounter-start="0"
                                                data-purecounter-end="10" data-purecounter-delay="100">0</h4>
                                            <span class="h4 mb-0">k</span>
                                        </div>
                                        <div>Freelancers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter END -->
                    </div>
                    <!-- Left content END -->

                    <!-- Right content START -->
                    <div class="col-lg-5 col-xl-6 text-center position-relative">
                        <!-- SVG decoration -->
                        <figure
                            class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5 ps-5 d-none d-md-block">
                            <svg width="297.5px" height="295.9px">
                                <path stroke="#F99D2B" fill="none" stroke-width="13"
                                    d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9">
                                </path>
                            </svg>
                        </figure>

                        <!-- Bell icon -->
                        <div
                            class="icon-lg bg-primary text-white rounded-4 shadow position-absolute top-0 start-100 translate-middle z-index-9 ms-n4 d-none d-md-block">
                            <i class="fas fa-bell"></i>
                        </div>

                        <!-- Live class -->
                        <div
                            class="p-3 card card-body shadow rounded-4 position-absolute top-0 start-0 translate-middle ms-5 z-index-1 d-none d-xl-block">
                            <div class="d-flex justify-content-between">
                                <!-- Avatar -->
                                <div class="avatar">
                                    <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/13.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="text-start ms-3">
                                    <h6 class="mb-0">Digital Marketing</h6>
                                    <p class="mb-0 small text-body">Send email invites to friends at creativeHub</p>
                                    <!-- Button -->
                                    <a href="sign-in.php" class="btn btn-sm btn-danger-soft mt-2 mb-0">Join now</a>

                                </div>
                            </div>
                        </div>

                        <!-- Student review -->
                        <div
                            class="position-absolute top-100 start-100 translate-middle z-index-1 ms-n6 mt-n5 d-none d-xxl-block">
                            <div class="card card-body shadow p-4 rounded-3 d-inline-block position-relative z-index-1">
                                <!-- Icon -->
                                <div
                                    class="icon-lg bg-success rounded-circle position-absolute top-100 start-100 translate-middle">
                                    <i class="bi bi-people-fill text-white"></i>
                                </div>
                                <!-- Avatar list -->
                                <ul class="avatar-group mb-2">
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <div class="avatar-img rounded-circle bg-primary">
                                            <span
                                                class="text-white position-absolute top-50 start-50 translate-middle">+</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Title -->
                                <h6 class="mb-1 text-start">10K+ Freelancers</h6>
                                <!-- Review -->
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-1 h6 mb-0">4.5</li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item me-0 small"><i
                                            class="fas fa-star-half-alt text-warning"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class=" position-relative">
                            <!-- Yellow background -->
                            <div class="bg-warning rounded-4 border border-white border-5 h-200px h-sm-300px shadow">
                            </div>
                            <!-- Image -->
                            <img src="assets/images/element/06.png"
                                class="position-absolute bottom-0 start-50 translate-middle-x" alt="">
                        </div>

                    </div>
                    <!-- Right content END -->
                </div>
            </div>
            <!-- Content END -->
        </section>
        <!-- =======================
Main Banner END -->

        <!-- =======================
Course slider START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-light rounded-3 p-4">
                            <!-- Slider START -->
                            <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover py-1">
                                <div class="tiny-slider-inner" data-autoplay="true" data-gutter="80" data-arrow="true"
                                    data-dots="false" data-items="5" data-items-lg="3" data-items-md="2"
                                    data-items-xs="1">

                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/coding.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">Web Dev</span></a>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/music.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">Music</span></a>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/chatbot.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">AI Service</span></a>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/customer-service.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">Consulting</span></a>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/profit.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">Finance</span></a>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div>
                                        <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                            <img src="assets/images/element/online.svg" class="h-40px" alt="">
                                            <a href="#" class="text-primary-hover stretched-link"><span
                                                    class="h6 ms-2">IT & Software</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider END -->
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Course slider END -->

        <!-- =======================
Popular course START -->
        <section class="bg-light position-relative overflow-hidden">
            <!-- SVG decoration -->
            <figure class="position-absolute bottom-0 end-0 mb-n5  figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>
            <!-- SVG decoration -->
            <figure class="position-absolute top-0 start-0 mt-n8 me-5 d-none d-lg-block figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-purple opacity-3"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <div class="container position-relative">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="fs-1 fw-bold">
                            <span class="position-relative z-index-9">FROM ENDORSE TO </span>
                            <span class="position-relative z-index-1">PAYMENT
                                <!-- SVG START -->
                                <span class="position-absolute top-50 start-50 translate-middle z-index-n1">
                                    <svg width="163.9px" height="48.6px">
                                        <path class="fill-warning"
                                            d="M162.5,19.9c-0.1-0.4-0.2-0.8-0.3-1.3c-0.1-0.3-0.2-0.5-0.4-0.7c-0.3-0.4-0.7-0.7-1.2-0.9l0.1,0l-0.1,0 c0.1-0.4-0.2-0.5-0.5-0.6c0,0-0.1,0-0.1,0c-0.1-0.1-0.2-0.2-0.3-0.3c0-0.3,0-0.6-0.2-0.7c-0.1-0.1-0.3-0.2-0.6-0.2 c0-0.3-0.1-0.5-0.3-0.6c-0.1-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.1,0-0.2,0c-0.5-0.4-1-0.8-1.4-1.1c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.3-0.2 c-0.9-0.5-1.8-1-2.6-1.5c-6-3.6-13.2-4.3-19.8-6.2c-4.1-1.2-8.4-1.4-12.6-2c-5.6-0.8-11.3-0.6-16.9-1.1c-2.3-0.2-4.6-0.3-6.8-0.3 c-1.2,0-2.4-0.2-3.5-0.1c-2.4,0.4-4.9,0.6-7.4,0.7c-0.8,0-1.7,0.1-2.5,0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0 c-0.9,0-1.8,0.1-2.7,0.1c-0.9,0-1.8,0-2.7,0c-5.5-0.3-10.7,0.7-16,1.5c-2.5,0.4-5.1,1-7.6,1.5c-2.8,0.6-5.6,0.7-8.4,1.4 c-4.1,1-8.2,1.9-12.3,2.6c-4,0.7-8,1.6-11.9,2.7c-3.6,1-6.9,2.5-10.1,4.1c-1.9,0.9-3.8,1.7-5.2,3.2c-1.7,1.8-2.8,4-4.2,6 c-1,1.3-0.7,2.5,0.2,3.9c2,3.1,5.5,4.4,9,5.7c1.8,0.7,3.6,1,5.3,1.8c2.3,1.1,4.6,2.3,7.1,3.2c5.2,2,10.6,3.4,16.2,4.4 c3,0.6,6.2,0.9,9.2,1.1c4.8,0.3,9.5,1.1,14.3,0.8c0.3,0.3,0.6,0.3,0.9-0.1c0.7-0.3,1.4,0.1,2.1-0.1c3.7-0.6,7.6-0.3,11.3-0.3 c2.1,0,4.3,0.3,6.4,0.2c4-0.2,8-0.4,11.9-0.8c5.4-0.5,10.9-1,16.2-2.2c0.1,0.2,0.2,0.1,0.2,0c0.5-0.1,1-0.2,1.4-0.3 c0.1,0.1,0.2,0.1,0.3,0c0.5-0.1,1-0.3,1.6-0.3c3.3-0.3,6.7-0.6,10-1c2.1-0.3,4.1-0.8,6.2-1.2c0.2,0.1,0.3,0.1,0.4,0.1 c0.1,0,0.1,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0.1-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2 c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3-0.1,0.3-0.3c0.5-0.2,0.9-0.4,1.4-0.5 c0.1,0,0.2,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0.1,0.4,0.1,0.6,0 c0.1,0,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0.5-0.2,1-0.4,1.6-0.7c1.5-0.7,3.1-1.4,4.7-1.9c4.8-1.5,9.1-3.4,12.8-6.3 c0.8-0.2,1.2-0.5,1.6-1c0.2-0.3,0.4-0.6,0.5-0.9c0.5-0.1,0.7-0.2,0.9-0.5c0.2-0.2,0.2-0.5,0.3-0.9c0-0.1,0-0.1,0.1-0.1 c0.5,0,0.6-0.3,0.8-0.5C162.3,24,163,22,162.5,19.9z M4.4,28.7c-0.2-0.4-0.3-0.9-0.1-1.2c1.8-2.9,3.4-6,6.8-8 c2.8-1.7,5.9-2.9,8.9-4.2c4.3-1.8,9-2.5,13.6-3.4c0,0.1,0,0.2,0,0.2l0,0c-1.1,0.4-2.2,0.7-3.2,1.1c-3.3,1.1-6.5,2.1-9.7,3.4 c-4.2,1.6-7.6,4.2-10.1,7.5c-0.5,0.7-1,1.3-1.6,2c-2.2,2.7-1,4.7,1.2,6.9c0.1,0.1,0.3,0.3,0.4,0.5C7.8,32.5,5.5,31.2,4.4,28.7z  M158.2,23.8c-1.7,2.8-4.1,5.1-7,6.8c-2,1.2-4.5,2.1-6.9,2.9c-3.3,1-6.4,2.4-9.5,3.7c-3.9,1.6-8.1,2.5-12.4,2.9 c-6,0.5-11.8,1.5-17.6,2.5c-4.8,0.8-9.8,1-14.7,1.5c-5.6,0.6-11.2,0.2-16.8,0.1c-3.1-0.1-6.3,0.3-9.4,0.5c-2.6,0.2-5.2,0.1-7.8-0.1 c-3.9-0.3-7.8-0.5-11.7-0.9c-2.8-0.3-5.5-0.7-8.2-1.4c-3.2-0.8-6.3-1.7-9.5-2.5c-0.5-0.1-1-0.3-1.4-0.5c-0.2-0.1-0.4-0.1-0.6-0.2 c0,0,0.1,0,0.1,0c0.3-0.1,0.5,0,0.7,0.1c0,0,0,0,0,0c3.4,0.5,6.9,1.2,10.3,1.4c0.5,0,1,0,1.5,0c0.5,0,1.3,0.2,1.3-0.3 c0-0.6-0.7-0.9-1.4-0.9c-2.1,0-4.2-0.2-6.3-0.5c-4.6-0.7-9.1-1.5-13.4-3c-2.9-1.1-5.4-2.7-6.9-5.2c-0.5-0.8-0.5-1.6-0.1-2.4 c3.2-6.2,9-9.8,16.3-12.2c6.7-2.2,13.2-4.5,20.2-6c5-1.1,10-1.8,15-2.9c8.5-1.9,17.2-2.4,26-2.7c3.6-0.1,7.1-0.8,10.8-0.6 c8.4,0.7,16.7,1.2,25,2.3c4.5,0.6,9,1.2,13.6,1.7c3.6,0.4,7.1,1.4,10.5,2.8c3.1,1.3,6,2.9,8.5,5C159.1,17.7,159.8,21.1,158.2,23.8z" />
                                    </svg>
                                </span>
                                <!-- SVG END -->
                            </span>
                        </h2>
                        <p class="mb-0">See what Proposals other students and experts in your domain are learning on.
                        </p>
                    </div>
                </div>

                <!-- Outer tabs START -->
                <ul class="nav nav-pills nav-pill-soft mb-3" id="course-pills-tab" role="tablist">
                    <!-- Tab item -->
                    <li class="nav-item me-2 me-sm-5" role="presentation">
                        <button class="nav-link active" id="course-pills-tab-1" data-bs-toggle="pill"
                            data-bs-target="#course-pills-tab1" type="button" role="tab"
                            aria-controls="course-pills-tab1" aria-selected="true">Invite friends</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item me-2 me-sm-5" role="presentation">
                        <button class="nav-link" id="course-pills-tab-2" data-bs-toggle="pill"
                            data-bs-target="#course-pills-tab2" type="button" role="tab"
                            aria-controls="course-pills-tab2" aria-selected="false">Eligible users</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item me-2 me-sm-5" role="presentation">
                        <button class="nav-link" id="course-pills-tab-3" data-bs-toggle="pill"
                            data-bs-target="#course-pills-tab3" type="button" role="tab"
                            aria-controls="course-pills-tab3" aria-selected="false">Get Credited.</button>
                    </li>
                </ul>
                <!-- Outer tabs END -->

                <!-- Outer tabs contents START -->
                <div class="tab-content mb-0" id="course-pills-tabContent">

                    <!-- Outer content START -->
                    <div class="tab-pane fade show active" id="course-pills-tab1" role="tabpanel"
                        aria-labelledby="course-pills-tab-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="row justify-content-between">

                                    <!-- Left content START -->
                                    <div class="col-lg-6">
                                        <!-- Title -->
                                        <h3>Invite Friends</h3>
                                        <p class="mb-3">Send emails, post on social media, or use your unique referral
                                            link to invite friends to CreativeHub.</p>
                                        <h6 class="my-2">Earn Credits:</h6>
                                        <ul class="list-group list-group-borderless mb-3">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>Receive 10% of
                                                the first qualifying purchase made by your referral as creativeHub
                                                Credits.</li>
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>The credit is
                                                based on the referral's purchase amount, up to a maximum of $100 per
                                                qualifying purchase.</li>
                                        </ul>
                                        <h6 class="my-2"> Potential Earnings:</h6>
                                        <ul class="list-group list-group-borderless mb-3">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>You have the
                                                potential to earn up to $500 in creativeHub Credits overall. </li>
                                        </ul>

                                        <h6 class="my-2">Clearance Period:</h6>
                                        <ul class="list-group list-group-borderless mb-3">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>After the
                                                Referral's first Qualifying Purchase, a clearance period of up to 14
                                                days will occur.</li>

                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i> Referrers can
                                                access creativeHub Credits after this clearance period.</li>
                                        </ul>

                                        <h6 class="my-2">Credit Validity:</h6>
                                        <ul class="list-group list-group-borderless mb-3">
                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i>After the
                                                Referral's first Qualifying Purchase, a clearance period of up to 14
                                                days will occur.</li>

                                            <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                    class="bi bi-patch-check-fill text-success me-2"></i> creativeHub
                                                Credits are valid for three months from the date of issuance.</li>
                                        </ul>
                                    </div>
                                    <!-- Left content END -->

                                    <!-- Right content START -->
                                    <div class="col-lg-6 position-relative">

                                        <!-- SVG decoration -->
                                        <figure
                                            class="position-absolute top-0 start-100 translate-middle z-index-1 mt-5 pt-5 ms-3 d-none d-md-block">
                                            <svg>
                                                <path class="fill-primary"
                                                    d="m105.32 16.607c-3.262 5.822-12.294 0.748-9.037-5.064 3.262-5.821 12.294-0.747 9.037 5.064zm-6.865 21.74c-5.481 9.779-20.654 1.255-15.182-8.509 5.48-9.779 20.653-1.255 15.182 8.509zm-36.466-11.481c6.134-10.943 23.113-1.404 16.99 9.522-6.133 10.943-23.113 1.404-16.99-9.522zm5.08-24.019c3.002-5.355 11.311-0.687 8.314 4.66-3.001 5.355-11.31 0.687-8.314-4.66zm-4.357 58.171c6.507-0.155 10.785 7.113 7.628 12.746-3.156 5.634-11.589 5.779-14.853 0.148-0.108-0.186-0.215-0.371-0.322-0.556-3.091-5.332 0.744-12.175 6.905-12.322 0.214-5e-3 0.428-0.011 0.642-0.016zm-14.997-8.34c-2.57 0.843-5.367 0.264-7.715-0.917-2.262-1.137-4.134-3.706-4.81-6.102-0.706-2.505-0.358-5.443 0.914-7.712 1.344-2.399 3.54-3.965 6.101-4.806 2.571-0.843 5.368-0.263 7.715 0.917 2.262 1.138 4.134 3.706 4.81 6.102 0.706 2.506 0.358 5.444-0.913 7.713-1.345 2.398-3.541 3.965-6.102 4.805zm-4.824-41.632c3.915-6.985 14.753-0.896 10.845 6.078-3.915 6.985-14.753 0.896-10.845-6.078zm-11.502 89.749c-1.138 1.37-3.658 2.357-5.408 2.314-1.387-0.035-2.719-0.374-3.958-0.997-1.529-0.769-2.655-2.243-3.307-3.773-0.615-1.445-0.989-3.345-0.459-4.903 0.039-0.113 0.077-0.227 0.116-0.341 0.929-2.724 2.63-4.878 5.509-5.688 1.943-0.547 4.222-0.276 5.984 0.711 1.861 1.043 3.077 2.746 3.729 4.732 0.922 2.805-0.2 5.531-1.976 7.668-0.077 0.093-0.153 0.185-0.23 0.277zm-7.657-31.402c2.806-5.006 10.573-0.642 7.772 4.356-2.806 5.006-10.573 0.642-7.772-4.356zm-3.281-18.47c3.262-5.821 12.294-0.747 9.037 5.065-3.262 5.821-12.294 0.747-9.037-5.065zm-4.63-25.623c3.849-6.869 14.506-0.881 10.663 5.976-3.849 6.869-14.507 0.882-10.663-5.976zm-0.416 16.398c-3.785 6.753-14.261 0.867-10.483-5.874 3.784-6.753 14.261-0.867 10.483 5.874zm-6.41 13.04c-2.871 5.122-10.819 0.657-7.953-4.457 2.871-5.123 10.819-0.658 7.953 4.457zm3.665 16.114c2.701 1.359 3.576 5.061 2.147 7.612-1.533 2.735-4.903 3.506-7.613 2.143-2.702-1.359-3.577-5.061-2.147-7.612 1.532-2.735 4.903-3.506 7.613-2.143zm6.319 39.375c-2.936 5.239-11.064 0.673-8.133-4.558 2.936-5.239 11.064-0.672 8.133 4.558zm30.789-17.287c-3.98 7.101-14.998 0.911-11.025-6.179 3.98-7.102 14.998-0.912 11.025 6.179zm7.01 23.118c-5.807 10.362-21.883 1.33-16.086-9.015 5.807-10.361 21.884-1.329 16.086 9.015z"
                                                    fill="#f00" fill-rule="evenodd" />
                                            </svg>
                                        </figure>

                                        <!-- Inner tab content START -->
                                        <div class="tab-content mb-0 pb-0" id="course-pills-tabContent1">
                                            <!-- Inner content item START -->
                                            <div class="tab-pane fade show active" id="course-pills-tab01"
                                                role="tabpanel" aria-labelledby="course-pills-tab-01">
                                                <!-- Card START -->
                                                <img src="assets/images/about/search _ people.png" alt="course image">
                                                <!-- Card END -->
                                            </div>
                                            <!-- Inner content item END -->

                                            <!-- Inner content item START -->
                                            <div class="tab-pane fade" id="course-pills-tab02" role="tabpanel"
                                                aria-labelledby="course-pills-tab-02">
                                                <!-- Card START -->
                                                <div class="p-2 pb-0 shadow">
                                                    <div class="overflow-hidden h-xl-200px">
                                                        <img src="assets/images/about/11.jpg" class="card-img-top"
                                                            alt="course image">

                                                    </div>

                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <!-- Price and cart -->
                                                        <div class="row g-3">
                                                            <!-- Item -->
                                                            <div class="col-sm-4 col-lg-6 col-xl-4">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                        class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                            class="bi bi-cart3 fs-5"></i></a>
                                                                    <div>
                                                                        <!-- Badge -->
                                                                        <span class="badge text-bg-info mb-1">6
                                                                            month</span>
                                                                        <h5 class="mb-0">$150</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Item -->
                                                            <div class="col-sm-4 col-lg-6 col-xl-4">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                        class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                            class="bi bi-cart3 fs-5"></i></a>
                                                                    <div>
                                                                        <!-- Badge -->
                                                                        <span class="badge text-bg-info mb-1">12
                                                                            month</span>
                                                                        <h5 class="mb-0">$385</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Item -->
                                                            <div class="col-sm-4 col-lg-6 col-xl-4">
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#"
                                                                        class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                            class="bi bi-cart3 fs-5"></i></a>
                                                                    <div>
                                                                        <!-- Badge -->
                                                                        <span class="badge text-bg-info mb-1">18
                                                                            month</span>
                                                                        <h5 class="mb-0">$800</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card END -->
                                            </div>
                                            <!-- Inner content item END -->

                                            <!-- Inner content item START -->
                                            <div class="tab-pane fade" id="course-pills-tab03" role="tabpanel"
                                                aria-labelledby="course-pills-tab-03">
                                                <!-- Card START -->
                                                <div class="card p-2 shadow">
                                                    <div class="overflow-hidden h-xl-200px">
                                                        <img src="assets/images/about/14.jpg" class="card-img-top"
                                                            alt="course image">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Inner content item END -->
                                        </div>
                                        <!-- Inner tab content END -->

                                    </div>
                                    <!-- Right content END -->
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                    <!-- Outer content END -->

                    <!-- Outer content START -->
                    <div class="tab-pane fade" id="course-pills-tab2" role="tabpanel"
                        aria-labelledby="course-pills-tab-2">
                        <div class="row">
                            <!-- Left content START -->
                            <div class="col-lg-6">
                                <!-- Title -->
                                <h3>Referrers and Users </h3>
                                <p class="mb-3">Your friends will receive 10% off their first order when they sign up
                                    with CreativeHub.</p>
                                <h6 class="my-2">Eligible Users:</h6>
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> The Referral Program
                                        is open to registered creativeHub users only.</li>

                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> creativeHub
                                        Credits are valid for three months from the date of issuance.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Requirements and
                                        incentives are subject to change without prior notice.</li>
                                </ul>

                                <h6 class="my-2">Referrals Made by Several People (Referrers):</h6>
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> Only when your
                                        referral signs up with creativeHub and completes their first qualifying purchase
                                        using your referral link will you receive creativeHub Credits.</li>

                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> You won't get
                                        creativeHub Credits if your Referral joins using a different user's referral
                                        link.</li>

                                </ul>


                                <h6 class="my-2">Accepted as a Referral on CreativeHub:</h6>
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> When your Referrer
                                        completes their first Qualifying Purchase, creativeHub Credits will be added to
                                        their creativeHub balance.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> Notification of the
                                        credit being owed to a Referrer for a Qualifying Purchase will be sent to the
                                        Referrer.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> Your purchase
                                        information will not be given to the Referrer.</li>
                                </ul>


                            </div>



                            <!-- Left content END -->

                            <!-- Right content START -->
                            <div class="col-lg-6 position-relative">

                                <!-- SVG decoration -->
                                <figure
                                    class="position-absolute top-0 start-100 translate-middle z-index-1 mt-5 pt-5 ms-3 d-none d-md-block">
                                    <svg>
                                        <path class="fill-warning"
                                            d="m105.32 16.607c-3.262 5.822-12.294 0.748-9.037-5.064 3.262-5.821 12.294-0.747 9.037 5.064zm-6.865 21.74c-5.481 9.779-20.654 1.255-15.182-8.509 5.48-9.779 20.653-1.255 15.182 8.509zm-36.466-11.481c6.134-10.943 23.113-1.404 16.99 9.522-6.133 10.943-23.113 1.404-16.99-9.522zm5.08-24.019c3.002-5.355 11.311-0.687 8.314 4.66-3.001 5.355-11.31 0.687-8.314-4.66zm-4.357 58.171c6.507-0.155 10.785 7.113 7.628 12.746-3.156 5.634-11.589 5.779-14.853 0.148-0.108-0.186-0.215-0.371-0.322-0.556-3.091-5.332 0.744-12.175 6.905-12.322 0.214-5e-3 0.428-0.011 0.642-0.016zm-14.997-8.34c-2.57 0.843-5.367 0.264-7.715-0.917-2.262-1.137-4.134-3.706-4.81-6.102-0.706-2.505-0.358-5.443 0.914-7.712 1.344-2.399 3.54-3.965 6.101-4.806 2.571-0.843 5.368-0.263 7.715 0.917 2.262 1.138 4.134 3.706 4.81 6.102 0.706 2.506 0.358 5.444-0.913 7.713-1.345 2.398-3.541 3.965-6.102 4.805zm-4.824-41.632c3.915-6.985 14.753-0.896 10.845 6.078-3.915 6.985-14.753 0.896-10.845-6.078zm-11.502 89.749c-1.138 1.37-3.658 2.357-5.408 2.314-1.387-0.035-2.719-0.374-3.958-0.997-1.529-0.769-2.655-2.243-3.307-3.773-0.615-1.445-0.989-3.345-0.459-4.903 0.039-0.113 0.077-0.227 0.116-0.341 0.929-2.724 2.63-4.878 5.509-5.688 1.943-0.547 4.222-0.276 5.984 0.711 1.861 1.043 3.077 2.746 3.729 4.732 0.922 2.805-0.2 5.531-1.976 7.668-0.077 0.093-0.153 0.185-0.23 0.277zm-7.657-31.402c2.806-5.006 10.573-0.642 7.772 4.356-2.806 5.006-10.573 0.642-7.772-4.356zm-3.281-18.47c3.262-5.821 12.294-0.747 9.037 5.065-3.262 5.821-12.294 0.747-9.037-5.065zm-4.63-25.623c3.849-6.869 14.506-0.881 10.663 5.976-3.849 6.869-14.507 0.882-10.663-5.976zm-0.416 16.398c-3.785 6.753-14.261 0.867-10.483-5.874 3.784-6.753 14.261-0.867 10.483 5.874zm-6.41 13.04c-2.871 5.122-10.819 0.657-7.953-4.457 2.871-5.123 10.819-0.658 7.953 4.457zm3.665 16.114c2.701 1.359 3.576 5.061 2.147 7.612-1.533 2.735-4.903 3.506-7.613 2.143-2.702-1.359-3.577-5.061-2.147-7.612 1.532-2.735 4.903-3.506 7.613-2.143zm6.319 39.375c-2.936 5.239-11.064 0.673-8.133-4.558 2.936-5.239 11.064-0.672 8.133 4.558zm30.789-17.287c-3.98 7.101-14.998 0.911-11.025-6.179 3.98-7.102 14.998-0.912 11.025 6.179zm7.01 23.118c-5.807 10.362-21.883 1.33-16.086-9.015 5.807-10.361 21.884-1.329 16.086 9.015z"
                                            fill="#f00" fill-rule="evenodd" />
                                    </svg>
                                </figure>

                                <!-- Inner tab content START -->
                                <div class="tab-content mb-0 pb-0" id="course-pills-tabContent1">
                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade show active" id="course-pills-tab01" role="tabpanel"
                                        aria-labelledby="course-pills-tab-01">
                                        <!-- Card START -->


                                        <img src="assets/images/about/e-commerce _ service.png" alt="course image">

                                        <!-- Card END -->
                                    </div>
                                    <!-- Inner content item END -->

                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade" id="course-pills-tab02" role="tabpanel"
                                        aria-labelledby="course-pills-tab-02">
                                        <!-- Card START -->
                                        <div class="card p-2 pb-0 shadow">
                                            <div class="overflow-hidden h-xl-200px">
                                                <img src="assets/images/about/11.jpg" class="card-img-top"
                                                    alt="course image">
                                                <div class="card-img-overlay d-flex p-3">
                                                    <!-- Video button and link -->
                                                    <div class="m-auto">
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                            class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                            data-glightbox="" data-gallery="course-video">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <!-- Price and cart -->
                                                <div class="row g-3">
                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">6
                                                                    month</span>
                                                                <h5 class="mb-0">$150</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">12
                                                                    month</span>
                                                                <h5 class="mb-0">$385</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">18
                                                                    month</span>
                                                                <h5 class="mb-0">$800</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card END -->
                                    </div>
                                    <!-- Inner content item END -->

                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade" id="course-pills-tab03" role="tabpanel"
                                        aria-labelledby="course-pills-tab-03">
                                        <!-- Card START -->
                                        <div class="card p-2 shadow">
                                            <div class="overflow-hidden h-xl-200px">
                                                <img src="assets/images/about/14.jpg" class="card-img-top"
                                                    alt="course image">
                                                <div class="card-img-overlay d-flex p-3">
                                                    <!-- Video button and link -->
                                                    <div class="m-auto">
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                            class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                            data-glightbox="" data-gallery="course-video">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body px-2">
                                                <p class="mb-0"><span class="h6 mb-0 fw-bold me-1">Note:</span>Before
                                                    you
                                                    learning this video you need to first learn Beginner course
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Inner content item END -->
                                </div>
                                <!-- Inner tab content END -->

                            </div>
                            <!-- Right content END -->
                        </div> <!-- Row END -->
                    </div>
                    <!-- Outer content END -->

                    <!-- Outer content START -->
                    <div class="tab-pane fade" id="course-pills-tab3" role="tabpanel"
                        aria-labelledby="course-pills-tab-3">
                        <div class="row g-4">
                            <!-- Left content START -->
                            <div class="col-lg-6">
                                <!-- Title -->
                                <h3>Credits</h3>
                                <p class="mb-3">Once they complete their order, you’ll get 10% of their purchase in
                                    creativeHub Credits to use on your next order.</p>

                                <h6 class="my-2">How to Get, Get, and Redeem Creativehub Credits:</h6>
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> Up to a maximum of
                                        $100, each referral gets a 10% discount on their first CreativeHub order.</li>

                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i> The discount only
                                        applies to the first milestone for Milestone orders and cannot be combined with
                                        any other offers or coupons.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>A satisfactorily
                                        delivered and finished gig that the Referral paid for with an outside payment
                                        source is referred to as a "qualifying purchase".</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Up to $100 in
                                        creativeHub Credits for each qualifying purchase made by a referral, referrers
                                        will receive 10% of the referral's initial qualifying purchase.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>Referrers may receive a
                                        total of $500 in creativeHub Credits.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>The standard payment
                                        terms of the site apply, and creativeHub Credits can be redeemed on the
                                        Referrer's subsequent order transaction.</li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>After a clearance time
                                        of up to 14 days from the Referral's first Qualifying Purchase, the Referrer can
                                        access their creativeHub Credits.</li>

                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                            class="bi bi-patch-check-fill text-success me-2"></i>CreativeHub Credits are
                                        good for three months after they are issued.</li>
                                </ul>
                            </div>
                            <!-- Left content END -->

                            <!-- Right content START -->
                            <div class="col-lg-6 position-relative">

                                <!-- SVG decoration -->
                                <figure
                                    class="position-absolute top-0 start-100 translate-middle z-index-1 mt-5 pt-5 ms-3 d-none d-md-block">
                                    <svg>
                                        <path class="fill-success"
                                            d="m105.32 16.607c-3.262 5.822-12.294 0.748-9.037-5.064 3.262-5.821 12.294-0.747 9.037 5.064zm-6.865 21.74c-5.481 9.779-20.654 1.255-15.182-8.509 5.48-9.779 20.653-1.255 15.182 8.509zm-36.466-11.481c6.134-10.943 23.113-1.404 16.99 9.522-6.133 10.943-23.113 1.404-16.99-9.522zm5.08-24.019c3.002-5.355 11.311-0.687 8.314 4.66-3.001 5.355-11.31 0.687-8.314-4.66zm-4.357 58.171c6.507-0.155 10.785 7.113 7.628 12.746-3.156 5.634-11.589 5.779-14.853 0.148-0.108-0.186-0.215-0.371-0.322-0.556-3.091-5.332 0.744-12.175 6.905-12.322 0.214-5e-3 0.428-0.011 0.642-0.016zm-14.997-8.34c-2.57 0.843-5.367 0.264-7.715-0.917-2.262-1.137-4.134-3.706-4.81-6.102-0.706-2.505-0.358-5.443 0.914-7.712 1.344-2.399 3.54-3.965 6.101-4.806 2.571-0.843 5.368-0.263 7.715 0.917 2.262 1.138 4.134 3.706 4.81 6.102 0.706 2.506 0.358 5.444-0.913 7.713-1.345 2.398-3.541 3.965-6.102 4.805zm-4.824-41.632c3.915-6.985 14.753-0.896 10.845 6.078-3.915 6.985-14.753 0.896-10.845-6.078zm-11.502 89.749c-1.138 1.37-3.658 2.357-5.408 2.314-1.387-0.035-2.719-0.374-3.958-0.997-1.529-0.769-2.655-2.243-3.307-3.773-0.615-1.445-0.989-3.345-0.459-4.903 0.039-0.113 0.077-0.227 0.116-0.341 0.929-2.724 2.63-4.878 5.509-5.688 1.943-0.547 4.222-0.276 5.984 0.711 1.861 1.043 3.077 2.746 3.729 4.732 0.922 2.805-0.2 5.531-1.976 7.668-0.077 0.093-0.153 0.185-0.23 0.277zm-7.657-31.402c2.806-5.006 10.573-0.642 7.772 4.356-2.806 5.006-10.573 0.642-7.772-4.356zm-3.281-18.47c3.262-5.821 12.294-0.747 9.037 5.065-3.262 5.821-12.294 0.747-9.037-5.065zm-4.63-25.623c3.849-6.869 14.506-0.881 10.663 5.976-3.849 6.869-14.507 0.882-10.663-5.976zm-0.416 16.398c-3.785 6.753-14.261 0.867-10.483-5.874 3.784-6.753 14.261-0.867 10.483 5.874zm-6.41 13.04c-2.871 5.122-10.819 0.657-7.953-4.457 2.871-5.123 10.819-0.658 7.953 4.457zm3.665 16.114c2.701 1.359 3.576 5.061 2.147 7.612-1.533 2.735-4.903 3.506-7.613 2.143-2.702-1.359-3.577-5.061-2.147-7.612 1.532-2.735 4.903-3.506 7.613-2.143zm6.319 39.375c-2.936 5.239-11.064 0.673-8.133-4.558 2.936-5.239 11.064-0.672 8.133 4.558zm30.789-17.287c-3.98 7.101-14.998 0.911-11.025-6.179 3.98-7.102 14.998-0.912 11.025 6.179zm7.01 23.118c-5.807 10.362-21.883 1.33-16.086-9.015 5.807-10.361 21.884-1.329 16.086 9.015z"
                                            fill="#f00" fill-rule="evenodd" />
                                    </svg>
                                </figure>

                                <!-- Inner tab content START -->
                                <div class="tab-content mb-0 pb-0" id="course-pills-tabContent1">
                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade show active" id="course-pills-tab01" role="tabpanel"
                                        aria-labelledby="course-pills-tab-01">
                                        <!-- Card START -->
                                        <img src="assets/images/about/finance _ savings.png" class="card-img-top"
                                            alt="course image">
                                        <!-- Card END -->
                                    </div>
                                    <!-- Inner content item END -->

                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade" id="course-pills-tab02" role="tabpanel"
                                        aria-labelledby="course-pills-tab-02">
                                        <!-- Card START -->
                                        <div class="card p-2 pb-0 shadow">
                                            <div class="overflow-hidden h-xl-200px">
                                                <img src="assets/images/about/11.jpg" class="card-img-top"
                                                    alt="course image">
                                                <div class="card-img-overlay d-flex p-3">
                                                    <!-- Video button and link -->
                                                    <div class="m-auto">
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                            class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                            data-glightbox="" data-gallery="course-video">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <!-- Price and cart -->
                                                <div class="row g-3">
                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">6
                                                                    month</span>
                                                                <h5 class="mb-0">$150</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">12
                                                                    month</span>
                                                                <h5 class="mb-0">$385</h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item -->
                                                    <div class="col-sm-4 col-lg-6 col-xl-4">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="btn btn-orange rounded-2 me-3 mb-0"><i
                                                                    class="bi bi-cart3 fs-5"></i></a>
                                                            <div>
                                                                <!-- Badge -->
                                                                <span class="badge text-bg-info mb-1">18
                                                                    month</span>
                                                                <h5 class="mb-0">$800</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card END -->
                                    </div>
                                    <!-- Inner content item END -->

                                    <!-- Inner content item START -->
                                    <div class="tab-pane fade" id="course-pills-tab03" role="tabpanel"
                                        aria-labelledby="course-pills-tab-03">
                                        <!-- Card START -->
                                        <div class="card p-2 shadow">
                                            <div class="overflow-hidden h-xl-200px">
                                                <img src="assets/images/about/14.jpg" class="card-img-top"
                                                    alt="course image">
                                                <div class="card-img-overlay d-flex p-3">
                                                    <!-- Video button and link -->
                                                    <div class="m-auto">
                                                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                            class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                            data-glightbox="" data-gallery="course-video">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body px-2">
                                                <p class="mb-0"><span class="h6 mb-0 fw-bold me-1">Note:</span>Before
                                                    you
                                                    learning this video you need to first learn Beginner Proposals
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Inner content item END -->
                                </div>
                                <!-- Inner tab content END -->

                            </div>
                            <!-- Right content END -->
                        </div>
                    </div>
                    <!-- Outer content END -->



                    <!-- Outer content START -->
                    <div class="tab-pane fade" id="course-pills-tab5" role="tabpanel"
                        aria-labelledby="course-pills-tab-5">
                        <div class="row g-4">
                            <!-- Left content START -->
                            <div class="col-lg-6">
                                <!-- Title -->
                                <h3>Finance</h3>
                                <p class="mb-3">Handsome met debating sir dwelling age material. As style lived he worse
                                    dried. Offered related so visitors we private removed.</p>

                                <!-- Rating -->
                                <div class="d-flex align-items-center mb-3">
                                    <h2 class="me-3 mb-0">4.0</h2>
                                    <div>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                        </ul>
                                        <p class="mb-0">Review from our students </p>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-success">Free trial</a>
                                    <a href="#" class="btn btn-danger">Buy Proposals projects</a>
                                </div>

                            </div>
                            <!-- Left content END -->

                            <!-- Right content START -->
                            <div class="col-lg-6">
                                <!-- Card START -->
                                <div class="card p-2 shadow">
                                    <div class="overflow-hidden rounded-3 h-xl-200px">
                                        <img src="assets/images/about/11.jpg" class="card-img rounded-3"
                                            alt="course image">
                                        <div class="card-img-overlay d-flex p-3">
                                            <!-- Video button and link -->
                                            <div class="m-auto">
                                                <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                    class="btn btn-lg text-danger btn-round btn-white-shadow mb-0"
                                                    data-glightbox="" data-gallery="course-video">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card END -->
                            </div>
                            <!-- Right content END -->
                        </div>
                    </div>
                    <!-- Outer content END -->
                </div>
                <!-- Outer tabs contents END -->

            </div>
        </section>
        <!-- =======================
Popular course END -->



        <!-- =======================
Action box START -->
        <section class="py-0 pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative z-index-1">
                        <!-- Image -->
                        <div class="d-none d-lg-block position-absolute bottom-0 start-0 ms-3 ms-xl-5">
                            <img src="assets/images/element/01.png" alt="">
                        </div>
                        <!-- Pencil and cap SVG -->
                        <div class="position-absolute top-0 end-0 mt-n4 me-5">
                            <img src="assets/images/client/pencil.svg" alt="">
                        </div>
                        <div class="position-absolute bottom-0 start-50 mb-n4">
                            <img src="assets/images/client/graduated.svg" class="rotate-74" alt="">
                        </div>

                        <div class="bg-grad-pink p-4 p-sm-5 rounded position-relative z-index-n1 overflow-hidden">
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 start-0 mt-3 ms-n3 opacity-5 ">
                                <svg width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
                                    <path class="fill-white"
                                        d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z">
                                    </path>
                                </svg>
                            </figure>
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-50 start-0 translate-middle-y ms-5">
                                <svg width="473px" height="234px">
                                    <path fill-rule="evenodd" opacity="0.051" fill="rgb(255, 255, 255)"
                                        d="M0.004,222.303 L364.497,-0.004 L472.998,32.563 L100.551,233.991 L0.004,222.303 Z" />
                                </svg>
                            </figure>
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-50 end-0 translate-middle-y">
                                <svg width="355.6px" height="396.1px">
                                    <path class="fill-danger rotate-10"
                                        d="M32.8,364.1c16.1-14.7,36-21.5,56.8-26.7c20-5.1,40.5-9.7,57.8-21.4c35.7-24.3,51.1-68.5,57.2-109.4 c6.8-45.7,4.6-93.7,21.6-137.5c8.3-21.4,22.3-41.4,43.3-51.9c17.4-8.7,36.2-7.9,54.2-1.5c10.2,3.6,19.8,8.5,29.4,13.5l2.5-4.3 c-2.7-1.4-5.4-2.8-8.2-4.2c-15.8-8-32.9-15.3-50.9-15.2C276,5.6,256.9,16,243.3,31c-16.6,18.3-25.3,42.2-30.5,66 c-5,22.9-6.8,46.3-8.8,69.6c-3.9,44.4-9.7,92.8-40.1,128c-7.1,8.2-15.4,15.4-24.9,20.8c-9.3,5.4-19.5,8.9-29.8,11.8 c-20.2,5.7-41.3,9.1-59.9,19.2c-19.3,10.4-35.1,27.2-44.2,47.1c0,0,0,0.1,0,0.1l4.4,2.6C15,384,22.9,373.1,32.8,364.1z" />
                                </svg>
                            </figure>

                            <div class="row g-3 align-items-center justify-content-lg-end position-relative py-4">
                                <!-- Title -->
                                <div class="col-md-6">
                                    <h2 class="text-white">Become an Seller</h2>
                                    <p class="text-white mb-0">Take advantage of this complimentary Learn from
                                        CreativeHub documentation to find out what it takes to be a top-notch seller on
                                        creativeHub.</p>
                                </div>
                                <!-- Button -->
                                <div class="col-md-6 col-lg-3 text-md-end">
                                    <a href="become-seller.php" class="btn btn-white mb-0">Get Started Now!</a>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Action box END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <!-- <?php include('includes/footer.php') ?> -->
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>