@extends('front.layout.app')

<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>HotMagazine</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	@include('front.layout.styles')

</head>
<body>

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									<li>
										<span class="city-weather">London, United Kingdom</span>
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
											<path fill="#777777" d="M208,64c8.833,0,16-7.167,16-16V16c0-8.833-7.167-16-16-16s-16,7.167-16,16v32
												C192,56.833,199.167,64,208,64z M332.438,106.167l22.625-22.625c6.249-6.25,6.249-16.375,0-22.625
												c-6.25-6.25-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625
												C316.062,112.417,326.188,112.417,332.438,106.167z M16,224h32c8.833,0,16-7.167,16-16s-7.167-16-16-16H16
												c-8.833,0-16,7.167-16,16S7.167,224,16,224z M352,208c0,8.833,7.167,16,16,16h32c8.833,0,16-7.167,16-16s-7.167-16-16-16h-32
												C359.167,192,352,199.167,352,208z M83.541,106.167c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625
												L83.541,60.917c-6.25-6.25-16.374-6.25-22.625,0c-6.25,6.25-6.25,16.375,0,22.625L83.541,106.167z M400,256
												c-5.312,0-10.562,0.375-15.792,1.125c-16.771-22.875-39.124-40.333-64.458-51.5C318.459,145,268.938,96,208,96
												c-61.75,0-112,50.25-112,112c0,17.438,4.334,33.75,11.5,48.438C47.875,258.875,0,307.812,0,368c0,61.75,50.25,112,112,112
												c13.688,0,27.084-2.5,39.709-7.333C180.666,497.917,217.5,512,256,512c38.542,0,75.333-14.083,104.291-39.333
												C372.916,477.5,386.312,480,400,480c61.75,0,112-50.25,112-112S461.75,256,400,256z M208,128c39.812,0,72.562,29.167,78.708,67.25
												c-10.021-2-20.249-3.25-30.708-3.25c-45.938,0-88.5,19.812-118.375,53.25C131.688,234.083,128,221.542,128,208
												C128,163.812,163.812,128,208,128z M400,448c-17.125,0-32.916-5.5-45.938-14.667C330.584,461.625,295.624,480,256,480
												c-39.625,0-74.584-18.375-98.062-46.667C144.938,442.5,129.125,448,112,448c-44.188,0-80-35.812-80-80s35.812-80,80-80
												c7.75,0,15.062,1.458,22.125,3.541c2.812,0.792,5.667,1.417,8.312,2.521c4.375-8.562,9.875-16.396,15.979-23.75
												C181.792,242.188,216.562,224,256,224c10.125,0,19.834,1.458,29.25,3.709c10.562,2.499,20.542,6.291,29.834,11.291
												c23.291,12.375,42.416,31.542,54.457,55.063C378.938,290.188,389.209,288,400,288c44.188,0,80,35.812,80,80S444.188,448,400,448z"
											/>
										</svg>
										<span class="cel-temperature">+7</span>
									</li>
									<li><span class="time-now">Thursday 8 January 2015 / 21:20</span></li>
									<li><a href="#">Log In</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#">Purchase Theme</a></li>
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html"><img src="{{ asset('dist-front/images/logo.png') }}" alt=""></a>
						</div>

						<div class="advertisement">
							<div class="desktop-advert">
								<img src="{{ asset('dist-front/upload/addsense/468x60.jpg') }}" alt="">
							</div>
							<div class="tablet-advert">
								<img src="{{ asset('dist-front/upload/addsense/468x60.jpg') }}" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

								<li><a class="active" href="{{ route('home') }}">Start</a></li>
								<li><a href="game-category.html">News</a></li>
								<li class="drop-arrow"><a href="game-category.html">Reviews</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown">

												<div class="owl-wrapper">
													<div class="owl-carousel" data-num="5">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st1.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st2.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st3.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st4.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st5.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>
								<li><a href="game-category.html">Video</a></li>
								<li><a href="game-category.html">Xbox One</a></li>
								<li class="drop-arrow"><a href="game-category.html">PS 4</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown">

												<div class="owl-wrapper">
													<div class="owl-carousel" data-num="5">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st1.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st2.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st3.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st4.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="{{ asset('dist-front/upload/news-posts/st5.jpg') }}" alt="">
																<div class="rate-level">
																	<p><span>7.4</span> Good</p>
																</div>
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>
								<li><a href="game-category.html">Wii U</a></li>
								<li><a href="game-category.html">Pc</a></li>
								<li><a href="game-category.html">Mobile Gaming</a></li>
								<li class="drop-arrow drop"><a href="games-category.html">More</a>
									<ul class="dropdown">
										<li><a href="game-category.html">Nintendo</a></li>
										<li><a href="game-category.html">App Games</a></li>
									</ul>
								</li>

							</ul>
							<form class="navbar-form navbar-right" role="search">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header -->

		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">breaking news</span>
					<span class="new-news">New</span>
					<ul id="js-news">
						<li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a> Donec odio. Quisque volutpat mattis eros... </li>
						<li class="news-item"><span class="time-news">12:40 pm</span>  <a href="#">Dëshmitarja Abrashi: E kam parë Oliverin në turmë,</a> ndërsa neve na shpëtoi “çika Mille” </li>
						<li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Franca do të bashkëpunojë me Kosovën në fushën e shëndetësisë. </a></li>
						<li class="news-item"><span class="time-news">01:00 am</span>  <a href="#">DioGuardi, kështu e mbrojti Kosovën në Washington, </a> para serbit Vejvoda </li>
					</ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>27 may 2013</li>
										<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
										<li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
										<li><i class="fa fa-eye"></i>872</li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="post-gallery">
									<ul class="bxslider">
										<li><img src="{{ asset('dist-front/upload/news-posts/single1.jpg') }}" alt=""></li>
										<li><img src="{{ asset('dist-front/upload/news-posts/single2.jpg') }}" alt=""></li>
									</ul>
									<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
								</div>

								<div class="post-content">

									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. <a href="#">Vestibulum volutpat</a>, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

									<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
									<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>

								</div>

								<div class="article-inpost">
									<div class="row">
										<div class="col-md-5">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art.jpg') }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-7">
											<div class="text-content">
												<h2>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate. </h2>
												<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
												<p>Sed egestas, <a href="#">ante et vulputate volutpat, eros</a> pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="post-content">
									<h2>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Phasellus hendrerit.</a> Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
								</div>

								<div class="article-inpost">
									<div class="row">
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art2.jpg') }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art4.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art3.jpg') }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art5.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art4.jpg') }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art8.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art6.jpg') }}" alt="">
													<div class="hover-image">
                                                            <a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art6.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art7.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art7.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="{{ asset('dist-front/upload/news-posts/single-art8.jpg') }}" alt="">
													<div class="hover-image">
														<a class="zoom" href="{{ asset('dist-front/upload/news-posts/single-art9.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="review-box">
									<div class="title-section">
										<h1><span>Reviewer overview</span></h1>
									</div>
									<div class="member-skills">
										<p>Design - 9/10</p>
										<div class="meter nostrips design">
											<p style="width: 90%"></p>
										</div>
										<p>Development - 10/10</p>
										<div class="meter nostrips developer">
											<p style="width: 100%"></p>
										</div>
										<p>UX - 7/10</p>
										<div class="meter nostrips ux">
											<p style="width: 70%"></p>
										</div>
										<p>Responsive - 8/10</p>
										<div class="meter nostrips responsive">
											<p style="width: 80%"></p>
										</div>
									</div>
									<div class="summary-box">
										<h2>Summary</h2>
										<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae Sed vel lacus. </p>
										<div class="summary-degree">
											<p><span>8.9</span>Excellent!</p>
										</div>
									</div>
								</div>

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Fashion</a></li>
										<li><a href="#">Politics</a></li>
										<li><a href="#">Sport</a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="prev-next-posts">
									<div class="prev-post">
										<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="prev post">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
											</ul>
										</div>
									</div>
									<div class="next-post">
										<img src="{{ asset('dist-front/upload/news-posts/listw5.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="next post">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										<li>
											<a href="#more-autor" data-toggle="tab">More From Autor</a>
										</li>
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<img src="{{ asset('dist-front/upload/users/avatar1.jpg') }}" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><span>Jane Smith</span><a href="autor-details.html">18 Posts</a></h1>
														<ul class="autor-social">
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
															<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
													<p>
														Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. 
													</p>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="{{ asset('dist-front/upload/news-posts/gal1.jpg') }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{ asset('dist-front/upload/news-posts/gal2.jpg') }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{ asset('dist-front/upload/news-posts/gal3.jpg') }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="{{ asset('dist-front/upload/news-posts/gal4.jpg') }}" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									
										<div class="item news-post image-post3">
											<img src="{{ asset('dist-front/upload/news-posts/2.jpg') }}" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="upload/news-posts/3.jpg" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post video-post">
											<img src="{{ asset('dist-front/upload/news-posts/4.jpg') }}" alt="">
											<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
											<div class="hover-box">
												<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>
									
										<div class="item news-post image-post3">
											<img src="{{ asset('dist-front/upload/news-posts/2.jpg') }}" alt="">
											<div class="hover-box">
												<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<!-- End carousel box -->

								<!-- contact form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
									</div>
									<form id="comment-form">
										<div class="row">
											<div class="col-md-4">
												<label for="name">Name*</label>
												<input id="name" name="name" type="text">
											</div>
											<div class="col-md-4">
												<label for="mail">E-mail*</label>
												<input id="mail" name="mail" type="text">
											</div>
											<div class="col-md-4">
												<label for="website">Website</label>
												<input id="website" name="website" type="text">
											</div>
										</div>
										<label for="comment">Comment*</label>
										<textarea id="comment" name="comment"></textarea>
										<button type="submit" id="submit-contact">
											Post Comment
										</button>
									</form>
								</div>
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul>
							</div>

							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a href="#option1" data-toggle="tab">Popular</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">Recent</a>
									</li>
									<li>
										<a href="#option3" data-toggle="tab">Top Reviews</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw1.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw2.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw3.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw5.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="option2">
										<ul class="list-posts">

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw3.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw5.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw1.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw2.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>										
									</div>
									<div class="tab-pane" id="option3">
										<ul class="list-posts">

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw1.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw3.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw2.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>

											<li>
												<img src="{{ asset('dist-front/upload/news-posts/listw5.jpg') }}" alt="">
												<div class="post-content">
													<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i>27 may 2013</li>
													</ul>
												</div>
											</li>
										</ul>										
									</div>
								</div>
							</div>

							<div class="widget post-widget">
								<div class="title-section">
									<h1><span>Most Commented</span></h1>
								</div>
								<ul class="list-posts">
									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw1.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw3.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw2.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw5.jpg') }}" alt="">
										<div class="post-content">
											<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>

							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="{{ asset('dist-front/upload/addsense/300x250.jpg') }}" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="{{ asset('dist-front/upload/addsense/200x200.jpg') }}" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="{{ asset('dist-front/upload/addsense/300x250.jpg') }}" alt="">
								</div>
							</div>

						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </p>
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
									<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw4.jpg') }}" alt="">
										<div class="post-content">
											<a href="game-category.html">x-box</a>
											<h2><a href="single-post.html">Pellentesque odio nisi, euismod in ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src={{ asset('dist-front/upload/news-posts/listw1.jpg') }}" alt="">
										<div class="post-content">
											<a href="game-category.html">PS4</a>
											<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="{{ asset('dist-front/upload/news-posts/listw3.jpg') }}" alt="">
										<div class="post-content">
											<a href="game-category.html">other</a>
											<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget tags-widget">
								<h1>Popular Tags</h1>
								<ul class="tag-list">
									<li><a href="#">News</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Politics</a></li>
									<li><a href="#">Sport</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">World</a></li>
									<li><a href="#">Music</a></li>
								</ul>
							</div>

							<div class="widget subscribe-widget">
								<form class="subscribe-form">
									<h1>Subscribe to RSS Feeds</h1>
									<input type="text" name="subscribe" id="subscribe" placeholder="Email"/>
									<button type="submit">
										<i class="fa fa-arrow-circle-right"></i>
									</button>
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Flickr Photos</h1>
								<ul class="flickr-list">
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/1.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/2.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/3.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/4.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/5.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('dist-front/upload/flickr/6.jpg') }}" alt=""></a></li>
								</ul>
								<a href="#">View more photos...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2015 hotmagazine.com</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="{{ route('home') }}">Start</a></li>
									<li><a href="index.html">Purchase Theme</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	@include('front.layout.scripts')

</body>
</html>