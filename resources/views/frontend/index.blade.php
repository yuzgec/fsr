@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <section class="h4-about-section pt-50 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-left">
                        <div class="title-style-2">
                            <h3>{{__('site.firma')}}</h3>
                            {!! $Hakkimizda->desc !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-right">
                        <div class="img-wrapper">
                            <img src="/storage/3/conversions/1-img.jpg"  alt="{{ __('site.firma') }}">
                            <div class="ab-right-content">
                                <div class="dark-bg">
                                    <span class="title">600+</span>
                                    <span class="subtitle">{{__('site.musteri')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h4-blog-area pt-30 pb-50">
        <div class="container">
            <div class="h4-blogs">
                <div class="row">
                    @foreach($Product->where('category', 1) as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="h4-blog-column">
                                <div class="thumb-wrapper">
                                    <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                        <img src="/storage/3/conversions/1-img.jpg">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="h6-headline">
                                        <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                            <h4>{{ $item->title }}</h4>
                                        </a>
                                    </div>
                                    {{ __('site.firma') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="home5-portfolio-area pt-50 mb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="title-style-3">
                        <span class="bixol-subtitle">{{ __('site.firma') }}</span>
                        <h3 class="text-uppercase">{{ __('site.urunkategorileri') }}</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bf-desc">
                        <p>{{ __('site.urunust') }}</p>
                    </div>
                </div>
            </div>
            <div class="home5-portfolio-slider">
                @foreach($ProductCategory->where('parent_id', 0) as $item)
                    <div class="portfolio-single">
                    <div class="img-wrapper">
                        <img src="/storage/3/conversions/1-img.jpg"  alt="{{ __('site.firma') }}">
                        <div class="overlay">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>

                    <div class="portfolio-bottom">
                        <div class="h4-headline">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <h5>{{ $item->title }}</h5>
                            </a>
                        </div>
                        <div class="subtitle">
                            <span>{{ __('site.firma') }}</span>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('categorydetail',$item->slug) }}" title="{{ $item->title }}">
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>{{ __('site.incele') }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bixol-about-section mt-350">
        <span class="bixol-about-bg"><img src="/frontend/images/home1/bg-before-after.jpg"  alt="{{ __('site.firma') }}"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bixol-about-left">
                        <div class="bixol-slider-wrapper">
                            <div class="bixol-slider-content">
                                <div class="icon-wrapper">
                                    <i class="flaticon flaticon-factory"></i>
                                </div>
                                <div class="content-bottom">
                                    <span>Kuruluş</span>
                                    <h6>1999</h6>
                                </div>
                            </div>
                            <div class="bixol-compare-slider">
                                <div class="before-after">
                                    <img src="/frontend/images/home1/compare-1.jpg"  alt="{{ __('site.firma') }}">
                                    <img src="/frontend/images/home1/compare-2.jpg"  alt="{{ __('site.firma') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bixol-about-right">
                        <div class="bixol-title-area">
                            <span class="bixol-subtitle">{{ __('site.firma') }}</span>
                            <h3>NEDEN<span> FSR KİMYA?</span></h3>
                            <p>Fsr Grup şirketi İzmir Serbest Bölgedeki (İZBAŞ) kendi tesislerinde temizlik kağıdı ürünleri üretmek amacıyla kurulmuştur. Firmamız temizlik kağıtları sektöründe hem endüstriyel ve ev tipi olmak üzere bir çok ürün gamını bünyemizde üretimini gerçekleştirmekteyiz.

                            </p>
                        </div>
                        <div class="devider"><hr></div>
                        <div class="bixol-about-content">
                            <div class="video-wrapper">
                                <div class="video-thumb">
                                    <img src="/frontend/images/home1/video-thumb.jpg"  alt="{{ __('site.firma') }}">
                                    <a href="https://www.youtube.com/watch?v=jhFDyDgMVUI" class="video-popup"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-content">
                                <a href="services.html"><span class="title">Tanıtım Videosu</span></a>
                                <p>Firmamıza ait üretim ve ürünleri ile ilgili tanıtım videomuz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bixol-service-section pb-70 mt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="bixol-services">
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-furniture-and-household"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Plumbing service</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-clean"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Office Cleaning</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-garment"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Laundry Service</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bixol-service-middle">
                        <div class="img-wrapper">
                            <img src="/frontend/images/home1/sr-middle.png"  alt="{{ __('site.firma') }}">
                            <div class="banner-content">
                                <span class="banner-svg-1"></span>
                                <span class="banner-svg-2"></span>
                                <h3>25+</h3>
                                <p>Service <br>we provide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bixol-services">
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-toilet"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Toilet Cleaning</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-window-cleaner"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Window Cleaning</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-detergent"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="service-details.html"><h5>Kitchen Cleaning</h5></a>
                                <p>As a app web crawler expert a significant of internet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home2-blog-area pb-150">
        <div class="container">
            <div class="blog-top-title">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bixol-title-area">
                            <span class="bixol-subtitle">{{ __('site.firma') }}</span>
                            <h3>Haberler Duyurular</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bf-desc">

                        </div>
                    </div>
                </div>
            </div>
            <div class="home2-blog-slider">
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/frontend/images/home2/blog-1.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>01 01,2023</span>
                            <span><i class="fas fa-eye"></i>32 Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

@endsection
@section('customJS')

    <script>
        var	tpj = jQuery;
        if(window.RS_MODULES === undefined) window.RS_MODULES = {};
        if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider11"] = {init:function() {
                window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
                if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
                window.revapi1 = jQuery(window.revapi1);
                if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
                revapi1.revolutionInit({
                    revapi:"revapi1",
                    sliderLayout:"fullwidth",
                    visibilityLevels:"1240,1024,778,480",
                    gridwidth:"1230,1024,778,480",
                    gridheight:"676,676,560,520",
                    spinner:"spinner0",
                    perspective:600,
                    perspectiveType:"global",
                    keepBPHeight:true,
                    editorheight:"676,676,560,520",
                    responsiveLevels:"1240,1024,778,480",
                    progressBar:{disableProgressBar:true},
                    navigation: {
                        onHoverStop:false,
                        bullets: {
                            enable:true,
                            tmp:"",
                            style:"bixol-bullet-number",
                            hide_onleave:true,
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0,
                            direction:"vertical"
                        }
                    },
                    viewPort: {
                        global:false,
                        globalDist:"-200px",
                        enable:false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid:true
                    },
                });

            }} // End of RevInitScript
        if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
    </script>

@endsection
