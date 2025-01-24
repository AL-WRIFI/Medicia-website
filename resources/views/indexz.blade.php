<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Home V.2 - Medicia</title>
		<link rel="shortcut icon" href="{{asset('assets/home/images/logo/favourite_icon_1.png')}}">

		<!-- css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/line-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/magnific-popup.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/jquery-ui.css')}}">


		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/style.css')}}">

	</head>


	<body class="home-v2">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="las la-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header-section - start
		================================================== -->
		<header id="header-section" class="header-section clearfix">
			<div class="header-top bg-white d-flex align-items-center clearfix">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-6">
							<div class="info-list ul-li clearfix">
								<ul class="clearfix">
									<li><a href="#!"><i class="las la-map-marked-alt mr-1"></i> Store Location</a></li>
									<li><a href="#!"><i class="las la-envelope-open-text mr-1"></i> support@admin.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="info-list ul-li-right clearfix">
								<ul class="clearfix">
									<li><a href="#!"><span class="mr-1">Htoline:</span> 533 655 - 656</a></li>
									<li>
										<div class="dropdown select-option">
											<button class="dropdown-toggle" type="button" id="language-select" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												English
											</button>
											<div aria-labelledby="language-select" class="dropdown-menu ul-li-block clearfix">
												<ul class="clearfix">
													<li><a href="#!">Franch</a></li>
													<li><a href="#!">Bangla</a></li>
													<li><a href="#!">Spanish</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="header-middle bg-gray d-flex align-items-center clearfix">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-3 col-md-12">
							<div class="brand-logo clearfix">
								<a href="index.html" class="brand-link">
									<img src="{{asset('assets/home/images/logo/logo_1.png')}}" alt="logo_not_found">
								</a>

								<div class="btns-group ul-li-right clearfix">
									<ul class="clearfix">
										<li>
											<button type="button" class="mobile-menu-btn">
												<i class="las la-bars"></i>
											</button>
										</li>
										<li>
											<button class="mobile-btn-cart">
												<i class="las la-shopping-bag"></i>
												<small class="cart-counter bg-royal-blue">03</small>
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-9 col-md-12">
							<div class="btns-group ul-li-right clearfix">
								<ul class="clearfix">
									<li>
										<form action="#">
											<div class="form-item">
												<input type="search" name="search" placeholder="Search your Products">
												<button type="submit"><i class="la la-search"></i></button>
											</div>
										</form>
									</li>
									<li class="dropdown">
										<button type="button" class="btn-user" id="user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="lar la-user"></i>
										</button>
										<div aria-labelledby="user-dropdown" class="user-dropdown dropdown-menu ul-li-block clearfix">
											<div class="profile-info clearfix">
												<a href="#!" class="user-thumbnail">
													<img src="{{asset('assets/home/images/meta/img_2.png')}}" alt="thumbnail_not_found">
												</a>
												<div class="user-content">
													<h4 class="user-name"><a href="#!">Rakibul Hassan</a></h4>
													<span class="user-title">Seller</span>
												</div>
											</div>
											<ul class="clearfix">
												<li><a href="#!"><i class="las la-user-circle"></i> Profile</a></li>
												<li><a href="#!"><i class="las la-user-cog"></i> Settings</a></li>
												<li><a href="#!"><i class="las la-sign-out-alt"></i> Logout</a></li>
											</ul>
										</div>
									</li>
									<li class="dropdown">
										<button class="btn-cart" id="cart-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="las la-shopping-bag"></i>
											<small class="cart-counter bg-royal-blue">03</small>
										</button>
										<div class="cart-dropdown dropdown-menu" aria-labelledby="cart-dropdown">
											<h3 class="title-text">Cart Items:- 03</h3>

											<div class="cart-items-list ul-li-block clearfix">
												<ul class="clearfix">
													<li>
														<div class="item-image">
															<img src="{{asset('assets/home/images/cart/img_1.png')}}" alt="image_not_found">
														</div>
														<div class="item-content">
															<h4 class="item-title">Digital Thermometer</h4>
															<span class="item-price">$39.50</span>
														</div>
														<button type="button" class="remove-btn"><i class="las la-times"></i></button>
													</li>

													<li>
														<div class="item-image">
															<img src="{{asset('assets/home/images/cart/img_2.png')}}" alt="image_not_found">
														</div>
														<div class="item-content">
															<h4 class="item-title">Digital Infrared Thermometer</h4>
															<span class="item-price">$39.50</span>
														</div>
														<button type="button" class="remove-btn"><i class="las la-times"></i></button>
													</li>

													<li>
														<div class="item-image">
															<img src="{{asset('assets/home/images/cart/img_3.png')}}" alt="image_not_found">
														</div>
														<div class="item-content">
															<h4 class="item-title">Digital Blood Pressure Machine</h4>
															<span class="item-price">$39.50</span>
														</div>
														<button type="button" class="remove-btn"><i class="las la-times"></i></button>
													</li>
												</ul>
											</div>

											<div class="btns-group ul-li clearfix">
												<ul class="clearfix">
													<li><a href="cart.html" class="btn bg-default-black">View Cart</a></li>
													<li><a href="checkout.html" class="btn bg-royal-blue">Checkout</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="header-bottom d-flex align-items-center clearfix">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-2">
							<div class="all-categories clearfix">
								<button type="button" class="category-btn" data-toggle="collapse" data-target="#categories-collapse" aria-expanded="false" aria-controls="categories-collapse">
									<i class="las la-bars"></i> 
									All Categories
								</button>

								<div id="categories-collapse" class="categories-collapse collapse">
									<div class="card card-body ul-li-block">
										<ul class="clearfix">
											<li><a href="#!"><span><i class="las la-microscope"></i></span> Equipment</a></li>
											<li><a href="#!"><span><i class="las la-capsules"></i></span> General Medecine</a></li>
											<li><a href="#!"><span><i class="las la-dna"></i></span> Food Suppliment</a></li>
											<li><a href="#!"><span><i class="las la-first-aid"></i></span> Pharmacy</a></li>
											<li><a href="#!"><span><i class="las la-stethoscope"></i></span> Medical Tools</a></li>
											<li><a href="#!"><span><i class="las la-syringe"></i></span> Surgery Equipment</a></li>
											<li><a href="#!"><span><i class="las la-brain"></i></span> Neurology</a></li>
											<li><a href="#!"><span><i class="las la-x-ray"></i></span> Orthopredic</a></li>
											<li><a href="#!"><span><i class="las la-thermometer"></i></span> Diabetic Medicine</a></li>
											<li><a href="#!"><span><i class="las la-user-nurse"></i></span> ICU Euipment</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-8">
							<nav class="main-menu ul-li-center clearfix">
								<ul class="clearfix">
									<li class="active menu-item-has-child">
										<a href="#!">Home</a>
										<ul class="submenu">
											<li class="active"><a href="index.html">Home V.1</a></li>
											<li><a href="index-2.html">Home V.2</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li class="menu-item-has-child">
										<a href="#!">Collections</a>
										<div class="mega_menu">
											<div class="row">
												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">Medical Equipments</h3>
														<ul class="clearfix">
															<li><a href="#!">Blood Pressure Machine</a></li>
															<li><a href="#!">First Aid Kit</a></li>
															<li><a href="#!">Digital Thermometer</a></li>
															<li><a href="#!">Surgical Mask</a></li>
															<li><a href="#!">Digital Stethoscope</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">Medicines</h3>
														<ul class="clearfix">
															<li><a href="#!">General Medicine</a></li>
															<li><a href="#!">Diabetes Insulin</a></li>
															<li><a href="#!">Food Suppliment</a></li>
															<li><a href="#!">Kids Medecine</a></li>
															<li><a href="#!">Pregnancy Medicine</a></li>
															<li><a href="#!">Health and Beauty</a></li>
															<li><a href="#!">Orthopedic</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">Medical Tools</h3>
														<ul class="clearfix">
															<li><a href="#!">Accu Chek Active</a></li>
															<li><a href="#!">Glucometer</a></li>
															<li><a href="#!">Plaster Machine</a></li>
															<li><a href="#!">Oximeter</a></li>
															<li><a href="#!">Microscope</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="promotion-fullimage clearfix">
														<a href="#!" class="item-image">
															<img src="{{asset('assets/home/images/promotion/img_8.jpg')}}" alt="image_not_found">
														</a>
														<div class="promotion-content position-top">
															<small class="d-block text-white mb-1">Medical Supplies</small>
															<h3 class="item-title">
																<span class="d-block">Coronavirus Medical</span> <span class="d-block">Supplies</span>
															</h3>
															<a href="#!" class="btn-underline">Shop Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="menu-item-has-child">
										<a href="#!">Shop</a>
										<ul class="submenu">
											<li class="menu-item-has-child">
												<a href="#!">Shop Grid</a>
												<ul class="submenu">
													<li><a href="shop-grid-2-column.html">Grid 2 Column</a></li>
													<li><a href="shop-grid-3-column.html">Grid 3 Column</a></li>
													<li><a href="shop-grid-4-column.html">Grid 4 Column</a></li>
												</ul>
											</li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li class="menu-item-has-child">
												<a href="#!">Shop Details</a>
												<ul class="submenu">
													<li><a href="shop-details-1.html">Shop Details v1</a></li>
													<li><a href="shop-details-2.html">Shop Details v2</a></li>
													<li><a href="shop-details-3.html">Shop Details v3</a></li>
													<li><a href="shop-details-4.html">Shop Details v4</a></li>
												</ul>
											</li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
										</ul>
									</li>
									<li class="menu-item-has-child">
										<a href="#!">Pages</a>
										<ul class="submenu">
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
										</ul>
									</li>
									<li class="menu-item-has-child">
										<a href="#!">Blog</a>
										<ul class="submenu">
											<li><a href="blog-standard.html">Blog Standard</a></li>
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>

						<div class="col-lg-2">
							<div class="social-icon ul-li-right clearfix">
								<ul class="clearfix">
									<li><a href="#!"><i class="lab la-facebook"></i></a></li>
									<li><a href="#!"><i class="lab la-twitter"></i></a></li>
									<li><a href="#!"><i class="lab la-instagram"></i></a></li>
									<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</header>

		<!-- sidebar mobile menu - start -->
		<!-- <div class="sidebar-menu-wrapper">
			<div id="sidebar-menu" class="sidebar-menu">

				<span class="close-btn">
					<i class="las la-times"></i>
				</span>

				<div class="brand-logo text-center clearfix">
					<a href="index.html" class="brand-link">
						<img src="{{asset('assets/home/images/logo/logo_3.png')}}" alt="logo_not_found">
					</a>
				</div>

				<div class="search-wrap">
					<form action="#!">
						<div class="form-item mb-0">
							<input type="search" name="search" placeholder="Search your Products">
							<button type="submit"><i class="la la-search"></i></button>
						</div>
					</form>
				</div>

				<div id="mobile-accordion" class="mobile-accordion">
					<div class="card">
						<div class="card-header" id="heading-one">
							<button data-toggle="collapse" data-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
								<i class="las la-shopping-bag"></i> 
								Cart Item
								<small>03</small>
							</button>
						</div>
						<div id="collapse-one" class="collapse" aria-labelledby="heading-one" data-parent="#mobile-accordion">
							<div class="card-body">
								<div class="cart-items-list ul-li-block clearfix">
									<ul class="clearfix">
										<li>
											<div class="item-image">
												<img src="{{asset('assets/home/images/cart/img_1.png')}}" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Thermometer</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>

										<li>
											<div class="item-image">
												<img src="{{asset('assets/home/images/cart/img_2.png')}}" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Infrared Thermometer</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>

										<li>
											<div class="item-image">
												<img src="{{asset('assets/home/images/cart/img_3.png')}}" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Blood Pressure Machine</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>
									</ul>
								</div>

								<div class="btns-group ul-li clearfix">
									<ul class="clearfix">
										<li><a href="cart.html" class="btn bg-default-black">View Cart</a></li>
										<li><a href="checkout.html" class="btn bg-royal-blue">Checkout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="heading-two">
							<button data-toggle="collapse" data-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
								<i class="las la-bars"></i> 
								All Categories
							</button>
						</div>
						<div id="collapse-two" class="collapse" aria-labelledby="heading-two" data-parent="#mobile-accordion">
							<div class="card-body all-categories-list ul-li-block clearfix">
								<ul class="clearfix">
									<li><a href="#!"><span><i class="las la-microscope"></i></span> Equipment</a></li>
									<li><a href="#!"><span><i class="las la-capsules"></i></span> General Medecine</a></li>
									<li><a href="#!"><span><i class="las la-dna"></i></span> Food Suppliment</a></li>
									<li><a href="#!"><span><i class="las la-first-aid"></i></span> Pharmacy</a></li>
									<li><a href="#!"><span><i class="las la-stethoscope"></i></span> Medical Tools</a></li>
									<li><a href="#!"><span><i class="las la-syringe"></i></span> Surgery Equipment</a></li>
									<li><a href="#!"><span><i class="las la-brain"></i></span> Neurology</a></li>
									<li><a href="#!"><span><i class="las la-x-ray"></i></span> Orthopredic</a></li>
									<li><a href="#!"><span><i class="las la-thermometer"></i></span> Diabetic Medicine</a></li>
									<li><a href="#!"><span><i class="las la-user-nurse"></i></span> ICU Euipment</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="menu_list ul-li-block clearfix">
					<h3 class="widget-title">Menu List</h3>

					<ul class="clearfix">
						<li class="active dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Home V.1</a></li>
								<li><a href="index-2.html">Home V.2</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
							<ul class="dropdown-menu">
								<li class="dropdown">
									<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Grid</a>
									<ul class="dropdown-menu">
										<li><a href="shop-grid-2-column.html">Grid 2 Column</a></li>
										<li><a href="shop-grid-3-column.html">Grid 3 Column</a></li>
										<li><a href="shop-grid-4-column.html">Grid 4 Column</a></li>
									</ul>
								</li>
								<li><a href="shop-list.html">Shop List</a></li>
								<li class="dropdown">
									<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Details</a>
									<ul class="dropdown-menu">
										<li><a href="shop-details-1.html">Shop Details v1</a></li>
										<li><a href="shop-details-2.html">Shop Details v2</a></li>
										<li><a href="shop-details-3.html">Shop Details v3</a></li>
										<li><a href="shop-details-4.html">Shop Details v4</a></li>
									</ul>
								</li>
								<li><a href="cart.html">Cart Page</a></li>
								<li><a href="checkout.html">Checkout Page</a></li>
								<li><a href="wishlist.html">Wishlist Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li><a href="cart.html">Cart Page</a></li>
								<li><a href="checkout.html">Checkout Page</a></li>
								<li><a href="wishlist.html">Wishlist Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu">
								<li><a href="blog-standard.html">Blog Standard</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="user-dropdown ul-li-block clearfix">
					<h3 class="widget-title">User Settings</h3>
					<ul class="clearfix">
						<li><a href="#!"><i class="las la-user-circle"></i> Profile</a></li>
						<li><a href="#!"><i class="las la-user-cog"></i> Settings</a></li>
						<li><a href="#!"><i class="las la-sign-out-alt"></i> Logout</a></li>
					</ul>
				</div>

			</div>
			<div class="overlay"></div>
		</div> -->
		<!-- sidebar mobile menu - end -->
		<!-- header-section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>
<!-- slider-section - start
================================================== -->
<section id="slider-section" class="slider-section home-two-slider clearfix " style="direction: ltr;">
    <div id="main-carousel" class="main-carousel arrow-right-left owl-carousel owl-theme" style="direction: ltr;">

        <div class="item d-flex align-items-center bg-gray">
            <div class="container">
                <div class="row align-items-center justify-content-lg-end justify-content-md-between"> <!-- تغيير من start إلى end -->
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 order-first"> <!-- تغيير من order-last إلى order-first -->
                        <div class="slider-image meter-image">
                            <img src="{{asset('assets/home/images/slider/meter_1.png')}}" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="slider-content text-right"> <!-- إضافة text-right -->
                            <span class="off-price animate-item mb-15">25% Off</span>
                            <h3 class="item-title animate-item">
                                ميزان حرارة رقمي للجبهة بدون تلامس.
                            </h3>
                            <p class="animate-item">
                                ميديسيا دائمًا ما تركز على أفضل العلاجات بأسعار معقولة من خلال أفضل الخدمات الطبية.
                            </p>
                            <div class="btns-group ul-li animate-item clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!" class="btn bg-light-green">تسوق الآن</a></li>
                                    <li><a href="#!" class="btn bg-default-black">تعرف أكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item d-flex align-items-center bg-gray">
            <div class="container">
                <div class="row align-items-center justify-content-lg-end justify-content-md-between"> <!-- تغيير من start إلى end -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-first"> <!-- تغيير من order-last إلى order-first -->
                        <div class="slider-image mask-image">
                            <img src="{{asset('assets/home/images/slider/mask_1.png')}}" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slider-content text-right"> <!-- إضافة text-right -->
                            <span class="off-price animate-item mb-15">30% off</span>
                            <h3 class="item-title animate-item">
                                قناع غبار NIOSH N95 قابل للطي
                            </h3>
                            <p class="animate-item">
                                ميديسيا دائمًا ما تركز على أفضل العلاجات بأسعار معقولة من خلال أفضل الخدمات الطبية.
                            </p>
                            <div class="btns-group ul-li animate-item clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!" class="btn bg-light-green">تسوق الآن</a></li>
                                    <li><a href="#!" class="btn bg-default-black">تعرف أكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item d-flex align-items-center bg-gray">
            <div class="container">
                <div class="row align-items-center justify-content-lg-end justify-content-md-between"> <!-- تغيير من start إلى end -->
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 order-first"> <!-- تغيير من order-last إلى order-first -->
                        <div class="slider-image meter-image">
                            <img src="{{asset('assets/home/images/slider/meter_1.png')}}" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="slider-content text-right"> <!-- إضافة text-right -->
                            <span class="off-price animate-item mb-15">25% Off</span>
                            <h3 class="item-title animate-item">
                                ميزان حرارة رقمي للجبهة بدون تلامس.
                            </h3>
                            <p class="animate-item">
                                ميديسيا دائمًا ما تركز على أفضل العلاجات بأسعار معقولة من خلال أفضل الخدمات الطبية.
                            </p>
                            <div class="btns-group ul-li animate-item clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!" class="btn bg-light-green">تسوق الآن</a></li>
                                    <li><a href="#!" class="btn bg-default-black">تعرف أكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item d-flex align-items-center bg-gray">
            <div class="container">
                <div class="row align-items-center justify-content-lg-end justify-content-md-between"> <!-- تغيير من start إلى end -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-first"> <!-- تغيير من order-last إلى order-first -->
                        <div class="slider-image mask-image">
                            <img src="{{asset('assets/home/images/slider/mask_1.png')}}" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slider-content text-right"> <!-- إضافة text-right -->
                            <span class="off-price animate-item mb-15">30% off</span>
                            <h3 class="item-title animate-item">
                                قناع غبار NIOSH N95 قابل للطي
                            </h3>
                            <p class="animate-item">
                                ميديسيا دائمًا ما تركز على أفضل العلاجات بأسعار معقولة من خلال أفضل الخدمات الطبية.
                            </p>
                            <div class="btns-group ul-li animate-item clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!" class="btn bg-light-green">تسوق الآن</a></li>
                                    <li><a href="#!" class="btn bg-default-black">تعرف أكثر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- slider-section - end
================================================== -->

			{{-- <!-- slider-section - start
			================================================== -->
			<section id="slider-section" class="slider-section home-two-slider clearfix">
				<div id="main-carousel" class="main-carousel arrow-right-left owl-carousel owl-theme">

					<div class="item d-flex align-items-center bg-gray">
						<div class="container">
							<div class="row align-items-center justify-content-lg-start justify-content-md-between">
								<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 order-last">
									<div class="slider-image meter-image">
										<img src="{{asset('assets/home/images/slider/meter_1.png')}}" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="off-price animate-item mb-15">25% Off</span>
										<h3 class="item-title animate-item">
											Non contact Forehead Digital Thermometer.
										</h3>
										<p class="animate-item">
											Medicia as always focused on the best treatments with affordable price through the best medical services.
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="#!" class="btn bg-light-green">SHOP NOW</a></li>
												<li><a href="#!" class="btn bg-default-black">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item d-flex align-items-center bg-gray">
						<div class="container">
							<div class="row align-items-center justify-content-lg-start justify-content-md-between">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last">
									<div class="slider-image mask-image">
										<img src="{{asset('assets/home/images/slider/mask_1.png')}}" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="off-price animate-item mb-15">30% off</span>
										<h3 class="item-title animate-item">
											Disposable NIOSH N95 Flat Fold Dust Mask
										</h3>
										<p class="animate-item">
											Medicia as always focused on the best treatments with affordable price through the best medical services.
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="#!" class="btn bg-light-green">SHOP NOW</a></li>
												<li><a href="#!" class="btn bg-default-black">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item d-flex align-items-center bg-gray">
						<div class="container">
							<div class="row align-items-center justify-content-lg-start justify-content-md-between">
								<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 order-last">
									<div class="slider-image meter-image">
										<img src="{{asset('assets/home/images/slider/meter_1.png')}}" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="off-price animate-item mb-15">25% Off</span>
										<h3 class="item-title animate-item">
											Non contact Forehead Digital Thermometer.
										</h3>
										<p class="animate-item">
											Medicia as always focused on the best treatments with affordable price through the best medical services.
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="#!" class="btn bg-light-green">SHOP NOW</a></li>
												<li><a href="#!" class="btn bg-default-black">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item d-flex align-items-center bg-gray">
						<div class="container">
							<div class="row align-items-center justify-content-lg-start justify-content-md-between">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last">
									<div class="slider-image mask-image">
										<img src="{{asset('assets/home/images/slider/mask_1.png')}}" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="slider-content">
										<span class="off-price animate-item mb-15">30% off</span>
										<h3 class="item-title animate-item">
											Disposable NIOSH N95 Flat Fold Dust Mask
										</h3>
										<p class="animate-item">
											Medicia as always focused on the best treatments with affordable price through the best medical services.
										</p>
										<div class="btns-group ul-li animate-item clearfix">
											<ul class="clearfix">
												<li><a href="#!" class="btn bg-light-green">SHOP NOW</a></li>
												<li><a href="#!" class="btn bg-default-black">LEARN MORE</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- slider-section - end
			================================================== --> --}}


			<!-- promotion-section - start
			================================================== -->
			<section id="promotion-section" class="promotion-section sec-ptb-100 pb-0 clearfix">
				<div class="container">
					<div class="masonry-grid">
						<div class="grid-sizer"></div>

						<div class="grid-item">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="{{asset('assets/home/images/promotion/img_5.jpg')}}" alt="image_not_found">
								</a>
								<div class="promotion-content position-top size-decrease">
									<small class="d-block text-white mb-1">Medical Supplies</small>
									<h3 class="item-title">
										<span class="d-block">Coronavirus Medical</span> <span class="d-block">Supplies</span>
									</h3>
									<a href="#!" class="btn-underline">Shop Now</a>
								</div>
							</div>
						</div>

						<div class="grid-item w-66">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="{{asset('assets/home/images/promotion/img_6.jpg')}}" alt="image_not_found">
								</a>
								<div class="promotion-content size-increase position-vertical-center">
									<h3 class="item-title">
										<strong class="text-royal-blue d-block mb-1">50% OFF</strong> <span class="d-block">All Medicines</span> <span class="d-block">for First Purchase</span>
									</h3>
									<a href="#!" class="btn bg-royal-blue">shop now</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- promotion-section - end
			================================================== -->


			<!-- category-section - start
			================================================== -->
			<section id="category-section" class="category-section sec-ptb-100 pb-0 clearfix">
				<div class="container wrap-1500">
					<div class="row mt--30 justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="75" viewBox="0 0 60 75">
										<image width="60" height="75" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAABLCAMAAAAbBRQ5AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACuFBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAABT/KRRAAAA5nRSTlMAAEXqskiw/bHuJmv4Ce0l4htC7Ll7RPC+gHef1O8nvIF9xgM6oSm4fAt6qHSJg3bB24fCwMUCdXPHBA0gB1z+tk2z5ppvcsoFCm3LCJdlSWrQbMg3qSjMptjk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"/>
									</svg>
								</div>
								<span class="item-title">Medical Equipment</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72" height="72" viewBox="0 0 72 72">
										<image width="72" height="72" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC5VBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAACgzv4VAAAA9XRSTlMAAAzaJQRTKSMNz/09GiJOrwWQtEovPhIe+WAOOGuMscgDhphsOxCJJMLweCyN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"/>
									</svg>
								</div>
								<span class="item-title">CVID-19 Prevention</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="61" viewBox="0 0 77 61">
										<image width="77" height="61" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAA9CAMAAADf9RRDAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC1lBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAAC+OtfvAAAA8HRSTlMAAF2o0u7z8tmqbBxCkMHp472OHR/1kQ9OxQuryZd2Zm/H4j7sgWdqh7HNUETCRwRS5/wnlakjIvCmKMhV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"/>
									</svg>
								</div>
								<span class="item-title">Surgery Equipments</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="68" height="67" viewBox="0 0 68 67">
										<image width="68" height="67" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABDCAMAAAASyFM4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC+lBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAAB8xSA+AAAA/HRSTlMAAAlEgazV8v7wz6VkHUae6/2jKlPG6Kd3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"/>
									</svg>
								</div>
								<span class="item-title">General Medicine</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="58" height="70" viewBox="0 0 58 70">
										<image width="58" height="70" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAABGCAMAAACqhXegAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACvlBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAAByPioKAAAA6HRSTlMAADqGt+T57MOWUAVcx+B1BiO8unhPNDFFb6n025cnFHbzRtw7GbR/IcoMmFjS3wiq/hZjKOKsAemLmldBJU0J1MuQo6RMYOPeoBwVKzz6xDUNYtby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"/>
									</svg>
								</div>
								<span class="item-title">Health & Fitness</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
							<a href="#!" class="category-primary text-center clearfix">
								<div class="item-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="66" height="66" viewBox="0 0 66 66">
										<image width="66" height="66" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAMAAADUivDaAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACiFBMVEWJkav///+JkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkauJkasAAACPpkJXAAAA1nRSTlMAABHb4hLa6BXc3t8QFBbd2Bjg1xnhD9kXKSg9IwrVDmmQO+wNapxH/prRbKa0a2cx/OqZNX4u+a1/QlmYMrIIgF5UPzZdbXyekwU4+297Kxs695tSGvCpjwZcSoh6WD4tYI14WsL0IEiKcHdVvvaOV+8nY4vrgol2qnECckPzJmSHIay/u8GWc1vF8R9Ng24q9YVmwExO5nV0jCKElPhG44FPp2hlXzNBOaFJPBwkB3nM7lOko6WoLKDI8r0vtzSx+oZ9uFFW7ce5MJWu6aJixCXUQMvQhXlyRgAAAAFiS0dE15CyWj8AAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfkBRcXEgVV2CLLAAAEcElEQVRYw6WW+18UVRjGXxZYFuVmkgqUSt51FcFyWUgQW0pWDDWzADVAMDUpS8ELIGCQbggilYpmKJAUoYUuGGIXs6vdb8/f0zlndmdnZ2f30+w8P53LfL6f933Oe945RMZkiowySIg2I8YYwRKLSIsxwhSYTRGGCFNhjoswgmAxxEaTEQSLITKejCASEmGOJiOIeOaDiYwgWBZJcWQEMe0hTDeREUTywzDPICMIS5TkZPgI5sPMODKCmMWcNFG4iJRU5gNzMo7CRaQBjzwahdlzKBzE3HSixwDMS0TSfAoHsQBYuGgxliwElqq2/idiGYSsRMuRmBoOYgWQsTITWXy8CnhcP4Jl8QTRahuy2cQO5OhGzOWE3CdpTSby8tcCBboTYVnYaR3wFDkyMRUo1G3n08AzROtR5CTaUAysI72IjcCzVLJp/mYxc2zBc06dCBHDVkR6589vwwv6EMs4gfnwIpWWreYL5VuwXReCxbCDdnICvQRbBVElUKXLC+bDLqoWBDLVYPfLe4C9pAexD3iF9gPp0rQWryIgi9CIfTyG/VIMQrM1CSEQGz0+vOZdOPC6JiE4QjhZ7XHPWfgGHdTyIRRC+JALHBKzHNTVA4dJD4IRjsgxsKfMUWj7EBxxjMcg6qGhTDSYyuAEbUSjJwbmZBOONxO1AK1EJ95sa1fprZP5mohTPAaX5EP02+g43Ql0sfEZaKhbC3GMx5Ar+1+Ds0APH72Dd9/z17kOlGggBMGl8D/J60MLTqo/Po+UQAQjXKACxW3auc3rZAtWqRExGohe4BSVARf5xFl4iTv5vmdvBWZWFSmVfvkDVKgRR4BGfhZSFn24chW46t0s0LLzkgpxgd8snw+WbPZNvW+7r7+zKRsDTecGez+8Brj2dPYPqepCVFQZP4sGVzNfyBD1ICul76OPBzCcxvvoJ0D/SE7TdX9EI3dyhvC/HB03REX1+LY/rZWjr6LPvMN6JYL50EtUms4jTxjFzeudflnQLdQNu63usfHbYw76fGJ8zGqdYJlO8yF2CYJXzjuY9CewVrw+sJLrUCEjUuQG51GsVNU+tcAdiIhBqoyYcxfTv1DsuSZ9p+lFWIMjcu189iVsX0lJFJ7mP3M7aSO6v66p9ehu2z0JwQphgu+NoVi8HMoxxQ51DD7EN/61xRGi6DhjALBxRkIeVE76Ie7j2+9uSdr6/aRAAMM3gCJTO0bzcM9B4kkSSJARO5TFcl4gLuJm9yzgB/w48hNQ/IAGgfsUCvGz7+yzJC+2A2ssQFb1Hfxixa+HtAkKxGV5rcGDoMOMEQ/sRhsRCwRrKTRC0YnlutgLrOS58HG7qqICEF2InbgtafyoTS6tVmCIMYr4+AGFRpwJPFShHsCRsBi/UXB5EfkHDhZ45Pr9uKLAmR9DlmK4G4IiMgJbJ9EVlPhuKvOjJNkW7MfJNIg/0lQaWXQWzYp+wc52ScC7VKE/tVon/ipVdq0utnIthBl/L1/6j79G/3Un+/fO1nmVpF8REf8BzCGHiMwwgdAAAAAASUVORK5CYII="/>
									</svg>
								</div>
								<span class="item-title">Medical Tools</span>
							</a>
						</div>
						
					</div>
				</div>
			</section>
			<!-- category-section - end
			================================================== -->


			<!-- shop-section - start
			================================================== -->
			<section class="shop-section sec-ptb-100 clearfix">
				<div class="container">
					<div class="section-title text-center mb-70">
						<h2 class="title-text mb-3">Product By Category</h2>
						<p class="mb-0">Shopping Over $59 or first purchase you will get 100% free shipping</p>
					</div>

					<div class="tabs-nav ul-li-center clearfix">
						<ul class="nav" role="tablist">
							<li>
								<a class="active" href="#popular-items" data-toggle="tab" role="tab">Popular Items</a>
							</li>
							<li>
								<a href="#toprated-items" data-toggle="tab" role="tab">Top Rated</a>
							</li>
							<li>
								<a href="#trending-items" data-toggle="tab" role="tab">Trending Items</a>
							</li>
						</ul>
					</div>

					<div class="tab-content">
						<div id="popular-items" class="tab-pane active">
							<div class="row justify-content-center mb-70">
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_1.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
													<li class="bg-skyblue">TOP</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Hand Gloves</a>
											</h3>
											<span class="item-price">$49.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_2.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Clinical Stethoscope Dual Head</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_3.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-30%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Thermometer</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_4.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Aloevera Food Supliment</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_5.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
													<li class="bg-skyblue">NEW</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">First Medicine Aid Kit</a>
											</h3>
											<span class="item-price">$29.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_6.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-20%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_7.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Face Mask</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_8.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">SALE</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-wrap text-center clearfix">
								<a href="#!" class="btn bg-royal-blue">View All Products</a>
							</div>
						</div>

						<div id="toprated-items" class="tab-pane fade">
							<div class="row justify-content-center mb-70">
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_1.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Hand Gloves</a>
											</h3>
											<span class="item-price">$49.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_2.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Clinical Stethoscope Dual Head</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_3.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-30%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Thermometer</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_4.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Aloevera Food Supliment</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_5.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
													<li class="bg-skyblue">NEW</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">First Medicine Aid Kit</a>
											</h3>
											<span class="item-price">$29.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_6.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-20%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_7.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Face Mask</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_8.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">SALE</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-wrap text-center clearfix">
								<a href="#!" class="btn bg-royal-blue">View All Products</a>
							</div>
						</div>

						<div id="trending-items" class="tab-pane fade">
							<div class="row justify-content-center mb-70">
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_1.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Hand Gloves</a>
											</h3>
											<span class="item-price">$49.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_2.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Clinical Stethoscope Dual Head</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_3.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-30%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Thermometer</a>
											</h3>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_4.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Aloevera Food Supliment</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_5.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-19%</li>
													<li class="bg-skyblue">NEW</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">First Medicine Aid Kit</a>
											</h3>
											<span class="item-price">$29.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_6.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li-right clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">-20%</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_7.jpg')}}" alt="image_not_found">
											</a>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Surgical Face Mask</a>
											</h3>
											<span class="item-price">$39.00</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="product-grid text-center clearfix">
										<div class="item-image">
											<a href="shop-details-1.html" class="image-wrap">
												<img src="{{asset('assets/home/images/product/img_8.jpg')}}" alt="image_not_found">
											</a>
											<div class="post-label ul-li clearfix">
												<ul class="clearfix">
													<li class="bg-skyblue">SALE</li>
												</ul>
											</div>
											<div class="btns-group ul-li-center clearfix">
												<ul class="clearfix">
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
													<li>
														<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
															<i class="las la-dot-circle"></i>
														</a>
													</li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="item-content">
											<h3 class="item-title">
												<a href="#!">Digital Temparature meter</a>
											</h3>
											<span class="item-price">$39.50</span>
											<div class="rating-star ul-li-center clearfix">
												<ul class="clearfix">
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li class="active"><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-wrap text-center clearfix">
								<a href="#!" class="btn bg-royal-blue">View All Products</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- product quick view - start -->
			<div class="quickview-modal modal fade" id="quickview-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content clearfix">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="item-image">
							<img src="{{asset('assets/home/images/product/img_12.jpg')}}" alt="image_not_found">
						</div>
						<div class="item-content">
							<h2 class="item-title mb-15">Digital Infrared Thermometer</h2>
							<div class="rating-star ul-li mb-30 clearfix">
								<ul class="float-left mr-2">
									<li class="active"><i class="las la-star"></i></li>
									<li class="active"><i class="las la-star"></i></li>
									<li class="active"><i class="las la-star"></i></li>
									<li class="active"><i class="las la-star"></i></li>
									<li><i class="las la-star"></i></li>
								</ul>
								<span class="review-text">(12 Reviews)</span>
							</div>
							<span class="item-price mb-15">$49.50</span>
							<p class="mb-30">
								Best Electronic Digital Thermometer adipiscing elit, sed do eiusmod teincididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse us ultrices gravidaes. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
							</p>
							<div class="quantity-form mb-30 clearfix">
								<strong class="list-title">Quantity:</strong>
								<div class="quantity-input">
									<form action="#">
										<span class="input-number-decrement">–</span>
										<input class="input-number-1" type="text" value="1">
										<span class="input-number-increment">+</span>
									</form>
								</div>
							</div>
							<div class="btns-group ul-li mb-30">
								<ul class="clearfix">
									<li><a href="#!" class="btn bg-royal-blue">Add to Cart</a></li>
									<li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare Product"><i class="las la-sync"></i></a></li>
									<li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
								</ul>
							</div>
							<div class="info-list ul-li-block">
								<ul class="clearfix">
									<li><strong class="list-title">Category:</strong> <a href="#!">Medical Equipment</a></li>
									<li class="social-icon ul-li">
										<strong class="list-title">Share:</strong>
										<ul class="clearfix">
											<li><a href="#!"><i class="lab la-facebook"></i></a></li>
											<li><a href="#!"><i class="lab la-twitter"></i></a></li>
											<li><a href="#!"><i class="lab la-instagram"></i></a></li>
											<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- product quick view - end -->
			<!-- shop-section - end
			================================================== -->


			<!-- offer-section - start
			================================================== -->
			<section id="offer-section" class="offer-section sec-ptb-100 bg-gray clearfix">
				<div class="container">
					<div class="offer-item clearfix">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-7 col-md-9 col-sm-12 col-xs-12 order-last">
								<div class="item-image-2">
									<img src="{{asset('assets/home/images/offer/img_2.png')}}" alt="image_not_found">
								</div>
							</div>

							<div class="col-lg-5 col-md-9 col-sm-12 col-xs-12">
								<div class="item-content">
									<h4 class="sub-title text-royal-blue mb-3">50% Discount</h4>
									<h2 class="title-text mb-3">Best Deal of the Days</h2>
									<p class="mb-30">5 Hidden Skin Benefits of Fairness Creams You Probably Never Knew</p>
									<div class="info-list ul-li-block mb-30 clearfix">
										<ul class="clearfix">
											<li>lightens age spots and pigmentation patches.</li>
											<li>Fairness cream gives sun protection.</li>
											<li>Fairness cream protects from pollution damage.</li>
											<li>This cream keeps visible signs of aging at bay.</li>
											<li>Fairness creams makes your skin glow.</li>
										</ul>
									</div>
									<a href="#!" class="btn bg-royal-blue">SHOP NOW</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- offer-section - end
			================================================== -->


			<!-- shop-section - start
			================================================== -->
			<section class="shop-section sec-ptb-100 clearfix">
				<div class="container">

					<div class="section-title text-center mb-70">
						<h2 class="title-text mb-3">New Arraivals</h2>
						<p class="mb-0">Shopping Over $59 or first purchase you will get 100% free shipping</p>
					</div>

					<div id="column-4-carousel" class="column-4-carousel arrow-right-left owl-carousel owl-theme">
						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_1.jpg')}}" alt="image_not_found">
									</a>
									<div class="post-label ul-li-right clearfix">
										<ul class="clearfix">
											<li class="bg-skyblue">-19%</li>
											<li class="bg-skyblue">TOP</li>
										</ul>
									</div>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Surgical Hand Gloves</a>
									</h3>
									<span class="item-price">$49.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_2.jpg')}}" alt="image_not_found">
									</a>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Clinical Stethoscope Dual Head</a>
									</h3>
									<span class="item-price">$39.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_3.jpg')}}" alt="image_not_found">
									</a>
									<div class="post-label ul-li-right clearfix">
										<ul class="clearfix">
											<li class="bg-skyblue">-30%</li>
										</ul>
									</div>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Digital Thermometer</a>
									</h3>
									<span class="item-price">$39.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_4.jpg')}}" alt="image_not_found">
									</a>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Aloevera Food Supliment</a>
									</h3>
									<span class="item-price">$39.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_5.jpg')}}" alt="image_not_found">
									</a>
									<div class="post-label ul-li-right clearfix">
										<ul class="clearfix">
											<li class="bg-skyblue">-19%</li>
											<li class="bg-skyblue">NEW</li>
										</ul>
									</div>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">First Medicine Aid Kit</a>
									</h3>
									<span class="item-price">$29.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_6.jpg')}}" alt="image_not_found">
									</a>
									<div class="post-label ul-li-right clearfix">
										<ul class="clearfix">
											<li class="bg-skyblue">-20%</li>
										</ul>
									</div>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Digital Temparature meter</a>
									</h3>
									<span class="item-price">$39.00</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_7.jpg')}}" alt="image_not_found">
									</a>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Surgical Face Mask</a>
									</h3>
									<span class="item-price">$39.00</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="product-grid text-center clearfix">
								<div class="item-image">
									<a href="shop-details-1.html" class="image-wrap">
										<img src="{{asset('assets/home/images/product/img_8.jpg')}}" alt="image_not_found">
									</a>
									<div class="post-label ul-li clearfix">
										<ul class="clearfix">
											<li class="bg-skyblue">SALE</li>
										</ul>
									</div>
									<div class="btns-group ul-li-center clearfix">
										<ul class="clearfix">
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
											<li>
												<a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
													<i class="las la-dot-circle"></i>
												</a>
											</li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
											<li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title">
										<a href="#!">Digital Temparature meter</a>
									</h3>
									<span class="item-price">$39.50</span>
									<div class="rating-star ul-li-center clearfix">
										<ul class="clearfix">
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li class="active"><i class="las la-star"></i></li>
											<li><i class="las la-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- shop-section - end
			================================================== -->


			<!-- newsletter-section - start
			================================================== -->
			<section id="newsletter-section" class="newsletter-section clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="newsletter-boxed small-content bg-gray border-0 clearfix">

								<div class="section-title text-center mb-30">
									<h2 class="title-text">Newsletter and offer update</h2>
									<p class="mb-0">Get up to <strong class="text-royal-blue">30%</strong> off your first purchase by joining Newsletter, and receive weekly amazing Offer!</p>
								</div>

								<div class="form-item">
									<input type="email" name="email" placeholder="Enter your email">
									<button type="submit" class="btn bg-royal-blue">SUBSCRIBE</button>
								</div>

								<div class="checkbox-btn">
									<input id="agree-btn" type="checkbox">
									<label for="agree-btn">I have read and agreed the Terms, and Privacy Policy</label>
								</div>

							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="promotion-fullimage clearfix">
								<a href="#!" class="item-image">
									<img src="{{asset('assets/home/images/promotion/img_7.jpg')}}" alt="image_not_found">
								</a>
								<div class="promotion-content size-increase position-vertical-center">
									<h3 class="item-title">
										<strong class="text-royal-blue d-block mb-2">50% OFF</strong> <span class="d-block mb-1">Digital Electronic</span> <span class="d-block">Thermometer</span>
									</h3>
									<a href="#!" class="btn-underline">Visit Store</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- newsletter-section - end
			================================================== -->


			<!-- blog-section - start
			================================================== -->
			<section id="blog-section" class="blog-section sec-ptb-100 clearfix">
				<div class="container">

					<div class="section-title text-center mb-40">
						<h2 class="title-text mb-3">From our Blog</h2>
						<p class="mb-0">Checkout our all latest article from the blog pages about helth. checup, medicine</p>
					</div>

					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-boxed" data-background="{{asset('assets/home//images/blog/img_1.jpg')}}">
								<div class="post-admin clearfix">
									<div class="admin-image">
										<img src="{{asset('assets/home/images/meta/img_1.png')}}" alt="image_not_found">
									</div>
									<div class="admin-content">
										<h4 class="admin-name">Wiliam Milan</h4>
										<span class="post-date">21 January 2020</span>
									</div>
								</div>
								<h3 class="item-title mb-3">
									<a href="#!">Whenever a doctor cannot do good, he must be kept from doing harm.</a>
								</h3>
								<p>
									There is no way to get back Lorem ipsum dolor irure dolor in reprehenderit in voluptate velit esite amet, consectetur adipisicing.
								</p>
								<a href="#!" class="btn-underline">Read More</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-boxed" data-background="assets/images/blog/img_1.jpg">
								<div class="post-admin clearfix">
									<div class="admin-image">
										<img src="{{asset('assets/home/images/meta/img_2.png')}}" alt="image_not_found">
									</div>
									<div class="admin-content">
										<h4 class="admin-name">Johny Jonson</h4>
										<span class="post-date">21 January 2020</span>
									</div>
								</div>
								<h3 class="item-title mb-3">
									<a href="#!">Let food be thy medicine and medicine be thy food.</a>
								</h3>
								<p>
									There is no way to get back Lorem ipsum dolor irure dolor in reprehenderit in voluptate velit esite amet, consectetur adipisicing.
								</p>
								<a href="#!" class="btn-underline">Read More</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="blog-boxed" data-background="assets/images/blog/img_1.jpg">
								<div class="post-admin clearfix">
									<div class="admin-image">
										<img src="{{asset('assets/home/images/meta/img_3.png')}}" alt="image_not_found">
									</div>
									<div class="admin-content">
										<h4 class="admin-name">Anna Perry</h4>
										<span class="post-date">21 January 2020</span>
									</div>
								</div>
								<h3 class="item-title mb-3">
									<a href="#!">Try to always laugh when you can, it is cheap medicine.</a>
								</h3>
								<p>
									There is no way to get back Lorem ipsum dolor irure dolor in reprehenderit in voluptate velit esite amet, consectetur adipisicing.
								</p>
								<a href="#!" class="btn-underline">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- blog-section - end
			================================================== -->


			<!-- brand-section - start
			================================================== -->
			<div id="brand-section" class="brand-section clearfix">
				<div class="container">
					<div class="brand-carousel mt--40 owl-carousel owl-theme">

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_1.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_2.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_3.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_4.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_5.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_6.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_1.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_2.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_3.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_4.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_5.png')}}" alt="logo_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand-logo" href="#!">
								<img src="{{asset('assets/home/images/brand/img_6.png')}}" alt="logo_not_found">
							</a>
						</div>
						
					</div>
				</div>
			</div>
			<!-- brand-section - end
			================================================== -->


			<!-- instagram-section - start
			================================================== -->
			<section id="instagram-section" class="instagram-section sec-ptb-100 clearfix">
				<div class="wrapper clearfix">

					<div class="section-title text-center mb-15">
						<h2 class="title-text mb-0">medicia on Instagram</h2>
					</div>

					<div class="row zoom-gallery justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_1.jpg">
								<img src="{{asset('assets/home/images/instagram/img_1.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_2.jpg">
								<img src="{{asset('assets/home/images/instagram/img_2.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_3.jpg">
								<img src="{{asset('assets/home/images/instagram/img_3.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_4.jpg">
								<img src="{{asset('assets/home/images/instagram/img_4.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_5.jpg">
								<img src="{{asset('assets/home/images/instagram/img_5.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-6">
							<a class="popup-image instagram-shoot" href="assets/images/instagram/img_6.jpg">
								<img src="{{asset('assets/home/images/instagram/img_6.jpg')}}" alt="image_not_found">
								<span class="instagram-icon">
									<i class="lab la-instagram"></i>
								</span>
							</a>
						</div>
					</div>

				</div>
			</section>
			<!-- instagram-section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer-section - start
		================================================== -->
		<footer id="footer-section" class="footer-section sec-ptb-100 pb-0 bg-gray clearfix">
			<div class="container">

				<div class="widget-area mb-60 clearfix">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-md-center">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="about-content">
								<div class="brand-logo mb-4 clearfix">
									<a href="index.html" class="brand-link">
										<img src="{{asset('assets/home/images/logo/medicia_1.png')}}" alt="logo_not_found">
									</a>
								</div>
								<p class="mb-30">
									Medicia is an online medical service and
									medicinewooCommerce theme for your ultimate
									online store and medical service.
								</p>
								<div class="social-icon-circle ul-li clearfix">
									<ul class="clearfix">
										<li><a href="#!"><i class="lab la-facebook-f"></i></a></li>
										<li><a href="#!"><i class="lab la-twitter"></i></a></li>
										<li><a href="#!"><i class="lab la-instagram"></i></a></li>
										<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Products</h3>
								<ul class="clearfix">
									<li><a href="#!">Medicines</a></li>
									<li><a href="#!">Vitamins &amp; Supplements</a></li>
									<li><a href="#!">Accessories</a></li>
									<li><a href="#!">Medical Equipment</a></li>
									<li><a href="#!">All Products</a></li>
									<li><a href="#!">Doctor Equipment</a></li>
									<li><a href="#!">Offer Sale</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Quick Link</h3>
								<ul class="clearfix">
									<li><a href="#!">Support</a></li>
									<li><a href="#!">Refund Policy</a></li>
									<li><a href="#!">Shipping &amp; Returns</a></li>
									<li><a href="#!">Tearms &amp; Condition</a></li>
									<li><a href="#!">Help Center</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<div class="payment-cards ul-li mb-30 clearfix">
								<h3 class="widget-title">Payments</h3>
								<p class="mb-3">Secure Payments</p>
								<ul class="mb-3 clearfix">
									<li><a href="#!"><img src="{{asset('assets/home/images/payment_card/card_1.png')}}" alt="_not_found"></a></li>
									<li><a href="#!"><img src="{{asset('assets/home/images/payment_card/card_2.png')}}" alt="_not_found"></a></li>
									<li><a href="#!"><img src="{{asset('assets/home/images/payment_card/card_3.png')}}" alt="_not_found"></a></li>
									<li><a href="#!"><img src="{{asset('assets/home/images/payment_card/card_4.png')}}" alt="_not_found"></a></li>
									<li><a href="#!"><img src="{{asset('assets/home/images/payment_card/card_5.png')}}" alt="_not_found"></a></li>
								</ul>
								<p class="mb-0">Powred by <a href="#!">stripe</a></p>
							</div>
							<div class="btns-group ul-li-block">
								<ul class="clearfix">
									<li>
										<a href="#!" class="store-btn bg-royal-blue">
											<span class="icon-wrap">
												<i class="lab la-apple"></i>
											</span>
											<span class="content-wrap">
												<small>available on</small>
												<strong>Apple Store</strong>
											</span>
										</a>
									</li>
									<li>
										<a href="#!" class="store-btn bg-default-black">
											<span class="icon-wrap">
												<i class="lab la-google-play"></i>
											</span>
											<span class="content-wrap">
												<small>available on</small>
												<strong>Google Play</strong>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<div class="footer-bottom text-center border-top clearfix">
					<p class="mb-0">©Copyright 2020 <a href="#!">Marvel_Theme</a>. All Rights Reserved.</p>
				</div>

			</div>
		</footer>
		<!-- footer-section - end
		================================================== -->

		
		<!-- jquery include -->
		<script src="{{asset('assets/home/js/jquery-3.4.1.min.js')}}"></script>
		<script src="{{asset('assets/home/js/jquery-ui.js')}}"></script>
		<script src="{{asset('assets/home/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/home/js/magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/home/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/home/js/owl.carousel2.thumbs.min.js')}}"></script>
		<script src="{{asset('assets/home/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/home/js/masonry.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/home/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/home/js/countdown.js')}}"></script>

		<!-- google map - jquery include -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
        <script src="{{asset('assets/home/js/gmaps.min.js')}}"></script>

		<!-- mobile menu - jquery include -->
        <script src="{{asset('assets/home/js/mCustomScrollbar.js')}}"></script>

		<!-- custom - jquery include -->
		<script src="{{asset('assets/home/js/custom.js')}}"></script>


	</body>
</html>