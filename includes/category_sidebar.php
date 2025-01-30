                <!-- Select option -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <!-- Category START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <!-- Category group -->
                        <div class="col-12">
                            <!-- Collapse button -->
                            <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center text-secondary"
                                data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                                aria-expanded="false" aria-controls="multiCollapseExample1">
                                See <span class="see-more ms-1">Category</span><span class="see-less ms-1">less</span>
                                <span class="ms-auto">
                                    <i class="fas fa-angle-down ms-2"></i>
                                </span>
                            </a>
                            <!-- Collapse body -->
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body p-0">

                                    <ul class="nav flex-column" id="proposal_category">
                                        <!--- nav flex-column Starts -->

                                        <li class="nav-item">
                                            <!-- nav-item Starts -->
                                            <span class="nav-link active">
                                                <!-- nav-link active Starts -->
                                                <span data-bs-toggle="collapse" data-bs-target="#cat_1">
                                                    <a class="cat_category active" href="#">Graphic Design</a>
                                                    <i class="fas fa-angle-down cat_category"></i>
                                                </span>
                                            </span><!-- nav-link active Ends -->
                                            <ul id="cat_1" class="collapse">
                                                <!-- collapse Starts -->
                                                <li style="list-style: none;" class="cat_category_min">
                                                    <a class="nav-link active" href="category.php?cat_child_id"><i
                                                            class="fa-solid fa-angle-right"></i>&nbsp;Logo
                                                        Design</a>
                                                </li>
                                                <li style="list-style: none;" class="cat_category_min">
                                                    <a class="nav-link" href="category.php?cat_child_id"><i
                                                            class="fa-solid fa-angle-right"></i>&nbsp;Logo
                                                        Design</a>
                                                </li>
                                            </ul><!-- collapse Ends -->
                                        </li><!-- nav-item Ends -->

                                        <li class="nav-item">
                                            <!-- nav-item Starts -->
                                            <span class="nav-link active">
                                                <!-- nav-link active Starts -->
                                                <span data-bs-toggle="collapse" data-bs-target="#cat_2">
                                                    <a class="cat_category" href="#">Photoshop Design</a>
                                                    <i class="fas fa-angle-down cat_category"></i>
                                                </span>
                                            </span><!-- nav-link active Ends -->
                                            <ul id="cat_2" class="collapse">
                                                <!-- collapse Starts -->
                                                <li style="list-style: none;" class="cat_category_min">
                                                    <a class="nav-link" href="category.php?cat_child_id"><i
                                                            class="fa-solid fa-angle-right"></i>&nbsp; Logo
                                                        Design</a>
                                                </li>
                                                <li style="list-style: none;" class="cat_category_min">
                                                    <a class="nav-link" href="category.php?cat_child_id"><i
                                                            class="fa-solid fa-angle-right"></i>&nbsp; Logo
                                                        Design</a>
                                                </li>
                                            </ul><!-- collapse Ends -->
                                        </li><!-- nav-item Ends -->


                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Category END -->
                </div>


                <!-- --------- Select Levels ------- -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <!-- Category START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <button class="btn btn-sm btn_slidbar float-right clear_seller_level clearlink"
                            onclick="clearLevel()">
                            <i class="fa fa-times-circle"></i> Clear Filter
                        </button>
                        <!-- Category group -->
                        <div class="col-12">
                            <!-- Collapse button -->
                            <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center text-secondary"
                                data-bs-toggle="collapse" href="#multiCollapseExample2" role="button"
                                aria-expanded="false" aria-controls="multiCollapseExample2">
                                See <span class="see-more ms-1">Levels</span><span class="see-less ms-1">less</span>
                                <span class="ms-auto">
                                    <i class="fas fa-angle-down ms-2"></i>
                                </span>
                            </a>
                            <!-- Collapse body -->
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body p-0">

                                    <!-- Category group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input get_seller_level" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label form-check_style"
                                                    for="flexCheckDefault9">Level 1</label>
                                            </div>

                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input get_seller_level" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label form-check_style"
                                                    for="flexCheckDefault9">Level 2</label>
                                            </div>

                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input get_seller_level" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label form-check_style"
                                                    for="flexCheckDefault9">Level 3</label>
                                            </div>

                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input get_seller_level" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label form-check_style"
                                                    for="flexCheckDefault9">Level 4</label>
                                            </div>

                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input get_seller_level" type="checkbox"
                                                    value="1" id="flexCheckDefault17">
                                                <label class="form-check-label form-check_style"
                                                    for="flexCheckDefault17">Level 5</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Category END -->
                </div>


                <!-- --------- Delivery Time  ------- -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <!-- Category START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <button class="btn btn-sm btn_slidbar float-right clear_delivery_time clearlink"
                            onclick="clearDelivery()">
                            <i class="fa fa-times-circle"></i> Clear Filter
                        </button>
                        <!-- Category group -->
                        <div class="col-12">
                            <!-- Collapse button -->
                            <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center text-secondary"
                                data-bs-toggle="collapse" href="#multiCollapseExample3" role="button"
                                aria-expanded="false" aria-controls="multiCollapseExample3">
                                See <span class="see-more ms-1">Delivery Time</span><span
                                    class="see-less ms-1">less</span>
                                <span class="ms-auto">
                                    <i class="fas fa-angle-down ms-2"></i>
                                </span>
                            </a>
                            <!-- Collapse body -->
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body p-0">

                                    <!-- Category group -->
                                    <ul class="list-inline mb-0">
                                        <!-- Days -->
                                        <li class="list-inline-item">
                                            <input type="checkbox" class="btn-check get_delivery_time" name="options"
                                                id="option2">
                                            <label class="btn btn-light btn-primary-soft-check" for="option2">24
                                                Hours</label>
                                        </li>
                                        <!-- Days -->
                                        <li class="list-inline-item">
                                            <input type="checkbox" class="btn-check get_delivery_time" name="options"
                                                id="option3">
                                            <label class="btn btn-light btn-primary-soft-check" for="option3">3 Days
                                            </label>
                                        </li>

                                        <!-- Days -->
                                        <li class="list-inline-item">
                                            <input type="checkbox" class="btn-check get_delivery_time" name="options"
                                                id="option5">
                                            <label class="btn btn-light btn-primary-soft-check" for="option5">5 Days
                                            </label>
                                        </li>

                                        <!-- Days -->
                                        <li class="list-inline-item">
                                            <input type="checkbox" class="btn-check get_delivery_time" name="options"
                                                id="option4">
                                            <label class="btn btn-light btn-primary-soft-check" for="option4">7
                                                Days</label>
                                        </li>

                                        <!-- Days -->
                                        <li class="list-inline-item">
                                            <input type="checkbox" class="btn-check get_delivery_time" name="options"
                                                id="option4">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="option4">Anytime</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Category END -->
                </div>



                <!-- ---------  Select Language  ------- -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <!-- Category START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <button class="btn btn-sm btn_slidbar float-right clear_seller_language clearlink"
                            onclick="clearLanguage()">
                            <i class="fa fa-times-circle"></i> Clear Filter
                        </button>
                        <!-- Category group -->
                        <div class="col-12">
                            <!-- Collapse button -->
                            <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center text-secondary"
                                data-bs-toggle="collapse" href="#multiCollapseExample4" role="button"
                                aria-expanded="false" aria-controls="multiCollapseExample4">
                                See <span class="see-more ms-1">Language</span><span class="see-less ms-1">less</span>
                                <span class="ms-auto">
                                    <i class="fas fa-angle-down ms-2"></i>
                                </span>
                            </a>
                            <!-- Collapse body -->
                            <div class="collapse multi-collapse" id="multiCollapseExample4">
                                <div class="card card-body p-0">

                                    <!-- Category group -->
                                    <ul class="list-inline mb-0 g-3">
                                        <li class="list-inline-item">
                                            <input type="checkbox" value="1" class="btn-check get_seller_language"
                                                name="options" id="btn-check-1">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-1">English</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" value="1" class="btn-check get_seller_language"
                                                id="btn-check-3">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-3">Francas</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" value="1" class="btn-check get_seller_language"
                                                id="btn-check-4">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-4">Hindi</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" value="1" class="btn-check get_seller_language"
                                                id="btn-check-5">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-5">Russian</label>
                                        </li>

                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" value="1" class="btn-check get_seller_language"
                                                id="btn-check-6">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-6">Spanish</label>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Category END -->
                </div>



                <div class="col-sm-6 col-xl-3">
                    <!-- Online seller START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <!-- Checkbox -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input get_online_sellers" type="checkbox" value="1">
                                <label class="form-check-label form-check_style" for="flexCheckDefault9">Online
                                    Sellers</label>
                            </div>
                            <span class="small"><img src="assets/images/client/emotions.svg" alt=""></span>
                        </div>
                    </div>
                </div>

                <!-- Online seller  -->


                <!-- Pro seller START -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Pro seller START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <!-- Checkbox -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input get_pro_sellers" type="checkbox" value="1">
                                <label class="form-check-label form-check_style" for="flexCheckDefault9">Pro
                                    Sellers</label>
                            </div>
                            <span class="small"><img src="assets/images/client/vip-card.svg" alt=""></span>
                        </div>
                    </div>
                </div>

                <!-- Certified bar -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Certified seller START -->
                    <div class="card card-body shadow p-4 mb-4">
                        <!-- Checkbox -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input get_certified_sellers" type="checkbox" value="1">
                                <label class="form-check-label form-check_style" for="flexCheckDefault9">Certified
                                    professionals</label>
                            </div>
                            <span class="small"><img src="assets/images/client/award.svg" alt=""></span>
                        </div>
                    </div>
                </div>