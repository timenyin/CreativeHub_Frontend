<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Become a seller</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Become a seller on CreativeHub">

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
    <?php include('includes/sub_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="bg-light py-5 position-relative overflow-hidden">
            <!-- SVG decoration -->
            <figure class="fill-primary opacity-1 position-absolute top-50 end-0 me-n6 d-none d-sm-block">
                <svg width="211px" height="211px">
                    <path d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z" />
                </svg>
            </figure>

            <!-- SVG decoration -->
            <figure class="fill-primary position-absolute top-50 start-100 translate-middle ms-n7 mt-7 d-none d-sm-block">
                <svg class="opacity-5" enable-background="new 0 0 160.7 159.8" height="180px">
                    <path d="m153.2 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m116.4 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m134.8 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m135.1 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m153.5 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m98.3 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <ellipse cx="116.7" cy="99.1" rx="2.1" ry="2.2"></ellipse>
                    <path d="m153.2 149.8c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m135.1 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2 0-1.3 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m153.5 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m80.2 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z"></path>
                    <path d="m117 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z"></path>
                    <path d="m98.6 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m135.4 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m153.8 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m80.6 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <ellipse cx="98.9" cy="63.9" rx="2.1" ry="2.2"></ellipse>
                    <path d="m117.3 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <ellipse cx="62.2" cy="63.9" rx="2.1" ry="2.2"></ellipse>
                    <ellipse cx="154.1" cy="63.9" rx="2.1" ry="2.2"></ellipse>
                    <path d="m135.7 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m154.4 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m80.9 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m44.1 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m99.2 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z"></path>
                    <ellipse cx="117.6" cy="46.3" rx="2.1" ry="2.2"></ellipse>
                    <path d="m136 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z"></path>
                    <path d="m62.5 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m154.7 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m62.8 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <ellipse cx="136.3" cy="28.6" rx="2.1" ry="2.2"></ellipse>
                    <path d="m99.6 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m117.9 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z"></path>
                    <path d="m81.2 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z">
                    </path>
                    <path d="m26 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z"></path>
                    <ellipse cx="44.4" cy="28.6" rx="2.1" ry="2.2"></ellipse>
                    <path d="m136.6 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m155 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m26.3 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m81.5 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m63.1 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m44.7 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m118.2 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m7.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z">
                    </path>
                    <path d="m99.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2z"></path>
                </svg>
            </figure>

            <!-- SVG decoration -->
            <figure class="position-absolute bottom-0 start-0 d-none d-lg-block figure-wave">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
                </svg>
            </figure>

            <div class="container position-relative">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <!-- Title -->
                        <h1>Do It Your Way</h1>
                        <p class="lead">You provide the expertise. We'll make it simple to earn.</p>
                        <!-- Button -->
                        <a href="#fill-instructor-form" class="btn btn-primary mb-0">Let's Get You Ready</a>
                    </div>

                    <div class="col-md-6 text-center">
                        <!-- Image -->
                        <img src="assets/images/element/04.svg" class="h-300px h-xl-400px" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Work START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-sm-10 col-xl-6 text-center mx-auto">
                        <h2>How it works</h2>
                        <p class="mb-0 text-capitalize">Come and join our expanding community of independent contractors
                        </p>
                    </div>
                </div>

                <!-- Work process -->
                <div class="row g-4 g-md-5">
                    <!-- Item -->
                    <div class="col-md-4 text-center">
                        <img src="assets/images/element/create-account.svg" class="h-200px" alt="">
                        <h4 class="mt-3">Create a Proposal</h4>
                        <p class="text-truncate-2 mb-0">Create your Proposal, sign up for free, and present your work to
                            our international audience.</p>
                    </div>

                    <!-- Item -->
                    <div class="col-md-4 text-center">
                        <img src="assets/images/element/add-course.svg" class="h-200px" alt="">
                        <h4 class="mt-3">Produce excellent work</h4>
                        <p class="text-truncate-2 mb-0">Receive order notifications and use our system to communicate
                            with customers about specifics.</p>
                    </div>

                    <!-- Item -->
                    <div class="col-md-4 text-center">
                        <img src="assets/images/element/earn-money.svg" class="h-200px" alt="">
                        <h4 class="mt-3">Start Earning Money</h4>
                        <p class="text-truncate-2 mb-0">Always get paid on schedule. Withdrawals are possible as soon as
                            the money clears.</p>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Work END -->

        <!-- =======================
Counter START -->
        <section class="py-0 py-lg-5">
            <div class="container">
                <div class="bg-orange bg-opacity-10 p-4 p-sm-5 rounded position-relative overflow-hidden">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-50 end-0 translate-middle-y me-n7">
                        <svg class="fill-white opacity-8 rotate-193" width="676px" height="161.3px" viewBox="0 0 676 161.3" style="enable-background:new 0 0 676 161.3;" xml:space="preserve">
                            <path d="M53.6,18.8c28.6,8.8,50.3,27.3,70.9,48c19.9,19.9,39.5,40.8,65.3,53c53.3,24.9,116,12.4,168.2-9.1 c58.4-23.9,113.2-59.8,176.2-70.3c30.9-5.1,64.1-2.6,90.9,14.7c22.4,14.4,34.4,36.9,39.5,62.4c2.9,14.5,3.9,29.2,4.6,43.9h6.8 c-0.2-4.2-0.5-8.3-0.8-12.5c-1.7-24.1-4.9-49.1-17.6-70.3c-14.5-23.9-40-39.2-67-44.8c-32.9-6.8-67.2-0.3-98.5,10.2 c-30.3,10-59,24.2-87.7,38.1c-54.8,26.4-115.5,53.1-177.9,42c-14.5-2.6-28.7-7.4-41.7-14.7c-12.8-7.3-23.9-16.7-34.6-26.7 c-20.7-19.6-39.4-42-64.1-56.8c-25.6-15.4-56.4-22.2-86-19H0v6.9C17.9,11.8,36.3,13.5,53.6,18.8z" />
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 mt-3 ms-n3 opacity-5">
                        <svg width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
                            <path class="fill-orange" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z">
                            </path>
                        </svg>
                    </figure>

                    <div class="row g-4 position-relative align-items-center justify-content-center">

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="d-flex justify-content-center">
                                <h4 class="purecounter display-6 text-orange fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200">0</h4>
                                <span class="display-6 text-orange mb-0">K</span>
                            </div>
                            <h6 class="mb-0 fw-bold">Online Job Content</h6>
                        </div>

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="d-flex justify-content-center">
                                <h4 class="purecounter display-6 text-orange fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200">0</h4>
                                <span class="display-6 text-orange mb-0">K+</span>
                            </div>
                            <h6 class="mb-0 fw-bold">Freelancers</h6>
                        </div>

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="d-flex justify-content-center">
                                <h4 class="purecounter display-6 text-orange fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="7" data-purecounter-delay="200">0</h4>
                                <span class="display-6 text-orange mb-0">K+</span>
                            </div>
                            <h6 class="mb-0 fw-bold">Certified Expertise</h6>
                        </div>

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="d-flex justify-content-center">
                                <h4 class="purecounter display-6 text-orange fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="800" data-purecounter-delay="200">0</h4>
                                <span class="display-6 text-orange mb-0">+</span>
                            </div>
                            <h6 class="mb-0 fw-bold">Pro Users</h6>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
Counter END -->

        <!-- =======================
Form and Tabs START -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- Left Content START -->
                    <div class="col-lg-5 position-relative mt-xl-0" id="fill-instructor-form">

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-50 mt-n3 ms-5 d-none d-sm-block z-index-1">
                            <svg width="192.5px" height="89.4px" viewBox="0 0 192.5 89.4">
                                <path class="fill-warning" d="M170.2,0.5c-0.1,0-0.2,0-0.4,0c-2.6-0.1-5.2-0.4-7.8-0.5c-2.9-0.1-5.8,0-8.6,0.2c-1.4,0.1-2.9,0.3-4.3,0.5 c-0.5,0.1-1,0-1.5,0c-1-0.1-1.9,0.2-2.9,0.3c-5.6,0.9-11.1,2.1-16.5,3.6c-2.7,0.7-5.4,1.6-8.1,2.5c-0.6,0.2-1.2,0.4-1.8,0.5 c-0.4,0-0.8,0-1.2,0.1c-1.5,0.2-3,1.1-4.3,1.8c-3,1.5-5.9,3.2-8.6,5.2c-2,1.5-3.8,3.1-5.6,4.8c-0.9,0.9-1.7,1.8-2.5,2.7 c-0.4,0.4-1.1,0.7-1.4,1.2c-0.3,0.4-0.6,0.9-0.9,1.4c-0.9,1.2-1.7,2.3-2.7,3.4c-0.3,0.4-0.7,0.6-1.2,0.6c-1.4,0.1-2.8-0.1-4.2-0.1 c-0.7,0-1.2,0.2-1.9,0.2c-3.3,0.4-6.6,0.7-9.8,1.6c-1.7,0.5-3.4,0.9-5.1,1.4c-5.4,1.5-11,2.9-16,5.4c-4.6,2.2-8.7,5.2-12.7,8.3 c-2,1.6-4,3.2-5.9,4.9c-0.8,0.7-1.6,1.2-2.5,1.6c-0.9,0.5-1.7,1.3-2.4,2c-1.4,1.3-2.9,2.6-4.3,3.9c-1.2,1.1-2.5,2.1-3.6,3.3 c-0.9,1-2,1.9-3,2.8c-1,0.9-2.1,1.9-3.1,2.8c-0.8,0.7-1.6,1.2-2.3,1.9c-0.9,0.9-1.7,1.9-2.7,2.7c0-0.7,0.2-1.3,0.2-2 c0-1.8-0.2-3.7-0.7-5.5c-0.2-0.9-0.5-1.8-1.1-2.4c-0.6-0.7-1.7-1-2.4-0.6c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.2-0.1,0.4,0,0.6 c0.7,3.7,1.2,7.4,0.7,11.1c-0.2,2.4-0.9,4.9-2,7c-0.5,1-1.2,1.9-1.7,3c-0.4,1-1.4,1.8-2.1,2.7C0.3,86,0.1,86.3,0,86.6 c-0.1,0.4,0.1,0.7,0.2,1.1c0.3,0.8,0.8,1.6,1.6,1.7c0.5,0,0.9-0.2,1.3-0.5c0.9-0.5,1.7-1.1,2.6-1.6c0.4-0.2,0.7-0.5,1.1-0.7 c1.7-1.3,3.7-2.3,5.7-3.1c4.3-1.7,9.1-2.4,13.8-1.7c0.2,0,0.4,0.1,0.7,0c0.7-0.2,0.9-1.2,0.4-1.8c-0.4-0.6-1.2-0.8-1.9-1 c-2.7-0.8-5.4-1.5-8.2-1.8c-0.7-0.1-1.4-0.1-2.1-0.2c-0.3,0-0.6,0-0.8,0c-0.3,0-0.9,0.2-1.2,0.1C13,77,13,77.1,13,76.8 c0-0.4,0.6-0.8,0.9-1c0.5-0.4,0.9-0.8,1.4-1.2c1.1-1,2.3-1.9,3.4-2.9c0.6-0.5,1.1-1,1.7-1.5c0.3-0.3,0.5-0.7,0.9-1 c1.2-1.1,2.7-1.7,3.9-2.8c0.4-0.4,0.8-0.8,1.2-1.2c0.8-0.8,1.7-1.5,2.6-2.2c1-0.8,2.1-1.6,3.1-2.3c0.9-0.6,1.9-1.1,2.6-2 c0.8-1,2.1-1.7,3.1-2.5c1.1-0.9,2.2-1.8,3.3-2.6c3.9-3.1,7.9-6.2,12.3-8.6c5.2-2.7,10.6-4.9,16.3-6.4c5.5-1.4,11.2-1.8,16.8-2.7 c0.2,0,0.3-0.1,0.5-0.1c1.4-0.2,2.3-0.4,2,1.5c-0.8,4.9,2.3,7.5,5.8,9.8c4,2.5,8,5,12.7,5.8c5.2,0.9,10.4,2.7,15.9,0.8 c3-1,6.3-5,6.2-7.6c0-1.7-0.3-3.5-1-5.1c-0.6-1.4-1.5-3-2.8-3.7c-1-0.5-1.9-1.5-2.8-2.2c-1.1-0.8-2.2-1.5-3.3-2.1 c-2.3-1.2-4.8-2.1-7.3-2.8c-3.5-0.9-7.2-1.4-10.8-1.8c-0.9-0.1-1.7-0.2-2.6-0.2c-0.2,0-1.4,0-1.4-0.2c-0.1-0.2,0.3-0.5,0.4-0.6 c0.8-0.9,1.7-1.8,2.5-2.6c1.7-1.7,3.6-3.3,5.5-4.8c2-1.6,4.2-3,6.4-4.1c1.1-0.6,2.3-1.1,3.5-1.5c0.6-0.2,1.2-0.4,1.8-0.6 c0.4-0.2,0.7-0.5,1.1-0.7c1.2-0.6,2.7-0.9,4-1.3c1.4-0.4,2.8-0.8,4.2-1.2c2.8-0.8,5.6-1.5,8.4-2.2c3.4-0.8,6.9-1.6,10.3-2.4 c7.9-1.7,15.9-2.4,24-1.7c4.4,0.4,8.9,0.9,13.2,2.1c1.3,0.4,2.5,0.8,3.9,1.1c0.7,0.1,1.4,0.5,2,0.9c0.9,0.5,1.7,0.9,2.6,1.4 c0.3,0.2,0.7,0.3,0.9,0.1c0.1-0.1,0.1-0.3,0.1-0.4c0-0.9-0.4-1.8-1-2.5c-0.5-0.6-1.2-1.4-1.9-1.8c-0.9-0.6-2.2-0.9-3.3-1.3 c-1.1-0.4-2.2-0.7-3.3-1c-2.8-0.8-5.6-1.4-8.5-1.9C173.1,0.9,171.6,0.6,170.2,0.5z M106.8,36c5,0.8,11.2,2,16.2,6.2 c1.1,0.9,2.8,1.6,2.3,3.4c-0.4,1.7-2.1,1.8-3.5,2.3c-5,1.5-9.9,0-14.5-1.2c-4.9-1.2-9.7-3.3-13.5-7c-0.6-0.6-1.2-1.3-1.5-2.1 c-0.1-0.3-0.1-0.7-0.2-1c-0.1-0.3-0.3-0.6,0-0.9c0.2-0.2,0.5-0.3,0.9-0.3c2.4-0.4,4.9-0.6,7.4-0.5c0.9,0,1.8,0.4,2.7,0.5 C104.5,35.6,105.7,35.8,106.8,36z" />
                            </svg>
                        </figure>

                        <div class="card card-body shadow p-4">
                            <!-- Title -->
                            <h3>Please complete this form</h3>
                            <!-- Form START -->
                            <form action="" method="post" class="row g-3 mt-2 position-relative z-index-9">
                                <!-- Name -->
                                <div class="col-lg-6">
                                    <label class="form-label">Name *</label>
                                    <input name="name" type="text" class="form-control" aria-label="First name">
                                </div>
                                <!-- Email -->
                                <div class="col-lg-6">
                                    <label class="form-label">Username *</label>
                                    <input name="u_name" type="text" class="form-control">
                                </div>
                                <small class="text-muted">Your UserName<span class="text-danger">*</span> can not be
                                    changed once an account is
                                    registered</small>
                                <div class="col-lg-12">
                                    <label class="form-label">Email*</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <!-- Number -->
                                <div class="col-lg-6">
                                    <label class="form-label">Password *</label>
                                    <input name="pass" type="text" class="form-control" placeholder="*********">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Confirm Password *</label>
                                    <input name="con_pass" type="text" class="form-control" placeholder="*********">
                                </div>
                                <!-- Check box -->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-1">
                                        <label class="form-check-label" for="checkbox-1">By signing up, you agree to
                                            the<a href="terms-of-service.php"> terms of
                                                service</a></label>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mb-0">Get Started Now!</button>
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
                    </div>
                    <!-- Left Content END -->

                    <!-- Tabs START -->
                    <div class="col-lg-7 z-index-9 mt-5 mt-xl-0">
                        <h3>What I Should Know</h3>
                        <ul class="nav nav-pills nav-pill-soft my-4" id="course-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-lg-4" role="presentation">
                                <button class="nav-link mb-2 mb-xl-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Sell & Earn Guide</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-lg-4" role="presentation">
                                <button class="nav-link mb-2 mb-xl-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false">Investment & Pricing
                                    Guide</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-lg-4" role="presentation">
                                <button class="nav-link mb-2 mb-xl-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">How do I get paid</button>
                            </li>

                        </ul>

                        <!-- Tab contents START -->
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Content -->
                            <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                                <h6>What I can sell, as well as how much money I can make What is the price?</h6>

                                <!-- Info -->
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>Think beyond the box! As
                                        long as it's lawful and in accordance with our rules, you
                                        are free to provide whatever services you like. You may go through over a
                                        various categories to obtain inspiration.
                                    <li class="list-group-item d-flex">
                                        <i class="fas fa-check-circle text-success me-2 mt-1"></i>That is all up to you.
                                        You are free to work as much as you choose. Many sellers use
                                        CreativeHub full-time, while some continue to work a 9–5 job in addition to
                                        utilizing
                                        CreativeHub to supplement their income.
                                    </li>

                                    <li class="list-group-item d-flex">
                                        <i class="fas fa-check-circle text-success me-2 mt-1"></i>Joining CreativeHub is
                                        free
                                        of cost. To offer your services, there are no costs or subscription
                                        requirements. 80% of every transaction is yours to keep.
                                    </li>

                                </ul>
                            </div>

                            <!-- Content -->
                            <div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
                                <h6>How much time will this require of me? & How do I set my service's price?</h6>
                                <!-- Info -->
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>It's quite adaptable.
                                        Before you can determine how much work you want to accomplish, you must first
                                        invest some time and energy in learning about the market.
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <i class="fas fa-check-circle text-success me-2 mt-1"></i>Gig Packages let you
                                        offer three distinct versions of your service at three different price points
                                        and allow you to set your pricing anywhere between $5 and $995.
                                    </li>

                                </ul>
                            </div>

                            <!-- Content -->
                            <div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
                                <h6>In what way do I get paid?</h6>
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>Upon fulfilling a buyer's
                                        order, the funds are moved into your account. No more waiting 60 or 90 days for
                                        a check and pursuing clients for payments.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tab contents END -->
                    </div>
                    <!-- Tabs END -->
                </div>
            </div>
        </section>
        <!-- =======================
Form and Tabs END -->
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
                                    <path class="fill-white" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z">
                                    </path>
                                </svg>
                            </figure>
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-50 start-0 translate-middle-y ms-5">
                                <svg width="473px" height="234px">
                                    <path fill-rule="evenodd" opacity="0.051" fill="rgb(255, 255, 255)" d="M0.004,222.303 L364.497,-0.004 L472.998,32.563 L100.551,233.991 L0.004,222.303 Z" />
                                </svg>
                            </figure>
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-50 end-0 translate-middle-y">
                                <svg width="355.6px" height="396.1px">
                                    <path class="fill-danger rotate-10" d="M32.8,364.1c16.1-14.7,36-21.5,56.8-26.7c20-5.1,40.5-9.7,57.8-21.4c35.7-24.3,51.1-68.5,57.2-109.4 c6.8-45.7,4.6-93.7,21.6-137.5c8.3-21.4,22.3-41.4,43.3-51.9c17.4-8.7,36.2-7.9,54.2-1.5c10.2,3.6,19.8,8.5,29.4,13.5l2.5-4.3 c-2.7-1.4-5.4-2.8-8.2-4.2c-15.8-8-32.9-15.3-50.9-15.2C276,5.6,256.9,16,243.3,31c-16.6,18.3-25.3,42.2-30.5,66 c-5,22.9-6.8,46.3-8.8,69.6c-3.9,44.4-9.7,92.8-40.1,128c-7.1,8.2-15.4,15.4-24.9,20.8c-9.3,5.4-19.5,8.9-29.8,11.8 c-20.2,5.7-41.3,9.1-59.9,19.2c-19.3,10.4-35.1,27.2-44.2,47.1c0,0,0,0.1,0,0.1l4.4,2.6C15,384,22.9,373.1,32.8,364.1z" />
                                </svg>
                            </figure>

                            <div class="row g-3 align-items-center justify-content-lg-end position-relative py-4">
                                <!-- Title -->
                                <div class="col-md-6">
                                    <h2 class="text-white">Join Our Partner programs</h2>
                                    <p class="text-white mb-0">Join one of the following programs to earn from spreading
                                        the word about creativeHub and driving business our way.</p>
                                </div>
                                <!-- Button -->
                                <div class="col-md-6 col-lg-3 text-md-end">
                                    <a href="partnerships.php" class="btn btn-white mb-0">Get Started Now!</a>
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
    <?php include('includes/footer.php') ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>