@extends('front.layout.master')

@section('content')
    <main class="content-offset-to-top">
        <div class="header-image-wrapper">
            <div class="bg bg-anime"></div>
            <div class="mask"></div>
            <div class="header-image-content mt-3 home-page offset-bottom" style="min-height: 350px;">
                <h1 class="title">Find your house online</h1>
                <p class="desc">Leading Real Estate Company</p>
            </div>
            <div class="theme-container mb-6">
                <div class="mdc-card main-content-header">
                    <form action="{{ route('front.pages.offers') }}" method="get" id="filters" class="search-wrapper">
                        <div class="row">
                            <div class="col-xs-6 p-2 pt-3">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="keyword" value="{{ request()->get('keyword') }}">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Keyword</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 p-2 pt-3">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="min_price" value="{{ request()->get('min_price') }}">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Min Price</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 p-2 pt-3">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="max_price" value="{{ request()->get('max_price') }}">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Max Price</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 p-2 pt-3">
                                <button class="mdc-button mdc-button--raised w-100 h-100" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <i class="material-icons mdc-button__icon">search</i>
                                    <span class="mdc-button__label">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="section mt-0">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Latest Offers</h1>
                    <div class="properties-wrapper row">
                        @foreach($offers as $offer)
                            <div class="row item col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <div class="mdc-card property-item grid-item column-4 full-width-page">
                                    <div class="thumbnail-section">
                                        <div class="property-image">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    @foreach($offer->images as $image)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset($image) }}" style="height: 200px" alt="slide image" data-src="{{ asset($image) }}" class="slide-item swiper-lazy">
                                                            <div class="swiper-lazy-preloader"></div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination white"></div>
                                                <button class="mdc-icon-button swiper-button-prev swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_left</i></button>
                                                <button class="mdc-icon-button swiper-button-next swipe-arrow"><i class="material-icons mat-icon-lg">keyboard_arrow_right</i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-content-wrapper">
                                        <div class="property-content">
                                            <div class="content">
                                                <h1 class="title"><a href="#">{{ $offer->title }}</a></h1>
                                                <p class="row address flex-nowrap">
                                                    <i class="material-icons text-muted">location_on</i>
                                                    <span>{{ $offer->excerpt }}</span>
                                                </p>
                                                <div class="row between-xs middle-xs">
                                                    <h3 class="primary-color price">
                                                        <span>{{ $offer->price . ' ' . $offer->currency }} / month</span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="grow"></div>
                                            <div class="actions row between-xs middle-xs">
                                                <p class="row date mb-0">
                                                    <i class="material-icons text-muted">date_range</i>
                                                    <span class="mx-2">{{ $offer->created_at->format('d / m / Y')  }}</span>
                                                </p>
                                                <a href="javascript:void(0);" class="mdc-button mdc-button--outlined">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label">Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="section default mt-0">
            <div class="px-3">
                <div class="theme-container">
                    <h1 class="section-title">Demands</h1>
                    <div class="p-0 row o-hidden">
                        @foreach($demands as $demand)
                        <div class="row item col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-3">
                            <div class="mdc-card property-item grid-item column-4 full-width-page">
                                <div class="property-content-wrapper">
                                    <div class="property-content">
                                        <div class="content">
                                            <h1 class="title mb-2"><a href="#">{{ $demand->title }}</a></h1>
                                            <p class="row flex-nowrap">{{ $demand->description }}</p>
                                            <div class="row between-xs middle-xs">
                                                <h3 class="primary-color price">
                                                    <span>{{ $demand->budget }} DH</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="grow"></div>
                                        <div class="actions row between-xs middle-xs">
                                            <p class="row date mb-0">
                                                <i class="material-icons text-muted">contact_phone</i>
                                                <span class="mx-2">{{ $demand->user->name }} - {{ $demand->phone_number }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
