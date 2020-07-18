@extends('front.account.account_layout')

@section('account_main_section')
    <div class="page-sidenav-content">
        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button>
            <h3 class="fw-500">My Account</h3>
        </div>
        <div class="mdc-card p-3 row mb-3">
            <div class="col-xs-12 col-md-12">
                <h2 class="text-muted text-left fw-600 mb-3">Account details</h2>
                <form action="javascript:void(0);">
                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                        <input class="mdc-text-field__input" name="name" value="{{ auth()->user()->name }}">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                        <input class="mdc-text-field__input" name="email" value="{{ auth()->user()->email }}">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Email</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                        <input class="mdc-text-field__input" name="password" type="password">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">New Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc-text-field mdc-text-field--outlined w-100 custom-field my-2">
                        <input class="mdc-text-field__input" name="password_confirmation" type="password">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Confirm New Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="row around-xs p-2 mb-3">
                        <button class="mdc-button mdc-button--raised" type="button">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Update Account informations</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
