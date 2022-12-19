<!-- Header -->
<header class="bixol-header bg-sticky-white">
    <div class="bixol-info-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                   {{-- <div class="bixol-info-left">
                        <p>{{ __('site.firma') }}</p>
                    </div>--}}
                </div>
                <div class="col-sm-4">
                    <div class="bixol-info-social">
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="text-white" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, '/demo', [], true) }}">
                                {{ $localeCode }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bixol-header-top">
        <div class="container">
            <div class="bixol-header-top-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bixol-header-top-left">
                            <div class="bixol-header-item">
                                <span class="bixol-icon-wrapper">
                                    <i class="flaticon flaticon-phone"></i>
                                </span>
                                <div class="bixol-item-content">
                                    <label>{{ __('site.telefon') }}:</label>
                                    <span>{{ config('settings.telefon1') }} </span>
                                </div>
                                <a href="tel:1234563257"></a>
                            </div>
                            <div class="bixol-header-item">
                                <span class="bixol-icon-wrapper">
                                    <i class="flaticon flaticon-phone"></i>
                                </span>
                                <div class="bixol-item-content">
                                    <label>{{ __('site.telefon') }}:</label>
                                    <span>{{ config('settings.telefon2') }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bixol-header-top-right">
                            <div class="bixol-header-item">
                                        <span class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-mail"></i>
                                        </span>
                                <div class="bixol-item-content">
                                    <label>{{ __('site.email') }}</label>
                                    <span>{{ config('settings.email1') }}</span>
                                </div>
                                <a href="tel:1234563257"></a>
                            </div>
                            <div class="bixol-header-item">
                                        <span class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-pin"></i>
                                        </span>
                                <div class="bixol-item-content">
                                    <label>{{ config('settings.adres1') }}</label>
                                    <span>İZMİR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Menu -->
    <div class="bixol-navigation">
        <div class="container">
            <div class="bixol-nav">
                <a href="{{ route('home') }}" class="bixol-header-logo">
                    <img src="/logo.png" alt="{{ config('app.name') }}">
                </a>
                <nav class="desktop-menu">
                    <ul>
                        <li><a href="{{ route('home') }}">{{ __('site.anasayfa') }}</a></li>
                        <li class="has-submenu"><a href="#">{{ __('site.kurumsal') }}</a>
                            <ul>
                                @foreach($Pages->where('category', 1) as $item)
                                    <li><a href="{{ route('corporatedetail',$item->slug) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        @foreach($ProductCategory->where('parent_id', 0) as $row)
                            <li class="has-submenu"><a href="{{ route('categorydetail',$row->slug) }}">{{ $row->title }}</a>
                                <ul>
                                    @foreach($ProductCategory->where('parent_id', $row->id) as $item)
                                        <li>
                                            <a href="{{ route('categorydetail', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li><a href="{{ route('contactus') }}">{{ __('site.iletisim') }}</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bixol-mobile-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a href="{{ route('home') }}" class="bixol-logo">
                            <img src="/mobil_logo.png" alt="{{ __('site.firma') }}">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="bixol-mobile-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="bixol-mobile-menu">
    <a href="{{ route('home') }}" class="mobile-menu-logo">
        <img src="/mobil_logo.png" alt="{{ config('app.name') }}" style="width: 150px">
    </a>
    <ul>
        <li><a href="{{ route('home') }}">{{ __('site.anasayfa') }}</a></li>
        <li class="has-submenu"><a href="#">{{ __('site.kurumsal') }}</a>
            <ul>
                @foreach($Pages->where('category', 1) as $item)
                    <li><a href="{{ route('corporatedetail',$item->slug) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </li>

        @foreach($ProductCategory->where('parent_id', 0) as $row)
            <li class="has-submenu"><a href="{{ route('categorydetail',$row->slug) }}">{{ $row->title }}</a>
                <ul>
                    @foreach($ProductCategory->where('parent_id', $row->id) as $item)
                        <li>
                            <a href="{{ route('categorydetail', $item->slug) }}">
                                {{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        <li><a href="{{ route('contactus') }}">{{ __('site.iletisim') }}</a></li>
    </ul>
</div>
