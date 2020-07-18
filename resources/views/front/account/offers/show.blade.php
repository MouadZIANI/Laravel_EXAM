@extends('front.layout.master')

@section('content')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="page-drawer-container single-property mt-3">
                    <div class="page-sidenav-content">
                        <div class="mdc-card row between-xs middle-xs p-3">
                            <div>
                                <h2 class="uppercase">{{ $offer->title }}</h2>
                            </div>
                            <div class="column mx-3">
                                <h2 class="primary-color price">
                                    <span>{{ $offer->price . ' ' . $offer->currency }} / month</span>
                                </h2>
                            </div>
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons text-muted d-md-none d-lg-none d-xl-none">
                                more_vert
                            </button>
                        </div>
                        <div class="mdc-card p-3 mt-3">
                            <div class="main-carousel mb-3">
                                <div class="control-icons">
                                    <button class="mdc-button add-to-favorite" title="Add To Favorite">
                                        <i class="material-icons">favorite_border</i>
                                    </button>
                                    <button class="mdc-button" title="Add To Compare">
                                        <i class="material-icons">compare_arrows</i>
                                    </button>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($offer->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($image) }}" alt="slide image" data-src="{{ asset($image) }}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-prev swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_left</span>
                                    </button>
                                    <button class="swiper-button-next swipe-arrow mdc-fab mdc-fab--mini primary">
                                        <span class="mdc-fab__ripple"></span>
                                        <span class="mdc-fab__icon material-icons">keyboard_arrow_right</span>
                                    </button>
                                </div>
                            </div>

                            <div class="small-carousel">
                                <div id="small-carousel" class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($offer->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($image) }}" alt="slide image" data-src="{{ asset($image) }}" class="slide-item swiper-lazy">
                                                <div class="swiper-lazy-preloader"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mdc-card p-3 mt-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Description</h2>
                            <p>{{ $offer->address }}</p>
                        </div>
                        <div class="mdc-card p-3 mt-3">
                            <h2 class="uppercase text-center fw-500 mb-2">Location</h2>
                            <div id="contact-map"></div>
                        </div>
                    </div>
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <div class="widget mb-2">
                            <div class="mdc-card o-hidden">
                                <div class="p-3">
                                    <h2 class="fw-600 mb-2">{{ $offer->user->name }}</h2>
                                    <div class="divider"></div>
                                    <p class="row middle-xs mt-4"><i class="material-icons primary-color">email</i><span class="mx-2 text-muted fw-500">{{ $offer->user->email }}</span></p>
                                    <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">{{ $offer->phone_number }}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="mdc-card o-hidden">
                                <div class="p-3">
                                    <h2 class="fw-600 mb-2">Feautres</h2>
                                    <div class="divider"></div>
                                    <div class="row mt-4">
                                        @foreach($offer->feautres as $attribute)
                                            <div class="col-md-12 row middle-xs">
                                                <i class="material-icons mat-icon-sm primary-color">check</i>
                                                <span class="mx-2">{{ $attribute }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                </div>
            </div>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('js')
    <script>
        function initMap() {
            var coordinates = new google.maps.LatLng("{{ $offer->long }}", {{ $offer->lat }});
            var contact_map = new google.maps.Map(document.getElementById('contact-map'), {
                center: coordinates,
                zoom: 17
            });

            marker = new google.maps.Marker({
                position: coordinates,
                map: contact_map
            });

        }
    </script>
@endsection
