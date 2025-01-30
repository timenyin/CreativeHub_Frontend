<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Pro </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="harmony2k">
    <meta name="description" content="Become a creativehub pro user">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

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
Page Banner START -->
        <section class="bg-light position-relative">

            <!-- Svg decoration -->
            <figure class="position-absolute bottom-0 start-0 d-none d-lg-block figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">

                            <!-- Image -->
                            <div class="col-6 col-md-3 text-center order-1">
                                <img src="assets/images/element/category-1.svg" alt="">
                            </div>

                            <!-- Content -->
                            <div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

                                <!-- Svg decoration -->
                                <figure class="position-absolute top-0 start-0">
                                    <svg width="22px" height="22px" viewBox="0 0 22 22">
                                        <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                                        </polygon>
                                    </svg>
                                </figure>

                                <!-- Svg decoration -->
                                <figure class="position-absolute top-0 start-50 translate-middle mt-n6 d-none d-md-block">
                                    <svg width="27px" height="27px">
                                        <path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                        </path>
                                    </svg>
                                </figure>


                                <!-- Title -->
                                <h1 class="mb-3">Deal with the most skilled individuals available</h1>
                                <p class="mb-3">Ability to understand your demands. instruments to facilitate your task.
                                </p>
                            </div>

                            <!-- Image -->
                            <div class="col-6 col-md-3 text-center order-3">
                                <img src="assets/images/element/category-2.svg" alt="">
                            </div>

                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page Banner END -->


        <!-- =======================
Client START -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center my-4">
                    <div class="col-12">
                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round">
                            <div class="tiny-slider-inner" data-arrow="false" data-autoplay="true" data-dots="false" data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2">
                                <!-- Slide item START -->
                                <div class="item"> <img src="assets/images/client/coca-cola.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/android.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/envato.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/microsoft.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/netflix.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/google.svg" alt=""> </div>
                                <div class="item"> <img src="assets/images/client/linkedin.svg" alt=""> </div>
                                <!-- Slide item END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Client END -->


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
                        <img src="assets/images/about/04-light.png" class="position-relative" alt="pro_svg">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>What makes professional independent talent<span class="bg-info px-2"><em>unique</em></span>
                        </h2>
                        <p class="mb-2">Based on their background, aptitude, and awareness of business requirements, we
                            rigorously screen and choose our Pro freelancers by hand.
                        </p>
                        <!-- Button -->
                        <a href="creativehub-pro.php" class="btn btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#pro">Explore CreativeHub Pro</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About END -->


        <!-- =======================
About START -->
        <section class=" pb-0 pb-lg-5 mt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>Match with more <span class="bg-info px-2"><em>expertise</em></span></h2>
                        <p class="mb-2">When you browse our carefully selected list of Pro freelancers,
                            who have been
                            thoroughly screened for expertise and skill, you may get in touch with the
                            best.
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative order-2">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block special-class">
                            <svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8" style="enable-background:new 0 0 625.8 630.8;">
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/about/43.png" class="position-relative" alt="pro_svg">
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
                                <path class="fill-primary opacity-1" d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
                            </svg>
                        </figure>
                        <!-- Image -->
                        <img src="assets/images/about/45.png" class="position-relative" alt="pro_svg">
                    </div>

                    <div class="col-lg-6 position-relative order-1 order-lg-2">
                        <!-- Title -->
                        <h2>Manage projects in <span class="bg-info px-2"><em>one place</em></span></h2>
                        <p class="mb-2">Work together on group projects, monitor developments, and control spending from
                            a single dashboard.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
About END -->

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
                                    <h4 class="mb-1">Earn a <span class="bg-purple px-2">Certificate</span></h3>
                                        <p class="mb-3 h5 fw-light lead">Perfect for: Tech partners that want to give
                                            customers access to certified experts.</p>
                                        <a href="creativehub-certified.php" class="btn btn-purple mb-0">Explore Now</a>
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



    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- ====modal ========= -->
    <!-- Modal -->
    <div class="modal fade" id="pro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- =======================
                            Main Banner START -->
                    <section class="bg-light">
                        <div class="container pt-5 mt-0 mt-lg-5">

                            <!-- Title and SVG START -->
                            <div class="row position-relative mb-0 mb-sm-5 pb-0 pb-lg-5">
                                <div class="col-lg-8 text-center mx-auto position-relative">

                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-100 start-50 translate-middle mt-4 ms-n9 pe-5 d-none d-lg-block">
                                        <svg>
                                            <path class="fill-success" d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z">
                                            </path>
                                        </svg>
                                    </figure>
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-0 start-0 ms-n9">
                                        <svg width="22px" height="22px" viewBox="0 0 22 22">
                                            <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                                            </polygon>
                                        </svg>
                                    </figure>
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
                                        <svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
                                            <polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 ">
                                            </polygon>
                                        </svg>
                                    </figure>
                                    <!-- SVG decoration -->
                                    <figure class="position-absolute top-0 start-100 translate-middle d-none d-md-block">
                                        <svg width="27px" height="27px">
                                            <path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                            </path>
                                        </svg>
                                    </figure>

                                    <!-- Title -->
                                    <h1>Employ talent from your league.</h1>
                                    <p>Get access to elite freelancers and agencies that CreativeHub's evaluation team
                                        has carefully screened.</p>
                                </div>
                            </div>
                            <!-- Title and SVG END -->
                        </div>
                    </section>
                    <!-- =======================
                    Main Banner END -->


                    <!-- =======================
                    Category START -->
                    <section>
                        <div class="container">
                            <div class="row g-4">

                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-info"></i> Knowledge
                                                        &amp;
                                                        proficiency
                                                    </a>
                                                </h5>
                                                <span>substantial expertise in their particular profession</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-danger"></i>
                                                        High-quality Output
                                                    </a>
                                                </h5>
                                                <span>Robust portfolio of consistently high-quality work</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-success"></i>
                                                        Employment &amp;
                                                        learning
                                                    </a>
                                                </h5>
                                                <span>Accredited expertise and relevant work experience</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-secondary"></i>
                                                        Client satisfaction
                                                    </a>
                                                </h5>
                                                <span>Track record of positive client feedback</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-orange"></i>
                                                        Notable clients
                                                    </a>
                                                </h5>
                                                <span>Experience working with bigger businesses</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Category item -->
                                <div class="col-sm-6 col-lg-4 col-xl-4">
                                    <div class="card card-body shadow rounded-3">
                                        <div class="d-flex align-items-center">
                                            <!-- items -->
                                            <div class="ms-3">
                                                <h5 class="mb-0"><a class="stretched-link"> <i class="bi bi-patch-check-fill mr-1 text-warning"></i>
                                                        Performance metrics
                                                    </a>
                                                </h5>
                                                <span>Top reviews in and outside of CreativeHub</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                    <!-- ======================= Category END -->


                    <!-- ======================= Live courses START -->
                    <section class="bg-light position-relative">

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 translate-middle-y ms-5 d-none d-xxl-block">
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
                                <path class="fill-warning" d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
                                </path>
                            </svg>
                        </figure>

                        <div class="container">
                            <!-- Live course START -->
                            <div class="row g-4 align-items-center justify-content-between">
                                <!-- Content -->
                                <div class="col-md-6 col-xl-4">
                                    <h3>How to hire talent on CreativeHub Pro</h3>
                                    <ul class="list-unstyled">
                                        <li class="my-2"><i class="bi bi-check-circle mx-2 "></i> Look through the
                                            list:Dive into
                                            the
                                            most comprehensive directory of verified freelancers and companies, ranging
                                            from programmers to designers.
                                        </li>
                                        <li class="my-2"><i class="bi bi-check-circle mx-2 "></i>Talent comes to you:
                                            Don't
                                            bother
                                            searching. Simply send in a brief, and suitable applicants will get back to
                                            you with suggestions for approval. </li>
                                        <li class="my-2"><i class="bi bi-check-circle mx-2 "></i>Get matched by us: Give
                                            our
                                            staff
                                            your goals, budget, and requirements, and we'll shortlist qualified
                                            applicants for you at no cost! </li>
                                    </ul>
                                    <a href="#" class="btn btn-orange mb-0">Go premium Pro</a>
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
                                                            <img src="assets/images/courses/Group 94.png" class="card-img rounded-2" alt="Card image">
                                                        </div>

                                                        <!-- Card body -->
                                                        <div class="card-body">
                                                            <!-- Title -->
                                                            <h6><a href="#">Toya produces strategic video content
                                                                    with speed on creativehub Pro</a></h6>
                                                            <!-- Avatar group and button -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                                <!-- Avatar Group -->
                                                                <div>
                                                                    <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>VIDEO
                                                                        & ANIMATION</h6>
                                                                    <ul class="avatar-group mb-2 mb-sm-0">
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <div class="avatar-img rounded-circle bg-primary">
                                                                                <span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- Button -->
                                                                <button class="btn btn-sm btn-success mb-0">See
                                                                    Profile</button>
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
                                                            <img src="assets/images/courses/Group 95.png" class="card-img rounded-2" alt="Card image">
                                                        </div>

                                                        <!-- Card body -->
                                                        <div class="card-body">
                                                            <!-- Title -->
                                                            <h6><a>Cozava produces high-ROI videos for 40%
                                                                    lower costs</a></h6>
                                                            <!-- Avatar group and button -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                                <!-- Avatar Group -->
                                                                <div>
                                                                    <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>VIDEO
                                                                        & ANIMATION</h6>
                                                                    <ul class="avatar-group mb-2 mb-sm-0">
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <div class="avatar-img rounded-circle bg-primary">
                                                                                <span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- Button -->
                                                                <button class="btn btn-sm btn-success mb-0">See
                                                                    Profile</button>
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
                                                            <img src="assets/images/courses/Group 96.png" class="card-img rounded-2" alt="Card image">
                                                        </div>

                                                        <!-- Card body -->
                                                        <div class="card-body">
                                                            <!-- Title -->
                                                            <h6><a>nextTech Alliance builds a diverse
                                                                    freelance network to train farmers worldwide</a>
                                                            </h6>
                                                            <!-- Avatar group and button -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
                                                                <!-- Avatar Group -->
                                                                <div>
                                                                    <h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>EMPLOYEE
                                                                        TRAINING</h6>
                                                                    <ul class="avatar-group mb-2 mb-sm-0">
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
                                                                        </li>
                                                                        <li class="avatar avatar-xs">
                                                                            <div class="avatar-img rounded-circle bg-primary">
                                                                                <span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- Button -->
                                                                <button class="btn btn-sm btn-success mb-0">See
                                                                    Profile</button>
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
                    <!-- ======================= Live courses END -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End of modal  -->

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
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>