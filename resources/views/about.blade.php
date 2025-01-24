@extends('layouts/homePageLayout')

@section('title', 'من نحن')

@section('layoutContent')

<main>
<section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="{{asset('assets/home/images/background/bg_1.jpg')}}">
    <div class="container text-center">
        <h1 class="page-title mb-3">من نحن</h1>
        <div class="breadcrumb-nav ul-li-center clearfix">
            <ul class="clearfix">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">من نحن</li>
            </ul>
        </div>
    </div>

    <span class="decoration-image pill-image-1">
        <img src="{{asset('assets/home/images/decoration/pill_1.png')}}" alt="صورة_الدواء_غير_موجودة">
    </span>
</section>

<section id="about-section" class="about-section sec-ptb-100 pb-0 clearfix">
    <div class="container">
        <div class="row mb-100 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="about-image">
                    <img src="{{asset('assets/home/images/about/img_1.jpg')}}" alt="صورة_غير_موجودة">
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="about-content">
                    <h2 class="title-text mb-40">أفضل البنى التحتية</h2>
                    <p class="mb-30">
                        نقدم لكم أفضل الخدمات والبنى التحتية التي تلبي احتياجاتكم. نحرص على تقديم تجربة فريدة ومميزة لعملائنا من خلال التطوير المستمر والابتكار.
                    </p>
                    <p class="mb-60">
                        نؤمن بأن الجودة والتميز هما أساس نجاحنا، لذلك نعمل بجد لتوفير أفضل الحلول التي تساعدكم على تحقيق أهدافكم. نلتزم بتقديم خدمات عالية الجودة تلبي توقعاتكم وتتفوق عليها.
                    </p>
                    <a href="#!" class="btn bg-royal-blue">اتصل بنا</a>
                </div>
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