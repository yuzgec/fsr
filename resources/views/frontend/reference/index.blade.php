@extends('frontend.layout.app')
@section('content')
    <div class="bixol-breadcrumb" data-background="/title.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{__('site.referanslar')}}</h1>
                <a href="{{ route('home') }}">{{__('site.anasayfa')}} <i class="fas fa-angle-double-right"></i></a>
                <a href="#">{{__('site.kurumsal')}} <i class="fas fa-angle-double-right"></i></a>
                <span>{{__('site.referanslar')}}</span>
            </div>
        </div>
    </div>
@endsection
