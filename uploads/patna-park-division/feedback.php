<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>
<section class="banner-section">
  <img src="img/banner-park.jpg" class="img-fluid" alt="">
  <div class="shadow-img">

  </div>
</section>
<section class="bg-gray inner-page-section">
    <div class="container">
        <div class="join-us-main">
            <div class="row">
                <div class="col-lg-5">
                    <div class="join-us-img">
                        <img src="img/feedback-img.png" alt="join-us-img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form-area">
                    <div class="ribbon">
                        <span class="ribbon1"><span>Feedback</span></span>
                    </div>
                    <form class="contact-us-form">
                        <div class="form-group col-md-12 px-0">
                            <label for="exampleFormControlSelect1">Message Type</label>
                            <select class="form-control complain-form-control-select1" name="complaint-type" id="exampleFormControlSelect1" required="">
                                <option value="feedback">Feedback</option>
                                <option value="suggestions">Suggestion</option>
                            </select>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control complain-form-control-select" id="firstName" name="firstName" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control complain-form-control-select" id="lastName" name="lastName" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control complain-form-control-select" id="phone" name="phone" placeholder="Phone No" required="" onchange="return phonenumber(this);">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control complain-form-control-select" id="email" name="email" placeholder="Email" required="" onchange="return ValidateEmail(this);">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-12">
                                <textarea name="complaint-details" class="form-control complain-form-control-select" placeholder="Comments" required="" spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-12 px-0">
                                <label for="">Any Attachment</label>
                                <input type="file" class="form-control complain-form-control-select" id="photo" name="photo" placeholder="">   
                            </div>
                         </div>
                        <div class="form-row justify-content-center">
                            <div class="login-button">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>