@extends('front.layout.master')

@section('content')
    <main>
        <div class="px-3">
            <div class="theme-container">
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card">
                            <div class="row start-xs middle-xs p-3">
                                <img src="{{ asset('front/assets/images/others/user.jpg') }}" alt="user-image" class="avatar">
                                <h2 class="text-muted fw-500 mx-3">{{ auth()->user()->name }}</h2>
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
                                <li>
                                    <a href="{{ route('front.account.profile') }}" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.account.offers.index') }}" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">favorite</span>
                                        <span class="mdc-list-item__text">My Offers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.account.offers.create') }}" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Add new offer</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.account.demands.index') }}" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">favorite</span>
                                        <span class="mdc-list-item__text">My Demands</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.account.demands.create') }}" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Add new demand</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                    @yield('account_main_section')
                </div>
            </div>
        </div>
    </main>
@endsection
