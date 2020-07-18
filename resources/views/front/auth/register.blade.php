@extends('front.layout.master')

@section('content')
    <main class="mb-7 mt-7">
        <div class="px-3">
            <div class="theme-container">
                <div class="row center-xs middle-xs my-5">
                    <div class="mdc-card p-3 p-relative mw-500px">
                        <div class="column center-xs middle-xs text-center">
                            <h1 class="uppercase">Register</h1>
                            <a href="{{ route('login') }}" class="mdc-button mdc-ripple-surface mdc-ripple-surface--accent accent-color normal w-100">
                                Already have an account? Sign in!
                            </a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                                <i class="material-icons mdc-text-field__icon text-muted">person</i>
                                <input class="mdc-text-field__input" name="name">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Username</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                                <i class="material-icons mdc-text-field__icon text-muted">email</i>
                                <input class="mdc-text-field__input" name="email">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Email</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1">visibility_off</i>
                                <input class="mdc-text-field__input" name="password" type="password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                                <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                                <i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1">visibility_off</i>
                                <input class="mdc-text-field__input" name="password_confirmation" type="password">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Confirm Password</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label">Create an Account</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
