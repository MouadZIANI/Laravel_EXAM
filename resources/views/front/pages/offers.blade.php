@extends('front.layout.master')

@section('content')
    <main>
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url({{ asset('front/assets/images/carousel/slide-3.jpg') }});"></div>
            <div class="mask"></div>
            <div class="header-image-content mh-200">
                <h1>Available offers</h1>
            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card">
                            <form action="{{ route('front.pages.offers') }}" method="get" id="filters" class="search-wrapper m-0 o-hidden">
                                <div class="column p-2">
                                    <div class="row">
                                        <div class="col-xs-12 pt-2">
                                            <h3>Filter </h3>
                                        </div>
                                        <div class="col-xs-12 p-2 pt-3">
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
                                        <div class="col-xs-6 p-2 pt-3">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input class="mdc-text-field__input" name="min_price" value="{{ request()->get('min_price') }}">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label class="mdc-floating-label">Keyword</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 p-2 pt-3">
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
                                    </div>
                                    <div class="col-xs-12 mb-2">
                                        <p class="uppercase m-2 fw-500">Features</p>
                                        <div class="features column">
                                            @foreach(Constant::FEATURES as $feautre)
                                                <div class="mdc-form-field">
                                                    <div class="mdc-checkbox">
                                                        <input type="checkbox" class="mdc-checkbox__native-control" name="feautres[]" id="{{ $feautre }}" value="{{ $feautre }}"/>
                                                        <div class="mdc-checkbox__background">
                                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                                <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                            </svg>
                                                            <div class="mdc-checkbox__mixedmark"></div>
                                                        </div>
                                                        <div class="mdc-checkbox__ripple"></div>
                                                    </div>
                                                    <label for="{{ $feautre }}">{{ $feautre }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row around-xs middle-xs p-2 mb-3">
                                    <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Clear</span>
                                    </button>
                                    <button class="mdc-button mdc-button--raised" type="submit">
                                        <span class="mdc-button__ripple"></span>
                                        <i class="material-icons mdc-button__icon">search</i>
                                        <span class="mdc-button__label">Search</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                    <div class="page-sidenav-content">
                        <div class="properties-wrapper row mt-0">
                            <div class="row px-2 w-100">
                                <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted">
                                    <button id="page-sidenav-toggle" class="mdc-icon-button material-icons d-md-none d-lg-none d-xl-none">
                                        more_vert
                                    </button>
                                    <div class="mdc-menu-surface--anchor">
                                        <button class="mdc-button mdc-ripple-surface text-muted mutable">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label"><span class="mutable">Sort by Default</span></span>
                                            <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                                        </button>
                                        <div class="mdc-menu mdc-menu-surface">
                                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Sort by Default</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Newest</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Oldest</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Popular</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (Low to High)</span>
                                                </li>
                                                <li class="mdc-list-item" role="menuitem">
                                                    <span class="mdc-list-item__text">Price (High to Low)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
                                        <div class="mdc-menu-surface--anchor">
                                            <button class="mdc-button mdc-ripple-surface text-muted">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label">Show<span class="mx-2 mutable">8</span></span>
                                                <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                                            </button>
                                            <div class="mdc-menu mdc-menu-surface">
                                                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">8</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">12</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">16</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">24</span>
                                                    </li>
                                                    <li class="mdc-list-item" role="menuitem">
                                                        <span class="mdc-list-item__text">36</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="mdc-icon-button material-icons view-type" data-view-type="list" data-col="1" data-full-width-page="false">view_list</button>
                                        <button class="mdc-icon-button view-type" data-view-type="grid" data-col="2" data-full-width-page="false">
                                            <svg class="material-icons mat-icon-sm" viewBox="0 0 25 25">
                                                <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3"/>
                                            </svg>
                                        </button>
                                        <button class="mdc-icon-button view-type material-icons d-none d-lg-flex d-xl-flex" data-view-type="grid" data-col="3" data-full-width-page="false">view_module</button>
                                    </div>
                                </div>
                            </div>
                            @foreach($offers as $offer)
                                <div class="row item col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="mdc-card property-item grid-item column-4 full-width-page">
                                        <div class="thumbnail-section">
                                            <div class="property-image">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        @foreach($offer->images as $image)
                                                            <div class="swiper-slide">
                                                                <img src="{{ asset($image) }}" alt="slide image" data-src="{{ asset($image) }}" style="height: 200px" class="slide-item swiper-lazy">
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
                                                    <h1 class="title">
                                                        <a href="{{ route('front.account.offers.show', $offer) }}">{{ $offer->title }}</a>
                                                    </h1>
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
        </div>
    </main>
@endsection
