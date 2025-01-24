@extends('layouts/homePageLayout')

@section('title', $blog->title)

@section('layoutContent')

<main>

    <!-- قسم الخبز (Breadcrumb) -->
    <section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="{{asset('assets/home/images/background/bg_1.jpg')}}">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <h1 class="page-title mb-3">{{ $blog->title }}</h1>
                    <div class="breadcrumb-nav ul-li-center clearfix">
                        <ul class="clearfix">
                            <li><a href="{{ route('index') }}">الرئيسية</a></li>
                            <li><a href="{{ route('user-blogs.index') }}">المدونة</a></li>
                            <li class="active">تفاصيل المدونة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <span class="decoration-image pill-image-1">
            <img src="{{asset('assets/home/images/decoration/pill_1.png')}}" alt="pill_image_not_found">
        </span>
    </section>

    <!-- قسم تفاصيل المدونة -->
    <section id="details-section" class="details-section blog-details sec-ptb-100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-9 col-sm-11 col-xs-12">
                    <div class="details-image mb-40">
                        <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}">
                    </div>

                    <div class="details-content mb-100">
                        <div class="post-meta ul-li mb-30">
                            <ul class="clearfix">
                                <li>{{ $blog->created_at->format('d M Y') }}</li>
                                {{-- <li>قراءة {{ $blog->reading_time }} دقائق</li> --}}
                            </ul>
                        </div>
                        <h2 class="item-title mb-30">{{ $blog->title }}</h2>
                        <p class="mb-30">
                            {{ $blog->description }}
                        </p>
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                {{-- "{{ $blog->quote }}" --}}
                            </p>
                        </blockquote>

                        {{-- <div id="image-carousel" class="image-carousel mb-40 owl-carousel owl-theme arrow-right-left">
                            @if ($blog->gallery)
                                @foreach (json_decode($blog->gallery) as $image)
                                    <div class="item">
                                        <img src="{{ asset($image_url) }}" alt="gallery_image">
                                    </div>
                                @endforeach
                            @endif
                        </div> --}}
                    </div>
                </div>

                <!-- القسم الجانبي -->
                <div class="col-lg-4 col-md-9 col-sm-11 col-xs-12">
                    <aside id="sidebar-section" class="sidebar-section clearfix">
                        <div class="widget sidebar-search">
                            <form action="" method="GET">
                                <input type="search" name="query" placeholder="ابحث عن مقالة">
                                <button type="submit"><i class="ti ti-search"></i></button>
                            </form>
                        </div>

                        <div class="widget recent-post ul-li-block">
                            <h3 class="widget-title">المشاركات الأخيرة</h3>
                            <ul class="clearfix">
                                @foreach ($recentBlogs as $recentBlog)
                                    <li>
                                        <div class="blog-small clearfix">
                                            <a href="{{ route('user-blogs.show', $recentBlog->id) }}" class="item-image">
                                                <img src="{{ asset($recentBlog->image_url) }}" alt="{{ $recentBlog->title }}">
                                            </a>
                                            <div class="item-content">
                                                <h4 class="item-title">
                                                    <a href="{{ route('user-blogs.show', $recentBlog->id) }}">
                                                        {{ $recentBlog->title }}
                                                    </a>
                                                </h4>
                                                <span class="post-date">{{ $recentBlog->created_at->format('d M Y') }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Scripts -->
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

<!-- خرائط جوجل -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
<script src="{{ asset('assets/home/js/gmaps.min.js') }}"></script>

<!-- قائمة الجوال -->
<script src="{{ asset('assets/home/js/mCustomScrollbar.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/home/js/custom.js') }}"></script>
@endsection