@extends('layouts/homePageLayout')

@section('title', 'الأخبار')

@section('layoutContent')

<main dir="rtl">
    <section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="{{asset('assets/home/images/background/bg_1.jpg')}}">
        <div class="container text-center">
            <h1 class="page-title mb-3">المدونة</h1>
            <div class="breadcrumb-nav ul-li-center clearfix">
                <ul class="clearfix">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="blog-standard.html">المدونة</a></li>
                    <li class="active">المدونة (Masonry)</li>
                </ul>
            </div>
        </div>

        <span class="decoration-image pill-image-1">
            <img src="{{asset('assets/home/images/decoration/pill_1.png')}}" alt="صورة_الدواء_غير_موجودة">
        </span>
    </section>

    <section id="blog-section" class="blog-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="blog-masonry masonry-grid">
                <div class="grid-sizer"></div>

                @foreach($posts as $post)
                <div class="grid-item">
                    <div class="blog-grid-2">
                        <div class="item-image">
                            <img src="{{ asset($post->image_url) }}" alt="صورة_غير_موجودة">
                            {{-- <a href="#" class="post-category">{{ $post->category }}</a> --}}
                        </div>
                        <div class="item-content">
                            <div class="post-meta ul-li mb-3">
                                <ul class="clearfix">
                                    <li>{{ $post->created_at->format('d M Y') }}</li>
                                    <li>قراءة {{ $post->reading_time }} دقائق</li>
                                </ul>
                            </div>
                            <h3 class="item-title mb-3">
                                <a href="{{ route('blogs.show', $post) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <a href="{{ route('blogs.show', $post) }}" class="btn-underline">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="btn-wrap text-center clearfix">
                <a href="blog-standard.html" class="btn bg-royal-blue">تحميل المزيد</a>
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