<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Blog</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - Blog">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <?php include('includes/sub_header.php'); ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
Page Banner START -->
        <section class="py-5">
            <div class="container">
                <div class="row position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                        <svg width="22px" height="22px" viewBox="0 0 22 22">
                            <polygon class="fill-purple" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                            </polygon>
                        </svg>
                    </figure>

                    <!-- Title and breadcrumb -->
                    <div class="col-lg-10 mx-auto text-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 end-0 translate-middle-y">
                            <svg width="27px" height="27px">
                                <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                </path>
                            </svg>
                        </figure>

                        <!-- Title -->
                        <h1>CreativeHub Blog: Tips and Tools for Success</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="position-relative pt-0">
            <div class="container">
                <div class="row g-4 filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/images/event/02.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="#" class="badge text-bg-danger">Digital Marketing</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title"><a href="single-blog.php">Top Digital Marketing Trends to Watch
                                        2025</a></h5>
                                <p class="text-truncate-2">Prospective students should start broadly and then narrow
                                    their list down to colleges that best fit their needs, experts say. </p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Luris frances</a></h6>
                                    <span class="small">30M Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-light p-3">
                            <div class="card-body">
                                <!-- Badge -->
                                <a href="#" class="badge text-bg-success mb-2">Design & Graphics</a>
                                <!-- Title -->
                                <h5 class="card-title"><a href="single-blog.php">How to make a college list</a></h5>
                                <p>Prospective students should start broadly and then narrow their list down to colleges
                                    that best fit their needs, experts say. Yet remarkably appearance gets him his
                                    projection. </p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Louis Fico</a></h6>
                                    <span class="small">40M Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card h-100 bg-transparent">
                            <!-- Card image -->
                            <div class="card-img-top rounded-3 overflow-hidden position-relative hover-overlay-top">
                                <div class="ratio ratio-16x9">

                                    <video src="https://videos.pexels.com/video-files/4017225/4017225-uhd_2560_1440_30fps.mp4" width="620" height="347" autoplay muted loop playsinline controls>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body px-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-danger mb-2">Digital Marketing</a>
                                <!-- Title -->
                                <h5 class="card-title"><a href="single-blog.php">Master SEO: Boost Your Online
                                        Visibility</a></h5>
                                <p class="text-truncate-2">Prospective students should start broadly and then narrow
                                    their list down to colleges that best fit their needs, experts say.</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Milan Wallace</a></h6>
                                    <span class="small">5D Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/images/event/03.jpg" class="card-img-top" alt="course image">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="#" class="badge text-bg-warning">Writing & Copywriting</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title"><a href="single-blog.php">How to Write Content That Converts</a>
                                </h5>
                                <p>Prospective students should start broadly and then narrow their list down to colleges
                                    that best fit their needs, experts say</p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Amanda Reed</a></h6>
                                    <span class="small">July 21, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-dark p-3" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                            <div class="card-body">
                                <!-- Badge -->
                                <a href="#" class="badge text-bg-warning mb-2">Programming & Tech</a>
                                <!-- Title -->
                                <h5 class="card-title text-primary-hover mb-1"><a href="single-blog.php" class="text-white">Learn
                                        Programming: Kickstart Your Coding Journey</a></h5>
                                <span class="text-white">Louis Crawford</span>
                                <!-- Info -->
                                <ul class="list-inline mb-0 mt-3">
                                    <li class="list-inline-item text-white me-3 mb-1 mb-sm-0">Aug 26, 2021</li>
                                    <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#" class="text-white"><i class="bi bi-heart me-1"></i>10</a></li>
                                    <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#" class="text-white"><i class="fas fa-comment me-1"></i>5</a></li>
                                    <li class="list-inline-item text-primary-hover me-3 mb-1 mb-xl-0"><a href="#" class="text-white"><i class="fas fa-tag me-1"></i>Business</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-info p-3" style="background:url(assets/images/pattern/03.png) no-repeat center center; background-size:cover;">
                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title text-primary-hover mb-1"><a href="single-blog.php" class="text-white">Choose
                                        your direction</a></h5>
                                <p class="text-white mb-0">https://www.harmony2k.cfd/</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card h-100 bg-transparent">
                            <!-- Card image -->
                            <div class="card-img-top rounded overflow-hidden position-relative hover-overlay-top">
                                <div class="ratio ratio-16x9">
                                    <video src="https://videos.pexels.com/video-files/4017225/4017225-uhd_2560_1440_30fps.mp4" width="620" height="347" autoplay muted loop playsinline controls>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body px-3">
                                <!-- badge -->
                                <a href="#" class="badge text-bg-purple mb-2">Animation & Video</a>
                                <!-- Title -->
                                <h5 class="card-title"><a href="single-blog.php">Why Video Animation is Vital for
                                        Marketing</a></h5>
                                <p class="text-truncate-2">Prospective students should start broadly and then narrow
                                    their list down to colleges that best fit their needs, experts say. </p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#"> Knight</a></h6>
                                    <span class="small">20D Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/images/event/04.jpg" class="card-img" alt="course image">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="single-blog.php" class="badge text-bg-danger">Digital Marketing</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Master SEO: Boost Your Online Visibility</a></h5>
                                <p>Rooms oh fully taken by worse do. Points afraid but may end law. Points afraid but
                                    may end law. </p>
                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Honda Jem</a></h6>
                                    <span class="small">Aug 31, 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 grid-item">
                        <div class="card bg-transparent">
                            <div class="overflow-hidden rounded-3">
                                <img src="assets/images/event/01.jpg" class="card-imgp" alt="course image">
                                <!-- Overlay -->
                                <div class="bg-overlay bg-dark opacity-4"></div>
                                <div class="card-img-overlay d-flex align-items-start p-3">
                                    <!-- badge -->
                                    <a href="single-blog.php" class="badge text-bg-info">Design & Graphics</a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-3">
                                <!-- Title -->
                                <h5 class="card-title"><a href="#">Top Tools for Modern Graphic Designers</a></h5>
                                <p class="text-truncate-2">Prospective students should start broadly and then narrow
                                    their list </p>

                                <!-- Info -->
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0"><a href="#">Lori Stevens</a></h6>
                                    <span class="small">3M Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                </div> <!-- Row end -->

                <!-- Load more button START -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary-soft mb-0">Load more<i class="fas fa-sync ms-2"></i></a>
                </div>
                <!-- Load more button END -->
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

    <!-- Vendors -->
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesLoaded/imagesloaded.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>