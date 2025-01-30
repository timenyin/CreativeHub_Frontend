<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - View Selling Order page</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub Selling Orders || Engage with your seller's ">

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

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <?php include('includes/user_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="pt-0">
            <!-- Main banner background image -->
            <div class="container-fluid px-0">
                <div class="bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                            src="assets/images/avatar/01.jpg" alt="">
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
                                                                src="assets/images/client/vip-card.svg" alt=""
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
                    <?php include('includes/user_nav.php') ?>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <div class="card shadow rounded-2 p-0">
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 text-warning active"
                                            id="course-pills-tab-6" data-bs-toggle="pill"
                                            data-bs-target="#course-pills-6" type="button" role="tab"
                                            aria-controls="course-pills-6" aria-selected="true">
                                            My Buyers <span
                                                class="badge bg-warning rounded-circle bg-opacity-10 ms-1 text-warning">3</span>
                                        </button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 text-warning" id="course-pills-tab-1"
                                            data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button"
                                            role="tab" aria-controls="course-pills-1" aria-selected="false"
                                            tabindex="-1"> My Sellers
                                            <span
                                                class="badge bg-warning rounded-circle bg-opacity-10 ms-1 text-warning">3</span>
                                        </button>
                                    </li>

                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">
                                    <!-- Content Buyers START -->
                                    <div class="tab-pane fade active show" id="course-pills-6" role="tabpane1"
                                        aria-labelledby="course-pills-tab-6">
                                        <!-- Course detail START -->
                                        <div class="card border bg-transparent rounded-3">
                                            <!-- Card header START -->
                                            <div class="card-header bg-transparent border-bottom">
                                                <h3 class="mb-0">Buyers who purchased proposals from you</h3>
                                            </div>
                                            <!-- Card header END -->

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Course list table START -->
                                                <div class="table-responsive border-0">
                                                    <table
                                                        class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start">Buyer
                                                                    Name</th>
                                                                <th scope="col" class="border-0">Completed Orders</th>
                                                                <th scope="col" class="border-0">Amount Spent</th>
                                                                <th scope="col" class="border-0">Last Order</th>
                                                                <th scope="col"
                                                                    class="border-0 rounded-end text-center">Action</th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody>
                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/01.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Lori
                                                                                    Stevens</a></h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        2</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$100</td>

                                                                <!-- Table data -->
                                                                <td>December 17, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>

                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/03.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Bennet
                                                                                    Rogues</a></h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        1</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$120</td>

                                                                <!-- Table data -->
                                                                <td>July 17, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>

                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/06.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Mat Law</a>
                                                                            </h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        4</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$100</td>

                                                                <!-- Table data -->
                                                                <td>July 07, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                </div>
                                                <!-- Course list table END -->
                                            </div>
                                            <!-- Card body START -->
                                        </div>

                                    </div>
                                    <!-- Content Buyer END -->
                                    <!-- Content Seller START -->
                                    <div class="tab-pane fade" id="course-pills-1" role="tabpanel"
                                        aria-labelledby="course-pills-tab-1">
                                        <!-- Course detail START -->
                                        <div class="card border bg-transparent rounded-3">
                                            <!-- Card header START -->
                                            <div class="card-header bg-transparent border-bottom">
                                                <h3 class="mb-0">Seller from whom you have purchased proposals</h3>
                                            </div>
                                            <!-- Card header END -->

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Course list table START -->
                                                <div class="table-responsive border-0">
                                                    <table
                                                        class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                                        <!-- Table head -->
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start">Buyer
                                                                    Name</th>
                                                                <th scope="col" class="border-0">Completed Orders</th>
                                                                <th scope="col" class="border-0">Amount Spent</th>
                                                                <th scope="col" class="border-0">Last Order</th>
                                                                <th scope="col"
                                                                    class="border-0 rounded-end text-center">Action</th>
                                                            </tr>
                                                        </thead>

                                                        <!-- Table body START -->
                                                        <tbody>
                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/01.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Lori
                                                                                    Stevens</a></h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        2</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$100</td>

                                                                <!-- Table data -->
                                                                <td>December 17, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>

                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/03.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Bennet
                                                                                    Rogues</a></h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        1</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$120</td>

                                                                <!-- Table data -->
                                                                <td>July 17, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>

                                                            <!-- Table item -->
                                                            <tr>
                                                                <!-- Table data -->
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center position-relative">
                                                                        <!-- Image -->
                                                                        <div class="avatar avatar-md mb-2 mb-md-0">
                                                                            <img src="user_images/06.jpg"
                                                                                class="rounded" alt="">
                                                                        </div>
                                                                        <div class="mb-0 ms-2">
                                                                            <!-- Title -->
                                                                            <h6 class="mb-0"><a href="user.php"
                                                                                    class="stretched-link">Mat Law</a>
                                                                            </h6>
                                                                            <!-- Address -->
                                                                            <span class="text-body small">
                                                                                <i
                                                                                    class="bi bi-file-pdf text-warning mt-1"></i>
                                                                                <a href="#" target="_blank"
                                                                                    class="text-warning"> View
                                                                                    History</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td class="text-center">
                                                                    <div
                                                                        class="btn btn-warning-soft btn-round me-1 mb-0">
                                                                        4</div>
                                                                </td>

                                                                <!-- Table data -->
                                                                <td>$100</td>

                                                                <!-- Table data -->
                                                                <td>July 07, 2023</td>

                                                                <!-- Table data -->
                                                                <td class="ms-2">
                                                                    <a href="#"
                                                                        class="btn btn-warning-soft btn-round ms-5 mb-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        aria-label="View Details"
                                                                        data-bs-original-title="View Details"><i
                                                                            class="bi bi-chat-square-dots"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!-- Table body END -->
                                                    </table>
                                                </div>
                                                <!-- Course list table END -->


                                            </div>
                                            <!-- Card body START -->
                                        </div>

                                    </div>
                                    <!-- Content Seller END -->


                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>
                        <div id="extwaiokist" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297" u="5.418"
                            s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe="
                            vn="9adfy">
                            <div id="extwaigglbit" style="display:none" v="nipgg" q="b7567393" c="288.4" i="297"
                                u="5.418" s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e=""
                                a="3" m="BMe="></div>
                        </div>
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
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
    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>