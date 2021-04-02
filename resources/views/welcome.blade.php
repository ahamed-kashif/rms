<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>F S R E L</title>
    <link rel="shortcut icon" href="{{asset('landing_page/img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('landing_page/css/plugins.css')}}" />
    <link rel="stylesheet" href="{{asset('landing_page/css/style.css')}}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Preloader -->
<div id="preloader"></div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Sidebar Section --><a href="#" class="js-bauen-nav-toggle bauen-nav-toggle"><i></i></a>
<aside id="bauen-aside">
    <!-- Logo -->
    <div class="bauen-logo">
        <a href="/"> <img src="{{asset('landing_page/img/logo.png')}}" class="logo-img" alt="">
            <h5>First Security <span>Real Estate Ltd</span></h5>
        </a>
    </div>
    <!-- Menu -->
    <nav class="bauen-main-menu">
        <ul>
            <li><a href='/#home'>Home</a></li>
            <li><a href='/#about'>About Us</a></li>
            <li><a href='/#projects'>Projects</a></li>
            <li><a href='/#contact'>Contact</a></li>
        </ul>
    </nav>
    <!-- Sidebar Footer -->
    <div class="bauen-footer">
        <ul>
            <li><a href="https://www.facebook.com/FSREL"><i class="ti-facebook"></i></a></li>
        </ul>
    </div>
</aside>
<!-- Main -->
<div id="bauen-main">
    <!-- Slider -->
    <header id="home" class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-right item bg-img" data-overlay-dark="3" data-background="{{asset('landing_page/img/slider/1.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 offset-md-5">
                                <div class="o-hidden">
                                    <h1>Innovate Desing in Bangladesh</h1>
                                    <h4>Where Dreams Come Home</h4>

                                    <div class="butn-light mt-30 mb-30"><a href="#contact"><span>Contact Us</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right item bg-img" data-overlay-dark="4" data-background="{{asset('landing_page/img/slider/2.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 offset-md-5">
                                <div class="o-hidden">
                                    <h1>Innovate Desing in Bangladesh</h1>
                                    <h4>Where Dreams Come Home</h4>

                                    <div class="butn-light mt-30 mb-30"><a href="#contact"><span>Contact Us</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Corner -->
        <div class="hero-corner"></div>
        <div class="hero-corner3"></div>
    </header>
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- About -->
        <section id="about" class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">About <span>FSREL</span></h2>
                        <p>First Security Real Estate Ltd. has started its journey in the year of 2010, FSREL came in real estate to bring Quality, Commitment, Service and safe investment for the people of our country. Since the inception we have been winning our clients hearts by ensuring timely handover of their desired living as the way we promised. </p>
                        <p>Our hi-skilled construction-team will ensure a long life building and safety of your stay. Actually, the surprising fact is that, within this short span of time, FSREL handed-over 35 projects in time. Moreover, right now FSREL has 09 on-going projects. </p>
                        <p>Our promise remains to develop a portfolio of luxury spaces and offer investors as well as buyers an unparalleled quality of service, inimitable by competitors. It is the commitment to both impeccably high standards and attention to detail that drive us to our success.</p>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="{{asset('landing_page/img/about.jpg')}}" class="img-fluid" alt=""> </div>
                            <div class="about-img-2 about-buro">Dhaka Office</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects -->
        <section id="projects" class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Projects</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/1.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1974,1597 & 2268 sft</a></h6>
                                    <h6><a href="#">Location - Plot-30, Road-4, Block-G, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/2.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1921 sft</a></h6>
                                    <h6><a href="#">Location - Plot-26, Road-8, Block-E, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/3.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1735 & 1702 sft</a></h6>
                                    <h6><a href="#">Location - Plot-14, Road-8, Block-M, Banasree, Dhaka.</a></h6>>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/4.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1701 sft</a></h6>
                                    <h6><a href="#">Location - Plot-35, Road-6, Block-F, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/5.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1807 sft</a></h6>
                                    <h6><a href="#">Location - Plot-23, Road-5, Block-B, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/6.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1813 sft</a></h6>
                                    <h6><a href="#">Location - Plot-53, Road-5, Block-G, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/7.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1800 sft</a></h6>
                                    <h6><a href="#">Location - Plot-08, Road-2, Block-G, Banasree, Dhaka.</a></h6>>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('landing_page/img/projects/8.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">Flat Size - 1456 & 1444 sft</a></h6>
                                    <h6><a href="#">Location - Plot-11, Road-1, Block-H, Banasree, Dhaka.</a></h6>
                                    <div class="line"></div> <a href="#contact"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services -->
        <!--   <section id="services" class="services section-padding">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h2 class="section-title">Our <span>Services</span></h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="item">
                              <a href="architecture.html"> <img src="img/icons/icon-1.png" alt="">
                                  <h5>Architecture</h5>
                                  <div class="line"></div>
                                  <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                  <div class="numb">01</div>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="item">
                              <a href="interior-design.html"> <img src="img/icons/icon-2.png" alt="">
                                  <h5>Interior Design</h5>
                                  <div class="line"></div>
                                  <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                  <div class="numb">02</div>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="item">
                              <a href="urban-design.html"> <img src="img/icons/icon-3.png" alt="">
                                  <h5>Urban Design</h5>
                                  <div class="line"></div>
                                  <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                  <div class="numb">03</div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </section> -->
        <!-- Blog -->
        <!-- <section id="blog" class="bauen-blog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Current <span>News</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/1.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Architecture </a> - 20.12.2021
                                    </span>
                                    <h5><a href="post.html">Modern Architectural Structures</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/2.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Interior</a> - 18.12.2021
                                    </span>
                                    <h5><a href="post.html">Modernism in Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/3.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Urban</a> - 16.12.2021
                                    </span>
                                    <h5><a href="post.html">Postmodern Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/4.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Planing</a> - 14.12.2021
                                    </span>
                                    <h5><a href="post.html">Modern Architecture Buildings</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Contact -->
        <section id="contact" class="section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Contact <span>Us</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p>FSRELs Vision is to Provide Excellent product and services of superior quality and value that will enhance the lives of consumers today and for generations to come.</p>
                        <p><b>REHAB :</b> *******</p>
                    </div>
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact No</b>
                        <ul style="list-style: none">
                            <li>+8801799399592</li>
                            <li>+8801741896101</li>
                            <li>+8801619399592</li>
                        </ul>
                        <p><b>Email :</b>support@fsrel.com</p>
                        <p><b>Address :</b> House # 07, Road # 03, Block # F, Banasree, Rampura, Dhaka 1219</p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <form  class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="3" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="butn-dark mt-15" type="button"><a href="javascript:void()" onclick="alert('Thank you for your message!')"><span>Send</span></a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{('/landing_page/img/banner2.jpg')}}" data-overlay-dark="3">
                <div class="container">
                    <div class="row">
                        <!-- Promo video -->
                        <div class="col-md-6">
                            <div class="vid-area">
                                <div class="vid-icon">
                                    <a class="play-button vid" href="https://www.youtube.com/watch?v=o6eokLFh_S0">
                                        <svg class="circle-fill">
                                            <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                        </svg>
                                        <svg class="circle-track">
                                            <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                        </svg> <span class="polygon">
                                                <i class="ti-control-play"></i>
                                            </span> </a>
                                </div>
                                <div class="cont mt-15 mb-30">
                                    <h5>View promo video</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Testiominals -->
                        <div class="col-md-5 offset-md-1">
                            <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                <div class="head-box">
                                    <h4>BOARD OF DIRECTORS</h4>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img src="{{asset('landing_page/img/quot.png')}}" alt=""></span>
                                        <p>MD. Mizanur Rahman, the founder promoter of FSREL, opts to do business by providing good products and services in Bangladesh. With his visionary leadership and extensive business knowledge, FSREL drives forward to not only provide superior quality products and services but to demonstrate unparalleled foresight.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{asset('landing_page/img/team/1.jpg')}}" alt=""> </div>
                                            <div class="cont">
                                                <h6>MD. MIZANUR RAHMAN</h6> <span>MANAGING DIRECTOR</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                                <img src="{{asset('landing_page/img/quot.png')}}" alt="">
                                            </span>
                                        <p>MD. Shakhawat Hossaib has an experienced entrepreneur with a long track record in this sector. Under his strong leadership and entrepreneurial spirit, FSREL has become one of the leading real estate developers in the country.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{asset('landing_page/img/team/2.jpg')}}" alt=""> </div>
                                            <div class="cont">
                                                <h6>MD. SHAKHAWAT HOSSAIN</h6> <span>CHAIRMAN</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                                <img src="{{asset('landing_page/img/quot.png')}}" alt="">
                                            </span>
                                        <p>Riazul Zannah completed his BBA with a specialization in Strategic Management from IUB. Under his leadership, FSREL strives to strengthen its strategic marketing and branding. Moreover, his focus on quality and driving product innovation by incorporating modern features into FSREL projects continue to truly differentiate it from competitors.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{asset('landing_page/img/team/4.jpg')}}" alt=""> </div>
                                            <div class="cont">
                                                <h6>RIAZUL ZANNAH</h6> <span>GENERAL MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients -->
        <section class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('landing_page/client_logo/company-logo1.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('landing_page/client_logo/company-logo2.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('landing_page/client_logo/company-logo3.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('landing_page/client_logo/company-logo4.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('landing_page/client_logo/company-logo5.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
         <br> <br>
        <!-- Footer -->
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-left">
                                <p>© 2021 FSREL. All right reserved.</p>
                            </div>
                        </div>
                        <!--  <div class="col-md-4 abot">
                             <div class="social-icon"> <a href="index.html"><i class="ti-facebook"></i></a> <a href="https://www.facebook.com/FSREL"></i></a> </div>
                         </div> -->
                        <div class="col-md-4"> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('landing_page/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('landing_page/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('landing_page/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('landing_page/js/pace.js')}}"></script>
<script src="{{asset('landing_page/js/popper.min.js')}}"></script>
<script src="{{asset('landing_page/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing_page/js/scrollIt.min.js')}}"></script>
<script src="{{asset('landing_page/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('landing_page/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('landing_page/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('landing_page/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('landing_page/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('landing_page/js/YouTubePopUp.js')}}"></script>
<script src="{{asset('landing_page/js/FacebookPopUp.js')}}"></script>
<script src="{{asset('landing_page/js/custom.js')}}"></script>
<script>
    $(document).ready(function(){
          $('.con').hide();
      });
      $('.item').hover(
        function(){
          $(this).find('.con').show();
        },
        function(){
          $(this).find('.con').hide();
        }
      );
</script>
</body>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="1927881484147239"
  theme_color="#d4a88c">
      </div>

</html>
