<style>
.dropdown .dropdown-toggle:after {
    content: "\f141";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    vertical-align: middle;
    border: none;
    float: right;
}
</style>

<div class="col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
        <!-- Offcanvas header -->
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">User Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar"
                aria-label="Close"></button>
        </div>
        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-xl-0">
            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                <!-- Dashboard menu -->
                <div class="list-group list-group-dark list-group-borderless">
                    <a class="list-group-item" href="dashboard.php"><i
                            class="text-danger bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>

                    <!-- Dropdown for Marking -->
                    <div class="list-group-item dropdown">
                        <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-warning bi bi-shop-window fa-fw me-2"></i>Seller
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                            <li><a class="dropdown-item" href="selling_orders.php"><i
                                        class="text-warning bi bi-border-style fa-fw me-2"></i>Order</a></li>
                            <li><a class="dropdown-item" href="../proposals/view_proposals.php"><i
                                        class="text-warning bi bi-yelp fa-fw me-2"></i>View Proposal</a></li>
                            <li><a class="dropdown-item" href="../requests/buyer_requests.php"><i
                                        class="text-warning bi bi-envelope-heart fa-fw me-2"></i>Request</a></li>
                            <li><a class="dropdown-item" href="revenue.php"><i
                                        class="text-warning bi bi-coin fa-fw me-2"></i>Revenue</a></li>
                        </ul>
                    </div>

                    <!-- Dropdown for Purchase -->
                    <div class="list-group-item dropdown">
                        <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-info bi bi-bag-plus fa-fw me-2"></i>Purchase
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                            <li><a class="dropdown-item" href="buying_orders.php"><i
                                        class="text-info bi bi-border-style fa-fw me-2"></i>Order</a></li>
                            <li><a class="dropdown-item" href="purchases.php"><i
                                        class="text-info bi bi-cash-coin fa-fw me-2"></i>Payments</a></li>
                            <li><a class="dropdown-item" href="favourites.php"><i
                                        class="text-info bi bi-heart-half fa-fw me-2"></i>Favorite</a></li>
                        </ul>
                    </div>

                    <!-- Dropdown for Request -->
                    <div class="list-group-item dropdown">
                        <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-success bi bi-envelope-heart fa-fw me-2"></i>Request
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                            <li><a class="dropdown-item" href="../requests/post_request.php"><i
                                        class="text-success bi bi-send-plus fa-fw me-2"></i>Post Request</a></li>
                            <li><a class="dropdown-item" href="../requests/manage_requests.php"><i
                                        class="text-success bi bi-kanban fa-fw me-2"></i>Manage Request</a></li>
                        </ul>
                    </div>

                    <!-- Dropdown for Request -->
                    <div class="list-group-item dropdown">
                        <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-orange bi bi-toggles fa-fw me-2"></i>Negotiations
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                            <li><a class="dropdown-item" href="../manage_contacts.php?my_buyers">
                                    <i class="text-orange fa-solid fa-people-carry-box pe-1"></i>My
                                    Buyers</a></li>
                            <li><a class="dropdown-item" href="../manage_contacts.php?my_sellers"><i
                                        class="text-orange fa-solid fa-people-group pe-1"></i>My Sellers</a></li>
                        </ul>
                    </div>
                    <a class="list-group-item" href="my_referrals.php"><i
                            class="text-purple bi bi-people-fill fa-fw me-2"></i>My Referrals</a>
                    <a class="list-group-item" href="../conversations/inbox.php"><i
                            class="text-success opacity-10 bi bi-chat-text-fill fa-fw me-2"></i>Conversation</a>
                    <a class="list-group-item" href="../user.php"><i
                            class="text-info opacity-10 bi bi-person-lines-fill fa-fw me-2"></i>My
                        Profile</a>
                    <!-- Dropdown for Settings -->
                    <div class="list-group-item dropdown">
                        <div class="dropdown-toggle" href="#" id="earningDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-danger bi bi-gear fa-fw me-2"></i>Settings
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="earningDropdown">
                            <li><a class="dropdown-item" href="settings.php?profile_settings">
                                    <i class="text-danger bi bi-person-lines-fill fa-fw me-2"></i>Profile
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="settings.php?account_settings"><i
                                        class="text-danger bi bi-person-gear fa-fw me-2"></i>Account
                                    Settings</a></li>
                        </ul>
                    </div>
                    <a class="list-group-item  bg-danger-soft-hover" href="#!"><i
                            class="fas fa-sign-out-alt fa-fw me-2"></i>Sign out</a>
                </div>
                <div id="extwaiokist" style="display:none" v="nipgg" q="b7567393" c="288.3" i="297" u="3.296"
                    s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe="
                    vn="9adfy">
                    <div id="extwaigglbit" style="display:none" v="nipgg" q="b7567393" c="288.3" i="297" u="3.296"
                        s="05202423" sg="svr_09102316-ga_05202423-bai_05232420" d="1" w="false" e="" a="3" m="BMe=">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive offcanvas body END -->
</div>