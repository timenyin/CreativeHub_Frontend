<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2 mb-4" role="alert">
        <!-- Avatar -->
        <div class="d-flex align-items-center">
            <div class="ps-4">

                <h6 class="pt-2">REVISION REQUESTED</h6>
            </div>
        </div>
        <!-- Info -->
        <div class="d-flex align-items-center d-none d-md-flex">
            <div class="px-4">
                <span class="badge bg-success bg-opacity-10 text-success rounded  fw-bolder">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Still Active" data-bs-original-title="Still Active" class="btn btn-sm btn-success-soft btn-round me-1 mb-0" aria-describedby="tooltip155984"><i class="fa-solid fa-blog fa-fade" style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;" aria-hidden="true"></i></div>
                    <span class="px-1">Still Active...</span>
                </span>

            </div>
        </div>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="comment-item">
            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-sm flex-shrink-0">
                    <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                </div>
                <div class="ms-2">
                    <!-- Comment by -->
                    <div class="bg-light p-3 rounded">
                        <div class="d-flex justify-content-start">
                            <div class="me-2">
                                <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                    <div>Frances Guerrero</div>
                                    <small class="">05:18 Dec
                                        05 223</small>
                                </h6>
                                <p class="h6 mb-0">Hello, i'm Frances Please do this work,i have attached the file.</p>
                                <a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>
                                    <i class="fa fa-download"></i> attachment.txt</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Comment item nested START -->
            <ul class="list-unstyled ms-4">
                <!-- Comment item START -->
                <li class="comment-item">
                    <div class="d-flex">
                        <!-- Avatar -->
                        <div class="avatar avatar-xs flex-shrink-0">
                            <a href="#"><img class="avatar-img rounded-circle" src="user_images/05.jpg" alt=""></a>
                        </div>
                        <!-- Comment by -->
                        <div class="ms-2">
                            <div class="bg-light p-3 rounded">
                                <div class="d-flex justify-content-start">
                                    <div class="me-2">
                                        <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                            <div> Lori Stevens </div> &nbsp;&nbsp;&nbsp;
                                            <small class=""> 05:18 Dec
                                                05 223</small>
                                        </h6>
                                        <p class=" mb-0">is the work okay</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <!-- Comment item END -->
            </ul>
            <!-- Comment item nested END -->
        </li>
    </ul>
</div>

<!-- =========ORDER DELIVERED =============== -->
<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <div class="alert alert-primary alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2 mb-4" role="alert">
        <!-- Avatar -->
        <div class="d-flex align-items-center">
            <div class="ps-4">

                <h6 class="pt-2">ORDER DELIVERED</h6>
            </div>
        </div>
        <!-- Info -->
        <div class="d-flex align-items-center d-none d-md-flex">
            <div class="px-4">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded  fw-bolder">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Still Active" data-bs-original-title="Still Active" class="btn btn-sm btn-primary-soft btn-round me-1 mb-0" aria-describedby="tooltip155984"><i class="fa-solid fa-cart-arrow-down fa-fade" style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;" aria-hidden="true"></i></div>
                    <span class="px-1">Delivered...</span>
                </span>

            </div>
        </div>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="comment-item">
            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-sm flex-shrink-0">
                    <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                </div>
                <div class="ms-2">
                    <!-- Comment by -->
                    <div class="bg-light p-3 rounded">
                        <div class="d-flex justify-content-start">
                            <div class="me-2">
                                <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                    <div>Frances Guerrero</div>
                                    <small class="">05:18 Dec
                                        05 223</small>
                                </h6>
                                <p class="h6 mb-0">Hello, i'm Frances Please do this work,i have attached the file.</p>
                                <a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>
                                    <i class="fa fa-download"></i> attachment.txt</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul>
</div>
<!-- confirmation bu the seller -->
<?php if (isset($_GET["buying_order"])) { ?>
    <form class="mb-2 mt-3" method="post">
        <input type="hidden" name="conversation_id" value="">
        <div class="d-sm-flex align-items-center justify-content-center">
            <button type="submit" name="complete" class="btn btn-lg btn-primary me-2 mb-4 mb-sm-0">Accept & Review
                Order</button>

            <div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">
                <button type="button" class="btn btn-lg btn-info me-2 mb-4 mb-sm-0" data-bs-toggle="modal" data-bs-target="#revision-request-modal">
                    Request Revision</button>
            </div>
        </div>
    </form>
<?php } ?>


<!-- ========= Revision Requested By Seller =============== -->
<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <div class="alert alert-warning alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2 mb-4" role="alert">
        <!-- Avatar -->
        <div class="d-flex align-items-center">
            <div class="ps-4">

                <h6 class="pt-2">REVISION REQUESTED by (Lori Stevens)</h6>
            </div>
        </div>
        <!-- Info -->
        <div class="d-flex align-items-center d-none d-md-flex">
            <div class="px-4">
                <span class="badge bg-warning bg-opacity-10 text-warning rounded  fw-bolder">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Still Active" data-bs-original-title="Still Active" class="btn btn-sm btn-warning-soft btn-round me-1 mb-0" aria-describedby="tooltip155984"><i class="fa-solid fa-blog fa-fade" style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;" aria-hidden="true"></i></div>
                    <span class="px-1">Still Active...</span>
                </span>

            </div>
        </div>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="comment-item">
            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-sm flex-shrink-0">
                    <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                </div>
                <div class="ms-2">
                    <!-- Comment by -->
                    <div class="bg-light p-3 rounded">
                        <div class="d-flex justify-content-start">
                            <div class="me-2">
                                <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                    <div>Frances Guerrero</div>
                                    <small class="">05:18 Dec
                                        05 223</small>
                                </h6>
                                <p class="h6 mb-0">Hello, i'm Frances Please do this work,i have attached the file.</p>
                                <a href="order_files/attachment.txt" class="d-block mt-2 ml-1" download>
                                    <i class="fa fa-download"></i> attachment.txt</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul>
</div>

<!-- =========CANCELLATION REQUESTED =============== -->
<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mt-2 mb-0 rounded-3 pe-2 py-2 mb-4" role="alert">
        <!-- Avatar -->
        <div class="d-flex align-items-center">
            <div class="ps-4">
                <h6 class="pt-2">CANCELLATION REQUESTED</h6>
            </div>
        </div>
        <!-- Info -->
        <div class="d-flex align-items-center d-none d-md-flex">
            <div class="px-4">
                <span class="badge bg-danger bg-opacity-10 text-danger rounded  fw-bolder">
                    <div data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Still Active" data-bs-original-title="Still Active" class="btn btn-sm btn-danger-soft btn-round me-1 mb-0" aria-describedby="tooltip155984"><i class="fa-solid fa-handshake-simple-slash fa-fade" style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;" aria-hidden="true"></i></div>
                    <span class="px-1">Cancelled...</span>
                </span>

            </div>
        </div>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="comment-item">
            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-sm flex-shrink-0">
                    <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                </div>
                <div class="ms-2">
                    <!-- Comment by -->
                    <div class="bg-light p-3 rounded">
                        <div class="d-flex justify-content-start">
                            <?php if (isset($_GET["selling_order"])) { ?>
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec 05 223</small>
                                    </h6>
                                    <p class="h6 mb-0">Hello, i'm Frances Please i want to Cancel the Order </p>
                                    <form class="mb-2 mt-3" method="post">
                                        <div class="d-sm-flex align-items-center justify-content-center">
                                            <button name="accept_request" class="btn btn-lg btn-warning me-2 mb-4 mb-sm-0">Accept Request</button>

                                            <div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">
                                                <button class="btn btn-lg btn-danger me-2 mb-4 mb-sm-0">
                                                    Decline Request</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php } elseif (isset($_GET["buying_order"])) { ?>
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec 05 223</small>
                                    </h6>
                                    <p class="h6 mb-0">Hello, i'm Frances Please i want to Cancel the Order </p>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul>
</div>





<!-- =============== ORDER CANCELLATION REQUEST Buyer  ================ -->
<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <?php if (isset($_GET['selling_order'])) { ?>
        <ul class="list-unstyled mb-0">
            <li class="comment-item">
                <div class="d-flex mb-3">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm flex-shrink-0">
                        <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                    </div>
                    <div class="ms-2">
                        <!-- Comment by -->
                        <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-start">
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec
                                            05 223</small>
                                    </h6>
                                    <h6 class="h6  mb-0">Hello, i'm Frances I Want To Cancel This Order.</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Comment item nested START -->
                <ul class="list-unstyled ms-4">
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-end">
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                            </h6>
                                            <h6 class="text-danger test-center mb-0"><i class="bi bi-info-circle"></i>
                                                Cancellation Request Declined By Seller</h6>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Comment item END -->
                </ul>
                <!-- Comment item nested END -->
            </li>
        </ul>
    <?php } elseif (isset($_GET["buying_order"])) { ?>
        <ul class="list-unstyled mb-0">
            <li class="comment-item">
                <div class="d-flex mb-3">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm flex-shrink-0">
                        <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                    </div>
                    <div class="ms-2">
                        <!-- Comment by -->
                        <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-start">
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec
                                            05 223</small>
                                    </h6>
                                    <h6 class="h6  mb-0">Hello, i'm Frances I Want To Cancel This Order.</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Comment item nested START -->
                <ul class="list-unstyled ms-4">
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-end">
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between">
                                            </h6>
                                            <h6 class="text-danger test-center mb-0"><i class="bi bi-info-circle"></i>
                                                Cancellation Request Declined By lori Stevens</h6>
                                            <small> Your Seller Decline the request to manually cancel this order. <br> For
                                                further
                                                assistance please visit our <a class="text-warning" href="consumer&amp;services.php"> Customer
                                                    Support .</a> </small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Comment item END -->
                </ul>
                <!-- Comment item nested END -->
            </li>
        </ul>
    <?php } ?>
</div>

<!--  ORDER CANCELLATION REQUEST Cancelled By Mutual Agreement & company -->
<div class="border p-2 p-sm-4 rounded-3 mb-4">
    <ul class="list-unstyled mb-0">
        <?php if (isset($_GET['selling_order'])) { ?>
            <li class="comment-item">
                <div class="d-flex mb-3">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm flex-shrink-0">
                        <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                    </div>
                    <div class="ms-2">
                        <!-- Comment by -->
                        <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-start">
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec
                                            05 223</small>
                                    </h6>
                                    <p class="h6 mb-0">Hello, i'm Frances I Want To Cancel This Order.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Comment item nested START -->
                <ul class="list-unstyled ms-4">
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-end">
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                            </h6>
                                            <h6 class="text-danger mb-0"><i class="bi bi-info-circle"></i> Cancellation
                                                Request Declined By Seller</h6>
                                            <small class="fw-bold">Order Was Cancelled By Mutual Agreement Between You
                                                And Your Buyer. <br>
                                                The Order Funds Have Been Returned To Buyer.</small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Comment item END -->
                </ul>
                <!-- Comment item nested END -->

            <?php } elseif (isset($_GET["buying_order"])) { ?>
            <li class="comment-item">
                <div class="d-flex mb-3">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm flex-shrink-0">
                        <a href="#"><img class="avatar-img rounded-circle" src="user_images/07.jpg" alt=""></a>
                    </div>
                    <div class="ms-2">
                        <!-- Comment by -->
                        <div class="bg-light p-3 rounded">
                            <div class="d-flex justify-content-start">
                                <div class="me-2">
                                    <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                        <div>Frances Guerrero</div>
                                        <small class="">05:18 Dec
                                            05 223</small>
                                    </h6>
                                    <p class="h6 mb-0">Hello, i'm Frances I Want To Cancel This Order.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Comment item nested START -->
                <ul class="list-unstyled ms-4">
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-end">
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 py-2 fw-bold d-flex justify-content-between align-items-center">
                                            </h6>
                                            <h6 class="text-danger mb-0"><i class="bi bi-info-circle"></i> Cancellation
                                                Request Declined By Seller</h6>
                                            <small class="fw-bold">Order Was Cancelled By Mutual Agreement Between You
                                                And Your Seller. <br>
                                                The Order Funds Have Been Returned To Buyer.</small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Comment item END -->
                </ul>
                <!-- Comment item nested END -->

            <?php } ?>



            <!-- Comment item nested START -->
            <ul class="list-unstyled ms-4 mt-2">
                <?php if (isset($_GET['selling_order'])) { ?>
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-sm flex-shrink-0">
                                <a href="#"><img class="avatar-img rounded-circle" src="assets/images/payment_icon.svg" alt="logo_company"></a>
                            </div>
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 pb-2 fw-bold d-flex justify-content-between align-items-center">
                                            </h6>
                                            <h6 class="text-danger mb-0"><i class="bi bi-info-circle"></i> Order Cancelled
                                                By
                                                Customer Support.</h6>
                                            <small class="fw-bold">Payment For This Order Was Refunded To Buyer Shopping
                                                Balance.<br>
                                                For Further Assistance , Please Visit Our <a class="text-warning" href="consumer&services.php"> Customer
                                                    Support .</a></small>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- Comment item END -->
                <?php } elseif (isset($_GET["buying_order"])) { ?>
                    <!-- Comment item START -->
                    <li class="comment-item">
                        <div class="d-flex justify-content-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-sm flex-shrink-0">
                                <a href="#"><img class="avatar-img rounded-circle" src="assets/images/payment_icon.svg" alt="logo_company"></a>
                            </div>
                            <!-- Comment by -->
                            <div class="ms-2">
                                <div class="bg-light p-3 rounded">
                                    <div class="d-flex justify-content-start">
                                        <div class="me-2">
                                            <h6 class="mb-3 pb-2 fw-bold d-flex justify-content-between align-items-center">
                                            </h6>
                                            <h6 class="text-danger mb-0"><i class="bi bi-info-circle"></i> Order Cancelled
                                                By
                                                Customer Support.</h6>
                                            <small class="fw-bold">Payment For This Order Was Refunded To Shopping
                                                Balance.<br>
                                                <a class="text-warning" href="revenue.php">View
                                                    Account Balance.</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <!-- Comment item nested END -->
            </li>
    </ul>
</div>