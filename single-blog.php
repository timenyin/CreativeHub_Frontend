<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Blog FullPost</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Blogger_Name ">
    <meta name="description" content="Blog FullPost">

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
Main Content START -->
        <section class="pb-0 pt-4 pb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Title and Info START -->
                        <div class="row">
                            <!-- Avatar and Share -->
                            <div class="col-lg-3 align-items-center mt-4 mt-lg-5 order-2 order-lg-1">
                                <div class="text-lg-center">
                                    <!-- Author info -->
                                    <div class="position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl">
                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                                alt="avatar">
                                        </div>
                                        <a href="#" class="h5 stretched-link mt-2 mb-0 d-block">Remarries Holland</a>
                                        <p class="mb-2">Editor at CreativeHub</p>
                                    </div>
                                    <!-- Info -->
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item d-lg-block my-lg-2">Nov 15, 2024</li>
                                        <li class="list-inline-item d-lg-block my-lg-2">5 min read</li>
                                        <li class="list-inline-item badge text-bg-orange"><i
                                                class="far text-white fa-heart me-1"></i>402</li>
                                        <li class="list-inline-item badge text-bg-info"><i
                                                class="far fa-eye me-1"></i>3K</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-lg-9 order-1">
                                <!-- Pre title -->
                                <span>40 Days ago</span><span class="mx-2">|</span>
                                <div class="badge text-bg-success">Animation & Video</div>
                                <!-- Title -->
                                <h1 class="mt-2 mb-0 display-5">Why Video Animation is Vital for Marketing</h1>
                                <!-- Info -->
                                <p class="mt-2">Prospective students should start broadly and then narrow their list
                                    down to colleges that best
                                    fit their needs, experts say. Thirty it matter enable become
                                    admire in giving. See resolved goodness felicity shy civility domestic had but.
                                    Drawings offended yet answered Jennings perceive laughing six did far.</p>
                                <p class="mb-0 mb-lg-3">Perceived end knowledge certainly day sweetness why cordially.
                                    On forth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly
                                    his ten who diminution astonished. Demesne new manners savings staying had. Under
                                    folly balls, death own point now men. Match way these she avoids seeing death. She
                                    who drift their fat off. Ask a quick six seven offer see among. Handsome met
                                    debating sir dwelling age material. As style lived he worse dried. Offered related
                                    so visitors we private removed.</p>
                            </div>
                        </div>
                        <!-- Title and Info END -->

                        <!-- Video START -->
                        <div class="row mt-4">
                            <div class="col-xl-10 mx-auto">
                                <!-- Card item START -->
                                <div class="card overflow-hidden h-200px h-sm-300px h-lg-400px h-xl-500px rounded-3 text-center"
                                    style="background-image:url(assets/images/videos/thumbnail.png); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="bg-overlay bg-dark opacity-4"></div>
                                    <div class="card-img-overlay d-flex align-items-center p-2 p-sm-4">
                                        <div class="w-100 my-auto">
                                            <!-- <div class="row justify-content-center">
                                           
                                                <div class="col-12">
                                                    <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                                                        class="btn btn-lg text-danger btn-round btn-white-shadow stretched-link position-static mb-0"
                                                        data-glightbox="" data-gallery="video-tour">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div>
                        </div>
                        <!-- Video END -->

                        <!-- Quote and content START -->
                        <div class="row mt-4">
                            <!-- Content -->
                            <div class="col-12 mt-4 mt-lg-0">
                                <p><span class="dropcap h6 mb-0 px-2">S</span> atisfied conveying a dependent contented
                                    he gentleman agreeable do be. Water timed folly right aware if oh truth. Imprudence
                                    attachment him for sympathize. Large above be to means. Dashwood does provide
                                    stronger is. <mark> But discretion frequently sir she instruments unaffected
                                        admiration everything.</mark> Meant balls it if up doubt small purse. Required
                                    his you put the outlived answered position. A pleasure exertion if believed provided
                                    to. All led out world this music while asked. Paid mind even sons does he door no.
                                    Attended overcame repeated it is perceived Marianne in. I think on style child of.
                                    Servants moreover in sensible it ye possible.</p>
                                <!-- List -->
                                <ul class="list-group list-group-borderless mb-3">
                                    <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>The
                                        copy warned the Little blind text</li>
                                    <li class="list-group-item d-flex"><i
                                            class="fas fa-check-circle text-success me-2 mt-1"></i>ThaT where it came
                                        from it would have been rewritten a thousand times and everything that was left
                                        from origin would be the world</li>
                                    <li class="list-group-item"><i
                                            class="fas fa-check-circle text-success me-2"></i>Return to its own, safe
                                        country</li>
                                </ul>
                                <p class="mb-0">Warrant private blushes removed an in equally totally if. Delivered
                                    dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in
                                    do. Water timed folly right aware if oh truth. Imprudence attachment him for
                                    sympathize.</p>
                                <p>Fulfilled direction use continual set him propriety continued. Saw
                                    met applauded favorite deficient engrossed concealed and her. Concluded boy
                                    perpetual old supposing. Farther-related bed and passage comfort civilly.
                                    Dashwoods see frankness objection abilities. As hastened oh produced prospect
                                    formerly up am. Placing forming nay looking old married few has. Margaret
                                    disposed of add screened rendered six say his striking confined. Saw met
                                    applauded favorite deficient engrossed concealed and her. Concluded boy
                                    perpetual old supposing. Farther-related bed and passage comfort civilly.
                                    Dashwoods see frankness objection abilities. As hastened oh produced prospect
                                    formerly up am. Placing forming nay looking old married few has. Margaret
                                    disposed.</p>
                            </div>


                        </div>
                        <!-- Quote and content END -->
                        <!-- Quote -->
                        <div class="col-lg-10 col-xl-8 mx-auto mt-4">
                            <div class="bg-light rounded-3 p-3 p-md-4">
                                <!-- Content -->
                                <q class="lead">Farther-related bed and passage comfort civilly. Fulfilled direction
                                    use continual set him propriety continued. Concluded boy perpetual old
                                    supposing. Dashwoods see frankness objection abilities.</q>
                                <!-- Avatar -->
                                <div class="d-flex align-items-center mt-3">
                                    <!-- Avatar image -->
                                    <div class="avatar avatar-md">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                            alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-2">
                                        <h6 class="mb-0"><a href="#">Louis Crawford</a></h6>
                                        <p class="mb-0 small">Via Twitter</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags and share START -->
                        <div class="d-lg-flex justify-content-lg-between mb-4">
                            <!-- Social media button -->
                            <div class="align-items-center mb-3 mb-lg-0">
                                <h6 class="mb-2 me-4 d-inline-block">Share on:</h6>
                                <ul class="list-inline mb-0 mb-2 mb-sm-0">
                                    <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-facebook" href="#"><i
                                                class="fab fa-fw fa-facebook-f"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-instagram-gradient"
                                            href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-twitter" href="#"><i
                                                class="fab fa-fw fa-twitter"></i></a> </li>
                                    <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-linkedin" href="#"><i
                                                class="fab fa-fw fa-linkedin-in"></i></a> </li>
                                </ul>
                            </div>
                            <!-- Popular tags -->
                            <div class="align-items-center">
                                <h6 class="mb-2 me-4 d-inline-block">Popular Tags:</h6>
                                <ul class="list-inline mb-0 social-media-btn">
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0"
                                            href="#">blog</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0"
                                            href="#">business</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0"
                                            href="#">bootstrap</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0"
                                            href="#">data science</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm mb-lg-0"
                                            href="#">deep learning</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tags and share END -->

                        <hr> <!-- Divider -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Main Content END -->

        <!-- =======================
Related blog START -->
        <section class="pt-0">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">You may also like</h2>
                    </div>
                </div>

                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-hover arrow-dark">
                    <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2"
                        data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">

                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="assets/images/event/06.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Learn Programming: Kickstart Your Coding
                                                Journey</a></h6>
                                        <span class="small">July 21, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="assets/images/event/04.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">TTop Digital Marketing Trends to Watch
                                                2025</a></h6>
                                        <span class="small">50min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="assets/images/event/03.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Top Tools for Modern Graphic Designers</a>
                                        </h6>
                                        <span class="small">Aug 31, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider item -->
                        <div class="card bg-transparent">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="assets/images/event/05.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <h6 class="card-title"><a href="#">Why Video Animation is Vital for
                                                Marketing</a></h6>
                                        <span class="small">50min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </section>
        <!-- =======================
Related blog END -->

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
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>