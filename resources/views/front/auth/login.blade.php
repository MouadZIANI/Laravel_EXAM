@extends('front.layout.master')

@section('content')
    <main class="mb-7 mt-7">
        <div class="px-3 mt-7">
            <div class="theme-container">
                <div class="row center-xs middle-xs my-5">
                    <div class="mdc-card p-3 p-relative mw-500px">
                        <div class="column center-xs middle-xs text-center">
                            <h1 class="uppercase">Sign In</h1>
                            <a href="{{ route('register') }}" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                                Don't have an account? Sign up now!
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
                                <input class="mdc-text-field__input" name="email">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">E-mail</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
                                <input class="mdc-text-field__input" name="password" type="password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-form-field mt-3 w-100">
                                <div class="mdc-checkbox">
                                    <input type="checkbox" class="mdc-checkbox__native-control" id="keep"/>
                                    <div class="mdc-checkbox__background">
                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                        </svg>
                                        <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                    <div class="mdc-checkbox__ripple"></div>
                                </div>
                                <label for="keep" name="remember" class="text-muted fw-500">Keep me signed in</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Sign to My Account</span>
                                </button>
                                <a href="#" class="mdc-button mdc-button--raised bg-info">
                                    <span class="mdc-button__ripple"></span>
                                    <i class="material-icons mdc-button__icon">vpn_key</i>
                                    <span class="mdc-button__label">Reset Password</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </main>
@endsection
