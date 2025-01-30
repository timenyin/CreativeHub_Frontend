<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Insert_Messages</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Conversation || Insert_Messages  ">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- checkout strip js -->
    <script src="https://checkout.stripe.com/checkout.js"></script>

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
    <link rel="shortcut icon" href="http://localhost/CreativeHub/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

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
    <?php include('../includes/user_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="pt-0">
            <!-- Main banner background image -->
            <div class="container-fluid px-0">
                <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(../assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="../assets/images/avatar/01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens <i class="bi bi-patch-check-fill text-info small"></i>
                                        </h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>Positive Ratings : 100%
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>React Delivery :
                                                June 2024
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fa-solid fa-calendar-day text-secondary me-1" aria-hidden="true"></i>Member Since : April 2021</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-center mt-2 mt-md-0">
                                        <ul class="list-inline mt-3">
                                            <!-- Price -->
                                            <li class="list-inline-item">
                                                <input type="radio" class="btn-check" name="options" id="option3" checked="">
                                                <label class="btn btn-success-soft-check" for="option3">
                                                    <span class="mb-2 h6 fw-light">creativeHub's Choice</span>
                                                    <!-- Price and discount -->
                                                    <span class="d-flex align-items-center">
                                                        <span class="mb-0 h5 me-2 text-success">VIP</span>
                                                        <span class="text-decoration-line-through fs-6 mb-0 me-2">CON</span>
                                                        <span class="badge  mb-0"> <img src="../assets/images/client/vip-card.svg" alt="" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work." data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Dashboard Menu <i class="fa-solid fa-arrow-right-long animation-blink" aria-hidden="true"></i></a>
                            <button class="btn btn-blue d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
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


        <!-- message info  -->
        <section class="position-relative overflow-hidden pt-0 pt-sm-5">
            <div class="container">

                <!-- Title -->
                <div class="row position-relative z-index-9">
                    <div class="col-12 text-center mx-auto">
                        <h4 class="mb-0">This Message is Related to the following Request <i class="fa-regular fa-hand-point-down fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i></h4>
                        <span class="small">Please quote for a platform exactly like "CreativeHub"</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto text-center position-relative">

                        <!-- SVG decoration -->
                        <figure class="position-absolute top-0 start-0 translate-middle ms-8">
                            <svg style="enable-background:new 0 0 141.7 143.9;">
                                <path class="fill-success" d="M137.7,53.1c9.6,29.3,1.8,64.7-20.2,80.7s-58.1,12.6-83.5-5.8C8.6,109.5-6.1,76.1,2.4,48.7 C10.8,21.1,42.2-0.7,71.5,0S128.1,23.8,137.7,53.1z">
                                </path>
                            </svg>
                        </figure>

                        <!-- SVG decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-n9 rotate-193">
                            <svg width="297.5px" height="295.9px">
                                <path stroke="#F99D2B" fill="none" stroke-width="13" d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9">
                                </path>
                            </svg>
                        </figure>

                        <!-- FAQ START -->
                        <div class="accordion accordion-icon accordion-shadow mt-4 text-start position-relative" id="accordionExample2">
                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        View Offer Details
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <h6>I Will Fix Html , Php , Laravel, Css,Javascript , Jquery Bugs</h6>
                                        <p>Yet remarkably appearance gets him his projection. Diverted endeavor bed
                                            peculiar men the not desirous. I will do your work as exactly as you demand.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Message END -->
                    </div>
                </div>
            </div>
        </section>

        <!-- End of message info -->



        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <?php include('../includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <section id="display-messages">
                            <?php include("display_messages.php") ?>
                        </section>
                        <div id="extwaiokist" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297" u="5.418" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe=" vn="9adfy">
                            <div id="extwaigglbit" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297" u="5.418" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe="></div>
                        </div>

                        <!-- Vacation  Notification -->
                        <section id="seller-vacation-div" class="pt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <!-- Image -->
                                        <img src="../assets/images/element/vacation.svg" class="h-200px h-md-400px mb-4" alt="">
                                        <!-- Title -->
                                        <h1 class="display-1 text-danger mb-0">204</h1>
                                        <!-- Subtitle -->
                                        <h2>This Person Is On Vacation..</h2>
                                        <!-- info -->
                                        <p class="mb-4">Dear Frances Guerrero !, This Person Is On Vacation.. see</p>
                                        <!-- Button -->
                                        <a href="http://localhost/CreativeHub/main-category.php" class="btn btn-success mb-0">Related
                                            proposal</a>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- End  Vacation  Notification -->

                        <!-- message input form -->
                        <div class="card">
                            <div class="card-header border-0">

                            </div>
                            <div class="card-body">
                                <form id="insert-message-form" class="clearfix" method="post">
                                    <div class="alert alert-info alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 
                                                            rounded-3 pe-2 py-2 mb-4 py-2">
                                        <h3 class="card-title fs-5"> Message Description </h3>
                                        <div>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb breadcrumb-dark mb-0 d-flex align-items-center">
                                                    <li class="breadcrumb-item h6 d-flex align-items-center">
                                                        Frances Guerrero
                                                        <i class="fa-regular fa-circle-dot fa-beat text-success fa-beat-fade ms-2" style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.075; font-size:1.55em;" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Online" data-bs-original-title="Online" aria-hidden="true"></i>
                                                    </li>
                                                    <small class="mx-4 h6" aria-current="page">Local
                                                        Time: 09:23 AM</small>
                                                </ol>
                                            </nav>

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label h6">Message</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Type Your Message Here..."></textarea>
                                    </div>

                                    <div class="card-footer border-0 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-secondary me-3">Submit</button>
                                        <button type="button" id="send-offer" class="btn  btn-warning">Send an
                                            Offer</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End of message input form  -->
                        <div class="clearfix"></div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-body shadow p-4">
                                    <h5 class="mb-3"> Accepted File Formats and Size:</h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"><i class="fa-regular fa-file-image"></i> jpeg : <span class="small text-success">4.0mb</span></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"><i class="fa-regular fa-file-image"></i> jpg : <span class="small text-success">4.0mb</span></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"><i class="fa-regular fa-file-image"></i> png : <span class="small text-success">4.0mb</span></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"><i class="fa-regular fa-file-image"></i> gif : <span class="small text-success">800kb</span></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"> <i class="fa-solid fa-film"></i>
                                                avi : <span class="small text-success">20mb</span></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"> <i class="fa-solid fa-film"></i>
                                                mp4 : <span class="small text-success">20mb</span></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"> <i class="fa-solid fa-file-audio"></i> mp3 : <span class="small text-success">20mb</span></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"> <i class="fa-solid fa-file-zipper"></i> zip : <span class="small text-success">50mb</span></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="btn btn-outline-light btn-sm"> <i class="fa-solid fa-file-zipper"></i> rar : <span class="small text-success">50mb</span></a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>

                        <div class="col mt-3">
                            <div class="mb-3">
                                <label for="attachment" class="form-label"> Attach File
                                    (optional)<span class="text-danger">*</span> </label>
                                <input type="file" id="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->


            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- modal class link -->
        <div id="accept-offer-div"></div>
        <!-- send offer message of file type  -->
        <div id="send-offer-div"></div>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->



    <!-- =======================
Footer START -->
    <?php include('../includes/footer.php') ?>
    <!-- =======================
Footer END -->

    <div id="featured-proposal-modal"></div>

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Functions -->
    <script src="../assets/js/functions.js"></script>
    <script>
        $(document).ready(function() {

            $("#send-offer").click(function() {

                receiver_id = "";

                message = $("#message").val();

                file = $("#file").val();

                if (file == "") {
                    message_file = file;
                } else {
                    message_file = document.getElementById("file").files[0].name;
                }

                offer_id = "";

                $.ajax({
                    method: 'POST',
                    url: 'send_offer_modal.php',
                    data: {
                        receiver_id: receiver_id,
                        message: message,
                        file: message_file,
                        offer_id: offer_id
                    }
                }).done(function(data) {

                    $("#send-offer-div").html(data);

                });

            });

        });
    </script>


</body>

</html>