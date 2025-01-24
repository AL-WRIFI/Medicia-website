<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Home')</title>
    <link rel="shortcut icon" href="{{ asset('assets/home/images/logo/favourite_icon_1.png') }}">

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/style.css') }}">

    
    @stack('styles')
    @yield('page-style')

</head>

<body class="home-v2">
<header id="header-section" class="header-section clearfix">

    <div class="header-middle bg-gray d-flex align-items-center clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-12">
                    <div class="brand-logo clearfix">
                        <a href="{{route('index')}}" class="brand-link">
                            <img src="{{asset('assets/home/images/logo/logo_1.png')}}" style="width: 100px;   padding: 10px;" alt="logo_not_found">
                        </a>

                        <div class="btns-group ul-li-right clearfix">
                            <ul class="clearfix">
                                <li>
                                    <button type="button" class="mobile-menu-btn">
                                        <i class="las la-bars"></i>
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
                                        <input type="search" name="search" placeholder="ابحث عن منتجاتك">
                                        {{-- <button type="submit"><i class="la la-search"></i></button> --}}
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
                                            <h4 class="user-name"><a href="#!">راكيبول حسن</a></h4>
                                            <span class="user-title">بائع</span>
                                        </div>
                                    </div>
                                    <ul class="clearfix">
                                        <li><a href="#!"><i class="las la-user-circle"></i> الملف الشخصي</a></li>
                                        <li><a href="#!"><i class="las la-user-cog"></i> الإعدادات</a></li>
                                        <li><a href="#!"><i class="las la-sign-out-alt"></i> تسجيل الخروج</a></li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li class="dropdown">
                                <button class="btn-cart" id="cart-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="las la-shopping-bag"></i>
                                    <small class="cart-counter bg-royal-blue">03</small>
                                </button>
                                <div class="cart-dropdown dropdown-menu" aria-labelledby="cart-dropdown">
                                    <h3 class="title-text">عناصر السلة:- 03</h3>

                                    <div class="cart-items-list ul-li-block clearfix">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="item-image">
                                                    <img src="{{asset('assets/home/images/cart/img_1.png')}}" alt="image_not_found">
                                                </div>
                                                <div class="item-content">
                                                    <h4 class="item-title">ميزان حرارة رقمي</h4>
                                                    <span class="item-price">$39.50</span>
                                                </div>
                                                <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                            </li>

                                            <li>
                                                <div class="item-image">
                                                    <img src="{{asset('assets/home/images/cart/img_2.png')}}" alt="image_not_found">
                                                </div>
                                                <div class="item-content">
                                                    <h4 class="item-title">ميزان حرارة رقمي بالأشعة تحت الحمراء</h4>
                                                    <span class="item-price">$39.50</span>
                                                </div>
                                                <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                            </li>

                                            <li>
                                                <div class="item-image">
                                                    <img src="{{asset('assets/home/images/cart/img_3.png')}}" alt="image_not_found">
                                                </div>
                                                <div class="item-content">
                                                    <h4 class="item-title">جهاز قياس ضغط الدم الرقمي</h4>
                                                    <span class="item-price">$39.50</span>
                                                </div>
                                                <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="btns-group ul-li clearfix">
                                        <ul class="clearfix">
                                            <li><a href="cart.html" class="btn bg-default-black">عرض السلة</a></li>
                                            <li><a href="checkout.html" class="btn bg-royal-blue">الدفع</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> --}}
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
                            جميع الفئات
                        </button>

                        <div id="categories-collapse" class="categories-collapse collapse">
                            <div class="card card-body ul-li-block">
                                <ul class="clearfix">
                                    <li><a href="#!"><span><i class="las la-microscope"></i></span> معدات</a></li>
                                    <li><a href="#!"><span><i class="las la-capsules"></i></span> الأدوية العامة</a></li>
                                    <li><a href="#!"><span><i class="las la-dna"></i></span> المكملات الغذائية</a></li>
                                    <li><a href="#!"><span><i class="las la-first-aid"></i></span> الصيدلية</a></li>
                                    <li><a href="#!"><span><i class="las la-stethoscope"></i></span> الأدوات الطبية</a></li>
                                    <li><a href="#!"><span><i class="las la-syringe"></i></span> معدات الجراحة</a></li>
                                    <li><a href="#!"><span><i class="las la-brain"></i></span> طب الأعصاب</a></li>
                                    <li><a href="#!"><span><i class="las la-x-ray"></i></span> العظام</a></li>
                                    <li><a href="#!"><span><i class="las la-thermometer"></i></span> أدوية السكري</a></li>
                                    <li><a href="#!"><span><i class="las la-user-nurse"></i></span> معدات العناية المركزة</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <nav class="main-menu ul-li-center clearfix">
                        <ul class="clearfix">
                            <li class="active">
                                <a href="{{route('index')}}">الرئيسية</a>
                            </li>
                            <li><a href="{{ route('about') }}">من نحن</a></li>
                            {{-- <li class="menu-item-has-child">
                                <a href="#!">منتجاتنا</a>
                                <div class="mega_menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="useful-links ul-li-block clearfix">
                                                <h3 class="list-title">المعدات الطبية</h3>
                                                <ul class="clearfix">
                                                    <li><a href="#!">جهاز قياس ضغط الدم</a></li>
                                                    <li><a href="#!">حقيبة الإسعافات الأولية</a></li>
                                                    <li><a href="#!">ميزان الحرارة الرقمي</a></li>
                                                    <li><a href="#!">الكمامة الجراحية</a></li>
                                                    <li><a href="#!">السماعة الطبية الرقمية</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="useful-links ul-li-block clearfix">
                                                <h3 class="list-title">الأدوية</h3>
                                                <ul class="clearfix">
                                                    <li><a href="#!">الأدوية العامة</a></li>
                                                    <li><a href="#!">أنسولين السكري</a></li>
                                                    <li><a href="#!">المكملات الغذائية</a></li>
                                                    <li><a href="#!">أدوية الأطفال</a></li>
                                                    <li><a href="#!">أدوية الحمل</a></li>
                                                    <li><a href="#!">الصحة والجمال</a></li>
                                                    <li><a href="#!">العظام</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="useful-links ul-li-block clearfix">
                                                <h3 class="list-title">الأدوات الطبية</h3>
                                                <ul class="clearfix">
                                                    <li><a href="#!">Accu Chek Active</a></li>
                                                    <li><a href="#!">جهاز قياس السكر</a></li>
                                                    <li><a href="#!">جهاز الجبائر</a></li>
                                                    <li><a href="#!">مقياس التأكسج</a></li>
                                                    <li><a href="#!">الميكروسكوب</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="promotion-fullimage clearfix">
                                                <a href="#!" class="item-image">
                                                    <img src="{{asset('assets/home/images/promotion/img_8.jpg')}}" alt="image_not_found">
                                                </a>
                                                <div class="promotion-content position-top">
                                                    <small class="d-block text-white mb-1">المستلزمات الطبية</small>
                                                    <h3 class="item-title">
                                                        <span class="d-block">مستلزمات طبية لفيروس كورونا</span> <span class="d-block">المستلزمات الطبية</span>
                                                    </h3>
                                                    <a href="#!" class="btn-underline">تسوق الآن</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="menu-item-has-child">
                                <a href="#!">منتجاتنا</a>
                                <div class="mega_menu">
                                    <div class="row">
                                        @foreach( $categories as $category)
                                            <div class="col-lg-3">
                                                <div class="useful-links ul-li-block clearfix">
                                                    <h3 class="list-title">{{ $category->name }}</h3>
                                                    <ul class="clearfix">
                                                        @foreach($category->subCategories as $subCategory)
                                                            <li><a href="#!">{{ $subCategory->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                            
                                        <div class="col-lg-3">
                                            <div class="promotion-fullimage clearfix">
                                                <a href="#!" class="item-image">
                                                    <img src="{{asset('assets/home/images/promotion/img_8.jpg')}}" alt="image_not_found">
                                                </a>
                                                <div class="promotion-content position-top">
                                                    <small class="d-block text-white mb-1">المستلزمات الطبية</small>
                                                    <h3 class="item-title">
                                                        <span class="d-block">مستلزمات طبية لفيروس كورونا</span>
                                                        <span class="d-block">المستلزمات الطبية</span>
                                                    </h3>
                                                    <a href="#!" class="btn-underline">تسوق الآن</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('user-blogs.index')}}">الاخبار</a>
                            </li>
                            <li><a href="{{ route('contact')}}">اتصل بنا</a></li>
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


{{-- <!-- backtotop - start -->
<div id="thetop"></div>
<div id="backtotop">
    <a href="#" id="scroll">
        <i class="las la-arrow-up"></i>
    </a>
</div>

<!-- sidebar mobile menu - start -->
<div class="sidebar-menu-wrapper">
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
</div> --}}
<!-- backtotop - start -->
<div id="thetop"></div>
<div id="backtotop">
    <a href="#" id="scroll">
        <i class="las la-arrow-up"></i>
    </a>
</div>

<!-- sidebar mobile menu - start -->
<div class="sidebar-menu-wrapper">
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
                    <input type="search" name="search" placeholder="ابحث عن منتجاتك">
                    <button type="submit"><i class="la la-search"></i></button>
                </div>
            </form>
        </div>

        {{-- <div id="mobile-accordion" class="mobile-accordion">
            <div class="card">
                <div class="card-header" id="heading-one">
                    <button data-toggle="collapse" data-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
                        <i class="las la-shopping-bag"></i> 
                        العناصر في السلة
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
                                        <h4 class="item-title">ميزان حرارة رقمي</h4>
                                        <span class="item-price">$39.50</span>
                                    </div>
                                    <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                </li>

                                <li>
                                    <div class="item-image">
                                        <img src="{{asset('assets/home/images/cart/img_2.png')}}" alt="image_not_found">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">ميزان حرارة رقمي بالأشعة تحت الحمراء</h4>
                                        <span class="item-price">$39.50</span>
                                    </div>
                                    <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                </li>

                                <li>
                                    <div class="item-image">
                                        <img src="{{asset('assets/home/images/cart/img_3.png')}}" alt="image_not_found">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">جهاز قياس ضغط الدم الرقمي</h4>
                                        <span class="item-price">$39.50</span>
                                    </div>
                                    <button type="button" class="remove-btn"><i class="las la-times"></i></button>
                                </li>
                            </ul>
                        </div>

                        <div class="btns-group ul-li clearfix">
                            <ul class="clearfix">
                                <li><a href="cart.html" class="btn bg-default-black">عرض السلة</a></li>
                                <li><a href="checkout.html" class="btn bg-royal-blue">الدفع</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="heading-two">
                    <button data-toggle="collapse" data-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                        <i class="las la-bars"></i> 
                        جميع الفئات
                    </button>
                </div>
                <div id="collapse-two" class="collapse" aria-labelledby="heading-two" data-parent="#mobile-accordion">
                    <div class="card-body all-categories-list ul-li-block clearfix">
                        <ul class="clearfix">
                            <li><a href="#!"><span><i class="las la-microscope"></i></span> الأجهزة</a></li>
                            <li><a href="#!"><span><i class="las la-capsules"></i></span> الطب العام</a></li>
                            <li><a href="#!"><span><i class="las la-dna"></i></span> المكملات الغذائية</a></li>
                            <li><a href="#!"><span><i class="las la-first-aid"></i></span> الصيدلة</a></li>
                            <li><a href="#!"><span><i class="las la-stethoscope"></i></span> الأدوات الطبية</a></li>
                            <li><a href="#!"><span><i class="las la-syringe"></i></span> أدوات الجراحة</a></li>
                            <li><a href="#!"><span><i class="las la-brain"></i></span> طب الأعصاب</a></li>
                            <li><a href="#!"><span><i class="las la-x-ray"></i></span> العظام</a></li>
                            <li><a href="#!"><span><i class="las la-thermometer"></i></span> أدوية السكري</a></li>
                            <li><a href="#!"><span><i class="las la-user-nurse"></i></span> أجهزة العناية المركزة</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="menu_list ul-li-block clearfix">
            <h3 class="widget-title"> القوائم</h3>

            <ul class="clearfix">
                <li class="active">
                    <a href="{{route('index')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الرئيسية</a>
                </li>
                <li><a href="{{route('about')}}">من نحن</a></li>
                {{-- <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">المتجر</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">متجر الشبكة</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-grid-2-column.html">شبكة عمودين</a></li>
                                <li><a href="shop-grid-3-column.html">شبكة ثلاثة أعمدة</a></li>
                                <li><a href="shop-grid-4-column.html">شبكة أربعة أعمدة</a></li>
                            </ul>
                        </li>
                        <li><a href="shop-list.html">قائمة المتجر</a></li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تفاصيل المتجر</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-details-1.html">تفاصيل المتجر الإصدار 1</a></li>
                                <li><a href="shop-details-2.html">تفاصيل المتجر الإصدار 2</a></li>
                                <li><a href="shop-details-3.html">تفاصيل المتجر الإصدار 3</a></li>
                                <li><a href="shop-details-4.html">تفاصيل المتجر الإصدار 4</a></li>
                            </ul>
                        </li>
                        <li><a href="cart.html">صفحة السلة</a></li>
                        <li><a href="checkout.html">صفحة الدفع</a></li>
                        <li><a href="wishlist.html">صفحة المفضلة</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الصفحات</a>
                    <ul class="dropdown-menu">
                        <li><a href="cart.html">صفحة السلة</a></li>
                        <li><a href="checkout.html">صفحة الدفع</a></li>
                        <li><a href="wishlist.html">صفحة المفضلة</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{route('user-blogs.index')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">المدونة</a>
                </li>
                <li><a href="{{route('contact')}}">اتصل بنا</a></li>
            </ul>
        </div>

        {{-- <div class="user-dropdown ul-li-block clearfix">
            <h3 class="widget-title">إعدادات المستخدم</h3>
            <ul class="clearfix">
                <li><a href="#!"><i class="las la-user-circle"></i> الملف الشخصي</a></li>
                <li><a href="#!"><i class="las la-user-cog"></i> الإعدادات</a></li>
                <li><a href="#!"><i class="las la-sign-out-alt"></i> تسجيل الخروج</a></li>
            </ul>
        </div> --}}

    </div>
    <div class="overlay"></div>
</div>
  @yield('layoutContent')
  

  {{-- @include('layouts/sections/scriptsHomePage') --}}
  @include('layouts/sections/footer/footer-homePage')
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
  <script src="{{ asset('assets/home/js/jquery-3.6.0.min.js') }}"></script> 
  <script src="{{ asset('assets/home/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/home/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/owl.carousel2.thumbs.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/home/js/countdown.js') }}"></script>

  <!-- Google Maps JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
  <script src="{{ asset('assets/home/js/gmaps.min.js') }}"></script>

  <!-- Mobile Menu JS -->
  <script src="{{ asset('assets/home/js/mCustomScrollbar.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('assets/home/js/custom.js') }}"></script>
</body>

</html>
