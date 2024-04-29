
<?php //include 'include/header.php'; 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="google-site-verification" content="-SQ3uCTdtEGkgyNbb8UjMJ0a7ARP4QDXQtQiLMFj49A" />
  <title>Contact - OBP Technologies </title>
  <meta name="description" content="H. NO. - A52, 3rd Floor, Housing Colony, Lohia Nagar, Kankarbagh, Patna- 800020, Bihar, Mob: 6206570255, Email: info@obptechnologies.com" />
  <link rel="canonical" href="https://www.obptechnologies.com/contact-us.php" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158906199-3"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158906199-3');
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- Flaticon -->
  <link rel="stylesheet" href="font/flaticon.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- REsponsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Animate CSS-->
  <!-- <link rel="stylesheet" href="css/animate.css" /> -->
  <!-- OWL CSS -->
  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" /> -->
  <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css" /> -->


 <!-- CSS libraries -->
         <link rel="stylesheet" href="obpwebassets/bootstrap.min.css">
     <link rel="stylesheet" href="obpwebassets/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="obpwebassets/obpstyle.css">

 
 <style>
         .hero-section{
    background: url(../images/banner.webp);
     background-repeat: no-repeat;
  background-size: 100% 100%;
    padding-bottom: 30px;
  }
  .web_text{  padding-top: 7em;}
  .contact-sec{
      margin-top:-100px;
      background-color:white;
  }
  
.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 2001;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 40px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: -20px;
  right: 35px;
  }
}
  </style>
  

</head>

<body style="background-color: rgb(255, 255, 255);">
        
  <?php
  include('database.php');
  $msg = "";
  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $comment = mysqli_real_escape_string($con, $_POST['comment']);

    mysqli_query($con, "insert into contact_us(name,email,mobile,address,comment) values('$name','$email','$mobile','$address','$comment')");
    $msg = "Thanks Message";



    $EmailFrom = Trim(stripslashes($_POST['email']));

    $EmailTo = "info@obptechnologies.com";

    $Subject = "Contact Form Submission";



    $Name = Trim(stripslashes($_POST['name']));

    $Email = Trim(stripslashes($_POST['email']));

    $mob  = Trim(stripslashes($_POST['mobile']));

    $address = Trim(stripslashes($_POST['address']));

    $comment = Trim(stripslashes($_POST['comment']));





    $Body = "";

    $Body .= "Name: ";

    $Body .= $Name;

    $Body .= "\n";



    $Body .= "Email: ";

    $Body .= $Email;

    $Body .= "\n";



    $Body .= "Mobile: ";

    $Body .= $mob;

    $Body .= "\n";




    $Body .= "address: ";

    $Body .= $address;

    $Body .= "\n";



    $Body .= "Message: ";

    $Body .= $comment;

    $Body .= "\n";



    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



    if ($success) {

      echo "<script>alert('Your mail has been sent')</script>";

      print "<meta http-equiv=\"refresh\" content=\"0;URL=#\">";
    }
  }
  ?>


<section class="hero-section" >

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
              <img src="images/obp logo big.png" height=60px style="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Home</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                          <button class="dropbtn nav-link smoothScroll" style="border:none; background-color:white;">Services ▾ </button>
                          <div class="dropdown-content" style="width:300px;">
                          <a href="website-design-company-patna.php" class="nav-link smoothScroll">Web Designing</a>
                          <a href="website-development-company-patna.php" class="nav-link smoothScroll">Web Development</a>
                          <a href="digital-marketing-company-patna.php" class="nav-link smoothScroll">Digital Marketing</a>
                          <a href="seo-company-patna.php" class="nav-link smoothScroll">Search Engine Optimization</a>
                          <a href="graphic-design-company-patna.php" class="nav-link smoothScroll">Graphics Designing</a>
                          <a href="software-development-company-patna.php" class="nav-link smoothScroll">Software Development</a>
                           <a href="mobile-app-development-company-patna.php" class="nav-link smoothScroll">Mobile App Development</a>
                            <a href="e-commerce-solution-company-patna.php" class="nav-link smoothScroll">E-Commerce Website</a>
                          </div>
                        </div>
                        
                    </li>
                     <li class="nav-item">
                        <a href="about-us.php" class="nav-link smoothScroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link ">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-us.php" class="nav-link ">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="openNav()" class="nav-link contact">Get a Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



<div id="myoverlayquote" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <div class="container">
          <div class="row">
              <div class="col-md-4"></div>
               <div class="col-md-4">
                   <form method="POST" style="background-color:white;">
                       <h3 style="background-color:#009DD3; padding:.8em"><b><i>Request a Quotation</i></b></h3>
                       <input type="text" style="margin:6px 10px; width:90%; height:30px;" name="name" placeholder="Name" required>
                       <input type="email" style="margin:6px 10px; width:90%; height:30px;" name="email" placeholder="Email" required>
                       <input type="text" style="margin:6px 10px; width:90%; height:30px;" name="mobile" placeholder="Mobile">
                       <input type="text" style="margin:6px 10px; width:90%; height:60px;" name="comment" placeholder="Message" required>
                       
                       <input type="submit" style="margin:6px 10px; width:90%; background-color:#009DD3; height:40px; border-radius:20px;" name="submit">
                   </form>
               </div>
               <div class="col-md-4"></div>
          </div>
      </div>
       
  </div>
</div>
    <!--MENU BAR ENDS -->

    <div class="container">
        <div class="row marginii">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="taital_main">
                    
                </div>
                <h1 class="web_text" style="color: black;"><strong>
                   Contact Us
                </strong></h1>
                <p class="donec_text">Alone we can do so little, together we can do so much.
                </p>
                 
            </div>
       
    </section>

  <?php
  include('database.php');
  $msg = "";
  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $comment = mysqli_real_escape_string($con, $_POST['comment']);

    mysqli_query($con, "insert into contact_us(name,email,mobile,address,comment) values('$name','$email','$mobile','$address','$comment')");
    $msg = "Thanks Message";



    $EmailFrom = Trim(stripslashes($_POST['email']));

    $EmailTo = "info@obptechnologies.com";

    $Subject = "Contact Form Submission";



    $Name = Trim(stripslashes($_POST['name']));

    $Email = Trim(stripslashes($_POST['email']));

    $mob  = Trim(stripslashes($_POST['mobile']));

    $address = Trim(stripslashes($_POST['address']));

    $comment = Trim(stripslashes($_POST['comment']));





    $Body = "";

    $Body .= "Name: ";

    $Body .= $Name;

    $Body .= "\n";



    $Body .= "Email: ";

    $Body .= $Email;

    $Body .= "\n";



    $Body .= "Mobile: ";

    $Body .= $mob;

    $Body .= "\n";




    $Body .= "address: ";

    $Body .= $address;

    $Body .= "\n";



    $Body .= "Message: ";

    $Body .= $comment;

    $Body .= "\n";



    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



    if ($success) {

      echo "<script>alert('Your mail has been sent')</script>";

      print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-us.php\">";
    }
  }
  ?>

  <section class="inner-page-section" style="background-color:white;">
    <div class="container">
      <h1>Contact Us</h1>
      <div class="contact-inner-main">
        <div class="row">
          <div class="col-md-7">
            <div class="contact-left">
              <h2>Send Your Request</h2>
              <form method="post" id="frmContactus">
                <div class="row">
                  <div class="col-md-12">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
                  </div>
                  <div class="col-md-12">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" placeholder="ex- xyz@gmail.com" name="email" required>
                  </div>
                  <div class="col-md-12">
                    <label>Phone</label>
                    <input type="text" class="form-control" id="mobile" placeholder="ex- 1234567890" name="mobile" required>
                  </div>
                  <div class="col-md-12">

                    <label>Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                  </div>
                  <div class="col-md-12">
                    <label class="mb-2">Message</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Your Message..."></textarea>
                  </div>
                  <button type="submit" class="btn" name="submit" id="submit" style="background-color:#c75a00">SEND</button>
                  <span style="color: red;"><?php echo $msg ?></span>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5">
            <div class="contact-right">
              <h2>Contact Information</h2>
              <div class="media contact-media">
                <span class="align-self-center mr-3 flaticon-location"></span>
                <div class="media-body">
                  <h5 class="mt-0">Address</h5>H. NO. - A52, 3rd Floor, Housing Colony, Lohia Nagar, Kankarbagh, Patna- 800020, Bihar
                    
                </div>
              </div>
              <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=H.%20NO.%20-%20A52,%203rd%20Floor,%20Housing%20Board%20Colony,%20Kankarbagh,%20Lohia%20Nagar,%20Patna,%20Bihar%20800020&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <style>.mapouter{position:relative;height:100%;width:90%; margin: 10px 20px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:90%;width:100%;}</style>
                        </div>
                    </div>
              <div class="media contact-media">
                <span class="align-self-center mr-3 flaticon-phone"></span>
                <div class="media-body">
                  <h5 class="mt-0">Contact No.</h5>
                  <a href="tel:6206570255" style="color:white;">+91-6206570255</a><br>
                   <a href="tel:7909058549" style="color:white;">+91-7909058549</a><br>
                
                </div>
              </div>
              <div class="media contact-media">
                <span class="align-self-center mr-3 flaticon-email"></span>
                <div class="media-body">
                  <h5 class="mt-0">Email Us</h5>
                  <a href="mailto:info@obptechnologies.com" style="color:white;">info@obptechnologies.com</a>
                  <br>
                  <a href="mailto:obptechnologies@gmail.com" style="color:white;">obptechnologies@gmail.com</a> 
                </div>
              </div>
              <div class="footer-social contact-social">
                <h2>Follow Us</h2>
                <div class="all-icon">
                  <a href="https://www.facebook.com/obptechnologies/" target="_blnak">
                    <i style="font-size:20px; margin:0px 7px;" class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="https://twitter.com/ObpTechnologies" target="_blnak">
                    <i style="font-size:20px; margin:0px 7px;" class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.instagram.com/obptechnologies/" target="_blnak">
                    <i style="font-size:20px; margin:0px 7px;" class="fa fa-youtube-play" aria-hidden="true"></i>
                  </a>
                  <a href="https://twitter.com/ObpTechnologies" target="_blnak">
                    <i style="font-size:20px; margin:0px 7px;" class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
 
    <section class="contact-us-sec">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-4">
                    <h2 class="footer-h2">About OBP</h2>
                    
                    <h4 class="about-p" style="font-size: 14px;" ><small></small>OBP Technologies is a web and IT 
                        solution company offering its services to all types 
                        of businesses.Our IT & web services give a unique identity to our client's 
                        businesses in this digital world. 
                        Website designing, web development, SEO, and software development are our main services. 
                    </small>
                    </h4>
                    
                    <hr>
                    <a  href="https://www.facebook.com/obptechnologies/" ><button class="social-butt" >
                        <i class="fa fa-facebook-f" ></i>
                    </button></a>
                    <a href="https://www.instagram.com/obptechnologies/"><button class="social-butt"  >
                        <i class="fa fa-instagram" ></i>
                    </button></a>
                    <a href=""><button class="social-butt"  >
                        <i class="fa fa-linkedin" ></i>
                    </button></a>
                    <a href="https://twitter.com/ObpTechnologies"><button class="social-butt" >
                        <i class="fa fa-twitter" ></i>
                    </button></a>
                </div>
            
                <div class="col-lg-4" >
                
                        <h2 class="footer-h2">Services</h2>
                       
                        <ul class="footer-ul" style="font-weight:500;">
                            <a href="website-design-company-patna.php"><li>Website Designing</li></a>
                             
                             <a href="website-development-company-patna.php"><li>  
                            Web Development
                            </li></a>
                            <a href="digital-marketing-company-patna.php"><li>  
                            Digital Marketing
                            </li></a>
                            <a href="seo-company-patna.php"><li>  
                            Search Engine Optimization
                            </li></a>
                            <a href="graphic-design-company-patna.php"><li>  
                            Graphics Designing
                            </li></a>
                            <a href="software-development-company-patna.php"><li>  
                            Software Development
                            </li></a>
                            <a href="mobile-app-development-company-patna.php"><li>  
                            Mobile App Development
                            </li></a>
                            <a href="e-commerce-solution-company-patna.php"><li>  E-Commeerce Website
                            </li></a>
                            
                        </ul>
                   
                </div>
            <div class="col-lg-4">
                <h2 class="footer-h2">Locate Us</h2>
                <!--
                <div>
                    <div >
                            <i class="fas fa-map-marker-alt" style="font-size: 24px; color: chocolate;"></i>
                            <span style="margin-top: 0px;">Apna Market, Chandmari Road, Kankarbagh, Patna 800020, Bihar</span>
                    </div>
                    <br>
                    <div >
                        <i class="fas fa-phone" style="font-size: 24px; color: chocolate;"></i>
                       
                            <span style="margin-top: 0px;">+91-6206570255 / 7909058549</span>
                    </div>
                    <br>
                    <div>
                          <i class="fas fa-envelope" style="font-size: 24px; color: chocolate;"></i>
                        
                            <span style="margin-top: 0px;">info@obptechnologies.com
                                obptechnologies@gmail.com</span>
                    </div>
                </div>
                -->
                <div><table>
                    <tr >
                        <td style="margin-top:00px;"><i class="fas fa-map-marker-alt" style="font-size: 24px; color: chocolate;"></i></td>
                        <td style="padding:10px; 0px 0px 20px"><span style="margin-top: 0px;  font-weight:400;">H. No. - A52, 3rd Floor, Housing Colony, Lohia Nagar, Kankarbagh, Patna - 20</span></td>
                    </tr>
                    <tr >
                        <td style="margin-top:00px;">
                             <i class="fas fa-phone" style="font-size: 24px; color: chocolate;"></i>
                        </td>
                        <td style="padding:10px; 0px 0px 20px"> <span style="margin-top: 0px; font-weight:400;"><a href="tel:6206570255">+91-6206570255</a>, </i> <a href="tel:7909058549">+91-7909058549</a></span>
                        </td>
                    </tr>
                    <tr >
                        <td style="margin-top:00px;"> <i class="fas fa-envelope" style="font-size: 24px; color: chocolate;"></i>
                        </td>
                        <td style="padding:10px; 0px 0px 20px"><span style="margin-top: 0px; font-weight:400;"><a href="mailto:info@obptechnologies.com">info@obptechnologies.com</a> <a href="mailto:obptechnologies@gmail.com">obptechnologies@gmail.com</a> 
                               </span>
                        </td>
                    </tr>
                </table></div>
            </div>
        </div>
    </section>
<div class="copywrite" style="background-color:#353535; color:white; font-size:16px; padding: 10px 0px;">
            <center>© <a href="index.php" style="color:white;">OBP Technologies</a> | All Rights Reserved.</center>
</div>
</body>

    <script>
        var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
    
    <script>
function openNav() {
  document.getElementById("myoverlayquote").style.height = "100%";
}

function closeNav() {
  document.getElementById("myoverlayquote").style.height = "0%";
}
</script>   
<script src="obpwebassets/libs.min.js"></script>

<script src="obpwebassets/jquery.min.js"></script>
<script src="obpwebassets/bootstrap.min.js"></script>

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?56766';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"20",
      "marginRight":"20",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"OBP Technologies",
      "brandSubTitle":"Digital Marketing, Website Design, SEO, SMO, etc",
      "brandImg":"https://www.obptechnologies.com/images/obp%20logo%20big.png",
      "welcomeText":"Hi, there!\nHow can I help you?",
      "messageText":"",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"918797401410"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</html>
  
  