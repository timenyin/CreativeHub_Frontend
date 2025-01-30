<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Users Profile</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub- User Homepage">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

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
Page content START -->
        <section class="pt-5 pb-0">
            <div class="container">
                <div class="row g-0 g-lg-5">

                    <!-- Left sidebar START -->
                    <?php include("includes/user_sidebar.php") ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-lg-8">

                        <div class="d-flex align-items-center mb-3">

                            <!-- Title -->
                            <div>
                                <h5 class="mb-0">Hi, I am</h5>
                                <h1 class="mb-0">Lori Stevens</h1>
                                <p class="mb-2">UserName:<span href="#"
                                        class="bg-opacity-10  h6">@Stevens34graphics</span></p>
                                <p class="badge bg-secondary bg-opacity-10 text-secondary rounded-0 px-2 py-2">Graphic
                                    Designer</p>
                            </div>
                            <!-- Image -->
                            <img src="images/badge new-06.png" class="img-fluid me-3"
                                style="max-width: 100px; margin-top: -70px;" alt="Badge">
                        </div>
                        <!-- Content -->
                        <p class="mt-4">Are you pouring hours into your content, but not seeing the results you want? Hi
                            there! I'm Diana and
                            I'm here to help you! As a certified social media marketer and graphic designer with over 5
                            years of
                            work experience, I know how to create compelling content that drives results.</p>

                        <!-- Personal info -->
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item px-0">
                                <span class="h6 fw-light"><i
                                        class="fas fa-fw fa-map-marker-alt text-secondary me-1 me-sm-3"></i>Location:</span>
                                <span>USA</span>
                            </li>
                            <li class="list-group-item px-0">
                                <span class="h6 fw-light"><i
                                        class="fa-solid fa-calendar-day text-secondary me-1 me-sm-3"></i> Member
                                    Since: </span>
                                <span>December 2023</span>
                            </li>

                            <li class="list-group-item px-0">
                                <span class="h6 fw-light"><i
                                        class="fas fa-fw fa-envelope text-secondary me-1 me-sm-3"></i>Email:</span>
                                <span>example@gmail.com</span>
                            </li>
                            <li class="list-group-item px-0">
                                <span class="h6 fw-light"><i
                                        class="bi bi-translate text-secondary me-1 me-sm-3"></i>Prefer
                                    Language:</span>
                                <span>English</span>
                            </li>
                            <li class="list-group-item px-0">
                                <span class="h6 fw-light"><i
                                        class="fas fa-fw fa-globe text-secondary me-1 me-sm-3"></i>Website:</span>
                                <a href="#" class="fw-bold text-success">https://www.harmony2k.com/ </a></span>
                            </li>
                        </ul>

                        <!-- Counter START -->
                        <div class="row mt-4 g-3">
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="icon-lg text-success mb-0 bg-success bg-opacity-10 rounded-3"><i
                                            class="fa-solid fa-ribbon"></i></span>
                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="1" data-purecounter-delay="200">0</h5>
                                            <span class="mb-0 h5">+</span>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Level 1</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="icon-lg text-purple bg-purple bg-opacity-10 rounded-3 mb-0"><i
                                            class="fa-solid fa-database"></i></span>
                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="6" data-purecounter-delay="200">0</h5>
                                            <!-- <span class="mb-0 h5">K+</span> -->
                                        </div>
                                        <p class="mb-0 h6 fw-light">Total Proposals</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="d-flex align-items-center">
                                    <span class="icon-lg text-orange bg-orange bg-opacity-10 rounded-3 mb-0"><i
                                            class="fas fa-trophy"></i></span>
                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                                data-purecounter-end="11" data-purecounter-delay="200">0</h5>
                                            <!-- <span class="mb-0 h5">+</span> -->
                                        </div>
                                        <p class="mb-0 h6 fw-light">Years in Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter END -->

                        <!-- Review START -->
                        <div class="row g-4 mt-4">
                            <!-- Content START -->
                            <div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <!-- Adjust the column width as needed -->
                                        <h5 class="mb-4">Client Reviews</h5>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <!-- Adjust the column width as needed -->
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <li class="list-inline-item me-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fas fa-star-half-alt text-warning"></i></li>
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
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4">
                                                <!-- Star item -->
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
                                                            class="fas fa-star text-warning"></i></li>
                                                </ul>
                                            </div>

                                            <!-- Progress bar and Rating -->
                                            <div class="col-6 col-sm-8">
                                                <!-- Progress item -->
                                                <div class="progress progress-sm bg-warning bg-opacity-15">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4">
                                                <!-- Star item -->
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
                                            </div>

                                            <!-- Progress bar and Rating -->
                                            <div class="col-6 col-sm-8">
                                                <!-- Progress item -->
                                                <div class="progress progress-sm bg-warning bg-opacity-15">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4">
                                                <!-- Star item -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                </ul>
                                            </div>

                                            <!-- Progress bar and Rating -->
                                            <div class="col-6 col-sm-8">
                                                <!-- Progress item -->
                                                <div class="progress progress-sm bg-warning bg-opacity-15">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4">
                                                <!-- Star item -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                </ul>
                                            </div>

                                            <!-- Progress bar and Rating -->
                                            <div class="col-6 col-sm-8">
                                                <!-- Progress item -->
                                                <div class="progress progress-sm bg-warning bg-opacity-15">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4">
                                                <!-- Star item -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
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
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Jacqueline Miller</h5>
                                                    <!-- Review star -->
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
                                                <!-- Info -->
                                                <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                <p class="mb-2 msg-body">Perceived end knowledge certainly day sweetness
                                                    why
                                                    cordially. Ask a quick six seven offer see among. Handsome met
                                                    debating sir dwelling age material. As style lived he worse
                                                    dried. Offered related so visitors we private removed. Moderate
                                                    do subjects to distance. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i
                                                            class="far fa-thumbs-down me-1"></i>2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------- second review for all -->
                                        <div class="d-md-flex my-4">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Gogra South</h5>
                                                    <!-- Review star -->
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
                                                <!-- Info -->
                                                <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                <p class="mb-2 msg-body">Perceived end knowledge certainly day sweetness
                                                    why
                                                    cordially. Ask a quick six seven offer see among. Handsome met
                                                    debating sir dwelling age material. As style lived he worse
                                                    dried. Offered related so visitors we private removed. Moderate
                                                    do subjects to distance. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i
                                                            class="far fa-thumbs-down me-1"></i>2</label>
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
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Carolyn Ortiz</h5>
                                                    <!-- Review star -->
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
                                                <!-- Info -->
                                                <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                <p class="mb-2 msg-body">Perceived end knowledge certainly day sweetness
                                                    why
                                                    cordially. Ask a quick six seven offer see among. Handsome met
                                                    debating sir dwelling age material. As style lived he worse
                                                    dried. Offered related so visitors we private removed. Moderate
                                                    do subjects to distance. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i
                                                            class="far fa-thumbs-down me-1"></i>2</label>
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
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                                    alt="avatar">
                                            </div>
                                            <!-- Text -->
                                            <div>
                                                <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                    <h5 class="me-3 mb-0">Billy Vasquez</h5>
                                                    <!-- Review star -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0 small">
                                                            <img src="assets/images/client/user_rate_full.svg" alt="">
                                                        </li>

                                                        <li class="list-inline-item me-0 small">
                                                            <img src="assets/images/client/user_rate_full.svg" alt="">
                                                        </li>

                                                        <li class="list-inline-item me-0 small">
                                                            <img src="assets/images/client/user_rate_blank.svg" alt="">
                                                        </li>

                                                        <li class="list-inline-item me-0 small">
                                                            <img src="assets/images/client/user_rate_blank.svg" alt="">
                                                        </li>
                                                        <li class="list-inline-item me-0 small">
                                                            <img src="assets/images/client/user_rate_blank.svg" alt="">
                                                        </li>

                                                        <li class="list-inline-item ms-2 h6 fw-light mb-0">(5.0)</li>
                                                    </ul>
                                                </div>
                                                <!-- Info -->
                                                <p class="small mb-2 rating-date">Nov 20, 2017 </p>
                                                <p class="mb-2 msg-body">Perceived end knowledge certainly day sweetness
                                                    why
                                                    cordially. Ask a quick six seven offer see among. Handsome met
                                                    debating sir dwelling age material. </p>
                                                <!-- Like and dislike button -->
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <!-- Like button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i
                                                            class="far fa-thumbs-up me-1"></i>25</label>
                                                    <!-- Dislike button -->
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i
                                                            class="far fa-thumbs-down me-1"></i>2</label>
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
                            <!-- Content END -->
                        </div>
                        <!-- Review END -->
                    </div>
                    <!-- Main content END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->


        <!-- =======================
Listed Pro seller  START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h4 class="mb-0">Proposals By <a href="#" class="text-success fw-light">@Stevens33graphics</a></h4>
                </div>

                <div class="row g-4">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="4"
                            data-dots="false" data-items="4" data-items-lg="2" data-items-sm="1">

                            <!-- Card Item START -->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="card p-2  h-100">
                                    <div class="rounded-top overflow-hidden">
                                        <div class="card-overlay-hover">
                                            <!-- Image -->
                                            <img src="assets/images/courses/4by3/14.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="assets/images/client/vip-card.svg" alt=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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


                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                    alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12
                                                Courses in 1 </a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                        class="fas fa-circle small fw-bold"></i> Personal Development
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$140</h5>
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
                                            <img src="assets/images/courses/4by3/19.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="assets/images/client/vip-card.svg" alt=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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

                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                    alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12
                                                Courses in 1</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                        class="fas fa-circle small fw-bold"></i> Personal Development
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$140</h5>
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
                                            <img src="assets/images/courses/4by3/19.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="assets/images/client/vip-card.svg" alt=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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

                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                    alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12
                                                Courses in 1</a></h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                        class="fas fa-circle small fw-bold"></i> Personal Development
                                                </a></div>
                                            <!-- Price -->
                                            <h5 class="text-success mb-0">$140</h5>
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
                                            <img src="assets/images/courses/4by3/21.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="assets/images/client/vip-card.svg" alt=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                                    alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Google Ads Training: Become a PPC Expert</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                        class="fas fa-circle small fw-bold"></i> SEO </a></div>
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
                                            <img src="assets/images/courses/4by3/20.jpg" class="card-img-top"
                                                alt="course image">
                                        </div>
                                        <!-- Hover element -->
                                        <div class="card-img-overlay">
                                            <!-- Ribbon -->
                                            <div class="ribbon" id="ribbon">
                                                <span><img src="../assets/images/client/vip-card.svg" alt=""
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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
                                            </ul>
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                                    alt="avatar">
                                            </div>
                                        </div>
                                        <!-- Divider -->
                                        <hr>
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Behavior, Psychology and Care Training</a>
                                        </h6>
                                        <!-- Badge and Price -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                        class="fas fa-circle small fw-bold"></i> Lifestyle </a></div>
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
Related instructor START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h4 class="mb-0">Related Instructors</h4>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
                        data-items="4" data-items-lg="3" data-items-md="2" data-items-xs="1">

                        <!-- Card item START -->
                        <div class="card bg-transparent">
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/instructor/02.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3">
                                    <div class="w-100 mt-auto text-end">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info rounded-1"><i
                                                class="fas fa-user-graduate me-2"></i>25</a>
                                        <a href="#" class="badge text-bg-orange rounded-1"><i
                                                class="fas fa-clipboard-list me-2"></i>15</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Jacqueline Miller</a></h5>
                                <p class="mb-2">Web Developer</p>
                                <!-- Rating -->
                                <ul class="list-inline hstack justify-content-center">
                                    <li class="list-inline-item ms-2 h6 mb-0 fw-normal">4.5/5.0</li>
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
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card bg-transparent">
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/instructor/01.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3">
                                    <div class="w-100 mt-auto text-end">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info rounded-1"><i
                                                class="fas fa-user-graduate me-2"></i>118</a>
                                        <a href="#" class="badge text-bg-orange rounded-1"><i
                                                class="fas fa-clipboard-list me-2"></i>09</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Samuel Bishop</a></h5>
                                <p class="mb-2">Marketing Instructor</p>
                                <!-- Rating -->
                                <ul class="list-inline hstack justify-content-center">
                                    <li class="list-inline-item ms-2 h6 mb-0 fw-normal">4.5/5.0</li>
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
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card bg-transparent">
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/instructor/08.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3">
                                    <div class="w-100 mt-auto text-end">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info rounded-1"><i
                                                class="fas fa-user-graduate me-2"></i>92</a>
                                        <a href="#" class="badge text-bg-orange rounded-1"><i
                                                class="fas fa-clipboard-list me-2"></i>38</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Dennis Barrett</a></h5>
                                <p class="mb-2">Maths Instructor</p>
                                <!-- Rating -->
                                <ul class="list-inline hstack justify-content-center">
                                    <li class="list-inline-item ms-2 h6 mb-0 fw-normal">4.5/5.0</li>
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
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card bg-transparent">
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/instructor/04.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3">
                                    <div class="w-100 mt-auto text-end">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info rounded-1"><i
                                                class="fas fa-user-graduate me-2"></i>82</a>
                                        <a href="#" class="badge text-bg-orange rounded-1"><i
                                                class="fas fa-clipboard-list me-2"></i>05</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Carolyn Ortiz</a></h5>
                                <p class="mb-2">Economics Teacher</p>
                                <!-- Rating -->
                                <ul class="list-inline hstack justify-content-center">
                                    <li class="list-inline-item ms-2 h6 mb-0 fw-normal">4.5/5.0</li>
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
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card bg-transparent">
                            <div class="position-relative">
                                <!-- Image -->
                                <img src="assets/images/instructor/03.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3">
                                    <div class="w-100 mt-auto text-end">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info rounded-1"><i
                                                class="fas fa-user-graduate me-2"></i>50</a>
                                        <a href="#" class="badge text-bg-orange rounded-1"><i
                                                class="fas fa-clipboard-list me-2"></i>10</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Billy Vasquez</a></h5>
                                <p class="mb-2">UI/UX Designer</p>
                                <!-- Rating -->
                                <ul class="list-inline hstack justify-content-center">
                                    <li class="list-inline-item ms-2 h6 mb-0 fw-normal">4.5/5.0</li>
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
                        <!-- Card item END -->

                    </div>
                </div>
                <!-- Slider END -->

            </div>
        </section>
        <!-- =======================
Related instructor END -->

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
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

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