<!-- Footer Section -->
<div id="footer" class="footerbox">
        <div class="container">
            <div class="footer-main">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>About</h4>
                        </div>
                        <div class="link-section">
                            <ul>
                                <li><a href="#"> Our History </a></li>
                                <li><a href="#"> Rajdhani Vatika </a></li>
                                <li><a href="#"> All Parks </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>Visitor Services</h4>
                        </div>
                        <div class="link-section">
                            <ul>
                                <li><a href="#"> Map & Brochures </a></li>
                                <li><a href="#"> Complaint </a></li>
                                <li><a href="#"> Join Us </a></li>
                                <li><a href="#"> Feedback</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>Quick Links</h4>
                        </div>
                        <div class="link-section">
                            <ul>
                                <li><a href="#"> Celebrations </a></li>
                                <li><a href="#"> Plant Information </a></li>
                                <li><a href="#"> Book Tickets </a></li>
                                <li><a href="#"> Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>Get Direction</h4>
                        </div>
                        <div class="link-section">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.0733374634715!2d85.11289351439865!3d25.60247918370929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5819b21f26f9%3A0xea868d555695f2fc!2sEco%20Park!5e0!3m2!1sen!2sin!4v1598082468044!5m2!1sen!2sin"
                                style="border:0;" allowfullscreen="" width="100%" height="250" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lastfoot">
            <p>Copyright&nbsp;©&nbsp;2020&nbsp;<a href="/" title="Drishti Eye Care" class="clrBlack1 text-white">PATNA PARK DIVISION</a>. All Rights Reserved. | Designed &amp; Maintained By:&nbsp;<a target="_blank" href="http://www.filliptechnologies.com/"
                    title="Fillip Technologies" class="clrBlack1 text-white">Fillip Technologies</a></p>
        </div>
    </div>
    <!-- Footer Section -->

<!-- left and right sidebar Model -->

<div id="sticky-social">
        <ul>
            <li class="bg-theme-colored2" style="border-radius:0 15px 0 0"> <a href="#" target="_blank" class="text-white"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
            <li class="bg-theme-colored2" style="border-top:1px solid #fff;border-bottom:1px solid #fff"> <a href="#" target="_blank" class="text-white"><i class="fa fa-instagram"></i> <span>Instagram</span></a></li>
            <li class="bg-theme-colored2" style="border-top:1px solid #fff;border-bottom:1px solid #fff"> <a href="#" target="_blank" class="text-white"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
            <li class="bg-theme-colored2" style="border-top:1px solid #fff;border-bottom:1px solid #fff"> <a href="#" target="_blank" class="text-white"><i class="fa fa-youtube"></i> <span>Youtube</span></a></li>
            <li class="bg-theme-colored2" style="border-radius:0 0 15px 0"> <a href="#" target="_blank" class="text-white"><i class="fa fa-linkedin"></i> <span>LinkedIn</span></a></li>
        </ul>
    </div>
    <!-- <div id="sticky-enquiry">
        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"> <img src="img/sticky.png" alt="sticky" style="height:60px;transform:rotate(-90deg);transform-origin:right;margin-top:-100%"> </a>
    </div> -->
    <!-- left and right sidebar Model -->
<script src="js/bootstrap.min.js "></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js "></script>
    <script src="js/custom.js "></script>

    <script>
        function bannerSwitcher() {
            next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length)
                next.prop('checked', true);
            else
                $('.sec-1-input').first().prop('checked', true);
        }

        var bannerTimer = setInterval(bannerSwitcher, 5000);

        $('nav .controls label').click(function() {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000)
        });
    </script>
    <script>
        $(window).scroll(function() {
            topOfFooter = $('#footer').position().top;
            scrollheight = window.scrollY + window.innerHeight;
            if (scrollheight >= topOfFooter) {
                $("#sticky-social,#sticky-enquiry").fadeOut(500);
            } else {
                $("#sticky-social,#sticky-enquiry").fadeIn(500);
            }
        });
    </script>
    <script>
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            autoplay: true,
            navText: [
                '<i class="flaticon-left-arrow"></i>',
                '<i class="flaticon-next"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                960: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });
        // owl.on("mousewheel", ".owl-stage", function(e) {
        //   if (e.deltaY > 0) {
        //     owl.trigger("next.owl");
        //   } else {
        //     owl.trigger("prev.owl");
        //   }
        //   e.preventDefault();
        // });
    </script>

</body>

</html>