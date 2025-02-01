<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="index.php">
                <img class="light-mode-item navbar-brand-item"
                    src="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/assets/images/logo.svg"
                    alt="logo">
                <img class="dark-mode-item navbar-brand-item"
                    src="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/assets/images/logo-light.svg"
                    alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav category menu START -->
                <?php include("category_nav.php") ?>
                <!-- Nav category menu END -->

                <!-- Nav Search START -->
                <!-- <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form method="post" class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                name="search_query" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit" name="search">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div> -->
                <!-- Nav Search END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll me-auto ms-5">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Explore</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="user_homepage.php">User's Home</a></li>
                            <li> <a class="dropdown-item" href="main-category.php">Category</a></li>
                            <li> <a class="dropdown-item" href="category.php">Categories Search</a></li>
                            <li> <a class="dropdown-item" href="proposals/proposal.php">Proposals</a></li>

                            <li> <a class="dropdown-item" href="cart.php">Cart</a></li>
                            <li> <a class="dropdown-item" href="checkout.php">Checkout</a></li>

                            <li> <a class="dropdown-item" href="search.php">Search</a></li>
                            <li> <a class="dropdown-item"
                                    href="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/sign-in.php">Sign-in</a>
                            </li>
                            <li> <a class="dropdown-item" href="sign-up.php">Sign-up</a></li>
                            <li> <a class="dropdown-item" href="forgot-password.php">Forgot Password</a></li>
                            <li> <a class="dropdown-item" href="change_pass.php">New Password</a></li>

                            <li> <a class="dropdown-item" href="blog.php">Blog</a></li>
                            <li> <a class="dropdown-item"
                                    href="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/single-blog.php">Single
                                    Blog</a></li>
                            <li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                    <!-- Nav item 4 Megamenu-->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Megamenu</a>
                        <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                            <div class="row p-4">
                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3 mb-3">
                                    <h6 class="mb-0">Footer Sections</h6>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a></li>
                                        <li><a class="dropdown-item" href="terms-of-service.php">Terms of Service</a>
                                        </li>
                                        <li><a class="dropdown-item" href="property-claims.php">Property Claims</a></li>
                                        <li><a class="dropdown-item" href="help-&-Support.php">Help & Support</a></li>
                                        <li><a class="dropdown-item" href="consumer&services.php">Consumer Services</a>
                                        </li>
                                        <li><a class="dropdown-item" href="trust&safety.php">Trust & Safety</a></li>
                                        <li><a class="dropdown-item" href="sellingon.php">Selling on CreativeHub</a>
                                        </li>
                                        <li><a class="dropdown-item" href="buyingon.php">Buying on CreativeHub</a></li>
                                    </ul>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3 mb-3">
                                    <h6 class="mb-0">Community Section</h6>
                                    <hr>
                                    <!-- Dropdown item -->
                                    <div
                                        class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="blog.php">Blog</a>
                                        <p class="mb-0 small text-truncate-2">Explore stories, ideas, and updates to
                                            inspire your journey and keep you informed.</p>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div
                                        class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="invent_friend.php">Invent a Friend</a>
                                        <p class="mb-0 small text-truncate-2">Connect and collaborate with like-minded
                                            individuals to spark innovation and creativity.</p>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                        <a class="stretched-link h6 mb-0" href="become-seller.php">Become a Seller</a>
                                        <p class="mb-0 small text-truncate-2">Join our platform to showcase your
                                            products and grow your business with ease.</p>
                                    </div>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3 mb-3">
                                    <h6 class="mb-0">Our Business</h6>
                                    <hr>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0">
                                            <i class="fas fa-stamp text-google-icon"></i>
                                        </h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="our-business-solutions.php">Our
                                                Business Solutions</a>
                                            <p class="mb-0 small">To help companies locate and manage outstanding
                                                independent contractors.</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="fa-solid fa-crown text-info"></i></h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0" href="creativehub-pro.php">CreativeHub
                                                Pro</a>
                                            <p class="mb-0 small">Companies looking to augment internal resources with
                                                outstanding independent skills.</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="bi bi-patch-check-fill text-purple"></i></h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0"
                                                href="creativehub-certified.php">CreativeHub Certified</a>
                                            <p class="mb-0 small">IT partners who wish to provide certified specialists
                                                to their clients.</p>
                                        </div>
                                    </div>
                                    <!-- Dropdown item -->
                                    <div class="d-flex mb-4 position-relative">
                                        <h2 class="mb-0"><i class="fa-solid fa-handshake text-warning"></i>
                                        </h2>
                                        <div class="ms-2">
                                            <a class="stretched-link h6 mb-0"
                                                href="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/Partnerships.php">CreativeHub
                                                Partnerships</a>
                                            <p class="mb-0 small">Ideal for you and the top freelance marketplace for
                                                digital services worldwide.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3 mb-3">
                                    <h6 class="mb-0">Download CreativeHub</h6>
                                    <hr>
                                    <!-- Image -->
                                    <img src="assets/images/element/14.svg" alt="">

                                    <!-- Download button -->
                                    <div class="row g-2 justify-content-center mt-3">
                                        <!-- Google play store button -->
                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#"> <img src="assets/images/client/google-play.svg"
                                                    class="btn-transition" alt="google-store"> </a>
                                        </div>
                                        <!-- App store button -->
                                        <div class="col-6 col-sm-4 col-xxl-6">
                                            <a href="#"> <img src="assets/images/client/app-store.svg"
                                                    class="btn-transition" alt="app-store"> </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action box -->
                                <div class="col-12">
                                    <div class="alert alert-secondary alert-dismissible fade show mt-2 mb-0 rounded-3"
                                        role="alert">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs me-2">
                                            <img class="avatar-img rounded-circle"
                                                src="https://rexoxinterserv.com/wp-admin/Sensetive/CreativeHub_Frontend/assets/images/element/question.png"
                                                alt="question-mark">
                                        </div>
                                        <!-- Info -->
                                        <span class="fw-bolder text-danger">Note:</span> This are the remaining
                                        FrontEnd Pages
                                        Been
                                        Created
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Nav item 5 Become a Seller -->
                    <li class="nav-item">
                        <a class="nav-link" href="become-seller.php" aria-haspopup="true" aria-expanded="false">Become a
                            seller</a>
                    </li>


                    <!-- Nav item 6 link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                            <li>
                                <a class="dropdown-item" href="https://github.com/timenyin/CreativeHub_ReadMe.git"
                                    target="_blank">
                                    <i class="text-secondary fab fa-github me-2"></i>Github
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="docs/index.php" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="../docs/snippets-hero-banner.html" target="_blank">
                                    <i class="text-orange fas fa-project-diagram me-2"></i>FlowChart Layout
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- Recent search -->
                    <!-- Search -->
                    <li class="nav-item dropdown nav-search">
                        <a class="nav-link mb-0" role="button" href="#" id="navSearch" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside" data-bs-display="static">
                            <i class="bi bi-search fs-5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-start shadow rounded p-2 searchAtSmall"
                            aria-labelledby="navSearch">
                            <form class="input-group" onsubmit="return handleSearch()">
                                <input id="searchInput" class="form-control border-primary" type="search"
                                    placeholder="Search" name="search_query" aria-label="Search">
                                <button class="btn btn-primary m-0" type="submit" name="search">Search</button>
                            </form>

                            <!-- Recent search -->
                            <ul id="recentSearchList"
                                class="list-group list-group-borderless p-2 small d-none d-sm-block">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="fw-bold">Recent Searches:</span>
                                    <span onclick="clearHistory()" class="text-danger" style="cursor: pointer;"><i
                                            class="bi bi-x-lg"></i></span>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <!-- Nav Main menu END -->
                <!-- ========================================================================================== -->
                <!-- - Login and Join START -->
                <!-- <ul class="navbar-nav navbar-nav-scroll mx-2">
                    <li class="nav-item">
                        <a href="sign-in.php" class="nav-link px-3 py-3 py-xl-0"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="bi bi-arrow-bar-right me-2"></i><span>Sign In</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="sign-up.php"
                            class="nav-link bg-secondary bg-opacity-10 rounded-3  px-3 py-3 py-xl-0"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="bi bi-arrow-bar-right me-2"></i><span>Sign Up</span></a>
                    </li>

                </ul> -->
                <!-- Login and Join END -->



            </div>
            <!-- Main navbar END -->


        </div>
    </nav>
    <!-- Nav END -->
</header>


<!-- Unavailable alert box START -->
<!-- <div class="alert alert-light alert-dismissible fade show  position-fixed bottom-0 start-50 translate-middle-x z-index-99 d-lg-flex justify-content-between align-items-center shadow p-4 col-9 col-md-7 col-xxl-5"
    role="alert">
    <div>
        <h4 class="text-dark"><i class="bi bi-exclamation-octagon text-success"></i> Unavailable!</h4>
        <p class="m-0 pe-3">This page or user account you are looking for is no longer Available </p>
    </div>
    <div class="d-flex mt-3 mt-lg-0">
        <button type="button" class="btn btn-success btn-sm mb-0 me-2">
            <span aria-hidden="true"><a class="text-white" href="index.php">Refresh
                    Page</a></span>
        </button>
        <div class="position-absolute end-0 top-0 mt-n3 me-n3">
            <button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
    </div>
</div> -->
<!-- Unavailable  alert box END -->

<!-- Activate  account alert box START -->
<!-- <div class="alert alert-light alert-dismissible fade show  position-fixed bottom-0 start-50 translate-middle-x z-index-99 d-lg-flex justify-content-between align-items-center shadow p-4 col-9 col-md-7 col-xxl-5"
    role="alert">
    <div>
        <h4 class="text-dark"><i class="bi bi-exclamation-octagon text-success"></i> Account Verfication !</h4>
        <p class="m-0 pe-3">To access this website, you must first activate your account.</p>
        <p class="small">Need Help ? <a href="consumer&services.php">View Consumer
                service</a></p>
    </div>
    <div class="d-flex mt-3 mt-lg-0">
        <button id="send-email" type="button" class="btn btn-success  btn-sm mb-0 me-2">
            Send email
        </button>
        <div class="position-absolute end-0 top-0 mt-n3 me-n3">
            <button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
    </div>
</div> -->
<!-- Activate  account  alert box END -->

<?php // include("seller_levels.php"); 
?>