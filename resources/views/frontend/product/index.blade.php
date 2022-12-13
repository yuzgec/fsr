@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="">
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
                    <div class="col-6">
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
                                <div class="col-12">
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
                    <div class="col-6">
                        <div class="col-md-12 mb-3" style="border-bottom:1px dashed gray"></div>
                        {!! $Detay->desc !!}
                        <div class="col-md-12 mt-3" style="border-bottom:1px dashed gray"></div>
                        <p>Ürün Kategori : </p>
                    </div>
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
