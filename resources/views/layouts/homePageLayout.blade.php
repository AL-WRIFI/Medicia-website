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

    <link rel="stylesheet" href="https://ajapharma.com/wp-content/themes/aja/css/pure.css" type="text/css" />
    <link rel="stylesheet" href="https://ajapharma.com/wp-content/themes/aja/css/responsive.css" type="text/css" />
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajapharma.com/wp-content/themes/aja/css/lightcase.css" type="text/css" />

   
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel/dist/assets/owl.theme.default.min.css">
    @stack('styles')
    @yield('page-style')

</head>

<body class="home-v2">
    <header class="header desktop-header">
        <div class="wrapper">
            <div class="pure-g">
                <div class="pure-u-md-1-5 ">
                    <a href="https://ajapharma.com/">
                        <img src="{{asset('assets/home/images/logo/logo_1.png')}}" style="width: 100%;   padding: 10px;"  alt="أجا فارما">
                    </a>
                </div>
                <div class="pure-u-md-3-5">
                    <nav class="mainmenu" id="menu">
                        <ul>
                            <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-181 current_page_item menu-item-52"><a href="{{route('index')}}" aria-current="page">الرئيسية</a></li>
                            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="{{route('about')}}">من نحن</a></li>
                            <li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-323"><a href="{{route('home-products')}}">المنتجات</a></li>
                            <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="">توظيف</a></li>
                            <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="{{route('contact')}}">اتصل بنا</a></li>
                            <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="{{route('user-blogs.index')}}">الاخبار</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="pure-u-md-1-5">
                    <ul class="social-icons">
                        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <header class="header mobile-header">
        <div class="nav-list"><i></i></div>
        <div class="">
            <a href="https://ajapharma.com/" style="font-size: 30px; color: #183147; padding: 16px;">
                العالمية المثالية
                {{-- <img src="{{asset('assets/home/images/logo/logo_1.png')}}"alt="أجا فارما"> --}}
            </a>
        </div>
    </header>
    <nav class="pushmenu pushmenu-left">
        <h3>Menu</h3>
        <br>
        <ul>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-181 current_page_item menu-item-52"><a href="{{route('index')}}" aria-current="page">الرئيسية</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="{{route('about')}}">من نحن</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-323"><a href="">المنتجات</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="">توظيف</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="{{route('contact')}}">اتصل بنا</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="{{route('user-blogs.index')}}">الاخبار</a></li>
        </ul>
       
    </nav>
    {{-- <div class="pure-g" id="page-181">

        <!-- MasterSlider -->
        <div id="P_MS6576b62d473e0" class="master-slider-parent ms-parent-id-1">


            <!-- MasterSlider Main -->
            <div id="MS6576b62d473e0" class="master-slider ms-skin-default">

                <div class="ms-slide" data-delay="12" data-fill-mode="fill">
                    <img decoding="async" src="http://ajapharma.com/wp-content/plugins/masterslider/public/assets/css/blank.gif" alt="" title="" data-src="http://ajapharma.com/wp-content/uploads/2015/11/Aja-Sliders-first5.png" />


                </div>
                <div class="ms-slide" data-delay="12" data-fill-mode="fill">
                    <img decoding="async" src="http://ajapharma.com/wp-content/plugins/masterslider/public/assets/css/blank.gif" alt="" title="" data-src="http://ajapharma.com/wp-content/uploads/2015/11/Aja-Sliders-capacity6.png" />


                </div>

            </div>
            <!-- END MasterSlider Main -->


        </div>
        <!-- END MasterSlider -->

        <script>
            (function($) {
                "use strict";

                $(function() {
                    var masterslider_73e0 = new MasterSlider();

                    // slider controls
                    masterslider_73e0.control('arrows', {
                        autohide: true,
                        overVideo: true,
                        hideUnder: 768
                    });
                    masterslider_73e0.control('bullets', {
                        autohide: false,
                        overVideo: true,
                        dir: 'h',
                        align: 'bottom',
                        space: 6,
                        margin: 10
                    });
                    masterslider_73e0.control('timebar', {
                        autohide: true,
                        overVideo: true,
                        align: 'top',
                        color: '#FFFFFF',
                        width: 4
                    });
                    // slider setup
                    masterslider_73e0.setup("MS6576b62d473e0", {
                        width: 1000,
                        height: 500,
                        minHeight: 0,
                        space: 0,
                        start: 1,
                        grabCursor: false,
                        swipe: true,
                        mouse: false,
                        keyboard: false,
                        layout: "fullwidth",
                        wheel: false,
                        autoplay: true,
                        instantStartLayers: true,
                        loop: true,
                        shuffle: false,
                        preload: 0,
                        heightLimit: true,
                        autoHeight: true,
                        smoothHeight: true,
                        endPause: false,
                        overPause: true,
                        fillMode: "fill",
                        centerControls: false,
                        startOnAppear: false,
                        layersMode: "center",
                        autofillTarget: "",
                        hideLayers: false,
                        fullscreenMargin: 0,
                        speed: 20,
                        dir: "h",
                        view: "basic"
                    });



                    window.masterslider_instances = window.masterslider_instances || [];
                    window.masterslider_instances.push(masterslider_73e0);
                });

            })(jQuery);
        </script>


        <div class="pure-u-md-1 homepage">
            <h1>إمكانيات ضخمة… لشراكات عملاقة</h1>
            <p>يعتبرمصنع أجا فارما علامة تكنولوجية مميزة بين مصانع الأدوية بالشرق الأوسط بإمكانياته الضخمة و قد استخدم في إنشائه أحدث التقنيات المعروفة عالميا في مجال صناعة الأدوية. يقع المصنع في المدينة الصناعية بحائل شمالي المملكة العربية السعودية،
                ويطمح إلى تقديم أعلى و أحدث مستويات الجودة في صناعة الأدوية على مستوى منطقة الشرق الأوسط بأكملها.</p>
        </div>
        <div class="chess clearfix">
            <div class="pure-u-md-1-2 item float-left">
                <div class="chess-text">
                    <div class="text">
                        <h2>الموقع المتميز</h2>
                        <div>
                            كان اختيار الموقع المناسب للمصنع أمراً ذا أهمية قصوى بالنسبة لنا، لذا تم اختيار المدينة الصناعية بحائل كموقع أمثل للمصنع؛ لما تتميز به من موقع إستراتيجي يسهل عمليات النقل و التوزيع برا و بحرا و جوا، كما يتوفر بها خطوط للسكك الحديدية يمكننا من شحن المنتجات
                            إلى كافة مدن المملكة. و قد أُنشئ المصنع على قطعة أرضٍ مساحتها ١٢٠ ألف مترا مربعا، تحوي كل مباني المصنع الحالية بالإضافة لوجود مساحات فارغة للتوسعات المستقبلية.</div>
                    </div>
                </div>
            </div>
            <div class="pure-u-md-1-2 item image"><img decoding="async" src="http://ajapharma.com/wp-content/themes/aja/images/map.jpg" /></div>
        </div>
        <div class="chess clearfix">
            <div class="pure-u-md-1-2 item float-right">
                <div class="chess-text">
                    <div class="text">
                        <h2>الجودة هي كل شيء</h2>
                        <div>تم تصميم عمليات مراقبة الجودة لتفي بكافة معايير التصنيع الدوائي العالمية الحديثة و معايير الآيزو لتشغيل المصانع من خلال معاملنا المجهزة بأحدث الأجهزة و التقنيات، و ذلك من خلال فريق مراقبة الجودة بالمصنع المؤهلين علميا، للتأكد
                            من كافة المدخلات المستخدمة من مواد تصنيعية و خطوات تشغيلية و اعتمادها قبل الموافقة على تسليم أي منتج نهائي بالأسواق.</div>
                    </div>
                </div>
            </div>
            <div class="pure-u-md-1-2 item image"><img decoding="async" src="http://ajapharma.com/wp-content/themes/aja/images/quilty.jpg" /></div>
        </div>
        <div class="chess clearfix">
            <div class="pure-u-md-1-2 item float-left">
                <div class="chess-text">
                    <div class="text">
                        <h2>الخبرة المنتقاة ..</h2>
                        <div>يعمل في المصنع نخبةٌ من الكفاءات المنتقاة بعناية محليا و دوليا، لكي تلبي أحدث معايير التشغيل والإنتاج المطلوبة.<br /> كما يعمل معنا فريق من المحترفين الذين يحصلون على التدريب المتواصل ليقوموا بتوصيل منتجاتنا بالشكل اللائق لكافة
                            الأسواق المستهدفة.</div>
                    </div>
                </div>
            </div>
            <div class="pure-u-md-1-2 item image"><img decoding="async" src="http://ajapharma.com/wp-content/themes/aja/images/development.jpg" /></div>
        </div>
        <div class="chess clearfix">
            <div class="pure-u-md-1-2 item float-right">
                <div class="chess-text">
                    <div class="text">
                        <h2>استيفاء المتطلبات الرقابية</h2>
                        <div>تم تجهيز المصنع بأحدث معدات و طرق تصنيع الدواء و أدق الأجهزة التكنولوجية لتتوافق منتجاته مع متطلبات الهيئة السعودية للغذاء والدواء، والهيئة الأمريكية للغذاء والدواء، وكذلك المواصفات الدوائية المعتمدة بالدول الأوروبية.</div>
                    </div>
                </div>
            </div>
            <div class="pure-u-md-1-2 item image"><img decoding="async" src="http://ajapharma.com/wp-content/themes/aja/images/machinery.jpg" /></div>
        </div>
        <div class="partners pure-u-md-1 clearfix">
            <h2>شركاء النجاح</h2>
            <div class="pure-u-md-1">
                <div class="lshowcase-clear-both">&nbsp;</div>
                <div class="lshowcase-logos ">
                    <div style='display:none;' class='lshowcase-wrap-carousel-0'>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2015/11/genepharm.png' width='150' height='49' alt='genepharm' title='' class='lshowcase-hover-grayscale' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2015/11/medochemie-200x102.jpg' width='200' height='102' alt='medochemie' title='' class='lshowcase-hover-grayscale' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2015/11/lundbeck.jpg' width='193' height='76' alt='lundbeck' title='' class='lshowcase-hover-grayscale' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2015/11/chanelle.jpg' width='187' height='95' alt='chanelle' title='' class='lshowcase-hover-grayscale' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2015/11/gedeon-richter-200x29.jpg' width='200' height='29' alt='gedeon-richter' title='' class='lshowcase-hover-grayscale' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/helm.png' width='172' height='111' alt='Helm' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/abbott.png' width='171' height='98' alt='abbot' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/aspen.jpg' width='166' height='103' alt='aspen' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/logo-200x107.png' width='200' height='107' alt='elpen' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/mtecnimede-200x32.png' width='200' height='32' alt='tm tecnimede' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:90%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/pharmathen-200x69.jpg' width='200' height='69' alt='pharmathen' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:90%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2021/04/servier-200x91.png' width='200' height='91' alt='servier' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                        <div class="lshowcase-slide lshowcase-horizontal-slide"><img src='https://ajapharma.com/wp-content/uploads/2019/05/Novartis_Large-e1558436571438-200x128.png' width='200' height='128' alt='Novartis' title='' class='lshowcase-hover-grayscale' style='height:auto; max-width:80%;' /></div>
                    </div>
                </div>
                <div class="lshowcase-clear-both">&nbsp;</div>
            </div>
        </div>
    </div> --}}


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





  {{-- <script src="https://ajapharma.com/wp-content/themes/aja/js/jQuery.js"></script> --}}
    {{-- <script src="https://ajapharma.com/wp-content/themes/aja/js/equalHeights.js"></script> --}}
    {{-- <script src="https://ajapharma.com/wp-content/themes/aja/js/matchMedia.js"></script> --}}
    {{-- <script src="https://ajapharma.com/wp-content/themes/aja/js/lightcase.js"></script> --}}
    <script src="https://ajapharma.com/wp-content/themes/aja/js/init.js"></script>

   
</body>

</html>
