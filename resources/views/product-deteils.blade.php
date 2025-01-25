@extends('layouts/homePageLayout')

@section('title', $product->name)

@section('page-style')
<style>
    /* تنسيق النص وضبط الحدود */
    .details-content {
        max-width: 600px; /* تحديد عرض النص */
        margin: 0 auto; /* توسيط النص */
        padding: 20px; /* إضافة حواف داخلية */
        text-align: justify; /* محاذاة النص */
        line-height: 1.6; /* تحديد ارتفاع السطر */
    }

    .details-content p {
        word-wrap: break-word; /* تجنب تجاوز النص للحدود */
    }

    /* توافق الصفحة مع وضع الهاتف */
    @media (max-width: 768px) {
        .details-content {
            padding: 10px; /* تقليل الحواف الداخلية للأجهزة المحمولة */
        }

        .details-image img {
            width: 100%; /* جعل الصورة تأخذ عرض الصفحة بالكامل */
            height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع */
        }

        .details-content h2 {
            font-size: 1.5rem; /* تقليل حجم العنوان للأجهزة المحمولة */
        }

        .details-content p {
            font-size: 0.9rem; /* تقليل حجم النص للأجهزة المحمولة */
        }
    }

    /* ضبط مقاس الصورة */
    .details-image img {
        max-width: 100%; /* جعل الصورة تتكيف مع عرض العنصر الأب */
        height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع */
        border-radius: 10px; /* إضافة زوايا مدورة */
    }

    .btn {
        background-color: #284297; /* لون خلفية الصفحة */

    }

    @media (max-width: 768px) {
        .details-image img {
            max-width: 100%; /* جعل الصورة تأخذ عرض الصفحة بالكامل على الأجهزة المحمولة */
            height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع */
        }
    }

    /* تنسيق الصفحة بشكل عام */
    body {
        /* font-family: 'Arial', sans-serif; تحديد خط النص */
        background-color: #f9f9f9; /* لون خلفية الصفحة */
    }

    .container {
        padding: 20px; /* إضافة حواف داخلية للعناصر */
    }

    .row {
        margin-bottom: 20px; /* إضافة مسافة بين الصفوف */
    }
</style>
@endsection
@section('layoutContent')
<br>
<br>

<main>
    <section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="assets/images/background/bg_1.jpg">
        <div class="container text-center">
            <h1 class="page-title mb-3">{{$product->name}}</h1>
            <div class="breadcrumb-nav ul-li-center clearfix">
                <ul class="clearfix">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li class="active">{{$product->name}}</li>
                </ul>
            </div>
        </div>
        <span class="decoration-image pill-image-1">
            <img src="{{asset('assets/home/images/decoration/pill_1.png')}}" alt="pill_image_not_found">
        </span>
    </section>

    <section class="details-section sec-ptb-100 pb-0 clearfix">
        <div class="container">
            <div class="row mb-100 justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
                    <div class="details-image">
                        <img src="{{asset($product->image_url)}}" alt="product_image_not_found" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                    <div class="details-content pl-20">
                        <span class="post-type mb-15">{{$product->subCategory->name}}</span>
                        <h2 class="item-title mb-15">{{$product->name}}</h2>
                        <p class="mb-40">{{$product->description}}</p>
                        <button type="button" onclick="openPdfModal()" class="btn btn-outline-primary">عرض الملف</button>

                        {{-- <a href="#" onclick="openPdfModal()" class="pdf-button">عرض الملف</a> --}}
                    </div>
                </div>
            </div>

            <!-- PDF Viewer Modal -->
            <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">عرض الملف</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="pdfViewer" src="" frameborder="0" width="100%" height="600px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{ asset('assets/home/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>

<script>
    const pdfUrl = "{{ asset($product->pdf_url) }}";
    console.log("ppppppp ====> ", pdfUrl)
    function openPdfModal() {
        const pdfViewer = window.open(pdfUrl, "_blank", "width=800,height=600");
        if (!pdfViewer) {
            alert("لم يتم فتح ملف PDF. الرجاء التحقق من إعدادات المتصفح.");
        }
    }
</script>

@endsection
