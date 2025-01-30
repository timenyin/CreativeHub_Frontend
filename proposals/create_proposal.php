<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - proposals dashboard page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Proposals Dashboard || maintenances services  ">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- checkout strip js -->
    <script src="https://checkout.stripe.com/checkout.js"></script>

    <!-- Place the cdn.tiny.cloud HTML's -->
    <script src="https://cdn.tiny.cloud/1/hak3x9t2vvnju68g6c5q1lr06miln21c5b74ugeilircvl1z/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

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
    <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/choices/css/choices.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-tags/bootstrap-tagsinput.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<style>
.bootstrap-tagsinput {
    display: block !important;
    border: 1px solid #eeeef0 !important;
    padding: 8px !important;
}
</style>

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
                <div class="bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(../assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="../assets/images/avatar/01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens <i
                                                class="bi bi-patch-check-fill text-info small"></i>
                                        </h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-star text-warning me-2"></i>Positive Ratings : 100%
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fas fa-user-graduate text-orange me-2"></i>React Delivery :
                                                June 2024
                                            </li>
                                            <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                    class="fa-solid fa-calendar-day text-secondary me-1"
                                                    aria-hidden="true"></i>Member Since : April 2021</li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex align-items-center mt-2 mt-md-0">
                                        <ul class="list-inline mt-3">
                                            <!-- Price -->
                                            <li class="list-inline-item">
                                                <input type="radio" class="btn-check" name="options" id="option3"
                                                    checked="">
                                                <label class="btn btn-success-soft-check" for="option3">
                                                    <span class="mb-2 h6 fw-light">creativeHub's Choice</span>
                                                    <!-- Price and discount -->
                                                    <span class="d-flex align-items-center">
                                                        <span class="mb-0 h5 me-2 text-success">VIP</span>
                                                        <span
                                                            class="text-decoration-line-through fs-6 mb-0 me-2">CON</span>
                                                        <span class="badge  mb-0"> <img
                                                                src="../assets/images/client/vip-card.svg" alt=""
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="creativeHub's Choice highlights services that clients adore for their excellent execution and work."
                                                                data-bs-original-title="creativeHub's Choice highlights services that clients adore for their excellent execution and work."></span>
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
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Dashboard Menu <i
                                    class="fa-solid fa-arrow-right-long animation-blink" aria-hidden="true"></i></a>
                            <button class="btn btn-blue d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
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

        <!-- =======================
Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <?php include('../includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9 mx-auto">

                        <!-- Title -->
                        <h2 class="mb-3">Create a New Proposal</h2>
                        <p>Create New Proposals by filling up below form..
                            Any question related admission process, please contact our Vist the office at
                            <a href="help-&-Support.php">Help & Support</a> or
                            <a href="consumer&services.php">Consumer Services</a>.
                        </p>
                        <p class="mb-1">Before you proceed with the form please read below topics:</p>
                        <ul class="ps-3">
                            <li>Field required with <span class="text-danger">*</span> are required to complete the
                                Proposal form</li>
                        </ul>
                        <!-- Form START -->
                        <form method="post" enctype="multipart/form-data" class="row g-3">
                            <h5 class="mb-0">Personal information</h5>

                            <!-- Proposal Title   -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Proposal Title <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="proposal_title" maxlength="70" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <!--Proposal Category -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center text-capitalize">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Proposal Category <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="proposal_category" id="category"
                                            class="form-select js-choice z-index-9 rounded-3 "
                                            aria-label=".form-select-sm" required>
                                            <option selected>Select Categories</option>
                                            <option>Graphic & Design</option>
                                            <option>Video & Animation</option>
                                        </select>

                                        <select name="proposal_sub_category" id="sub-category"
                                            class="form-select js-choice z-index-9 rounded-3 border-0 bg-light mt-3"
                                            aria-label=".form-select-sm" required>
                                            <option selected>Select Sub Categories</option>
                                            <option>Web Design</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <!--Proposal Price -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center text-capitalize">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Proposal Price <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="proposal_price"
                                            class="form-select js-choice z-index-9 rounded-3 border "
                                            aria-label=".form-select-sm" required>
                                            <option selected>Select Price</option>
                                            <option value="5">$5</option>
                                            <option value="5">$10</option>
                                            <option value="15">$15</option>
                                            <option value="20">$20</option>
                                            <option value="100">$100</option>
                                            <option value="120">$120</option>
                                            <option value="150">$150</option>
                                            <option value="180">$180</option>
                                            <option value="200">$200</option>
                                            <option value="250">$250</option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <!-- Proposal Description -->
                            <div class="col-12">
                                <div class="row g-xl-0">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Proposal Description <span class="text-danger">*</span></h6>
                                        <small class="text-wrap ">Briefly Describe Your Proposal.</small>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="proposal_description" rows="7" class="form-control"
                                            placeholder="Enter Your Proposal Description" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Divider -->
                            <hr class="my-5">

                            <!-- Upload More Images detail -->
                            <h5 class="mt-0">Buyer Description </h5>

                            <!-- Instructions to Buyer -->
                            <div class="col-12">
                                <div class="row g-xl-0">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Buyer Instructions <span class="text-danger">*</span></h6>
                                        <small class="text-wrap text-success">Give Buyer a head start.</small>
                                        <small class="text-wrap ">

                                            If you need to obtain information, files or other material from the buyer
                                            prior to starting your work, please add your instructions here. For example:
                                            <em> Please send me your company name or Please send me the photo you need
                                                me to
                                                edit.</em>

                                        </small>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="proposal_description" rows="7" class="form-control"
                                            placeholder="Enter Your Proposal Description" required></textarea>
                                    </div>
                                </div>
                            </div>


                            <!-- Divider -->
                            <hr class="my-5">

                            <!-- Upload More Images detail -->
                            <h5 class="mt-0">Additional Details </h5>



                            <!-- Tags names -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Tags names <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="proposal_tags" id="post_tag" class="form-control"
                                            placeholder="Tags names">
                                        <small
                                            class="badge bg-secondary bg-opacity-10 text-secondary mb-2 mt-2 hide-md-up">
                                            <i class="bi bi-info-circle-fill"></i> &nbsp;Use the <span
                                                class="fw-bolder"> COMMA(,) and SPACE BAR </span>to enter the
                                            next line.Give related tag name related name. </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Proposal Delivery Time -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Select Delivery Time <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="delivery_id" class="form-select js-choice z-index-9 rounded-3"
                                            aria-label=".form-select-sm" required>
                                            <option selected>Select Time</option>
                                            <option value="1">1 Day</option>
                                            <option value="3">3 Days</option>
                                            <option value="5">5 Days</option>
                                            <option value="7">7 Days</option>
                                            <option value="any">Any Day</option>
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <!-- Divider -->
                            <hr class="my-5">

                            <!-- Upload More Images detail -->
                            <h5 class="mt-0">Media Uploads </h5>

                            <!--Main Proposal Image -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Main Proposal Image <span class="text-danger">*</span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group mb-3">
                                            <input class="form-control stretched-link" type="file" id="postImage"
                                                name="proposal_img1"
                                                accept="image/jpeg, image/png,  image/webp, image/bmp, image/tiff"
                                                required>

                                        </div>
                                        <small class="badge bg-secondary bg-opacity-10 text-secondary mb-2 hide-md-up">
                                            <i class="bi bi-info-circle-fill"></i> &nbsp;Only
                                            JPG, JPEG and PNG. Our suggested dimensions are* <span class="fw-bolder">
                                                290px, 375px, 440px, 660px
                                            </span> </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Upload More Images -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Upload Images</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#more-images"
                                            class="btn btn-primary btn-block btn-sm w-100">
                                            Upload More Images <i class="bi bi-caret-down-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Proposals -->
                            <div class="col-12 collapse" id="more-images">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">More Images Proposals <span
                                                class="text-danger"><small>Optional</small></span></h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group mb-3">
                                            <input class="form-control stretched-link" type="file" id="postImage1"
                                                name="proposal_img2"
                                                accept="image/jpeg, image/png, image/webp, image/bmp, image/tiff">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control stretched-link" type="file" id="postImage2"
                                                name="proposal_img3"
                                                accept="image/jpeg, image/png, image/webp, image.bmp, image.tiff">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control stretched-link" type="file" id="postImage3"
                                                name="proposal_img4"
                                                accept="image/jpeg, image.png, image.webp, image.bmp, image.tiff">
                                        </div>


                                        <small class="badge bg-secondary bg-opacity-10 text-secondary mb-2 hide-md-up">
                                            <i class="bi bi-info-circle-fill"></i> &nbsp;Only JPG, JPEG, and PNG. Our
                                            suggested dimensions are* <span class="fw-bolder">290px, 375px, 440px,
                                                660px</span>
                                        </small>
                                    </div>
                                </div>
                            </div>



                            <!--Add Proposal Video  -->
                            <div class="col-12">
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-lg-4">
                                        <h6 class="mb-lg-0">Add Proposal Video </h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group mb-3">
                                            <input class="form-control stretched-link" type="file" id="postImage"
                                                name="proposal_video"
                                                accept="video/mp4, video/ogg, video/webm, video/avi, video/mkv"
                                                required>

                                        </div>
                                        <small class="badge bg-secondary bg-opacity-10 text-secondary mb-2 hide-md-up">
                                            <i class="bi bi-info-circle-fill"></i> &nbsp; suggested video type* <span
                                                class="fw-bolder">
                                                ['mp4', 'mkv', 'avi', 'mov']

                                            </span> </small>
                                    </div>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="col-12 text-sm-end">
                                <button ype="submit" name="submit" class="btn btn-success mb-0">Insert New Proposal
                                </button>
                            </div>
                        </form>
                        <!-- Form END -->

                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <div id="featured-proposal-modal"></div>

    <!-- =======================
Footer START -->
    <?php include('../includes/footer.php') ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Tags JS -->
    <script src="../assets/vendor/bootstrap-tags/bootstrap-tagsinput.js"></script>
    <!-- Template Functions -->
    <script src="../assets/js/functions.js"></script>
    <!-- tinymce script -->
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'paste table lists media',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            }
        ],
        ai_request: (request, respondWith) => respondWith.string(() =>
            Promise.reject("See docs to implement AI Assistant"))
    });
    </script>

    <script type="text/javascript">
    $('#post_tag').tagsinput({
        confirmKeys: [44, 32],
        maxTags: 7,
        allowDuplicates: true
    });
    </script>


    <script>
    $(document).ready(function() {
        $("#sub-category").hide();
        $("#category").change(function() {
            $("#sub-category").show();
        });
    });
    </script>


</body>

</html>