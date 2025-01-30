 <!-- Responsive offcanvas body START -->
 <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
     <div class="offcanvas-header bg-light">
         <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Advance Filter</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body p-3 p-lg-0">
         <div>
             <!-- Online seller START -->
             <div class="card card-body shadow p-4 mb-4">
                 <!-- Checkbox -->
                 <div class="d-flex justify-content-between align-items-center">
                     <div class="form-check">
                         <input class="form-check-input get_online_sellers" type="checkbox" value="1">
                         <label class="form-check-label form-check_style" for="flexCheckDefault9">Online Sellers</label>
                     </div>
                     <span class="small"><img src="assets/images/client/emotions.svg" alt=""></span>
                 </div>
             </div>
             <!-- Online seller END -->
             <!-- Category START -->
             <div class="card card-body shadow p-4 mb-4">
                 <!-- Title -->
                 <h4 class="mb-3">Category</h4>
                 <button class="btn btn-sm btn_slidbar float-right clear_cat_id clearlink" onclick="clearCat()">
                     <i class="fa fa-times-circle"></i> Clear Filter
                 </button>
                 <!-- Category group -->
                 <div class="col-12">
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Graphics &
                                 Design</label>
                         </div>
                         <span class="small">(365)</span>
                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Data
                                 Science</label>
                         </div>
                         <span class="small">(65)</span>
                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Web
                                 Development</label>
                         </div>
                         <span class="small">(15)</span>
                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Finance</label>
                         </div>
                         <span class="small">(8)</span>
                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Marketing</label>
                         </div>
                         <span class="small">(18)</span>
                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">AI
                                 Services</label>
                         </div>
                         <span class="small">(90)</span>
                     </div>

                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Accounting</label>
                         </div>
                         <span class="small">(90)</span>
                     </div>

                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_cat_id" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Photography</label>
                         </div>
                         <span class="small">(110)</span>
                     </div>


                 </div>
             </div>
             <!-- Category END -->



             <!--  Delivery Time  -->
             <div class="card card-body shadow p-4 mb-4">
                 <!-- Title -->
                 <h4 class="mb-3">Price Level</h4>
                 <button class="btn btn-sm btn_slidbar float-right clear_delivery_time clearlink" onclick="clearDelivery()">
                     <i class="fa fa-times-circle"></i> Clear Filter
                 </button>
                 <ul class="list-inline mb-0">
                     <!-- Days -->
                     <li class="list-inline-item">
                         <input type="checkbox" class="btn-check get_delivery_time" name="options" id="option2">
                         <label class="btn btn-light btn-primary-soft-check" for="option2">24 Hours</label>
                     </li>
                     <!-- Days -->
                     <li class="list-inline-item">
                         <input type="checkbox" class="btn-check get_delivery_time" name="options" id="option3">
                         <label class="btn btn-light btn-primary-soft-check" for="option3">3 Days </label>
                     </li>

                     <!-- Days -->
                     <li class="list-inline-item">
                         <input type="checkbox" class="btn-check get_delivery_time" name="options" id="option5">
                         <label class="btn btn-light btn-primary-soft-check" for="option5">5 Days </label>
                     </li>

                     <!-- Days -->
                     <li class="list-inline-item">
                         <input type="checkbox" class="btn-check get_delivery_time" name="options" id="option4">
                         <label class="btn btn-light btn-primary-soft-check" for="option4">7 Days</label>
                     </li>

                     <!-- Days -->
                     <li class="list-inline-item">
                         <input type="checkbox" class="btn-check get_delivery_time" name="options" id="option4">
                         <label class="btn btn-light btn-primary-soft-check" for="option4">Anytime</label>
                     </li>
                 </ul>
             </div>
             <!-- Delivery time END -->


             <!-- Level START  -->

             <div class="card card-body shadow p-4 mb-4">
                 <!-- Title -->
                 <h4 class="mb-3">Seller Level</h4>
                 <button class="btn btn-sm btn_slidbar float-right clear_seller_level clearlink" onclick="clearLevel()">
                     <i class="fa fa-times-circle"></i> Clear Filter
                 </button>
                 <!-- Category group -->
                 <div class="col-12">
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_seller_level" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Level 1</label>
                         </div>

                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_seller_level" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Level 2</label>
                         </div>

                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_seller_level" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Level 3</label>
                         </div>

                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_seller_level" type="checkbox" value="1">
                             <label class="form-check-label form-check_style" for="flexCheckDefault9">Level 4</label>
                         </div>

                     </div>
                     <!-- Checkbox -->
                     <div class="d-flex justify-content-between align-items-center">
                         <div class="form-check">
                             <input class="form-check-input get_seller_level" type="checkbox" value="1" id="flexCheckDefault17">
                             <label class="form-check-label form-check_style" for="flexCheckDefault17">Level 5</label>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- Level END  -->


             <!-- Language START -->
             <div class="card card-body shadow p-4 mb-4">
                 <!-- Title -->
                 <h4 class="mb-3">Language</h4>
                 <button class="btn btn-sm btn_slidbar float-right clear_seller_language clearlink" onclick="clearLanguage()">
                     <i class="fa fa-times-circle"></i> Clear Filter
                 </button>
                 <ul class="list-inline mb-0 g-3">
                     <li class="list-inline-item">
                         <input type="checkbox" value="1" class="btn-check get_seller_language" name="options" id="btn-check-1">
                         <label class="btn btn-light btn-primary-soft-check" for="btn-check-1">English</label>
                     </li>
                     <!-- Item -->
                     <li class="list-inline-item mb-2">
                         <input type="checkbox" value="1" class="btn-check get_seller_language" id="btn-check-3">
                         <label class="btn btn-light btn-primary-soft-check" for="btn-check-3">Francas</label>
                     </li>
                     <!-- Item -->
                     <li class="list-inline-item mb-2">
                         <input type="checkbox" value="1" class="btn-check get_seller_language" id="btn-check-4">
                         <label class="btn btn-light btn-primary-soft-check" for="btn-check-4">Hindi</label>
                     </li>
                     <!-- Item -->
                     <li class="list-inline-item mb-2">
                         <input type="checkbox" value="1" class="btn-check get_seller_language" id="btn-check-5">
                         <label class="btn btn-light btn-primary-soft-check" for="btn-check-5">Russian</label>
                     </li>

                     <!-- Item -->
                     <li class="list-inline-item mb-2">
                         <input type="checkbox" value="1" class="btn-check get_seller_language" id="btn-check-6">
                         <label class="btn btn-light btn-primary-soft-check" for="btn-check-6">Spanish</label>
                     </li>

                 </ul>
             </div>
             <!-- Language END -->

             <!-- Pro Seller START -->
             <div class="card card-body shadow p-4 mb-4">
                 <!-- Checkbox -->
                 <div class="d-flex justify-content-between align-items-center">
                     <div class="form-check">
                         <input class="form-check-input get_pro_sellers" type="checkbox" value="1">
                         <label class="form-check-label form-check_style" for="flexCheckDefault9">Pro Sellers</label>
                     </div>
                     <span class="small"><img src="assets/images/client/vip-card.svg" alt=""></span>
                 </div>

                 <!-- Company certified professionals START -->
                 <!-- Checkbox -->
                 <div class="d-flex justify-content-between align-items-center my-4">
                     <div class="form-check">
                         <input class="form-check-input get_certified_sellers" type="checkbox" value="1">
                         <label class="form-check-label form-check_style" for="flexCheckDefault9">Certified
                             professionals</label>
                     </div>
                     <span class="small"><img src="assets/images/client/award.svg" alt=""></span>
                 </div>
             </div>

         </div><!-- Form End -->

     </div>

 </div>


 <!-- Responsive offcanvas body END -->