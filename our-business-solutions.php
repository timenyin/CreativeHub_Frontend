<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Business Solution</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Business Solution">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
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
Page Banner START -->
        <section>
            <div class="container">

                <div class="row g-4">
                    <!-- Title and SVG START -->
                    <div class="col-10 text-center mx-auto position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-100 start-50 translate-middle mt-5 ms-n9 pt-5 d-none d-lg-block">
                            <svg>
                                <path class="fill-success" d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z" />
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 ms-n9">
                            <svg width="22px" height="22px" viewBox="0 0 22 22">
                                <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 " />
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-md-block">
                            <svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
                                <polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 " />
                            </svg>
                        </figure>
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-100 translate-middle">
                            <svg width="27px" height="27px">
                                <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z" />
                            </svg>
                        </figure>

                        <!-- Title -->
                        <h1 class="position-relative fs-2">Solutions designed to help companies locate and manage
                            outstanding independent contractors</h1>
                    </div>
                    <!-- Title and SVG END -->
                </div>

                <!-- Images START -->
                <div class="row g-4 mt-0 mt-lg-5">

                    <!-- Left image -->
                    <div class="col-6 col-md-4">
                        <div class="row g-4">
                            <!-- Image -->
                            <div class="col-10 col-lg-6">
                                <img class="rounded-4" src="assets/images/about/40.jpg" alt="">
                            </div>
                            <!-- Image -->
                            <div class="col-12">
                                <img class="rounded-4" src="assets/images/about/41.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Center image -->
                    <div class="col-6 col-md-4 position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 start-0 ms-n5">
                            <svg width="129px" height="133px">
                                <path class="fill-warning" d="M127.581,25.993 C122.659,31.935 113.441,24.283 118.356,18.351 C123.278,12.408 132.496,20.060 127.581,25.993 ZM115.247,49.292 C106.977,59.275 91.492,46.420 99.748,36.454 C108.018,26.470 123.503,39.325 115.247,49.292 ZM86.935,2.378 C91.464,-3.089 99.944,3.951 95.423,9.409 C90.894,14.876 82.414,7.836 86.935,2.378 ZM93.501,43.010 C84.246,54.182 66.918,39.796 76.157,28.643 C85.411,17.471 102.740,31.856 93.501,43.010 ZM57.726,6.672 C63.633,-0.460 74.694,8.723 68.796,15.842 C62.889,22.973 51.828,13.791 57.726,6.672 ZM65.132,42.254 C65.414,45.250 64.407,48.520 62.488,50.836 C60.459,53.285 57.635,54.609 54.547,55.032 C51.448,55.456 48.387,54.215 45.962,52.383 C43.626,50.618 42.031,47.307 41.761,44.441 C41.479,41.444 42.486,38.175 44.406,35.858 C46.434,33.410 49.258,32.085 52.346,31.662 C55.446,31.238 58.507,32.479 60.931,34.312 C63.267,36.076 64.862,39.387 65.132,42.254 ZM48.502,101.257 C42.496,108.507 31.251,99.172 37.247,91.934 C43.252,84.684 54.497,94.019 48.502,101.257 ZM23.966,17.251 C29.774,10.238 40.651,19.267 34.852,26.269 C29.043,33.281 18.167,24.251 23.966,17.251 ZM9.378,26.952 C15.088,20.059 25.780,28.935 20.079,35.817 C14.369,42.711 3.677,33.835 9.378,26.952 ZM10.074,49.315 C5.742,54.545 -2.369,47.811 1.955,42.590 C6.287,37.361 14.399,44.094 10.074,49.315 ZM10.889,68.408 C13.679,70.517 13.903,74.910 11.746,77.514 C9.434,80.305 5.439,80.481 2.640,78.366 C-0.150,76.258 -0.375,71.865 1.783,69.260 C4.095,66.469 8.090,66.293 10.889,68.408 ZM9.881,114.513 C5.450,119.861 -2.845,112.974 1.578,107.635 C6.008,102.287 14.304,109.173 9.881,114.513 ZM12.758,94.899 C14.381,91.994 16.764,89.898 20.208,89.575 C22.532,89.358 25.068,90.140 26.866,91.630 C28.766,93.203 29.795,95.394 30.124,97.789 C30.589,101.171 28.744,104.038 26.279,106.100 C26.173,106.189 26.066,106.278 25.960,106.367 C24.381,107.689 21.309,108.287 19.326,107.873 C17.757,107.545 16.312,106.882 15.033,105.915 C13.453,104.722 12.479,102.811 12.056,100.935 C11.657,99.164 11.627,96.924 12.555,95.263 C12.622,95.142 12.690,95.021 12.758,94.899 ZM23.787,69.054 C28.020,63.943 35.947,70.523 31.721,75.626 C27.487,80.736 19.560,74.156 23.787,69.054 ZM23.899,47.361 C28.822,41.418 38.039,49.070 33.125,55.003 C28.202,60.945 18.985,53.293 23.899,47.361 ZM51.663,129.014 C42.901,139.591 26.494,125.972 35.242,115.411 C44.004,104.833 60.411,118.454 51.663,129.014 ZM69.137,67.525 C69.381,67.564 69.626,67.602 69.871,67.641 C77.305,68.819 80.658,77.977 75.894,83.728 C71.131,89.478 61.508,87.888 58.968,80.803 C58.884,80.570 58.800,80.337 58.717,80.104 C56.311,73.396 62.098,66.410 69.137,67.525 Z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img class="rounded-4" src="assets/images/about/09.jpg" alt="">
                    </div>

                    <!-- Right image -->
                    <div class="col-md-4">
                        <div class="row g-4">
                            <!-- Content -->
                            <div class="col-sm-6 col-md-12">
                                <div class="bg-grad rounded-4 p-5 text-start">
                                    <span class="text-white">How to Start:</span>
                                    <h3 class="text-white">“Speak with a member of our sales team to choose the best
                                        option for your needs.”</h3>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <img class="rounded-4" src="assets/images/about/39.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Images END -->
            </div>
        </section>
        <!-- =======================
Page Banner END -->


        <!-- =======================
Action boxes START -->
        <section>
            <div class="container">
                <div class="row g-4">

                    <!-- Action box item -->
                    <div class="col-lg-4">
                        <div class="bg-info bg-opacity-10 rounded-3 p-5">
                            <!-- Icon -->
                            <h2 class="display-5 text-info"><i class="fa-solid fa-crown"></i></h2>
                            <!-- Title -->
                            <h4>CreativeHub <span class="bg-info px-2"><em>Pro</em></span> </h4>
                            <p>Ideal for:Companies looking to augment internal resources with
                                outstanding independent skills</p>
                            <!-- Button -->
                            <a href="creativehub-pro.php" class="btn btn-dark mb-0">Explore
                                CreativeHub Pro</a>
                        </div>
                    </div>

                    <!-- Action box item -->
                    <div class="col-lg-4">
                        <div class="bg-purple bg-opacity-10 rounded-3 p-5">
                            <!-- Icon -->
                            <h2 class="display-5 text-purple"><i class="bi bi-patch-check-fill"></i></h2>
                            <!-- Title -->
                            <h4>CreativeHub <span class="bg-purple px-2"><em>Certified</em></span> </h4>
                            <p class="pb-4">Ideal for: IT partners who wish to provide certified specialists to their
                                clients</p>
                            <!-- Button -->
                            <a href="creativehub-certified.php" class="btn btn-dark mb-0">Explore CreativeHub
                                Certified</a>
                        </div>
                    </div>

                    <!-- Action box item -->
                    <div class="col-lg-4">
                        <div class="bg-warning bg-opacity-15 rounded-3 p-5">
                            <!-- Icon -->
                            <h3 class="display-5 text-warning"><i class="fa-solid fa-handshake"></i></h3>
                            <!-- Title -->
                            <h4>CreativeHub <span class="bg-warning px-2"><em>Partnership</em></span></h4>
                            <p>Ideal for you and the top freelance marketplace for digital services worldwide you can
                                also Join one of the following programs.</p>
                            <!-- Button -->
                            <a href="partnerships.php" class="btn btn-dark mb-0">Explore
                                CreativeHub Partnership</a>
                        </div>
                    </div>

                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Action boxes ENd -->



        <!-- =======================
About START -->
        <section class="pb-0 pb-lg-5 mt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/pro.svg" class="position-relative" alt="pro_svg">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>CreativeHub <span class="bg-info px-2"><em>Pro</em></span></h2>
                        <p class="mb-2">Select from a carefully chosen list of leading freelancers and agencies that
                            possess the expertise and experience required for each job. Work together as a team and
                            handle all of your talent, projects, and finances in one location.
                        </p>
                        <!-- Button -->
                        <a href="creativehub-pro.php" class="btn btn-primary-soft mb-0">Explore CreativeHub Pro</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About END -->


        <!-- =======================
About START -->
        <section class="pb-0 pb-lg-5 mt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>CreativeHub <span class="bg-purple px-2"><em>Certified</em></span></h2>
                        <p class="mb-2">Create your own branded marketplace for qualified professionals.</p>
                        <p>Join the top companies in the world and work with us to create a specialized marketplace of
                            independent contractors that are qualified to offer product assistance.</p>
                        <!-- Button -->
                        <a href="creativehub-certified.php" class="btn btn-primary-soft mb-0">Explore CreativeHub
                            Certified </a>
                    </div>

                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-purple opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/certified.svg" class="position-relative" alt="certified_svg">
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
About END -->


        <!-- =======================
About START -->
        <section class="pb-0 pb-lg-5 mt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">

                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-warning opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/element/enterprise.svg" class="position-relative" alt="enterprise_svg">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>CreativeHub <span class="bg-warning px-2"><em>Partnership</em></span></h2>
                        <p class="mb-2">Invest in a fully-integrated SaaS system to take charge of hiring, supervising,
                            and compensating your current freelancing workforce. Use our pool of outstanding talent when
                            you need it, and streamline your job classification, governance, and compliance procedures
                            in the process.</p>
                        <!-- Button -->
                        <a href="partnerships.php" class="btn btn-primary-soft mb-0">Explore CreativeHub Enterprise</a>
                    </div>


                </div>
            </div>
        </section>
        <!-- =======================
About END -->

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
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>