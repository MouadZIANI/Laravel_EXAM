@extends('front.account.account_layout')

@section('account_main_section')
    <div class="page-sidenav-content mb-5">
        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button>
            <h3 class="fw-500">Add new offer</h3>
        </div>
        <div class="mdc-card p-3">
            <form action="{{ route('front.account.demands.store') }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 mb-3">
                    <h2 class="fw-500 text-left">Add new demand</h2>
                </div>
                <div class="col-md-12 p-2">
                    <div class="mdc-text-field w-100 mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="title">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Title</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-2">
                    <div class="mdc-text-field w-100 mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="phone_number">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Phone Number</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="mdc-text-field w-100 mdc-text-field--outlined">
                        <input class="mdc-text-field__input" name="budget">
                        <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Budget</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 p-2">
                    <div class="mdc-text-field w-100 mdc-text-field--outlined mdc-text-field--textarea">
                        <textarea class="mdc-text-field__input" name="description" rows="5"></textarea>
                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Description</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 p-2 mt-3 end-xs">
                    <button class="mdc-button mdc-button--raised next-tab" type="submit">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">Save</span>
                        <i class="material-icons mdc-button__icon">navigate_next</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
