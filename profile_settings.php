<!-- Edit profile START -->
<div class="card bg-transparent border rounded-3">
    <!-- Card header -->
    <div class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center">
        <!-- Header Title -->
        <h3 class="card-header-title mb-0">Profile Settings</h3>
    </div>

    <!-- Card body START -->
    <div class="card-body">
        <!-- Form -->
        <form method="post" enctype="multipart/form-data" class="row g-4">

            <!-- Profile picture -->
            <div class="col-12 justify-content-center align-items-center">
                <label class="form-label">Profile picture</label>
                <div class="d-flex align-items-center">
                    <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                        <!-- Avatar place holder -->
                        <span class="avatar avatar-xl">
                            <img id="uploadfile-1-preview"
                                class="avatar-img rounded-circle border border-white border-3 shadow"
                                src="assets/images/avatar/07.jpg" alt="Profile Image">
                        </span>
                        <!-- Remove btn -->
                        <button type="button" class="uploadremove bg-primary"><i
                                class="bi bi-box-arrow-in-down-left text-white"></i></button>
                    </label>
                    <!-- Upload button -->
                    <label class="btn btn-primary-soft mb-0" for="uploadfile-1"><i class="bi bi-file-earmark-image"></i>
                        Upload Image</label>
                    <input id="uploadfile-1" class="form-control d-none" type="file" name="profile_photo"
                        accept="image/*">
                </div>
                <!-- Display selected image name -->
                <p id="image-info"></p>
            </div>


            <!-- Full name -->
            <div class="col-md-6">
                <label class="form-label">Full name</label>
                <div class="input-group">
                    <input type="text" name="seller_name" class="form-control" value="Lori Steven"
                        placeholder="First name" required>

                </div>
            </div>

            <!-- Username -->
            <div class="col-md-6">
                <label class="form-label">Job Profession </label>
                <div class="input-group">
                    <input type="text" name="seller_profession" class="form-control" value="Graphic Designer" required>
                </div>
            </div>



            <!-- Email id -->
            <div class="col-md-6">
                <label class="form-label">Email id</label>
                <input class="form-control" type="text" name="seller_email" value="useractive@gmail.com"
                    placeholder="Email" required>
            </div>

            <!-- Personal website -->
            <div class="col-md-6">
                <label class="form-label">Website <span class="small">(optional)</span> </label>
                <input type="text" class="form-control" name="seller_website" value="www.loristeven.com"
                    placeholder="Personal website">
            </div>

            <!-- Location -->
            <div class="col-md-6">
                <label class="form-label">Location</label>
                <input class="form-control" type="text" name="seller_country" value="California" required>
            </div>

            <!-- Years of Experience -->
            <div class="col-md-6">
                <label class="form-label">Years of Experience</label>
                <input class="form-control" type="number" name="seller_experience" value="6" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Conversational Language *</label>
                <select class="form-select js-choice" name="seller_language" aria-label=".form-select-sm" required>
                    <option value="">select language</option>
                    <option>Arabic</option>
                    <option>Bengali</option>
                    <option>Burmese</option>
                    <option>Cebuano</option>
                    <option>Chinese</option>
                    <option>Deutsch</option>
                    <option>English</option>
                    <option>Farsi</option>
                    <option>French</option>
                    <option>Gujarati</option>
                    <option>Hausa</option>
                    <option>Hindi</option>
                    <option>Indonesian</option>
                    <option>Italian</option>
                    <option>Japanese</option>
                    <option>Javanese</option>
                    <option>Kannada</option>
                    <option>Korean</option>
                    <option>Malay</option>
                    <option>Marathi</option>
                    <option>Oromo</option>
                    <option>Pashto</option>
                    <option>Polish</option>
                    <option>Portuguese</option>
                    <option>Punjabi</option>
                    <option>Russian</option>
                    <option>Spanish</option>
                    <option>Swahili</option>
                    <option>Telugu</option>
                    <option>Turkish</option>

                </select>
            </div>

            <!-- Social media profile START -->
            <div class="col-md-12">
                <div class="card bg-transparent border rounded-3">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                        <h5 class="card-header-title mb-0">Social media profile</h5>
                    </div>
                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Facebook username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-linkedin text-linkedin me-2"></i>linkedin
                                username</label>
                            <input class="form-control input-sm" name="seller_linkedin_acc" type="text" value="loristev"
                                placeholder="Enter username">
                        </div>

                        <!-- Twitter username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-twitter-x text-twitter me-2"></i>twitter-x
                                username</label>
                            <input class="form-control" type="text" name="seller_twitter_acc" value="loristev"
                                placeholder="Enter username">
                        </div>

                        <!-- Instagram username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="fab fa-instagram text-instagram-gradient me-2"></i>
                                instagram username</label>
                            <input class="form-control" type="text" name="seller_instagram_acc" value="loristev"
                                placeholder="Enter username">
                        </div>

                        <!-- Instagram username -->
                        <div class="mb-3">
                            <label class="form-label"><i class="bi bi-behance text-twitter me-2"></i> behance
                                username</label>
                            <input class="form-control" type="text" name="seller_behance_acc" value="loristev"
                                placeholder="Enter username">
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Social media profile END -->

            <!-- About me -->
            <div class="col-12">
                <label class="form-label">About me</label> <small class="form-text">(Brief
                    description for your profile.)</small>
                <textarea class="form-control" name="seller_about" id="textarea-about" maxlength="300"
                    rows="3"></textarea>
                <small class="count-about"> 0 </small> / <small>300 MAX</small>
            </div>

            <!-- Save button -->
            <div class="d-sm-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary mb-0"><i class="bi bi-cloud-arrow-up"></i>
                    Save
                    changes</button>
            </div>
        </form>
    </div>
    <!-- Card body END -->
</div>
<!-- Edit profile END -->