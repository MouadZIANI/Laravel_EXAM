<header class="toolbar-1">
    <div id="main-toolbar" class="mdc-elevation--z2">
        <div class="theme-container row between-xs middle-xs h-100">
            <h2 class="text-white btn-link">
                Student COLOCO
            </h2>
            <div class="horizontal-menu d-none d-md-flex d-lg-flex d-xl-flex">
                <div class="mdc-menu-surface--anchor">
                    <a href="{{ route('front.pages.home') }}" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Home</span>
                    </a>
                </div>
                <div class="mdc-menu-surface--anchor">
                    <a href="{{ route('front.pages.offers') }}" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Offers</span>
                    </a>
                </div>
                <div class="mdc-menu-surface--anchor">
                    <a href="{{ route('front.pages.demands') }}" class="mdc-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Demands</span>
                    </a>
                </div>
            </div>
            <div class="row middle-xs horizontal-menu">
                @guest
                    <div class="mdc-menu-surface--anchor">
                        <a href="{{ route('register') }}" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Register</span>
                        </a>
                    </div>
                    <div class="mdc-menu-surface--anchor">
                        <a href="{{ route('login') }}" class="mdc-button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Login</span>
                        </a>
                    </div>
                @else
                    <div class="mdc-menu-surface--anchor">
                        <a href="javascript:void(0);" class="mdc-button menu-item-has-children">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="mdc-menu mdc-menu-surface">
                            <div class="mdc-list">
                                <div>
                                    <a href="{{ route('front.account.profile') }}" class="mdc-button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">My account</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mdc-button">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>
