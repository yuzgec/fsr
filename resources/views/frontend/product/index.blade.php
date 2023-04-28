@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/urunlerback.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.urunkategorileri')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="portfolio-area pb-50">
        <div class="pswp-gallery" id="gallery">
            <div class="container mt-50">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card" style="box-shadow: 3px 3px 3px #f4f4f4">
                            <div class="col-12">
                                <div class="pswp-gallery__item">
                                    <a
                                        href="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'img')}}"
                                        data-pswp-width="750"
                                        data-pswp-height="750"
                                        target="_blank">
                                        <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'img')}}" alt="">
                                    </a>
                                    <span style="position: absolute;top:20px;right:20px">
                                       <i class="fas fa-search"></i>
                                    </span>
                                </div>
                            </div>
                            @foreach($Detay->getMedia('gallery') as $item)
                                <div class="col-12" style="display: none">
                                    <div class="pswp-gallery__item">
                                        <a
                                            href="{{ $item->getUrl('img') }}"
                                            data-pswp-width="750"
                                            data-pswp-height="750"
                                            target="_blank">
                                            <img src="{{ $item->getUrl('thumb') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="col-md-12 mb-3" style="border-bottom:1px dashed gray"></div>
                        <h3>{{ $Detay->title }}</h3>
                        {!! $Detay->desc !!}
                        <div class="col-md-12 mt-3" style="border-bottom:1px dashed gray"></div>
                        @if($Detay->sku )
                        <span>Ürün SKU : <b>{{ $Detay->sku }}</b></span><br>
                        @endif
                        @if($Detay->option_1 )
                        <span>Ürün Miktarı : <b>{{ $Detay->option_1 }}</b></span><br>
                        @endif
                        <span>Ürün Kategori : </span><br>
                        {{--<span>Ürün Etiketleri :</span>--}}
                    </div>

                    <div class="col-12 mt-100">
                       <div class="d-none d-sm-block">
                           <img src="{{  $Detay->getFirstMediaUrl('web_tr') }}" class="img-fluid">
                       </div>
                       <div class="d-block d-sm-none">
                           <img src="{{  $Detay->getFirstMediaUrl('mobil_tr') }}" class="img-fluid">
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
                    <h3 class="mb-30 text-center">Benzer Ürünler</h3>
                    @foreach($Product as $item)
                        <div class="col-lg-3 col-md-6" >
                            <div class="h4-blog-column" style="border-radius: 20px">
                                <div class="thumb-wrapper" style="border-radius: 20px 20px 0 0 ">
                                    <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page')}}">
                                    </a>
                                </div>
                                <div class="blog-content text-center">
                                    <div class="h6-headline">
                                        <a href="{{ route('productdetail', $item->slug) }}" title="{{ $item->title }}">
                                            <h6>{{ $item->title }}</h6>
                                        </a>
                                    </div>
                                    {{ $Detay->title }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@section('customCSS')
    <link rel="stylesheet" href="{{ url('/frontend/css') }}/photoswipe.css">
    <style>
        .pswp-gallery__item {
            margin: 0 10px 10px 0;
        }
    </style>
@endsection

@section('customJS')
    <script type="module">
        import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.3.0/dist/photoswipe-lightbox.esm.js';
        import PhotoSwipeDynamicCaption from '{{ url('/frontend/js') }}/photoswipe-dynamic-caption-plugin.esm.min.js';

        const smallScreenPadding = {
            top: 0, bottom: 0, left: 0, right: 0
        };
        const largeScreenPadding = {
            top: 30, bottom: 30, left: 0, right: 0
        };
        const lightbox = new PhotoSwipeLightbox({
            gallerySelector: '#gallery',
            childSelector: '.pswp-gallery__item',

            // optionaly adjust viewport
            paddingFn: (viewportSize) => {
                return viewportSize.x < 700 ? smallScreenPadding : largeScreenPadding
            },
            pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5.3.0/dist/photoswipe.esm.js')
        });

        const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
            mobileLayoutBreakpoint: 700,
            type: 'auto',
            mobileCaptionOverlapRatio: 1
        });

        lightbox.init();
    </script>
@endsection
