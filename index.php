<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="google-site-verification" content="-SQ3uCTdtEGkgyNbb8UjMJ0a7ARP4QDXQtQiLMFj49A" />
  <title>SEO Company in Patna | Website designing & Digital Marketing company in Patna</title>
  <meta name="description" content="We as an IT company help businesses by designing responsive website along with offering digital marketing & SEO services in Patna. We also offer management software." />
  <meta name="keywords" content="website designing company in patna, website design in patna, website design patna, website development in patna, digital marketing company in patna, digital marketing in patna, seo company in patna, seo service provider in patna, seo in patna, software company in patna" />
  <link rel="canonical" href="https://www.obptechnologies.com/" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169195651-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169195651-1');
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="NOODP" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="daily">
  
  <link rel="manifest" href="site.webmanifest" />
  
  <!-- CSS libraries -->
         <link rel="stylesheet" href="obpwebassets/bootstrap.min.css">
     <link rel="stylesheet" href="obpwebassets/font-awesome.min.css">
     
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="obpwebassets/obpstyle.css">

 
  
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

      print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    }
  }
  if (isset($_POST['submit2'])) {
      
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $comment = mysqli_real_escape_string($con, $_POST['comment']);

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

      print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    }
  }
  ?>


<section class="hero-section" >
   <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
              <img src="images/obp logo big.png" height=60px >
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
                       <input class="overlay-input" type="text" name="name" placeholder="Name" required pattern="[A-Za-z]{,30}" title="Must not exceed 30 characters">
                       <input class="overlay-input" type="email" name="email" placeholder="Email" required>
                       <input class="overlay-input" type="text" name="mobile" placeholder="Mobile"  required pattern="[0-9]{,13}" title="Please enter a valid phone number, use only digits.">
                       <input type="text" class="overlay-input" name="comment" placeholder="Message" required pattern="{,100}" title="Must not exceed 100 characters">
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
                <br>
                <h1 class="web_text" >
                    Leading Web & Digital marketing company in Patna, India
                    <br>
                    <small>
                        <strong>
                    <a href="index.html" class="typewrite" data-period="1300" data-type='[ "Web Development", "Digital Marketing", "SEO", "App Development", "Software Development" ]'>
              <span class="wrap"></span> 
                    </a></strong>
                   </small>
               </h1> 
                <p class="donec_text"><br>We enable small and large scale bussiness to grow online by providing services like Website Designing & development, SEO, Software development, Digital marketing, Logo designing, ERP software, Social media marketing, Mobile app development, etc.
                    <h4 style="margin-top: -10px;"><i class="fa fa-phone"></i> <a href="tel:6206570255">+91-6206570255</a>, </i> <a href="tel:7909058549">+91-7909058549</a></h4>
                    <h4><i class="fa fa-envelope"></i> <a href="mailto:info@obptechnologies.com">info@obptechnologies.com</a></h4>
                </p>
                 <a class="get_bg" onclick="openNav()" href="#" role="button">Get Started</a>
                 <a class="get_bg" href="contact-us.php" role="button" style="background-color:#006A8F">Contact Us</a>
                
                 <br>
            </div>
    
        <div class="emaim-bt">
            <form method="POST">
            <div class="col-md-9 margin-0">
                <div class="input-group mb-3 margin-top-20">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                    <input type="text" class="form-control" placeholder="Phone "name="mobile" required>
                    <input type="text" name="comment" value="callback" style="display:none;">
                    <div class="input-group-append">
                    <input type="submit" class="search_bt" name="submit2  " value="Callback">
                    </div>
                </div>   
            </div>
            </form>
        </div>
       
    </section>
<br>
<br>
    
<section class="strategy" >
    <center>
        
    <h2 class="Orange-headings" style="margin-top: .5em;"><strong>Our Services</strong></h2>
    <h2 style="margin-top: -10px;  font-family: 'Times New Roman', serif;">Grow your bussiness online</h2>
    <img class="blue-line" src="images/divider-light_blue.png">
    <br>
    
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
        <div class="col-lg-2">
            <h3><br><br><span class="strategy-num" style="color: rgb(132, 240, 128);">01</span></h3>
        </div>
        <div class="col-lg-4">
            <div class="strategy-img">
                <center>
                    <img class="img-services" src="images/s1.webp">
                </center>
            </div>
        </div>
        <div class="col-lg-5">
            
            <a  href="website-design-company-patna.php"><h2 class="strategypara">Web Designing</h2></a>
            
            <P  class="" style="text-align: justify; ">OBP Technologies is the best website designing company in Patna known for design responsive & customized websites. 
                Our designed website is SEO friendly with easy navigations for better user experience. 
                We make websites according to the client's business demand. 
                We have got expertise in designing a dynamic website where content can easily 
                updated.</P>
        </div>
        <div class="col-lg-1"></div>
        </div>
    </div>

    <br><br>
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
            <div class="col-lg-2">
                <h3><br><br><span   class="strategy-num" style=" color: lightcoral;  ">02</span></h3>
            </div>
            <div class="col-lg-4">
                <div class="strategy-img">
                    <center>
                        <img class="img-services" src="images/s2.webp">
                    </center>
                </div>
            </div>
            <div class="col-lg-5">
            
                <a  href="website-development-company-patna.php"><h2 class="strategypara">Web Development</h2></a>
            
            <p class="" style="text-align: justify; ">OBP is one of the leading website development
                 company in Patna Bihar, which has more than five years of experience in making creative 
                 websites for our clients as per their need and requirement. Our company has extremely 
                 professional and successful web developers, PHP designers, and 
                SEO experts who are creative and hardworking and usually work tirelessly to give the best services to the clients.  </p>
        </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
            <div class="col-lg-2">
                <h3><br><br><span  class="strategy-num" style=" color: rgb(128, 208, 240); ">03</span></h3>
            </div>
            <div class="col-lg-4">
                <div class="strategy-img">
                    <center>
                        <img src="images/s3.webp" class="img-services" >
                    </center>
                </div>
            </div>
            <div class="col-lg-5">
                <a  href="digital-marketing-company-patna.php"><h2 class="strategypara">Digital Marketing</h2></a>
            
            <p class="" style="text-align: justify;  ">Digital marketing involves every single sales strategy which uses an electronic device or internet. It is mainly defined by the use of a wide variety of digital marketing channels and strategies to engage with customers where they invest a considerable amount of time.</p>
        </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
            <div class="col-lg-2">
                <h3><br><br><span  class="strategy-num" style=" color: rgb(240, 214, 128); ">04</span></h3>
            </div>
            <div class="col-lg-4">
                <div class="strategy-img">
                    <center>
                        <img src="images/s4.webp" class="img-services" >
                    </center>
                </div>
            </div>
            <div class="col-lg-5">
                <a  href="seo-company-patna.php"><h2 class="strategypara">SEO</h2></a>
           
            <p class="about-p" style="text-align: justify; ">If your business is on Google, then nothing can stop you from moving forward. Today, people for products and services take the help of Google before purchasing. That's why your business must be on Google, Bing, Yahoo and other search engines. Being a responsible and best SEO service providing company in Patna, we help you get leads, and thereby, you can easily interact with your client and earn a profit</P>
        </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
            <div class="col-lg-2">
                <h3><br><br><span  class="strategy-num" style=" color: rgb(218, 128, 240);">05</span></h3>
            </div>
            <div class="col-lg-4">
                <div class="strategy-img">
                    <center>
                        <img src="images/s5.webp" class="img-services" >
                    </center>
                </div>
            </div>
            <div class="col-lg-5">
            
                <a  href="graphic-design-company-patna.php"><h2 class="strategypara">Graphic Designing</h2></a>
           
            <P class="about-p" style="text-align: justify;  ">We specialise in making a logo that will create a good impact upon the mind of the people about your company and it is vital for giving a total view of the company at one glance. </P>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row wow fadeIn animated strategyup">
        
            <div class="col-lg-2">
                <h3><br><br><span  class="strategy-num" style=" color:#E9FF46">06</span></h3>
            </div>
            <div class="col-lg-4">
                <div class="strategy-img">
                    <center>
                        <img src="images/s6.webp" class="img-services">
                    </center>
                </div>
            </div>
            <div class="col-lg-5">
            
                <a  href="software-development-company-patna.php"><h2 class="strategypara">Software Development</h2></a>
           
            <P class="about-p" style="text-align: justify;" >Over time, the trend of software is also increasing because it saves both money and time and makes complex tasks more manageable. OBP Technologies specializes in developing software for various companies, institutes and organizations, and is the best software development company in Patna.</P>
            </div>
        </div>
    </div>
    <br>
    <br>
</center>
</section>


    <section class="strategy" style="background-color: rgb(242, 242, 242);" >
        <center><h2 class="Orange-headings" style="margin-top: .5em; "><strong>About OBP</strong></h2>
                <h2 style="margin-top: -10px;  font-family: 'Times New Roman', serif; color: black;">Online Business Promotion</h2>
                <img src="images/divider-light_blue.png"  class="blue-line"></center>
        <div class="container" style="margin-top: -20px;">
            <div class="row">
          
            <div class="col-lg-6" style="padding: 10px; ">
                <div class="about-text">
                    <br><br>
                    
                    <h2 class="sec-heading"> About OBP Technologies : Web and IT solution</h2>
                    <br>
                    <P class="about-p" style="text-align:justify;" >OBP Technologies is an Online Business Promotion (OBP) company that provides web & IT services to clients in Patna and across India.  Our IT & web services give a unique identity to our client's businesses in this digital world. Website designing, web development, SEO, and software development are our main services. We work for small, medium, large companies and make their products and services accessible to targeted customers and generate profit. Our other services are digital marketing, logo designing, ERP software, bulk SMS, social media marketing, mobile app development, e-commerce website, etc. We have an experienced technical & digital marketing team, which works with 100% commitment to meet client's expectations. Our customer-centric approach and curiosity to deliver the best place us as the top website design, SEO, and software company in Patna.</P>

                    <br><br>
                    <h3 style="color: rgb(0, 114, 187 );">Just Call OBP Technologies on:</h3>
                    <h2 class="sec-heading"><a href="tel:6206570255">+91-6206570255</a> <span style="color: chocolate;">&</span>  <a href="tel:7909058549">+91-7909058549</a></h2>
                    <br>
                    <br>
                    <h3 style="color: rgb(0, 114, 187 );">Or request a call on:</h3>
                    <br>
                    <form method="POST">
                    <input style="width: 60%; height: 60px; color: black; font-size: 16px;" type="text" placeholder="Enter your Mobile No." name="mobile" required>
                    <input type="text" name="comment" value="callback" style="display:none;">
                    <input type="submit" name="submit2" value="Submit" style="width: 30%; height: 60px; color: rgb(255, 255, 255); background-color: #E17000; margin-top: -20px; font-size: 22px;">
                    </form>
                </div>
            </div>
            <div class="col-lg-1" ></div>
            <div class="col-lg-5">
                <br><br>
                <h2>Why Choose Us?</h2>
                <br>
                <ul style="list-style-image: url('images/bluetick.png'); font-weight:500;">
                  <li>
                    We offer 24*7 expertise support to your business.
                  </li>
                  <br>
                  <li>Our company has a great record of history for client's happiness and satisfaction.
                  </li>
                  <br>
                  <li>
                       We keep on enhancing ourselves and our service according to the upgrading technologies.
                    </li>
                    <br>
                    <li>
                        We keep updating your business in regards to the modern-day requirements.

                    </li>
                    <br>
                    <li>
                         We believe not only in delivering but also in learning.
                    </li>
                    <br >
                    <li>
                        We deliver our prime efforts to every client's business as if it is our own.
                    </li>
                </ul>
            </div>
            </div>
        </div>

    </section>
    

<section class="testimonial" style="background:url('images/testimonial-bg.webp'); ">
<div style="background: rgba(0, 0, 0, 0.7); ">
    <div class="container" >
        <div class="row">
       
        <div class="col-md-12" style="padding: 0px; margin:0px;">
          <div class="slideshow-container">
              <center><h3 class="Orange-headings" style="margin-top: .5em; "><strong>Testimonials</strong></h3>
                <h2 style="margin-top: -10px;  font-family: 'Times New Roman', serif; color: white;">Read what our customer say about us</h2>
                <img src="images/divider-light_blue.png"  class="blue-line">
              <div class="mySlides fade">
                <center><img class="testimonial-img" src="images/testimonial 1.webp" ></center>
                <div class="test-desc">
                  <center>
                      <h3 class="about-p" style=" font-family: Apple Chancery, cursive; color: white;">"I am really astonished by the level of quality received from OBP Technologies. They were right on schedule, courteous, and professional. They delivered our project well before time. Our revenue started rising since then. I would definitely recommend their service to others."</h3>
                          <br><br><br><br>
                  </center>
                  </div>
                <div class="text">-Gunjan Kumar</div>
              </div>
              
              <div class="mySlides fade">
                  <center><img class="testimonial-img" src="images/testimonial 2.webp" ></center>
                  <div class="test-desc">
                    <center>
                        <h3 class="about-p" style=" font-family: Apple Chancery, cursive; color: white;">"OBP Technologies has been handling our digital marketing services for a long time and I am genuinely happy and totally satisfied with the ranking of our website on Google. I can't say enough about the amazing work that they did for our business."</h3>
                          <br><br><br><br>
                    </center>
                    </div>
                  <div class="text">-Neelam Kumari</div>
                </div>
              
              
              
              
              
              
              </div>
              <br>
              
              <div style="display: none;">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
              </div>
          
        </div>
    </div>
    </div>

</div>      
  
</section>

  
            <!-- FAQs Start -->
<section class="faqs-sec" >
    <center>
        <h3 class="Orange-headings" style="margin-top: .5em; "><strong>FAQs</strong></h3>
                <h2 style="margin-top: -10px;  font-family: 'Times New Roman', serif; color: rgb(0, 0, 0);">Frequently Asked Questions</h2>
                <img src="images/divider-light_blue.png"  class="blue-line">
    </center>
    
    <br>
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <!--
                        <div class="col-md-5">
                            
                            <img id="faq-img" src="images/faq.jpg" alt="Image">
                        </div>
                        -->
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            
                            <div id="accordion">
                                <div class="card">
                                    
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne" >
                                            <span>1</span>  Why using digital marketing service essential?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse " data-parent="#accordion">
                                        <div class="card-body">
                                             Digital Marketing is generally considered essential for your business because through digital marketing you bring and strongly represent your business on the internet. As the world is getting more and more digital with time, online promotion is a very essential part of marketing.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Will I always require to provide pictures and videos for our social media postings?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                              It will be highly beneficial if you can provide clear pictures and videos to OBP Technologies so that we can use them efficiently and advertise your brand. But in case if that's not possible for you, then we have brilliant graphics designers that can beautify your pictures or can even create pictures for your brand.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> What sort of website can OBP Technologies deliver?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            OBP Technologies can deliver a completely dynamic website with all general functionality including SSL security certificate, hosting, and domain. 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> What quality of service should I expect from OBP Technologies if they are handed a project?  
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                           While handing any project to OBP Technologies, you will always be delivered our level best efforts and sheer commitment to put our 100% in your project. As a progressive company, we always keep trying to do better than before, moving towards excellence.
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- FAQs End -->
     
      
    <section class="contact-sec">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    
                        <h3 class="Orange-headings" style="margin-top: .5em;"><strong>Contact Us</strong></h3>
                        <h2 style="margin-top: -10px;  font-family: 'Times New Roman', serif;">Grow your bussiness online</h2>
                        <img src="images/divider-light_blue.png"  class="blue-line">
                    
                    <form method="post" id="frmContactusindex" style="width: 100%; ">
                        <div class="container" style="padding: 0px; margin: 0px;">
                            <div class="row" style="padding: 0px; margin: 0px;">
                                
                                <div class="col-sm-6" style="padding: 5px; margin: 0px;" >
                                    <input type="text" name="name" id="name" class="contact-home" placeholder="NAME" required>
                                </div>

                                <div class="col-sm-6" style="padding: 5px; margin: 0px;"> 
                                    <input type="text"  name="address"  id="address"  class="contact-home" placeholder="COMPANY" required>
                                </div>
                                <div class="col-sm-6" style="padding: 5px; margin: 0px;">
                                    <input type="text"  name="mobile"  id="mobile" class="contact-home" placeholder="PHONE NO." required>
                                </div>
                                
                                <div class="col-sm-6" style="padding: 5px; margin: 0px;"> 
                                    <input type="email" name="email" id="email" class="contact-home" placeholder="EMAIL" required>
                                </div>
                                <div class="col-sm-12" style="padding: 5px; margin: 0px;"> 
                                    <input type="text" name="comment" id="comment" style="height: 100px;border:#444444 1.5px solid; width:100%; background:rgb(255, 255, 255);border-radius: 5px; font-weight: 600;margin:0px" placeholder="MESSAGE" required>
                                </div>
                                <div class="col-sm-12" style="padding: 5px; margin: 0px;"> 
                                    <button style="background-color:royalblue; height: 40px; width: 100%; color: white; border-radius: 20px;" name="submit" id="submit">SEND US MESSAGE</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=H.%20NO.%20-%20A52,%203rd%20Floor,%20Housing%20Board%20Colony,%20Kankarbagh,%20Lohia%20Nagar,%20Patna,%20Bihar%20800020&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <style>.mapouter{position:relative; text-align:right;height:100%;width:100%; margin-top: 50px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:90%;width:100%;border: 2px rgb(54, 54, 54) solid;}</style>
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
                    
                    <h4 style="font-size: 16px;" class="about-p">OBP Technologies is a web and IT 
                        solution company offering its services to all types 
                        of businesses.Our IT & web services give a unique identity to our client's 
                        businesses in this digital world. 
                        Website designing, web development, SEO, and software development are our main services. 
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
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
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
  
  