<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="index.php">
                <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
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
                            <li> <a class="dropdown-item" href="Sign-in.php">Sign-in</a></li>
                            <li> <a class="dropdown-item" href="sign-up.php">Sign-up</a></li>
                            <li> <a class="dropdown-item" href="forgot-password.php">Forgot Password</a></li>
                            <li> <a class="dropdown-item" href="change_pass.php">New Password</a></li>

                            <li> <a class="dropdown-item" href="blog.php">Blog</a></li>
                            <li> <a class="dropdown-item" href="single-blog">Single Blog</a></li>
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
                                            <a class="stretched-link h6 mb-0" href="partnerships.php">CreativeHub
                                                Partnerships</a>
                                            <p class="mb-0 small">Ideal for you and the top freelance marketplace for
                                                digital services worldwide.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dropdown column item -->
                                <div class="col-xl-6 col-xxl-3 mb-3">
                                    <h6 class="mb-0">Download Eduport</h6>
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
                                                src="../assets/images/element/question.png" alt="question-mark">
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

                    <!-- Nav item 5 Become a Seller -->
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php" aria-haspopup="true"
                            aria-expanded="false">Dashboard</a>
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
                                <a class="dropdown-item" href="../docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="" target="_blank">
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


                <!-- Profile and notification START -->
                <ul
                    class="nav flex-row align-items-center list-unstyled list_dropdownAtSmall ms-xl-auto  dropListAtSmall">

                    <!-- Profile dropdown START -->
                    <li class="nav-item ms-3 dropdown me-3 ms-4  media_profileSmall">
                        <!-- Avatar -->
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                            data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                        </a>

                        <!-- Profile dropdown START -->
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3 nav_profileItems"
                            aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6" href="#">Lori Ferguson</a>
                                        <p class="small m-0">@Lori3344Ferguson</p>
                                        <span
                                            class="badge bg-success bg-opacity-10 text-success rounded-0 px-3 py-2 fw-bold">$483</span>
                                    </div>
                                </div>
                            </li>
                            <!-- Links -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="dashboard.php"><i
                                        class="text-danger bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                            </li>

                            <!-- Making // selling  submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="text-warning bi bi-shop-window fa-fw me-2"></i>Seller</a>
                                <ul class="dropdown-menu dropdown-menu-start dropdownAtSmall" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="selling_orders.php"><i
                                                class="text-warning bi bi-border-style fa-fw me-2"></i>Order</a></li>
                                    <li> <a class="dropdown-item" href="proposals/view_proposals.php"><i
                                                class="text-warning bi bi-yelp fa-fw me-2"></i>View
                                            Proposal</a></li>
                                    <li> <a class="dropdown-item" href="requests/buyer_requests.php"><i
                                                class="text-warning bi bi-envelope-heart fa-fw me-2"></i>Request</a>
                                    </li>
                                    <li><a class="dropdown-item" href="revenue.php"><i
                                                class="text-warning bi bi-coin fa-fw me-2"></i>Revenue</a></li>
                                </ul>
                            </li>

                            <!-- Purchase // Buying  submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="text-info bi bi-bag-plus fa-fw me-2"></i>Purchase</a>
                                <ul class="dropdown-menu dropdown-menu-start dropdownAtSmall" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="buying_orders.php"><i
                                                class="text-info bi bi-border-style fa-fw me-2"></i>Order</a></li>
                                    <li> <a class="dropdown-item" href="purchases.php"><i
                                                class="text-info bi bi-cash-coin fa-fw me-2"></i>Payments
                                            Proposal</a></li>
                                    <li> <a class="dropdown-item" href="favourites.php"><i
                                                class="text-info bi bi-heart-half fa-fw me-2"></i>Favorite</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Request  submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="text-success bi bi-envelope-heart fa-fw me-2"></i>Request</a>
                                <ul class="dropdown-menu dropdown-menu-start dropdownAtSmall" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="requests/post_request.php"><i
                                                class="text-success bi bi-send-plus fa-fw me-2"></i>Post Request</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="requests/manage_requests.php"><i
                                                class="text-success bi bi-kanban fa-fw me-2"></i>Manage Request</a></li>
                                </ul>
                            </li>

                            <!-- Negotiations // Contacts  submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="text-orange bi bi-toggles fa-fw me-2"></i>Negotiations</a>
                                <ul class="dropdown-menu dropdown-menu-start dropdownAtSmall" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="manage_contacts.php?my_buyers"> <i
                                                class="text-orange fa-solid fa-people-carry-box pe-2"></i>My
                                            Buyers</a></li>
                                    <li> <a class="dropdown-item" href="manage_contacts.php?my_sellers"><i
                                                class="text-orange fa-solid fa-people-group pe-2"></i>My Sellers</a>
                                    </li>
                                </ul>
                            </li>


                            <li><a class="dropdown-item" href="my_referrals.php"><i
                                        class="text-purple bi bi-people-fill fa-fw me-2"></i>My Referrals </a>
                            </li>
                            <li><a class="dropdown-item" href="conversations/inbox.php"><i
                                        class="text-success opacity-10 bi bi-chat-text-fill fa-fw me-2"></i>Conversation</a>
                            </li>

                            <li><a class="dropdown-item" href="user.php"><i
                                        class="text-info opacity-10 bi bi-person-lines-fill fa-fw me-2"></i>My
                                    Profile</a>
                            </li>

                            <!-- Making // selling  submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i
                                        class="text-danger bi bi-gear fa-fw me-2"></i>Settings</a>
                                <ul class="dropdown-menu dropdown-menu-start dropdownAtSmall" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="settings.php?profile_settings"><i
                                                class="text-danger bi bi-person-lines-fill fa-fw me-2"></i>Profile
                                            Settings</a></li>
                                    <li> <a class="dropdown-item" href="settings.php?account_settings"><i
                                                class="text-danger bi bi-person-gear fa-fw me-2"></i>Account
                                            Settings</a></li>

                                </ul>
                            </li>


                            <li><a class="dropdown-item bg-danger-soft-hover" href="logout.php"><i
                                        class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Dark mode options START -->
                            <li>
                                <div
                                    class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                    <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                            <path
                                                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                            <use href="#"></use>
                                        </svg> Light
                                    </button>
                                    <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                            <path
                                                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                            <use href="#"></use>
                                        </svg> Dark
                                    </button>
                                    <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                            viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                            <use href="#"></use>
                                        </svg> Auto
                                    </button>
                                </div>
                            </li>
                            <!-- Dark mode options END-->
                        </ul>
                        <!-- Profile dropdown END -->
                    </li>

                    <!-- Add to Wishlist -->

                    <li class="nav-item ms-2 position-relative overflow-visible">
                        <!-- Favorites button -->
                        <a class="nav-link mb-0 stretched-link" href="favourites.php" role="button"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-heart fa-fw fs-4"></i>
                        </a>
                        <!-- badge -->
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-circle text-bg-success mt-2 mt-xl-3 ms-n3 smaller">3
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </li>
                    <!-- END of Wishlist -->

                    <!-- Add to cart -->
                    <li class="nav-item ms-2  position-relative overflow-visible">
                        <!-- Cart button -->
                        <a class="nav-link mb-0 stretched-link" href="cart.php" role="button" aria-expanded="false"
                            data-bs-auto-close="outside">
                            <i class="bi bi-cart2 fs-4"></i>
                        </a>
                        <!-- badge -->
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-circle text-bg-success mt-2 mt-xl-3 ms-n3 smaller">5
                            <span class="visually-hidden">unread messages</span>
                        </span>

                    </li>
                    <!-- END of Cart -->


                    <!-- Notification dropdown START -->
                    <li class="nav-item ms-2 ms-sm-3 dropdown">
                        <!-- Notification button -->
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <!-- Notification dote -->
                        <span class="notif-badge animation-blink"></span>

                        <!-- Notification dropdown menu START -->
                        <div
                            class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0 NotificationAtSmall">
                            <div class="card bg-transparent">
                                <div
                                    class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>

                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled list-group-flush">
                                        <!-- Notif item -->
                                        <li>
                                            <a href="dashboard.php?n_id"
                                                class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                <div class="me-3">
                                                    <div class="avatar avatar-md">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/08.jpg" alt="avatar">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-body small m-0">One From <b>Joan Wallace</b> Web
                                                        Development Job for<b> %50</b></p>
                                                    <u class="small">View Now</u>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                    <a href="dashboard.php" class="stretched-link">See all
                                        incoming activity</a>
                                </div>
                            </div>
                        </div>
                        <!-- Notification dropdown menu END -->
                    </li>
                    <!-- Notification dropdown END -->

                    <!-- INBOX dropdown START -->
                    <li class="nav-item ms-2 ms-sm-3 dropdown">
                        <!-- INBOX button -->
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-envelope-arrow-up fa-fw fa-fw "></i>
                        </a>
                        <!-- badge inbox -->
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1 animation-blink">2
                            <span class="visually-hidden">unread messages</span>
                        </span>



                        <!-- INBOX dropdown menu START -->
                        <div
                            class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0 NotificationAtSmall">
                            <div class="card bg-transparent">
                                <div
                                    class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Inbox Messages <span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                    <!-- <a class="small"
                                        href="conversations/inbox.php">Inbox</a> -->
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled list-group-flush">
                                        <!-- inbox item -->
                                        <li>
                                            <a href="http://CreativeHub/conversations/insert_message.php?single_message_id"
                                                class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                <div class="me-3">
                                                    <div class="avatar avatar-md">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/03.jpg" alt="avatar">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for
                                                        Gotten First Offer <b>Horaes Ltd</b></p>
                                                    <u class="small">View Now</u>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                    <a href="conversations/inbox.php" class="stretched-link">See all incoming
                                        messages</a>
                                </div>
                            </div>
                        </div>
                        <!-- INBOX dropdown menu END -->
                    </li>
                    <!-- INBOX dropdown END -->


                </ul>
                <!-- Profile and notification END -->







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
<!-- <div class="alert alert-light alert-dismissible fade show  position-fixed bottom-0 start-50 translate-middle-x z-index-99 d-lg-flex justify-content-between align-items-center shadow p-4 col-9 col-md-7 col-xxl-5" role="alert">
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
            <button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
    </div>
</div> -->
<!-- Unavailable  alert box END -->

<!-- Activate  account alert box START -->
<!-- <div class="alert alert-light alert-dismissible fade show  position-fixed bottom-0 start-50 translate-middle-x z-index-99 d-lg-flex justify-content-between align-items-center shadow p-4 col-9 col-md-7 col-xxl-5" role="alert">
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
            <button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
    </div>
</div> -->
<!-- Activate  account  alert box END -->


<?php // include("seller_levels.php");
?>