<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Get certificate</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Get Certification on creativeHub">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

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
        <section class="position-relative pt-5">

            <!-- SVG decoration -->
            <figure class="position-absolute bottom-0 start-0 d-none d-lg-block figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning opacity-5"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
                </svg>
            </figure>

            <figure class="position-absolute top-0 end-0 figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-success opacity-5"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
                </svg>
            </figure>

            <!-- Content START -->
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Left content START -->
                    <div class="col-lg-6 position-relative z-index-9">
                        <h6 class="mb-3 font-base"><i class="bi bi-pin-map-fill me-2"></i>St Joseph, Eugene, Oregon, USA
                        </h6>
                        <h1 class="">For your business apps, work with <span class="bg-purple px-1">certified</span>
                            professionals</h1>
                        <p class="lead mb-4">Get help for any app quickly and easily by finding an expert, whether
                            you're looking for general support or specific abilities.</p>

                        <!-- Testimonials START -->
                        <div class="row my-3">
                            <!-- Slider START -->
                            <div class="tiny-slider arrow-round arrow-dark arrow-hover arrow-xs">
                                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
                                    data-dots="false" data-items="1">
                                    <!-- Testimonial item -->
                                    <div>
                                        <div class="d-md-flex my-2">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div class="flex-grow-1 mt-2 mt-md-0">
                                                <p class="mb-2">"The expert is without a doubt a SEO Pro - he quickly
                                                    understood my problems with Google Search Console and helped me to
                                                    resolve them. Thanks a lot! </p>
                                                <h6 class="me-3 mb-0">Michael Vale &nbsp;<span
                                                        class="small mb-0 text-body"> (Professional Media ) </span></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial item -->
                                    <div>
                                        <div class="d-md-flex my-2">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div class="flex-grow-1 mt-2 mt-md-0">
                                                <p class="mb-2">"Working with the expert was great. He is very
                                                    professional, responsive and provides clear communication by showing
                                                    you examples and sending you videos that identify clearly what needs
                                                    to be done. Would work with him again." </p>
                                                <h6 class="me-3 mb-0">Dennis Barrett <span
                                                        class="small mb-0 text-body">(Communications Manager)</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider END -->
                        </div>

                        <!-- Testimonials END -->
                        <!-- Button -->
                        <a href="#App" class="btn btn-purple">Browser App</a>
                    </div>
                    <!-- Left content END -->

                    <!-- Right content START -->
                    <div class="col-lg-6 position-relative mt-5 mt-lg-0">

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 ms-n3 mt-n3 z-index-9">
                            <svg enable-background="new 0 0 108 129.3">
                                <path class="fill-blue"
                                    d="m50.4 14.9c0.2-3.3 2.4-5 5.6-4.1 1.3 0.4 2.1 1.2 2.5 2.5 0.4 1.5 0.3 3-0.4 4.4-0.8 1.4-1.9 2.3-3.6 2.3-1.6 0-2.8-1-3.4-2.5-0.3-0.6-0.4-1.3-0.6-1.9 0-0.2 0-0.4-0.1-0.7zm-31.6 82v-0.5c0.3-0.7 0.3-1.5 0.3-2.3 0-1 0.9-1.8 1.9-1.8 0.5 0 1 0.1 1.3 0.3 1.3 0.6 2.6 1.4 3.6 2.6 2 2.2 1.1 5.9-1.7 6.9-1.5 0.6-3 0.2-4.1-1-0.7-1.1-1.3-2.7-1.3-4.2zm17.1 21.8c-0.7 0.7-0.9 1.5-0.9 2.1 0 2.3 1 4.1 2.6 5 1.9 1.1 4 0.5 5.1-1.4 1.5-2.8-0.3-6.6-3.3-7.2-1.2-0.3-2.2 0-2.9 1-0.3 0.1-0.5 0.3-0.6 0.5zm60.7-30.4c0 0.2-0.1 0.4-0.1 0.6-0.1 0.4-0.1 0.8-0.3 1.2-0.9 2.5-3.8 3.1-5.7 1.2-1-0.9-1.3-2.1-1.5-3.4 0-0.4-0.1-0.8-0.3-1.2-0.6-1.5 0-2.8 1.6-3.3 1.9-0.7 4.5 0.3 5.5 2.1 0.5 0.7 0.7 1.7 0.8 2.8zm-85-53.3v0.3c0 1.8 0.3 3 1.2 4 0.9 1.1 2.1 1.6 3.6 1.3 1.4-0.3 2.3-1.2 2.8-2.6 0.8-2.5-0.5-5.4-3.1-6-0.1 0-0.2-0.1-0.3-0.1-0.2 0-0.3-0.1-0.5-0.2-1.2-0.5-2.6 0-3.2 1.5-0.2 0.7-0.4 1.3-0.5 1.8zm71.8 72.1c0 1.7-0.9 3.1-2.3 3.5-1.3 0.5-2.6 0-3.6-1.1-1.1-1.3-1.6-2.9-1.5-4.6 0-1.2 0.7-2.2 1.4-3.1 0.5-0.6 1.2-0.8 1.9-0.6 0.4 0.1 0.8 0.3 1.2 0.5 1.5 1 2.9 3.6 2.9 5.4zm-71.5-42v0.4c0 1.9 0.6 3.6 2.3 4.7 1.1 0.8 2.3 0.9 3.6 0.3 1.2-0.6 1.8-1.7 1.8-3 0.1-2.2-1-3.9-2.9-5-0.2-0.1-0.3-0.2-0.5-0.3-2.1-0.7-4.1 0.7-4.3 2.9zm55.9 43.5c0.1 0.1 0.1 0.3 0.2 0.5s0.2 0.5 0.3 0.7c0.6 1 1 1.9 1.1 3.1 0 1.3-0.4 2.2-1.6 2.8-1.1 0.6-2.2 0.4-3.2-0.4-1.1-0.8-1.7-2.1-1.9-3.4l-0.3-1.8c0-0.3-0.1-0.6-0.1-0.9-0.1-0.6 0-1.2 0.5-1.6l0.1-0.1c0.7-0.5 1.5-1.1 2.3-1.3 1.5-0.5 3 0.8 2.6 2.4zm-0.8-28.1c-1.1 1.3-1.8 2.7-1.8 4.1 0 1.5 0.2 2.4 0.6 3.1 0.7 1.1 1.8 1.7 3.1 1.5 1.5-0.2 2.9-1.5 3.2-3 0.3-1.7-0.1-3.3-1.1-4.7-0.1-0.2-0.2-0.3-0.4-0.5-0.1-0.2-0.2-0.3-0.4-0.5-0.8-1-2.2-1.1-3.2 0zm-27.5 21.6c2.7-0.5 4.9 2.7 4.3 5.4-0.5 2.1-2.7 3.2-4.7 2.3s-3.3-3.6-2.7-5.7c0.3-1.2 1.3-2.3 3.1-2zm56.5-36.5c-0.7 1.1-1.1 2.4-1 3.7 0 1 0.2 1.9 0.7 2.8 0.8 1.3 2 1.9 3.3 1.7s2.3-1.2 2.5-2.6c0.4-2.3-0.5-4.3-2-6-1-1.2-2.6-0.9-3.5 0.4zm-64.7 14.5c0.1 0.2 0.2 0.5 0.3 0.7 0.6 1.1 0.9 2.2 0.7 3.5-0.2 1.1-0.8 1.9-1.8 2.3-1.1 0.4-2.1 0-2.9-0.8-0.7-0.8-1.1-1.8-1.3-2.8-0.1-0.5-0.3-1-0.5-1.5-0.5-1.2-0.3-2.3 0.8-3 0.2-0.1 0.4-0.3 0.6-0.4s0.4-0.3 0.6-0.4c0.8-0.5 1.6-0.6 2.5-0.1 0.8 0.5 1.1 1.2 1 2.1-0.1 0.1 0 0.3 0 0.4zm46.9-60.6c1.1-0.6 1.6-1.6 1.6-2.7 0-1.8-1.2-3.9-2.8-5.2-1.7-1.3-3.8-0.5-4 1.7-0.1 1-0.1 2 0.1 3 0.2 1.2 0.8 2.3 1.9 3 1 0.7 2.1 0.8 3.2 0.2zm-28.5 68.8v-1-1.9c0.1-1.3 1.3-2.1 2.6-1.7 0.5 0.2 1 0.5 1.5 0.8 1 0.9 1.6 1.9 2.1 3.1 0.4 0.9 0.5 1.9 0.1 2.8-0.4 1.2-1.3 2-2.5 2.2-1.3 0.2-2.3-0.3-3.1-1.3-0.6-0.8-0.8-1.9-0.7-3zm40-49.3c1.6-0.6 2.6-2.2 2.6-4 0-1.7-0.9-3.1-2.3-3.6-1.5-0.5-3.1 0-4.1 1.3-1.1 1.4-1.1 4.1 0.1 5.4 0.8 1.1 2.3 1.4 3.7 0.9zm-40.7 11.2c0 0.7-0.2 1.5-0.6 2.1-1.2 1.8-3.6 2-4.9 0.3-1-1.2-1.3-2.7-1.3-4.2 0-0.3 0.1-0.7 0.1-1 0-0.1 0-0.2 0.1-0.3 0.4-1.8 1.9-2.5 3.6-1.7 1.7 0.7 3 2.8 3 4.8zm16.5-15.8c0-0.1 0.1-0.3 0.1-0.4-0.1-1.2-0.6-2.1-1.6-2.9 0-0.1-0.1-0.1-0.2-0.2-0.2-0.2-0.5-0.4-0.6-0.7-0.7-1.3-2.7-1.5-3.9 0-1.3 1.7-1.3 4.3 0 6 1.6 2.1 4.4 1.9 5.7-0.3 0.2-0.4 0.3-1 0.5-1.5zm22.7 21.2c0 1.5-0.7 2.8-2.1 3.7-1.8 1.2-4.1 0.5-4.9-1.6-0.9-2.5 0-4.9 3-5.8 1.1-0.4 2.2 0 3 0.9 0.7 0.8 1 1.7 1 2.8zm-20.1 4.4c0.1-0.2 0.1-0.5 0.2-0.7-0.1-2.3-2.6-4.8-4.8-4.8-1.4 0-2.5 1-2.4 2.3 0 0.8 0.1 1.6 0.3 2.4 0.3 1.3 0.8 2.3 1.9 3.1 1.6 1 3.5 0.6 4.4-1.1 0.2-0.4 0.3-0.8 0.4-1.2zm-22.7-32.2c0 1.4-0.7 2.6-1.9 3.1s-2.5 0.1-3.4-0.9c-1.3-1.5-1.6-3.2-1.3-5.1 0.2-0.7 0.5-1.3 1.1-1.8 1.2-0.9 2.7-0.6 3.5 0.6 0.3 0.4 0.5 0.8 0.8 1.1 0.8 1 1.2 1.9 1.2 3zm-20.9 16.4c0 0.2-0.1 0.3-0.1 0.4 0.1 1.8 0.5 3.1 1.6 4 1.6 1.4 3.9 0.9 4.7-1.1 0.5-1.3 0.3-2.5-0.5-3.6-0.3-0.5-0.6-0.9-0.7-1.4-0.3-1.2-1.5-1.8-2.7-1.5-0.8 0.2-1.4 0.8-1.8 1.5-0.2 0.7-0.4 1.3-0.5 1.7zm25.7 22.1c0 0.8-0.2 1.6-0.8 2.3-1.2 1.5-3.3 1.6-4.7 0.3-1.3-1.3-1.7-3.6-0.9-5.3 0.5-1.1 1.5-1.6 2.7-1.4h0.1 0.1c2.4 0.4 3.5 1.7 3.5 4.1zm25.4 4.6v2.6c0 0.8 0.3 1.8 1.1 2.7 1.4 1.4 3.6 1 4.3-0.8 0.8-1.9-0.7-5.6-2.6-6.4-1.4-0.6-2.8 0.4-2.8 1.9z" />
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 mt-n6 ms-n5">
                            <svg width="211px" height="211px">
                                <path class="fill-danger opacity-2"
                                    d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 mb-n5 z-index-9">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="129px" height="133px">
                                <path class="fill-danger"
                                    d="M127.581,25.993 C122.659,31.935 113.441,24.283 118.356,18.351 C123.278,12.408 132.496,20.060 127.581,25.993 ZM115.247,49.292 C106.977,59.275 91.492,46.420 99.748,36.454 C108.018,26.470 123.503,39.325 115.247,49.292 ZM86.935,2.378 C91.464,-3.089 99.944,3.951 95.423,9.409 C90.894,14.876 82.414,7.836 86.935,2.378 ZM93.501,43.010 C84.246,54.182 66.918,39.796 76.157,28.643 C85.411,17.471 102.740,31.856 93.501,43.010 ZM57.726,6.672 C63.633,-0.460 74.694,8.723 68.796,15.842 C62.889,22.973 51.828,13.791 57.726,6.672 ZM65.132,42.254 C65.414,45.250 64.407,48.520 62.488,50.836 C60.459,53.285 57.635,54.609 54.547,55.032 C51.448,55.456 48.387,54.215 45.962,52.383 C43.626,50.618 42.031,47.307 41.761,44.441 C41.479,41.444 42.486,38.175 44.406,35.858 C46.434,33.410 49.258,32.085 52.346,31.662 C55.446,31.238 58.507,32.479 60.931,34.312 C63.267,36.076 64.862,39.387 65.132,42.254 ZM48.502,101.257 C42.496,108.507 31.251,99.172 37.247,91.934 C43.252,84.684 54.497,94.019 48.502,101.257 ZM23.966,17.251 C29.774,10.238 40.651,19.267 34.852,26.269 C29.043,33.281 18.167,24.251 23.966,17.251 ZM9.378,26.952 C15.088,20.059 25.780,28.935 20.079,35.817 C14.369,42.711 3.677,33.835 9.378,26.952 ZM10.074,49.315 C5.742,54.545 -2.369,47.811 1.955,42.590 C6.287,37.361 14.399,44.094 10.074,49.315 ZM10.889,68.408 C13.679,70.517 13.903,74.910 11.746,77.514 C9.434,80.305 5.439,80.481 2.640,78.366 C-0.150,76.258 -0.375,71.865 1.783,69.260 C4.095,66.469 8.090,66.293 10.889,68.408 ZM9.881,114.513 C5.450,119.861 -2.845,112.974 1.578,107.635 C6.008,102.287 14.304,109.173 9.881,114.513 ZM12.758,94.899 C14.381,91.994 16.764,89.898 20.208,89.575 C22.532,89.358 25.068,90.140 26.866,91.630 C28.766,93.203 29.795,95.394 30.124,97.789 C30.589,101.171 28.744,104.038 26.279,106.100 C26.173,106.189 26.066,106.278 25.960,106.367 C24.381,107.689 21.309,108.287 19.326,107.873 C17.757,107.545 16.312,106.882 15.033,105.915 C13.453,104.722 12.479,102.811 12.056,100.935 C11.657,99.164 11.627,96.924 12.555,95.263 C12.622,95.142 12.690,95.021 12.758,94.899 ZM23.787,69.054 C28.020,63.943 35.947,70.523 31.721,75.626 C27.487,80.736 19.560,74.156 23.787,69.054 ZM23.899,47.361 C28.822,41.418 38.039,49.070 33.125,55.003 C28.202,60.945 18.985,53.293 23.899,47.361 ZM51.663,129.014 C42.901,139.591 26.494,125.972 35.242,115.411 C44.004,104.833 60.411,118.454 51.663,129.014 ZM69.137,67.525 C69.381,67.564 69.626,67.602 69.871,67.641 C77.305,68.819 80.658,77.977 75.894,83.728 C71.131,89.478 61.508,87.888 58.968,80.803 C58.884,80.570 58.800,80.337 58.717,80.104 C56.311,73.396 62.098,66.410 69.137,67.525 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- Social media button -->
                        <div
                            class="position-absolute top-0 start-50 translate-middle-x ms-n7 mt-n4 me-n3 z-index-9 d-none d-sm-block">
                            <div
                                class="px-4 py-3 bg-white bg-opacity-10 bg-blur border border-light shadow-lg rounded-4">
                                <h6>See Top Company's expertise:</h6>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"> <a
                                            class="btn btn-round btn-sm bg-facebook btn_customize" href="#"><i
                                                class="fa-brands fa-amazon fa-lg"></i></a> </li>
                                    <li class="list-inline-item"> <a
                                            class="btn btn-round btn-sm bg-facebook btn_customize" href="#"><i
                                                class="fa-brands fa-adversal"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-round btn-sm bg-twitter" href="#"><i
                                                class="fa-brands fa-aws fa-lg"></i></a></li>
                                    <li class="list-inline-item"> <a class="btn btn-round btn-sm bg-linkedin"
                                            href="#"><i class="fa-brands fa-cc-stripe"></i></a> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Award message -->
                        <div class="position-absolute bottom-0 start-0 mb-0 mb-sm-4 ms-3 ms-sm-5 z-index-9">
                            <div class="d-flex align-items-center p-2 p-sm-3 bg-white shadow rounded-4">
                                <div class="icon-lg bg-white rounded-circle shadow">
                                    <img src="assets/images/element/17.svg" class="h-30px" alt="">
                                </div>
                                <div class="ms-2">
                                    <h6 class="mb-0 text-dark">Get our Work Done By Top Certified Company's </h6>
                                    <span class="small">Over 20+ of them</span>
                                </div>
                            </div>
                        </div>

                        <!-- Image -->
                        <img src="assets/images/about/certificateProfile.svg"
                            class="rounded-3 z-index-1 position-relative" alt="Tutor image">
                    </div>
                    <!-- Right content END -->
                </div>
            </div>
            <!-- Content END -->
        </section>
        <!-- =======================
Main Banner END -->

        <!-- =======================
Services START -->
        <section id="App" class="pt-4 pt-lg-5">
            <div class="container">

                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2>Locate conversant app support</h2>
                        <p class="mb-0">Get help for any app quickly and easily by finding an expert, whether you're
                            looking for general support or specific skills.</p>
                    </div>
                </div>

                <!-- Category START 1 -->
                <div class="row g-4 my-5">
                    <h1 class="text_pro-subheader">E-Commerce & Payment</h1>
                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/paypal.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Paypal</a></h5>
                                    <p class="mb-0 small">Process payments of online businesses.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Payment method</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Integrate payment</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/stripe.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Stripe</a></h5>
                                    <p class="mb-0 small">Process payments of online businesses.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Payment method</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Integrate payment</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Woo.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Woo</a></h5>
                                    <p class="mb-0 small">Turn your Wordpress website into an e-commerce shop</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>WorldPress</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Integrate payment</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/google-pay.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Google Pay</a></h5>
                                    <p class="mb-0 small">Full process payments of online businesses.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Payment method</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Integrate payment</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Category END 1-->


                <!-- ======================================= -->
                <!-- Category START 2 -->
                <div class="row g-4 my-5">
                    <h1 class="text_pro-subheader">Marketing & Advertising</h1>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Stripo.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Stripo</a></h5>
                                    <p class="mb-0 small">Design emails with easy to use templates.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Template design</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Marketing campaigns</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/amazon.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Amazon Ads</a></h5>
                                    <p class="mb-0 small">Global e-commerce platform and marketplace</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Video ads</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Amazon store</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/clover.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Clover</a></h5>
                                    <p class="mb-0 small">The Ultimate Playbook for Growing Businesses</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Advice and resources, </li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>podcasts and newsletters</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Elavon.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Elavon</a></h5>
                                    <p class="mb-0 small">The Ultimate Playbook for Growing Businesses</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Advice and resources</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>podcasts and newsletters</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/gravity.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Gravity-Payments</a></h5>
                                    <p class="mb-0 small">Optimize social media content with advanced AI solutions.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Video creation</li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Content creation</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Helcim.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Helcim</a></h5>
                                    <p class="mb-0 small">Marketing Automation Helps Scale Interactions Seamlessly.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Platform setup </li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>podcasts and newsletters</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Category END  2-->

                <!-- ======================================== -->

                <!-- Category START 3 -->
                <div class="row g-4 my-5">
                    <h1 class="text_pro-subheader">Social Media Marketing</h1>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Predis.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Predis</a></h5>
                                    <p class="mb-0 small">Marketing Automation Helps Scale Interactions Seamlessly.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Platform setup </li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>podcasts and newsletters</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card card-body shadow h-100">
                            <!-- Title and image -->
                            <div class="d-flex align-items-center">
                                <img src="assets/images/element/Uizard.svg" class="h-60px mb-2" alt="">
                                <div class="ms-3">
                                    <h5 class="mb-0"><a href="#">Helcim</a></h5>
                                    <p class="mb-0 small">Generate high-performing ad creatives with AI.</p>
                                </div>
                            </div>
                            <!-- List -->
                            <ul class="list-group list-group-borderless small mt-2">
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Social media ads </li>
                                <li class="list-group-item text-body pb-0"> <i
                                        class="bi bi-patch-check-fill text-success"></i>Search ads</li>
                                <li class="list-group-item text-body pb-0"><a href="#"
                                        class="text-pro_underline text-purple">Hire an expert </a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <!-- Category END 3 -->

            </div>
        </section>
        <!-- =======================
Services END -->


        <!-- =======================
Action box START -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <!-- Action box item -->
                    <div class="col-lg-6 position-relative overflow-hidden">
                        <div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
                            <!-- Image -->
                            <div class="position-absolute bottom-0 end-0 me-3">
                                <img src="assets/images/element/08.svg" class="h-100px h-sm-200px" alt="">
                            </div>
                            <!-- Content -->
                            <div class="row">
                                <div class="col-sm-8 position-relative">
                                    <h4 class="mb-1">Earn a <span class="bg-info px-2">pro</span></h3>
                                        <p class="mb-3 h5 fw-light lead">Ideal for:Companies looking to augment internal
                                            resources with outstanding independent skills</p>
                                        <a href="creativehub-pro.php" class="btn btn-info mb-0">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action box item -->
                    <div class="col-lg-6 position-relative overflow-hidden">
                        <div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
                            <!-- Image -->
                            <div class="position-absolute bottom-0 end-0 me-3">
                                <img src="assets/images/element/15.svg" class="h-100px h-sm-200px" alt="">
                            </div>
                            <!-- Content -->
                            <div class="row">
                                <div class="col-sm-8 position-relative">
                                    <h4 class="mb-1">CreativeHub <span class="bg-warning px-2">Partnership </span> </h4>
                                    <p class="mb-3 h5 fw-light lead">Embark on a connection that is ideal for you and
                                        the top freelance marketplace for digital services worldwide.</p>
                                    <a href="partnerships.php" class="btn btn-warning mb-0">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Action box END -->


        <!-- =======================
Action box START -->
        <section>
            <div class="container">
                <!-- University -->
                <div class="row g-4 mt-4">

                    <h5>Recognize you're in capable hands</h5>
                    <p>Count on certified professionals to meet your project needs with quality and dependability for
                        every business tool.</p>

                    <div class="col-md-6 col-xl-4">
                        <!-- Card START -->
                        <div class="card card-body shadow p-4 align-items-start">
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="assets/images/element/certified_small.svg"
                                alt="university logo">

                            <!-- Title -->
                            <h5 class="card-title mt-3 mb-0">Certified experts</h5>
                            <span>Select from hundreds of elite experts who have all been thoroughly screened and
                                approved by our partners.</span>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Card START -->
                        <div class="card card-body shadow p-4 align-items-start">
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="assets/images/element/key-performance-indicator.svg"
                                alt="university logo">

                            <!-- Title -->
                            <h5 class="card-title mt-3 mb-0">Speedy results</h5>
                            <span>To ensure that your needs are satisfied promptly, locate professionals with
                                competitive delivery times and work with them easily.</span>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Card START -->
                        <div class="card card-body shadow p-4 align-items-start">
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="assets/images/element/partnership.svg"
                                alt="university logo">

                            <!-- Title -->
                            <h5 class="card-title mt-3 mb-0">Trusted partnership</h5>
                            <span>From the moment we communicate with you until your project is delivered, you are
                                secure because we work with reliable, certified apps.</span>
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <!-- Card START -->
                        <div class="card card-body shadow p-4 align-items-start">
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="assets/images/element/price-tag.svg"
                                alt="university logo">

                            <!-- Title -->
                            <h5 class="card-title mt-3 mb-0">Competitive pricing</h5>
                            <span>Choose a price with transparent milestones or subscription rates that suits your
                                budget.</span>
                        </div>
                        <!-- Card END -->
                    </div>
                </div>

            </div>
        </section>
        <!-- =======================
Action box END -->


        <!-- =======================
Testimonials START -->
        <section class="pt-0">
            <div class="container">
                <div class="bg-light p-4 rounded-3">
                    <!-- Title -->
                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <h2>Collaborate with the top-tier talent</h2>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                            <div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true" data-edge="2"
                                data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">
                                <!-- Slide item -->
                                <div>
                                    <div class="card card-body h-100">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <!-- Avatar -->
                                            <div class="d-flex align-items-center mb-1 mb-sm-0">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/03.jpg" alt="avatar">
                                                </div>
                                                <!-- Info -->
                                                <div class="ms-2">
                                                    <h6 class="mb-0">Eline Vera</h6>
                                                </div>
                                            </div>

                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                        </div>

                                        <!-- Content -->
                                        <h6 class="fw-normal mb-0">"A creator's dream, CreativeHub's
                                            influencer program. We'll never run out of video ideas because
                                            the platform provides a collection of services that can be
                                            highlighted in video integrations."</h6>
                                        <small class="text-purple">content creator/vocalist</small>
                                    </div>
                                </div>

                                <!-- Slide item -->
                                <div>
                                    <div class="card card-body h-100">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <!-- Avatar -->
                                            <div class="d-flex align-items-center mb-1 mb-sm-0">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/02.jpg" alt="avatar">
                                                </div>
                                                <!-- Info -->
                                                <div class="ms-2">
                                                    <h6 class="mb-0">Steve Wright</h6>
                                                </div>
                                            </div>

                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                        </div>

                                        <!-- Content -->
                                        <h6 class="fw-normal mb-0">"As an artist, partnering with
                                            CreativeHub is revolutionary! They believe in your original
                                            ideas and have access to a vast network of skilled independent
                                            contractors to assist with your projects worldwide.
                                            "
                                        </h6>
                                        <small class="text-purple">content
                                            creator/Videographer</small>
                                    </div>
                                </div>

                                <!-- Slide item -->
                                <div>
                                    <div class="card card-body h-100">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <!-- Avatar -->
                                            <div class="d-flex align-items-center mb-1 mb-sm-0">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/05.jpg" alt="avatar">
                                                </div>
                                                <!-- Info -->
                                                <div class="ms-2">
                                                    <h6 class="mb-0">Lori Stevens</h6>
                                                </div>
                                            </div>

                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                        </div>

                                        <!-- Content -->
                                        <h6 class="fw-normal mb-0">"“Working with CreativeHub's has been
                                            nothing short of amazing! Thanks to Five CreativeHub's, I have
                                            an incredible application with over 100,000 downloads."</h6>
                                        <small class="text-purple">content creator/producer</small>
                                    </div>
                                </div>

                                <!-- Slide item -->
                                <div>
                                    <div class="card card-body h-100">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <!-- Avatar -->
                                            <div class="d-flex align-items-center mb-1 mb-sm-0">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle"
                                                        src="assets/images/avatar/06.jpg" alt="avatar">
                                                </div>
                                                <!-- Info -->
                                                <div class="ms-2">
                                                    <h6 class="mb-0">Carolyn Ortiz</h6>
                                                </div>
                                            </div>

                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 mb-0"><i
                                                        class="fas fa-star-half-alt text-warning"></i></li>
                                            </ul>
                                        </div>

                                        <!-- Content -->
                                        <h6 class="fw-normal mb-0">"Conviction For every delay in they
                                            Extremity now strangers contained breakfast ,I’m sure I’ll be
                                            using CreativeHub long into the future.”"</h6>
                                        <small class="text-purple">content creator</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Slider END  -->
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
Testimonials END -->


        <!-- =======================
Faqs START -->
        <section class="position-relative overflow-hidden pt-0 pt-sm-5">
            <div class="container">

                <!-- Title -->
                <div class="row position-relative z-index-9">
                    <div class="col-12 text-center mx-auto">
                        <h2 class="mb-0">Frequently Asked Questions</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-xl-10 mx-auto text-center position-relative">

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 translate-middle ms-8">
                            <svg style="enable-background:new 0 0 141.7 143.9;">
                                <path class="fill-success"
                                    d="M137.7,53.1c9.6,29.3,1.8,64.7-20.2,80.7s-58.1,12.6-83.5-5.8C8.6,109.5-6.1,76.1,2.4,48.7 C10.8,21.1,42.2-0.7,71.5,0S128.1,23.8,137.7,53.1z" />
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-n9 rotate-193">
                            <svg width="297.5px" height="295.9px">
                                <path stroke="#F99D2B" fill="none" stroke-width="13"
                                    d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9">
                                </path>
                            </svg>
                        </figure>

                        <!-- FAQ START -->
                        <div class="accordion accordion-icon accordion-shadow mt-4 text-start position-relative"
                            id="accordionExample2">
                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                        aria-controls="collapse-1">
                                        How can I locate the ideal expert for my needs as a business?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        You can search for experts based on price, location, language, service type, and
                                        partner marketplace directory. To make an informed decision, you can also read
                                        customer reviews and expert profiles.

                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button fw-bold rounded collapsed pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">
                                        What certifications do the professionals in your partner marketplaces hold?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Experts go through a rigorous evaluation and training program that covers
                                        ethical standards and industry-specific skills. Those who exhibit excellence and
                                        current knowledge in their fields are granted certifications.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">
                                        Can I rely on these professionals to protect my data and transactions?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Experts go through a rigorous evaluation and training program that covers
                                        ethical standards and industry-specific skills. Those who exhibit excellence and
                                        current knowledge in their fields are granted certifications.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-4">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">
                                        Can I tailor these experts' services to meet the needs of my business?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>Yes, a large number of our specialists are skilled in developing solutions
                                            specifically tailored to meet your unique business needs and obstacles.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-5">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">
                                        What happens if I'm not happy with the service I received?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Our goal is your total satisfaction. We encourage you to get in touch with our
                                        support staff if you're not happy with the service in order to find a workable
                                        solution. In addition, if you're not happy with your order, we offer a 100%
                                        refund.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-6">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">
                                        How do service prices get set in the marketplace?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Experts determine their own rates according to the project's size, complexity,
                                        and length. We guarantee pricing transparency so you will always know what to
                                        anticipate.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-7">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false"
                                        aria-controls="collapse-7">
                                        Is a demo or trial period with the experts available?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Initially, some experts provide demos or consultations. We advise having a
                                        direct conversation about this during the first engagement phase with the
                                        expert.
                                    </div>
                                </div>
                            </div>


                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-8">
                                    <button class="accordion-button fw-bold collapsed rounded pe-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false"
                                        aria-controls="collapse8">
                                        What kind of assistance is offered if problems arise while working on a project?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Our partner marketplace offers committed customer service to address any issues
                                        that may arise throughout the Proposals of your project. This includes
                                        contacting
                                        creativehubmessage@gmail.com or clicking on the help button for technical
                                        support and mediation.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Faqs END -->

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
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>