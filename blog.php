<?php

include 'sys_defaults.php';

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

	<title>Blogs - <?php echo $SITENAME; ?>.com</title>
	<link rel="icon" type="image/x-icon" href="assets/images/et.png">

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="assets/css/fontawesome.css">
	<link rel="stylesheet" href="assets/css/blog_post.css">
	<!-- <link rel="stylesheet" href="assets/css/animated.css"> -->
	<link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>


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
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<div id="blog" class="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
					<div class="section-heading">
						<h4>Trending <em>Posts</em></h4>
						<div class="line-dec"></div>
					</div>
				</div>
				<div class="col-lg-4"></div>
				<div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
					<div class="blog-post">
						<div class="thumb">
							<a href="#"><img src="assets/images/blog-post-01.jpg" alt=""></a>
						</div>
						<div class="down-content">
							<span class="category">E-commerce</span>
							<span class="date">07 March 2023</span>
							<a href="blog_posts/post1.php"><h4>Importance of ecommerce tracking</h4></a>
							<p>Ecommerce tracking is a crucial aspect of any successful online business. It involves the collection and analysis of data on customer behavior and sales performance to optimize marketing strategies and drive revenue growth.</p>
							<span class="author"><img src="assets/images/author-post.jpg" alt="">By: Danushka </span>
							<div class="border-first-button"><a href="blog_posts/post1.php">Discover More</a></div>
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
										<span class="category">Tracking Web data</span>
										<span class="date">24 March 2023</span>
										<a href="blog_posts/post1.php"><h4>Set up ecommerce tracking using GA4</h4></a>
										<p>In today's competitive online business world, it is essential to have a comprehensive understanding of customers'...</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="post-item">
									<div class="thumb">
										<a href="#"><img src="assets/images/blog-post-03.jpg" alt=""></a>
									</div>
									<div class="right-content">
										<span class="category">Data Visualizing</span>
										<span class="date">02 April 2023</span>
										<a href="blog_posts/post1.php"><h4>Data analysis and visualization</h4></a>
										<p>Data analysis and visualization are essential components of any successful ecommerce business strategy..</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="post-item last-post-item">
									<div class="thumb">
										<a href="#"><img src="assets/images/blog-post-04.jpg" alt=""></a>
									</div>
									<div class="right-content">
										<span class="category">Data Visualizing</span>
										<span class="date">12 April 2023</span>
										<a href="blog_posts/post1.php"><h4>Why does Google Looker studio identify as the best for the ecommerce analytics tracking</h4></a>
										<p>As the world of ecommerce continues to grow and evolve, the importance of data...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  

	<div id="contact" class="contact-us section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
					<form id="contact" action="" method="post">
						<div class="row">					
							<div class="col-lg-12">
								<div class="fill-form">
									<div class="row">  
										<h3>Subscribe to newsletter</h3>
										<div class="col-lg-6">
											<fieldset>
												<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
											</fieldset>
										</div>                      			
										<div class="col-lg-6">
											<fieldset>
												<button type="submit" id="form-submit" class="main-button ">SUBSCRIBE</button>
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