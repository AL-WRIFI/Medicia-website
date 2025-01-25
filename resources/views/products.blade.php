@extends('layouts/homePageLayout')

@section('title', 'منتجاتنا')

@section('page-style')

@endsection
@section('layoutContent')


<main style="margin-top:10%">
    <div class="wrapper" >
        <div class="pure-g products-page">

            @foreach ($products as $product)
            <div class="pure-u-1-2 pure-u-md-1-4 products">
                    <a href="{{ route('product-details', $product->id)}}" class="lightcase" data-rel="lightcase:Products">
                    <img width="250" height="250" src="{{asset($product->image_url)}}" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="{{asset($product->image_url)}} 250w, {{asset($product->image_url)}} 150w, {{asset($product->image_url)}} 300w, {{asset($product->image_url)}} 768w, {{asset($product->image_url)}}" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                            <h3>{{$product->name}}</h3>
                <div class="product-description"></div>
            </div>
            @endforeach
                            
                            {{-- <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Deslin-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-250x250.png" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-250x250.png 250w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-150x150.png 150w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-300x300.png 300w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-768x768.png 768w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-1024x1024.png 1024w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5-200x200.png 200w, https://ajapharma.com/wp-content/uploads/2020/01/Untitled-design-5.png 1080w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>ديسلن</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-300x300.jpg 300w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-1024x1024.jpg 1024w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-150x150.jpg 150w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-768x768.jpg 768w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-1536x1536.jpg 1536w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-2048x2048.jpg 2048w, https://ajapharma.com/wp-content/uploads/2021/04/Cebo-Pack-200x200.jpg 200w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>سيبو</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Solfisan-insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Solfisan-Packshot-250x250.png" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Solfisan-Packshot-250x250.png 250w, https://ajapharma.com/wp-content/uploads/2021/04/Solfisan-Packshot-150x150.png 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>سولفيسان</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Linid-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Picture1-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Picture1-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Picture1-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>لينيد</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Klendam-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Klendam-Pack-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Klendam-Pack-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Klendam-Pack-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>كليندام</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Fontax-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Fontax-Pack-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Fontax-Pack-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Fontax-Pack-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>فونتاكس</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Escitam-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Escitam-20-mg-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Escitam-20-mg-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Escitam-20-mg-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>اسيتام</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Diaoptim-MR-Insert-3.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Diaoptim-MR-Pack-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Diaoptim-MR-Pack-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Diaoptim-MR-Pack-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>ديااوبتيم ام ار</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Cinac-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/cinac-2-1-250x250.png" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/cinac-2-1-250x250.png 250w, https://ajapharma.com/wp-content/uploads/2021/04/cinac-2-1-150x150.png 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>سيناك</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Bisolol-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-300x300.jpg 300w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-1024x1024.jpg 1024w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-150x150.jpg 150w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-768x768.jpg 768w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-1536x1536.jpg 1536w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-2048x2048.jpg 2048w, https://ajapharma.com/wp-content/uploads/2021/04/For-Marketing-Bisolol-Farament-10-mg-PVT-carton-new-200x200.jpg 200w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>بايسولول</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2021/04/Belara-Insert-1.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2021/04/Belara-Packshot-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2021/04/Belara-Packshot-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2021/04/Belara-Packshot-150x150.jpg 150w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>بيلارا</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2017/05/Regulon-both.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1-150x150.jpg 150w, https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1-300x300.jpg 300w, https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1-200x200.jpg 200w, https://ajapharma.com/wp-content/uploads/2017/05/Reg-21-T1-1.jpg 765w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>ريجيولون</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2017/05/Postinor-Insert-3.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK-150x150.jpg 150w, https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK-300x300.jpg 300w, https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK-200x200.jpg 200w, https://ajapharma.com/wp-content/uploads/2017/05/POSTINOR-2-PACK.jpg 700w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>بوستينور2</h3>
                    <div class="product-description"></div>
                </div>
                            <div class="pure-u-1-2 pure-u-md-1-4 products">
                                        <a href="https://ajapharma.com/wp-content/uploads/2017/05/Clogrel-Insert.pdf" class="lightcase" data-rel="lightcase:Products">
                            <img width="250" height="250" src="https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-250x250.jpg" class="attachment-product-thumb size-product-thumb wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-250x250.jpg 250w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-300x300.jpg 300w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-1024x1024.jpg 1024w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-150x150.jpg 150w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-768x768.jpg 768w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-1536x1536.jpg 1536w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-2048x2048.jpg 2048w, https://ajapharma.com/wp-content/uploads/2017/05/For-Marketing-Clogrel-75mg-FCT-PVT-carton-new-200x200.jpg 200w" sizes="(max-width: 250px) 100vw, 250px" />					</a>
                                    <h3>كلوقريل</h3>
                    <div class="product-description"></div>
                </div> --}}
                    
        </div>
    </div>
</main>



@endsection
