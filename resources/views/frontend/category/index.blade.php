@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="{{ $Detay->getFirstMediaUrl('cover') }}">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.urunkategorileri')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="h4-blog-area pt-30 pb-50">
        <div class="container">
            <div class="h4-blogs">
                <div class="row">
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

    <div class="bixol-case-study" >
        <div class="container" style="padding-bottom: 580px;background-image: url('/fsr-world.jpg');background-repeat: no-repeat">

        </div>
    </div>
@endsection
