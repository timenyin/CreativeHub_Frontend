<!DOCTYPE html>
<html lang="en">

<head>
    <title>creativeHub - Buying Guide</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="View creativehub - Buying Guide">

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css" />

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
Page content START -->
        <section class="pt-3 pt-xl-5">
            <div class="container" data-sticky-container>
                <div class="row g-4">
                    <!-- Main content START -->
                    <div class="col-xl-9">

                        <div class="row g-4">
                            <!-- Title START -->
                            <div class="col-12">
                                <!-- Title -->
                                <h2>How to start Buying on <em class="bg-warning px-2">CreativeHub</em></h2>
                            </div>
                            <!-- Title END -->

                            <!-- Image and video -->
                            <div class="col-12 position-relative">
                                <div class="video-player rounded-3">
                                    <video controls crossorigin="anonymous" playsinline poster="assets/images/videos/thumbnail.png">
                                        <source src="assets/images/videos/360.mp4" type="video/mp4" size="360">
                                        <source src="assets/images/videos/creativeHub-into.mp4" type="video/mp4" size="720">
                                        <source src="assets/images/videos/creativeHub-into.mp4" type="video/mp4" size="1080">
                                        <!-- Caption files -->
                                        <!-- <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt" default>
                                        <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt"> -->
                                    </video>
                                </div>
                            </div>


                            <!-- Curriculum START -->
                            <div class="col-12">
                                <div class="card border rounded-3">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0">How <em class="bg-warning px-1">CreativeHub</em> works </h3>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-5">
                                            <!-- Lecture item START -->
                                            <div class="col-12">
                                                <!-- Curriculum item -->
                                                <h5 class="mb-4">Searching Freelancers and Services on creativeHub: A
                                                    Guide</h5>
                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fa-solid fa-headset"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">Search Bar:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <audio class="audioPlayer" controls>
                                                                <source src="assets/images/videos/search.mp3" type="audio/mpeg">
                                                            </audio>
                                                        </div>
                                                    </div>
                                                    <!-- Button to show duration -->
                                                    <a class="btn btn-sm btn-success mb-0">Duration</a>
                                                </div><br>


                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fa-solid fa-headset"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">Categories and Subcategories:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <audio class="audioPlayer" controls>
                                                                <source src="assets/images/videos/filters.mp3" type="audio/mpeg">
                                                            </audio>
                                                        </div>
                                                    </div>
                                                    <!-- Button to show duration -->
                                                    <a class="btn btn-sm btn-success mb-0">Duration</a>
                                                </div>
                                                <hr>

                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fa-solid fa-headset"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">Categories and Subcategories:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <audio class="audioPlayer" controls>
                                                                <source src="assets/images/videos/Categories and Subcategories.mp3" type="audio/mpeg">
                                                            </audio>
                                                        </div>
                                                    </div>
                                                    <!-- Button to show duration -->
                                                    <a class="btn btn-sm btn-success mb-0">Duration</a>
                                                </div>
                                                <hr>

                                            </div>
                                            <!-- Lecture item END -->

                                            <!-- Lecture item START -->
                                            <div class="col-12">
                                                <!-- Curriculum item -->
                                                <h5 class="mb-4"> Place your order in easy
                                                    steps</h5>
                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fas fa-play"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">Payment Service:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <!-- Replace the audio tag with video tag -->
                                                            <div class="embed-responsive embed-responsive-16by9 my-3" style="max-width: 800px;">
                                                                <video class="videoPlayer embed-responsive-item" controls poster="assets/images/videos/payment_services.png">
                                                                    <source src="assets/images/videos/payment_services.mp4" type="video/mp4">
                                                                    <!-- Add additional source tags for other video formats if needed -->
                                                                </video>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <!-- Divider -->

                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fas fa-play"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">Sell & Buy on creativeHub:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <!-- Replace the audio tag with video tag -->
                                                            <div class="embed-responsive embed-responsive-16by9 my-3" style="max-width: 800px;">
                                                                <video class="videoPlayer embed-responsive-item" controls poster="assets/images/videos/buy&sell.png">
                                                                    <source src="assets/images/videos/Sell & Buy.mp4" type="video/mp4">
                                                                    <!-- Add additional source tags for other video formats if needed -->
                                                                </video>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <!-- Divider -->

                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <div class="d-flex">
                                                        <a class="btn btn-danger-soft btn-round mb-0"><i class="fas fa-play"></i></a>
                                                        <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                            <h6 class="mb-0">How to Creating Proposals:</h6>
                                                            <p class="mb-2 mb-sm-0 small audio_count"></p>
                                                            <!-- Replace the audio tag with video tag -->
                                                            <div class="embed-responsive embed-responsive-16by9 my-3" style="max-width: 800px;">
                                                                <video class="videoPlayer embed-responsive-item" controls poster="assets/images/videos/CreatingProposals.png">
                                                                    <source src="assets/images/videos/Creating_aproposals.mp4" type="video/mp4">
                                                                    <!-- Add additional source tags for other video formats if needed -->
                                                                </video>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Divider -->
                                                <hr>
                                            </div>
                                            <!-- Lecture item END -->





                                            <!-- Collapse button -->
                                            <a class="mb-0 mt-4 btn-more d-flex align-items-center justify-content-center" data-bs-toggle="collapse" href="#collapseCourse" role="button" aria-expanded="false" aria-controls="collapseCourse">
                                                See <span class="see-more mx-1">more</span><span class="see-less mx-1">less</span> video<i class="fas fa-angle-down ms-2"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- Card body START -->
                                </div>
                            </div>
                            <!-- Curriculum END -->


                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-xl-3">
                        <div data-sticky data-margin-top="80" data-sticky-for="768">
                            <div class="row g-4">
                                <!-- FQS tag -->
                                <div class="card card-body text-center bg-dark text-white p-5">
                                    <h6 class="text-danger mb-3"><i class="bi bi-hourglass-split me-2"></i>Hurry!
                                        Limited Seat Available</h6>
                                    <h4 class="text-white">Developed your photo editing skills</h4>
                                    <small>Jun 10 - Aug 5, 2022</small>
                                    <h3 class="fs-1 text-white mt-3">$557</h3>
                                    <a href="#" class="btn btn-success mb-2">Buy Now</a>
                                    <small class="mb-0">By clicking 'Buy Now', you agree to our <a href="#" class="text-decoration-underline"> Terms of Service and Privacy
                                            Policy.</a></small>
                                </div>
                            </div><!-- Row End -->
                        </div>
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <?php include('includes/footer.php'); ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/sticky-js/sticky.min.js"></script>
    <script src="assets/vendor/plyr/plyr.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>
    <!-- show time format for audios -->
    <script>
        const audioPlayers = document.querySelectorAll('.audioPlayer');

        audioPlayers.forEach((player, index) => {
            const playButton = document.querySelectorAll(
                '.btn-success')[index];
            const playTop = document.querySelectorAll('.audio_count')[
                index];

            player.addEventListener('loadedmetadata', function() {
                const duration = Math.floor(player.duration);
                const minutes = Math.floor(duration / 60);
                const seconds = duration % 60;
                playButton.innerText =
                    `Time (${minutes}m ${seconds}s)`;
                playTop.innerText = `${minutes}m ${seconds}s`;
            });
        });
    </script>

</body>

</html>