<!-- Edit profile START -->
<div class="card bg-transparent border rounded-3">
    <!-- Card header -->
    <div class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center">
        <!-- Header Title -->
        <h3 class="card-header-title mb-0">Profile Settings</h3>
    </div>

    <div class="row g-4 mt-3">
        <!-- Linked account START -->
        <div class="col-lg-6">
            <div class="card bg-transparent border rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom d-flex justify-content align-items-center">
                    <h5 class="card-header-title mb-0">Linked account</h5>
                    <span class="small text-danger ms-2">(These features will be released shortly)</span>
                </div>
                <!-- Card body START -->
                <div class="card-body pb-0">
                    <!-- Google -->
                    <div class="position-relative mb-4 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                        <!-- Title and content -->
                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i>
                        </h2>
                        <div>
                            <div class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            </div>
                            <h6 class="mb-1">Google</h6>
                            <p class="mb-1 small">You are successfully connected to your Google
                                account</p>
                            <!-- Button -->
                            <button type="button" class="btn btn-sm btn-danger mb-0" disabled>Invoke</button>
                            <a href="coming-soon.html" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                        </div>
                    </div>

                    <!-- Linkedin -->
                    <div class="mb-4 d-sm-flex border p-3 rounded">
                        <!-- Title and content -->
                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-linkedin-in text-linkedin"></i>
                        </h2>
                        <div>
                            <h6 class="mb-1">Linkedin</h6>
                            <p class="mb-1 small">Connect with Linkedin account for a personalized
                                experience</p>
                            <!-- Button -->
                            <button type="button" class="btn btn-sm btn-primary mb-0" disabled>Connect Linkedin</button>

                            <a href="coming-soon.html" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                        </div>
                    </div>

                    <!-- Facebook -->
                    <div class="mb-4 d-sm-flex border p-3 rounded">
                        <!-- Title and content -->
                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i>
                        </h2>
                        <div>
                            <h6 class="mb-1">Facebook</h6>
                            <p class="mb-1 small">Connect with Facebook account for a personalized
                                experience</p>
                            <!-- Button -->
                            <button type="button" class="btn btn-sm btn-primary mb-0" disabled>Connect
                                Facebook</button>
                            <a href="coming-soon.html" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                        </div>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Linked account end -->

        <!-- Password change START -->
        <div class="col-lg-6">
            <div class="card border bg-transparent rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="card-header-title mb-0">Update password</h5>
                </div>
                <!-- Card body START -->
                <div class="card-body">
                    <!-- Current password -->
                    <div class="mb-3">
                        <label class="form-label">Current password</label>
                        <input class="form-control" type="password" name="old_pass" placeholder="Enter current password">
                    </div>
                    <!-- New password -->
                    <div class="mb-3">
                        <label class="form-label"> Enter new password</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="new_pass" placeholder="Enter new password">
                            <span class="input-group-text p-0 bg-transparent">
                                <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                            </span>
                        </div>
                        <div class="rounded mt-1" id="psw-strength"></div>
                    </div>

                    <!-- New password -->
                    <div class="mb-3">
                        <label class="form-label"> Confirm new password</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="new_pass_again" placeholder="Enter new password">
                            <span class="input-group-text p-0 bg-transparent">
                                <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                            </span>
                        </div>
                        <div class="rounded mt-1" id="psw-strength"></div>
                    </div>

                    <!-- Button -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" name="change_password" class="btn btn-primary mb-0"><i class="bi bi-person-lock"></i> Change
                            password</button>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Password change end -->



        <!-- EMail change START -->
        <div class="col-lg-6">
            <div class="card bg-transparent border rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="card-header-title mb-0">Update Paypal email</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <p>Your current email address is <span class="text-primary">Paypal@gmail.com</span></p>
                    <!-- Email -->
                    <form method="post">
                        <label class="form-label">Enter your new paypal email</label>
                        <input class="form-control" type="text" name="seller_paypal_email" value="fixmywebsite@computerfever.com" placeholder="Enter Paypal Email Address Where Your Revenues Sent To">
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" name="submit_paypal_email" class="btn btn-primary mb-0"><i class="bi bi-paypal"></i>Email Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- EMail change end -->

        <!-- Delete Account change START -->
        <div class="col-lg-6">
            <div class="card bg-transparent border rounded-3">
                <!-- Card header -->
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="card-header-title mb-0">Deactivate Account</h5>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <div class=" mt-3">
                        <!-- Answer options -->
                        <h6>What happens when you deactivate your account?</h6>
                        <p class="small mb-3"><b class="text-dark"><i class="bi bi-arrow-down-right text-danger pb-2"></i></b>
                            Your profile and proposals won't be shown on CreativeHub anymore.</p>
                        <p class="small mb-3"><b class="text-dark"><i class="bi bi-arrow-down-right text-danger pb-2"></i></b>
                            You won't be able to re-activate your proposals.</p>
                        <p class="small mb-3"><b class="text-dark"><i class="bi bi-arrow-down-right text-danger pb-2"></i></b>
                            You won't be able to re-activate your proposals.</p>
                        <p class="small mb-3"><b class="text-dark"><i class="bi bi-arrow-down-right text-danger pb-2"></i></b>You won't be able to restore
                            your account.</p>

                    </div>
                    <form method="post" class="mt-2">
                        <label class="form-label"> Why Are You Leaving?</label>
                        <select class="form-select js-choice" name="deactivate_reason" aria-label=".form-select-sm" required>
                            <option class="hidden"> Choose A Reason </option>
                            <option> The quality of service was less than expected </option>
                            <option>I have no time to use it</option>
                            <option>I can’t find what I am looking for</option>
                            <option>I had a negative experience with a seller / buyer</option>
                            <option>I found the site difficult to use</option>
                            <option>The level of customer service was less than expected</option>
                            <option>I have another Computerfever account</option>
                            <option>I'm not receiving enough orders</option>
                            <option>Other Resoing</option>
                        </select>

                        <button type="submit" name="deactivate_account" class="btn btn-danger-soft mb-0 my-2">Deactivate</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Account change end -->


    </div>
</div>
<!-- Edit profile END -->