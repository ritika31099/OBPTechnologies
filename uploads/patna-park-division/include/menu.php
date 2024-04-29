<div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget text-white">
                        <ul class="list-inline xs-text-center text-white">
                            <li class="m-0 pl-10 pr-10"> <a href="index.html#" class="text-white"><i class="fa fa-phone text-white"></i> +91-98765 43210</a></li>
                            <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> info@patnapark.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 pr-0">
                    <div class="widget widget-right xs-text-center text-right ">
                        <a href="javascript:" data-toggle="modal" data-target="#login" class="text-white" style="padding-right:10px; border-right:2px solid #fff"><i class="fa fa-lock"></i> Login </a>
                        <a href="javascript:" data-toggle="modal" data-target="#signup" class="text-white" style="padding-left:10px;"><i class="fa fa-user"></i> SingUp </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white nav-lg">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord default no-bg">
                        <a class="menuzord-brand switchable-logo pull-left flip" style="margin:0" href="index.html">
                            <h1 style="padding:0;">
                                <img class="logo-default" src="img/logo.png" alt="#">
                                <img class="logo-scrolled-to-fixed" src="img/logo.png" alt="#">
                            </h1>
                        </a>
                        <ul class="menuzord-menu">
                            <li class="active">
                                <div class="menu-icon">
                                    <i class="flaticon-home"></i>
                                </div>
                                <a class="underline" href="index.php">Home</a>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-growth"></i>
                                </div>
                                <a class="underline" href="about.php">About Us</a>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-leaf"></i>
                                </div>
                                <a class="underline" href="rajdhani-vatika.php">Rajdhani Vatika</a>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-sapling"></i>
                                </div>
                                <a class="underline" href="all-parks.php">All Parks</a>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-visitor"></i>
                                </div>
                                <a class="underline" href="javascript:">Visitor Services
                                    </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="join-us.php">Join Us</a>
                                    </li>
                                    <li>
                                        <a href="feedback.php">Feedback</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-vegan"></i>
                                </div>
                                <a class="underline" href="plants.php">Plant Information</a></li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-party"></i>
                                </div>
                                <a class="underline" href="#">Events</a>
                            </li>
                            <li class="">
                                <div class="menu-icon">
                                    <i class="flaticon-movie-tickets"></i>
                                </div>
                                <a class="underline" href="#">Book Ticket</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Login Signup Model -->
    <div id="login" class="modal fade my-model" role="dialog">
        <div class="modal-dialog modal-centered" style="max-width:400px ; max-height: 550px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:green">Login</h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-0">Log In to <strong>Patna Park Division!</strong></h4>

                    <div class="login-logo">
                        <img src="img/logo.png" alt="logo" class="img-fluid">
                    </div>
                    <form id="loginfrm" autocomplete="off">
                        <input type="hidden" name="_token" value="lz65note2m9g4Qe17G0uz4VUHVc2sbnckamEzIkR">
                        <div class="row">
                            <!-- <div class="col-md-12">
                                <p class="alert alert-danger" id="loginmsg"></p>
                            </div> -->
                            <div class="col-md-12 form-group">
                                <div class="input-group"> <span class="input-group-addon text-white"><i class="fa fa-user"></i>
                                </span>
                                    <input type="text" class="form-control numonly" name="mobile" id="loginuser" placeholder="Your Register Mobile No." maxlength="10" minlength="10">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="input-group"> <span class="input-group-addon bg-theme-colored2 text-white"><i class="fa fa-lock"></i></span>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="checkbox" id="rememberme" name="remember" value="1">
                                <label for="rememberme" class=""> Remember Me.</label> <a href="#" class="pull-right text-success">Forget Your password ?</a>
                            </div>
                            <div class="login-button">
                                <button class="btn">Log In</button>
                            </div>
                            <div class="login-footer">
                                <h4 class="text-center">Don't have an Account? <span data-dismiss="modal" data-toggle="modal" data-target="#signup" style="cursor:pointer;"> <strong>Sign Up</strong></span></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="signup" class="modal fade my-model" role="dialog">
        <div class="modal-dialog" style="max-width:400px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:green">Sign Up</h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-0">Sign Up to <strong>Patna Park Division!</strong></h4>
                    <div class="login-logo">
                        <img src="img/logo.png" alt="logo" class="img-fluid">
                    </div>
                    <form id="signupfrm" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <div class="input-group"> <span class="input-group-addon bg-theme-colored2 text-white"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="fullname" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="input-group"> <span class="input-group-addon bg-theme-colored2 text-white"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="input-group"> <span class="input-group-addon bg-theme-colored2 text-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control numonly" name="mobile" placeholder="00000 00000" maxlength="10" minlength="10">
                                </div>
                            </div>
                            <div class="login-button">
                                <button class="btn">Sign Up</button>
                            </div>
                            <div class="login-footer">
                                <h4 class="text-center">Already have an Account? <span data-dismiss="modal" data-toggle="modal" data-target="#login" style="cursor:pointer;"><strong>Log In</strong></span></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Login Signup Model -->
    </header>