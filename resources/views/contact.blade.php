@extends('layouts/homePageLayout')

@section('title', 'اتصل بنا')

@section('layoutContent')
<br>
<main dir="rtl">

    <section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="{{asset('assets/home/images/background/bg_1.jpg')}}">
        <div class="container text-center">
            <h1 class="page-title mb-3">اتصل بنا</h1>
            <div class="breadcrumb-nav ul-li-center clearfix">
                <ul class="clearfix">
                    <li><a href="{{route('index')}}">الرئيسية</a></li>
                    <li class="active">اتصل بنا</li>
                </ul>
            </div>
        </div>

        <span class="decoration-image pill-image-1">
            <img src="{{asset('assets/home/images/decoration/pill_1.png')}}" alt="صورة_الدواء_غير_موجودة">
        </span>
    </section>

    <section id="contact-section" class="contact-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row mt--40 mb-100 justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="primary-contact-info ul-li-block">
                        <span class="item-icon">
                            <i class="las la-clock"></i>
                        </span>
                        <h3 class="item-title">أوقات العمل</h3>
                        <ul class="clearfix">
                            <li>الأحد – الجمعة: 09:00 صباحًا – 10:30 مساءً</li>
                            <li>السبت: 10:00 صباحًا – 02:00 مساءً</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="primary-contact-info ul-li-block">
                        <span class="item-icon">
                            <i class="las la-headset"></i>
                        </span>
                        <h3 class="item-title">معلومات الاتصال</h3>
                        <ul class="clearfix">
                            <li>البريد الإلكتروني: yourmail@gmail.com</li>
                            <li>الجوال: +880 1990 6886</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="primary-contact-info ul-li-block">
                        <span class="item-icon">
                            <i class="las la-map-marked-alt"></i>
                        </span>
                        <h3 class="item-title">العنوان</h3>
                        <ul class="clearfix">
                            <li>28 برج الأخضر، اسم الشارع</li>
                            <li>صنعاء ,السنينة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-wrap mb-100">
            <div id="mapBox" data-lat="15.369445" data-lon="44.191006" data-zoom="10" data-info="صنعاء، اليمن" data-mlat="15.369445" data-mlon="44.191006">
            </div>
        </div>

        <div class="container">
            <div class="contact-form bg-gray">
                <h3 class="title-text text-center mb-60">تواصل معنا</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-item">
                            <input type="text" name="name" placeholder="اسمك*">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-item">
                            <input type="email" name="email" placeholder="بريدك الإلكتروني">
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <textarea name="message" placeholder="أخبرنا عن مشروعك"></textarea>
                </div>
                <div class="btn-wrap text-center">
                    <a href="#!" class="btn bg-royal-blue">إرسال الرسالة</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{ asset('assets/home/js/jquery-3.4.1.min.js') }}"></script> 
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
@endsection