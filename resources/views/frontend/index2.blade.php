@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <section class="h4-about-section pt-50">
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
                            <img src="/fabrika.jpg"  alt="{{ __('site.firma') }}">
                            <div class="ab-right-content">
                                <div class="dark-bg">
                                    <span class="subtitle">20+ Ülke</span>
                                    <span class="subtitle">İhracaat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h4-blog-area pt-30">
        <div class="container">
            <div class="h4-blogs">
                <div class="row">
                    @foreach($Product->where('category', 1) as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="h4-blog-column">
                                <div class="thumb-wrapper">
                                    <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                        <img src="/fabrika.jpg">
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

    <section class="home5-portfolio-area pt-50 mb-50" style="background-image: url('/arka1.jpg');background-size: cover">
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
                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page')}}"  alt="{{ __('site.firma') }}">
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
        <span class="bixol-about-bg"><img src="/NEDEN-FSR-10.jpg"  alt="{{ __('site.firma') }}"></span>
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
                                    <img src="/NEDEN-FSR-11.jpg"  alt="{{ __('site.firma') }}">
                                    <img src="/NEDEN-FSR-12.jpg"  alt="{{ __('site.firma') }}">
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
                                    <img src="/video.jpg"  alt="{{ __('site.firma') }}" style="width: 150px">
                                    <a href="https://www.youtube.com/watch?v=jhFDyDgMVUI" class="video-popup"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-content">
                                <a href="{{ route('home') }}"><span class="title">Tanıtım Videosu</span></a>
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
                                <a href="{{ route('home') }}"><h5>Kişisel Hijyen Ürünleri</h5></a>
                                <p>Günlük hayatta kullanılan Kozmetik ve hijyen sağlayıcılardır.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-clean"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="{{ route('home') }}"><h5>Ev Bakım Hijyen</h5></a>
                                <p>Evimizde bulunan yüzeylerin ve eşyaların temizliği için önemlidir.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-garment"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="{{ route('home') }}"><h5>Çamaşır Hijyen Ürünleri</h5></a>
                                <p>Çamaşırların temizliği ve hijyenik olması için kullanılan ürünlerdir.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bixol-service-middle">
                        <div class="img-wrapper">
                            <img src="/orta-kare.jpg"  alt="{{ __('site.firma') }}">
                            <div class="banner-content">
                                <span class="banner-svg-1"></span>
                                <span class="banner-svg-2"></span>
                                <h3>300+</h3>
                                <p style="margin-top:-7px">Ürün Çeşidi</p>
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
                                <a href="{{ route('home') }}"><h5>Banyo Hijyen Ürünleri</h5></a>
                                <p>Hijyenik tutulması, sağlığımızı korumak için önemlidir.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-window-cleaner"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="{{ route('home') }}"><h5>Endüstriyel Hijyen </h5></a>
                                <p>Endüstriyel alanlarda kullanılan hijyen ürünleridir.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-detergent"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="{{ route('home') }}"><h5>Kağıt Grubu Hijyen</h5></a>
                                <p>Birçok alanda kullanılan ürünlerdir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bixol-ct-section pb-20 pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="bixol-counter-column bx-col-line">
                        <div class="bixol-icon-wrapper">
                            <span><i class="flaticon flaticon-garment"></i></span>
                        </div>
                        <div class="bixol-ct-content">
                            <h3><span class="odometer" data-value="300">000</span><sup>+</sup></h3>
                            <span class="subtitle">Üzerinde ürün</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="bixol-counter-column bx-col-line">
                        <div class="bixol-icon-wrapper">
                            <span><i class="flaticon flaticon-meeting"></i></span>
                        </div>
                        <div class="bixol-ct-content">
                            <h3><span class="odometer" data-value="110">000</span><sup>+</sup></h3>
                            <span class="subtitle">Deneyimli Kadro</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="bixol-counter-column bx-col-line">
                        <div class="bixol-icon-wrapper">
                            <span><i class="flaticon flaticon-screen"></i></span>
                        </div>
                        <div class="bixol-ct-content">
                            <h3><span class="odometer" data-value="180">000</span><sup>+</sup></h3>
                            <span class="subtitle">Devam Eden Proje</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="bixol-counter-column">
                        <div class="bixol-icon-wrapper">
                            <span><i class="flaticon flaticon-trophy"></i></span>
                        </div>
                        <div class="bixol-ct-content">
                            <h3><span class="odometer" data-value="180">000</span><sup>+</sup></h3>
                            <span class="subtitle">Kaliteli Ürün</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bixol-case-study" >
        <div class="container" style="padding-bottom: 580px;background-image: url('/fsr-world.jpg');background-repeat: no-repeat">

        </div>
    </div>



    <section class="bixol-feedback" data-background="/baloncuk.jpg">
        <div class="container">
            <div class="bixol-feedback-top">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="bixol-title-area">
                            <span class="bixol-subtitle">Kullanıcı Yorumları</span>
                            <h3>Neden tercih ediliyoruz.</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bf-desc">
                            <p>Bizi tercih eden müşterilerimizin yorumları.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bixol-feedback-slider">
                <div class="feedback-column">
                    <span class="quote-icon"><i>,,</i></span>
                    <div class="feedback-content">
                        <p>Dr.Shield temizlik ürünleri, evinizin her köşesini temizlemeniz
                            için ihtiyacınız olan tüm araçları sunar. Ürünlerinin yüksek kalitesi ve performansı sayesinde, eviniz her zaman tertemiz ve
                            hijyenik kalır</p>
                    </div>
                    <div class="feedback-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="feedback-client-info">
                        <div class="client-thumb">
                            <img src="/yorum/1.jpg" alt="">
                            <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-1" d="M2.148,67.79c-6.5-3.873,3.333-51.582,35.7-64.084,7.869-3.039,20.244-5.27,32.042,0,9.869,4.409,22.9,15.479,20.141,25.634C88.282,35.8,80.315,41.292,73.556,40.326c-5.818-.832-7.942-6.419-11.9-8.24C42.754,23.4,9.5,72.173,2.148,67.79Z"/>
                                </g>
                            </svg>
                            <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-2" d="M88.258,0.506c6.5,3.874-3.333,51.582-35.7,64.084-7.869,3.039-20.244,5.27-32.042,0C10.644,60.181-2.383,49.111.372,38.956,2.124,32.5,10.091,27,16.851,27.97c5.818,0.832,7.942,6.419,11.9,8.24C47.652,44.9,80.9-3.877,88.258.506Z"/>
                                </g>
                            </svg>

                        </div>
                        <div class="clients-name">
                            <h6>Engin Şenol</h6>
                            <span>İnşaat Mühendisi</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-column">
                    <span class="quote-icon"><i>,,</i></span>
                    <div class="feedback-content">
                        <p>Dr.Shield temizlik ürünleri, evinizin her türlü kir ve lekeyi temizlemek için idealdir. Ürünlerinin benzersiz formülleri
                            sayesinde, evinizi kolayca temizleyebilir ve ferah bir ortam
                            oluşturabilirsiniz</p>
                    </div>
                    <div class="feedback-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="feedback-client-info">
                        <div class="client-thumb">
                            <img src="/yorum/2.jpg" alt="">
                            <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-1" d="M2.148,67.79c-6.5-3.873,3.333-51.582,35.7-64.084,7.869-3.039,20.244-5.27,32.042,0,9.869,4.409,22.9,15.479,20.141,25.634C88.282,35.8,80.315,41.292,73.556,40.326c-5.818-.832-7.942-6.419-11.9-8.24C42.754,23.4,9.5,72.173,2.148,67.79Z"/>
                                </g>
                            </svg>
                            <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-2" d="M88.258,0.506c6.5,3.874-3.333,51.582-35.7,64.084-7.869,3.039-20.244,5.27-32.042,0C10.644,60.181-2.383,49.111.372,38.956,2.124,32.5,10.091,27,16.851,27.97c5.818,0.832,7.942,6.419,11.9,8.24C47.652,44.9,80.9-3.877,88.258.506Z"/>
                                </g>
                            </svg>

                        </div>
                        <div class="clients-name">
                            <h6>Filiz Nurtepe</h6>
                            <span>Bankacı</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-column">
                    <span class="quote-icon"><i>,,</i></span>
                    <div class="feedback-content">
                        <p>Dr.Shield temizlik ürünleri, evinizin temizliği için ihtiyacınız
                            olan her şeyi sunar. Ürünlerinin etkili formülleri ve kullanım
                            kolaylığı sayesinde, evinizi taze ve hijyenik tutmak hiç bu
                            kadar kolay olmamıştı</p>
                    </div>
                    <div class="feedback-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="feedback-client-info">
                        <div class="client-thumb">
                            <img src="/yorum/3.jpg" alt="">
                            <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-1" d="M2.148,67.79c-6.5-3.873,3.333-51.582,35.7-64.084,7.869-3.039,20.244-5.27,32.042,0,9.869,4.409,22.9,15.479,20.141,25.634C88.282,35.8,80.315,41.292,73.556,40.326c-5.818-.832-7.942-6.419-11.9-8.24C42.754,23.4,9.5,72.173,2.148,67.79Z"/>
                                </g>
                            </svg>
                            <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-2" d="M88.258,0.506c6.5,3.874-3.333,51.582-35.7,64.084-7.869,3.039-20.244,5.27-32.042,0C10.644,60.181-2.383,49.111.372,38.956,2.124,32.5,10.091,27,16.851,27.97c5.818,0.832,7.942,6.419,11.9,8.24C47.652,44.9,80.9-3.877,88.258.506Z"/>
                                </g>
                            </svg>

                        </div>
                        <div class="clients-name">
                            <h6>Yılmaz Arslan</h6>
                            <span>Organizatör</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-column">
                    <span class="quote-icon"><i>,,</i></span>
                    <div class="feedback-content">
                        <p>Tercih ettiğim markalar arasında, kalitesine ve kokusuna
                            bayıldığım bir ürün. Bu ürünü bizimle buluşturan ve işini iyi
                            yapan insanlara Teşekkürler gerçekten.</p>
                    </div>
                    <div class="feedback-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="feedback-client-info">
                        <div class="client-thumb">
                            <img src="/yorum/4.jpg" alt="">
                            <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-1" d="M2.148,67.79c-6.5-3.873,3.333-51.582,35.7-64.084,7.869-3.039,20.244-5.27,32.042,0,9.869,4.409,22.9,15.479,20.141,25.634C88.282,35.8,80.315,41.292,73.556,40.326c-5.818-.832-7.942-6.419-11.9-8.24C42.754,23.4,9.5,72.173,2.148,67.79Z"/>
                                </g>
                            </svg>
                            <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-2" d="M88.258,0.506c6.5,3.874-3.333,51.582-35.7,64.084-7.869,3.039-20.244,5.27-32.042,0C10.644,60.181-2.383,49.111.372,38.956,2.124,32.5,10.091,27,16.851,27.97c5.818,0.832,7.942,6.419,11.9,8.24C47.652,44.9,80.9-3.877,88.258.506Z"/>
                                </g>
                            </svg>

                        </div>
                        <div class="clients-name">
                            <h6>Işıl Koç</h6>
                            <span>Reklamcı</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-column">
                    <span class="quote-icon"><i>,,</i></span>
                    <div class="feedback-content">
                        <p>Dr.Shield temizlik ürünleri, evinizi derinlemesine temizlemek
                            için harika bir seçimdir. Ürünlerinin güçlü formülleri sayesinde,
                            zorlu kirleri ve lekeleri çıkarmak çok daha kolay hale geliyor.</p>
                    </div>
                    <div class="feedback-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="feedback-client-info">
                        <div class="client-thumb">
                            <img src="/yorum/5.jpg" alt="">
                            <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-1" d="M2.148,67.79c-6.5-3.873,3.333-51.582,35.7-64.084,7.869-3.039,20.244-5.27,32.042,0,9.869,4.409,22.9,15.479,20.141,25.634C88.282,35.8,80.315,41.292,73.556,40.326c-5.818-.832-7.942-6.419-11.9-8.24C42.754,23.4,9.5,72.173,2.148,67.79Z"/>
                                </g>
                            </svg>
                            <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" width="91" height="69" viewBox="0 0 91 69">
                                <g>
                                    <path class="svg-path-2" d="M88.258,0.506c6.5,3.874-3.333,51.582-35.7,64.084-7.869,3.039-20.244,5.27-32.042,0C10.644,60.181-2.383,49.111.372,38.956,2.124,32.5,10.091,27,16.851,27.97c5.818,0.832,7.942,6.419,11.9,8.24C47.652,44.9,80.9-3.877,88.258.506Z"/>
                                </g>
                            </svg>

                        </div>
                        <div class="clients-name">
                            <h6>Neslihan Tepeli</h6>
                            <span>İç Mimar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home2-blog-area pt-50 pb-50">
        <div class="container">
            <div class="blog-top-title">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="bixol-title-area">
                            <span class="bixol-subtitle">{{ __('site.firma') }}</span>
                            <h3 style="font-size :24px">FSR Hijyen Grup, Türkiye'de faaliyet gösteren bir temizlik ve hijyen firmasıdır.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home2-blog-slider">
                @for($i=1;$i <= 8;$i++)
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/haberler.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i>{{ rand(1,12) }} {{ rand(1,31) }},2023</span>
                            <span><i class="fas fa-eye"></i>{{ rand(25,132) }} Görüntülenme</span>
                        </div>
                        <div class="blog-title">
                            <a href="{{ route('home') }}"><h5>Haber Duyuru Başlık {{ $i }}</h5></a>
                        </div>
                        <div class="readmore-btn">
                            <a href="{{ route('home') }}">Devamını Oku <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="home2-blog-area pb-30">
            <div class="home2-fabrika-slider">
                @for($i=1;$i <= 18;$i++)
                <div class="blog-single-item">
                    <div class="thumb-wrapper">
                        <a href="{{ route('home') }}"><img src="/fabrika/fabrika{{ $i }}.jpg"  alt="{{ __('site.firma') }}"></a>
                    </div>
                </div>
                @endfor

            </div>
    </section>

    <section class="bixol-gta-area" data-background="/iletisimback.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6">
                    <div class="bixol-gt-right">
                        <h4>İletişim & Bilgi Formu</h4>
                        <form action="#">
                            <input type="text" name="fname" placeholder="Adınız Soyadınız*">
                            <input type="text" name="pnumber" placeholder="Firma Kurum Adı">
                            <input type="text" name="asd" placeholder="Telefon Numaranız">
                            <input type="text" name="aaa" placeholder="Email Adresiniz...">
                            <textarea placeholder="Mesajınız..." rows="5"></textarea>
                            <button type="submit" class="bixol-primary-btn submit-btn">Gönder <span><i class="fab fa-telegram-plane"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('customJS')
    <script src="/frontend/js/vendor/before-after.js"></script>
    <script src="/frontend/js/vendor/odometer.min.js"></script>

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
