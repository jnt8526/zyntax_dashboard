<?php

include 'sys_defaults.php';
include ('mail/Mail.php');


if(isset($_GET['get_quote'])){

        sendMail();
  // jnt();

        // $name = $_POST['exampleInputName'];
        // $email = $_POST['exampleInputEmail1'];

        // $mail = new SendMail();
        // $mail->testFunction($name, $email);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KH8L739Y2L"></script> 
  <script> 
    window.dataLayer = window.dataLayer || []; 
    function gtag(){dataLayer.push(arguments);} 
    gtag('js', new Date()); 

    gtag('config', 'G-KH8L739Y2L'); 
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title><?php echo $SITENAME; ?>.com</title>
  <link rel="icon" type="image/x-icon" href="assets/images/et.png">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i><?php echo $EMAIL; ?></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $LINKEDIN_URL ;?>" target='_blank'><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-telegram"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="" width="150" height="50">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Projects</a></li>
              <li class="scroll-to-section"><a href="blog.php">Blog</a></li><!--setup separate page-->
              <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
              <li class="scroll-to-section"><div class="border-first-button"><a href="#free-quote">Free Quote</a></div></li> <!--go to quote-->
            </ul>        
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Ecommerce Tracking Agency</h6>
                    <h2>Unlock the Power of Your Online Store with Data-Driven Insights</h2>
                    <p>Maximize Your Online Sales with Our Ecommerce Tracking Services. We Use Google Analytics 4 (GA4), Google Search Console (GSC), and Google Tag Manager (GTM) to Deliver Data-Driven Insights</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a><!--go to quote-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/landing_page.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/about-dec-v3.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is <em><?php echo $SITENAME; ?>?</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>where we help businesses drive growth with data-driven insights. Our services include ecommerce tracking, data analysis, and visualization to maximize your online sales.</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            0%<br>
                            <span>Manual <br> tracking</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span><b>Data Driven</b> Insights</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Efficient Optimization</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our Agency <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/icons/GA4.png" alt=""></span>
                        Google <br>Analytics 4
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/icons/GTM.png" alt=""></span>
                        Google <br>Tag Manager
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/icons/GSC.png" alt=""></span>
                        Google <br>Search Console
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/icons/GLS.png" alt=""></span>
                        Google <br>Looker Studio
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/icons/Optimization.png" alt=""></span>
                        <br>Optimization
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Set up ecommerce tracking using GA4</h4>
                                <p>Setting up ecommerce tracking using GA4 is essential for any online business. With GA4, businesses can gain valuable insights into their customers' behavior and optimize their online store accordingly. By implementing ecommerce tracking, businesses can track sales, revenue, and other ecommerce metrics to inform their marketing and business strategies.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Implement GTM</h4>
                                <p>Implementing Google Tag Manager (GTM) allows businesses to manage their website tracking tags more efficiently. GTM enables businesses to track user behavior and engagement on their website, which can provide valuable insights for optimizing marketing and business strategies. With GTM, businesses can easily implement and manage various tracking tags and pixels without the need for coding knowledge.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-02.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Use GSC to monitor website performance</h4>
                                <p>Google Search Console (GSC) provides businesses with valuable insights into how their website is performing in search engines. By monitoring website performance through GSC, businesses can track their search engine rankings, impressions, and click-through rates. This information can inform optimization strategies to improve website visibility and attract more traffic.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Visualize ecommerce data using Looker Studio</h4>
                                <p>Google Looker Studio enables businesses to create interactive visualizations of ecommerce data, providing valuable insights into customer behavior and sales trends. With Looker Studio, businesses can easily track and analyze ecommerce metrics, such as revenue, order volume, and customer demographics, to optimize their ecommerce strategy and increase profitability.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-04.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Implement optimizations and track results</h4>
                                <p>Implementing optimizations on a website and tracking their results is crucial for the success of any online business. By analyzing website data and user behavior, businesses can identify areas for improvement and implement changes to increase engagement, conversions, and revenue. Tracking these optimizations and analyzing the results allows businesses to continually optimize their website and achieve their business goals.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Get Your Free Quote</h6>
            <h4>Grow With Us Now</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="search" method="GET">
            <div class="row">
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="name" name="name" class="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <button type="submit" class="main-button" name="get_quote">Get Quote Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Portofolio</h6>
            <h4>See Our Recent <em>Projects</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/1.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/2.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/3.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/4.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/5.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="assets/images/projects/6.png" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Analytics Reports</h4>
                    <span>Marketing</span>
                  </div>
                </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="assets/images/blog-post-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">SEO Analysis</span>
              <span class="date">03 August 2021</span>
              <a href="#"><h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
              Eiusmod Tempor Incididunt</h4></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
              <span class="author"><img src="assets/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-02.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-03.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-04.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  --> 

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
                     <!--   <div class="col-lg-5">
                           <div id="map">
                            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div> 
                        </div>-->

                        <div class="col-lg-12">
                          <div class="fill-form">
                            <div class="row">
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/call.png" alt="">
                                    <a href="#"><?php echo $PHONE_NO; ?></a>
                                  </div>
                                </div>
                              </div>                              
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/facebook.png" alt="">
                                    <a href="#"><?php echo $FACEBOOK_NAME; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/linkedin.png" alt="">
                                    <a href="<?php echo $LINKEDIN_URL ;?>" target="_blank"><?php echo $LINKEDIN_NAME; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/whatsapp.png" alt="">
                                    <a href="#"><?php echo $TWITTER_NAME; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/twitter.png" alt="">
                                    <a href="#"><?php echo $TELEGRAM_NO; ?></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="info-post">
                                  <div class="icon">
                                    <img src="assets/images/icons/telegram.png" alt="">
                                    <a href="#"><?php echo $PHONE_NO; ?></a>
                                  </div>
                                </div>
                              </div>
                              <!--  -->
                              <hr>
                              <div class="col-lg-6">
                                <fieldset>
                                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                                <fieldset>
                                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                </fieldset>
                                <fieldset>
                                  <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                </fieldset>
                              </div>
                              <div class="col-lg-6">
                                <fieldset>
                                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                                </fieldset>
                              </div>
                              <div class="col-lg-12">
                                <fieldset>
                                  <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <footer>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo date("Y");?>. All Rights Reserved. 
                      <br>Etrace.com <a href="#" target="_parent" title="free css templates"></a></p>
                    </div>
                  </div>
                </div>
              </footer>


              <!-- Scripts -->
              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <script src="assets/js/owl-carousel.js"></script>
              <script src="assets/js/animation.js"></script>
              <script src="assets/js/imagesloaded.js"></script>
              <script src="assets/js/custom.js"></script>

            </body>
            </html>